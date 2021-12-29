<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />

        <title>Calories | @yield('title')</title>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
            }
            body {
                margin: 0;
            }
            a {
                background-color: transparent;
            }
            [hidden] {
                display: none;
            }
            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont,
                    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
                    sans-serif, Apple Color Emoji, Segoe UI Emoji,
                    Segoe UI Symbol, Noto Color Emoji;
                line-height: 1.5;
            }
            *,
            :after,
            :before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
        </style>

        <style>
            body {
                font-family: "Nunito", sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div
            style="
                background-color: aqua;
                border-bottom: 3px solid rgb(2, 148, 148);
            "
        >
            <nav
                style="
                   
                "
            >
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <a href="/posts">Posts</a>
            </nav>
        </div>
        <div>
            @include('layout.alert')
        </div>
        <div class="content">
            @yield('content')
        </div>
        
    </body>
</html>
