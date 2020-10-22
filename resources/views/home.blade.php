<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Ahmed Ali">
        <title>Shezlong Home Page</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Google Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Bootstrap css -->
        <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.css') }}>
        <!-- Styles for home page -->
        <link rel="stylesheet" href={{ asset('css/home.css') }}>
    </head>
    <body>

        <header id="header">
            <!-- navbar -->
            <navbar class="navbar navbar-expand-lg navbar-light px-5">
                <a href="#header" class="navbar-brand mx-5">
                    <img src={{__('logo')}} alt='No image' style="width:160px;height:62px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">{{__('therapist_list')}}</a>
                        </li>
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">How it works</a>
                        </li>
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">Psychological Tests</a>
                        </li>
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-5">
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">Sign In</a>
                        </li>
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">For Therapists</a>
                        </li>
                        <li class="nav-item active px-1">
                            <a href="#" class="nav-link">{{__('nav_lang')}} <span><i class="material-icons" style='font-size:14px'>language</i><span></a>
                        </li>
                    </ul>
                </div>
            </navbar>
            <!-- end of navbar -->
        </header>

        <script src={{asset('bootstrap/jquery/jquery.js')}}></script>
        <script src={{asset('bootstrap/js/bootstrap.js')}}></script>
    </body>
</html>
