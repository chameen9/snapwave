@extends('admin.layouts.app')

@section('title', 'Brands')

@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Brands</h4>

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
                                    data-bs-toggle="modal"data-bs-target="#newBanner" style="border: 0px;">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">New Brand</div>
                        </div>
                    </div>
                    <h4 class="mt-4">{{$activeBrandsCount}}</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-0"><span class="text-success me-2"> Active</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" id="newBanner" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <!-- Add new course -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-tab-plus"></i> Add New Brand
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" maxlength="500" id="name" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Name is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="url">URL</label>
                                        <input type="text" name="url" maxlength="500" id="url" class="form-control" required>
                                        <div class="invalid-feedback">
                                            URL is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="image">Image (Landscape : 512 x 112 px)</label>
                                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" id="image" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Image is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit"
                                        class="btn btn-primary">Save & Publish</button>
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
                    <h4 class="card-title mb-4">All Banners</h4>

                    <div class="table-responsive ">
                        <table id="datatable-buttons"
                        class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                <tr></tr>
                                    <td><img src="{{asset('image/Brands/'.$brand->image)}}" alt="{{$brand->name}}" width="100"></td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        @if($brand->status == 'Active')
                                            <span class="badge bg-success">Active</span>
                                        @elseif($brand->status == 'Inactive')
                                            <span class="badge bg-danger">Inactive</span>
                                        @else
                                            <span class="badge bg-secondary">{{$brand->status}}</span>
                                        @endif
                                    </td>
                                    <td>{{$brand->created_at}}</td>
                                    <td>
                                        @if($brand->status == 'Active')
                                            <a href="{{route('admin.brand.update', $brand->id)}}" class="btn btn-sm btn-warning">Inactivate</a>
                                        @elseif($brand->status == 'Inactive')
                                            <a href="{{route('admin.brand.update', $brand->id)}}" class="btn btn-sm btn-success">Activate</a>
                                        @else
                                            <a href="{{route('admin.brand.update', $brand->id)}}" class="btn btn-sm btn-primary">Activate</a>
                                        @endif
                                        
                                        <!-- <form action="{{route('admin.brand.delete', $brand->id)}}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this banner?');">Delete</button>
                                        </form> -->


                                        <button type="button" class="btn btn-sm btn-outline-danger delete-brand"
                                            data-id="{{$brand->id}}">
                                            <i class="mdi mdi-delete-outline"></i>

                                        <form id="delete-form-{{$brand->id}}" action="{{ route('admin.brand.delete') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="brand_id" value="{{$brand->id}}">
                                        </form>
                                        <!-- Confirm using sweet alert -->
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                                // Select all delete buttons
                                                document.querySelectorAll('.delete-brand').forEach(button => {
                                                    button.addEventListener('click', function () {
                                                        let brandId = this.getAttribute('data-id');

                                                        // Show SweetAlert confirmation
                                                        Swal.fire({
                                                            title: "Are you sure?",
                                                            text: "You won't be able to revert this!",
                                                            icon: "question",
                                                            showCancelButton: true,
                                                            confirmButtonColor: "#d33",
                                                            cancelButtonColor: "#684DF4",
                                                            confirmButtonText: "Yes, delete it!"
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // Submit the hidden form
                                                                document.getElementById('delete-form-' + brandId).submit();
                                                            }
                                                        });
                                                    });
                                                });
                                            });
                                        </script>
                                    </td>
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