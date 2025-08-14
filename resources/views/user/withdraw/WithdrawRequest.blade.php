

        <article>

<style>
    @media (max-width: 767px) {
    .invest.withdraw .bg-input.small {
        max-width: 147px;
    }
}
</style>


            <form action="{{ route('user.Withdraw-Request') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="ec" id="method" value="11" />

                <section class="invest withdraw">
                    <div class="invest__decoration">
                        <picture>
                            <source srcset="{{ asset('') }}frontend/img/cabinet/decoration/figure.webp" type="image/webp">
                            <img src="{{ asset('') }}frontend/img/cabinet/decoration/figure.png" width="277" height="276"
                                alt="decoration">
                        </picture>
                    </div>

                    <h1>
                        Withdrawal
                    </h1>


                    <div class="invest__form">
                        <div class="invest__decoration">
                            <div class="ellipse-blue__big">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest-big.svg"
                                    alt="decoration">
                            </div>

                            <div class="ellipse-blue__small">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest-small.svg"
                                    alt="decoration">
                            </div>

                            <div class="ellipse-pink__big">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-invest-big.svg"
                                    alt="decoration">
                            </div>
                        </div>

                        <div class="invest__line">
                            <div class="invest__title">
                                <p><span>01</span></p> <span> payment method</span>
                            </div>
                                <!--<input type="hidden" name="paymentMode"  value="USDT.BEP20" id="">-->
                                  <div class="drop-down">
                                    <div class="result btc">
                                      <select name="paymentMode" id="paymentMode"> 
                                       <!--<option value="USDT">USDT BEP20</option>-->
                                       <option value="AIRO">AIRO TOKEN</option>
                                       <option value="BDC">BDC DANA</option>
                                       </select>
                                </div>

                               
                                <ul>
                               

                                    <li class="for-load"  onclick="set_method(31)">
                                       
                                       <select  name="paymentMode2"> 
                                       <!--<option value="USDT">USDT BEP20</option>-->
                                       <option value="BDC">BDC DANA</option>
                                       <option value="ARC">ARC TOKEN</option>
                                       </select>
                                        <p class="crypto-info">
                                            <span class="crypto-name">BEP20</span>

                                            <span class="crypto-abbreviation">COIN</span>

                                            <span class="crypto-rates">1.00</span>

                                            <span class="crypto-min">15</span>

                                            <span class="crypto-max">30000</span>

                                            <span class="crypto-time-send">
                                                5H
                                            </span>

                                            <span class="crypto-address">
                                            </span>
                                        </p>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <div class="invest__line">
                            <div class="invest__title">
                                <p><span>02</span></p> <span>Input the amount</span>
                            </div>

                            <div class="bg-input small">
                                <p>$</p>
                                <input type="text" name="amount" class="change-amount" placeholder="5">
                                <input hidden type="text" name="value_dollar_hidden">
                            </div>

                            <div class="bg-input abbreviation small">
                                <input type="text" name="value_crypto1" id="value_crypto1" placeholder="0"readonly>
                                <input hidden type="text" name="value_crypto_hidden" id="value_crypto_hidden">
                                <p id="selected_payment">AIRO</p>
                            </div>
                        </div>

                        <div class="invest__line description">
                            <div class="invest__title">
                                <p><span>03</span></p> <span>Transaction Password</span>
                            </div>

                            <div class="pay__address">
                                <div class="pay__address--header">
                                Transaction Password
                                </div>

                                <div class="pay__address--line">
                                    <div class="pay__address--input">
                                       <span><input type="text"placeholder="Transaction Password" name="transaction_password" style="border: 1px solid;
                                        width: 216px;
                                        height: 43px;
                                        border-radius: 10px;
                                        padding: 10px;"></span> 

                                       
                                    </div>
                                </div>
                            </div>

                            <div class="mm_err3" style="color: red; padding-bottom: 0px; font-size: 14px;"
                                id="element_error"></div>

                            <div class="fa-code">


                                <button class="btn submit-btn" type="submit" >
                                    <p>
                                    Submit
                                    </p>
                                </button>
                            </div>
                        </div>
                    </div>



                    <div class="invest__rates">
                        <div class="invest__rates--timer">
                            <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/timer.svg" alt="icon">

                            <p>
                                Processing time
                                <span>up to 24 hours</span>
                            </p>
                        </div>

                        <div class="invest__rates--timer">
                            <!--<img class="icon-svg" id="bdcLogo" src="" width="20" height="20" alt="BDC Logo" alt="icon" style="border-radius: 70%; margin: 0px 0px 0px -10px;" >-->

                            <p>BDC Live Price
                                <span id="bdcPrice">0.00</span>
                            </p>
                        </div>
                        

                        <div class="invest__rates--item current1">

                            <span> Available  :  {{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</span>
                           
                        </div>

                        <div class="invest__rates--item min-max">
                           
                            <div class="invest__rates--line">
                                <span>Min. withdrawal</span>
                                <p class="invest__rates--min"></p>
                                <div class="invest__rates--min-">
                                    <p>$5</p><span></span>
                                </div>
                            </div>
                            
                            
                          

                            <div class="invest__rates--line">
                                <span>Max. withdrawal</span>
                                <p class="invest__rates--max"></p>
                                <div class="invest__rates--max-">
                                    <p>$1000</p><span></span>
                                </div>
                            </div>
                            <input hidden type="text" name="rates_min">
                            <input hidden type="text" name="rates_max">
                            <!-- <p><span class="invest__rates--min">$10.00</span> - <span class="invest__rates--max">30,000.00</span></p> -->
                        </div>
                    </div>
                </section>

            </form>






<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    const tokenPrice = 135; // 1 AIRO = 135 USDT

function calculateCrypto() {
    const amount = parseFloat($('.change-amount').val());
    const coin = $('#value_crypto_hidden').val();

    if (isNaN(amount)) {
        $('#value_crypto1').val('');
        return;
    }

    if (amount < 5) {
        $(".submit-btn").prop("disabled", true);
        $('#element_error').html('Minimum withdrawal is $5').css('color', 'red');
        $('#value_crypto1').val('');
    } else {
        $(".submit-btn").prop("disabled", false);
        $('#element_error').html('');

        let cryptoValue;
        if (coin === "AIRO") {
            cryptoValue = (amount / 135).toFixed(6); // AIRO is fixed
        } else if (coin === "BDC") {
            cryptoValue = (amount / bdcLiveRate).toFixed(6); // Use fetched live BDC rate
        } else {
            cryptoValue = amount.toFixed(2);
        }

        $('#value_crypto1').val(cryptoValue);
    }
}



    // On amount input
$('.change-amount').on('keyup', function () {
    calculateCrypto();
});

// On coin selection
$('#paymentMode').on('change', function () {
    const selectedCoin = $(this).val();
    $('#value_crypto_hidden').val(selectedCoin);
    $('#selected_payment').text(selectedCoin);
    calculateCrypto();
});



   $(document).ready(function () {
    $('#paymentMode').val('AIRO');
    $('#value_crypto_hidden').val('AIRO');
    $('#selected_payment').text('AIRO');
    calculateCrypto();
});




    $('.first-code-send').click(function(e) {
           var ths = $(this);
           
            $(ths).html('Waiting')
           // alert(sponsor); 
           $.ajax({
               type: "POST"
               , url: "{{ route('user.send_code') }}"
               , data: {
                   "purpose": "Withdrawal request"
                   , "_token": "{{ csrf_token() }}"
               , }
               , success: function(response) {
                   // alert(response);      
                   if (response) {
                       // alert("hh");
                    
                       iziToast.success({
                       message: 'Email send Successfully',
                       position: "topRight"
                   });
                   $(ths).html('Send')
                   } else {
                       // alert("hi");
                       iziToast.error({
                       message: 'Error!',
           
            position: "topRight"
                   });
                   }
               }
           });
       });
       


</script>
        </article>




    </main>


    <script type="text/javascript">
        function set_method(val) {
            document.getElementById('method').value = val;
        }
    </script>

    <script type="text/javascript">
        ajax2.post({
            "form": document.getElementById('form_with'),
            "url": "/withdraw",
            "el_err": 'element_error'
        });
    </script>

<script>
let bdcLiveRate = 0.0079; // default fallback

async function fetchBDCData() {
    try {
        const response = await fetch('https://api.geckoterminal.com/api/v2/simple/networks/solana/token_price/CqMybyWjNGn2FGt1JY5HDUGMiCpQjAsyj44csfMUpump', {
            headers: {
                'Accept': 'application/json;version=20230302'
            }
        });
        const data = await response.json();
        const price = data.data.attributes.token_prices["CqMybyWjNGn2FGt1JY5HDUGMiCpQjAsyj44csfMUpump"];
        bdcLiveRate = parseFloat(price);
        document.getElementById('bdcPrice').innerText = `$${bdcLiveRate.toFixed(5)}`;
    } catch (err) {
        console.error("Failed to fetch BDC price:", err);
    }
}

// Initial fetch and update every 10 seconds
fetchBDCData();
setInterval(fetchBDCData, 10000);
</script>

