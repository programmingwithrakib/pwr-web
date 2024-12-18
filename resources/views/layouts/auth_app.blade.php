<!DOCTYPE html>
<html lang="en">
<head>
    <title>Programming With Rakib</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('layouts.head')
    <link href="{{asset('assets/css/auth.css')}}" rel="stylesheet">
    @yield('css')
</head>
    <body>

    @yield('content')


    @yield('script')
    </body>
</html>
