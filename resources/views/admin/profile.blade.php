@extends('admin.layouts.app')

@section('title', 'Profile')

@section('content')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Welcome to {{ config('app.name') }} Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- start row -->
                <div class="row">
                    <div class="col-md-12 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-widgets py-3">

                                    <div class="text-center">
                                        <div class="">
                                            @if($userImage)
                                                <img src="{{'adminassets/images/users/'.$userImage}}" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            @else
                                                <img src="adminassets/images/users/user.jpg" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            @endif
                                            <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                            </div>
                                        </div>

                                        <div class="mt-3 ">
                                            <a class="text-reset fw-medium font-size-16">{{ $username }}</a>
                                            <p class="text-body mt-1 mb-1">{{ $type }}</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 col-xl-9">

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    value="{{ $user->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label for="type" class="form-label">User Type</label>
                                                <input type="text" class="form-control" name="type" id="type"
                                                    value="{{ $user->type }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <label for="created_at" class="form-label">Created At</label>
                                                <input type="datetime" class="form-control" name="created_at" id="created_at"
                                                    value="{{ $user->created_at }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control" accept="image/png, image/jpeg, image/jpg" name="image" id="image"
                                                    value="{{ $user->image }}">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" id="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="new_password" class="form-label">New Password</label>
                                                <input type="password" class="form-control" name="new_password" id="new_password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <a href="{{route('admin.clearCache')}}" type="button" class="btn btn-danger">Clear Cache</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>

                    </div>


                </div>

                <!-- end row -->

            </div>

            <!-- End Page-content -->
        </div>
        <!-- end main content-->

@endsection