@extends('layouts.app')
@section('content')
    <div class="course-details mt-3">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 p-2 course-topics">
                        <h5 class="course-topic-title">{{$course->name}}</h5>
                        <ul class="nav flex-column">

                            @foreach($topics as $topic)
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{route('course-details', [$course->slug, $topic->slug])}}">
                                        @if($topic->is_paid)
                                            <i class="bi bi-lock"></i>
                                        @elseif($topic->slug == $active_topic->slug)
                                            <i class="bi bi-app-indicator"></i>
                                        @else
                                            <i class="bi bi-app"></i>
                                        @endif
                                        <span> {{$topic->name}} </span>
                                    </a>
                                </li>
                            @endforeach
                            {{--
                            <i class="bi bi-app-indicator"></i>
                            <i class="bi bi-check-square"></i>
                            --}}
                        </ul>
                    </div>

                    <div class="col-md-7 ">
                        @if($active_topic->is_paid)
                            <div style="height: 400px; background-image: url({{$topic->image}}); background-size: cover" class="topic-image position-relative">
{{--                                <img class="img-fluid" src="{{$topic->image}}" alt="{{$topic->name}}">--}}
                                <div style="background-color: rgba(255, 255, 255, .7)" class="d-flex h-100 align-items-center justify-content-center">
                                    <div class="premium-area w-75 p-4 text-center">
                                        <h5 class="tiro-bangla-regular">এই টিউটোরিয়ালটি পুরোপুরি দেখতে হলে আপনাকে প্রিমিয়াম মেম্বার হতে হবে। টিউটোরিয়ালটি ২১ মিনিটের একটি সম্পূর্ণ গাইড, যা ৪১০৩টি শব্দ নিয়ে গঠিত।</h5>
                                        <div class="mt-2">
                                            <a href="#" class="btn mt-3 btn-brand-secondary me-2">লগ ইন করুন</a>
                                            <h6 class="mt-3 mb-0">অথবা</h6>
                                            <a href="#" class="btn mt-3 btn-brand ms-2">আমাদের প্রিমিয়াম সদস্য হোন </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @if($active_topic->play_as == "video")
                                <div class="video-description">
                                    <div class="plyr__video-embed" id="player">
                                        <iframe
                                            src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                            allowfullscreen
                                            allowtransparency
                                            allow="autoplay"
                                        ></iframe>
                                    </div>
                                </div>

                            @elseif($active_topic->play_as == "image")
                                <div class="video-description">
                                    <img class="img-fluid" src="{{$active_topic->image}}" alt="{{$topic->name}}">
                                </div>
                            @endif

                        @endif


                        <div class="d-flex p-2 prev-next justify-content-between align-items-center my-2 border-bottom-custom">
                            <a href="@if($prev_topic) {{route('course-details', [$course->slug, $prev_topic->slug])}} @endif" class="btn @if(!$prev_topic) disabled @endif btn-brand-secondary ">
                                <i class="bi bi-arrow-left-circle me-2"></i>
                                <span>পূর্ববর্তী</span>
                            </a>
                            <h4 class="fw-bold p-1 mb-0">{{$active_topic->name}}</h4>
                            <a href="@if($next_topic) {{route('course-details', [$course->slug, $next_topic->slug])}} @endif" class="btn @if(!$next_topic) disabled @endif btn-brand-secondary">
                                <span>পরবর্তী</span>
                                <i class="bi bi-arrow-right-circle me-2"></i>
                            </a>
                        </div>

                        <div class="description-area py-3">
                            @if($active_topic->description_type == "text")
                                <h4>{{$active_topic->name}}</h4>
                                <div>{!! $active_topic->description  !!}</div>
                            @else
                                <div id="markdown" class=" bg-white text-dark py-2">
                                    <script>
                                        document.write(md.render(@json($active_topic->description)))
                                    </script>
                                </div>
                            @endif

                            <!-- Active Topic More Docs -->

                            @foreach($active_topic_docs as $docs)
                                <hr>
                                @if($docs->description_type == "text")
                                    <div>{!! $docs->description  !!}</div>
                                @else
                                    <div id="markdown" class=" bg-white text-dark py-2">
                                        <script>
                                            document.write(md.render(@json($docs->description)))
                                        </script>
                                    </div>
                                @endif
                            @endforeach

                        </div>


                    </div>
                    <div class="col-md-2 py-2 course-guide-line-links">
                        <h6 class="course-topic-guideline-title">রিসোর্স এন্ড গাইডলাইন</h6>
                        <ul class="nav flex-column">

                            @foreach($resources as $resource)
                                @if($resource->info_type == "link")
                                    <li class="nav-item">
                                        <a target="{{$resource->show_in == "external" ? '_blank' : '_self'}}" class="nav-link active" href="{{$resource->info_type = "link" ? $resource->info : '#'}}">
                                            <i class="bi bi-arrow-right-short"></i>
                                            <span> {{$resource->title}} </span>
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">
                                            <i class="bi bi-arrow-right-short"></i>
                                            <span> {{$resource->title}} </span>
                                        </a>
                                    </li>
                                @endif
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
        const player = new Plyr('#player');
        document.querySelectorAll('pre code').forEach((block) => {
            hljs.highlightElement(block);
        });
    </script>
@endsection
