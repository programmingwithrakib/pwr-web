@extends('layouts.app')
@section('content')
    @include('layouts.banner_search')

    <div class="courses mt-3">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-md-4 mb-4">
                            <div class="card" style="width:400px">
                                <img style="height: 220px" class="card-img-top" src="{{$course->image}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title course-title">{{$course->name}}</h4>
                                    <div class="d-flex align-content-center course-info-icon-text">
                                        <div>
                                            <i class="bi bi-play-btn me-1"></i>
                                            <span> {{$course->video_count}}</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-book me-1"></i>
                                            <span>{{$course->word_count}}</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-calendar me-1"></i>
                                            <span> {{$course->publish_date}}</span>
                                        </div>
                                    </div>
                                    <a href="{{route('course-details', $course->slug)}}" class="btn w-100 btn-light">
                                        <span> বিস্তারিত দেখুন </span>
                                        <i class="bi bi-arrow-right ms-3"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
