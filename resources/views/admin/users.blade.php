@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Users</h4>

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

        <div class="col-xl-3">
            <div class="card d-flex">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"
                                    data-bs-toggle="modal"data-bs-target="#newUser" style="border: 0px;">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">New User</div>
                        </div>
                    </div>
                    <h4 class="mt-4">{{$usersCount}}</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-0"><span class="text-success me-2"> Active</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" id="newUser" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <!-- Add new user -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-account-plus"></i> Add New User
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.users.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="user_name">Name</label>
                                        <input type="text" name="user_name" maxlength="50" id="user_name" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Name is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="user_email">Email (Credential will be sent to this Email)</label>
                                        <input type="email" name="user_email" maxlength="100" id="user_email" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Email is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="user_role">Role</label>
                                        <select name="user_role" id="user_role" class="form-control" required>
                                            <option value="">Select Role</option>
                                            <option value="Admin">Admin</option>
                                            <!-- <option value="User">User</option> -->
                                        </select>
                                        <div class="invalid-feedback">
                                            Role is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit"
                                        class="btn btn-primary"><i class="mdi mdi-send-outline"></i> Create & Notify</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>



    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All Users</h4>

                    <div class="table-responsive ">
                        <table id="datatable-buttons"
                        class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Verified</th>
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <a href="" class="text-body fw-medium">{{$user->name}}</a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->email_verified_at}}</td>
                                    <!-- <td>
                                        <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-primary btn-sm">View / Edit</a>
                                    </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection