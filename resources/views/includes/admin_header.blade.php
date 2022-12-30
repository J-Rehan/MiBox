<header class="header">

    <div class="under_header">


        <div class="mobile-navbar-btn">
            <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
            <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
        </div>
        <img src="{{asset("assets/admin/image/logo.png")}}" class="logo_icon" alt="" srcset="">

        <div  type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
            <span>{{ auth('admin')->user()->name }} <img style="width: 40px" class="rounded" src="{{asset("assets/admin/image/avtar_group.svg")}}"></span>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
           {{-- <li>
                <a class="dropdown-item" href="{{ route('admin.profile.index') }}"> Profile</a>
            </li>--}}
            <li>
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" >
                    {{ csrf_field() }}
                </form>
            </li>
            </li>
        </ul>
    </div>
</header>
<div class="dropdown float-end ">

</div>
