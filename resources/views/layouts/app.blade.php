<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ isset($meta_title) ? 'ProgrammingWithRakib - '.$meta_title : 'ProgrammingWithRakib - ওয়েব প্রোগ্রামিং শেখার সেরা প্ল্যাটফর্ম' }} </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{url()->current()}}">
    <meta name="theme-color" content="#6610f2">
    <meta name="author" content="MD Rakib Miah">
    <meta name="keywords" content="web development, programming tutorials, coding tips, web programming, JavaScript tutorials, PHP tutorials, Python tutorials, Laravel tips, React tutorials, Node.js tips, HTML and CSS, frontend development, backend development, full-stack development, programming notes, web development tips, coding best practices, SEO for developers, API development, web security, database optimization, WordPress development, software engineering, web design, UI/UX tips, Git and GitHub, programmingwithrakib, Linux, Ubuntu, Jquery Tutorial, Bootstrap Tutorial, Django tutorial, MongoDB tutorial, MySQL turorial, PostGree tutorial, SQLite tutorial, Database tutorial">
    <meta name="description" content="ProgrammingWithRakib - ওয়েব প্রোগ্রামিং শেখার সেরা প্ল্যাটফর্ম। এখানে পাবেন JavaScript, PHP, Python, Laravel, React, Node.js সহ বিভিন্ন ওয়েব ডেভেলপমেন্ট টিপস, নোটস ও টিউটোরিয়াল। ওয়েব প্রোগ্রামিং সহজভাবে শিখুন এবং ক্যারিয়ার গড়ুন!">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Open Graph Meta Tags (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="{{ isset($meta_title) ? 'ProgrammingWithRakib - '.$meta_title : 'ProgrammingWithRakib - ওয়েব প্রোগ্রামিং শেখার সেরা প্ল্যাটফর্ম' }}">
    <meta property="og:description" content="ওয়েব প্রোগ্রামিং, কোডিং টিপস, নোটস এবং টিউটোরিয়াল নিয়ে সর্বশেষ আপডেট পান।">
    <meta property="og:image" content="{{$meta_image ?? 'https://programmingwithrakib.com/assets/images/logo.png'}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (Twitter Optimization) -->
{{--    <meta name="twitter:card" content="summary_large_image">--}}
    <meta name="twitter:title" content="{{ isset($meta_title) ? 'ProgrammingWithRakib - '.$meta_title : 'ProgrammingWithRakib - ওয়েব প্রোগ্রামিং শেখার সেরা প্ল্যাটফর্ম' }}">
    <meta name="twitter:description" content="ওয়েব প্রোগ্রামিং, কোডিং টিপস, নোটস এবং টিউটোরিয়াল নিয়ে সর্বশেষ আপডেট পান।">
    <meta name="twitter:image" content="{{$meta_image ?? 'https://programmingwithrakib.com/assets/images/logo.png'}}">
    <meta name="twitter:site" content="@yourTwitterHandle">



    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('layouts.head')
    @yield('css')
</head>
<body>

<!-- Top Navbar -->
@include('layouts.navbar')


@yield('content')

@include('layouts.footer')

@yield('script')
</body>
</html>
