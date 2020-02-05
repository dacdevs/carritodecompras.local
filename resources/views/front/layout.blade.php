
<!doctype html>
<html class="no-png" lang="es">
<head>
    @include('front.partials.head')
</head>

<body>

    @include('front.partials.header')

    <!--slider area start-->
    @yield("content")
    <!--home section bg area end-->

    @include('front.partials.footer')
    @include('front.partials.modal')
    @include('front.partials.script')
</body>
</html>
