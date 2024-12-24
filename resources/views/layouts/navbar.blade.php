<nav id="navbar" class="shadow">
    <div class="container navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand playwrite-hr-lijeva-regular" href="{{route('home')}}">
                <img style="height: 50px" src="{{asset('assets/images/logo.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menus">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbar-menus">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                    <div style="visibility: hidden">i</div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('curriculum')}}">কারিকুলাম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">কোর্স</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('quick-tips')}}">কুইক টিপস</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('roadmap')}}">রোডম্যাপ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pricing')}}">প্রাইসিং</a>
                        </li>
                        @if(!auth()->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">লগ ইন</a>
                            </li>
                        @endif

                    </ul>
                    <!--<form class="d-flex mb-0">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>-->

                    @if(auth()->check())
                        <div class="dropdown">
                            <button type="button" class="btn" data-bs-toggle="dropdown">
                                @if(!auth()->user()->image)
                                    <b style="height: 40px; width: 40px; border-radius: 50%" class="border p-2">
                                        {{\App\Helper::MakeNameToShort(auth()->user()->name)}}
                                    </b>
                                @else
                                    <img style="height: 40px;width: 40px; border-radius: 50%;object-fit: cover" src="{{auth()->user()->image}}">
                                @endif

                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{route('account.profile')}}"><i class="bi bi-person me-1"></i>{{auth()->user()->name}}</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-1"></i>সেটিংস</a></li>
                                <li>
                                    <form action="{{route('logout')}}" method="POST">@csrf</form>
                                    <a onclick="$(this).prev().submit()" class="dropdown-item" href="#"><i class="bi bi-box-arrow-left me-1"></i>সাইন আঊট</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="#" class="btn btn-brand">জয়েন প্রিমিয়াম</a>
                    @endif

                </div>

            </div>
        </div>
    </div>
</nav>
