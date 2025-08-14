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
                Add Fund
            </div>

            <form action="{{ route('user.fund') }}" method="post" id="form_4" >
                {{ csrf_field() }}
                <div class="line">
                    <label>
                        <p >
                            Enter Amount
                        </p>

                        <div class="bg-input">
                            <input  id="inputEmail3" placeholder="Enter Amount" type="text" name="amount" required>

                           
                        </div>
                    </label>
                </div>

                <div class="line">
                    <label>
                        <p >
                         payment method
                        </p>

                        <div class="bg-input">
                            <!-- <input type="text" id="changepasswordform-password_new"
                                    class=" check_sponsor_exist"   name="paymentMode" value="USDT" placeholder=" Enter Paymentmode" autofocus
                                    aria-required="true" required> -->


 <input class="form-control" required name="paymentMode"  readonly id="changepasswordform-password_new"  value="USDT.BEP20" required>

                                    <!--<select class="form-control" required name="paymentMode" id="changepasswordform-password_new"  required>-->
                                    <!--            <option value="USDT.BEP20">USDT (BEP20)</option>-->
                                    <!--            <option value="USDT.TRC20">USDT (TRC20)</option>-->
                                    <!--        </select>       -->

                                   
                        </div>
                        <span id="sponsor_res"></span>
                    </label>
                </div>
              

                <div id="form_4_err" class="mm_err3" style="color: red;"></div>

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
