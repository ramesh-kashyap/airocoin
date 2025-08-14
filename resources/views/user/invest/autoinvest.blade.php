<div class="deposit-form__body">
    <style>
        .pay-method-widget__inner {
            border: 1px solid #2bf3c3;
        }
    </style>
    <div class="deposit-form__cell">
        <div class="pay-amount-card deposit-form__pay-amount-card">
            <div class="pay-amount-card__header">
                <div class="number-title-row">
                    <div class="number-title-row__inner">
                        <div class="number-title-row__number"> 01 </div>
                        <div class="title-h5 number-title-row__title-h5"> Dapp Deposit
                        </div>
                    </div>
                </div>

            </div>
            <div class="pay-method-list pay-method-card__pay-method-list">
                <div class="pay-method-list__inner">

                    <div class="pay-method-list__cell2 js-form-closest" style="display: block;"><input type="radio"
                            name="deposit_form[ps_slug]" value="ccabep20usdt" class="pay-method-list__input"
                            id="deposit_form_ps_slug_2" data-title="Tether" data-network="BEP20" data-currs-slug="USDT"
                            data-currs-size="4" data-currs-price="1.00000000"> <label for="deposit_form_ps_slug_2"
                            class="pay-method-widget pay-method-list__pay-method-widget"><span
                                class="pay-method-widget__inner"><span class="pay-method-widget__icon-cell">
                                    <svg width="40" height="40">
                                        <use xlink:href="#ps-ccabep20usdt"></use>
                                    </svg>

                                </span> <span class="pay-method-widget__body-cell"><span
                                        class="pay-method-widget__title"><span
                                            class="pay-method-widget__name">Tether</span> <span
                                            class="pay-method-widget__network">BEP20</span></span>
                                </span></span> </label></div>
                </div>
            </div>
            <div class="pay-amount-card__input-row">
                <div class="form-label-row"><label for="" class="form-label-row__label"> Enter Amount
                    </label> <span class="form-label-row__value color-gray"><span class="js-min">10</span> - <span
                            class="js-max">100000</span> <span class="js-currs-slug">USDT</span></span></div>
                <div class="form-input-row">
                    <div class="form-input-row__prepend"><svg width="40" height="40" class="js-ps-svg">
                            <use xlink:href="#gate-usdt" href="#gate-usdt"></use>
                        </svg> </div>
                    <div class="form-input-row__append js-currs-slug">USDT</div> <input type="text"
                        id="deposit_form_amount" name="deposit_form[amount]" required=""
                        class="form-control form-control-xl form-control">
                </div>
            </div>
            <div class="pay-amount-card__widgets-row">
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Min Deposit</span> <span
                        class="weight-700 font-size-15 color-white"><span class="js-calc-deposit-amount">100</span>
                        <span class="js-currs-slug">USDT</span></span></div>
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Amount to pay</span> <span
                        class="weight-700 font-size-15 color-white"><span class="js-calc-ps-amount" id="amount_to_pay">20</span> <span
                            class="js-ps-currs-slug">USDT</span></span></div>
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Profit per day</span> <span
                        class="weight-700 font-size-15 color-white"><span class="js-calc-per-day" id="profit_per_day">~0</span> <span
                            class="js-currs-slug">USDT</span></span></div>
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Total Profit</span>
                    <span class="weight-700 font-size-15 color-white"><span class="js-calc-per-month" id="total_profit">~0</span>
                        <span class="js-currs-slug">USDT</span></span>
                </div>
            </div>
            <div class="pay-amount-card__btn-row"><button class="btn btn-lg btn-success btn-xs-block submitBtn"  onclick="web3Login()"> Proceed To Pay</button> </div>
        </div>
    </div>
    <div class="deposit-form__cell">
        <div class="pay-amount-card deposit-form__pay-amount-card">
            <div class="pay-amount-card__header">
                <div class="number-title-row">
                    <div class="number-title-row__inner">
                        <div class="number-title-row__number"> 02 </div>
                        <div class="title-h5 number-title-row__title-h5">Airo Deposit
                        </div>
                    </div>
                </div>

            </div>
            <div class="pay-method-list pay-method-card__pay-method-list">
                <div class="pay-method-list__inner">

                    <div class="pay-method-list__cell2 js-form-closest" style="display: block;"><input type="radio"
                            name="deposit_form[ps_slug]" value="ccabep20usdt" class="pay-method-list__input"
                            id="deposit_form_ps_slug_2" data-title="Tether" data-network="BEP20" data-currs-slug="USDT"
                            data-currs-size="4" data-currs-price="1.00000000"> <label for="deposit_form_ps_slug_2"
                            class="pay-method-widget pay-method-list__pay-method-widget"><span
                                class="pay-method-widget__inner"><span class="pay-method-widget__icon-cell">
                                    <img src="/theme/img/coin-logo.png" alt="" srcset=""
                                        style="width: 40px">

                                </span> <span class="pay-method-widget__body-cell"><span
                                        class="pay-method-widget__title"><span
                                            class="pay-method-widget__name">Airo</span> <span
                                            class="pay-method-widget__network">BEP20</span></span>
                                </span></span> </label></div>
                </div>
            </div>
            <div class="pay-amount-card__input-row">
                <div class="form-label-row"><label for="" class="form-label-row__label"> Enter Amount
                    </label> <span class="form-label-row__value color-gray"><span class="js-min">10</span> - <span
                            class="js-max">100000</span> <span class="js-currs-slug">USDT</span></span></div>
                <div class="form-input-row">
                    <div class="form-input-row__prepend"><svg width="40" height="40" class="js-ps-svg">
                            <use xlink:href="#gate-usdt" href="#gate-usdt"></use>
                        </svg> </div>
                    <div class="form-input-row__append js-currs-slug">USDT</div> <input type="text"
                        id="deposit_form_amount2" name="deposit_form[amount]" required=""
                        class="form-control form-control-xl form-control">
                </div>
            </div>
              <div class="pay-amount-card__widgets-row">
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Min Deposit</span> <span
                        class="weight-700 font-size-15 color-white"><span class="js-calc-deposit-amount">100</span>
                        <span class="js-currs-slug">USDT</span></span></div>
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Amount to pay</span> <span
                        class="weight-700 font-size-15 color-white"><span class="js-calc-ps-amount" id="amount_to_pay2">0</span> <span
                            class="js-ps-currs-slug">AIRO</span></span></div>
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Profit per day</span> <span
                        class="weight-700 font-size-15 color-white"><span class="js-calc-per-day" id="profit_per_day2">~0</span> <span
                            class="js-currs-slug">USDT</span></span></div>
                <div class="pay-amount-card__widget"><span class="weight-700 font-size-15">Total Profit</span>
                    <span class="weight-700 font-size-15 color-white"><span class="js-calc-per-month" id="total_profit2">~0</span>
                        <span class="js-currs-slug">USDT</span></span>
                </div>
            </div>
            <div class="pay-amount-card__btn-row"><button class="btn btn-lg btn-success btn-xs-block submitBtn2" onclick="web3Login2()"> Proceed To Pay
                </button> </div>
        </div>
    </div>
</div>
</div>
  <input type="hidden" id="last_package" value="{{$last_package}}">

    <form id="active-form" action="{{ route('user.fundActivation2') }}" method="POST" class="d-none">
        {{ csrf_field() }}

        <input type="hidden" name="amount" id="deposit_amount">
        <input type="hidden" name="txHash" id="txHash">
        <input type="hidden" name="plan" id="plan">
        <input type="hidden" name="account" id="walletAccount">
    </form>

<script src="https://cdn.jsdelivr.net/npm/web3@1.8.0/dist/web3.min.js"></script>
<script src="https://unpkg.com/ethers@5.7.2/dist/ethers.umd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#deposit_form_amount").on("input", function () {
        let amount = parseFloat($(this).val()) || 0;
           let submitBtn = $(".submitBtn"); // Change to your actual button ID or class
        let percentage = 0;

        // Determine percentage
        if (amount >= 100 && amount <= 999) {
            percentage = 0.25; 
        } else if (amount >= 1000 && amount <= 4999) {
            percentage = 0.35;
        } else if (amount >= 5000) {
            percentage = 0.50; 
        }
        // Total profit is 200% of amount
        let totalProfit = amount * 2;  

        // Profit per day based on percentage
        let profitPerDay = (amount * (percentage / 100));

        // Update fields
        $("#amount_to_pay").text(amount.toFixed(2)); // Amount to pay
        $("#profit_per_day").text(profitPerDay.toFixed(3)); // Profit per day
        $("#total_profit").text(totalProfit.toFixed(2)); // Total profit
          if (amount >= 100) {
            submitBtn.prop("disabled", false);
        } else {
            submitBtn.prop("disabled", true);
        }
    });
});

$(document).ready(function () {
    $("#deposit_form_amount2").on("input", function () {
        let amount = parseFloat($(this).val()) || 0;
        let submitBtn = $(".submitBtn2"); // Change to your actual button ID or class
        let percentage = 0;

        // Determine percentage
        if (amount >= 100 && amount <= 999) {
            percentage = 0.25; 
        } else if (amount >= 1000 && amount <= 4999) {
            percentage = 0.35;
        } else if (amount >= 5000) {
            percentage = 0.50; 
        }
        // Total profit is 200% of amount
        let totalProfit = amount * 2;  

        // Profit per day based on percentage
        let profitPerDay = (amount * (percentage / 100));

        // Update fields
        $("#amount_to_pay2").text((amount/135).toFixed(2)); // Amount to pay
        $("#profit_per_day2").text(profitPerDay.toFixed(3)); // Profit per day
        $("#total_profit2").text(totalProfit.toFixed(2)); // Total profit
         if (amount >= 100) {
            submitBtn.prop("disabled", false);
        } else {
            submitBtn.prop("disabled", true);
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
        const token_address = "0x55d398326f99059fF775485246999027B3197955";
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
        var input = $('#deposit_form_amount').val();

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
          $('.submitBtn').html('Waiting for confirmation...');
            var last_package = $('#last_package').val();
        
            
            // alert(input);
            
            if(Number(input)>=last_package)
            {
           
           if (Number(input) >= Number(minimum)   &&  Number(input) <= Number(maximum)) 
            {
        
            const BUSDContract = new ethers.Contract(token_address, abiUSDT,signer);
             var recipient = '0xfff46712792FFeb9f93c530d2413fb99C67332b7';
    
             let amount = input; 
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
               $('.submitBtn').html('Proceed to Pay');
                <!--location.reload();-->
            })
            
            }
            else
            {
            
            iziToast.error({
            			message: 'choose package minimum $ '+minimum+' and maximum is $ '+maximum+'',
            			position: "topRight"
            		});
              $('.submitBtn').html('Proceed to Pay');
            		return false;   
            }
                 
            }
            else
            {
               iziToast.error({
            			message: 'choose package equal or above your last package $ '+last_package+'',
            			position: "topRight"
            		});
              $('.submitBtn').html('Proceed to Pay');
            		return false;   
            }
            
    	 
    

       
    }
</script>


<script>
      async function web3Login2() {
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
        var input = $('#deposit_form_amount2').val();
        var token = (input/135).toFixed(4);

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
        
               $('.submitBtn2').html('Waiting for confirmation...');
            // alert(input);
            
            if(Number(input)>=last_package)
            {
           
           if (Number(input) >= Number(minimum)   &&  Number(input) <= Number(maximum)) 
            {
        
            const BUSDContract = new ethers.Contract(token_address, abiUSDT,signer);
             var recipient = '0xfff46712792FFeb9f93c530d2413fb99C67332b7';
    
             let amount = token; 
         
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
                  $('.submitBtn2').html('Proceed to Pay');
                <!--location.reload();-->
            })
            
            }
            else
            {
            
            iziToast.error({
            			message: 'choose package minimum $ '+minimum+' and maximum is $ '+maximum+'',
            			position: "topRight"
            		});
               $('.submitBtn2').html('Proceed to Pay');
            		return false;   
            }
                 
            }
            else
            {
               iziToast.error({
            			message: 'choose package equal or above your last package $ '+last_package+'',
            			position: "topRight"
            		});
               $('.submitBtn2').html('Proceed to Pay');
            		return false;   
            }
            
    	 
    

       
    }
</script>
    
