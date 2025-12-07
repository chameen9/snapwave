@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

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
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Overview</h4>

                        <div>
                            <div class="pb-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <p class="mb-2">Banners</p>
                                        <h4 class="mb-0">{{ $bannersCount }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <div class="progress progress-sm mt-3">
                                                <div class="progress-bar" role="progressbar" style="width: 100%"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <p class="mb-2">Brands</p>
                                        <h4 class="mb-0">{{ $brandsCount }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <div class="progress progress-sm mt-3">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <p class="mb-2">Videos</p>
                                        <h4 class="mb-0">{{ $videosCount }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <div class="progress progress-sm mt-3">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card h-100">
                    <div class="card-body p-0"> <!-- REMOVE PADDING -->

                        <h4 class="card-title p-3">Banners</h4>

                        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" 
                            style="height: calc(100% - 70px); overflow:hidden; border-radius:10px;">

                            <div class="carousel-inner h-100">

                                @foreach($desktopBanners as $key => $banner)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }} h-100">
                                        <img src="/image/Banners/{{ $banner->image }}"
                                            class="d-block w-100 h-100"
                                            style="object-fit:cover;">
                                    </div>
                                @endforeach

                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">

                        <h4 class="card-title p-3">Mobile Banners</h4>

                        <div id="mobileBannerCarousel" class="carousel slide" data-bs-ride="carousel"
                            style="height:180px; overflow:hidden; border-radius:10px;">
                            <div class="carousel-inner" style="height:100%;">

                                @foreach($mobileBanners as $key => $banner)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" style="height:100%;">
                                        <img src="/image/MobileBanners/{{ $banner->image }}"
                                            class="d-block w-100 h-100"
                                            style="object-fit:cover; height:100%; width:100%;">
                                    </div>
                                @endforeach

                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#mobileBannerCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#mobileBannerCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>

                    </div>
                </div>
            </div>


        </div>
        <!-- end row -->
         <br>

        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Banners</h4>

                        <div class="table-responsive">
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
                                    
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Brands</h4>

                        <div class="table-responsive">
                            <table id="datatable"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
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
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->      
    
    </div>
    <!-- End Page-content -->


@endsection