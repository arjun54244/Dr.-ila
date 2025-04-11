@extends('userlayout.app')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url({{asset('assets/img/innerpage/inner-banner-bg.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="banner-content">
                    <h1>Service Details</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Blog Details section -->
<div class="blog-details-section pt-120 mb-120">
    <div class="container">
        <div class="row g-lg-4 gy-5 justify-content-center">
            <div class="col-lg-8">
                <div class="post-thumb mb-30">
                    <img src="{{asset('storage/' . $service->image)}}" alt="">
                </div>
                <div class="post-title mb-40">
                    <h1>{{$service->title}}</h1>
                </div>
                <p class="first-para">{!!$service->description!!}</p>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area">
                    <div class="single-widget mb-30">
                        <h5 class="widget-title">Search Here</h5>
                        {{-- <form action="{{ route('services.search') }}" method="GET">
                            <div class="search-box">
                                <input type="text" name="query" placeholder="Search Here" required>
                                <button type="submit"><i class="bx bx-search"></i></button>
                            </div>
                        </form> --}}

                        
                    </div>
                    
                    
                    <div class="single-widget mb-30">
                        <h5 class="widget-title">Services</h5>
                        @foreach (App\Models\Service::all() as $service)
                        <div class="recent-post-widget mb-20">
                            <div class="recent-post-img">
                                <a href="{{route('services.show',$service->slug)}}"><img src="{{asset('storage/' . $service->image)}}" alt=""></a>
                            </div>
                            <div class="recent-post-content">
                                <h6><a href="{{route('services.show',$service->slug)}}">{{$service->title}}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="single-widget">
                        <h5 class="widget-title">Tags</h5>
                        <ul class="tag-list">
                            <li>
                                <a href="blog-grid.html">Adventure</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">City Tour</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Road Trip </a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Tourism</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Wildlife </a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Nature Excursion</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Photography</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Cruise</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Cultural</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="single-widget mb-30">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="category-list">
                            <li>
                                <a href="blog-sidebar.html">Cultural Exploration
                                    <span>(20)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">Adventure Safari
                                    <span>(35)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">Nature Excursion
                                    <span>(25)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">Cruise Voyage
                                    <span>(18)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">City Discovery
                                    <span>(06)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">Educational Journey
                                    <span>(08)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">Luxury Retreat
                                    <span>(15)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-sidebar.html">Photography Expedition
                                    <span>(25)</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details section -->
@endsection