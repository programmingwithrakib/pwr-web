@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/auth.css')}}" >
@endsection

@section('content')
    <div class="auth-container py-4 d-flex justify-content-center align-items-center">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="text-center mb-3">
{{--                        <img height="120px" src="https://admin.programmingwithrakib.com/assets/logo.png">--}}
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0 navbar-nav">
                                @foreach ($errors->all() as $error)
                                    <li><i class="bi bi-slash-circle me-2"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <h4 class="mb-2">SIGN IN</h4>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>



                    <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address | Phone </label>
                            <input value="{{old('email_or_phone')}}" type="text" class="form-control" id="email" name="email_or_phone" placeholder="Enter your email or phone number">
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>

                            </div>
                            <div class="input-group input-group-merge">
                                <input value="" type="password" id="password" class="form-control" name="password" placeholder="********" required="">
                                <span class="input-group-text cursor-pointer" id="showPassword"><i class="bi bi-eye"></i></span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input name="remember" class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">Remember me </label>
                            </div>
                            <a href="#" class="link">Reset password?</a>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-brand d-grid w-100" type="submit">Sign In</button>
                        </div>



                        <div class="mb-3">
                            <a href="{{route('login.google')}}" class="btn border d-flex  align-items-center justify-content-center bg-white d-grid w-100">
{{--                                <i class="bi me-2 text-danger bi-google"></i>--}}
                                <img src="https://cdn.pixabay.com/photo/2021/05/24/09/15/google-logo-6278331_1280.png" height="20px" class="me-2">
                                Continue With Google
                            </a>
                        </div>

                        <div class="mb-3">
                            <a href="{{route('login.github')}}" class="btn d-flex align-items-center justify-content-center btn-dark d-grid w-100">
                                <i class="bi me-2 bi-github"></i>
                                Continue With Github
                            </a>
                        </div>

                        <div class="mb-3 text-center">
                            <a href="{{route('signup')}}" class="link">Create new account?</a>
                        </div>
                    </form>


                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
@endsection
