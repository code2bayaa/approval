<?php

namespace Modules\Approval\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Approval\Entities\Application;
use Modules\Approval\Entities\Course;
use Modules\Approval\Entities\Intake;
use DB;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('approval::index');
    }
   /*
    * First login redirect
    */
    public function dashboard(){

        if (Auth::check()) {

            if (Auth::user()->email_verified_at === null){
                Auth::logout();

                return redirect(route('root'))->with('warning', 'Please verify your email first');
            }
            if (Auth::user()->user_status === 0) {
                return redirect()->route('application.details')->with(['info' => 'Please update your profile']);

            } else {

                if(json_decode(Auth::guard('user')->user()->role_id)->role == 2)
                    return view('approval::cod.index');
                else
                    return view('approval::dean.index');

            }
            redirect()->route('application.login')->with('error', 'Please try again');
        }

    }
    /**
     *@views
     */
    public function pending(){
        $roles = json_decode(Auth::guard('user')->user()->role_id)->role;

       if ($roles == 2){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::cod.pending');
           }
       }
       if ($roles == 4){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::dean.pending');
           }
       }
    }
    public function approved(){
       $roles = json_decode(Auth::guard('user')->user()->role_id)->role;
       if ($roles == 2){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::cod.approved');
           }
       }
       if ($roles == 4){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::dean.approved');
           }
       }
    }
    public function rejected(){
       $roles = json_decode(Auth::guard('user')->user()->role_id)->role;
       if ($roles == 2){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::cod.rejected');
           }
       }
       if ($roles == 4){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::dean.rejected');
           }
       }
    }
    public function search(){
       $roles = json_decode(Auth::guard('user')->user()->role_id)->role;
       if ($roles == 2){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::cod.search');
           }
       }
       if ($roles == 4){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::dean.search');
           }
       }
    }
    public function viewPending(){
       $roles = json_decode(Auth::guard('user')->user()->role_id)->role;
       if ($roles == 2){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::cod.view');
           }
       }
       if ($roles == 4){
           if (!Auth::guard('user')->check()){
               abort(403);
           } else{
               return view('approval::dean.view');
           }
       }
    }
    public function searchValue(Request $request){
        $data = $request->json()->all();
        $value = $data['value'];
        $apps = DB::table('applicants')
                    ->leftJoin('applications', 'applicants.id', '=', 'applications.user_id')
              		->leftJoin('education', 'education.user_id', '=', 'applicants.id')
              		->leftJoin('work_experiences', 'work_experiences.user_id', '=', 'applicants.id')
                    ->where('id_number', 'LIKE', "%$value%")
                    ->orWhere('index_number', 'LIKE', "%$value%")
                    ->orWhere('fname', 'LIKE', "%$value%")
                    ->orWhere('mname', 'LIKE', "%$value%")
                    ->orWhere('sname', 'LIKE', "%$value%")
                    ->orWhere('county', 'LIKE', "%$value%")
                    ->orWhere('sub_county', 'LIKE', "%$value%")
                    ->orWhere('town', 'LIKE', "%$value%")
                    ->orWhere('address', 'LIKE', "%$value%")
                    ->orWhere('organization', 'LIKE', "%$value%")
                    ->get();
        print_r(json_encode(['user' => $apps, 'role' => json_decode(Auth::guard('user')->user()->role_id)->role, 'val' => $value]));
    }
    public function getApplication(Request $request){
        $data = $request->json()->all();
        $intakes = Intake::select('*')->where('id', $data['app'])->get();
        $department = json_decode(Auth::guard('user')->user()->role_id)->department; //Make sure the course is in its department
        $courses = [];
        $attendances_arr = [];
        foreach($intakes as $intake){
            if(gettype($intake['courses']) == "object"){
                foreach(json_decode($intake['courses']) as $id) {
                    $courses_data = DB::table('courses')
                        ->leftJoin('departments', 'departments.id', '=', 'courses.department_id')
                        ->where('name', '=', $department)
                        ->where('id', '=', $id)
                        ->get();
                    if (count($courses_data) > 0)
                        $courses[] = $courses_data;
                }
            }
            if(gettype($intake['attendances']) == "object"){
                foreach(json_decode($intake['attendances']) as $id) {
                    $attendances = DB::table('attendances')
                        ->where('id', '=', $id)
                        ->get();
                    if (count($attendances) > 0)
                        $attendances_arr[] = $attendances;
                }
            }
        }
        print_r(json_encode(['app' => $intakes, 'courses' => $courses, 'attendance' => $attendances_arr]));
    }
    public function candidate(Request $request){
        $data = $request->json()->all();
        $apps_count = [];
        $apps = [];
        $total = 0;

        $options = explode(',',$data['status']);
        foreach($options as $k => $opt){

            if($data['filter'] === 1){
                $total++;

                $apps_push = DB::table('applications')
                            ->leftJoin('applicants', 'applicants.id', '=', 'applications.user_id')
                            ->leftJoin('education', 'education.user_id', '=', 'applications.user_id')
                            ->leftJoin('work_experiences', 'work_experiences.user_id', '=', 'applications.user_id')
                            ->where('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->where('attendances', '=', (int)$data['attendance'])
                            ->orWhere('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->where('course', '=', $data['course'])
                            ->orWhere('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->where('year', '=', (int)$data['year'])
                            ->offset($data['offset'])
                            ->limit($data['limit'])
                            ->get();

                if(count($apps_push) > 0)
                    $apps[] = $apps_push;
                $apps_count[] = DB::table('applications')
                            ->leftJoin('applicants', 'applicants.id', '=', 'applications.user_id')
                            ->leftJoin('education', 'education.user_id', '=', 'applications.user_id')
                            ->leftJoin('work_experiences', 'work_experiences.user_id', '=', 'applications.user_id')
                            ->where('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->where('attendances', '=', (int)$data['attendance'])
                            ->orWhere('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->where('course', '=', $data['course'])
                            ->orWhere('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->where('year', '=', (int)$data['year'])
                            ->count();
            }else{
                $total++;
                $apps_push = DB::table('applications')
                            ->leftJoin('applicants', 'applicants.id', '=', 'applications.user_id')
                            ->leftJoin('education', 'education.id', '=', 'applications.user_id')
                            ->leftJoin('work_experiences', 'work_experiences.id', '=', 'applications.user_id')
                            ->where('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->offset($data['offset'])
                            ->limit($data['limit'])
                            ->get();
                if(count($apps_push) > 0)
                    $apps[] = $apps_push;
                $apps_count[] = DB::table('applications')
                            ->leftJoin('applicants', 'applicants.id', '=', 'applications.user_id')
                            ->leftJoin('education', 'education.id', '=', 'applications.user_id')
                            ->leftJoin('work_experiences', 'work_experiences.id', '=', 'applications.user_id')
                            ->where('intake_id', '=', (int)$data['intake'])
                            ->where('academic_program', '=', (int)$data['level'])
                            ->where('final_status', '=', (int)$opt)
                            ->count();
            }
        }

        $full_page = ($total * 100);
        $page_count = ceil(array_sum($apps_count)/$full_page);
        if($page_count < 1)
            $page_count = 1;

        print_r(json_encode(['user' => $apps, 'page' => $page_count, 'role' => json_decode(Auth::guard('user')->user()->role_id)->role]));

    }
    public function reject(Request $request){
        $data = $request->json()->all();
        $app = Application::select('*')->where('id', (int)$data['application'])->get();

        $status_arr = [];
        if(count($app) > 0)
            $status_arr = json_decode($app[0]['status']);

        $status = 2;
        $level = "COD";
        if(json_decode(Auth::guard('user')->user()->role_id)->role == 4){
            $status = 4;
            $level = "DEAN";
            //Check whether COD had rejected before
            if($app[0]['final_status'] === 9)
                $status = 8;
        }

        $status_arr[] = ["status" => $status, "reason" => $data['reason'], "date" => date("Y-m-d"), "level" => $level];

        $apps = DB::table('applications')
                      ->where('applications_id', (int)$data['application'])
                      ->update(['final_status' => $status, 'status' => json_encode($status_arr)]);
        $feedback = false;
        if($apps === 1)
            $feedback = true;
        print_r(json_encode(['user' => $feedback]));
    }
    public function approve(Request $request){
        $data = $request->json()->all();

        $app = Application::select('*')->where('id', (int)$data['application'])->get();

        $status_arr = [];
        if(count($app) > 0)
            $status_arr = json_decode($app[0]['status']);

        $status = 1;
        $level = "COD";
        if(json_decode(Auth::guard('user')->user()->role_id)->role == 4){
            $status = 3;
            $level = "DEAN";
            //Check whether COD had rejected before
            if($app[0]['final_status'] === 9)
                $status = 5;
        }

        $status_arr[] = ["status" => $status, "reason" => $data['reason'], "date" => date("Y-m-d"), "level" => $level];

        $apps = DB::table('applications')
                      ->where('applications_id', $data['application'])
                      ->update(['final_status' => $status, 'status' => json_encode($status_arr)]);
        $feedback = false;
        if($apps === 1)
            $feedback = true;
        print_r(json_encode(['user' => $feedback]));
    }
    public function push(Request $request){
        $data = $request->json()->all();
        $status = 0;
        //User is COD
        if(json_decode(Auth::guard('user')->user()->role_id)->role == 2){
            if($data['status'] == 1) //If COD Approved
                $status = 6;
            if($data['status'] == 2) //If COD Rejected
                $status = 9;
        }
        //User is Dean
        if(json_decode(Auth::guard('user')->user()->role_id)->role == 4){
            if($data['status'] == 3 || $data['status'] == 5) //If DEAN Approved
                $status = 7;
            if($data['status'] == 4 || $data['status'] == 8) //If DEAN Rejected
                $status = 10;
        }
        $apps = DB::table('applications')
                      ->where('applications_id', (int)$data['intake'])
                      ->where('final_status', (int)$data['status'])
                      ->update(['final_status' => $status]);

        $feedback = false;
        if($apps === 1)
            $feedback = true;
        print_r(json_encode(['now' => $feedback, 'we' => $apps, 'st' => $data['status']]));
    }
    public function getCourses(){
        $department = json_decode(Auth::guard('user')->user()->role_id)->department;
        $courses = DB::table('courses')
            ->leftJoin('departments', 'departments.id', '=', 'courses.department_id')
            ->where('name', '=', $department)
            ->get();
        print_r(json_encode(['course' => $courses]));
    }
    public function courses(){
        return view('approval::cod.courses');
    }
    public function fetchData(Request $request){

        $data = $request->json()->all();

        $collection = explode(',',$data['id']);
        $applications = [];

        $department = json_decode(Auth::guard('user')->user()->role_id)->department;
        $courses = DB::table('courses')
            ->leftJoin('departments', 'departments.id', '=', 'courses.department_id')
            ->where('name', '=', $department)
            ->get();

        foreach($collection as $item){
            foreach($courses as $course){
                $application_data = DB::table('applications')
                                ->leftJoin('intakes', 'applications.intake_id', '=', 'intakes.id')
                                ->where('final_status', '=', (int)$item)
                                ->where('course', '=', $course->course_name)
                                ->get();
                if(count($application_data) > 0)
                    $applications[] = $application_data;
            }
        }

        $fetched = [];

        if(count($applications) > 0){
            foreach($applications as $application){
                if(count($application) > 0){
                    foreach($application as $foundItem){

                        $intake = $foundItem->intake_name;
                        $intakeId = (int)$foundItem->intake_id;
                        $status = (int)$foundItem->final_status;
                        $programs = $foundItem->academic_program;
                        $start_date = $foundItem->intake_from;
                        $end_date = $foundItem->intake_to;

                        $start_time = strtotime($start_date);
                        $end_time = strtotime($end_date);
                        $sweet_date_start = date("D/M/Y",$start_time);
                        $sweet_date_end = date("D/M/Y",$end_time);
                        $id = $foundItem->id;

                        $expire = false;
                        if((date("Y-m-d") >= date("Y-m-d",$start_time)) && (date("Y-m-d") <= date("Y-m-d",$end_time)))
                            $expire = true;

                        if(in_array($intakeId,array_column($fetched,"intake"))){
                            $work_key = array_keys(array_column($fetched,"intake"),$intakeId)[0];
                            if(in_array($programs,array_column($fetched[$work_key]["academic"],"program"))){
                                $program_key = array_keys(array_column($fetched[$work_key]["academic"],"program"),$programs)[0];
                                $fetched[$work_key]["academic"][$program_key]["number"] = (int)$fetched[$work_key]["academic"][$program_key]["number"] + 1;
                            }else{
                                $fetched[$work_key]["academic"][] = [ "program" => $programs, "number" => 1];
                            }
                            $keys = array_column($fetched[$work_key]["academic"], 'program');
                            array_multisort($keys, SORT_ASC, $fetched[$work_key]["academic"]);
                        }else{
                            $fetched[] = array(
                                "intake" => $intakeId,
                                "name" => $intake,
                                "status" => $status,
                                "academic" => [
                                    [
                                        "program" => $programs,
                                        "number" => 1
                                    ]
                                ],
                                "start" => $sweet_date_start,
                                "end" => $sweet_date_end,
                                "id" => $id,
                                "expire" => $expire
                            );
                        }

                    }
                }
            }
        }

        $keys = array_column($fetched, 'start');
        array_multisort($keys, SORT_DESC, $fetched);
        print_r(json_encode(['list' => $fetched, 'extra' => $applications, 'course' => $courses]));

    }
    public function graph(){

        $department = json_decode(Auth::guard('user')->user()->role_id)->department;
        $courses = DB::table('courses')
            ->leftJoin('departments', 'departments.id', '=', 'courses.department_id')
            ->where('name', '=', $department)
            ->get();
        $applications = [];
        foreach($courses as $course){
            $applications_data = DB::table('applications')
                ->leftJoin('intakes', 'applications.intake_id', '=', 'intakes.id')
                ->where('course', '=', $course->course_name)
                ->get();
            if(count($applications_data) > 0)
                $applications[] = $applications_data;
        }
        $graphData = [];
        if(count($applications) > 0){
            foreach($applications as $application){
                if(count($application) > 0){
                    foreach($application as $foundItem){
                        $intake = $foundItem->intake_name;
                        $intake_id = $foundItem->intake_id;
                        $status = json_decode($foundItem->status);
                        $side = $foundItem->final_status;
                        $TIMESTAMP = $foundItem->created_at;
                        if(gettype($status) ==  'object')
                            $TIMESTAMP = $status[count($status) - 1]->date;
                        $time = strtotime($TIMESTAMP);
                        $c_time = date("Y-m-d",$time);
                        $c_year = date("Y",$time);
                        $approved = 0;
                        $rejected = 0;
                        $pending = 0;
                        if(json_decode(Auth::guard('user')->user()->role_id)->role == 2){
                            if($side === 2 || $side === 9)
                                $rejected = 1;
                            if($side === 0)
                                $pending = 1;
                            if($side === 1 || $side === 6)
                                $approved = 1;
                        }
                        if(json_decode(Auth::guard('user')->user()->role_id)->role == 4){
                            if($side === 4 || $side === 8 || $side === 10)
                                $rejected = 1;
                            if($side === 9 || $side === 6) //COD PUSHED APPROVED OR REJECTED
                                $pending = 1;
                            if($side === 3 || $side === 5 || $side === 7)
                                $approved = 1;
                        }
                        if(in_array($intake_id,array_column($graphData,"id"))){
                            $work_key = array_keys(array_column($graphData,"id"),$intake_id)[0];
                            $graphData[$work_key]["count"] = (int)$graphData[array_keys(array_column($graphData,"id"),$intake_id)[0]]["count"] + 1;
                            $graphData[$work_key]["approved"] = (int)$graphData[array_keys(array_column($graphData,"id"),$intake_id)[0]]["approved"] + (int)$approved;
                            $graphData[$work_key]["rejected"] = (int)$graphData[array_keys(array_column($graphData,"id"),$intake_id)[0]]["rejected"] + (int)$rejected;
                            $graphData[$work_key]["pending"] = (int)$graphData[array_keys(array_column($graphData,"id"),$intake_id)[0]]["pending"] + (int)$pending;
                            $graphData[$work_key]["year"] = $c_year;
                            $graphData[$work_key]["date"][] = $c_time;
                        }else{
                            $graphData[] = array(
                                "date" => [$c_time],
                                "year" => $c_year,
                                "count" => 1,
                                "intake" => $intake,
                                "id" => $intake_id,
                                "approved" => $approved,
                                "rejected" => $rejected,
                                "pending" => $pending
                            );
                        }
                    }
                }
            }
        }

        $keys = array_column($graphData, 'id');
        array_multisort($keys, SORT_DESC, $graphData);
        print_r(json_encode(['graph' => $graphData]));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('approval::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('approval::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('approval::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
