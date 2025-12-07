@extends('admin.layouts.app')

@section('title', 'Videos')

@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Videos</h4>

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
                                    data-bs-toggle="modal"data-bs-target="#newVideo" style="border: 0px;">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">New Video</div>
                        </div>
                    </div>
                    <h4 class="mt-4">{{$activeVideosCount}}</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-0"><span class="text-success me-2"> Active</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-center" id="newVideo" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <!-- Add new course -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="mdi mdi-video"></i> Add New Video
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="videoUploadForm" enctype="multipart/form-data" novalidate>
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <label for="video">Video</label>
                                        <input type="file" accept="video/mp4, video/mov"
                                            name="video" id="video" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Video is Invalid
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="progress" style="height: 20px;">
                                    <div id="progressBar" class="progress-bar bg-primary" style="width: 0%">0 percent</div>
                                </div>

                                <div id="uploadSuccess" class="text-success mt-2" style="display:none;"></div>
                                <div id="uploadError" class="text-danger mt-2" style="display:none;"></div>

                                <br>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="uploadBtn">Save and Publish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>

        <script>
            document.getElementById('videoUploadForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = new FormData(this);
            let xhr = new XMLHttpRequest();

            let uploadBtn = document.getElementById('uploadBtn');
            let originalBtnText = uploadBtn.innerHTML;

            // show spinner + uploading text
            uploadBtn.disabled = true;
            uploadBtn.innerHTML = `
                <span class="spinner-border spinner-border-sm" role="status"></span>
                Uploading...
            `;

            xhr.open("POST", "{{ route('admin.video.store') }}");

            xhr.upload.addEventListener("progress", function(e) {
                if (e.lengthComputable) {
                    let percent = Math.round((e.loaded / e.total) * 100);
                    let bar = document.getElementById("progressBar");
                    bar.style.width = percent + "%";
                    bar.textContent = percent + " %";

                    // When progress hits 100 percent
                    if (percent === 100) {
                        uploadBtn.innerHTML = `
                            <span class="spinner-border spinner-border-sm" role="status"></span>
                            Finishing...
                        `;
                    }
                }
            });

            xhr.onload = function() {
                let successBox = document.getElementById('uploadSuccess');
                let errorBox = document.getElementById('uploadError');

                if (xhr.status === 200) {

                    // hide errors
                    errorBox.style.display = "none";

                    // show success message
                    successBox.innerText = "Video uploaded successfully.";
                    successBox.style.display = "block";

                    // turn button green and show Uploaded
                    uploadBtn.classList.remove("btn-primary");
                    uploadBtn.classList.add("btn-success");
                    uploadBtn.innerHTML = `
                        <i class="mdi mdi-check"></i> Uploaded
                    `;
                    uploadBtn.disabled = true;

                    // reload after delay
                    setTimeout(() => {
                        location.reload();
                    }, 1500);

                } else {
                    successBox.style.display = "none";

                    errorBox.innerText = "Upload failed. Server returned status " + xhr.status;
                    errorBox.style.display = "block";

                    // restore button
                    uploadBtn.disabled = false;
                    uploadBtn.innerHTML = originalBtnText;
                }
            };

            xhr.onerror = function() {
                let errorBox = document.getElementById('uploadError');
                errorBox.innerText = "Upload failed due to network error. Please try again.";
                errorBox.style.display = "block";

                // restore button
                uploadBtn.disabled = false;
                uploadBtn.innerHTML = originalBtnText;
            };

            xhr.send(form);
        });
        </script>

    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All Videos</h4>

                    <div class="table-responsive ">
                        <table id="datatable-buttons"
                        class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">Video</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $video)
                                <tr></tr>
                                    <td>
                                        <video width="100" height="200" controls>
                                            <source src="/videos/{{ $video->name }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </td>

                                    <td>
                                        @if($video->status == 'Active')
                                            <span class="badge bg-success">Active</span>
                                        @elseif($video->status == 'Inactive')
                                            <span class="badge bg-danger">Inactive</span>
                                        @else
                                            <span class="badge bg-secondary">{{$video->status}}</span>
                                        @endif
                                    </td>
                                    <td>{{$video->created_at}}</td>
                                    <td>
                                        @if($video->status == 'Active')
                                            <a href="{{route('admin.video.update', $video->id)}}" class="btn btn-sm btn-warning">Inactivate</a>
                                        @elseif($video->status == 'Inactive')
                                            <a href="{{route('admin.video.update', $video->id)}}" class="btn btn-sm btn-success">Activate</a>
                                        @else
                                            <a href="{{route('admin.video.update', $video->id)}}" class="btn btn-sm btn-primary">Activate</a>
                                        @endif
                                        
                                        <!-- <form action="{{route('admin.video.delete', $video->id)}}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this banner?');">Delete</button>
                                        </form> -->


                                        <button type="button" class="btn btn-sm btn-outline-danger delete-video"
                                            data-id="{{$video->id}}">
                                            <i class="mdi mdi-delete-outline"></i>

                                        <form id="delete-form-{{$video->id}}" action="{{ route('admin.video.delete') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="video_id" value="{{$video->id}}">
                                        </form>
                                        <!-- Confirm using sweet alert -->
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                                // Select all delete buttons
                                                document.querySelectorAll('.delete-video').forEach(button => {
                                                    button.addEventListener('click', function () {
                                                        let videoId = this.getAttribute('data-id');

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
                                                                document.getElementById('delete-form-' + videoId).submit();
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