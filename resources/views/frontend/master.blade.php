<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Upesi Money Transfer">
    <meta name="author" content="Ansonika">
    <title>{{$page}}</title>

    <!-- Start of Head -->
    @include('frontend.inc.head')
    <!-- End of Head -->
</head>
<body>
    <!-- Start of Preloader -->
    @include('frontend.inc.preloader')
    <!-- End Preload -->

    {{-- navigation header --}}
    @include('frontend.inc.header')
    {{-- end of navigation header --}}

    {{-- main content --}}
    @yield('content')
    {{-- end of main content --}}

    {{-- footer --}}
    @include('frontend.inc.footer-scripts')
    {{-- end of footer --}}

</body>
</html>