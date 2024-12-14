<nav id="navbar" class="shadow">
    <div class="container navbar navbar-expand-sm navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand playwrite-hr-lijeva-regular" href="{{route('home')}}">
                <img style="height: 50px" src="{{asset('assets/images/logo.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="mynavbar">
                <div class="d-flex justify-content-between w-100">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">লগ ইন</a>
                        </li>
                    </ul>
                    <!--<form class="d-flex mb-0">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>-->
                    <a href="#" class="btn btn-brand">জয়েন প্রিমিয়াম</a>
                </div>

            </div>
        </div>
    </div>
</nav>
