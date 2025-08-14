


<footer class="footer">

    <div class="wrapper">
        <div class="footer__decoration">
            <div class="header__underline">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/underline-header.svg"
                    alt="decoration">
            </div>

            <!-- <div class="gradient__underline left">
        <img class="icon-svg" src="/{{ asset('') }}frontend/img/gradient/gradient-underline.svg" alt="gradient">
      </div> -->

            <div class="blur__btn--power">
                <div class="blur__btn--bg blur-26"></div>
                <div class="blur__btn--text">
                    <img src="{{ asset('') }}frontend/img/icons/text-arround.svg" alt="decoration">
                </div>
                <a href="{{route('login')}}"><img class="icon-svg"
                        src="{{ asset('') }}frontend/img/icons/btn-power.svg" alt="decoration"></a>
            </div>


            <!-- <div class="gradient__underline right">
        <img class="icon-svg" src="/{{ asset('') }}frontend/img/gradient/gradient-underline.svg" alt="gradient">
      </div> -->
        </div>

        <a href="{{asset('')}}" class="footer__logo" aria-label="{{ siteName() }}">
            <!-- <img class="icon-svg" src="/{{ asset('') }}frontend/img/logo_footer.svg" alt="logo"> -->
            <img class="icon-svg" src="{{ asset('') }}frontend/img/user_logo.png" alt="logo">
        </a>

        <nav class="footer__menu">
            <ul>
                <li>
                    <a href="{{asset('')}}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{route('faq')}}">
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="{{route('contact-us')}}">
                        Contacts
                    </a>
                </li>
            </ul>
        </nav>

        <div class="footer__support">
            <a class="btn-support" href="https://t.me/{{ siteName() }}_support" target="_blank">
                <span>
                    Support
                </span>
                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/support.svg"
                    alt="icon">
            </a>

            <a class="btn-support" href="https://t.me/{{ siteName() }}_chat" target="_blank">
                <span>
                    Chat
                </span>
                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/chat.svg" alt="icon">
            </a>
        </div>

        <div class="footer__enter">
            <a href="{{route('register')}}">
                <span>
                    Sign UP
                </span>
            </a>
            <a href="{{route('login')}}">
                <span>
                    Login
                </span>
                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg"
                    alt="icon">
            </a>
        </div>

        <div class="footer__copyright">
            <p>
                © Copyright <a href="#"
                    style="margin: 0px;" target="_blank">{{ siteName() }}</a> 2024
            </p>

            <a href="{{route('term-candition')}}">
                Term & Canditions
            </a>
        </div>
    </div>
</footer>

<svg width="0" height="0" style="position:absolute">
    <filter id="blur_26">
        <feGaussianBlur in="SourceGraphic" stdDeviation="26"></feGaussianBlur>
    </filter>
</svg>
<svg width="0" height="0" style="position:absolute">
    <filter id="blur_42">
        <feGaussianBlur in="SourceGraphic" stdDeviation="12"></feGaussianBlur>
    </filter>
</svg>
<svg width="0" height="0" style="position:absolute">
    <filter id="blur_5">
        <feGaussianBlur in="SourceGraphic" stdDeviation="5"></feGaussianBlur>
    </filter>
</svg>

<div class="info-device" style="display: none;">
    <div class="info-browser">
    </div>
</div>

<!-- scripts__css -->
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/chakra.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/jackhill.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/red.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/codec.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/tomorrow.css">
<link rel="stylesheet" href="{{ asset('') }}frontend/css/simple-scrollbar.css">
<link rel="stylesheet" href="{{ asset('') }}frontend/css/aos.css">


<style type="text/css">
    .footer__copyright a {
        transition: 0.4s;
    }

    .footer__copyright a:hover {
        color: #fff;
    }
</style>


<script type="text/javascript" src="{{ asset('') }}frontend/js/jquery.js"></script>
<script type="text/javascript" src="{{ asset('') }}frontend/js/simple-scrollbar.js"></script>
<script type="text/javascript" src="{{ asset('') }}frontend/js/aos.js"></script>
<script type="text/javascript" src="{{ asset('') }}frontend/js/main%EF%B9%96v=1.120.js"></script>
<!-- end__scripts__css -->

</body>

</html>


<script src="https://code.tidio.co/wka0xpengchvzdtayfl6b13ut90m8lqw.js"></script>
