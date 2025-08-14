<div class="deposit-form__body">
    <style>
        .pay-method-widget__inner {
            border: 1px solid #2bf3c3;
        }
    </style>
    <div class="deposit-form__cell" style="width: 100%">
           <form action="{{ route('user.fundtransferSubmit') }}" method="post" >
                {{ csrf_field() }}    
        <div class="pay-amount-card deposit-form__pay-amount-card">
        
         
            <div class="pay-amount-card__header">
                <div class="number-title-row">
                    <div class="number-title-row__inner">
                        <div class="number-title-row__number"> 01 </div>
                        <div class="title-h5 number-title-row__title-h5">  Internal Transfer to Activation Wallet
                        </div>
                    </div>
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
                        id="deposit_form_amount" name="amount" required=""
                        class="form-control form-control-xl form-control">
                </div>
            </div>
          <div class="pay-method-list pay-method-card__pay-method-list">
               

                    <div class="password-form__input-row"><label for="password_form_old_password" class="form-label">  Transaction Password<span class="color-green">*</span> </label>
                        <div class="form-input-row">
                            <div class="form-input-row__append"><button class="password-btn js-password-btn"
                                    type="button" data-target="#password_form_old_password"><svg width="24"
                                        height="24" class="password-btn__hidden-icon">
                                        <use xlink:href="#password-hidden"></use>
                                    </svg> <svg width="24" height="24" class="password-btn__visible-icon">
                                        <use xlink:href="#password-visible"></use>
                                    </svg></button> </div> <input type="password" id="password_form_old_password"
                                name="transaction_password" required=""
                                class="form-control form-control-lg form-control" placeholder="Transaction Password">
                        </div>
                    </div>
               
            </div>
            <div class="pay-amount-card__btn-row"><button class="btn btn-lg btn-success btn-xs-block submitBtn" >Confirm</button> </div>
           
        </div>
         </form>
    </div>

</div>
</div>
