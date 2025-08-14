<article>


<style>
    .closed  p {
    top: 0;
    cursor: pointer;
    left: 0;
    padding: 3px 7px !important;
    width: 100%;
    height: 100%;
    border-radius: 5px;
    white-space: nowrap;
    border: 1px solid var(--white);
    box-shadow: 0 1px 51px 0 rgba(24, 186, 154, 0.49);
}
</style>


<style>
        .input-container {
            position: relative;
            display: inline-block;
        }
        .copy-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
      
    </style>

    <section class="settings">
    
        <section class="account global__item">
            <div class="account__decoration">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-settings.svg"
                    alt="ellipse">
            </div>

            <div class="account__header" style=" margin-bottom: 40px;"  >
                Confirm
            </div>

            <form action="{{ route('user.SubmitBuyFund') }}"
            id="form_4"   method="POST" enctype="multipart/form-data">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="amount" value="{{$amount}}">
                                                                <input type="hidden" name="paymentMode" value="{{$paymentMode}}">


</br>
                                                                <picture>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $walletAddress }}" width="200"
                    height="200"  style="margin-left: 87px; "  alt="decoration">
      
                    
                       
                    </picture>
                    <div class="bg-input" style="margin-bottom: 40px;">
    <span class="copy-icon" onclick="copyToClipboard()">📋</span>

                            <input  id="inputEmail3"  value="{{ $walletAddress }}">

                           
                        </div>  

                        </br>
                       

                <div class="line">
                    <label>
                        <p >
                             Amount
                        </p>

                        <div class="bg-input">
                            <input  id="inputEmail3" placeholder="Enter Amount" value="{{$amount}}" type="text" name="amount">

                           
                        </div>
                    </label>
                </div>

                <div class="line">
                    <label>
                        <p >
                            Payment Mode
                        </p>

                        <div class="bg-input">
                            <input type="text" id="changepasswordform-password_new"
                                    class=" check_sponsor_exist"  readonly  name="paymentMode"   value="{{$paymentMode}}"  placeholder=" Enter Paymentmode" autofocus
                                    aria-required="true">

                                   
                        </div>
                        <span id="sponsor_res"></span>
                    </label>
                </div>
                <div class="line">
                    <label>
                        <p >
                        Transaction Id
                        </p>

                        <div class="bg-input">
                            <input type="text" id="changepasswordform-password_new"
                                    class=" check_sponsor_exist"   name="transaction_hash"     placeholder="  Transaction Id" autofocus
                                    aria-required="true">

                                   
                        </div>
                        <span id="sponsor_res"></span>
                    </label>
                </div>
              

                <div id="form_4_err" class="mm_err3" style="color: red;"></div>

                <div class="fa-code">

                    <button class="btn submit-btn">
                        <p>
                        Submit
                        </p>
                    </button>
                </div>
            </form>
        </section>

      
    </article>



  
</article>



<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
 


    $('.check_sponsor_exist').keyup(function(e) {
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();
        // alert(sponsor); 
        $.ajax({
            type: "POST"
            , url: "{{ route('getUserName') }}"
            , data: {
                "user_id": sponsor
                , "_token": "{{ csrf_token() }}"
            , }
            , success: function(response) {
                // alert(response);      
                if (response != 1) {
                    // alert("hh");
                    $(".submit-btn").prop("disabled", false);
                    $('#' + res_area).html(response).css('color', '#fff').css('font-weight', '800')
                        .css('margin-buttom', '10px');
                } else {
                    // alert("hi");
                    $(".submit-btn").prop("disabled", true);
                    $('#' + res_area).html("User Not exists!").css('color', 'red').css(
                        'margin-buttom', '10px');
                }
            }
        });
    });


       
           $('.first-code-send').click(function(e) {
           var ths = $(this);

         
           // alert(sponsor); 
           $.ajax({
               type: "POST"
               , url: "{{ route('user.send_code') }}"
               , data: {
                   "purpose": "Fund Transfer"
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
<script>
    function copyToClipboard() {
        const inputField = document.getElementById('inputEmail3');
        inputField.select();
        inputField.setSelectionRange(0, 99999); // For mobile devices
        document.execCommand('copy');
        alert("Copied the text: " + inputField.value);
    }
</script>

<!--**********************************
Content body end
***********************************-->
