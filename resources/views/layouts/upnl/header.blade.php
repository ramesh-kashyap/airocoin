<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0, user-scalable=0"> -->
    <meta name="description" content="{{ siteName() }} | Account">
    <title>{{ siteName() }} | Account</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css", href="{{ asset('') }}frontend/css/reset.css">
    <link rel="stylesheet" type="text/css", href="{{ asset('') }}frontend/cabinet.css?v=1.111">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <script type="text/javascript" src="{{ asset('') }}frontend/js/jquery.js"></script>


    <script type="text/javascript">
        var ajax2 = {};
        ajax2.get = function(url) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, false);
            try {
                xhr.send();
                if (xhr.status != 200) {

                } else {
                    return xhr.responseText;
                }
            } catch (err) {

            }

        };
        ajax2.post = function(sett) {
            sett.form.addEventListener('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(sett.form);
                var xhr = new XMLHttpRequest();
                xhr.open("POST", sett.url);
                document.getElementById(sett.el_err).innerHTML = '';
                xhr.onreadystatechange = function() {
                    if (this.readyState != 4) return;
                    var arr = JSON.parse(this.responseText);
                    if (arr['err']) {
                        document.getElementById(sett.el_err).innerHTML = arr['err'];
                    }
                    if (arr['go']) {
                        window.location.href = arr['go'];
                    }
                    if (arr['change']) {
                        document.getElementById(arr['change']).innerHTML = arr['change_text'];
                    }
                }
                xhr.send(formData);

                return false;
            });

        };


        ajax2.post_click = function(sett) {
            var formData = new FormData(sett.form);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", sett.url);
            document.getElementById(sett.el_err).innerHTML = '';
            xhr.onreadystatechange = function() {
                if (this.readyState != 4) return;
                var arr = JSON.parse(this.responseText);
                if (arr['err']) {
                    document.getElementById(sett.el_err).innerHTML = arr['err'];
                }
                if (arr['go']) {
                    window.location.href = arr['go'];
                }
                if (arr['change']) {
                    document.getElementById(arr['change']).innerHTML = arr['change_text'];
                }
                if (sett.butt) {
                    sett.butt();
                }
            }
            xhr.send(formData);

        };

        function load_page2(url, el_id) {
            //console.log(url);
            //console.log(el_id);
            var html = ajax2.get(url);
            var parser = new DOMParser();
            var htmlDoc = parser.parseFromString(html, 'text/html');
            document.getElementById(el_id).innerHTML = htmlDoc.getElementById(el_id).innerHTML;
            if (document.getElementById(el_id + '_pagi')) {
                document.getElementById(el_id + '_pagi').innerHTML = htmlDoc.getElementById(el_id + '_pagi').innerHTML;
            }

            var ss = document.getElementsByClassName('lk-statistic-currincy-cripta').length;
            if (ss > 0) {
                $(".lk-statistic-currincy-cripta").on("click", function() {
                    $(this).parents(".lk-statistic-table").find(".lk-statistic-currincy-usa").removeClass("active");
                    $(this).addClass("active");
                    $(this).parents(".lk-statistic-table").find(".lk-statistic-table-col-3-usa-value").removeClass(
                        "active");
                    $(this).parents(".lk-statistic-table").find(".lk-statistic-table-col-3-cripta-value").addClass(
                        "active");
                });
                $(".lk-statistic-currincy-usa").on("click", function() {
                    $(this).parents(".lk-statistic-table").find(".lk-statistic-currincy-cripta").removeClass(
                        "active");
                    $(this).addClass("active");
                    $(this).parents(".lk-statistic-table").find(".lk-statistic-table-col-3-cripta-value")
                        .removeClass("active");
                    $(this).parents(".lk-statistic-table").find(".lk-statistic-table-col-3-usa-value").addClass(
                        "active");
                });
            }

            var ss = document.getElementsByClassName('usd_coin1').length;
            if (ss > 0) {
                var arr = document.getElementsByClassName('usd_coin1');
                for (zi = 0; zi < arr.length; zi++) {
                    arr[zi].addEventListener("click", function() {
                        usd_coin(this, 1);
                    });
                }
            }

            var ss = document.getElementsByClassName('usd_coin2').length;
            if (ss > 0) {
                var arr = document.getElementsByClassName('usd_coin2');
                for (zi = 0; zi < arr.length; zi++) {
                    arr[zi].addEventListener("click", function() {
                        usd_coin(this, 2);
                    });
                }
            }

        }
    </script>


    <style type="text/css">
        .header__nav ul li.active {
            color: #5967f6;
        }

        .header__nav ul li.active path {
            fill: #5967f6;
        }
        .header__nav ul li a {
            font-weight: 300;
            line-height: 1.362;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            transition: 0.3s all;
        }
    </style>

</head>

<body>
    <picture class="main__figure">
        <source media="(max-width: 589px)" srcset="{{ asset('') }}frontend/img/cabinet/bg/background-main__mob.webp"
            type="image/webp">
        <source media="(max-width: 589px)" srcset="{{ asset('') }}frontend/img/cabinet/bg/background-main__mob.jpg"
            width="391" height="2462">
        <source srcset="{{ asset('') }}frontend/img/cabinet/bg/background-main.webp" type="image/webp">
        <img src="{{ asset('') }}frontend/img/cabinet/bg/background-main.jpg" width="2874" height="1950"
            alt="baclground">
    </picture>

    <header class="header">
        <div class="header__decoration">
            <div class="ellipse-blue">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-header.svg"
                    alt="decoration">
            </div>

            <div class="ellipse-violet">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_violet-header.svg"
                    alt="decoration">
            </div>
        </div>

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

            <a href="/" class="logo" aria-label="{{siteName()}}">
                <img class="icon-svg" src="{{ asset('') }}frontend\img\user_logo.png" alt="logo">
            </a>

            <div class="header__nav">
                <div class="header__nav--close">
                    <img src="{{ asset('') }}frontend/img/cabinet/icons/close-popup.svg" alt="icon"
                        class="icon-svg">
                </div>

                <div class="header__nav--decoration">
                    <div class="gradient__violet">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-violet-header.svg"
                            alt="gradient">
                    </div>
                </div>

                <nav>
                    <ul>
                        <li class="{{menuActive('user.dashboard')}}">
                            <a href="{{route('user.dashboard')}}" >
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/dashboard.svg"
                                    alt="dashboard">

                                <span>Dashboard</span>
                            </a>
                        </li>



                        <li class="{{menuActive('user.addfund')}}">
                            <a href="{{route('user.addfund')}}">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/withdraw.svg"
                                    alt="withdraw">

                                <span>Add Fund</span>
                            </a>
                        </li>

                    <li class="{{menuActive('user.fund_transfer')}}">
                            <a href="{{route('user.fund_transfer')}}">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/tickets.svg"
                                    alt="tickets">

                                <span>Transfer Fund</span>
                            </a>
                        </li> 
                        <li  class="{{menuActive('user.invest')}}">
                            <a href="{{route('user.invest')}}">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/invest.svg"
                                    alt="invest">

                                <span>Invest</span>
                            </a>
                        </li>

                        <li class="{{menuActive('user.Withdraw')}}">
                            <a href="{{route('user.Withdraw')}}">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/withdraw.svg"
                                    alt="withdraw">

                                <span>Withdraw</span>
                            </a>
                        </li>

                       

                        <li class="{{menuActive('user.referral-team')}}">
                            <a href="{{route('user.referral-team')}}">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/affilates.svg"
                                    alt="affilates">

                                <span>Affiliates</span>
                            </a>
                        </li>

                        <li class="{{menuActive('user.roi-bonus')}}">
                            <a href="{{route('user.roi-bonus')}}">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/cabinet/icons/statistics.svg"
                                    alt="statistics">

                                <span>Statistics</span>
                            </a>
                        </li>

                        <!--<li class="{{menuActive('user.GenerateTicket')}}">-->
                        <!--    <a href="{{route('user.GenerateTicket')}}">-->
                        <!--        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/tickets.svg"-->
                        <!--            alt="tickets">-->

                        <!--        <span>Tickets</span>-->
                        <!--    </a>-->
                        <!--</li>-->

                        <li class="{{menuActive('user.profile')}}">
                            <a href="{{route('user.profile')}}">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/settings.svg"
                                    alt="settings">

                                <span>Settings</span>
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

                <div class="header__nav--support">
                    <a href="#" target="_blank">
                        <span>
                            Support
                        </span>
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/support.svg"
                            alt="icon">
                    </a>

                    <a href="#" target="_blank">
                        <span>
                            Chat
                        </span>
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/chat.svg" alt="icon">
                    </a>
                </div>
            </div>

            <div class="open-settings">
                <div class="open-settings__gradient">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/gradient/gradient-open.svg"
                        alt="gradient">
                </div>

                <p>
                    Info
                </p>

                <div class="open-settings--avatar">
                    <img src="{{ asset('') }}frontend/img/none.svg" width="26" height="26"
                        alt="avatar">
                </div>
            </div>
        </div>
    </header>




    <main class="wrapper">



        <style type="text/css">
            .aside__balance--crypto.bep20:before {
                background-color: rgb(68 213 20) !important;
            }
        </style>


        <aside>
            <div class="aside">
                <div class="aside-close">
                    <img src="{{ asset('') }}frontend/img/cabinet/icons/close-popup.svg" alt="icon"
                        class="icon-svg">
                </div>

                <div class="aside__user">
                    <div class="aside__user--info">
                        <div class="aside__user--description">
                            <p>{{{Auth::user()->name}}}</p>
                            <span>{{{Auth::user()->username}}} </span>
                        </div>

                        <div class="aside__user--avatar">
                            <img src="{{ asset('') }}frontend/img/none.svg" width="61" height="61"
                                alt="avatar-user">
                        </div>
                    </div>

                    <a href="{{route('user.profile')}}" class="aside__user--settings" aria-label="settings">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/settings-user.svg"
                            alt="settings-user">
                    </a>
                </div>

                <div class="aside__balance">
                    <div class="aside__balance--total">
                        <div class="aside__balance--header">
                            Total Balance
                        </div>

                        <div class="aside__balance--cash">
                            <p>
                                {{ currency() }}<span class="balance-calculation"> {{ number_format((Auth::user()->available_balance()>0)?Auth::user()->available_balance():0, 2) }} </span>
                            </p>

                            <div class="aside__balance--upload">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/upload.svg"
                                    alt="upload">
                            </div>

                            <!--//##//-->
                            <div class="aside__balance--border">
                            </div>
                            <!--//##//-->


                        </div>

                        <div class="aside__balance--crypto btc">
                            <div class="hide__balance--info">
                                <div class="hide__balance--cost">68 683,46</div>
                            </div>

                            <p>
                             Name

                                <span class="balance-calculation">{{Auth::user()->name}}</span>
                               
                            </p>
                        </div>

                        <div class="aside__balance--crypto usdt">
                            <div class="hide__balance--info">
                                <div class="hide__balance--cost">1,00</div>
                            </div>

                            <p>
                                Your Rank:

                                <span class="balance-calculation"><?php if(Auth::user()->rank==1){echo "Asssociate 1$";}elseif (Auth::user()->rank==2) {echo "Assistant 3$";}elseif (Auth::user()->rank==3) {echo "Co-Ordinator 7$";}elseif (Auth::user()->rank==4) {echo "Manager 20$";}elseif (Auth::user()->rank==5) {echo "Senior Manager 40$";}elseif (Auth::user()->rank==6) {echo "Director 80$";}elseif (Auth::user()->rank==7) {echo "Senior Director 160$";}elseif (Auth::user()->rank==8) {echo "Vice President 320$";}elseif (Auth::user()->rank==9) {echo "President 640$";}else{echo "N/A";}?> </span>

                             
                            </p>
                        </div>


                        <div class="aside__balance--crypto bep20">
                            <div class="hide__balance--info">
                                <div class="hide__balance--cost">1,00</div>
                            </div>

                            <p>
                                Status

                                <span class="balance-calculation">{{Auth::user()->active_status}}</span>

                             
                            </p>
                        </div>



                        <div class="aside__balance--crypto trx">
                            <div class="hide__balance--info">
                                <div class="hide__balance--cost">0,11</div>
                            </div>

                            <p>
                                Your upline

                                <span class="balance-calculation">{{ Auth::user()->sponsor_detail ? Auth::user()->sponsor_detail->username : '0' }}</span>

                               
                            </p>
                        </div>

                        <div class="aside__balance--crypto ltc">
                            <div class="hide__balance--info">
                                <div class="hide__balance--cost"></div>
                            </div>

                            <p>
                               Activation Date

                                <span class="balance-calculation">  @if(Auth::user()->active_status!="Pending")
                                  <?php echo date("D, d M Y", strtotime(Auth::user()->adate))?>
                                   @else
                                    N/A
                                   @endif</span>

                                
                            </p>
                        </div>
                    </div>

                    <div class="aside__balance--small">
                        <div class="aside__balance--invested">
                            <div class="aside__balance--cash">
                                <p>
                                    {{ currency() }} {{ number_format(Auth::user()->investment->sum('amount'), 2) }} </p>
                            </div>

                            <div class="aside__balance--header">
                                Invested
                            </div>
                        </div>

                        <div class="aside__balance--withdrawn">
                            <div class="aside__balance--cash">
                                <p>
                                    {{ currency() }}
                                    {{ number_format(Auth::user()->withdraw(), 2) }} </p>
                            </div>

                            <div class="aside__balance--header">
                                Withdrawn
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header__nav--support">
                    <a href="https://t.me/airocoin" target="_blank">
                        <span>
                            Support
                        </span>

                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/support.svg"
                            alt="icon">
                    </a>

                    <a href="https://t.me/airocoin" target="_blank">
                        <span>
                            Chat
                        </span>

                        <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/chat.svg" alt="icon">
                    </a>
                </div>

                <div class="aside__logout">
                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"  aria-label="logout">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/logout.svg"
                            alt="icon">

                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    {{ csrf_field() }}
                    </form>
                </div>
            </div>

           

            <a href="https://t.me/airocoin" target="_blank" class="help-center">
                <p>
                    Help center
                </p>

                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/decoration/plan-letter.svg"
                    alt="icon">
            </a>
        </aside>

