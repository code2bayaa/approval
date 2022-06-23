@extends('application::layouts.backend')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Update your personal details
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Update profile
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="d-flex justify-content-center">
            <span class="alert alert-danger"> <i class="fa fa-info-circle"></i> Please ensure that you update your profile within 72hours or the account will be deleted permanently. </span>
        </div>
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form Grid with Labels -->
                        <form method="POST" action="{{ route('application.save') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-3">
                                    <label class="form-label">Title</label>
                                    <select class="form-control" name="title" required>
                                        <option selected="selected" disabled class="text-center"> -- select title --</option>
                                        <option @if(old('title') === 'Mr.') selected="selected" @endif value="Mr."> Mr.</option>
                                        <option @if(old('title') === 'Miss.') selected="selected" @endif value="Miss."> Miss. </option>
                                        <option @if(old('title') === 'Ms.') selected="selected" @endif value="Ms."> Ms. </option>
                                        <option @if(old('title') === 'Mrs.') selected="selected" @endif value="Mrs."> Mrs. </option>
                                        <option @if(old('title') === 'Dr.') selected="selected" @endif value="Dr.">Dr.</option>
                                        <option @if(old('title') === 'Prof.') selected="selected" @endif value="Prof."> Prof. </option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control" name="fname" required value="{{ old('fname') }}">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="mname" value="{{ old('mname') }}">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Surname</label>
                                    <input type="text" class="form-control" name="sname" value="{{ old('sname') }}" required>
                                </div>
                                <input type="hidden" value="{{ Auth::user()->mobile }}" name="index_number">
                                <input type="hidden" value="{{ Auth::user()->id_number }}" name="id_number">
                                <div class="col-3">
                                    <label class="form-label">Marital status</label>
                                    <select name="status" class="form-control" required>
                                        <option disabled selected class="text-center">-- select -- </option>
                                        <option @if(old('status') === 'Single') selected="selected" @endif value="single" >Single</option>
                                        <option @if(old('status') === 'Married') selected="selected" @endif value="married">Married</option>
                                        <option @if(old('status') === 'Divorced') selected="selected" @endif value="divorced" >Divorced</option>
                                        <option @if(old('status') === 'Separated') selected="selected" @endif value="separated" >Separated</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Gender</label>
                                    <div class="space-x-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Male" @if(old('gender') === 'Male') checked @endif required>
                                                <label class="form-check-label">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Female" @if(old('gender') === 'Female') checked @endif required>
                                                <label class="form-check-label">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Other" @if(old('gender') === 'Other') checked @endif required>
                                                <label class="form-check-label">Other</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Living with a disability? </label>
                                    <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disabled" value="No" @if(old('disabled') === 'No') checked @endif required>
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disabled" value="Yes" @if(old('disabled') === 'Yes') checked @endif required>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Nature of disability</label>
                                    <textarea class="form-control" name="disability" rows="1" placeholder="Describe here kind of disability" value="{{ old('disability') }}"></textarea>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Index/Registration number</label>
                                    <input type="text" class="form-control" name="index_number" value="{{ old('index_number') }}" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Alternative phone</label>
                                    <input type="text" class="form-control" name="alt_number" value="{{ old('alt_number') }}" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">ID/BIRTH CERT/Passport Number</label>
                                    <input type="text" class="form-control" name="id_number" value="{{ old('id_number') }}" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Physical address</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Nationality</label>
                                    <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">County</label>
                                    <input type="text" class="form-control" name="county" required value="{{ old('county') }}">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Sub-County</label>
                                    <input type="text" class="form-control" name="subcounty" value="{{ old('subcounty') }}">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Town</label>
                                    <input type="text" class="form-control" name="town" required value="{{ old('town') }}">
                                </div>
                                <div class="d-flex justify-content-md-center">
                                    <div class="col-md-4">
                                        <button class="form-control btn btn-alt-info col-3" type="submit"> Save </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Form Grid with Labels -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
