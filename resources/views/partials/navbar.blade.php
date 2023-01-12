<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/styling/style.css">
</head>

<body class="body_bgr">
    <nav class="navbar navbar-expand-lg height_70px nav_background">
        <div class="container-fluid">
            <a class="navbar-brand ear_navbar white_text bold_text" aria-expanded="false" href="/"><span
                    class="bold_text">Sembilan</a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
            <div class="collapse navbar-collapse end_navbar fw-bold" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link nav_space_o " aria-expanded="false" href="/">{{ __('navbar.Home') }}</a>
                    <a class="nav-link nav_space " aria-expanded="false"
                        href="/donations">{{ __('navbar.Donations') }}</a>
                    <a class="nav-link nav_space " aria-expanded="false"
                        href="/articles">{{ __('navbar.Articles') }}</a>
                    @auth
                        <a class="nav-link nav_space " aria-expanded="false" href="/history">{{ __('navbar.History') }}</a>
                    @endauth
                    <a class="nav-link nav_space " aria-expanded="false" href="/events/">{{ __('navbar.Events') }}</a>
                    @auth
                        <a class="nav-link nav_space " aria-expanded="false" href="/profile">{{ __('navbar.Profile') }}</a>
                    @endauth
                    @guest
                        <a class="nav-link nav_space " aria-expanded="false"
                            href="/register">{{ __('navbar.Register') }}</a>
                        <a class="nav-link nav_space " aria-expanded="false" href="/login">{{ __('navbar.Login') }}</a>
                    @endguest

                    @auth
                        <a class="nav-link nav_space " aria-expanded="false" href="/logout">Logout</a>
                    @endauth
                    {{-- @if (Auth::check())
                @if (Auth::user()->hasRole('user'))
                    <a class="nav-link nav_space white_text length_longer_navbar" aria-expanded="false" href="/watchlist">My watchlist</a>
                @endif

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img class ="nav_prof_img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="kocak">
                    </a>
                    <ul class="dropdown-menu dd_menu_chr">
                      <li><a class="btn btn-light nvd nav_drop_1" href="/profile">{{__('navbar.Profile')}}</a></li>
                      <li><a class="btn btn-light nvd nav_drop_2" href="/logout">{{__('navbar.logout')}}</a></li>
                    </ul>
                </li>

              @else
                <a class="btn btn-primary gap_in_bet_nav" href="/register" role="button">{{__('navbar.Register')}}</a>
                <a class="btn btn-outline-primary gap_in_bet_nav" href="/login" role="button">{{__('navbar.Login')}}</a>
              @endif --}}

                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
