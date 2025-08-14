<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0, user-scalable=0"> -->
    <meta name="description" content="{{ siteName() }}">
    <title>{{ siteName() }}</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/css/reset.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/style.css">

    <style type="text/css">
        .home_logout_a svg {
            width: 18px !important;
            height: 18px !important;
        }
    </style>
</head>

<!-- <body onload="ShowTime()"> -->
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__underline">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/underline-header.svg"
                    alt="decoration">
            </div>

            <div class="dropdown-toggle header__nav--btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <a href="{{asset('')}}" class="logo" aria-label="{{ siteName() }}">
                <img class="icon-svg" src="{{ asset('') }}frontend\img\user_logo.png" alt="logo">
            </a>

            <div class="header__nav">
                <!-- <div class="dropdown-toggle header__nav--btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div> -->

                <div class="header__nav--decoration">
                    <div class="gradient__violet">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-violet-header.svg"
                            alt="gradient">
                    </div>
                </div>

                <nav>
                    <ul>
                        <li>
                            <a href="{{asset('')}}" class="{{menuActive('Index')}}">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{route('faq')}}" class="{{menuActive('faq')}}">
                                Faq
                            </a>
                        </li>

                        <li>
                            <a href="{{route('contact-us')}}" class="{{menuActive('contact-us')}}">
                                Contacts
                            </a>
                        </li>

                        <li>
                            <a href="{{route('start')}}" class="{{menuActive('start')}}">
                                How to start
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="header__nav--info">
                    <div class="header__nav--date">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/date.svg" alt="icon">

                        <p>
                            info@airocoin.co </p>
                    </div>


                </div>


                <div class="header__nav--enter">
                    <a href="{{route('register')}}" class="{{menuActive('register')}}" style="min-height: 18px;">
                        <span>
                            Sign UP
                        </span>
                    </a>

                    <a href="{{route('login')}}" class="{{menuActive('login')}}">
                        <span>
                            Login
                        </span>

                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg"
                            alt="icon">
                    </a>
                </div>


                <div class="footer__support">
                    <a href="https://t.me/defisip" target="_blank">
                        <span>
                            Support
                        </span>
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/support.svg" alt="icon">
                    </a>

                    <a href="https://t.me/defisip" target="_blank">
                        <span>
                            Chat
                        </span>
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/chat.svg" alt="icon">
                    </a>
                </div>
            </div>


            <div class="header__nav--enter">
                <a href="{{route('register')}}">
                    <span>
                        Sign UP
                    </span>
                </a>

                <a href="{{route('login')}}">
                    <span>
                        Login
                    </span>

                    <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg" alt="icon">
                </a>
            </div>


        </div>
    </header>

