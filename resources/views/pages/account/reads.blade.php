@extends('layouts.account_app')
@section('page-data')

    <table class="table">
        <thead>
            <tr>
                <th>ছবি</th>
                <th>টপিক</th>
                <th>সর্বশেষ পঠিত সময়</th>
                <th>পড়ার সংখ্যা</th>
            </tr>
        </thead>
        <tbody>
            @foreach($read_history as $data)
                <tr>
                    <td>
                        <img style="height: 40px" class="img-fluid" src="{{$data->course_topic->image}}" alt="{{$data->course_topic->name}}">
                    </td>
                    <td>{{$data->course_topic->name}}</td>
                    <td>
                        <script>
                            document.write(moment('{{$data->last_visited_time}}').locale('bn-bd').startOf().fromNow())
                        </script>
                    </td>
                    <td>
                        <span style="font-size: 14px" class="badge bg-light border text-dark number rounded-pill">{{\App\Helper::ConvertEnglishToBanglaNumber($data->count_of_read)}}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $read_history->links() }}
@endsection
