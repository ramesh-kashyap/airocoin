<article>





    <section class="crypto">
        <div class="crypto__header">
            My Balances
        </div>

        <div class="crypto__content">
            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Account balance
                    </div>

                    <div class="crypto__item--description">
                        {{ currency() }}
                        {{ number_format(Auth::user()->available_balance() > 0 ? Auth::user()->available_balance() : 0, 2) }}
                    </div>
                </div>
            </div>

            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Roi Bonus
                    </div>

                    <div class="crypto__item--description">
                        {{ currency() }}
                        {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}
                    </div>

                </div>
            </div>

            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Level Bonus
                    </div>

                    <div class="crypto__item--description">
                        {{ currency() }}
                        {{ number_format(Auth::user()->sponsorship_bonus->sum('comm'), 2) }}
                    </div>
                </div>
            </div>

            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Direct Bonus
                    </div>

                    <div class="crypto__item--description">
                        {{ currency() }}
                        {{ number_format(Auth::user()->matchingBonus->sum('comm'), 2) }}
                    </div>
                </div>
            </div>


        </div>

        <br>
        <div class="crypto__content">
            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Total Team
                    </div>

                    <div class="crypto__item--description">
                        
                    {{ $total_team }}                    </div>
                </div>
            </div>



            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        My Package
                    </div>

                    <div class="crypto__item--description">
                        {{ currency() }}
                        {{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                    </div>
                </div>
            </div>

            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Withdrawals
                    </div>

                    <div class="crypto__item--description">
                        {{ currency() }}{{ number_format(Auth::user()->withdraw(), 2) }}
                    </div>
                </div>
            </div>

            <div class="crypto__item">
                <div class="crypto__item--decoration">
                    <img src="{{ asset('') }}frontend/img//cabinet/bg/gradient-crypto-item.png" width="233"
                        height="92" alt="gradient">
                </div>

                <div class="crypto__item--icon">
                    <img src="{{ asset('') }}frontend/img/cabinet/crypto/usdt.svg" width="32" height="32"
                        alt="icon">
                </div>

                <div class="crypto__item--info">
                    <div class="crypto__item--header">
                        Activation Wallet
                    </div>

                    <div class="crypto__item--description">
                    {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }}
                    </div>

                </div>
            </div>

         
         
                
        </div>
    </section>
    <article class="double">
        <section class="investments">
            <div class="investments__header">
                <img src="{{ asset('') }}frontend/img//cabinet/decoration/ellipse-color.png" width="24"
                    height="24" alt="decoration">

                Active investments

                <a class="btn-deposit" href="{{ route('user.invest') }}">
                    <p>
                       Booster Timer : <span id="countdown"></span>
                    </p>
                </a>
            </div>






            <div class="global__item">
                <div class="global__item--decoration">
                    <div class="ellipse-violet__affilate">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img//cabinet/ellipse/ellipse_violet-affilate.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-violet__affilate second">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img//cabinet/ellipse/ellipse_violet-affilate.svg"
                            alt="decoration">
                    </div>
                </div>

                <div class="investments__description">
                    <div class="investments__added">
                        <div class="investments__item">
                            <p>
                               Status

                            </p>

                            <div class="global__small--text">
                                <p>
                                  {{Auth::user()->active_status}}
                                  
                            </div>
                        </div>
                    </div>

                    <div class="investments__deposit">
                        <div class="investments__item">
                            <p>
                                {{ currency() }}
                                {{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                            </p>

                            <div class="global__small--text">
                                <span>
                                    Active deposit
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="investments__next">
                        <div class="investments__item">
                            <p>
                                {{ currency() }} {{ number_format($remaining_amount > 0 ? $remaining_amount : 0, 2) }}
                            </p>

                            <div class="global__small--text">
                                <p> 2X Remaining<span> next - </span></p>

                                <div class="timer-count">
                                    <div class="timer__items" style="display: flex;">
                                        <div class="timer__item timer__days" style="display:none;" data-title="">0
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                    
                        <div class="investments__next">
                        <div class="investments__item">
                            <p>
                                {{ currency() }} {{ number_format($x5Deposit > 0 ? $x5Deposit : 0, 2) }}
                            </p>

                            <div class="global__small--text">
                                <p> 3X Remaining<span> next - </span></p>

                                <div class="timer-count">
                                    <div class="timer__items" style="display: flex;">
                                        <div class="timer__item timer__days" style="display:none;" data-title="">0
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                    
                </div>

               


        </section>

        <style>
            .table__line {
                display: flex;
                justify-content: flex-start;
                align-content: center;
                align-items: center;
                position: relative;
                padding: 3px 5% 0 4.3%;
                margin: 0 0 2px;
                width: 100%;
                height: 47px;
                border-radius: 5px;
                line-height: 1.84615;
                font-size: var(--13-fonts);
                background-color: var(--cabinet_table_line);
            }

            .table__line--method {
                width: 22%;
            }

            .table__line>* {
                display: flex;
                justify-content: flex-start;
                align-content: center;
                align-items: center;
                flex-shrink: 0;
            }

            .table__line--status .btn {
                background-color: #5967F6 !important;
            }

            .table__line--status .btn {
                padding: 3px 15px;
                font-weight: 500;
                border-radius: 10px;
                line-height: 1.66667;
                font-size: var(--12-fonts);
                border: 1px solid var(--cabinet_all_bg);
                background-color: var(--cabinet_table_complete);
            }

            .table__line--method {
                width: 22%;
            }
            .table__line
            {
                margin-top: 10px;
            }
        </style>
       
    </article>
</article>

@if(Auth::user()->active_status!="Pending")
<?php 
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

 $date= Auth::user()->adate;
   $targetDate =  date('Y-m-d H:i:s', strtotime($date. ' + 15 days'));


?>
<script>
function startCountdown(targetDate) {
    function updateCountdown() {
        const now = new Date().getTime();
        const targetTime = new Date(targetDate).getTime();
        const difference = targetTime - now;

        if (difference <= 0) {
            clearInterval(interval);
            document.getElementById("countdown").innerHTML = "Countdown Over!";
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML = 
            `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }

    updateCountdown(); // Initial call to avoid 1-sec delay
    const interval = setInterval(updateCountdown, 1000);
}

// Set countdown for the stored target date
const futureDate = "<?=$targetDate?>"; 
startCountdown(futureDate);
</script>

@endif

