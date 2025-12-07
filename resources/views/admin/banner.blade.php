@extends('admin.layouts.app')

@section('title', 'Banners')

@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Banners</h4>

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
                            <div class="font-size-16 mt-2">New Banner</div>
                        </div>
                    </div>
                    <h4 class="mt-4">{{$activeBannersCount}}</h4>
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
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-tab-plus"></i> Add New Banner
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.banner.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" maxlength="500" id="title" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Title is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="type">Type</label>
                                        <select name="type" id="type" class="form-control" required>
                                            <option value="desktop">Desktop (Landscape : 1920 x 900 px)</option>
                                            <option value="mobile">Mobile (Portrait : 1080 x 1920 px)</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Type is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="image">Image</label>
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


        <div class="col-xl-3">
            <div class="card d-flex">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"
                                    data-bs-toggle="modal"data-bs-target="#UpdateSectionBanner" style="border: 0px;">
                                    <i class="mdi mdi-update"></i>
                                </button>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Update Section Banner</div>
                        </div>
                    </div>
                    <h4 class="mt-4">1920 x 900px</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-0"><span class="text-primary me-2">PNG / JPG</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" id="UpdateSectionBanner" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <!-- Add new course -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-update"></i> Update Section Banner
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.sectionbanner.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="image">Image (Landscape : 1920 x 900 px)</label>
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

        <div class="col-xl-3">
            <div class="card d-flex">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"
                                    data-bs-toggle="modal"data-bs-target="#UpdateWhatWeDo" style="border: 0px;">
                                    <i class="mdi mdi-update"></i>
                                </button>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Update What We Do</div>
                        </div>
                    </div>
                    <h4 class="mt-4">400 x 600px</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-0"><span class="text-primary me-2">PNG / JPG</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" id="UpdateWhatWeDo" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <!-- Add new course -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-update"></i> Update What We Do
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.whatwedo.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="image">Image (Portrait : 400 x 600 px)</label>
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
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                                <tr></tr>
                                    <td>
                                        @if($banner->type == 'desktop')
                                            <img src="{{asset('image/Banners/'.$banner->image)}}" alt="{{$banner->title}}" width="100">
                                        @else
                                            <img src="{{asset('image/MobileBanners/'.$banner->image)}}" alt="{{$banner->title}}" width="100">
                                        @endif
                                    </td>
                                        
                                    <td>{{$banner->title}}</td>

                                    <td>
                                        @if($banner->type == 'desktop')
                                            <span class="badge bg-primary">Desktop</span>
                                        @else
                                            <span class="badge bg-secondary">Mobile</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($banner->status == 'Active')
                                            <span class="badge bg-success">Active</span>
                                        @elseif($banner->status == 'Inactive')
                                            <span class="badge bg-danger">Inactive</span>
                                        @else
                                            <span class="badge bg-secondary">{{$banner->status}}</span>
                                        @endif
                                    </td>
                                    <td>{{$banner->created_at}}</td>
                                    <td>
                                        @if($banner->status == 'Active')
                                            <a href="{{route('admin.banner.update', $banner->id)}}" class="btn btn-sm btn-warning">Inactivate</a>
                                        @elseif($banner->status == 'Inactive')
                                            <a href="{{route('admin.banner.update', $banner->id)}}" class="btn btn-sm btn-success">Activate</a>
                                        @else
                                            <a href="{{route('admin.banner.update', $banner->id)}}" class="btn btn-sm btn-primary">Activate</a>
                                        @endif
                                        
                                        <!-- <form action="{{route('admin.banner.delete', $banner->id)}}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this banner?');">Delete</button>
                                        </form> -->


                                        <button type="button" class="btn btn-sm btn-outline-danger delete-banner"
                                            data-id="{{$banner->id}}">
                                            <i class="mdi mdi-delete-outline"></i>

                                        <form id="delete-form-{{$banner->id}}" action="{{ route('admin.banner.delete') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="banner_id" value="{{$banner->id}}">
                                        </form>
                                        <!-- Confirm using sweet alert -->
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                                // Select all delete buttons
                                                document.querySelectorAll('.delete-banner').forEach(button => {
                                                    button.addEventListener('click', function () {
                                                        let bannerId = this.getAttribute('data-id');

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
                                                                document.getElementById('delete-form-' + bannerId).submit();
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