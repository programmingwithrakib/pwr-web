@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="container-fluid">
            <div class="pricing-area">
                <div class="p-5 text-center">
                    <h1>মেম্বারশিপ প্যাকেজ</h1>
                    <p>আমাদের প্রিমিয়াম কোর্স, দীর্ঘ টিউটোরিয়াল, ওয়েবিনার এবং ডিসকর্ডে ব্যক্তিগত সহায়তায় সীমাহীন অ্যাক্সেস পান।</p>
                </div>
                <div class="row">
                    @foreach($pricing as $price)
                        <div class="col-md-3">
                            <form method="POST" class="card">
                                @csrf
                                <input type="hidden" name="pricing-id" value="{{$price->id}}">
                                <div class="card-body p-0 text-center">
                                    <h5 class="mt-5">{{$price->name}}</h5>
                                    <h1 class="mt-4"><span class="number">{{\App\Helper::ConvertEnglishToBanglaNumber($price->price)}}</span> টাকা</h1>
                                    <div class="py-5 px-3 bg-light">
                                        <button class="btn btn-brand w-100">কিনে ফেলুন</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="py-5 flex-column d-flex justify-content-center align-items-center faq-area">
                <div class="mb-4">
                    <hr data-content="AND" class="hr-text">
                    <h5 class=" text-uppercase">আপনি যে বিষয়গুলি জানতে চাচ্ছেন</h5>
                    <hr data-content="AND" class="hr-text">
                </div>
                <div class="w-50">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button btn-brand-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button btn-brand-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button btn-brand-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
