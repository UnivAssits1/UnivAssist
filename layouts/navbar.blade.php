<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom px-5 fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>--}}
{{--        </li>--}}
        <li class="nav-item d-none d-sm-inline-block">
            <img src="{{asset('img/LogoTrans2.png')}}" alt="" width="30px">
{{--            <a href="{{route('dashboard')}}" class="nav-link">Logo</a>--}}
        </li>
    </ul>

     <!-- SEARCH FORM -->
    <form class="form-inline ms-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

     <!-- Right navbar links -->


    <ul class="navbar-nav ms-auto">
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>--}}
{{--            </li>--}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dashboard')}}" class="nav-link">Home</a>
            </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('indekos')}}" class="nav-link">Find Indekos</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('laptop')}}" class="nav-link">Rent Laptop</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('book')}}" class="nav-link">Rent Book</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('faq')}}" class="nav-link">FAQ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('contact')}}" class="nav-link">Contact Us</a>
        </li>
{{--        </ul>--}}
        <!-- Notifications Dropdown Menu -->
{{--        <li class="nav-item dropdown">--}}
{{--            <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                <i class="fa fa-cog"></i>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
{{--                <a href="#" class="dropdown-item">Settings</a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item">Logout</a>--}}
{{--            </div>--}}
{{--        </li>--}}
    </ul>
    <a href="{{route('login')}}" class="nav-link btn btn-lg px-3 py-1 text-white" style="background-color: #AA998F">Log In</a>

</nav>
<!-- /.navbar -->
