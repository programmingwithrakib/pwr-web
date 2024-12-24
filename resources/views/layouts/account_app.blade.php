@extends('layouts.app')
@section('content')
    <div class="courses mt-3">
        <div class="container">
            <div class="container-fluid">
                <div class="d-flex justify-content-center p-3">
                    <div class="row w-75">
                        <div class="col-md-4 py-3 bg-white shadow-sm border">
                            @include('layouts.account-sidebar')
                        </div>
                        <div class="col-md-8">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    @yield('page-data')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
