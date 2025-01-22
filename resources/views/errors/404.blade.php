@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="container-fluid">
            <div class="coming-soon row">
                <div class="col-md-6">
                    <img alt="" height="300px" src="/assets/images/404.svg">
                </div>
                <div class=" col-md-6">
                    <div class="coming-soon-area h-100 d-flex flex-column justify-content-center">
                        <h1>আপনার তথ্যটি খুজে পাওয়া যায়নি!</h1>
                        <h6 class="lh-lg">
                            পৃষ্ঠাটি খুঁজে পাওয়া যায়নি! যে পৃষ্ঠাটি আপনি খুঁজছেন, তা সরিয়ে নেওয়া হয়েছে বা এর ঠিকানা পরিবর্তিত হয়েছে। দয়া করে সঠিক URL ব্যবহার করুন অথবা হোমপেজে ফিরে যান।

                        </h6>

                        <div>
                            <a href="{{route('home')}}" class="btn btn-brand">হোম পেজ যেতে ক্লিক করুন</a>
                        </div>
                    </div>
                    <!--<div>
                        <h6>আপনারা আমাদের সাপোর্ট এবং শুভকামনা জানালে আমরা আরও অনুপ্রাণিত হব।</h6>
                        <h6>যোগাযোগে থাকুন:</h6>
                        <h6>📧 ইমেইল: support@nexerb.com</h6>
                        <h6>📞 ফোন: +৮৮০-01732691729</h6>
                        <h6>শুভেচ্ছান্তে,</h6>
                        <h6>নেক্সার্ব একাডেমি</h6>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

@endsection
