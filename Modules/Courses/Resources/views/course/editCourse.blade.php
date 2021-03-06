@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  Edit Course
              </h4>
          </div>
      </div>
  </div>
</div>
    <div class="content">
      <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Add Course</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-8 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.updateCourse',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-12 col-xl-12">
                      <select name="school" id="school" value="{{ $data->school }}" class="form-control form-control-alt text-uppercase">
                        <option selected disabled> Select School</option>
                        @foreach ($schools as $school)
                          <option value="{{ $school->name }}">{{ $school->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="department" id="department" value="{{ $data->department }}" class="form-control form-control-alt text-uppercase">
                        <option selected disabled> Select Department</option>
                        @foreach ($departments as $department)
                        <option value="{{ $department->name }}">{{ $department->name }}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <input type = "text" class = "form-control form-control-alt text-uppercase" id = "course_name"value = "{{$data->course_name}}" name="course_name" placeholder="Course Name">
                    </div>
                    <div class="col-12 col-xl-12">
                        <input type = "text" class = "form-control form-control-alt text-uppercase" id = "course_code" value = "{{$data->course_code}}" name="course_code" placeholder="Course Code">
                      </div>
                      <div class="col-12 col-xl-12">
                        <input type = "text" class = "form-control form-control-alt text-uppercase" id = "course_duration" value = "{{$data->course_duration}}"name="course_duration" placeholder="Course Duration">
                      </div>
                      <div class="col-12 col-xl-12">
                        <textarea value = "{{$data->course_requirements}}" class = "form-control form-control-alt text-uppercase" id="course_requirements" name="course_requirements" placeholder="Course Requirements"></textarea>
                      </div>
                      </div>
                <div class="col-lg-4">
                    <div class="col-12 col-xl-12">
                      <input type="text" value = "{{$data->subject1}}" class="form-control form-control-alt text-uppercase" id="subject1" name="subject1" placeholder="subject1">
                    </div>
                    <br>
                    <div class="col-12 col-xl-12">
                      <input type="text"value = "{{$data->subject2}}"class="form-control form-control-alt text-uppercase" id="subject2" name="subject2" placeholder="subject2">
                    </div><br>
                    <div class="col-12 col-xl-12">
                      <select value = "{{$data->subject3}}" name="subject3" id="subject3"class="form-control form-control-alt form-select text-uppercase">
                      <option value="" selected disabled>Choose One Humanity</option>
                      <option value="Geo">Geo</option>
                      <option value="His">His</option>
                      <option value="CRE">CRE</option>
                    </select>
                    </div><br>
                    <div class="col-12 col-xl-12">
                      <select value = "{{$data->subject4}}" name="subject4" id="subject4"class="form-control form-select form-control-alt text-uppercase">
                      <option value="" selected disabled>Choose One Science</option>
                      <option value="Phy">Phy</option>
                      <option value="Chem">Chem</option>
                      <option value="Bio">Bio</option>
                    </select>
                    </div><br>

                    {{-- <p class="p-2">

                      <b>KEY:</b>  <br>
                      Format to key in cluster subjects <br>
                     <span class="small">
                        MAT B+ <br>
                        ENG A-
                      </span>

                    </p> --}}
                </div>
                      <div class="col-12 text-center p-3">
                        <button type="submit" class="btn btn-alt-success" data-toggle="click-ripple">Update Course</button>
                      </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
