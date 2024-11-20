<!DOCTYPE html>
<html lang="en">

<head>

    @include('layoutsUsers.head')
    @stack('custom-css')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <div id="main-wrapper">
        <!--Navbar-->
        @include('layoutsUsers.navbar')
        <!--End Navbar-->

        <!--Content-->
        <div class="content-body">
            @yield('content')
        </div>
        <!--End Content-->

        <!--Footer start-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">ZChrist</a> 2024</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">XChrist</a></p>
            </div>
        </div>
        <!--Footer end-->
    </div>

    @include('layoutsUsers.footer')

</body>

</html>
