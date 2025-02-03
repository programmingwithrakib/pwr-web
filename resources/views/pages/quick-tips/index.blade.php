@extends('layouts.app', ['meta_title' => 'Quick Tips'])
@section('content')
    <div class="container mt-3">
        <div class="container-fluid">
            <div id="quick-tips-area">
                <div class="quick-tips-header shadow rounded bg-white p-3 py-5" >
                    <div class="row">
                       <div class="col-7 col-md-9">
                           <input id="quick-tips-input" value="{{request()->q ?? ''}}" placeholder="খুজুন..." class="form-control">
                       </div>
                        <div class="col-5 col-md-3">
                            <select id="quick-tips-course-input" class="form-control bg-dark text-white w-25 w-100">
                                <option value="">সকল</option>
                                @foreach(\App\Models\Course::all() as $course)
                                    <option @if($course->slug == request()->course) selected @endif value="{{$course->slug}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="quick-tips-body">
                    <div class="my-5 bg-white py-5 loading-area d-none">
                        <div class="text-center">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="row content-area">
                        @include('pages.quick-tips.data')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        let timeout = null;
        $('#quick-tips-input').on('keyup keydown', function (){
            getData();
        })

        $('#quick-tips-course-input').on('change', function (){
            getData();
        })


        function getData(){
            $('.quick-tips-body .loading-area').removeClass('d-none')
            $('.quick-tips-body .content-area').addClass('d-none')

            let q = $('#quick-tips-input').val();
            let course = $('#quick-tips-course-input').val();


            clearTimeout(timeout)
            timeout = setTimeout(function (){
                let url = "{{route('quick-tips.search')}}";
                let UrlObject = new URL(url)
                UrlObject.searchParams.set('q', q)
                UrlObject.searchParams.set('course', course)

                history.pushState(null , 'Quick Tips Search Page', UrlObject.search )
                axios.get(UrlObject.href)
                    .then(function (response){
                        $('.quick-tips-body .loading-area').addClass('d-none')
                        $('.quick-tips-body .content-area').removeClass('d-none')

                        let data = response.data;
                        $('.quick-tips-body .row').html(data)
                    })
            }, 300)
        }
    </script>
@endsection
