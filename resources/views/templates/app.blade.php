<!DOCTYPE html>
<html>
    @include('partials.header')

<body class="home_alt">

<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="{{ url('assets/images/loader-alt.gif') }}" alt="">
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">

    @include('partials.navigation')

    @yield('welcomeSection')

        @yield('body')

    @include('partials.stickyFooter')

    @include('partials.loginModal')
</div>
<!-- end wrapper -->
@include('partials.javascript')
@yield('javascript')

</body>
</html>