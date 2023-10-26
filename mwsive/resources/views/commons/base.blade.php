<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>MWSIVE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" >

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>    
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top py-0 bg-black">
        <div class="row mx-0 ps-5 col-lg-2 col-md-4 col-sm-4 col-4 ms-lg-auto ms-md-0 ms-sm-0 ms-0 align-items-center">
            <a class="navbar-brand" href="{{ route('landing.index') }}">
                <img id="navbarLogo" class="my-auto" src="{{asset('assets/icons/Mwsive_marca.png')}}" alt="Logo"/>
            </a>
        </div>
        <div class="row mx-0 pe-5 col-auto align-items-center">
            <button id="OpenMenu" class="navbar-toggler my-auto" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end pe-lg-5 pe-md-0 pe-sm-0 pe-0" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li id="nav_index" class="nav-item px-3 {{ request()->routeIs('landing.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('landing.index')}}">{{__('general.nav_index')}}</a>
                </li>
                <li id="nav_our_story" class="nav-item px-3 {{ request()->routeIs('landing.our_story') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('landing.our_story')}}">{{__('general.nav_our_story')}}</a>
                </li>
                <li id="nav_faq" class="nav-item px-3 {{ request()->routeIs('landing.faq') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('landing.faq')}}">{{__('general.nav_faq')}}</a>
                </li>
                <li id="nav_tc" class="nav-item px-3 {{ request()->routeIs('landing.tc') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('landing.tc')}}">{{__('general.nav_tc')}}</a>
                </li>
            </ul>            
        </div>
    </nav>
    <div class="">
        @yield('content')
    </div>
    <footer>
        <div class="container p-5">
            <div class="row align-items-center text-center py-5">
                <div class="col-12 align-self-center">  
                    <img class="my-3" src="{{asset('assets/img/Logo_Mwsive.svg')}}" width="264" height="45"/>
                    <h3 class="pb-3 pt-5 text-gray">{{__('general.social_media')}}</h3> 
                </div>                 
                <div id="social_media_links" class="col-lg-9 row col-12 align-self-center mx-auto" style="">                    
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="https://www.youtube.com/channel/UCvpzWzkB_tI9UXYl-kLJrGw">
                        <img class="icon-social" src="{{asset('assets/icons/youtube.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="https://www.tiktok.com/@mwsive">
                        <img class="icon-social" src="{{asset('assets/icons/tiktok.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="https://www.instagram.com/mwsive/?hl=en">
                        <img class="icon-social" src="{{asset('assets/icons/instagram.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="">
                        <img class="icon-social" src="{{asset('assets/icons/facebook.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="">
                        <img class="icon-social" src="{{asset('assets/icons/discord.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="">
                        <img class="icon-social" src="{{asset('assets/icons/snapchat.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="https://twitter.com/mwsive">
                        <img class="icon-social" src="{{asset('assets/icons/twitter.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="">
                        <img class="icon-social" src="{{asset('assets/icons/linkedin.svg')}}" height="50" width="50"/></a>
                    <a class="px-3 my-3 col-lg-auto col-md-2 col-sm-3 col-3" href="">
                        <img class="icon-social" src="{{asset('assets/icons/at.svg')}}" height="50" width="50"/></a>

                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/app.js')}}"></script> 
</body>
</html>
