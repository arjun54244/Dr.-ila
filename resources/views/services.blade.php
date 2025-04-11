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
                    <h1>Services</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Package Grid section -->
<div class="package-grid-section pt-120 mb-120">
    <div class="container">
        <div class="row gy-5 mb-70">
            @foreach ($services as $service)

            <div class="col-lg-4 col-md-6">
                <div class="package-card">
                    <div class="package-card-img-wrap">
                        <a href="{{route('services.show',$service->slug)}}" class="card-img"><img src="{{asset('storage/' . $service->image)}}" alt=""></a>
                       <div class="batch">
                            <span class="date">Dr. illa</span>
                            <!-- <div class="location">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path
                                        d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                </svg>
                            </div> -->
                        </div> 
                    </div>
                    <div class="package-card-content">
                        <div class="card-content-top">
                            <h5><a href="{{route('services.show',$service->slug)}}">{{$service->title}}</a></h5>
                            <div class="location-area">
                                <ul class="location-list scrollTextAni">
                                    <li><a href="{{route('services.show',$service->slug)}}">{{$service->short_description}}</a></li>
                                    <li><a href="{{route('services.index')}}">See All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-bottom">
                            <!-- <div class="price-area">
                                <h6>Starting Form:</h6>
                                <span>$2,898 <del>$3000</del></span>
                                <p>TAXES INCL/PERS</p>
                            </div> -->
                            <a href="{{route('services.show',$service->slug)}}" class="primary-btn2">Read more
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                {{ $services->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
<!-- End Package Grid section -->
@endsection