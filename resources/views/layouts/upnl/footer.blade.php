
</main>



<script type="text/javascript">
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            total: t,
            days: days,
            hours: hours,
            minutes: minutes,
            seconds: seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector(".days");
        var hoursSpan = clock.querySelector(".hours");
        var minutesSpan = clock.querySelector(".minutes");
        var secondsSpan = clock.querySelector(".seconds");

        function updateClock() {
            var t = getTimeRemaining(endtime);

            if (t.total <= 0) {
                //document.getElementById(id).className = "hidden";
                document.getElementById(id).innerHTML = 'Processing';
                //document.getElementById("deadline-message").className = "visible";
                clearInterval(timeinterval);
                return true;
            }

            //daysSpan.innerHTML = t.days+'d ';
            if (t.days > 0) {
                var add_h = Math.floor(t.days * 24);
                t.hours += add_h;
            }
            hoursSpan.innerHTML = ("0" + t.hours).slice(-2) + ':';
            minutesSpan.innerHTML = ("0" + t.minutes).slice(-2) + ':';
            secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }


    var arr = document.getElementsByClassName('timer');
    for (z = 0; z < arr.length; z++) {
        initializeClock(arr[z].id, arr[z].getAttribute('timer'));
    }
</script>


<footer class="footer">
    <div class="wrapper">
        <div class="footer__item">
            <div class="footer__item--icon">
                <img src="{{ asset('') }}frontend/img/icons/sing-up.svg" width="32" height="31"
                    alt="icon">
            </div>

            <div class="footer__item--info">
                <div class="footer__item--header">
                    Sign Up
                </div>

                <div class="footer__item--description">
                    To register, provide your password, working email address, and username. The enrollment
                    procedure is simple and fast.
                </div>
            </div>
        </div>

        <div class="footer__item">
            <div class="footer__item--icon">
                <img src="{{ asset('') }}frontend/img/icons/deposit.svg" width="32" height="31"
                    alt="icon">
            </div>

            <div class="footer__item--info">
                <div class="footer__item--header">
                    Make Deposit
                </div>

                <div class="footer__item--description">
                    To begin generating passive income, create a new deposit. You may choose the payment option and
                    investment amount that you want to use.
                </div>
            </div>
        </div>

        <div class="footer__item">
            <div class="footer__item--icon">
                <img src="{{ asset('') }}frontend/img/icons/income.svg" width="32" height="31"
                    alt="icon">
            </div>

            <div class="footer__item--info">
                <div class="footer__item--header">
                    Earn Daily Income
                </div>

                <div class="footer__item--description">
                    Get daily passive income by making the platform return the funds you have deposited. It is
                    possible to track your earnings in real-time.
                </div>
            </div>
        </div>

        <div class="footer__item">
            <div class="footer__item--icon">
                <img src="{{ asset('') }}frontend/img/icons/withdraw.svg" width="32" height="31"
                    alt="icon">
            </div>

            <div class="footer__item--info">
                <div class="footer__item--header">
                    Withdraw Funds
                </div>

                <div class="footer__item--description">
                    At any time, withdraw your earnings to your personal wallet. You may also reinvest the funds in
                    order to expand your deposit portfolio.
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <p>
                © Copyright <a href="#"
                    style="margin: 0px;" target="_blank">{{ siteName() }}</a> 2024
            </p>

            <a href="{{route('term-candition')}}">
                Privacy Policy
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
    <filter id="blur_63">
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
@include('partials.notify')
<!-- scripts__css -->
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/raleway.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}frontend/fonts/inter.css">
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


<script type="text/javascript" src="{{ asset('') }}frontend/js/simple-scrollbar.js"></script>
<script type="text/javascript" src="{{ asset('') }}frontend/js/aos.js"></script>
<script type="text/javascript" src="{{ asset('') }}frontend/js/number_mask.js"></script>
<script type="text/javascript" src="{{ asset('') }}frontend/js/main.js?v=1.120"></script>
<!-- end__scripts__css -->


</body>

</html>
