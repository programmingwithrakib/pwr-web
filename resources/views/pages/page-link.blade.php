@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="container-fluid">


            <div class="card">
                <div class="banner-search-box">
                    <div class="container">
                        <div class="container-fluid d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column  align-items-center justify-content-center banner-search-box-area" >
                                <h1>{{$page_data?->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body mt-2">


                    {!! $page_data?->content !!}
                </div>
            </div>
        </div>
    </div>

@endsection
