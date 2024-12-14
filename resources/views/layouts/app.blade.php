<!DOCTYPE html>
<html lang="en">
<head>
    <title>Programming With Rakib</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('layouts.head')
</head>
<body>

<!-- Top Navbar -->
@include('layouts.navbar')


@yield('content')

@include('layouts.footer')

@yield('script')
</body>
</html>
