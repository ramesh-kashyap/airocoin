<article>


    <style>
        .invest__rates--min,
        .invest__rates--max {
            display: block;
        }
        @media (max-width: 767px) {
    .invest h1 {
        position: absolute;
        padding: 10px 0 0 3%;
        margin-top: 67px;
    }
}
    </style>

    <section class="invest">
        <div class="invest__decoration">
            <picture>
                <source srcset="{{ asset('') }}frontend/img/cabinet/decoration/sphere-spiral.webp" type="image/webp">
                <img src="{{ asset('') }}frontend/img/cabinet/decoration/sphere-spiral.png" width="255"
                    height="255" alt="decoration">
            </picture>

            <!-- <div class="ellipse-blue">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest.svg" alt="decoration">
              </div>

              <div class="ellipse-blue__small">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest-small.svg" alt="decoration">
              </div>

              <div class="ellipse-pink">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-invest.svg" alt="decoration">
              </div> -->
        </div>

        <h1>
            Add new investment
            <br> <br>
        </h1>

       
        <nav class="table__nav">

           
            <ul>

              
                <a href="{{ route('user.invest') }}" >
                    <li class="{{ menuActive('user.invest') }}" >

                      Invest 

                    </li>
                </a>

                <a href="{{ route('user.autoinvest') }}" style="margin-left: 10px">
                    <li class="{{ menuActive('user.autoinvest') }}" >

                        Dapp Deposit

                    </li>
                </a>  <a href="{{ route('user.airoinvest') }}" style="margin-left: 10px">
                    <li class="{{ menuActive('user.airoinvest') }}" >

                        Airo Deposit

                    </li>
                </a>

              
            </ul>
        </nav>


            <form id="form_dep" class="invest__form" action="{{ route('user.fundActivation') }}" method="POST" >
        {{ csrf_field() }}
            <div class="invest__decoration">
              

                <div class="ellipse-blue">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest.svg"
                        alt="decoration">
                </div>

                <div class="ellipse-blue__small">
                    <img class="icon-svg"
                        src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest-small.svg"
                        alt="decoration">
                </div>

                <div class="ellipse-pink">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-invest.svg"
                        alt="decoration">
                </div>
            </div>

            <div class="invest__line">
                <div class="invest__title">
                    <p>01</p> Account balance
                </div>

                <div class="drop-down">
                    <div class="result btc">
                        BEP20 Usdt
                    </div>
    
                    
    
                    <ul>
    
                        <li class="for-load" onclick="set_type(1)">
                            <p>
    
                                {{currency()}} {{number_format(Auth::user()->FundBalance(),2)}}
                            </p>
    
                            <p class="crypto-info">
                                <span class="crypto-name">BEP20</span>
    
                                <span class="crypto-abbreviation">Usdt</span>
    
                                <span class="crypto-rates">1</span>
    
                                <span class="crypto-min">50</span>
    
                                <span class="crypto-max">5000</span>
    
                                <span class="crypto-time-send">
                                    24H
                                </span>
    
                                <span class="crypto-address">
                                    usdt ----
                                </span>
                            </p>
                        </li>
    
                    </ul>
                </div>

            </div>

          


            </div>


            <div class="invest__line">
                <div class="invest__title">
                    <p>02</p> Input the amount
                </div>

                <div class="bg-input small">
                    <p>$</p>
                    <input type="text" name="amount" placeholder="" value="100" class="change-amount">
                    <input hidden type="text" name="value_dollar_hidden">
                </div>

                <div class="bg-input abbreviation small">
                    <input type="text" name="paymentMode"  id="value_crypto" value="100"  placeholder="">
                    <input hidden type="text" name="value_crypto_hidden">
                    <p>USDT</p>
                </div>
                <span id="amountres"></span>
            </div>

            <div class="invest__line description">
                <div class="invest__title">
                    <p>03</p> Calculate your profit
                </div>

                <div class="bg-input small">
                    <label>
                        <p>$</p>
                        <input type="text" name="profit_daily" id="profit_daily"  value="0.25" placeholder="0">
                        <span>Daily</span>
                    </label>
                </div>

                <div class="bg-input small">
                    <label>
                        <p>$</p>
                        <input type="text" name="profit_total" placeholder="0" value="200.00" id="profit_total">
                        <span>Total</span>
                    </label>
                </div>




                
            </div>







            <div class="invest__line description">
                
                <div class="invest__title">
                    <p>04</p> User ID                </div>

                <div class="bg-input small">
                    <label>
                       
                        <input type="text" name="user_id"  value="" placeholder="User ID">
                    </label>
                </div>
                
                
                

                <div class="bg-input small">
                    <label>
                        <input type="text" name="transaction_password" placeholder="Transaction Password" >
                    </label>
                </div>
            </div>


            <div class="mm_err3" style="color: red; padding-bottom: 20px; font-size: 14px;" id="element_error"></div>


            <div class="block-btn">
                <button class="btn submit-btn" type="submit" >
                    proceed submit
                    <p>
                        <img src="{{ asset('') }}frontend/img/cabinet/icons/arrow-down.svg" width="11"
                            height="7" alt="icon">
                    </p>
                    <!-- </button> -->
                </button>
            </div>
        </form>

            <input type="hidden" id="last_package" value="{{$last_package}}">
            <div class="invest__rates">
            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73 73" fill="none" class="icon-svg edit_svg">
                <g filter="url(#filter0_d_986_8058)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M45.6663 36.4487C45.6663 41.6867 41.4183 45.9317 36.1803 45.9317C30.9423 45.9317 26.6973 41.6867 26.6973 36.4487C26.6973 31.2077 30.9423 26.9627 36.1803 26.9627C41.4183 26.9627 45.6663 31.2077 45.6663 36.4487Z" stroke="#5967F6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.1756 58.3541C47.5996 58.3541 58.0486 50.1401 63.9316 36.4481C58.0486 22.7561 47.5996 14.5421 36.1756 14.5421H36.1876C24.7636 14.5421 14.3146 22.7561 8.43164 36.4481C14.3146 50.1401 24.7636 58.3541 36.1876 58.3541H36.1756Z" stroke="#5967F6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
                <defs>
                <filter id="filter0_d_986_8058" x="-4.81836" y="-4.71057" width="82" height="82" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                <feOffset></feOffset>
                <feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
                <feColorMatrix type="matrix" values="0 0 0 0 0.34902 0 0 0 0 0.403922 0 0 0 0 0.964706 0 0 0 1 0"></feColorMatrix>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_986_8058"></feBlend>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_986_8058" result="shape"></feBlend>
                </filter>
                </defs>
                </svg>

            <div class="invest__rates--item current">

                <input hidden="" type="text" name="abbreviation_hidden">
                <input hidden="" type="text" name="rates_hidden">
            </div>

            <div class="invest__rates--item min-max">
                
                    <div class="invest__rates--line">
                  
                     <span>Min. deposit</span>
                    <p class="invest__rates--min">100.00 Usdt</p>
                    <div class="invest__rates--min-coin">
                        <p></p><span></span>
                    </div>
                </div>

                <div class="invest__rates--line">
                    <span>Max. deposit</span>
                    <p class="invest__rates--max">Infinity</p>
                    <div class="invest__rates--max-coin">
                        <p></p><span></span>
                    </div>
                </div>
                <input hidden="" type="text" name="rates_min">
                <input hidden="" type="text" name="rates_max">
                <!-- <p><span class="invest__rates--min">$25.00</span> - <span class="invest__rates--max">30,000.00</span></p> -->
            </div>
        </div>
    
    </section>




  

        <input type="hidden" name="amount" id="deposit_amount">
        <input type="hidden" name="txHash" id="txHash">
        <input type="hidden" name="plan" id="plan">
        <input type="hidden" name="account" id="walletAccount">
    </form>
</article>

<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    $('.change-amount').keyup(function(e) {
        var ths = $(this);
        var amount = $(this).val();

        if (isNaN(amount) || amount <= 0) {
        // Handle invalid or zero amount
        $('#profit_daily').val('0.00');
        $('#profit_total').val('0.00');
        $('#value_crypto').val('0.00');
        return;
    }

    let percentage = 0;

    if (amount >= 100 && amount <= 999) {
        percentage = 0.25; 
    } else if (amount >= 1000 && amount <= 4999) {
        percentage = 0.35;
    } else if (amount >= 5000) {
        percentage = 0.50; 
    } 

       $('#profit_daily').val(((amount * percentage / 100)).toFixed(2));
       $('#profit_total').val((amount * 200/ 100).toFixed(2));
       $('#value_crypto').val(amount);
       
    });
      $(document).ready(function() {
        $(".change-amount").on("input", function() {
            var amount = parseFloat($(this).val());
    
            if (isNaN(amount) || amount < 100) {
                $(".submit-btn").prop("disabled", true);
                $('#amountres').html('Min. deposit 100 USDT and Max. deposit infinity').css('color', 'red');
            } else if (amount % 100 === 0) {
                $(".submit-btn").prop("disabled", false);
                $('#amountres').html('');
            } else {
                $(".submit-btn").prop("disabled", true);
                $('#amountres').html('Amount must be a multiple of 100 USDT.').css('color', 'red');
            }
        });
});
</script>

<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>

    