@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Testimonials</h4>

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

        <div class="col-xl-3 d-flex">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title mb-4">Recents</h4>
                    <div class="mb-4">
                        <h5><span class="text-primary">{{$recentTestimonialCOunt}}</span>+ Testimonials</h5>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-quote-left h4 text-primary"></i>
                    </div>
                    <div id="carouselControls" class="carousel slide review-carousel"
                        data-ride="carousel">

                        <div class="carousel-inner">
                            @foreach($recentActiveTestimonial as $testimonial)
                                <div class="carousel-item active">
                                    <div>
                                        <p>{{\Illuminate\Support\Str::limit($testimonial->description, 110)}}</p>
                                        <div class="d-flex align-items-start mt-4">
                                            <div class="avatar-sm me-3">
                                                <img src="{{'assets/img/testimonial/upload/100/'.$testimonial->image}}" alt="{{$testimonial->image}}"
                                                    class="img-fluid rounded-circle">
                                            </div>
                                            <div class="flex-1">
                                                <h5 class="font-size-16 mb-1">{{$testimonial->username}}</h5>
                                                <p class="mb-2">{{$testimonial->user_title}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach($recentTestimonials as $testimonial)
                                <div class="carousel-item">
                                    <div>
                                        
                                        <p>{{\Illuminate\Support\Str::limit($testimonial->description, 110)}}</p>
                                        <div class="d-flex align-items-start mt-4">
                                            <div class="avatar-sm me-3">
                                                <img src="{{'assets/img/testimonial/upload/'.$testimonial->image}}" alt="{{$testimonial->image}}"
                                                    class="img-fluid rounded-circle">
                                            </div>
                                            <div class="flex-1">
                                                <h5 class="font-size-16 mb-1">{{$testimonial->username}}</h5>
                                                <p class="mb-2">{{$testimonial->user_title}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#carouselControls" role="button"
                            data-bs-slide="prev">
                            <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselControls" role="button"
                            data-bs-slide="next">
                            <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-3">
            <div class="card d-flex">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"
                                    data-bs-toggle="modal"data-bs-target="#newTestimonial" style="border: 0px;">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">New Testimonial</div>
                        </div>
                    </div>
                    <h4 class="mt-4">{{$activeTestimonialCount}}</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success me-2"> Active</span></p>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$activePercentage}}%"
                                    aria-valuenow="{{$activePercentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" id="newTestimonial" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-tab-plus"></i> Add New Testimonial
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.testimonial.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" maxlength="30" id="title" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Title is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="description">Description (10,000)</label>
                                        <textarea name="description" maxlength="10000" minlength="170" id="description" class="form-control" required></textarea>
                                        <div class="invalid-feedback">
                                            Description is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="authorName">Author Name</label>
                                        <input type="text" maxlength="16" name="authorName" id="authorName" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Author Name is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="authorTitle">Author Title (Desgnation/Position/Job Role etc)</label>
                                        <input type="text" maxlength="30" name="authorTitle" id="authorTitle" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Author Title is Invalid
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="testimonialImage">Image (Use a Square Image)</label>
                                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="testimonialImage" id="testimonialImage" class="form-control" required>
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
                                        class="btn btn-primary">Save & Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="card d-flex">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">All Testimonials</div>
                        </div>
                    </div>
                    <h4 class="mt-4">
                        {{$allTestimonialCount}}
                    </h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-warning me-2">
                                <i class="mdi mdi-clock-alert-outline"></i> 
                                {{$pendingTestimonialCount}} Pending</span>
                            </p>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{$activePendingPercentage}}%"
                                    aria-valuenow="{{$activePendingPercentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 d-flex">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title mb-4">Recent People Engaged</h4>

                    <table class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peopleEngaged as $engaged)
                                <tr>
                                    <td>
                                        <img src="{{'assets/img/testimonial/upload/100/'.$engaged->image}}" alt="" class="rounded-circle avatar-sm">
                                        &nbsp;{{$engaged->username}}
                                    </td>
                                    <td>{{$engaged->user_title}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All Testimonials</h4>

                    <div class="table-responsive ">
                        <table id="datatable-buttons"
                        class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{$testimonial->created_at}}</td>
                                    <td>
                                        <a href="" class="text-body fw-medium">{{$testimonial->title}}</a>
                                    </td>
                                    <td>{{$testimonial->username}}</td>
                                    @if($testimonial->status == 'Active')
                                        <td><span class="badge badge-soft-success font-size-12">Active</span>
                                    @elseif($testimonial->status == 'Pending')
                                        <td><span class="badge bg-warning-subtle text-warning  font-size-12">Pending</span>
                                    @else
                                        <td><span class="badge bg-danger-subtle text-danger font-size-12">{{$testimonial->status}}</span>
                                    </td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm view-testimonial"
                                            data-bs-toggle="modal"
                                            data-bs-target="#testimoniaViewlModal"
                                            data-id="{{$testimonial->id}}"
                                            data-date="{{$testimonial->created_at}}"
                                            data-title="{{$testimonial->title}}"
                                            data-description="{{$testimonial->description}}"
                                            data-author="{{$testimonial->username}}"
                                            data-authorTitle="{{$testimonial->user_title}}"
                                            data-image="{{$testimonial->image}}"
                                            data-status="{{$testimonial->status}}">
                                            View / Edit
                                        </button>

                                        @if($testimonial->status != 'Removed')
                                            <!-- Delete Button (Using SweetAlert) -->
                                            <button type="button" class="btn btn-sm btn-outline-danger delete-testimonial"
                                            data-id="{{$testimonial->id}}">
                                            <i class="mdi mdi-delete-outline"></i>

                                            <!-- Hidden Form (Will be submitted via JavaScript) -->
                                            <form id="delete-form-{{$testimonial->id}}" action="{{ route('admin.testimonial.delete') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="testimonial-id" value="{{$testimonial->id}}">
                                            </form>

                                            <!-- Confirm using sweet alert -->
                                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    // Select all delete buttons
                                                    document.querySelectorAll('.delete-testimonial').forEach(button => {
                                                        button.addEventListener('click', function () {
                                                            let testimonialId = this.getAttribute('data-id');

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
                                                                    document.getElementById('delete-form-' + testimonialId).submit();
                                                                }
                                                            });
                                                        });
                                                    });
                                                });
                                            </script>
                                        @endif
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!--View Modal -->
                        <div class="modal fade" id="testimoniaViewlModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="testimonialModalLabel">Testimonial Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('admin.testimonial.update')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="testimonial-title">Title</label>
                                                    <input type="text" name="testimonial-title" id="testimonial-title" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                        Title is Required
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="testimonial-description">Description (170-185)</label>
                                                    <textarea name="testimonial-description" id="testimonial-description" maxlength="185" minlength="170" class="form-control" required></textarea>
                                                    <div class="invalid-feedback">
                                                        Description is Required
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="testimonial-author">Author Name</label>
                                                    <input name="testimonial-author" id="testimonial-author" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                        Author Name is Required
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="testimonial-authorTitle">Author Title</label>
                                                    <input name="testimonial-authorTitle" id="testimonial-authorTitle" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                        Author Title is Required
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="hidden" name="testimonial-id" id="testimonial-id" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="testimonial-status" class="form-label">Status : <span id="testimonial-currentStatus" class="badge font-size-12"></span></label>
                                                    <select id="testimonial-status" name="testimonial-status" class="form-control" required>
                                                        <option value="Active">Active</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Removed">Removed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <img id="testimonial-image-preview" src="" alt="Testimonial Image" class="img-fluid rounded">
                                                </div>
                                                <div class="col-8">
                                                    <label for="testimonial-image">Image (Use a Square Image)</label>
                                                    <input type="file" name="testimonial-image" id="testimonial-image" accept="image/png, image/jpeg, image/jpg" class="form-control">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                document.querySelectorAll(".view-testimonial").forEach(button => {
                                    button.addEventListener("click", function () {
                                        let id = this.getAttribute("data-id");
                                        // let date = this.getAttribute("data-date");
                                        let title = this.getAttribute("data-title");
                                        let description = this.getAttribute("data-description");
                                        let author = this.getAttribute("data-author");
                                        let authorTitle = this.getAttribute("data-authorTitle");
                                        let status = this.getAttribute("data-status");
                                        let image = this.getAttribute("data-image");
                        
                                        document.getElementById("testimonial-id").value = id;
                                        // document.getElementById("testimonial-date").value = date;
                                        document.getElementById("testimonial-title").value = title;
                                        document.getElementById("testimonial-description").value = description;
                                        document.getElementById("testimonial-author").value = author;
                                        document.getElementById("testimonial-authorTitle").value = authorTitle;

                                        // Update image source
                                        let imagePath = 'assets/img/testimonial/upload/100/' + image;
                                        document.getElementById("testimonial-image-preview").src = imagePath;

                                        // Set the selected status in the dropdown
                                        let statusSelect = document.getElementById("testimonial-status");
                                        statusSelect.value = status;
                        
                                        let statusBadge = document.getElementById("testimonial-currentStatus");
                                        statusBadge.textContent = status;
                        
                                        // Reset classes and apply the correct one
                                        statusBadge.className = "badge font-size-12"; // Reset classes
                                        if (status === "Active") {
                                            statusBadge.classList.add("badge-soft-success");
                                        } else if (status === "Pending") {
                                            statusBadge.classList.add("bg-warning-subtle", "text-warning");
                                        } else {
                                            statusBadge.classList.add("bg-danger-subtle", "text-danger");
                                        }
                                    });
                                });
                            });
                        </script>
                        
                        

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection