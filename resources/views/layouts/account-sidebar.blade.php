<ul class="nav account-sidebar flex-column">
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('account.profile') ? 'active' : ''}}" href="{{route('account.profile')}}">
            <i class="bi bi-pencil-square me-1"></i>
            <span> প্রফাইল</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-wallet2 me-1"></i>
            <span>মাই মেম্মারশিপ</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('account.reads') ? 'active' : ''}}" href="{{route('account.reads')}}">
            <i class="bi bi-card-text me-1"></i>
            <span>পঠিত হিস্টরি</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('account.bookmarks') ? 'active' : ''}}" href="{{route('account.bookmarks')}}">
            <i class="bi bi-heart me-1"></i>
            <span>আমার বুক-মার্ক সমূহ</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('account.importances') ? 'active' : ''}}" href="{{route('account.importances')}}">
            <i class="bi bi-journal-arrow-up me-1"></i>
            <span>গুরুত্বপূর্ন বিষয়াবলি</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-chat-left me-1"></i>
            <span>আমার মন্তব্য-সমূহ</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-gear me-1"></i>
            <span>সেটিংস</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-shield-lock me-1"></i>
            <span>পাসওয়ার্ড পরিবর্তন</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-power me-1"></i>
            <span>সাইন আউট</span>
        </a>
    </li>
</ul>
