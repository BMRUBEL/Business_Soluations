<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/js/app.js'])
        @vite(['resources/sass/app.scss'])
    </head>
    <body class="antialiased">
        <div id="app">
            <router-view></router-view>
        </div>
    </body>
</html>

{{-- website script --}}
<script src="{{asset('website/vendor/aos/aos.js')}}"></script>
<script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('website/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('website/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('website/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('website/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('website/js/main.js')}}"></script>
