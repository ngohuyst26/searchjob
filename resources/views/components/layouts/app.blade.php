<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />


        <link rel="stylesheet" href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

    @include('components.layouts.particals.header')

    <div class="main-content">
        <div class="page-content">
        {{ $slot }}
        </div>
    </div>

    @include('components.layouts.particals.footer')



    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="{{asset('assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>


    <script src="{{asset('assets/js/pages/switcher.js')}}"></script>

    <script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('assets/js/pages/dropdown&modal.init.js')}}"></script>

    <!-- Swiper Js -->
    <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/swiper.init.js')}}"></script>

    <script src="{{asset('assets/js/pages/nav&tabs.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>
