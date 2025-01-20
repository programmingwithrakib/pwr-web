@extends('layouts.app')
@section('content')
    <div class="course-details mt-3">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="d-flex p-2 prev-next justify-content-between align-items-center my-2 border-bottom-custom">
                            <h5 class="fw-bold p-1 mb-0">{{$quick_tip->title}}</h5>
                        </div>

                        <div class="description-area py-3">
                            @if($quick_tip->description_type == "text")
                                <div>{!! $quick_tip->description  !!}</div>
                            @else
                                <div id="markdown" class=" bg-white text-dark py-2">
                                    <script>
                                        document.write(md.render(@json($quick_tip->description)))
                                    </script>
                                </div>
                            @endif



                        </div>


                    </div>
                    <div class="col-md-3 py-2 course-guide-line-links">
                        <h6 class="course-topic-guideline-title">সম্পর্কিত আরো টিপস পড়ুন</h6>
                        <ul class="nav flex-column">

                            @foreach($course_wise_quick_tips as $item)
                                <li class="nav-item">
                                    <a target="_self" class="nav-link d-flex" href="{{route('quick-tips.details', $item->slug)}}">
                                        <i class="bi me-1 bi-arrow-right-short"></i>
                                        <span> {{$item->title}} </span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        document.querySelectorAll('pre code').forEach((block) => {
            hljs.highlightElement(block);
        });

        markDown();
    </script>
@endsection
