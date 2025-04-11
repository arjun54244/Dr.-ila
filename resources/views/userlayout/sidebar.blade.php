<!-- Sidebar Menu -->
{{-- <div class="egns-preloader">
    <div class="preloader-close-btn">
        <span><i class="bi bi-x-lg"></i> Close</span>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="circle-border">
                    <div class="moving-circle"></div>
                    <div class="moving-circle"></div>
                    <div class="moving-circle"></div>
                    <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet"
                        style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
                        <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="10"
                            d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                        <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4"
                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                            d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Sidebar Menu -->
<div class="right-sidebar-menu">
    <div class="sidebar-logo-area d-flex justify-content-between align-items-center">
        <div class="sidebar-logo-wrap">
            <a href="/"><img alt="image" src="assets/img/home1/main.png"></a>
        </div>
        <div class="right-sidebar-close-btn">
            <i class="bi bi-x"></i>
        </div>
    </div>
    <div class="sidebar-content-wrap">
        <div class="category-wrapper">
            <h4>Services</h4>
            <ul class="category-list">
                @foreach (\App\Models\Service::limit(6)->get() as $service)
                    <li>
                        <a href="{{ route('services.show', $service->slug) }}" class="single-category">
                            <div class="icon" >
                                <img height="60px" width="60px" src="{{ asset('storage/' . $service->icon) }}" 
                                     alt="{{ $service->title }}" class="img-fluid">
                            </div>
                            <h6 style="font-size: 13px;">{{ $service->title }}</h6>
                        </a>
                    </li>
                @endforeach
            </ul>
            
        </div>
        <div class="destination-wrapper">
            <h4>Our Blogs</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper destination-sidebar-slider mb-35">
                        <div class="swiper-wrapper">
                            @foreach (\App\Models\Blogs::orderBy('created_at', 'desc')->get() as $blog)
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="{{ route('posts.show', $blog->slug) }}" class="destination-card-img">
                                        <img src="{{asset('storage/' . $blog->image)}}" alt="">
                                    </a>
                                    <div class="batch">
                                        {{-- <span>5 Tour</span> --}}
                                    </div>
                                    <div class="destination-card2-content">
                                        {{-- <span>Travel To</span> --}}
                                        <h4><a href="{{ route('posts.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="slide-and-view-btn-grp">
                        <div class="destination-sidebar-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
                                <path d="M53 6.5L1 6.5M1 6.5L7 12M1 6.5L7 0.999996"></path>
                            </svg>
                        </div>
                        <a href="{{ route('posts.index') }}" class="secondary-btn2">View All</a>
                        <div class="destination-sidebar-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
                                <path d="M0 6.5H52M52 6.5L46 1M52 6.5L46 12"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-bottom">
        <div class="hotline-area">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                    <path
                        d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z" />
                    <path
                        d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z" />
                    <path
                        d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z" />
                </svg>
            </div>
            <div class="content">
                <span>To More Inquiry</span>
                <h6><a href="tel:+9972999729">+91 9972999729</a></h6>
            </div>
        </div>
        <div class="email-area">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
                    <g clip-path="url(#clip0_2102_235)">
                        <path
                            d="M9.84668 19.8136V25.0313C9.84754 25.2087 9.90418 25.3812 10.0086 25.5246C10.1129 25.6679 10.2598 25.7748 10.4283 25.8301C10.5968 25.8853 10.7784 25.8861 10.9474 25.8324C11.1164 25.7787 11.2642 25.6732 11.3699 25.5308L14.4221 21.3773L9.84668 19.8136ZM26.6486 0.156459C26.5218 0.0661815 26.3725 0.0127263 26.2173 0.00200482C26.062 -0.00871662 25.9068 0.0237135 25.7688 0.0957086L0.456308 13.3145C0.310668 13.3914 0.190668 13.5092 0.111035 13.6535C0.0314025 13.7977 -0.00439878 13.962 0.00802526 14.1262C0.0204493 14.2905 0.0805582 14.4475 0.180975 14.5781C0.281392 14.7087 0.417748 14.8071 0.573308 14.8613L7.61018 17.2666L22.5963 4.45283L10.9998 18.4242L22.7932 22.4551C22.9102 22.4944 23.0344 22.5077 23.1571 22.4939C23.2798 22.4802 23.398 22.4399 23.5034 22.3757C23.6089 22.3115 23.699 22.225 23.7676 22.1223C23.8361 22.0196 23.8814 21.9032 23.9002 21.7812L26.9939 0.968709C27.0168 0.81464 26.9967 0.657239 26.9357 0.513898C26.8748 0.370556 26.7754 0.246854 26.6486 0.156459Z" />
                    </g>
                </svg>
            </div>
            <div class="content">
                <span>Email:</span>
                <h6><a href="mailto:ilaguptadoc@gmail.com"><span
                            class="__cf_email__"
                           >ilaguptadoc@gmail.com</span></a></h6>
            </div>
        </div>
    </div>
</div>