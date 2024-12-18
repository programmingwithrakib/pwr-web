@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/auth.css')}}" >
@endsection

@section('content')
    <div class="auth-container container py-4 d-flex justify-content-center align-items-center">
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

                    <h4 class="mb-2">SIGN UP</h4>
                    <p class="mb-4">Please sign-up to your account and start the adventure</p>



                    <form enctype="multipart/form-data" id="formAuthentication" class="mb-3 row" style="max-width: 600px" action="{{route('signup')}}" method="POST">
                        @csrf
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input value="{{old('email')}}" type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input value="{{old('phone')}}" type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="phone" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" placeholder="**************" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="**************" name="confirm_password">
                        </div>


                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <a href="{{route('login')}}" class="link">Have an account ? please login</a>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-brand d-grid w-100" type="submit">Sign Up</button>
                        </div>


                        <div class="mb-3">
                            <button class="btn border d-flex  align-items-center justify-content-center bg-white d-grid w-100">
{{--                                <i class="bi me-2 text-danger bi-google"></i>--}}
                                <img src="https://cdn.pixabay.com/photo/2021/05/24/09/15/google-logo-6278331_1280.png" height="20px" class="me-2">
                                Continue With Google
                            </button>
                        </div>
                        <div class="mb-3">
                            <button class="btn d-flex align-items-center justify-content-center btn-dark d-grid w-100">
                                <i class="bi me-2 bi-github"></i>
                                Continue With Github
                            </button>
                        </div>
                    </form>


                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
@endsection
