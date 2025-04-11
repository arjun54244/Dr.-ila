@extends('userlayout.app')
@push('scripts')
<script>
    $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
</script>
@endpush
@section('content')
<!-- Start Banner section -->
<div id="carouselExampleAutoplaying" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/home1/home1-banner-img1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/home1/home1-banner-img2.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Banner section -->

<!-- Start Home1 About section -->
<div class="home1-about-section mb-120">
    <img src="{{ asset('assets/img/home1/section-vector1.png') }}" alt="" class="section-vector1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span>
                            <i class="fas fa-user-md"></i>
                            About Us
                        </span>
                        <h2 class="text-start">Dr. Ila Gupta</h2>
                    </div>
                    <p class="tab-pane mb-40" style="color: var(--text-color);">Senior Gynaecologist and Obstetrician with 35+ years of experience, Dr. Illa Gupta
                        has completed her MBBS and MD from the Kings George Medical College, Lucknow. She participates
                        actively in various medical organizations. Dr. Illa Gupta was the former President of East Delhi
                        Gynaecology Forum. She's the vice-president of EDB and Indian Medical Association (IMA) and also
                        a member of The Federation of Obstetric and Gynaecological Societies of India and National
                        Association of Reproductive and Child Health of India.</p>
                    <ul class="nav nav-pills" id="pills-tab3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="mission-tab" data-bs-toggle="pill"
                                data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                aria-selected="true">
                                <i class="fas fa-bullseye"></i>
                                Mission & Vision
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="focus-customer-tab" data-bs-toggle="pill"
                                data-bs-target="#focus-customer" type="button" role="tab" aria-controls="focus-customer"
                                aria-selected="false">
                                <i class="fas fa-users"></i>
                                Focus On Patient Care
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab3Content">
                        <div class="tab-pane fade show active" id="mission" role="tabpanel">
                            Dr. Ila Gupta is dedicated to providing top-quality medical care with a focus on
                            compassion, innovation, and excellence. Her vision is to ensure every patient receives
                            personalized treatment backed by the latest advancements in medical science.
                        </div>
                        <div class="tab-pane fade" id="focus-customer" role="tabpanel">
                            Patient-centered care is at the heart of Dr. Ila Gupta’s practice. She believes in a
                            holistic approach, addressing not just medical needs but also the overall well-being of
                            every individual.
                        </div>
                    </div>
                    <div class="about-content-bottom">
                        <a href="{{ route('about') }}" class="primary-btn1">More About</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <div class="about-img">
                    <img src="{{ asset('assets/img/home1/about-img.png') }}" alt="">
                    <img src="{{ asset('assets/img/home1/vector/about-img-bg-vector.svg') }}" alt="" class="vector">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home1 About section -->

<!-- Start Dr. Ila Gupta's Facilities Section -->
<div class="tour-facilites-section mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-60">
                <div class="section-title text-center">
                    <span>
                        <i class="fas fa-user-md"></i> Services
                    </span>
                    <h2>Reliable Health Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="facilitiesTabContent">
                    <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services-tab">
                        <div class="row g-4 d-flex justify-content-center">
                            @foreach (\App\Models\Service::limit(12)->get() as $service)
                            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                                <div class="card shadow-sm border-0 text-center p-3" style="background: #ebe6e6">
                                    <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                        <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}"
                                            class="img-fluid">
                                    </div>
                                    <a href="{{ route('services.show', $service->slug) }}"
                                        class="btn btn-outline-dark btn-sm w-100">
                                        {{ $service->title }}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Start Testimonial section -->
<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-60">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
                        </svg>
                        Testimonial
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
                        </svg>
                    </span>
                    <h2>Patient’s Reviews</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-wrapper">
        <div class="testimonial-card-slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="allreview" role="tabpanel"
                                aria-labelledby="allreview-tab">
                                <div class="swiper testimonial-card-slider">
                                    <div class="swiper-wrapper">
                                        @foreach (\App\Models\Testimonial::all() as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="tesimonial-card-wrapper">
                                                <div class="tesimonial-card">
                                                    <div class="testimonial-content">
                                                        <p>“{{ $testimonial->description }}”</p>
                                                    </div>
                                                    <div class="testimonial-bottom">
                                                        <div class="rating-area">
                                                            <ul class="rating">
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="quote">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                height="51" viewBox="0 0 74 51">
                                                                <g>
                                                                    <path
                                                                        d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                    <path
                                                                        d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="author-area">
                                                    <div class="author-img">
                                                        <img src="{{ asset('assets/img/google-r.png') }}"
                                                            alt="{{ $testimonial->name }}">
                                                    </div>
                                                    <div class="author-content">
                                                        <h5>{{ $testimonial->name }}</h5>
                                                        <span>{{ $testimonial->position }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-btn-grp2">
                        <div class="slider-btn testimonial-card-tab-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
                                <path
                                    d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
                            </svg>
                        </div>
                        <div class="slider-btn testimonial-card-tab-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17"
                                fill="none">
                                <path
                                    d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial section -->


<!-- Start Feature Card section -->
<div class="feature-card-section mb-120">
    <img src="{{ asset('assets/img/home1/section-vector4.png') }}" alt="" class="section-vector4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-60">
                    <span>
                        <i class="fas fa-star"></i> Our Excellence <i class="fas fa-star"></i>
                    </span>
                    <h2>Why Choose Dr. ILA Gupta?</h2>
                </div>
            </div>
        </div>
        <div class="row g-md-4 gy-5">
            <div class="col-xl-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Experienced Specialist</h6>
                        <p>Dr. Ila Gupta has 20+ years of expertise in IVF, IUI, and fertility treatments, ensuring
                            high success rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card two">
                    <div class="feature-card-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Advanced Fertility Treatments</h6>
                        <p>We use cutting-edge technology for IVF, ICSI, egg freezing, and other fertility
                            treatments.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card three">
                    <div class="feature-card-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>State-of-the-Art Facilities</h6>
                        <p>Our clinic is equipped with modern labs, advanced fertility care units, and top-notch
                            medical infrastructure.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card three">
                    <div class="feature-card-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Personalized Patient Care</h6>
                        <p>Every treatment is tailored to individual needs, with a compassionate approach and
                            dedicated support.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>24/7 Medical Support</h6>
                        <p>We provide round-the-clock assistance for patient queries and emergency medical care.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card two">
                    <div class="feature-card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>High Success Rate</h6>
                        <p>Our clinic has achieved a high success rate in fertility treatments, ensuring a smooth
                            journey to parenthood.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Feature Card section -->


<!-- Start Packages section -->
<div class="package-card-section pt-120 mb-120">
    <img src="{{ asset('assets/img/home1/section-vector1.png') }}" alt="" class="section-vector1">
    <img src="{{ asset('assets/img/home1/section-vector3.png') }}" alt="" class="section-vector3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-40">
                    <span>
                        <i class="fas fa-book-medical"></i> Blogs
                    </span>
                    <h2>Latest Medical Insights</h2>
                </div>
            </div>
        </div>

        <div class="row g-lg-4 gy-5 mb-70">
            @foreach (\App\Models\Blogs::limit(3)->get() as $blog)
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="package-card">
                    <div class="package-card-img-wrap">
                        <a href="{{ route('posts.show', $blog->slug) }}" class="card-img">
                            <img src="{{asset('storage/' . $blog->image)}}" alt="Medical Service">
                        </a>
                    </div>
                    <div class="package-card-content">
                        <div class="card-content-top">
                            <h5><a href="{{ route('posts.show', $blog->slug) }}">{{ $blog->title }}</a></h5>
                        </div>
                        <div class="card-content-bottom">
                            <a href="{{ route('posts.show', $blog->slug) }}" class="primary-btn2">know more...
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
                <a href="{{ route('posts.index') }}" class="secondary-btn1 text-white">View All Blogs</a>
            </div>
        </div>
    </div>
</div>
<!-- End Packages section -->
@endsection