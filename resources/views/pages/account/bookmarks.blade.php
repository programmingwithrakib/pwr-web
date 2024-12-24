@extends('layouts.account_app')
@section('page-data')

    <table class="table">
        <thead>
            <tr>
                <th>ছবি</th>
                <th>কোর্স</th>
                <th>টপিক</th>
                <th>মুছে ফেলুন</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookmarks as $data)
                <tr>
                    <td>
                        <img style="height: 40px" class="img-fluid" src="{{$data->course_topic->image}}" alt="{{$data->course_topic->name}}">
                    </td>
                    <td>{{$data->course->name}}</td>
                    <td>{{$data->course_topic->name}}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $bookmarks->links() }}
@endsection
