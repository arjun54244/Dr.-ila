<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/daterangepicker.css')}}">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <!-- BoxIcon  CSS -->
    <link href="{{asset('assets/css/boxicons.min.css')}}" rel="stylesheet">
    <!-- Select2  CSS -->
    <link href="{{asset('assets/css/select2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Title -->
    <title>@yield('title', 'Dr. ila')</title>
    <link rel="icon" href="{{asset('assets/img/home1/fav.png')}}" type="image/gif" sizes="20x20">
    @stack('styles')
</head>
<style>
    /* Floating Contact Bar */
    #floatingContactBar {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background: #ffffff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        border-radius: 10px 0 0 10px;
        padding: 10px 0;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #floatingContactBar a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        color: #fff;
        font-size: 18px;
        text-decoration: none;
        transition: all 0.3s ease;
        border-radius: 10px 0 0 10px;
        margin: 5px 8px;
        font-weight: bold;
    }

    #floatingContactBar a i {
        font-size: 25px;
        /* margin-right: 8px; */
    }

    #floatingContactBar a span {
        display: none;
        font-size: 15px;
    }

    /* #floatingContactBar a:hover span {
        display: inline;
        
    } */

    #floatingContactBar a:nth-child(1) {
        background: #d93025;
        /* Email (Gmail Red) */
    }   

    #floatingContactBar a:nth-child(2) {
        background: #25D366;
        /* WhatsApp Green */
    }

    #floatingContactBar a:nth-child(3) {
        background: #007BFF;
        /* Phone (Blue) */
    }
    #backToTop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: #b31d42;
    color: #fff;
    border: none;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    font-size: 22px;
    display: none;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    z-index: 99999;
}

#backToTop:hover {
    background: #0056b3;
}

#backToTop i {
    font-size: 24px;
}


    /* #floatingContactBar a:hover {
        opacity: 0.85;
        transform: scale(1.05);
    } */
</style>
<div id="floatingContactBar">
    <a href="mailto:ilaguptadoc@gmail.com" id="emailLink">
        <i class="fa fa-envelope"></i><span>Email</span>
    </a>
    <a href="https://wa.me/9972999729?text=Hello%20I%20need%20assistance" id="whatsappLink">
        <i class="bx bxl-whatsapp"></i><span>WhatsApp</span>
    </a>
    <a href="tel:+9972999729" id="phoneLink">
        <i class="fa fa-phone"></i><span >Support</span>
    </a>
    <div class="clearfix"></div> 
</div>

<button id="backToTop">
    <i class="fa fa-arrow-up"></i>
</button>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    var backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

</script>
