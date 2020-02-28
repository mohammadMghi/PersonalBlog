<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">@lang('localText.logo_name')</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">@lang('localText.home')<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('localText.work_samples')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('localText.about_me')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('localText.contact_me')</a>
                </li>
            </ul>
        </div>
        @guest
        <div>
            <ul class="navbar-nav mr-5 ">
                <li class="nav-item dropdown float-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ورود
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('login.view')}}">@lang('localText.signin')</a>
                        <a class="dropdown-item" href="{{route('register.view')}}">@lang('localText.signup')</a>

                    </div>
                </li>
            </ul>
        </div>
        @endguest
        @auth
        <div>
            <div class="dropdown show">
                <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{route('profile.view')}}">صفحه کاربری</a>
                    <a class="dropdown-item" href="{{route('logout')}}">خروج</a>

                </div>
            </div>
        </div>
        @endauth
    </nav>

</header>