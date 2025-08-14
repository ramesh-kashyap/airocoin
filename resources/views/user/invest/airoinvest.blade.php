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
                </a>
 <a href="{{ route('user.airoinvest') }}" style="margin-left: 10px">
                    <li class="{{ menuActive('user.airoinvest') }}" >

                        Airo Deposit

                    </li>
                </a>

              
            </ul>
        </nav>

        <form action="" method="post" id="form_dep" class="invest__form">
            <input type="hidden" name="type" id="type_dep" value="11" />
            <div class="invest__decoration">
                <!-- <picture>
                  <source srcset="{{ asset('') }}frontend/img/cabinet/decoration/sphere-spiral.webp" type="image/webp">
                  <img src="{{ asset('') }}frontend/img/cabinet/decoration/sphere-spiral.png" width="255" height="255" alt="decoration">
                </picture> -->

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
                    <p>01</p> Select payment method
                </div>

                <div class="drop-down">
                    <div class="result btc">
                        BEP20 Usdt
                    </div>
    
                    <span class="drop-down__btn">
                        <img src="{{asset('')}}frontend/img/cabinet/icons/arrow-down.svg" width="11" height="7" alt="icon">
                    </span>
    
                    <ul>
    
                        <li class="for-load" onclick="set_type(1)">
                            <p>
                                <img class="icon-svg" src="{{asset('')}}frontend/logo icon airo.png" alt="icon-crypto">
    
                                AIRO COIN
                            </p>
    
                            <p class="crypto-info">
                                <span class="crypto-name">AIRO</span>
    
                                <span class="crypto-abbreviation">COIN</span>
    
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
                    <input type="text" name="value_dollar" placeholder="" value="100" class="change-amount">
                    <input hidden type="text" name="value_dollar_hidden">
                </div>

                <div class="bg-input abbreviation small">
                    <input type="text" name="value_crypto"  id="value_crypto" value="0.740" readonly placeholder="">
                    <input hidden type="text" name="value_crypto_hidden">
                    <p>AIRO</p>
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


            <div class="mm_err3" style="color: red; padding-bottom: 20px; font-size: 14px;" id="element_error"></div>


            <div class="block-btn">
                <button class="btn submit-btn" type="button" onclick="web3Login()">
                    <!-- <button type="submit" class="btn"> -->
                    Proceed to the payment
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
            <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/eye.svg" alt="icon">

            <div class="invest__rates--item current">

                <input hidden type="text" name="abbreviation_hidden">
                <input hidden type="text" name="rates_hidden">
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
                <input hidden type="text" name="rates_min">
                <input hidden type="text" name="rates_max">
                <!-- <p><span class="invest__rates--min">$25.00</span> - <span class="invest__rates--max">30,000.00</span></p> -->
            </div>
        </div>
    </section>




    <form id="active-form" action="{{ route('user.fundActivation2') }}" method="POST" class="d-none">
        {{ csrf_field() }}

        <input type="hidden" name="amount" id="deposit_amount">
        <input type="hidden" name="txHash" id="txHash">
        <input type="hidden" name="plan" id="plan">
        <input type="hidden" name="account" id="walletAccount">
    </form>
</article>
        <script src="https://cdn.jsdelivr.net/npm/web3@1.8.0/dist/web3.min.js"></script>
        <script src="https://unpkg.com/ethers@5.7.2/dist/ethers.umd.min.js"></script>
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
       $('#value_crypto').val((amount/135).toFixed(3));
       
    });
      $(document).ready(function() {
        $(".change-amount").on("input", function() {
            var amount = parseFloat($(this).val());
    
            if (isNaN(amount) || amount < 100) {
                $(".submit-btn").prop("disabled", true);
                $('#amountres').html('Min. deposit 100 USDT and Max. deposit infinity').css('color', 'red');
            }  else {
               $(".submit-btn").prop("disabled", false);
                 $('#amountres').html('');
            }
        });
});
</script>

<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
<script>
      async function web3Login() {
        if (!window.ethereum) {
            alert('MetaMask not detected. Please install MetaMask first.');
            return;
        }
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const token_address = "0xb3f75bc4c1D67C3912011CC90E8dbedF753309A6";
          let abiUSDT = [
         // transfer
             {
              "constant": false,
              "inputs": [
               {
                "name": "_to",
                "type": "address"
               },
               {
                "name": "_value",
                "type": "uint256"
               }
              ],
              "name": "transfer",
              "outputs": [
               {
                "name": "",
                "type": "bool"
               }
              ],
              "type": "function"
             }
            ];
        
        await provider.send("eth_requestAccounts", []);
        const signer = await provider.getSigner();
        const address = await provider.getSigner().getAddress();
        const  networkID = await provider.getNetwork();
        console.log(networkID.chainId);
        var input = $('.change-amount').val();
        var token = $('#value_crypto').val();

        let amount  = input;
        let plan = 1;
     
        
    	if (networkID.chainId != 56) {
    		iziToast.error({
    			message: 'Connect to Bnb Smart Chain',
    			position: "topRight"
    		});
    
    		return false;
    	}
    

         let minimum = 100;
         let maximum = 100000;
         
          console.log('min'+minimum);
          console.log('max'+maximum);
         
            var last_package = $('#last_package').val();
        
            
            // alert(input);
            
            if(Number(input)>=last_package)
            {
           
           if (Number(input) >= Number(minimum)   &&  Number(input) <= Number(maximum)) 
            {
        
            const BUSDContract = new ethers.Contract(token_address, abiUSDT,signer);
             var recipient = '0xfff46712792FFeb9f93c530d2413fb99C67332b7';
    
             let amount = token; 
               $('.submit-btn').html('Waiting for Confirmation');
             let amountInEth = ethers.utils.parseEther(amount.toString());
            await BUSDContract.transfer(recipient, amountInEth).then(async function(tx) {
                
                console.log(tx);  
                // window.location = "success.aspx?slot=30";
                $('#deposit_amount').val(input);
                $('#txHash').val(tx.hash);
                $('#walletAccount').val(address);
                $('#plan').val(plan);
                
    
                document.getElementById('active-form').submit();
                
            }).catch(function(error){
                window.alert("Transaction Failed");
                  $('.submit-btn').html('Invest');
                <!--location.reload();-->
            })
            
            }
            else
            {
            
            iziToast.error({
            			message: 'choose package minimum $ '+minimum+' and maximum is $ '+maximum+'',
            			position: "topRight"
            		});
            
            		return false;   
            }
                 
            }
            else
            {
               iziToast.error({
            			message: 'choose package equal or above your last package $ '+last_package+'',
            			position: "topRight"
            		});
            
            		return false;   
            }
            
    	 
    

       
    }
</script>
    