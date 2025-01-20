@foreach($quick_tips as $item)
    <a href="{{route('quick-tips.details', $item->slug)}}" class="col-md-4 text-dark text-decoration-none mt-3">
        <div class="card shadow-sm border-0" style="height: 70px">
            <div class="card-body d-flex align-items-center">
                <h6 class="m-0">{{\Illuminate\Support\Str::limit($item->title)}}</h6>
            </div>
        </div>
    </a>
@endforeach
