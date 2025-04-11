@extends('userlayout.app')
@push('scripts')
@endpush
@section('content')
<div class="breadcrumb-section"
    style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url({{ asset('assets/img/innerpage/inner-banner-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="banner-content">
                    <h1>About Us</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Home2 About section -->
<div class="home2-about-section pt-120 mb-120">
    <div class="container">
        <div class="row mb-90">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title2 mb-30">
                        <div class="eg-section-tag">
                            <span>About Doctor</span>
                        </div>
                        <h2>Dr. Ila Gupta</h2>
                        <p>With over 35 years of experience, <strong>Dr. Ila Gupta</strong> is a highly respected senior
                            Gynaecologist and Obstetrician. She completed her <strong>MBBS and MD</strong> from
                            <strong>King George Medical College, Lucknow</strong> and has been actively involved in
                            prestigious medical organizations. She has previously served as the <strong>President of the
                                East Delhi Gynaecology Forum</strong> and is currently the <strong>Vice President of EDB
                                and the Indian Medical Association (IMA)</strong>.
                        </p>
                        <p>Dr. Gupta is an esteemed member of <strong>The Federation of Obstetric and Gynaecological
                                Societies of India (FOGSI)</strong> and the <strong>National Association of Reproductive
                                and Child Health of India (NARCHI)</strong>. She is widely recognized for her expertise
                            in <strong>Normal Delivery, High-Risk Pregnancy, Colposcopy, and Hysteroscopy</strong>.</p>
                    </div>
                    <div class="row g-4 mb-50">
                        <div class="col-md-6">
                            <div class="facility-card">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                        viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#ed1f57"
                                            d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40 0 32 0 352 256 0 0-352 0-32 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM96 96L64 96C28.7 96 0 124.7 0 160L0 416c0 35.3 28.7 64 64 64l32 0L96 96zM416 480l32 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64l-32 0 0 384zM224 208c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6>Expert in <br> Women's Health</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="facility-card two">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5"
                                        viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#ed1f57"
                                            d="M96 128l0-57.8c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30l0 57.8-.3 0c.2 2.6 .3 5.3 .3 8l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-2.7 .1-5.4 .3-8l-.3 0zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80l0-16-160 0 0 16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48l0 16-16 0c-4.4 0-8 3.6-8 8l0 16c0 4.4 3.6 8 8 8l16 0 0 16c0 4.4 3.6 8 8 8l16 0c4.4 0 8-3.6 8-8l0-16 16 0c4.4 0 8-3.6 8-8l0-16c0-4.4-3.6-8-8-8l-16 0 0-16c0-4.4-3.6-8-8-8l-16 0c-4.4 0-8 3.6-8 8z" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6>35+ Years of <br> Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="facility-card two">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="15"
                                        viewBox="0 0 384 512">
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#ed1f57"
                                            d="M256 64A64 64 0 1 0 128 64a64 64 0 1 0 128 0zM152.9 169.3c-23.7-8.4-44.5-24.3-58.8-45.8L74.6 94.2C64.8 79.5 45 75.6 30.2 85.4s-18.7 29.7-8.9 44.4L40.9 159c18.1 27.1 42.8 48.4 71.1 62.4L112 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96 32 0 0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-258.4c29.1-14.2 54.4-36.2 72.7-64.2l18.2-27.9c9.6-14.8 5.4-34.6-9.4-44.3s-34.6-5.5-44.3 9.4L291 122.4c-21.8 33.4-58.9 53.6-98.8 53.6c-12.6 0-24.9-2-36.6-5.8c-.9-.3-1.8-.7-2.7-.9z" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6>High-Risk Pregnancy <br> Specialist</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="facility-card">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                        viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#ed1f57"
                                            d="M256 192L.1 192C2.7 117.9 41.3 52.9 99 14.1c13.3-8.9 30.8-4.3 39.9 8.8L256 192zm128-32c0-35.3 28.7-64 64-64l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0 0 64c0 25.2-5.8 50.2-17 73.5s-27.8 44.5-48.6 62.3s-45.5 32-72.7 41.6S253.4 416 224 416s-58.5-5-85.7-14.6s-51.9-23.8-72.7-41.6s-37.3-39-48.6-62.3S0 249.2 0 224l224 0 160 0 0-64zM80 416a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm240 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6>Advanced <br> Gynaecological Care</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-bottom-area">
                        <a href="contact" class="primary-btn3">Book an Appointment</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about-img-wrap">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/home2/home2-about-img1.png') }}" alt="" class="about-img">
                    </div>
                    <div class="experience">
                        <h3>35+</h3>
                        <p>Years of experience</p>
                    </div>
                    <img src="{{ asset('assets/img/home2/vector/plane-vector.svg') }}" alt="" class="vector">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home2 About section -->


<!-- Start Feature Card section -->
<div class="feature-card-section mb-120">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-12">
                <div class="section-title2 text-center">
                    <div class="eg-section-tag">
                        <span>Who We Are</span>
                    </div>
                    <h2>Why Choose Dr. Ila Gupta</h2>
                </div>
            </div>
        </div>
        <div class="row gy-5 mb-80">
            <div class="col-xl-4 col-md-6">
                <div class="feature-card style-2">
                    <div class="feature-card-icon">
                        <i class="fas fa-user-md fa-4x"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>35+ Years of Experience</h6>
                        <p>Providing expert care in Obstetrics and Gynaecology, ensuring the best medical solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 pt-15">
                <div class="feature-card style-2 secondary">
                    <div class="feature-card-icon">
                        <i class="fas fa-baby fa-4x"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>High-Risk Pregnancy Care</h6>
                        <p>Specialized in managing complex and high-risk pregnancies with precision and expertise.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card style-2">
                    <div class="feature-card-icon">
                        <i class="fas fa-stethoscope fa-4x"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Advanced Procedures</h6>
                        <p>Expert in Colposcopy, Hysteroscopy, and other advanced gynecological procedures.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card style-2 secondary">
                    <div class="feature-card-icon">
                        <i class="fas fa-users fa-4x"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Leadership & Memberships</h6>
                        <p>Former President of EDGF, Vice President of IMA EDB, and an active member of FOGSI & NARCHI.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 pt-15">
                <div class="feature-card style-2">
                    <div class="feature-card-icon">
                        <i class="fas fa-hospital fa-4x"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Trusted & Compassionate Care</h6>
                        <p>Renowned for delivering personalized and patient-focused gynecological care.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="feature-card style-2 secondary">
                    <div class="feature-card-icon">
                        <i class="fas fa-award fa-4x"></i>
                    </div>
                    <div class="feature-card-content">
                        <h6>Recognized & Awarded</h6>
                        <p>Widely acknowledged for contributions to women's health and medical excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Feature Card section -->

<!-- Start Activites section -->
<div class="slider-and-tab-section mb-120">
    <div class="row g-0">
        <div class="col-lg-5">
            <div class="slider-area">
                <div class="swiper activities-img-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-img"
                                style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url({{ asset('assets/img/home2/1.png') }});">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img"
                                style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url({{ asset('assets/img/home2/2.png') }});">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img"
                                style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url({{ asset('assets/img/home2/3.png') }});">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination5 pagination1"></div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="tab-area">
                <div class="section-title2 text-center mb-50">
                    <div class="eg-section-tag">
                        <span>Our Services</span>
                    </div>
                    <h2>Our Specialized Services</h2>
                </div>
                <div class="tab-content-area">
                    <div class="row g-xl-4 gy-5">
                        <div class="col-xl-5">
                            <div class="tab-sidebar">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active" id="fertility-tab" data-bs-toggle="pill"
                                            data-bs-target="#fertility" role="tab" aria-controls="fertility"
                                            aria-selected="true">
                                            <div class="icon">
                                                <i class="fas fa-user-md"></i>
                                            </div>
                                            <h6>Infertility Treatment</h6>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="ivf-tab" data-bs-toggle="pill" data-bs-target="#ivf"
                                            role="tab" aria-controls="ivf" aria-selected="false">
                                            <div class="icon">
                                                <i class="fas fa-heartbeat"></i>
                                            </div>
                                            <h6>IVF & IUI Services</h6>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="gynecology-tab" data-bs-toggle="pill"
                                            data-bs-target="#gynecology" role="tab" aria-controls="gynecology"
                                            aria-selected="false">
                                            <div class="icon">
                                                <i class="fas fa-stethoscope"></i>
                                            </div>
                                            <h6>Gynecology & Obstetrics</h6>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="maternity-tab" data-bs-toggle="pill"
                                            data-bs-target="#maternity" role="tab" aria-controls="maternity"
                                            aria-selected="false">
                                            <div class="icon">
                                                <i class="fas fa-baby"></i>
                                            </div>
                                            <h6>Maternity & High-Risk Pregnancy</h6>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="laparoscopy-tab" data-bs-toggle="pill"
                                            data-bs-target="#laparoscopy" role="tab" aria-controls="laparoscopy"
                                            aria-selected="false">
                                            <div class="icon">
                                                <i class="fas fa-hospital"></i>
                                            </div>
                                            <h6>Gynecological Laparoscopy</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 d-flex justify-content-xl-start justify-content-center">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="fertility" role="tabpanel"
                                    aria-labelledby="fertility-tab">
                                    <div class="tab-content-wrap">
                                        <h2>Advanced Fertility Treatments for Parenthood</h2>
                                        <p>Our expert team provides world-class fertility treatments, including IUI,
                                            IVF, and ICSI, to help couples achieve their dreams of parenthood.</p>
                                        <ul>
                                            <li><i class="fas fa-check-circle"></i> Intrauterine Insemination (IUI)
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> In Vitro Fertilization (IVF)</li>
                                            <li><i class="fas fa-check-circle"></i> ICSI & Advanced ART Procedures</li>
                                            <li><i class="fas fa-check-circle"></i> Egg Freezing & Donor Programs</li>
                                        </ul>
                                        <div class="content-bottom-area">
                                            <a href="services-details.html" class="primary-btn3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ivf" role="tabpanel" aria-labelledby="ivf-tab">
                                    <div class="tab-content-wrap">
                                        <h2>Comprehensive IVF & IUI Services</h2>
                                        <p>Offering the latest technology and personalized care to increase success
                                            rates in assisted reproductive techniques.</p>
                                        <div class="content-bottom-area">
                                            <a href="services-details.html" class="primary-btn3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gynecology" role="tabpanel"
                                    aria-labelledby="gynecology-tab">
                                    <div class="tab-content-wrap">
                                        <h2>Expert Gynecological & Obstetric Care</h2>
                                        <p>Providing comprehensive women's health services, from routine check-ups to
                                            advanced surgical procedures.</p>
                                        <div class="content-bottom-area">
                                            <a href="services-details.html" class="primary-btn3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="maternity" role="tabpanel"
                                    aria-labelledby="maternity-tab">
                                    <div class="tab-content-wrap">
                                        <h2>Safe & Personalized Maternity Care</h2>
                                        <p>Ensuring a smooth and safe pregnancy journey, specializing in high-risk
                                            pregnancies and neonatal care.</p>
                                        <div class="content-bottom-area">
                                            <a href="services-details.html" class="primary-btn3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="laparoscopy" role="tabpanel"
                                    aria-labelledby="laparoscopy-tab">
                                    <div class="tab-content-wrap">
                                        <h2>Minimally Invasive Laparoscopic Surgeries</h2>
                                        <p>Expertise in gynecological laparoscopic procedures for conditions like
                                            fibroids, endometriosis, and ovarian cysts.</p>
                                        <div class="content-bottom-area">
                                            <a href="services-details.html" class="primary-btn3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Activites section -->
@endsection