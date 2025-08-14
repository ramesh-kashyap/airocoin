<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Dashboard - Airocoin</title>
    <link rel=apple-touch-icon sizes=180x180 href=/theme/static/apple-touch-icon.png>
    <link rel=icon type=image/png sizes=32x32 href=/theme/static/favicon-32x32.png>
    <link rel=icon type=image/png sizes=16x16 href=/theme/static/favicon-16x16.png>
    <link rel=manifest href=/theme/static/site.webmanifest>
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
    <link rel=stylesheet href=/theme/css/style-v-d367a25c6b3e.css>
    <script src=https://unpkg.com/lottie-web/build/player/lottie.min.js></script>
    <script src=https://cdn.jsdelivr.net/npm/centrifuge@2.8.0/dist/centrifuge.min.js></script>
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
    <div class=preloader id=js-preloader>
        <img src="/theme/img/coin-logo.png" style="width: 100px" alt="">
    </div>
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
        <div class="page-user page-user-dashboard" id=js-page-user>
            <div class=mobile-navigation id=js-mobile-navigation>
                <div class=mobile-navigation__backdrop id=js-mobile-navigation-close><svg width=75 height=75
                        class=mobile-navigation__close>
                        <use xlink:href=#close></use>
                    </svg> </div>
                <div class=mobile-navigation__inner>
                    <div class=mobile-navigation__header><a href=/ class="logo mobile-navigation__logo"
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
                                    class="dropdown-item locale-dropdown__dropdown-item" href=/locale/en data-pjax="">
                                    English </a> </div>
                        </div>
                    </div>
                    <div class=mobile-navigation__body>
                        <div class=mobile-menu-list>
                            <div class=mobile-menu-list__item><a href=/user/investment class=mobile-menu-list__link
                                    data-pjax=""> Create Deposit </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/deposits class=mobile-menu-list__link
                                    data-pjax=""> Your Deposits </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/wallet/usdt class=mobile-menu-list__link
                                    data-pjax=""> Your Wallet </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/partnership class=mobile-menu-list__link
                                    data-pjax=""> Affiliate Program </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/bounty class=mobile-menu-list__link
                                    data-pjax=""> Bounty Program </a> </div>
                        </div>
                        <div class=mobile-menu-list>
                            <div class=mobile-menu-list__item><a href=/user class=mobile-menu-list__link data-pjax="">
                                    Dashboard </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/history class=mobile-menu-list__link
                                    data-pjax=""> History </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/settings class=mobile-menu-list__link
                                    data-pjax=""> Settings </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/profile class=mobile-menu-list__link
                                    data-pjax=""> Profile </a> </div>
                            <div class=mobile-menu-list__item><a href=/user/partnership/promo
                                    class=mobile-menu-list__link data-pjax=""> AD Products </a> </div>
                        </div>
                    </div>
                    <div class=mobile-navigation__footer>
                        <div class=mobile-navigation__footer-cell><a href=/user class="btn btn-success btn-block"
                                data-pjax=""> Dashboard </a> </div>
                        <div class=mobile-navigation__footer-cell><a href=/logout
                                class="btn btn-outline-success btn-block" data-pjax=""> Logout </a> </div>
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
                                <div class=social-icons-list__cell><a href=https://www.instagram.com/Airocoin_trading/
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-instagram></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href=https://www.youtube.com/@Airocoin_trade
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
                class="scroll-btn page__scroll-btn page__scroll-btn--top page-user__scroll-btn js-scroll-btn js-scroll-btn-top js-anchor"
                href=#js-pjax-container><span class=scroll-btn__label> Back to Top </span> <span
                    class=scroll-btn__btn><svg width=14 height=14
                        class="scroll-btn__icon scroll-btn__icon--1 color-green">
                        <use xlink:href=#carret-top></use>
                    </svg> <svg width=14 height=14 class="scroll-btn__icon scroll-btn__icon--2 color-green">
                        <use xlink:href=#carret-top></use>
                    </svg></span></a>
            <div class=page-user__inner>
                <div class=page-user__left>
                    <div class="user-left-side page-user__user-left-side">
                        <div class=user-left-side__logo-row><a href=/
                                class="logo user-left-side__logo user-left-side__logo--expanded" data-pjax=""></a> <a
                                href=/ class=user-left-side__logo--collapsed data-pjax=""><svg width=46 height=44>
                                    <use xlink:href=#round-logo></use>
                                </svg> </a> <button
                                class="side-hide-btn user-left-side__side-hide-btn js-sidebar-collapse"><svg width=24
                                    height=24 class=color-white>
                                    <use xlink:href=#carret-left></use>
                                </svg> </button></div>
                        <div class="user-sidebar user-left-side__user-sidebar">
                            <div class=user-sidebar__item><a href="{{route('user.dashboard')}}"
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-dashboard"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-dashboard></use>
                                    </svg>
                                    <div class=sidebar-link__content> Dashboard </div>
                                </a> </div>
                            <div class=user-sidebar__item><a href="{{route('user.autoinvest')}}"
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-deposit"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-deposit></use>
                                    </svg>
                                    <div class=sidebar-link__content> Make Investment </div>
                                </a> </div>
                            <div class=user-sidebar__item><a href={{route('user.fund_transfer')}}
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-deposits"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-deposits></use>
                                    </svg>
                                    <div class=sidebar-link__content> Transfer Fund </div>
                                </a> </div>
                            <div class=user-sidebar__item><a href=/user/wallet/usdt
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-wallet"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-wallet></use>
                                    </svg>
                                    <div class=sidebar-link__content> Your Wallet </div>
                                </a> </div>
                            <div class=user-sidebar__item><a href={{route('user.referral-team')}}
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-affiliate"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-affiliate></use>
                                    </svg>
                                    <div class=sidebar-link__content> Affiliates </div>
                                </a> </div>
                            <div class=user-sidebar__item><a href=/user/bounty
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-bounty"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-bounty></use>
                                    </svg>
                                    <div class=sidebar-link__content> Bounty Program </div>
                                </a> </div>
                            <div class=user-sidebar__delimiter></div>
                            <div class=user-sidebar__item><a href=/user/history
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-history"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-history></use>
                                    </svg>
                                    <div class=sidebar-link__content> History </div>
                                </a> </div>
                            <div class=user-sidebar__item><a href=/user/settings
                                    class="sidebar-link user-sidebar__sidebar-link js-link-user-settings"
                                    data-pjax=""><svg width=24 height=24 class=sidebar-link__icon>
                                        <use xlink:href=#sidebar-settings></use>
                                    </svg>
                                    <div class=sidebar-link__content> Settings </div>
                                </a> </div>
                        </div>
                        <div class=user-left-side__card-cell>
                            <div class="comunity-banner-card user-left-side__comunity-banner-card">
                                <div class=comunity-banner-card__inner>
                                    <div class=comunity-banner-card__header>
                                        <div class=comunity-banner-card__icon-cell><svg width=48 height=48>
                                                <use xlink:href=#comunity-telegram></use>
                                            </svg> </div>
                                        <div class=comunity-banner-card__content> Join Our Community </div>
                                    </div>
                                    <div class=comunity-banner-card__footer><a href=https://t.me/+d3eHGMloj7AyNzA0
                                            target=_blank class=comunity-banner-card__link><span>Telegram</span> <svg
                                                width=18 height=16>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class=user-left-side__footer><a href=/user/profile
                                class="user-link-widget user-left-side__user-link-widget" data-pjax=""><span
                                    class=user-link-widget__inner><span class=user-link-widget__avatar-cell><span
                                            class=user-link-widget__avatar
                                            style="background-image:url('/theme/static/avatar-example.png')"></span>
                                    </span> <span class=user-link-widget__body-cell><span class=user-link-widget__label>
                                            Profile </span> <span class=user-link-widget__value> rameshk036
                                        </span></span> <span class=user-link-widget__carret-cell><svg width=22
                                            height=22>
                                            <use xlink:href=#carret-right></use>
                                        </svg> </span></span> </a> </div>
                    </div>
                </div>
                <div class=page-user__right>
                    <div class=page-user__body>
                        <div class="user-header-group page-user__user-header-group">
                            <div class=user-header-group__inner>
                                <div class=user-header-group__title-cell>
                                    <div class=title-h3> Dashboard Overview </div>
                                </div>
                                <div class=user-header-group__payout-cell>
                                    <div class="next-payout-card user-header-group__next-payout-card js-next-payout-card"
                                        data-next-payout="" data-server-time=1755166277>
                                        <div class=next-payout-card__inner>
                                            <div class=next-payout-card__header>
                                                <div class=next-payout-card__label> Next payout in </div>
                                            </div>
                                            <div class=next-payout-card__body>
                                                <div class="next-payout-card__number js-next-payout-mins"> --m </div>
                                                <div class=next-payout-card__delimiter>:</div>
                                                <div class="next-payout-card__number js-next-payout-secs"> --s </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        (function() {
                                            var interval = null;
                                            pageInits.push(function() {
                                                var $card = $('.js-next-payout-card');
                                                var nextTs = parseInt($card.data('next-payout'), 10);
                                                var serverTs = parseInt($card.data('server-time'), 10);
                                                var clientTs = Math.floor(Date.now() / 1000);
                                                var offset = serverTs - clientTs;
                                                var $mins = $card.find('.js-next-payout-mins');
                                                var $secs = $card.find('.js-next-payout-secs');
                                                if (!nextTs) {
                                                    $mins.text('--m');
                                                    $secs.text('--s');
                                                    return
                                                }

                                                function update() {
                                                    var now = Math.floor(Date.now() / 1000) + offset;
                                                    var diff = nextTs - now;
                                                    if (diff <= 0) {
                                                        clearInterval(interval);
                                                        $mins.text('00m');
                                                        $secs.text('00s');
                                                        return
                                                    }
                                                    var m = Math.floor(diff / 60);
                                                    var s = diff % 60;
                                                    $mins.text(String(m).padStart(2, '0') + 'm');
                                                    $secs.text(String(s).padStart(2, '0') + 's')
                                                }
                                                update();
                                                interval = setInterval(update, 1000)
                                            });
                                            pageDestroys.push(function() {
                                                if (interval) {
                                                    clearInterval(interval);
                                                    interval = null
                                                }
                                            })
                                        })()
                                    </script>
                                </div>
                                <div class=user-header-group__mode-cell><button class=demo-switch-widget><span
                                            class=demo-switch-widget__inner><span
                                                class="demo-switch-widget__label active"> Real account </span> <span
                                                class=demo-switch-widget__btn><svg width=16 height=16>
                                                    <use xlink:href=#ok></use>
                                                </svg> </span></span> </button> </div>
                                <div class=user-header-group__controls-cell>
                                    <div class="dropdown locale-dropdown user-header-group__locale-dropdown"><button
                                            class="dropdown-widget locale-dropdown__dropdown-widget dropdown-toggle"
                                            data-toggle=dropdown><span class=dropdown-widget__inner><span
                                                    class=dropdown-widget__icon-cell><svg width=20 height=20>
                                                        <use xlink:href=#locale-planet></use>
                                                    </svg> </span> <span class=dropdown-widget__locale-cell> en </span>
                                                <span class=dropdown-widget__carret-cell><svg width=10 height=10
                                                        class=color-white>
                                                        <use xlink:href=#carret-down></use>
                                                    </svg> </span></span> </button>
                                        <div class="dropdown-menu  locale-dropdown__dropdown-menu"><a
                                                class="dropdown-item locale-dropdown__dropdown-item" href=/locale/en
                                                data-pjax=""> English </a> </div>
                                    </div> <a href=/logout
                                        class="btn btn-outline-success btn-burger user-header-group__logout"
                                        data-pjax=""><svg width=22 height=22>
                                            <use xlink:href=#logout></use>
                                        </svg> </a> <button
                                        class="btn btn-success btn-lg btn-burger user-header-group__burger"
                                        id=js-mobile-navigation-open><span class=burger-icon
                                            id=js-mobile-navigation-burger-icon><span></span> <span></span>
                                            <span></span></span> </button>
                                </div>
                            </div>
                        </div>
