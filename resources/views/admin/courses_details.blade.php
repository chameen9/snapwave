@extends('admin.layouts.app')

@section('title', 'Courses')

@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18"><a href="{{route('admin.courses.index')}}" style="color: white; text-decoration: underline;">Courses</a> / Edit / {{$course->course_name}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome to {{ config('app.name') }} Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <form action="{{route('admin.course.update')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        {{csrf_field()}}
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Course</h4>

                        
                            <div class="row">
                                <div class="col-12">
                                    <label for="course-name">Course Name</label>
                                    <input type="text" name="course-name" id="course-name" class="form-control" value="{{$course->course_name}}" required>
                                    <div class="invalid-feedback">
                                        Course Name is Invalid
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <label for="course-overview">Overview (170-2000)</label>
                                    <textarea id="elm1" name="course-overview" required>{{ $course->course_overview }}</textarea>
                                    <div class="invalid-feedback">
                                        Overview is Invalid
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <label for="course-structure-text">Course Structure (Text)</label>
                                    <textarea name="course-structure-text" id="course-structure-text" class="form-control" maxlength="2000" minlength="170">{{ $course->course_structure }}</textarea>
                                    <div class="invalid-feedback">
                                        Course Structure is Invalid
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <label for="course-certification-text">Course Certification (Text)</label>
                                    <textarea name="course-certification-text" id="course-certification-text" class="form-control" maxlength="2000" minlength="170">{{ $course->course_certification }}</textarea>
                                    <div class="invalid-feedback">
                                        Course Certification is Invalid
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <label for="course-others-text">Others (Text)</label>
                                    <textarea name="course-others-text" id="course-others-text" class="form-control" maxlength="2000" minlength="170">{{ $course->course_others }}</textarea>
                                    <div class="invalid-feedback">
                                        Course Others is Invalid
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label for="course-category-id" class="form-label">Course Category</label>
                                    <select id="course-category-id" name="course-category-id" class="form-control" required>
                                        <option value="{{ $course->category_id }}">{{ $course->category_name }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="course-status" class="form-label">Status : <span id="course-currentStatus" class="badge font-size-12"></span></label>
                                    <select id="course-status" name="course-status" class="form-control" required>
                                        <option value="{{ $course->status }}">{{ $course->status }}</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Removed">Removed</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" name="course-id" id="course-id" value="{{ $course->id }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <img id="course-image-preview" src="{{'assets/img/courses/upload/789x500/'.$course->image}}" alt="Course Image" class="img-fluid square">
                                </div>
                                <div class="col-7">
                                    <label for="course-image">Image (Use a 4:3 Image)</label>
                                    <input type="file" name="course-image" id="course-image" accept="image/png, image/jpeg, image/jpg" class="form-control">
                                </div>
                            </div>
                            <br>

                            

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Course Stages</h4>
                            <div class="repeater">
                                <div data-repeater-list="course-structures">
                                    @foreach($courseStructures as $courseStructure)
                                        <div data-repeater-item class="row">

                                            <input type="hidden" name="structure_id" value="{{ $courseStructure->id }}">

                                            <div class="mb-3 col-lg-2">
                                                <label class="form-label" for="stage">Stage</label>
                                                <input type="text" id="stage" name="stage"
                                                    class="form-control" value="{{ $courseStructure->stage }}" />
                                            </div>

                                            <div class="mb-3 col-lg-2">
                                                <label class="form-label" for="duration">Duartion (Weeks / Months)</label>
                                                <input type="text" id="duration" name="duration" class="form-control" value="{{ $courseStructure->duration }}" />
                                            </div>

                                            <div class="mb-3 col-lg-2">
                                                <label class="form-label" for="time">Time (2 Hours per Week)</label>
                                                <input type="text" id="time" name="time" class="form-control" value="{{ $courseStructure->time_duration }}" />
                                            </div>

                                            <div class="mb-3 col-lg-4">
                                                <label class="form-label" for="summary">Summary</label>
                                                <textarea class="form-control" id="summary" name="summary">{{ $courseStructure->summary }}</textarea>
                                            </div>

                                            <div class="col-lg-2 align-self-center">
                                                <input data-repeater-delete type="button" class="btn btn-outline-danger w-100"
                                                    value="Delete" />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <input data-repeater-create type="button" class="btn btn-outline-primary mt-3 mt-lg-0"
                                    value="Add a stage" />
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>

            <div class="col-12">
                <div class="card">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>

        </form>
    </div>

</div>

@endsection