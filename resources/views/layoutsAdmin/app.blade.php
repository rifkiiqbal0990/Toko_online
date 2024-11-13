<!DOCTYPE html>
<html lang="en">

<head>

    @include('layoutsAdmin.head')

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
        @include('layoutsAdmin.navbar')
        <!--End Navbar-->

        <!--Sidebar-->
        @include('layoutsAdmin.sidebar')
        <!--End Sidebar-->

        <!--Content-->
        <div class="content-body">
            @yield('content')
        </div>
        <!--End Content-->

        <!--Footer start-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--Footer end-->
    </div>

    @include('layoutsAdmin.footer')

</body>

</html>
