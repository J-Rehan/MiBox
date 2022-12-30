<div class="header-main">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('image/user-ic.svg') }}"> <span>{{ auth('admin')->user()->name }}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><img src="{{ asset('image/bx_bx-user.svg') }}"> Profile</a>
            <a class="dropdown-item" href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{ asset('image/majesticons_logout-line.svg') }}"> Logout</a>
            <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>