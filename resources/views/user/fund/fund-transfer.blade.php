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

    <section class="settings">
    
        <section class="account global__item">
            <div class="account__decoration">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-settings.svg"
                    alt="ellipse">
            </div>

            <div class="account__header">
               Income Wallet :   {{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}
            </div>
            
   <div class="account__header">
                Internal Transfer to Activation Wallet
            </div>

            <form action="{{ route('user.fundtransferSubmit') }}" method="post" id="form_4" >
                {{ csrf_field() }}
                <div class="line">
                    <label>
                        <p >
                            Enter Amount
                        </p>

                        <div class="bg-input">
                            <input  id="inputEmail3" placeholder="Enter Amount" class="change-amount1" type="text" name="amount">

                           
                        </div>
                    </label>
                </div>

                <div class="line">
                    <label>
                        <p >
                            Transaction Password
                        </p>
                        <div class="bg-input">
                            <input id="inputEmail3" placeholder="Transaction Password" type="password" name="transaction_password">

                            
                        </div>
                    </label>
                </div>

               <div class="mm_err3" style="color: red; padding-bottom: 0px; font-size: 14px;"
                                id="element_error"></div>

                <div class="fa-code">

                    <button class="btn submit-btn">
                        <p>
                            Confirm
                        </p>
                    </button>
                </div>
            </form>
        </section>

      
    </article>



  
</article>



<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
 

    $('.change-amount').keyup(function(e) {
        var ths = $(this);
        var amount = $(this).val();

      

       if (amount % 50 !== 0) {
            $(".submit-btn").prop("disabled", true);   
            $('#element_error').html('amount must be a multiple of 50 $').css('color', 'red');
        }
        else{
            $(".submit-btn").prop("disabled", false);
            $('#element_error').html('');
        }

    });



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

<!--**********************************
Content body end
***********************************-->
