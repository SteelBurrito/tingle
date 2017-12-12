<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">

        <!-- CSRF Stuff -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <title>Tingle</title>        
    </head>
    <body>
        <div id="app">
        {{--  Page Navbar  --}}
        <nav class="navbar is-light" role="navigation" aria-label="main navigation">
            <div class="navbar-item">
                <router-link to="/" exact>Home</router-link>
            </div>
            <div class="navbar-item">
                <router-link to="/about">About</router-link>
            </div>
        </nav>
        <br/>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>      
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
