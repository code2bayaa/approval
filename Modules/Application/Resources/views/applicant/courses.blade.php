@extends('application::layouts.backend')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h5 fw-bold mb-2">
                        Courses
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Courses</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            All Courses
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
<<<<<<< HEAD
                    <table class="table table-responsive-md table-borderless table-striped">
                        @if(count($data)> 0)
                            <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>School</th>
                                <th>Department</th>
                                <th>Duration</th>
                                <th>Requirement</th>
                                <th>Course Type</th>
                                <th> Apply</th>
                            </tr>
                            </thead>
                        <tbody>
                            @foreach ($data as $course)
                                <tr>
                                    <td> {{ $course->course_code }}</td>
                                    <td> {{ $course->course_name }}</td>
                                    <td> {{ $course->school_id }}</td>
                                    <td> {{ $course->department_id }}</td>
                                    <td> {{ $course->course_duration }}</td>
                                    <td> {{ $course->course_requirements }}</td>
                                    <td> Full Time</td>
                                    <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="{{ route('application.apply', $course->id) }}">Apply now </a> </td>
                                </tr>
                            @endforeach
                        @else

                            <span class="fw-light small text-center">
                            There are no courses on offer
                        </span>
                        @endif
                        </tbody>
                    </table>
                </div>
=======
            <table class="table table-borderless table-striped js-dataTable-responsive">
                @if(count($active)>0)
                    <tr>
                        <th>Course name</th>
                        <th>Department</th>
                        <th>School</th>
                        <th>Campus</th>
                        <th>Intake</th>
                        <th>Duration</th>
<<<<<<< HEAD
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                    @foreach($data as $course)

                        @foreach($course as $item)
                            <tr>
=======
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach($courses as $course)
                        @foreach($course as $item)
                           <tr>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                                <td> {{ $item->course_name }}</td>
                                <td> {{ $item->department_id }}</td>
                                <td> {{ $item->school_id }}</td>
                                <td> {{ $item->campus_id }}</td>
<<<<<<< HEAD
                                <td> {{ $item->$intake }}</td>
                                <td> {{ $item->course_duration }}</td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-secondary" href="{{ route('application.viewOne', $item->id) }}">View </a> </td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="{{ route('application.apply', $item->id) }}">Apply now </a> </td>
                            </tr>
=======
                                <td></td>
                                <td> {{ $item->course_duration }}</td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-secondary" href="{{ route('application.viewOne', $item->id) }}">View </a> </td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="{{ route('application.apply', $item->id) }}">Apply now </a> </td>
                           </tr>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                        @endforeach
                    @endforeach
                @else
                <tr>
                    <small class="text-center text-muted">There are no courses on offer</small>
                </tr>
                @endif
        </table>
        </div>
>>>>>>> b5a1e29eac0f6f403b7eb9d5d6320d9b3c3d5be7
            </div>
        </div>
    </div>
@endsection

