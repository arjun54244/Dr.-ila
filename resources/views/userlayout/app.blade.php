
<!doctype html>
<html lang="en">


@include('userlayout.head')

<body>

    @include('userlayout.sidebar')
    <!-- Login Modal -->

    <!-- Start header section -->
    @include('userlayout.header')
    <!-- End header section -->

    @yield('content')
    

    <!-- Start Footer Section -->
   @include('userlayout.footer')
    <!-- End Footer Section -->

    <!--  Main jQuery  -->
   @include('userlayout.foot')

</body>
</html>