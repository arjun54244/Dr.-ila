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
                    <h1>Blogs</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Blog Grid section -->
<div class="blod-grid-section pt-120 mb-120">
    <div class="container">
        <div class="row g-md-4 gy-5 mb-70">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-card-img-wrap">
                        <a href="{{route('posts.show', $blog->slug)}}" class="card-img"><img
                                src="{{asset('storage/' . $blog->image)}}" alt=""></a>
                    </div>
                    <div class="blog-card-content">
                        <h5><a href="{{route('posts.show', $blog->slug)}}">{{$blog->title}}</a></h5>
                        <div class="bottom-area">
                            <a href="{{route('posts.show', $blog->slug)}}">Read more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12"
                                        fill="none">
                                        <path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round"></path>
                                        <path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
<!-- End Blog Grid section -->
@endsection