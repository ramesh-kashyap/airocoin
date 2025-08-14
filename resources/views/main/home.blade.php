<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Airocoin | Automated Cryptocurrency Trading Powered by AI</title>
    <meta name=description
        content="Trade smarter with our AI-powered crypto trading bot. Automate your Bitcoin and altcoin strategies 24/7 with cutting-edge artificial intelligence">
    <link rel=apple-touch-icon sizes=180x180 href=theme/static/apple-touch-icon.png>
    <link rel=icon type=image/png sizes=32x32 href=theme/static/favicon-32x32.png>
    <link rel=icon type=image/png sizes=16x16 href=theme/static/favicon-16x16.png>
    <link rel=manifest href=theme/static/site.webmanifest>
    <style>
        .preloader {
            background: #000;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2147483590;
            width: 100%;
            height: 100%;
            height: 100vh;
            opacity: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .preloader>* {
            -webkit-animation: pulseLogo 1.5s ease-in-out infinite;
            animation: pulseLogo 1.5s ease-in-out infinite;
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .preloader.ready {
            opacity: 0;
            top: -100%;
            top: -100vh;
            transition: opacity .15s .2s linear, top 0s .7s
        }

        @-webkit-keyframes pulseLogo {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }

            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }
        }

        @keyframes pulseLogo {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }

            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }
        }
    </style>
    <link rel=stylesheet href=theme/css/style-v-d367a25c6b3e.css>
    <script src=https://unpkg.com/lottie-web/build/player/lottie.min.js></script>
    <script src=https://cdn.jsdelivr.net/npm/centrifuge@2.8.0/dist/centrifuge.min.js></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17076536460"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        }
        gtag('js', new Date());
        gtag('config', 'AW-17076536460')
    </script>
    <script>
        var centrifuge;
        document.addEventListener('DOMContentLoaded', function() {
            centrifuge = new Centrifuge('wss://cortextrade.ai:8443/connection/websocket');
            centrifuge.connect()
        })
    </script>
    <script>
        var pageInits = [],
            pageDestroys = []
    </script>
</head>

<body style="overflow-x:hidden !important">
    <script>
        var html = document.documentElement,
            WebP = new Image();
        WebP.onload = WebP.onerror = function() {
            if (WebP.height === 2) {
                if (html.className.indexOf('no-webp') >= 0) {
                    html.className = html.className.replace(/\bno-webp\b/, 'webp')
                } else {
                    html.className += ' webp'
                }
            } else {
                if (html.className.indexOf('webp') >= 0) {
                    html.className = html.className.replace(/\bwebp\b/, 'no-webp')
                } else {
                    html.className += ' no-webp'
                }
            }
        };
        WebP.src =
            'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA'
    </script>
    <div class=preloader id=js-preloader><svg width=65 height=65 viewbox="0 0 44 45" fill=none
            xmlns=http://www.w3.org/2000/svg>
            <path
                d="M21.9787 44.4787C9.8628 44.4787 0 34.6159 0 22.5H4.5913C4.5913 32.1077 12.4135 39.8874 21.9787 39.8874C29.0357 39.8874 35.2425 35.7213 37.9208 29.4295H32.6918C30.3536 33.043 26.3575 35.2536 21.9787 35.2536V30.6623C25.1246 30.6623 27.9304 28.9193 29.2908 26.1135L29.9285 24.8382H44L43.3198 27.6865C40.9391 37.5493 32.1816 44.4787 21.9787 44.4787Z"
                fill=url(#paint0_linear_439_3587)></path>
            <path
                d="M13.8159 22.5H9.22461C9.22461 15.443 14.9637 9.74636 21.9782 9.74636C26.357 9.74636 30.3531 11.957 32.6913 15.5705H37.9203C35.1995 9.27873 28.9927 5.11254 21.9782 5.11254V0.52124C32.1811 0.52124 40.9386 7.45071 43.3193 17.3135L43.9995 20.1618H29.928L29.2903 18.8865C27.8874 16.0807 25.0816 14.3377 21.9782 14.3377C17.4719 14.3377 13.8159 17.9937 13.8159 22.5Z"
                fill=url(#paint1_linear_439_3587)></path>
            <defs>
                <lineargradient id=paint0_linear_439_3587 x1=7.06091 y1=39.6115 x2=37.9758 y2=15.205
                    gradientunits=userSpaceOnUse>
                    <stop stop-color=#2CF074></stop>
                    <stop offset=1 stop-color=#2BF3C3></stop>
                </lineargradient>
                <lineargradient id=paint1_linear_439_3587 x1=2.7845 y1=34.1953 x2=33.6994 y2=9.78883
                    gradientunits=userSpaceOnUse>
                    <stop stop-color=#2CF074></stop>
                    <stop offset=1 stop-color=#2BF3C3></stop>
                </lineargradient>
            </defs>
        </svg> </div>
    <script>
        window.addEventListener('load', function() {
            $('#js-preloader').addClass('ready').addClass('loaded')
        });
        setTimeout(function() {
            if (!document.getElementById('js-preloader').classList.contains('loaded')) {
                document.getElementById('js-preloader').classList.add('ready');
                document.getElementById('js-preloader').classList.add('loaded')
            }
        }, 2500)
    </script>
    <div id=js-pjax-container>
        <div class="page page-main page-home">
            <div class=mobile-navigation id=js-mobile-navigation>
                <div class=mobile-navigation__backdrop id=js-mobile-navigation-close><svg width=75 height=75
                        class=mobile-navigation__close>
                        <use xlink:href=#close></use>
                    </svg> </div>
                <div class=mobile-navigation__inner>
                    <div class=mobile-navigation__header><a href=index.html class="logo mobile-navigation__logo"
                            data-pjax=""></a>
                        <div class="dropdown locale-dropdown "><button
                                class="dropdown-widget locale-dropdown__dropdown-widget dropdown-toggle"
                                data-toggle=dropdown><span class=dropdown-widget__inner><span
                                        class=dropdown-widget__icon-cell><svg width=20 height=20>
                                            <use xlink:href=#locale-planet></use>
                                        </svg> </span> <span class=dropdown-widget__locale-cell> en </span> <span
                                        class=dropdown-widget__carret-cell><svg width=10 height=10 class=color->
                                            <use xlink:href=#carret-down></use>
                                        </svg> </span></span> </button>
                            <div class="dropdown-menu dropdown-menu-right locale-dropdown__dropdown-menu"><a
                                    class="dropdown-item locale-dropdown__dropdown-item" href=index.html data-pjax="">
                                    English </a> </div>
                        </div>
                    </div>
                    <div class=mobile-navigation__body>
                        <div class=mobile-menu-list>
                            <div class=mobile-menu-list__item><a href=index.html class=mobile-menu-list__link
                                    data-pjax=""> Home </a> </div>
                            <div class=mobile-menu-list__item><a href=company.html class=mobile-menu-list__link
                                    data-pjax=""> Company </a> </div>
                            <div class=mobile-menu-list__item><a href=technologies.html class=mobile-menu-list__link
                                    data-pjax=""> Technologies </a> </div>
                            <div class=mobile-menu-list__item><a href=finance.html class=mobile-menu-list__link
                                    data-pjax=""> Trading bots </a> </div>
                            <div class=mobile-menu-list__item><a href=partnership.html class=mobile-menu-list__link
                                    data-pjax=""> Partnership </a> </div>
                        </div>
                        <div class=mobile-menu-list>
                            <div class=mobile-menu-list__item><a href=theme/static/presentation-en.pdf target=_blank
                                    class=mobile-menu-list__link> Presentation </a> </div>
                            <div class=mobile-menu-list__item><a href=faq.html class=mobile-menu-list__link
                                    data-pjax=""> FAQ </a> </div>
                            <div class=mobile-menu-list__item><a href=guide.html class=mobile-menu-list__link
                                    data-pjax=""> Guide </a> </div>
                            <div class=mobile-menu-list__item><a href=blog.html class=mobile-menu-list__link
                                    data-pjax=""> Blog </a> </div>
                            <div class=mobile-menu-list__item><a href=contacts.html class=mobile-menu-list__link
                                    data-pjax=""> Contacts </a> </div>
                        </div>
                    </div>
                    <div class=mobile-navigation__footer>
                        <div class=mobile-navigation__footer-cell><a href=auth/login.html
                                class="btn btn-outline-success btn-block" data-pjax=""> Login </a> </div>
                        <div class=mobile-navigation__footer-cell><a href=auth/signup.html
                                class="btn btn-success btn-block" data-pjax=""> Signup </a> </div>
                    </div>
                    <div class=mobile-navigation__social><a href=https://t.me/+d3eHGMloj7AyNzA0 target=_blank
                            class="comunity-link mobile-navigation__comunity-link"><span
                                class=comunity-link__inner><span class=comunity-link__icon-cell><svg width=36 height=36>
                                        <use xlink:href=#comunity-telegram></use>
                                    </svg> </span> <span class=comunity-link__content> Join Our Community </span> <span
                                    class=comunity-link__arrow-cell><svg width=18 height=16>
                                        <use xlink:href=#arrow-right></use>
                                    </svg> </span></span> </a>
                        <div class="social-icons-list mobile-navigation__social-icons-list">
                            <div class=social-icons-list__inner>
                                <div class=social-icons-list__cell><a href=https://t.me/cortextrade target=_blank
                                        class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-telegram></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href=https://www.instagram.com/cortex_trading/
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-instagram></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href=https://www.youtube.com/@cortex_trade
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-youtube></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href="https://x.com/cortextrade?s=21"
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-x></use>
                                        </svg> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <a
                class="scroll-btn page__scroll-btn page__scroll-btn--down js-scroll-btn js-scroll-btn-bottom js-anchor"
                href=#js-first><span class=scroll-btn__label> Scroll down </span> <span class=scroll-btn__btn><svg
                        width=14 height=14 class="scroll-btn__icon scroll-btn__icon--1 color-green">
                        <use xlink:href=#carret-down></use>
                    </svg> <svg width=14 height=14 class="scroll-btn__icon scroll-btn__icon--2 color-green">
                        <use xlink:href=#carret-down></use>
                    </svg></span></a> <a
                class="scroll-btn page__scroll-btn page__scroll-btn--top js-scroll-btn js-scroll-btn-top js-anchor "
                href=#js-pjax-container><span class=scroll-btn__label> Back to Top </span> <span
                    class=scroll-btn__btn><svg width=14 height=14
                        class="scroll-btn__icon scroll-btn__icon--1 color-green">
                        <use xlink:href=#carret-top></use>
                    </svg> <svg width=14 height=14 class="scroll-btn__icon scroll-btn__icon--2 color-green">
                        <use xlink:href=#carret-top></use>
                    </svg></span></a>
            <div class="page-main__bg page-home__bg"></div>
            <div class=page-main__inner>
                <div class="header-navigation page-main__header-navigation js-top-navibar">
                    <div class=container-fluid>
                        <div class=header-navigation__inner>
                            <div class=header-navigation__left-cell><a href=index.html
                                    class="logo header-navigation__logo" data-pjax=""></a>
                                <div class="dropdown locale-dropdown header-navigation__locale-dropdown"><button
                                        class="dropdown-widget locale-dropdown__dropdown-widget dropdown-toggle"
                                        data-toggle=dropdown><span class=dropdown-widget__inner><span
                                                class=dropdown-widget__icon-cell><svg width=20 height=20>
                                                    <use xlink:href=#locale-planet></use>
                                                </svg> </span> <span class=dropdown-widget__locale-cell> en </span>
                                            <span class=dropdown-widget__carret-cell><svg width=10 height=10
                                                    class=color->
                                                    <use xlink:href=#carret-down></use>
                                                </svg> </span></span> </button>
                                    <div class="dropdown-menu  locale-dropdown__dropdown-menu"><a
                                            class="dropdown-item locale-dropdown__dropdown-item" href=index.html
                                            data-pjax=""> English </a> </div>
                                </div>
                            </div>
                            <div class=header-navigation__middle-cell>
                                <div class="menu header-navigation__menu">
                                    <nav class=menu__inner>
                                        <li class=menu__item><a href=index.html
                                                class="menu-link menu__menu-link js-link-home" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-home></use>
                                                    </svg> </span> <span>Home</span></a> </li>
                                        <li class="menu__item dropdown"><button
                                                class="menu-link menu__menu-link dropdown-toggle js-link-about"
                                                data-toggle=dropdown><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-company></use>
                                                    </svg> </span> <span> Company &nbsp; <svg width=10 height=10>
                                                        <use xlink:href=#carret-down></use>
                                                    </svg> </span></button>
                                            <div class="dropdown-menu locale-dropdown__dropdown-menu"><a
                                                    href=company.html
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-company"
                                                    data-pjax=""> Company </a> <a href=technologies.html
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-techno"
                                                    data-pjax=""> Our Technologies </a> <a href=blog.html
                                                    class="dropdown-item locale-dropdown__dropdown-item d-xxl-none js-link-blog"
                                                    data-pjax=""> Blog </a> <a href=contacts.html
                                                    class="dropdown-item locale-dropdown__dropdown-item d-xxl-none js-link-contacts"
                                                    data-pjax=""> Contacts </a></div>
                                        </li>
                                        <li class=menu__item><a href=finance.html
                                                class="menu-link menu__menu-link js-link-finance" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-finance></use>
                                                    </svg> </span> <span>Trading bots</span></a> </li>
                                        <li class=menu__item><a href=partnership.html
                                                class="menu-link menu__menu-link js-link-partnership"
                                                data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-partnership></use>
                                                    </svg> </span> <span>Partnership</span></a> </li>
                                        <li class="menu__item dropdown"><button
                                                class="menu-link menu__menu-link dropdown-toggle js-link-help"
                                                data-toggle=dropdown><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-help></use>
                                                    </svg> </span> <span> Help &nbsp; <svg width=10 height=10>
                                                        <use xlink:href=#carret-down></use>
                                                    </svg> </span></button>
                                            <div class="dropdown-menu locale-dropdown__dropdown-menu"><a
                                                    href=theme/static/presentation-en.pdf target=_blank
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-pdf">
                                                    PDF Presentation </a> <a href=faq.html
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-faq"
                                                    data-pjax=""> FAQ </a> <a href=guide.html
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-guide"
                                                    data-pjax=""> Guide </a></div>
                                        </li>
                                        <li class="menu__item d-none d-xxl-inline-block"><a href=blog.html
                                                class="menu-link menu__menu-link js-link-blog" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-blog></use>
                                                    </svg> </span> <span>Blog</span></a> </li>
                                        <li class="menu__item d-none d-xxl-inline-block"><a href=contacts.html
                                                class="menu-link menu__menu-link js-link-contacts" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-contacts></use>
                                                    </svg> </span> <span>Contacts</span></a> </li>
                                    </nav>
                                </div>
                            </div>
                            <div class=header-navigation__right-cell><a href=auth/login.html
                                    class="btn btn-outline-success btn-lg header-navigation__auth-btn"
                                    data-pjax=""><svg width=20 height=20>
                                        <use xlink:href=#login-key></use>
                                    </svg> <span>Login</span></a> <a href=auth/signup.html
                                    class="btn btn-success btn-lg header-navigation__auth-btn"
                                    data-pjax=""><span>Signup</span> <svg width=18 height=16>
                                        <use xlink:href=#arrow-right></use>
                                    </svg></a> <button
                                    class="btn btn-success btn-lg btn-burger header-navigation__burger"
                                    id=js-mobile-navigation-open><span class=burger-icon
                                        id=js-mobile-navigation-burger-icon><span></span> <span></span>
                                        <span></span></span> </button></div>
                        </div>
                    </div>
                </div>
                <script>
                    var dealsSub = null;
                    var dealsHandlers = []
                </script>
                <section class="section section-intro page-home__section-intro">
                    <div class="delimiter section__delimiter section__delimiter--bottom">
                        <div class="delimiter__times delimiter__times--left"></div>
                        <div class="delimiter__times delimiter__times--right"></div>
                    </div>
                    <div class=container>
                        <div class=section-intro__inner>
                            <div class=section-intro__left><video class=section-intro__video autoplay loop muted
                                    playsinline="">
                                    <source src=theme/static/output.webm type=video/webm>
                                </video> </div>
                            <div class=section-intro__right>
                                <div class=intro-block>
                                    <div class=fire-widget>
                                        <div class=fire-widget__inner>
                                            <div class=fire-widget__icon-cell><i class=sprite-fire></i> </div>
                                            <div class=fire-widget__content-cell> Powered AI Airocoin Platform </div>
                                        </div>
                                    </div>
                                    <h1 class="title-h1 intro-block__title-h1"><span>Airocoin Bring out for you</span>
                                        <span class=title-h1__colored>the best service</span></h1>
                                    <div class=intro-block__content> Powered by AI, Cortex AI Trading gives a leading
                                        positions to investors using our automated trading systems. </div>
                                    <div class=intro-block__footer><a href=auth/signup.html
                                            class="btn btn-success btn-lg btn-xs-block" data-pjax=""><span>Start
                                                earning</span> <svg width=20 height=20>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></a> <a href=theme/static/presentation-en.pdf target=_blank
                                            class="btn btn-outline-success btn-lg btn-xs-block"><span>PDF
                                                Presentation</span> <svg width=22 height=22>
                                                <use xlink:href=#document></use>
                                            </svg></a></div>
                                </div>
                                <div class="social-text-group section-intro__social-text-group">
                                    <div class=social-text-group__inner>
                                        <div class=social-text-group__content> Stay connected with us on social media
                                        </div>
                                        <div class=social-text-group__list>
                                            <div class="social-icons-list social-text-group__social-icons-list">
                                                <div class=social-icons-list__inner>
                                                    <div class=social-icons-list__cell><a href=https://t.me/cortextrade
                                                            target=_blank class=social-icon><svg width=20 height=20>
                                                                <use xlink:href=#social-telegram></use>
                                                            </svg> </a> </div>
                                                    <div class=social-icons-list__cell><a
                                                            href=https://www.instagram.com/cortex_trading/ target=_blank
                                                            class=social-icon><svg width=20 height=20>
                                                                <use xlink:href=#social-instagram></use>
                                                            </svg> </a> </div>
                                                    <div class=social-icons-list__cell><a
                                                            href=https://www.youtube.com/@cortex_trade target=_blank
                                                            class=social-icon><svg width=20 height=20>
                                                                <use xlink:href=#social-youtube></use>
                                                            </svg> </a> </div>
                                                    <div class=social-icons-list__cell><a
                                                            href="https://x.com/cortextrade?s=21" target=_blank
                                                            class=social-icon><svg width=20 height=20>
                                                                <use xlink:href=#social-x></use>
                                                            </svg> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div id=js-first>
                    <script>
                        (function() {
                            function isTouchDevice() {
                                return ('ontouchstart' in window) || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0
                            }
                            var investorsSliderSettings = {
                                mobileFirst: !0,
                                infinite: !1,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: !1,
                                dots: !0,
                                responsive: [{
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                }, {
                                    breakpoint: 768,
                                    settings: 'unslick'
                                }]
                            };

                            function getInvestorsTooltipSettings(content, touchMode) {
                                return {
                                    title: content,
                                    placement: 'top',
                                    offset: 0,
                                    trigger: touchMode ? 'click' : 'hover focus'
                                }
                            }

                            function initInvestorsTooltips() {
                                var touchMode = isTouchDevice();
                                var content1 =
                                    'An American firm specializing in high-frequency and algorithmic trading. The company was founded in 1998 and has offices almost all over the world. Two years ago, Tower Research Capital and our company began a collaboration in the algorithms for high-frequency trading area based on our Artificial Intelligence. And now we continue to actively interact in all areas in which we have mutual interests.';
                                var content2 =
                                    'One of the largest public hedge funds in the world with assets under management is currently about $175 billion. The hedge fund uses our company\'s AI and machine learning developments in its work. In particular, our databases have been used to create its own ManGPT, which is now actively used by the public hedge fund to develop trading strategies.';
                                var content3 =
                                    'Hudson River Trading is an American quantitative trading firm founded in 2002. Uses mathematical methods and algorithms in its business, which have recently been updated and reorganized with the active participation of our company. This trading firm performs algorithmic trading in more than 100 countries around the world.';
                                $('#js-investor-1').tooltip(getInvestorsTooltipSettings(content1, touchMode));
                                $('#js-investor-2').tooltip(getInvestorsTooltipSettings(content2, touchMode));
                                $('#js-investor-3').tooltip(getInvestorsTooltipSettings(content3, touchMode));
                                if (touchMode) {
                                    [1, 2, 3].forEach(function(i) {
                                        var $el = $('#js-investor-' + i);
                                        var flagKey = 'tooltipShown';
                                        $el.data(flagKey, !1);
                                        $el.on('hidden.bs.tooltip.investorTooltip', function() {
                                            $el.data(flagKey, !1)
                                        });
                                        $el.on('click.investorTooltip', function(e) {
                                            $('[data-original-title]').not($el).each(function() {
                                                $(this).tooltip('hide');
                                                $(this).removeData('tooltipShown')
                                            });
                                            var isShown = $el.data(flagKey);
                                            if (!isShown) {
                                                e.preventDefault();
                                                e.stopPropagation();
                                                $el.tooltip('show');
                                                $el.data(flagKey, !0)
                                            }
                                        })
                                    })
                                }
                            }

                            function handleInvestorsSliderInit() {
                                var $slider = $('#js-investors-slider'),
                                    windowWidth = window.innerWidth;
                                if (windowWidth < 1280 && !$slider.hasClass('slick-initialized')) {
                                    $slider.slick(investorsSliderSettings)
                                }
                            }
                            pageInits.push(function() {
                                var $slider = $('#js-investors-slider');
                                $slider.on('init destroy breakpoint', initInvestorsTooltips);
                                $slider.slick(investorsSliderSettings);
                                $(window).on('resize', handleInvestorsSliderInit);
                                initInvestorsTooltips()
                            });
                            pageDestroys.push(function() {
                                $('#js-investors-slider').slick('unslick');
                                $(window).off('resize', handleInvestorsSliderInit);
                                [1, 2, 3].forEach(function(i) {
                                    var $el = $('#js-investor-' + i);
                                    if ($el.data('bs.tooltip')) {
                                        $el.tooltip('dispose')
                                    }
                                    $el.off('.investorTooltip');
                                    $el.removeData('tooltipShown')
                                });
                                $(document).off('click.hideInvestorTooltip touchstart.hideInvestorTooltip')
                            })
                        })()
                    </script>
                  
                    <script>
                        (function() {
                            function isTouchDevice() {
                                return ('ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0)
                            }
                            var partnersSliderSettings = {
                                mobileFirst: !0,
                                infinite: !1,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: !1,
                                dots: !0,
                                responsive: [{
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                }, {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                }, {
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 4
                                    }
                                }, {
                                    breakpoint: 1280,
                                    settings: 'unslick'
                                }]
                            };

                            function getPartnersTooltipSettings(content, touchMode) {
                                return {
                                    title: content,
                                    placement: 'top',
                                    offset: 0,
                                    trigger: touchMode ? 'click' : 'hover focus'
                                }
                            }

                            function initPartnersTooltips() {
                                var touchMode = isTouchDevice();
                                var content1 =
                                    'An American firm specializing in high-frequency and algorithmic trading. The company was founded in 1998 and has offices almost all over the world. Two years ago, Tower Research Capital and our company began a collaboration in the algorithms for high-frequency trading area based on our Artificial Intelligence. And now we continue to actively interact in all areas in which we have mutual interests.';
                                var content2 =
                                    'One of the largest public hedge funds in the world with assets under management is currently about $175 billion. The hedge fund uses our company\'s AI and machine learning developments in its work. In particular, our databases have been used to create its own ManGPT, which is now actively used by the public hedge fund to develop trading strategies.';
                                var content3 =
                                    'Hudson River Trading is an American quantitative trading firm founded in 2002. Uses mathematical methods and algorithms in its business, which have recently been updated and reorganized with the active participation of our company. This trading firm performs algorithmic trading in more than 100 countries around the world.';
                                var content4 =
                                    'High-Flyer Quant is a Chinese hedge fund founded by Lian Wenfeng. The hedge fund was founded in 2015. In its business, this hedge fund widely applies various AI models. Including the development of our company. These are mainly digital products designed to process market data and generate trading signals.';
                                var content5 =
                                    'An American hedge fund founded by James Harris Simons in 1978. This fund widely and actively promotes its own quantitative models, which, according to most industry experts, are among the most profitable models in the history of investments. Our company actively implements opportunities for mutual exchange of the latest achievements in the investment models area, using, among other things, our achievements in the digital technologies area.';
                                $('#js-partner-1').tooltip(getPartnersTooltipSettings(content1, touchMode));
                                $('#js-partner-2').tooltip(getPartnersTooltipSettings(content2, touchMode));
                                $('#js-partner-3').tooltip(getPartnersTooltipSettings(content3, touchMode));
                                $('#js-partner-4').tooltip(getPartnersTooltipSettings(content4, touchMode));
                                $('#js-partner-5').tooltip(getPartnersTooltipSettings(content5, touchMode));
                                if (touchMode) {
                                    [1, 2, 3, 4, 5].forEach(function(i) {
                                        var $el = $('#js-partner-' + i);
                                        var flagKey = 'tooltipShown';
                                        $el.data(flagKey, !1);
                                        $el.on('hidden.bs.tooltip.partnerTooltip', function() {
                                            $el.data(flagKey, !1)
                                        });
                                        $el.on('click.partnerTooltip', function(e) {
                                            $('[data-original-title]').not($el).each(function() {
                                                $(this).tooltip('hide');
                                                $(this).removeData('tooltipShown')
                                            });
                                            var isShown = $el.data(flagKey);
                                            if (!isShown) {
                                                e.preventDefault();
                                                e.stopPropagation();
                                                $el.tooltip('show');
                                                $el.data(flagKey, !0)
                                            }
                                        })
                                    })
                                }
                            }

                            function handlePartnersSliderInit() {
                                var $slider = $('#js-partners-slider');
                                var windowWidth = window.innerWidth;
                                if (windowWidth < 1280 && !$slider.hasClass('slick-initialized')) {
                                    $slider.slick(partnersSliderSettings)
                                }
                            }
                            pageInits.push(function() {
                                var $slider = $('#js-partners-slider');
                                $slider.on('init destroy breakpoint', initPartnersTooltips);
                                $slider.slick(partnersSliderSettings);
                                $(window).on('resize', handlePartnersSliderInit);
                                initPartnersTooltips()
                            });
                            pageDestroys.push(function() {
                                $('#js-partners-slider').slick('unslick');
                                $(window).off('resize', handlePartnersSliderInit);
                                [1, 2, 3, 4, 5].forEach(function(i) {
                                    var $el = $('#js-partner-' + i);
                                    if ($el.data('bs.tooltip')) {
                                        $el.tooltip('dispose')
                                    }
                                    $el.off('.partnerTooltip');
                                    $el.removeData('tooltipShown')
                                });
                                $(document).off('click.hidePartnerTooltip touchstart.hidePartnerTooltip')
                            })
                        })()
                    </script>
                
                    <section class="section section-steps page-home__section-steps js-scrollable">
                        <div class=container>
                            <div class="contents-group section-steps__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> How to start? </div>
                                <h2 class="title-h2 contents-group__title-h2"> Just 4 simple strides </h2>
                            </div>
                            <div class="main-steps-group section-steps__main-steps-group">
                                <div class=main-steps-group__inner id=js-steps-slider>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 1 </div>
                                                <div class="title-h4 step-card__title-h4"> Create <br> trading account
                                                </div>
                                                <div class=step-card__content> Register trading account on the platform
                                                    to start any investment activity. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 2 </div>
                                                <div class="title-h4 step-card__title-h4"> Try the DEMO <br> version
                                                </div>
                                                <div class=step-card__content> Get $2,000 to your DEMO account and test
                                                    your profit dynamics personally. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 3 </div>
                                                <div class="title-h4 step-card__title-h4"> Make your own <br>
                                                    investment </div>
                                                <div class=step-card__content> Make investments using any trading bot
                                                    from the Cortex AI Trading. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 4 </div>
                                                <div class="title-h4 step-card__title-h4"> Get and <br> withdraw profit
                                                </div>
                                                <div class=step-card__content> The Cortex AI Trading. Your confidence in
                                                    the future and your profits already today. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var stepsSliderSettings = {
                            mobileFirst: !0,
                            infinite: !1,
                            slidesToScroll: 1,
                            arrows: !1,
                            dots: !0,
                            responsive: [{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2
                                }
                            }, {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3
                                }
                            }, {
                                breakpoint: 1280,
                                settings: 'unslick'
                            }]
                        };

                        function handleStepsSliderInit() {
                            var $slider = $('#js-steps-slider'),
                                windowWidth = window.innerWidth;
                            if (windowWidth < 1280 && !$slider.hasClass('slick-initialized')) {
                                $slider.slick(stepsSliderSettings)
                            }
                        }
                        pageInits.push(function() {
                            $('#js-steps-slider').slick(stepsSliderSettings);
                            $(window).on('resize', handleStepsSliderInit)
                        });
                        pageDestroys.push(function() {
                            $('#js-steps-slider').slick('unslick');
                            $(window).off('resize', handleStepsSliderInit)
                        })
                    </script>
                  
                    <script>
                        pageInits.push(function() {
                            var $slider = $('#js-yt-slider');
                            $slider.slick({
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: !1,
                                dots: !0,
                                arrows: !1,
                                appendDots: $('#js-yt-slider-dots'),
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2
                                    }
                                }, {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        dots: !1
                                    }
                                }]
                            });
                            $('#js-yt-slider-left').on('click', function() {
                                $slider.slick('slickPrev')
                            });
                            $('#js-yt-slider-right').on('click', function() {
                                $slider.slick('slickNext')
                            })
                        });
                        pageDestroys.push(function() {
                            $('#js-yt-slider').slick('unslick')
                        })
                    </script>
                    <section class="section section-gains page-home__section-gains js-scrollable">
                        <div class=container>
                            <div class=section-gains__inner>
                                <div class=section-gains__left>
                                    <div class="contents-group section-gains__contents-group">
                                        <div class="sub-title color-green contents-group__sub-title"> Discover more
                                            opportunities </div>
                                        <h2 class="title-h2 contents-group__title-h2"> The limitless possibilities of
                                            Cortex </h2>
                                        <div class=contents-group__content> Since automatic arbitration trading under
                                            the control of AI is performed out by four bots, you get the opportunity not
                                            only to successfully and profitably invest your own money, but also to
                                            diversify your own investment portfolio, taking advantage of more than one
                                            bot. This will help you see an overall great picture of the future of your
                                            own investments that work for you 24/7. </div>
                                        <div class=contents-group__footer><a href=auth/signup.html
                                                class="btn btn-success btn-lg btn-xs-block" data-pjax=""><span>Get
                                                    Cortex Account</span> <svg width=18 height=16>
                                                    <use xlink:href=#arrow-right></use>
                                                </svg></a> </div>
                                    </div>
                                </div>
                                <div class="section-gains__right section-gains__cell--cards">
                                    <div class="earnings-chart-block section-gains__earnings-chart-block">
                                        <div class=earnings-chart-block__inner>
                                            <div class="earnings-chart-card earnings-chart-block__earnings-chart-card">
                                                <div class=earnings-chart-card__outer>
                                                    <div class=earnings-chart-card__inner>
                                                        <div class=earnings-chart-card__title> Predicted PNL </div>
                                                        <div class=earnings-chart-card__value><b>2025-07-31</b>
                                                            <span>+1.00%</span></div>
                                                        <div class=earnings-chart-card__canvas id=js-lottie-card></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="outcomes-card earnings-chart-block__outcomes-card">
                                                <div class=outcomes-card__inner>
                                                    <div class=outcomes-card__title> Project Outcomes </div>
                                                    <div id=js-outcomes-card-body>
                                                        <div class="outcomes-card__row js-outcomes-row">
                                                            <div class=outcomes-card__label> BCH/USDT, Short </div>
                                                            <div class=outcomes-card__value><span class=color-green>
                                                                    +1.3198% </span> </div>
                                                        </div>
                                                        <div class="outcomes-card__row js-outcomes-row">
                                                            <div class=outcomes-card__label> BCH/USDT, Short </div>
                                                            <div class=outcomes-card__value><span class=color-green>
                                                                    +1.3345% </span> </div>
                                                        </div>
                                                        <div class="outcomes-card__row js-outcomes-row">
                                                            <div class=outcomes-card__label> BCH/USDT, Short </div>
                                                            <div class=outcomes-card__value><span class=color-green>
                                                                    +0.9475% </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> <template id=js-outcomes-row-template>
                        <div class="outcomes-card__row js-outcomes-row">
                            <div class="outcomes-card__label js-outcomes-row-label"></div>
                            <div class=outcomes-card__value><span class=js-outcomes-row-value></span> </div>
                        </div>
                    </template>
                    <script>
                        (function() {
                            var element = document.getElementById('js-lottie-card');
                            var observer, anim;
                            pageInits.push(function() {
                                anim = lottie.loadAnimation({
                                    container: element,
                                    renderer: 'svg',
                                    loop: !1,
                                    autoplay: !1,
                                    path: '/theme/static/card.json'
                                });
                                observer = new IntersectionObserver(function(entries) {
                                    entries.forEach(function(entry) {
                                        if (entry.intersectionRatio === 1) {
                                            anim.goToAndPlay(0, !0)
                                        } else if (entry.intersectionRatio === 0) {
                                            anim.stop()
                                        }
                                    })
                                }, {
                                    threshold: [0, 1]
                                });
                                observer.observe(element)
                            });
                            pageDestroys.push(function() {
                                try {
                                    observer.unobserve(element);
                                    observer.disconnect();
                                    anim.stop();
                                    anim.destroy()
                                } catch (e) {}
                            })
                        })();
                        pageInits.push(function() {
                            dealsHandlers.push(function(ctx) {
                                var $body = $('#js-outcomes-card-body'),
                                    deal = ctx.data;
                                var $template = $($('#js-outcomes-row-template').html());
                                var tickers = deal.tickerFrom + '/' + deal.tickerTo;
                                var direction = deal.direction.charAt(0).toUpperCase() + deal.direction.slice(1);
                                $template.find('.js-outcomes-row-label').text(tickers + ', ' + direction);
                                $template.find('.js-outcomes-row-value').addClass(parseFloat(deal.pnl) > 0 ? 'color-green' :
                                    'color-red').text((parseFloat(deal.pnl) ? '+' : '') + deal.pnl + '%');
                                $body.prepend($template);
                                var $rows = $body.find('.js-outcomes-row');
                                if ($rows.length > 3) {
                                    $rows.slice(3).remove()
                                }
                            })
                        })
                    </script>
                    <section class="section section-gains page-home__section-gains js-scrollable">
                        <div class=container>
                            <div class=section-gains__inner>
                                <div class="section-gains__right section-gains__cell--cards">
                                    <div class="buy-sell-chart-block section-gains__buy-sell-chart-block">
                                        <div class=buy-sell-chart-block__inner>
                                            <div class="buy-sell-chart-card buy-sell-chart-block__buy-sell-chart-card">
                                                <div class=buy-sell-chart-card__outer>
                                                    <div class=buy-sell-chart-card__inner>
                                                        <div class=buy-sell-chart-card__header>
                                                            <div class=buy-sell-chart-card__left>
                                                                <div class=buy-sell-chart-card__pair> ETH/USDT </div>
                                                                <div class=buy-sell-chart-card__content> Use strategies
                                                                    to increase profits on the ETH/USDT exchange rate.
                                                                </div>
                                                            </div>
                                                            <div class=buy-sell-chart-card__right>
                                                                <div class="ticker-pair-widget ticker-pair-widget--lg">
                                                                    <div class=ticker-pair-widget__inner>
                                                                        <div class=ticker-pair-widget__icons><svg
                                                                                width=50 height=50
                                                                                class=ticker-pair-widget__icon>
                                                                                <use xlink:href=#ticker-usdc></use>
                                                                            </svg> <svg width=50 height=50
                                                                                class=ticker-pair-widget__icon>
                                                                                <use xlink:href=#ticker-usdt></use>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=buy-sell-chart-card__body>
                                                            <div
                                                                class="g-profit-widget buy-sell-chart-card__g-profit-widget">
                                                                <div class=g-profit-widget__inner>
                                                                    <div class=g-profit-widget__icon-cell>
                                                                        <div class=round-border-icon><svg width=11
                                                                                height=9 class=ticker-pair-widget__icon>
                                                                                <use xlink:href=#ok></use>
                                                                            </svg> </div>
                                                                    </div>
                                                                    <div class=g-profit-widget__body-cell> Guaranteed
                                                                        profit </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buy-sell-card buy-sell-chart-block__buy-sell-card"
                                                id=js-lottie-buy-sell></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=section-gains__left>
                                    <div class="contents-group section-gains__contents-group">
                                        <div class="sub-title color-green contents-group__sub-title"> Technology
                                            helping to earn </div>
                                        <h2 class="title-h2 contents-group__title-h2"> Informativeness and quick
                                            monetary reaction </h2>
                                        <div class=contents-group__content> The speed with which our bots perform
                                            trading operations allows millions of transactions to be made in one working
                                            day. And Artificial Intelligence, which is based on interactively trained
                                            algorithms, does not allow the outcome of events that could lead to an
                                            irreparable loss of money. Everyone benefits and everyone gets what they
                                            strive for. Everyone earns by improving our trading programs. </div>
                                        <div class=contents-group__footer><a href=auth/signup.html
                                                class="btn btn-success btn-lg  btn-xs-block" data-pjax=""><span>Get
                                                    Cortex Account</span> <svg width=18 height=16>
                                                    <use xlink:href=#arrow-right></use>
                                                </svg></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        (function() {
                            var element = document.getElementById('js-lottie-buy-sell');
                            var anim;
                            pageInits.push(function() {
                                anim = lottie.loadAnimation({
                                    container: element,
                                    renderer: 'svg',
                                    loop: !0,
                                    autoplay: !0,
                                    path: '/theme/static/buy_sell.json'
                                })
                            });
                            pageDestroys.push(function() {
                                try {
                                    anim.stop();
                                    anim.destroy()
                                } catch (e) {}
                            })
                        })()
                    </script>
                    <section class="section section-stats page-home__section-stats js-scrollable">
                        <div class=section-stats__inner>
                            <div class="delimiter section__delimiter">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class="delimiter section__delimiter section__delimiter--bottom">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class=container-max>
                                <div class="main-stats-group section-stats__main-stats-group">
                                    <div class=main-stats-group__inner>
                                        <div class=main-stats-group__cell>
                                            <div class="main-stats-widget main-stats-group__main-stats-widget">
                                                <div class=main-stats-widget__inner>
                                                    <div class=main-stats-widget__header>
                                                        <div class=stats-icon><svg width=94 height=86
                                                                class=stats-icon__bg>
                                                                <use xlink:href=#stats-icon-bg></use>
                                                            </svg> <svg width=41 height=41 class=stats-icon__icon>
                                                                <use xlink:href=#stats-users></use>
                                                            </svg></div>
                                                    </div>
                                                    <div class=main-stats-widget__body>
                                                        <div class=main-stats-widget__value> 411 </div>
                                                        <div class=main-stats-widget__label> 24H New traders </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=main-stats-group__cell>
                                            <div class="main-stats-widget main-stats-group__main-stats-widget">
                                                <div class=main-stats-widget__inner>
                                                    <div class=main-stats-widget__header>
                                                        <div class=stats-icon><svg width=94 height=86
                                                                class=stats-icon__bg>
                                                                <use xlink:href=#stats-icon-bg></use>
                                                            </svg> <svg width=41 height=41 class=stats-icon__icon>
                                                                <use xlink:href=#stats-volume></use>
                                                            </svg></div>
                                                    </div>
                                                    <div class=main-stats-widget__body>
                                                        <div class=main-stats-widget__value> $299.1M </div>
                                                        <div class=main-stats-widget__label> 24H volume </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=main-stats-group__cell>
                                            <div class="main-stats-widget main-stats-group__main-stats-widget">
                                                <div class=main-stats-widget__inner>
                                                    <div class=main-stats-widget__header>
                                                        <div class=stats-icon><svg width=94 height=86
                                                                class=stats-icon__bg>
                                                                <use xlink:href=#stats-icon-bg></use>
                                                            </svg> <svg width=41 height=41 class=stats-icon__icon>
                                                                <use xlink:href=#stats-invested></use>
                                                            </svg></div>
                                                    </div>
                                                    <div class=main-stats-widget__body>
                                                        <div class=main-stats-widget__value> $5.0M </div>
                                                        <div class=main-stats-widget__label> Paid out </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=main-stats-group__cell>
                                            <div class="main-stats-widget main-stats-group__main-stats-widget">
                                                <div class=main-stats-widget__inner>
                                                    <div class=main-stats-widget__header>
                                                        <div class=stats-icon><svg width=94 height=86
                                                                class=stats-icon__bg>
                                                                <use xlink:href=#stats-icon-bg></use>
                                                            </svg> <svg width=41 height=41 class=stats-icon__icon>
                                                                <use xlink:href=#stats-paidout></use>
                                                            </svg></div>
                                                    </div>
                                                    <div class=main-stats-widget__body>
                                                        <div class=main-stats-widget__value> 0.7-3% </div>
                                                        <div class=main-stats-widget__label> Daily return </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-gates page-home__section-gates js-scrollable">
                        <div class=container>
                            <div class="contents-group section-gates__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Cryptocurrencies </div>
                                <h2 class="title-h2 contents-group__title-h2"> Get more options </h2>
                            </div>
                            <div class="main-gates-group section-gates__main-gates-group">
                                <div class="main-gates-group__inner js-marquee-1">
                                    <div class=main-gates-group__cells>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=113 height=30>
                                                    <use xlink:href=#gate-teth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=107 height=30>
                                                    <use xlink:href=#gate-btc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=91 height=28>
                                                    <use xlink:href=#gate-trx></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=102 height=30>
                                                    <use xlink:href=#gate-xrp></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=112 height=30>
                                                    <use xlink:href=#gate-ltc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-eth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-bnb></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=123 height=47>
                                                    <use xlink:href=#gate-ton></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=146 height=40>
                                                    <use xlink:href=#gate-usdc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=140 height=22>
                                                    <use xlink:href=#gate-sol></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=113 height=30>
                                                    <use xlink:href=#gate-teth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=107 height=30>
                                                    <use xlink:href=#gate-btc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=91 height=28>
                                                    <use xlink:href=#gate-trx></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=102 height=30>
                                                    <use xlink:href=#gate-xrp></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=112 height=30>
                                                    <use xlink:href=#gate-ltc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-eth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-bnb></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=123 height=47>
                                                    <use xlink:href=#gate-ton></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=146 height=40>
                                                    <use xlink:href=#gate-usdc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=140 height=22>
                                                    <use xlink:href=#gate-sol></use>
                                                </svg> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-gates-group__inner js-marquee-2">
                                    <div class=main-gates-group__cells>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=113 height=30>
                                                    <use xlink:href=#gate-teth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=107 height=30>
                                                    <use xlink:href=#gate-btc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=91 height=28>
                                                    <use xlink:href=#gate-trx></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=102 height=30>
                                                    <use xlink:href=#gate-xrp></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=112 height=30>
                                                    <use xlink:href=#gate-ltc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-eth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-bnb></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=123 height=47>
                                                    <use xlink:href=#gate-ton></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=146 height=40>
                                                    <use xlink:href=#gate-usdc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=140 height=22>
                                                    <use xlink:href=#gate-sol></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=113 height=30>
                                                    <use xlink:href=#gate-teth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=107 height=30>
                                                    <use xlink:href=#gate-btc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=91 height=28>
                                                    <use xlink:href=#gate-trx></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=102 height=30>
                                                    <use xlink:href=#gate-xrp></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=112 height=30>
                                                    <use xlink:href=#gate-ltc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-eth></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=144 height=30>
                                                    <use xlink:href=#gate-bnb></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=123 height=47>
                                                    <use xlink:href=#gate-ton></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=146 height=40>
                                                    <use xlink:href=#gate-usdc></use>
                                                </svg> </div>
                                        </div>
                                        <div class=main-gates-group__cell>
                                            <div class=main-gate-widget><svg width=140 height=22>
                                                    <use xlink:href=#gate-sol></use>
                                                </svg> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        pageInits.push(function() {
                            $('.js-marquee-1').marquee({
                                speed: 100,
                                gap: 0,
                                delayBeforeStart: 0,
                                startVisible: !0,
                                direction: 'left',
                                duplicated: !0,
                                pauseOnHover: !1
                            });
                            $('.js-marquee-2').marquee({
                                speed: 100,
                                gap: 0,
                                delayBeforeStart: 0,
                                startVisible: !0,
                                direction: 'right',
                                duplicated: !0,
                                pauseOnHover: !1
                            })
                        });
                        pageDestroys.push(function() {
                            $('.js-marquee-1').marquee('destroy');
                            $('.js-marquee-2').marquee('destroy')
                        })
                    </script>
                    <section class="section section-highlights page-home__section-highlights js-scrollable">
                        <div class=container>
                            <div class="contents-group section-highlights__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Roadmap </div>
                                <h2 class="title-h2 contents-group__title-h2"> Main aims </h2>
                            </div>
                        </div>
                        <div class=section-highlights__body>
                            <div
                                class="delimiter section__delimiter section-highlights__delimiter delimiter section__delimiter--center">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class=container>
                                <div class="roadmap-group section-highlights__roadmap-group">
                                    <div class="roadmap-group__inner  roadmap-group__inner--first"
                                        id=js-roadmap-slider-1>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> August 2025 </div>
                                                <div class=roadmap-card__sub-title> Software upgrades </div>
                                                <div class=roadmap-card__content> Perform the first large-scale software
                                                    modernization which serving the work and control of the AI tasks.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--first">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> February 2026 </div>
                                                <div class=roadmap-card__sub-title> AI Boost </div>
                                                <div class=roadmap-card__content> Implementation of new AI blocks to
                                                    expand trading activities not only at the cryptocurrency market.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> September 2026 </div>
                                                <div class=roadmap-card__sub-title> More options </div>
                                                <div class=roadmap-card__content> Expansion of financial services with
                                                    opportunities to increase investment turnover and investment
                                                    insurance. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--first">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> April 2027 </div>
                                                <div class=roadmap-card__sub-title> System improvement </div>
                                                <div class=roadmap-card__content> Technical modernization of servers
                                                    hosting the main data bases and improvement of technological
                                                    parameters in general. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> October 2027 </div>
                                                <div class=roadmap-card__sub-title> Exchange services </div>
                                                <div class=roadmap-card__content> The resource basement creation to
                                                    strengthen and further promote the service in accordance with the
                                                    exchange requirements of the market. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--first">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> December 2027 </div>
                                                <div class=roadmap-card__sub-title> Team expansion </div>
                                                <div class=roadmap-card__content> The business growing achievements and
                                                    the improvement of technologies is impossible without a sufficient
                                                    number of qualified employees. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> March 2028 </div>
                                                <div class=roadmap-card__sub-title> New data center </div>
                                                <div class=roadmap-card__content> It is planned to complete the
                                                    construction and debugging of all components of our new data center,
                                                    which will strengthen our informational independence. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=roadmap-group__lines>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                    </div>
                                    <div class="roadmap-group__inner roadmap-group__inner--second"
                                        id=js-roadmap-slider-2>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> August 2025 </div>
                                                <div class=roadmap-card__sub-title> Software upgrades </div>
                                                <div class=roadmap-card__content> Perform the first large-scale software
                                                    modernization which serving the work and control of the AI tasks.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--bottom">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> February 2026 </div>
                                                <div class=roadmap-card__sub-title> AI Boost </div>
                                                <div class=roadmap-card__content> Implementation of new AI blocks to
                                                    expand trading activities not only at the cryptocurrency market.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> September 2026 </div>
                                                <div class=roadmap-card__sub-title> More options </div>
                                                <div class=roadmap-card__content> Expansion of financial services with
                                                    opportunities to increase investment turnover and investment
                                                    insurance. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--bottom">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> April 2027 </div>
                                                <div class=roadmap-card__sub-title> System improvement </div>
                                                <div class=roadmap-card__content> Technical modernization of servers
                                                    hosting the main data bases and improvement of technological
                                                    parameters in general. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> October 2027 </div>
                                                <div class=roadmap-card__sub-title> Exchange services </div>
                                                <div class=roadmap-card__content> The resource basement creation to
                                                    strengthen and further promote the service in accordance with the
                                                    exchange requirements of the market. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--bottom">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> December 2027 </div>
                                                <div class=roadmap-card__sub-title> Team expansion </div>
                                                <div class=roadmap-card__content> The business growing achievements and
                                                    the improvement of technologies is impossible without a sufficient
                                                    number of qualified employees. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> March 2028 </div>
                                                <div class=roadmap-card__sub-title> New data center </div>
                                                <div class=roadmap-card__content> It is planned to complete the
                                                    construction and debugging of all components of our new data center,
                                                    which will strengthen our informational independence. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=roadmap-group__controls><button
                                            class="arrow-btn roadmap-group__arrow-btn roadmap-group__arrow-btn--left"
                                            id=js-roadmap-slider-left><svg width=20 height=20>
                                                <use xlink:href=#carret-left></use>
                                            </svg> </button>
                                        <div class=roadmap-group__dots id=js-roadmap-slider-dots></div> <button
                                            class="arrow-btn roadmap-group__arrow-btn roadmap-group__arrow-btn--right"
                                            id=js-roadmap-slider-right><svg width=20 height=20>
                                                <use xlink:href=#carret-right></use>
                                            </svg> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        function createHighlightsSettings(isMain) {
                            return {
                                slidesToShow: 5,
                                slidesToScroll: 2,
                                dots: !1,
                                arrows: !1,
                                swipe: !1,
                                draggable: !1,
                                touchMove: !1,
                                accessibility: !1,
                                swipeToSlide: !1,
                                infinite: !1,
                                appendDots: isMain ? $('#js-roadmap-slider-dots') : null,
                                asNavFor: isMain ? '#js-roadmap-slider-2' : '#js-roadmap-slider-1',
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                }, {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1,
                                        dots: !0,
                                        asNavFor: null
                                    }
                                }, {
                                    breakpoint: 479,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        dots: !0,
                                        asNavFor: null
                                    }
                                }]
                            }
                        }

                        function updateHighlightsNavButtons($slider, $prevBtn, $nextBtn) {
                            var slick = $slider.slick('getSlick');
                            var hideLeft = slick.currentSlide === 0;
                            var hideRight = slick.currentSlide >= slick.slideCount - slick.options.slidesToShow;
                            hideLeft ? $prevBtn.css({
                                opacity: 0.5
                            }) : $prevBtn.css({
                                opacity: 1
                            });
                            hideRight ? $nextBtn.css({
                                opacity: 0.5
                            }) : $nextBtn.css({
                                opacity: 1
                            })
                        }
                        pageInits.push(function() {
                            var $firstSlider = $('#js-roadmap-slider-1'),
                                $secondSlider = $('#js-roadmap-slider-2'),
                                $leftBtn = $('#js-roadmap-slider-left'),
                                $rightBtn = $('#js-roadmap-slider-right');
                            $firstSlider.on('afterChange', function() {
                                updateHighlightsNavButtons($firstSlider, $leftBtn, $rightBtn)
                            });
                            $firstSlider.slick(createHighlightsSettings(!0));
                            $secondSlider.slick(createHighlightsSettings(!1));
                            updateHighlightsNavButtons($firstSlider, $leftBtn, $rightBtn);
                            $leftBtn.on('click', function() {
                                $firstSlider.slick('slickPrev')
                            });
                            $rightBtn.on('click', function() {
                                $firstSlider.slick('slickNext')
                            })
                        });
                        pageDestroys.push(function() {
                            $('#js-roadmap-slider-1').slick('unslick');
                            $('#js-roadmap-slider-2').slick('unslick')
                        })
                    </script>
                    <section class="section section-media page-home__section-media js-scrollable">
                        <div class=container>
                            <div class="contents-group section-media__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Social&Media platforms
                                </div>
                                <h2 class="title-h2 contents-group__title-h2"> Recognition of business success </h2>
                            </div>
                            <div class=section-media__body>
                                <div class=section-media__controls><button
                                        class="arrow-btn section-media__arrow-btn section-media__arrow-btn--left"
                                        id=js-media-slider-left><svg width=20 height=20>
                                            <use xlink:href=#carret-left></use>
                                        </svg> </button> <button
                                        class="arrow-btn section-media__arrow-btn section-media__arrow-btn--right"
                                        id=js-media-slider-right><svg width=20 height=20>
                                            <use xlink:href=#carret-right></use>
                                        </svg> </button></div>
                                <div class=section-media__slider id=js-media-slider>
                                    <div class=section-media__slide>
                                        <div class="media-talk-card section-media__media-talk-card">
                                            <div class=media-talk-card__inner>
                                                <div class=media-talk-card__header><i
                                                        class="sprite-media-binance media-talk-card__logo"></i> <a
                                                        href="https://app.binance.com/uni-qr/cart/25377584913690?r=39532474&amp;l=en&amp;uco=XiArvuSwXrpo2WzMaHxo5A&amp;uc=app_square_share_link&amp;us=copylink"
                                                        target=_blank class=external-link><svg width=25 height=25>
                                                            <use xlink:href=#external-link></use>
                                                        </svg> </a></div>
                                                <div class=media-talk-card__body>
                                                    <div class=media-talk-card__title> Airocoin Launches AI-based
                                                        Full Investment Platform. <br> Real AI. Real Trades. Real
                                                        Results. </div>
                                                    <div class=media-talk-card__content> In a market that moves by the
                                                        second, Cortextrade.ai offers more than just automation - it
                                                        delivers an edge. By giving users access to advanced crypto
                                                        trading bots powered by artificial intelligence ... </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=section-media__slide>
                                        <div class="media-talk-card section-media__media-talk-card">
                                            <div class=media-talk-card__inner>
                                                <div class=media-talk-card__header><i
                                                        class="sprite-media-cryptonews media-talk-card__logo"></i> <a
                                                        href=#
                                                        target=_blank class=external-link><svg width=25 height=25>
                                                            <use xlink:href=#external-link></use>
                                                        </svg> </a></div>
                                                <div class=media-talk-card__body>
                                                    <div class=media-talk-card__title> Airocoin Launches AI-based
                                                        Full Investment Platform. <br> Real AI. Real Trades. Real
                                                        Results. </div>
                                                    <div class=media-talk-card__content> In a market that moves by the
                                                        second, Cortextrade.ai offers more than just automation - it
                                                        delivers an edge. By giving users access to advanced crypto
                                                        trading bots powered by artificial intelligence ... </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=section-media__slide>
                                        <div class="media-talk-card section-media__media-talk-card">
                                            <div class=media-talk-card__inner>
                                                <div class=media-talk-card__header><i
                                                        class="sprite-media-blockchainreporter media-talk-card__logo"></i>
                                                    <a href="#"
                                                        target=_blank class=external-link><svg width=25 height=25>
                                                            <use xlink:href=#external-link></use>
                                                        </svg> </a></div>
                                                <div class=media-talk-card__body>
                                                    <div class=media-talk-card__title> Airocoin Launches AI-based
                                                        Full Investment Platform. <br> Real AI. Real Trades. Real
                                                        Results. </div>
                                                    <div class=media-talk-card__content> In a market that moves by the
                                                        second, Cortextrade.ai offers more than just automation - it
                                                        delivers an edge. By giving users access to advanced crypto
                                                        trading bots powered by artificial intelligence ... </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=section-media__slide>
                                        <div class="media-talk-card section-media__media-talk-card">
                                            <div class=media-talk-card__inner>
                                                <div class=media-talk-card__header><i
                                                        class="sprite-media-cryptopolitan media-talk-card__logo"></i>
                                                    <a href=#
                                                        target=_blank class=external-link><svg width=25 height=25>
                                                            <use xlink:href=#external-link></use>
                                                        </svg> </a></div>
                                                <div class=media-talk-card__body>
                                                    <div class=media-talk-card__title> Airocoin Launches AI-based
                                                        Full Investment Platform. <br> Real AI. Real Trades. Real
                                                        Results. </div>
                                                    <div class=media-talk-card__content> In a market that moves by the
                                                        second, Cortextrade.ai offers more than just automation - it
                                                        delivers an edge. By giving users access to advanced crypto
                                                        trading bots powered by artificial intelligence ... </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=section-media__slide>
                                        <div class="media-talk-card section-media__media-talk-card">
                                            <div class=media-talk-card__inner>
                                                <div class=media-talk-card__header><i
                                                        class="sprite-media-captainaltcoin media-talk-card__logo"></i>
                                                    <a href=https://captainaltcoin.com/cortex-trade-launches-ai-based-full-investment-platform/
                                                        target=_blank class=external-link><svg width=25 height=25>
                                                            <use xlink:href=#external-link></use>
                                                        </svg> </a></div>
                                                <div class=media-talk-card__body>
                                                    <div class=media-talk-card__title> Airocoin Launches AI-based
                                                        Full Investment Platform. <br> Real AI. Real Trades. Real
                                                        Results. </div>
                                                    <div class=media-talk-card__content> In a market that moves by the
                                                        second, Cortextrade.ai offers more than just automation - it
                                                        delivers an edge. By giving users access to advanced crypto
                                                        trading bots powered by artificial intelligence ... </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var lastWidth = window.innerWidth;

                        function handleMediaSliderResize() {
                            var $slider = $('#js-media-slider'),
                                windowWidth = window.innerWidth;
                            if (windowWidth < 1440 && lastWidth >= 1440) {
                                $slider.slick('reInit')
                            } else if (windowWidth >= 1440 && lastWidth < 1440) {
                                $slider.slick('reInit')
                            }
                            lastWidth = windowWidth
                        }
                        pageInits.push(function() {
                            var $mediaSlider = $('#js-media-slider'),
                                $leftBtn = $('#js-media-slider-left'),
                                $rightBtn = $('#js-media-slider-right');
                            $mediaSlider.slick({
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                dots: !0,
                                arrows: !1,
                                infinite: !0,
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                }, {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }]
                            });
                            $leftBtn.on('click', function() {
                                $mediaSlider.slick('slickPrev')
                            });
                            $rightBtn.on('click', function() {
                                $mediaSlider.slick('slickNext')
                            });
                            window.addEventListener('resize', handleMediaSliderResize)
                        });
                        pageDestroys.push(function() {
                            window.removeEventListener('resize', handleMediaSliderResize);
                            $('#js-media-slider').slick('unslick')
                        })
                    </script>
                    <section class="section section-screen page-home__section-screen js-scrollable">
                        <div class=section-screen__inner>
                            <div class=container>
                                <div class="contents-group section-screen__contents-group">
                                    <div class="sub-title color-green contents-group__sub-title"> Online trading </div>
                                    <h2 class="title-h2 contents-group__title-h2"> Connect to our automatic trading
                                        system </h2>
                                </div> <img src=theme/img/webp/section-screen-img.webp alt="Cortex online trading"
                                    class=section-screen__img loading=lazy>
                                <div class=section-screen__content> Use our software trading platform and build your own
                                    investment portfolio by adding trading Cortex AI Trading bots and automatically
                                    increasing profit. </div>
                                <div class=section-screen__footer><a href=auth/signup.html
                                        class="btn btn-success btn-lg btn-xs-block" data-pjax=""><span>Turn on
                                            bot</span> <svg width=20 height=20>
                                            <use xlink:href=#arrow-right></use>
                                        </svg></a> </div>
                            </div>
                        </div> <img src=theme/img/webp/decor-bg-gutter-2.webp
                            class="section-screen__before section-screen__before--desktop" alt=""
                            loading=lazy> <img src=theme/img/webp/decor-bg-gutter-2-xl.webp
                            class="section-screen__before section-screen__before--xl" alt="" loading=lazy>
                        <img src=theme/img/webp/decor-bg-gutter-2-lg.webp
                            class="section-screen__before section-screen__before--lg" alt="" loading=lazy>
                        <img src=theme/img/webp/decor-bg-gutter-2-md.webp
                            class="section-screen__before section-screen__before--md" alt="" loading=lazy>
                        <img src=theme/img/webp/decor-bg-gutter-2-sm.webp
                            class="section-screen__before section-screen__before--sm" alt="" loading=lazy>
                        <img src=theme/img/webp/decor-bg-gutter-2-xs.webp
                            class="section-screen__before section-screen__before--xs" alt="" loading=lazy>
                        <img src=theme/img/webp/decor-bg-light-dots.webp
                            class="section-screen__after section-screen__after--desktop" alt="" loading=lazy>
                        <img src=theme/img/webp/decor-bg-light-dots-md.webp
                            class="section-screen__after section-screen__after--md" alt="" loading=lazy> <img
                            src=theme/img/webp/decor-bg-light-dots-sm.webp
                            class="section-screen__after section-screen__after--sm" alt="" loading=lazy> <img
                            src=theme/img/webp/decor-bg-light-dots-xs.webp
                            class="section-screen__after section-screen__after--xs" alt="" loading=lazy>
                    </section>
                    <section class="section section-trust page-home__section-trust js-scrollable">
                        <div class=container>
                            <div class="contents-group contents-group--center">
                                <div class="sub-title color-green contents-group__sub-title"> User comments from around
                                    the world </div>
                                <h2 class="title-h2 contents-group__title-h2"> What Investors Are Saying About <br> Our
                                    AI-Powered Platform </h2>
                            </div>
                            <div class=section-trust__slider-container>
                                <div class=trust-slider>
                                    <div class=trust-slider__inner id=js-trust-slider>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> I&#039;ve tried other platforms,
                                                        but this one delivers a noticeably better experience. It helps
                                                        manage risk effectively while aiming for strong results. I plan
                                                        to keep using it regularly. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Alex Wade </div>
                                                            <div class=trust-review-card__date> July 9, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> The platform is simple to use
                                                        and backed by a supportive community. I&#039;d definitely
                                                        recommend it to others. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Trista Harmon </div>
                                                            <div class=trust-review-card__date> July 3, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> The platform is easy to use and
                                                        supported by a helpful community. Service us responsive and
                                                        informative. Great option for anyone looking to get started with
                                                        confidence. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Martina Linert </div>
                                                            <div class=trust-review-card__date> July 2, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> Trading feels simple and
                                                        enjoyable with how smoothly everything works. Once things are
                                                        set up, the process runs efficiently on it&#039;s own. I&#039;m
                                                        really happy with the results so far. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Jeffrey </div>
                                                            <div class=trust-review-card__date> June 30, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> The experience has been
                                                        excellent, and the AI features continue to impress me. I&#039;m
                                                        grateful this of technology is available to users. It&#039;s
                                                        been both reliable and exciting to use. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Mary Lewis </div>
                                                            <div class=trust-review-card__date> June 25, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> Very simple and user-friendly
                                                        platform. It&#039;s been a fun and informative experience, even
                                                        without a background in investing. Definitely recommend it.
                                                    </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Andrea Cook </div>
                                                            <div class=trust-review-card__date> June 25, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> The platform is easy to use and
                                                        offers a solid selection of wallet options. Everything runs
                                                        smoothly and feels intuitive. It&#039;s a well-rounded
                                                        experience overall </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Edward Lorry </div>
                                                            <div class=trust-review-card__date> June 25, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> Got started recently, and
                                                        I&#039;m impressed with the hands-off earnings </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> James Franklin </div>
                                                            <div class=trust-review-card__date> Jun 23, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> As an experienced trader focused
                                                        on quants and algos, I appreciate the platform&#039;s speed,
                                                        stability, and ongoing improvements. It&#039;s clear the team
                                                        behind it knows what they&#039;re doing. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Joshua Weston </div>
                                                            <div class=trust-review-card__date> Jun 20, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> Thanks to the convenience of
                                                        trading with bots that simplify trading with bots that simplify
                                                        the trader&#039;s work, it&#039;s truly an amazing tool </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Jaden Wood </div>
                                                            <div class=trust-review-card__date> Jun 15, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> Using this AI trading bot has
                                                        been an amazing journey. Every day it surprises me with its
                                                        performance. I&#039;m thankful that such a powerful tool is
                                                        accessible to everyone. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Erik Uffermann </div>
                                                            <div class=trust-review-card__date> Jun 15, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=trust-slider__slide>
                                            <div class=trust-review-card>
                                                <div class=trust-review-card__inner>
                                                    <div class=trust-review-card__header>
                                                        <div
                                                            class="trust-star-list trust-review-card__trust-star-list">
                                                            <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg> <svg width=23 height=23 class=trust-star-list__star>
                                                                <use xlink:href=#trust-star></use>
                                                            </svg></div>
                                                        <div
                                                            class="verified-widget trust-review-card__verified-widget">
                                                            <div class=verified-widget__inner>
                                                                <div class=verified-widget__icon-cell><svg width=23
                                                                        height=23>
                                                                        <use xlink:href=#verified></use>
                                                                    </svg> </div>
                                                                <div class=verified-widget__body-cell> Verified </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=trust-review-card__body> I started with a $3k deposit and
                                                        immediately likes the clean UI. This doesn&#039;t feel like a
                                                        rushed MVP - it feels like something built for serious users.
                                                        It&#039;s too early to judgr long-term ROI, but the platform
                                                        feels like a keeper. It is very convenient that I can withdraw
                                                        money whenever I need it. </div>
                                                    <div class=trust-review-card__footer>
                                                        <div class=trust-review-card__author-cell>
                                                            <div class=trust-review-card__author> Margarita Brown </div>
                                                            <div class=trust-review-card__date> Jun 13, 2025 </div>
                                                        </div>
                                                        <div class=trust-review-card__quote-cell><svg width=44
                                                                height=44>
                                                                <use xlink:href=#quote></use>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-controls-list section-trust__slider-controls-list">
                                <div class=slider-controls-list__inner><button
                                        class="arrow-btn slider-controls-list__arrow-btn" id=js-trust-slider-left><svg
                                            width=20 height=20>
                                            <use xlink:href=#carret-left></use>
                                        </svg> </button>
                                    <div class=slider-controls-list__dots id=js-trust-slider-dots></div> <button
                                        class="arrow-btn slider-controls-list__arrow-btn" id=js-trust-slider-right><svg
                                            width=20 height=20>
                                            <use xlink:href=#carret-right></use>
                                        </svg> </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        pageInits.push(function() {
                            var $slider = $('#js-trust-slider');
                            $slider.slick({
                                infinite: !1,
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                dots: !0,
                                arrows: !1,
                                adaptiveHeight: !0,
                                appendDots: $('#js-trust-slider-dots'),
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                }, {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }]
                            });
                            $('#js-trust-slider-left').on('click', function() {
                                $slider.slick('slickPrev')
                            });
                            $('#js-trust-slider-right').on('click', function() {
                                $slider.slick('slickNext')
                            })
                        });
                        pageDestroys.push(function() {
                            $('#js-trust-slider').slick('unslick')
                        })
                    </script>
                    <section class="section section-exchanges page-home__section-exchanges js-scrollable">
                        <div class=container>
                            <div class="contents-group section-partners__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Our AI Bots </div>
                                <h2 class="title-h2 contents-group__title-h2"> Trade on Major Crypto Platforms </h2>
                            </div>
                            <div class="exchanges-slider-block section-exchanges__exchanges-slider-block">
                                <div class=exchanges-slider-block__inner id=js-ex-slider>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-binance></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-bybit></i> </span>
                                        </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-okx></i> </span>
                                        </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-kucoin></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-binance-tr></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-binance-us></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-bitfinex></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-bitget></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-bitstamp></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-coinbase></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-coinbase-p></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-gate></i> </span>
                                        </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-gemini></i>
                                            </span> </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-htx></i> </span>
                                        </div>
                                    </div>
                                    <div class=exchanges-slider-block__slide>
                                        <div class="main-partner-widget exchanges-slider-block__main-partner-widget">
                                            <span class=main-partner-widget__inner><i class=sprite-ex-kraken></i>
                                            </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        function exMarqueeDestroy() {
                            $('#js-ex-slider').marquee('destroy');
                            $('#js-ex-slider .cloned').remove()
                        }

                        function exMarqueeInit() {
                            var $container = $('#js-ex-slider');
                            var $slides = $container.children().clone();
                            $slides.addClass('cloned');
                            $container.append($slides);
                            $('#js-ex-slider').marquee({
                                speed: 100,
                                gap: 0,
                                delayBeforeStart: 0,
                                startVisible: !0,
                                direction: 'left',
                                duplicated: !0,
                                pauseOnHover: !1
                            })
                        }

                        function handleExMarqueeInit() {
                            exMarqueeDestroy();
                            if (window.innerWidth <= 767) {
                                exMarqueeInit()
                            }
                        }
                        pageInits.push(function() {
                            handleExMarqueeInit();
                            $(window).on('resize', handleExMarqueeInit)
                        });
                        pageDestroys.push(function() {
                            exMarqueeDestroy();
                            $(window).off('resize', handleExMarqueeInit)
                        })
                    </script>
                    <section class="section section-advantages page-home__section-advantages js-scrollable">
                        <div class=container>
                            <div class="contents-group section-advantages__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Smart technologies </div>
                                <h2 class="title-h2 contents-group__title-h2"> Automatic trading platform </h2>
                            </div>
                        </div>
                        <div class=section-advantages__body>
                            <div class="delimiter section__delimiter">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class="delimiter section__delimiter section__delimiter--bottom">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class="container-fluid section-advantages__container">
                                <div class="advantages-group section-advantages__advantages-group">
                                    <div class=advantages-group__inner id=js-advantages-slider>
                                        <div class=advantages-group__cell>
                                            <div
                                                class="advantage-card advantages-group__advantage-card advantage-card--1">
                                                <div class=advantage-card__inner>
                                                    <div class="g-profit-widget advantage-card__g-profit-widget">
                                                        <div class=g-profit-widget__inner>
                                                            <div class=g-profit-widget__icon-cell><svg width=24
                                                                    height=24>
                                                                    <use xlink:href=#adv-1></use>
                                                                </svg> </div>
                                                            <div class=g-profit-widget__body-cell> Profit growth </div>
                                                        </div>
                                                    </div>
                                                    <div class="title-h5 advantage-card__title-h5"> Strong positions
                                                        only </div>
                                                    <div class=advantage-card__content> By using our platform, you will
                                                        be able to create a new reality for your investment when your
                                                        money is working 24/7, making an unmistakable and secure profit
                                                        for you. The advantages of automatic online trading are already
                                                        in your gadget today. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=advantages-group__cell>
                                            <div
                                                class="advantage-card advantages-group__advantage-card advantage-card--2">
                                                <div class=advantage-card__inner>
                                                    <div class="g-profit-widget advantage-card__g-profit-widget">
                                                        <div class=g-profit-widget__inner>
                                                            <div class=g-profit-widget__icon-cell><svg width=24
                                                                    height=24>
                                                                    <use xlink:href=#adv-2></use>
                                                                </svg> </div>
                                                            <div class=g-profit-widget__body-cell> AI Technologies
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="title-h5 advantage-card__title-h5"> New investment
                                                        independence </div>
                                                    <div class=advantage-card__content> Every trade carried out by our
                                                        trading bots is controlled by AI and this gives you real
                                                        complete confidence in the future, as well as the independence
                                                        of your investment choice day by day. Your free decision-making.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=advantages-group__cell>
                                            <div
                                                class="advantage-card advantages-group__advantage-card advantage-card--3">
                                                <div class=advantage-card__inner>
                                                    <div class="g-profit-widget advantage-card__g-profit-widget">
                                                        <div class=g-profit-widget__inner>
                                                            <div class=g-profit-widget__icon-cell><svg width=24
                                                                    height=24>
                                                                    <use xlink:href=#adv-3></use>
                                                                </svg> </div>
                                                            <div class=g-profit-widget__body-cell> More options </div>
                                                        </div>
                                                    </div>
                                                    <div class="title-h5 advantage-card__title-h5"> More chances with
                                                        Cortex Team </div>
                                                    <div class=advantage-card__content> The ability to do more is our
                                                        advantage. If you need more profit, create your own Cortex Team
                                                        and take advantage of your entrepreneurial spirit and activity
                                                        at the like-minded automatic trading team forming. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var advantagesSliderSettings = {
                            mobileFirst: !0,
                            infinite: !1,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: !1,
                            dots: !0,
                            adaptiveHeight: !0,
                            responsive: [{
                                breakpoint: 700,
                                settings: {
                                    slidesToShow: 2
                                }
                            }, {
                                breakpoint: 1024,
                                settings: 'unslick'
                            }]
                        };

                        function handleAdvantagesSliderInit() {
                            var $slider = $('#js-advantages-slider'),
                                windowWidth = window.innerWidth;
                            if (windowWidth < 1024 && !$slider.hasClass('slick-initialized')) {
                                $slider.slick(advantagesSliderSettings)
                            }
                        }
                        pageInits.push(function() {
                            $('#js-advantages-slider').slick(advantagesSliderSettings);
                            $(window).on('resize', handleAdvantagesSliderInit)
                        });
                        pageDestroys.push(function() {
                            $('#js-advantages-slider').slick('unslick');
                            $(window).off('resize', handleAdvantagesSliderInit)
                        })
                    </script>
                </div>
                <section class="section section-banner page__section-banner page-home__section-banner js-scrollable">
                    <div class=container>
                        <div class="main-banner section-banner__main-banner">
                            <div class=main-banner__inner>
                                <div class=main-banner__left>
                                    <div class="title-h3 main-banner__title-h3"> Use the best technology <br> for your
                                        own profit </div>
                                    <div class=main-banner__btn-row><a href=auth/signup.html
                                            class="btn btn-success btn-lg" data-pjax=""><span>Your
                                                technologies</span> <svg width=20 height=20>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></a> </div>
                                </div>
                                <div class=main-banner__right>
                                    <div class=check-list>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> Applying four trading bots </div>
                                        </div>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> Artificial Intelligence using </div>
                                        </div>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> High frequency trading systems </div>
                                        </div>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> Best algorithmic trading platforms </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer page__footer page-home__footer">
                    <section class="section section-footer-first">
                        <div class="delimiter section__delimiter">
                            <div class="delimiter__times delimiter__times--left"></div>
                            <div class="delimiter__times delimiter__times--right"></div>
                        </div>
                        <div class="delimiter section__delimiter section__delimiter--bottom">
                            <div class="delimiter__times delimiter__times--left"></div>
                            <div class="delimiter__times delimiter__times--right"></div>
                        </div>
                        <div class=container>
                            <div class=section-footer-first__inner>
                                <div class=section-footer-first__logo-cell>
                                    <div class=section-footer-first__logo-wrap><a href=index.html
                                            class="logo section-footer-first__logo" data-pjax=""></a> <a
                                            href=https://t.me/+d3eHGMloj7AyNzA0 target=_blank
                                            class="comunity-link section-footer-first__comunity-link"><span
                                                class=comunity-link__inner><span class=comunity-link__icon-cell><svg
                                                        width=36 height=36>
                                                        <use xlink:href=#comunity-telegram></use>
                                                    </svg> </span> <span class=comunity-link__content> Join Our
                                                    Community </span> <span class=comunity-link__arrow-cell><svg
                                                        width=18 height=16>
                                                        <use xlink:href=#arrow-right></use>
                                                    </svg> </span></span> </a></div>
                                    <div class=section-footer-first__socials>
                                        <div
                                            class="section-footer-first__content section-footer-first__content--socials">
                                            Stay connected with us on social media </div>
                                        <div class="social-icons-list section-footer-first__social-icons-list">
                                            <div class=social-icons-list__inner>
                                                <div class=social-icons-list__cell><a href=https://t.me/cortextrade
                                                        target=_blank class=social-icon><svg width=20 height=20>
                                                            <use xlink:href=#social-telegram></use>
                                                        </svg> </a> </div>
                                                <div class=social-icons-list__cell><a
                                                        href=https://www.instagram.com/cortex_trading/ target=_blank
                                                        class=social-icon><svg width=20 height=20>
                                                            <use xlink:href=#social-instagram></use>
                                                        </svg> </a> </div>
                                                <div class=social-icons-list__cell><a
                                                        href=https://www.youtube.com/@cortex_trade target=_blank
                                                        class=social-icon><svg width=20 height=20>
                                                            <use xlink:href=#social-youtube></use>
                                                        </svg> </a> </div>
                                                <div class=social-icons-list__cell><a
                                                        href="https://x.com/cortextrade?s=21" target=_blank
                                                        class=social-icon><svg width=20 height=20>
                                                            <use xlink:href=#social-x></use>
                                                        </svg> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=section-footer-first__menu-cell>
                                    <div class="footer-menu-list section-footer-first__footer-menu-list">
                                        <div class="footer-menu-title footer-menu-list__footer-menu-title">
                                            <div class=footer-menu-title__icon-cell><svg width=20 height=20>
                                                    <use xlink:href=#arrow-right-down></use>
                                                </svg> </div>
                                            <div class=footer-menu-title__content> About us </div>
                                        </div>
                                        <ul class=footer-menu-list__items>
                                            <li class=footer-menu-list__item><a href=index.html
                                                    class="footer-menu-list__link js-link-home" data-pjax=""> Home
                                                </a> </li>
                                            <li class=footer-menu-list__item><a href=company.html
                                                    class="footer-menu-list__link js-link-company" data-pjax="">
                                                    Company </a> </li>
                                            <li class=footer-menu-list__item><a href=technologies.html
                                                    class="footer-menu-list__link js-link-techno" data-pjax="">
                                                    Technologies </a> </li>
                                            <li class=footer-menu-list__item><a href=theme/static/presentation-en.pdf
                                                    target=_blank class="footer-menu-list__link js-link-pdf">
                                                    Presentation </a> </li>
                                            <li class=footer-menu-list__item><a href=contacts.html
                                                    class="footer-menu-list__link js-link-contacts" data-pjax="">
                                                    Contacts </a> </li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu-list section-footer-first__footer-menu-list">
                                        <div class="footer-menu-title footer-menu-list__footer-menu-title">
                                            <div class=footer-menu-title__icon-cell><svg width=20 height=20>
                                                    <use xlink:href=#arrow-right-down></use>
                                                </svg> </div>
                                            <div class=footer-menu-title__content> Finance </div>
                                        </div>
                                        <ul class=footer-menu-list__items>
                                            <li class=footer-menu-list__item><a href=finance.html
                                                    class="footer-menu-list__link js-link-finance" data-pjax="">
                                                    Trading bots </a> </li>
                                            <li class=footer-menu-list__item><a href=partnership.html
                                                    class="footer-menu-list__link js-link-partnership" data-pjax="">
                                                    Partnership </a> </li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu-list section-footer-first__footer-menu-list">
                                        <div class="footer-menu-title footer-menu-list__footer-menu-title">
                                            <div class=footer-menu-title__icon-cell><svg width=20 height=20>
                                                    <use xlink:href=#arrow-right-down></use>
                                                </svg> </div>
                                            <div class=footer-menu-title__content> Other </div>
                                        </div>
                                        <ul class=footer-menu-list__items>
                                            <li class=footer-menu-list__item><a href=blog.html
                                                    class="footer-menu-list__link js-link-blog" data-pjax=""> Blog
                                                </a> </li>
                                            <li class=footer-menu-list__item><a href=guide.html
                                                    class="footer-menu-list__link js-link-guide" data-pjax=""> Guide
                                                </a> </li>
                                            <li class=footer-menu-list__item><a href=faq.html
                                                    class="footer-menu-list__link js-link-faq" data-pjax=""> FAQ
                                                </a> </li>
                                            <li class=footer-menu-list__item><a href=auth/login.html
                                                    class=footer-menu-list__link data-pjax=""> Sign in </a> </li>
                                            <li class=footer-menu-list__item><a href=auth/signup.html
                                                    class=footer-menu-list__link data-pjax=""> Sign up </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=section-footer-first__security-cell>
                                    <div class=title-h5> Using information on the website </div>
                                    <div class="section-footer-first__content section-footer-first__content--security">
                                        Software products developed by the owner of this website are intended only for
                                        non-commercial use by registered users of the website, subject to the relevant
                                        tax laws. </div>
                                    <div class="security-widgets-group section-footer-first__security-widgets-group">
                                        <div class=security-widgets-group__inner>
                                            <div class=security-widgets-group__cell>
                                                <div class="security-widget security-widgets-group__security-widget">
                                                    <div class=security-widget__inner>
                                                        <div class=security-widget__icon-cell><svg width=40 height=48
                                                                class=security-widget__icon>
                                                                <use xlink:href=#security-ssl></use>
                                                            </svg> </div>
                                                        <div class=security-widget__content> SSL <br> protection </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=security-widgets-group__cell>
                                                <div class="security-widget security-widgets-group__security-widget">
                                                    <div class=security-widget__inner>
                                                        <div class=security-widget__icon-cell><svg width=40 height=48
                                                                class=security-widget__icon>
                                                                <use xlink:href=#security-ddos></use>
                                                            </svg> </div>
                                                        <div class=security-widget__content> DDOS <br> protection </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-footer-second">
                        <div class=container>
                            <div class=section-footer-second__inner>
                                <div class=section-footer-second__left><a href=user-agreement.html
                                        class=section-footer-second__link data-pjax=""> User agreement </a> <a
                                        href=terms-of-use.html class=section-footer-second__link data-pjax=""> Terms
                                        of use </a></div>
                                <div class=section-footer-second__center>
                                    <div class=section-footer-second__content> © 2025 / All rights reserved by Cortex
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </footer>
            </div>
        </div>
        <div class=messages-container>
            <div class=container-fluid>
                <div class=messages-container__inner></div>
            </div>
        </div>
        <script>
            pageInits.push(function() {
                $('.js-link-home').addClass('active')
            });
            pageInits.push(function() {
                dealsSub = centrifuge.subscribe('deals-all', function(ctx) {
                    for (var handler of dealsHandlers) {
                        handler(ctx)
                    }
                })
            });
            pageDestroys.push(function() {
                if (dealsSub) {
                    dealsSub.unsubscribe();
                    dealsSub = null
                }
                if (dealsHandlers.length) {
                    dealsHandlers = []
                }
            })
        </script> <template id=js-tx-item>
            <div class="transaction-card transactions-container__transaction-card">
                <div class=transaction-card__inner>
                    <div class="transaction-card__header js-tx-item-type"></div>
                    <div class=transaction-card__widget>
                        <div class="gate-widget transaction-card__gate-widget">
                            <div class=gate-widget__inner><svg width=44 height=44 class=js-tx-item-ps-svg>
                                    <use href=#ps-></use>
                                </svg>
                                <div class=gate-widget__body>
                                    <div class="gate-widget__title js-tx-item-ps-title"></div>
                                    <div class="gate-widget__network js-tx-item-ps-network"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=transaction-card__body>
                        <div class=transaction-card__amount><span class=js-tx-item-amount></span> <span
                                class=js-tx-item-currs-slug></span></div>
                        <div class=transaction-card__user><span>User:</span> <span class=js-tx-item-username></span>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <div class=transactions-container>
            <div class=container-fluid>
                <div class=transactions-container__inner id=js-tx-container></div>
            </div>
        </div>
        <script>
            var txSub = null,
                clearTxContainerTimeout = null;
            pageInits.push(function() {
                txSub = centrifuge.subscribe('tx', function(ctx) {
                    var $container = $('#js-tx-container'),
                        tx = ctx.data;
                    var $template = $($('#js-tx-item').html());
                    $template.find('.js-tx-item-ps-svg use').attr('xlink:href', '#ps-' + tx.psSlug).attr('href',
                        '#ps-' + tx.psSlug);
                    $template.find('.js-tx-item-type').text(tx.isInsert ? 'Deposit' : 'Withdrawal');
                    $template.find('.js-tx-item-ps-title').text(tx.psTitle);
                    $template.find('.js-tx-item-ps-network').text(tx.psNetwork ? tx.psNetwork : '');
                    $template.find('.js-tx-item-amount').text(tx.amount);
                    $template.find('.js-tx-item-currs-slug').text(tx.currsSlug);
                    $template.find('.js-tx-item-username').text(tx.username);
                    $container.html($template);
                    if (clearTxContainerTimeout) {
                        clearTimeout(clearTxContainerTimeout);
                        clearTxContainerTimeout = null
                    }
                    clearTxContainerTimeout = setTimeout(function() {
                        $container.html('')
                    }, 5000)
                })
            });
            pageDestroys.push(function() {
                if (txSub) {
                    txSub.unsubscribe()
                }
                if (clearTxContainerTimeout) {
                    clearTimeout(clearTxContainerTimeout);
                    clearTxContainerTimeout = null
                }
            })
        </script>
    </div>
    <script src=theme/js/index-v-d367a25c6b3e.js></script>
    <script src=theme/js/pjax-v-d367a25c6b3e.js></script>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/theme/img/sprite-v-d367a25c6b3e.svg', !0);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var div = document.createElement('div');
                div.style.position = 'absolute';
                div.style.width = '0';
                div.style.height = '0';
                div.style.visibility = 'hidden';
                div.innerHTML = xhr.responseText;
                document.body.insertBefore(div, document.body.firstChild)
            }
        };
        xhr.send()
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pjaxOptions = {
                fragment: '#js-pjax-container',
                scrollTo: !1,
                timeout: 3000
            };
            $.pjax.defaults.maxCacheLength = 0;
            $(document).on('click', 'form[data-pjax] button[type="submit"][name]', function() {
                var form = $(this).closest('form');
                var buttonName = $(this).attr('name');
                var buttonValue = $(this).attr('value');
                var hiddenInput = form.find('input[type="hidden"][name="' + buttonName + '"]');
                if (hiddenInput.length > 0) {
                    hiddenInput.remove()
                }
                hiddenInput = $('<input>').attr('type', 'hidden').attr('name', buttonName).val(buttonValue);
                form.append(hiddenInput)
            }).pjax('a[data-pjax]', '#js-pjax-container', pjaxOptions).on('submit', 'form[data-pjax]', function(
                event) {
                $.pjax.submit(event, '#js-pjax-container', pjaxOptions)
            }).on('pjax:clicked', function(options) {}).on('pjax:beforeReplace', function() {
                pageDestroys.forEach(function(element) {
                    (element)()
                });
                pageDestroys = []
            }).on('pjax:beforeSend', function(event) {
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                $('#js-preloader').removeClass('ready');
                if (!$(event.relatedTarget).hasClass('js-noscroll')) {
                    setTimeout(function() {
                        window.scrollTo({
                            top: 0,
                            left: 0
                        })
                    }, 10)
                }
            }).on('pjax:success', function(event, data) {}).on('pjax:error', function(event, xhr, textStatus,
                errorThrown, options) {
                options.success(xhr.responseText, textStatus, xhr);
                return !1
            }).on('pjax:end', function() {
                pageInits.forEach(function(element) {
                    (element)()
                });
                pageInits = []
            }).on('pjax:complete', function() {
                layoutInit();
                $('#js-preloader').addClass('ready');
                setTimeout(function() {
                    $('#js-pjax-container').css('height', '')
                })
            })
        })
    </script>
    <script>
        //(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
        //'https://dars1.ladesk.com/scripts/track.js',
        //function(e){ LiveAgent.createButton('u76fqdpl', e); });
    </script>
    <script>
        (function(w, d, v3) {
            w.chaportConfig = {
                appId: '684c6a1f1abf0018f2bd6556'
            };
            if (w.chaport) return;
            v3 = w.chaport = {};
            v3._q = [];
            v3._l = {};
            v3.q = function() {
                v3._q.push(arguments)
            };
            v3.on = function(e, fn) {
                if (!v3._l[e]) v3._l[e] = [];
                v3._l[e].push(fn)
            };
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = !0;
            s.src = 'https://app.chaport.com/javascripts/insert.js';
            var ss = d.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss)
        })(window, document)
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"967af941d9168362","version":"2025.7.0","r":1,"token":"0ba6880f01494148a07c3ba6978a8c03","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>

</html>
