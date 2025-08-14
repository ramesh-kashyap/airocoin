
                <div class="contentLk">


                    <h2 class="titleLk">An invoice for payment</h2>
                    <form class="formBill"  action="{{ route('user.fundActivation') }}" method="POST">
                        <div class="left"  >
                            {{ csrf_field() }}
                            <p class="billHead">
                                You have been invoiced for payment:
                            </p>
                            <div class="note">
                                <p>If you do not pay, the application will be automatically canceled.</p>
                            </div>
                            <div class="formContent">
                                <div class="formItem">
                                    <div class="inputLine inputIcon sumInput">
                                        <label class="inputLabel">Transaction:</label>
                                        <input type="text" value="{{$amount}}" readonly name="amount">
                                        <div class="inputPayIcon"><img src="/assets/c20a81c4/img/ps/{{$paymentMode}}.svg"
                                                alt=""></div>
                                    </div>
                                    <span class="inputLabel">{{$paymentMode}}</span>
                                </div>
                                <div class="formItem">
                                    <div class="inputLine">
                                        <label class="inputLabel">Wallet address ({{$paymentMode}}):</label>
                                        <div class="copyContainer">
                                            <input type="text" id="walletAddr" readonly
                                                value="{{$walletAddress}}">
                                            <button class="copyBtn copyRef" data-clipboard-target="#walletAddr"><img
                                                    src="/assets/c20a81c4/img/copy.svg" alt=""></button>
                                            <span class="copyMessage">Copied</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="qrContainer">
                            <div class="qrImage"
                                style="background-image: url('https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{$walletAddress}}');">
                            </div>
                            <p class="pre">Scan QR code for payment</p>
                            <div class="logos">
                                <div class="logoItem"><img src="/assets/c20a81c4/img/logo-protected.png"
                                        alt=""></div>
                                <div class="logoItem"><img style="width:100%" src="/assets/c20a81c4/img/logo-white.png" alt=""></div>
                            </div>
                        </div>
                        <div class="right">
                            
                            <div class="listModalDep">
                                <div class="item">
                                    <span class="iconBl icon-check-6"></span>
                                    <span class="tit">Status</span>
                                    <span class="txt">Pending</span>
                                </div>
                                <div class="item">
                                    <span class="iconBl icon-calendar-12"></span>
                                    <span class="tit">Date</span>
                                    <span class="date"> <?php echo date("D, d M Y", strtotime(date('Y-m-d')))?></span>
                                </div>
                                <div class="item">
                                    <span class="iconBl icon-credit-card-5"></span>
                                    <span class="tit">Payment system</span>
                                    <div class="data">
                                        <b class="txt">{{$paymentMode}}</b>
                                        <div class="icon"><img src="/assets/c20a81c4/img/ps/{{$paymentMode}}.svg"
                                                alt=""></div>
                                    </div>
                                </div>
                               
                                <div class="item">
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Amount</span>
                                    <span class="val">{{$amount}} USDT</span>
                                </div>

                                <input type="hidden" name="paymentMode" value="{{$paymentMode}}">
                                <input type="hidden" name="plan" value="{{$plan}}">

                                <div class="formItem">
                                    <div class="inputLine">
                                        <label class="inputLabel">Transaction ID :</label>
                                        <div class="copyContainer">
                                            <input type="text" id="walletAddr" name="transaction_id" required
                                                value="" placeholder="Transaction ID">
                                         
                                        </div>
                                    </div>
                                   
                                </div>


                            </div>
                            <div class="note">
                                <p>Make sure you are sending the exact number of coins indicated. Note that this is a
                                    unique wallet address.</p>
                                <p>After the transaction is completed, do not use this address for future payments.</p>
                            </div>
                            <div class="btnsContainer">
                                <a href="{{route('user.invest')}}" class="btn btnFullBlack">Cancel</a>
                                <button  type="submit" class="btn btnBlue">I paid</button>
                            </div>
                        </div>
                    </form>

                </div>
                
    <script>
        function show_error() {
            $(document).find('.error-summary ul').each(function() {
                if (!$(this).is(':empty')) {
                    error = $(this).html();
                    $(this).html('');
                    $('#error-message').html(error);
                    modalEventOpen('modal_error');
                }
            })
        }


        $(document).on("ajaxComplete", function() {
            show_error();
        });
        show_error();
    </script>
