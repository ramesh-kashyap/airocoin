<article>



    <section class="invest ticket">
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

        <h1>
            Tickets
        </h1>

        <div class="ticket-create btn__popup">
            <p>
                Create new ticket
            </p>
        </div>

        <div class="table">
            <div class="table__line">
                <div class="table__line--method">
                    <p class="table__line--title">

                    </p>

                    <p class="table__line--text">
                        Username
                    </p>
                </div>

                <div class="table__line--date">
                    <p class="table__line--title">

                    </p>

                    <p class="table__line--text">
                        Ticket
                    </p>
                </div>

                <div class="table__line--date">
                    <p class="table__line--title">

                    </p>

                    <p class="table__line--text">
                        Category
                    </p>
                </div>

                <div class="table__line--coin">
                    <p class="table__line--title">

                    </p>

                    <p class="table__line--text">
                        Request Date
                    </p>
                </div>

              

                <div class="table__line--status">
                    <p class="table__line--title">

                    </p>

                    <p class="table__line--text">
                        Status
                    </p>
                </div>
            </div>


            <?php if(is_array($level_income) || is_object($level_income)){ ?>
  
                <?php $cnt = 0; ?>
                @foreach($level_income as $value)

            <a href="{{ route('user.ViewMessage') }}?ticket_no={{ $value->ticket_no }}" class="table__line">
                <div class="table__line--method">
                    <p class="table__line--title">
                        Username
                    </p>

                    <div class="table__line--text">
                        <p style="padding: 0px;">

                            {{$value->user_id_fk}}
                        </p>
                    </div>
                </div>


                <div class="table__line--date">
                    <p class="table__line--title">
                        Ticket
                    </p>

                    <p class="table__line--text">
                        {{$value->ticket_no}}</p>
                </div>


                <div class="table__line--date">
                    <p class="table__line--title">
                        Category
                    </p>

                    <p class="table__line--text">
                        {{$value->category}} </p>
                </div>

                <div class="table__line--coin">
                    <p class="table__line--title">
                        Request Date
                    </p>

                    <p class="table__line--text">
                        {{$value->gen_date}} </p>
                </div>

                

                <div class="table__line--status">
                    <p class="table__line--title">
                        Status
                    </p>

                    <div class="btn {{ ($value->status)?"closed":"waiting" }}">
                        <p></p>
                    </div>
                </div>
            </a>

            @endforeach
    
            <?php }?>




            {{ $level_income->withQueryString()->links() }}











        </div>
    </section>

</article>

<section class="popup">
    <div class="popup__content">
        <div class="popup__content--decoration">
            <div class="popup__content--big">
                <div class="bg__desktop">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-contacts.svg" alt="form">
                </div>

                <div class="bg__mobile">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-contacts-mob.svg" alt="form">
                </div>

                <div class="bg__mobile--small">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-contacts-mob-small.svg"
                        alt="form">
                </div>
            </div>

            <div class="popup__content--photo">
                <div class="bg__desktop">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-photo.svg" alt="form">
                </div>

                <div class="bg__mobile">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-photo-mob.svg" alt="form">
                </div>

                <div class="bg__mobile--small">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-photo-mob-small.svg"
                        alt="form">
                </div>
            </div>

            <div class="popup__content--on">
                <div class="bg__desktop">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-on.svg" alt="form">
                </div>

                <div class="bg__mobile">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-on-mob.svg" alt="form">
                </div>

                <div class="bg__mobile--small">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-on-mob-small.svg"
                        alt="form">
                </div>
            </div>

            <div class="popup__content--small">
                <div class="bg__desktop">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-forgot.svg" alt="form">
                </div>

                <div class="bg__mobile">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-forgot-mob.svg"
                        alt="form">
                </div>

                <div class="bg__mobile--small">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-forgot-mob-small.svg"
                        alt="form">
                </div>
            </div>
        </div>

        <div class="popup__close">
            <img src="{{ asset('') }}frontend/img/cabinet/icons/close-popup.svg" alt="icon"
                class="icon-svg">
        </div>

        <div class="popup__description preview-form">
            <div class="popup__header">
            </div>

            <div class="popup__banner">
            </div>

            <div class="popup__fullscreen">
                Full-size preview <span>(new window)</span>
            </div>

            <a href="#" target="_blank">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/full-size.svg"
                    alt="icon">
            </a>
        </div>

        <div class="popup__description code-form">
            <div class="popup__header">
                Banner <span>728x90</span>
            </div>

            <div class="popup__info">
                <div class="popup__item">
                    <div class="popup__item--input">
                        <div class="popup__item--icon">
                            <img src="{{ asset('') }}frontend/img/cabinet/icons/link.svg" width="35"
                                height="35" alt="icon">
                        </div>

                        <p>
                            Link to banner
                        </p>

                        <div class="btn-copy">
                            <span>
                                Copy
                            </span>
                        </div>
                    </div>

                    <div class="popup__item--link popup__item--result">
                        <p>
                        </p>
                    </div>
                </div>

                <div class="popup__item">
                    <div class="popup__item--input">
                        <div class="popup__item--icon">
                            <img src="{{ asset('') }}frontend/img/cabinet/icons/code.svg" width="35"
                                height="35" alt="icon">
                        </div>

                        <p>
                            Banner code
                        </p>

                        <div class="btn-copy">
                            <span>
                                Copy
                            </span>
                        </div>
                    </div>

                    <div class="popup__item--code popup__item--result">
                        <p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup__description photo-form">
            <div class="photo-form__download">
                <div class="popup__header">
                    Update profile photo
                </div>

                <!-- <form method="post" enctype="multipart/form-data">
                <div class="input-file-row">
                  <label class="input-file">
                      <input type="file" name="file[]" multiple accept="image/*">
                      <span>Выберите файл</span>
                  </label>
                  <div class="input-file-list"></div>
                </div>
              </form> -->

                <form class="add-photo">
                    <label class="add-photo__file">
                        <div class="add-photo__error"></div>

                        <input type="file" name="file[]" accept="image/*">

                        <div class="btn-download">
                            <p>
                                Download photo
                            </p>

                            <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/download.svg"
                                alt="icon">
                        </div>
                    </label>
                </form>

                <p>or choose avatar</p>

                <div class="photo-form__avatar">
                    <div class="photo-form__avatar--item">
                        <img src="pic/cabinet/avatar/cat.svg" width="94" height="94" alt="avatar">
                    </div>

                    <div class="photo-form__avatar--item">
                        <img src="pic/cabinet/avatar/man.svg" width="95" height="94" alt="avatar">
                    </div>

                    <div class="photo-form__avatar--item">
                        <img src="pic/cabinet/avatar/boy.svg" width="95" height="94" alt="avatar">
                    </div>

                    <div class="photo-form__avatar--item">
                        <img src="pic/cabinet/avatar/girl.svg" width="94" height="94" alt="avatar">
                    </div>

                    <div class="photo-form__avatar--item">
                        <img src="pic/cabinet/avatar/bear.svg" width="94" height="94" alt="avatar">
                    </div>
                </div>
            </div>

            <div class="photo-form__result">
                <div class="popup__header">
                    Current photo
                </div>

                <div class="result-download"></div>
            </div>
        </div>

        <div class="popup__description authentication-on">
            <div class="authentication__description">
                <div class="popup__header">
                    2FA (Two-factor authentication)
                </div>

                <form class="form-authentication">
                    <div class="form-authentication__item">
                        <div class="form-authentication__item--line">
                            <div class="form-authentication__item--list">
                                <p>01</p>
                            </div>

                            <p>
                                If you don't have Google Authenticator application on your device, <a href="#"
                                    target="_blank">please install it here.</a>
                            </p>
                        </div>
                    </div>

                    <div class="form-authentication__item">
                        <div class="form-authentication__item--line">
                            <div class="form-authentication__item--list">
                                <p>02</p>
                            </div>

                            <p>
                                If you don't have Google Authenticator application on your device, please install it
                                here.
                            </p>
                        </div>

                        <div class="form-authentication__item--description">
                            <p>
                                Put down the authentication key and keep it in a safe place
                                <span>Don't lose the key and don't show it to anyone!</span>
                            </p>
                        </div>

                        <div class="form-authentication__item--copy">
                            <div class="form-authentication__item--code">
                                <img src="{{ asset('') }}frontend/img/cabinet/icons/qr-code.svg" width="25"
                                    height="25" alt="icon">
                            </div>

                            <div class="form-authentication__item--result">
                                <p>
                                    TYtAbw4x1o348CWQuVNj4P
                                </p>
                            </div>

                            <div class="btn-copy">
                                <p>
                                    Copy
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="form-authentication__item">
                        <div class="form-authentication__item--line">
                            <div class="form-authentication__item--list">
                                <p>03</p>
                            </div>

                            <p>
                                If you don't have Google Authenticator application on your device, please install it
                                here.
                            </p>
                        </div>

                        <label class="form-authentication__item--digit">
                            <p>
                                6-digit code:
                            </p>

                            <input type="text" maxlength="4" name="fa_code_settings_popup" placeholder="——————">
                        </label>

                        <div class="block-btn">
                            <div class="btn-agree">
                                <p>
                                    Confirm my 2FA settings
                                </p>
                            </div>

                            <div class="cancel">
                                <p>
                                    Cancel
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="authentication__popup--qr">
                <div class="authentication__popup--image">
                    <img src="{{ asset('') }}frontend/img/cabinet/qr-code/qr-code.svg" width="237"
                        height="237" alt="qr-code">
                </div>

                <div class="btn__ready">
                    <p>
                        Readey
                    </p>
                </div>
            </div>

            <div class="authentication__system">
                <div class="authentication__system--enable">
                    <div class="popup__header">
                        SYSTEM MESSAGE
                    </div>

                    <p>
                        Two-factor authentication has been enabled
                    </p>

                    <div class="btn__got-it">
                        <p>
                            Got it
                        </p>
                    </div>
                </div>

                <div class="authentication__system--disable">
                    <div class="popup__header">
                        SYSTEM MESSAGE
                    </div>

                    <p>
                        Two-factor authentication has been disabled
                    </p>

                    <div class="btn__got-it">
                        <p>
                            Got it
                        </p>
                    </div>
                </div>
            </div>

            <div class="authentication__disable">
                <div class="popup__header">
                    2FA (TWO-FACTOR AUTHENTICATION)
                </div>

                <p>
                    You are about to disable your two-factor authentication!<br>
                    Please input a 6-digit code from Google Authentication and confirm your action.
                </p>

                <label class="form-authentication__item--digit">
                    <p>
                        6-digit code:
                    </p>

                    <input type="text" maxlength="4" name="fa_code_settings_popup" placeholder="——————">
                </label>

                <div class="block-btn">
                    <div class="btn-agree">
                        <p>
                            Confirm my 2FA settings
                        </p>
                    </div>

                    <div class="cancel">
                        <p>
                            Cancel
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup__description ticket-new">
            <div class="popup__header">
                Create new ticket
            </div>

            <form action="{{ route('user.SubmitTicket') }}" class="form" method="post" id="form_1"
            onSubmit="add_tiket(); return false;">
            {{ csrf_field() }}
            <input type="hidden" name="modal_add" value="1" />
            <div class="form__input">
                <label class="bg-input">
                    <input type="text" name="ticket_no" placeholder="Theme of ticket">
                </label>

                <div class="bg-input">
                    <input hidden type="text" name="category" value="Technical support"
                        placeholder="Choose a category">

                    <div class="drop-down">
                        <div class="result">
                            <p>
                                Choose a category
                            </p>
                        </div>

                        <span class="drop-down__btn">
                            <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/arrow-btn-right.svg"
                                width="8" height="13" alt="icon">
                        </span>

                        <div class="drop-down__list">
                            <ul custom-container>
                                <li>
                                    Technical support
                                </li>

                                <li>
                                    Investments
                                </li>

                                <li>
                                    Withdrawals
                                </li>

                                <li>
                                    Affiliate program
                                </li>

                                <li>
                                    Other
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <label class="bg-input textarea">
                    <div class="bg-textarea" custom-container>
                        <textarea class="textarea" name="message" rows="6" placeholder="Ask your question here"></textarea>
                    </div>
                </label>
            </div>

            <div id="form_1_err" class="mm_err3" style="color: red;"></div>


            <button type="submit" class="btn-send" id="tickets_butt">
                <p>
                    Submit
                </p>
            </button>
        </form>
        </div>
    </div>
</section>
