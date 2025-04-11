@extends('userlayout.app')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
    <div class="breadcrumb-section"
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Gallery</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Gallery section -->
    <div class="destination-gallery pt-120 mb-120">
        <div class="container">
            <div class="row g-4 mb-70">
                @foreach ($galleries as $gallery)
                    @foreach ($gallery->images as $gal)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="gallery-img-wrap">
                                <img src="{{ asset('storage/' . $gal) }}" alt="dfsdf">
                                <a data-fancybox="gallery-01" href="{{ asset('storage/' . $gal) }}"><i
                                        class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    {{ $galleries->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery section -->
@endsection
