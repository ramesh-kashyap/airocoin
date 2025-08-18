<table class="table table-payment font-size-14 weight-600">
    <thead class=table-payment__head>
        <tr>
            <td>Currency</td>
            <td>Balance</td>
            <td>Min. Max.</td>
            <td>Withdrawal time</td>
            <td>Fee</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <tr class="table-payment__row js-table-payment-switcher" data-target=#js-payment-form-row-ccabep20usdt>
            <td class=table-payment__cell>
                <div class=table-payment__label> Currency </div>
                <div class=table-payment__value>
                    <div class="ticker-pair-widget weight-600 color-white">
                        <div class=ticker-pair-widget__inner>
                            <div class=ticker-pair-widget__icons><svg width=52 height=52 class=ticker-pair-widget__icon>
                                    <use xlink:href=#ps-ccabep20usdt></use>
                                </svg> </div>
                            <div class=ticker-pair-widget__label> Tether <span class=color-gray>BEP20</span> </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Balance </div>
                <div class=table-payment__value><span> {{ number_format(Auth::user()->available_balance(), 2) }} USDT </span> <br> <span class=color-gray> ~{{ number_format(Auth::user()->available_balance(), 2) }} USDT
                    </span></div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Min. Max. </div>
                <div class=table-payment__value><span> ~5.0000 USDT </span> <br> <span>
                        ~100000.0000 USDT </span></div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Withdrawal time </div>
                <div class="table-payment__value color-gray"> Up to 24 hours </div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Fee </div>
                <div class="table-payment__value color-gray"> 0% </div>
            </td>
            <td class="table-payment__cell table-payment__cell--btn"><button
                    class="table-payment__carret-btn js-table-payment-btn active"><svg width=16 height=16
                        class=color-green>
                        <use xlink:href=#carret-top></use>
                    </svg> </button> </td>
        </tr>
        <tr class="table-payment__form-row js-payment-form-row active" id=js-payment-form-row-ccabep20usdt>
            <td class=table-payment__form-cell colspan=6>
                <form name=payment method=post action=/user/wallet/usdt
                    class="payment-form-row table-payment__payment-form-row" data-pjax=data-pjax><input name=__csrf
                        type=hidden value=cd2c5108fdee8e439c5f4dbb437fc9d7> <input type=hidden id=payment_ps_slug
                        name=payment[ps_slug] required value=ccabep20usdt>
                    <div class=payment-form-row__inner>
                        <div class=payment-form-row__cell>
                            <div class=form-input-row>
                                <div class=form-input-row__append> USDT </div> <input type=text id=payment_amount
                                    name=payment[amount] class="form-control form-control-lg form-control"
                                    placeholder=Amount>
                            </div>
                        </div>
                        <div class=payment-form-row__cell>
                            <div class=form-input-row>
                                <div class=form-input-row__append><svg width=24 height=24 class=color-green>
                                        <use xlink:href=#wallet></use>
                                    </svg> </div> <input type=text id=payment_wallet name=payment[wallet]
                                    class="form-control form-control-lg form-control" placeholder="BEP20 Wallet">
                            </div> <input type=text id=payment_dest_tag name=payment[dest_tag]
                                class="d-none form-control">
                        </div>
                        <div class="payment-form-row__cell payment-form-row__cell--controls">
                            <button type=submit id=payment_btn_wallet name=payment[btn_wallet]
                                class="btn btn-lg btn-outline-success payment-form-row__btn btn">Save
                                Wallet</button> <button type=submit id=payment_btn_payment name=payment[btn_payment]
                                class="btn btn-lg btn-success payment-form-row__btn btn">Withdraw</button>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        <tr class="table-payment__row js-table-payment-switcher" data-target=#js-payment-form-row-ccabnb>
            <td class=table-payment__cell>
                <div class=table-payment__label> Currency </div>
                <div class=table-payment__value>
                    <div class="ticker-pair-widget weight-600 color-white">
                        <div class=ticker-pair-widget__inner>
                            <div class=ticker-pair-widget__icons><svg width=52 height=52 class=ticker-pair-widget__icon>
                                    <use xlink:href=#ps-ccabnb></use>
                                </svg> </div>
                            <div class=ticker-pair-widget__label> Binancecoin </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Balance </div>
                <div class=table-payment__value><span> 0.0000 USDT </span> <br> <span class=color-gray> ~0.000000 BNB
                    </span></div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Min. Max. </div>
                <div class=table-payment__value><span> ~3.4017 USDT </span> <br> <span>
                        ~8296800.0000 USDT </span></div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Withdrawal time </div>
                <div class="table-payment__value color-gray"> Up to 24 hours </div>
            </td>
            <td class=table-payment__cell>
                <div class=table-payment__label> Fee </div>
                <div class="table-payment__value color-gray"> 0% </div>
            </td>
            <td class="table-payment__cell table-payment__cell--btn"><button
                    class="table-payment__carret-btn js-table-payment-btn "><svg width=16 height=16 class=color-green>
                        <use xlink:href=#carret-top></use>
                    </svg> </button> </td>
        </tr>
        <tr class="table-payment__form-row js-payment-form-row " id=js-payment-form-row-ccabnb>
            <td class=table-payment__form-cell colspan=6>
                <form name=payment method=post action=/user/wallet/usdt
                    class="payment-form-row table-payment__payment-form-row" data-pjax=data-pjax><input name=__csrf
                        type=hidden value=cd2c5108fdee8e439c5f4dbb437fc9d7> <input type=hidden id=payment_ps_slug
                        name=payment[ps_slug] required value=ccabnb>
                    <div class=payment-form-row__inner>
                        <div class=payment-form-row__cell>
                            <div class=form-input-row>
                                <div class=form-input-row__append> USDT </div> <input type=text id=payment_amount
                                    name=payment[amount] class="form-control form-control-lg form-control"
                                    placeholder=Amount>
                            </div>
                        </div>
                        <div class=payment-form-row__cell>
                            <div class=form-input-row>
                                <div class=form-input-row__append><svg width=24 height=24 class=color-green>
                                        <use xlink:href=#wallet></use>
                                    </svg> </div> <input type=text id=payment_wallet name=payment[wallet]
                                    class="form-control form-control-lg form-control" placeholder="Binancecoin Wallet">
                            </div> <input type=text id=payment_dest_tag name=payment[dest_tag]
                                class="d-none form-control">
                        </div>
                        <div class="payment-form-row__cell payment-form-row__cell--controls">
                            <button type=submit id=payment_btn_wallet name=payment[btn_wallet]
                                class="btn btn-lg btn-outline-success payment-form-row__btn btn">Save
                                Wallet</button> <button type=submit id=payment_btn_payment name=payment[btn_payment]
                                class="btn btn-lg btn-success payment-form-row__btn btn">Withdraw</button>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        <tr class="table-payment__row js-table-payment-switcher" data-target=#js-payment-form-row-ccabtc>

        </tr>


    </tbody>
</table>
</div>


<script>
    pageInits.push(function() {
        $('.js-link-user-wallet').addClass('active')
    });
    pageInits.push(function() {
        $('.js-table-payment-switcher').on('click', function() {
            var $btn = $(this).find('.js-table-payment-btn');
            var $target = $($(this).data('target'));
            $('.js-payment-form-row').not($target).removeClass('active');
            $('.js-table-payment-btn').not($btn).removeClass('active');
            $target.addClass('active');
            $btn.addClass('active')
        })
    })
</script>

<script src=/theme/js/index-v-d367a25c6b3e.js></script>
<script src=/theme/js/pjax-v-d367a25c6b3e.js></script>
<script>
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/theme/img/sprite-v-d367a25c6b3e.svg', !0);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var div = document.createElement('div');
            div.style.position = 'absolute';
            div.style.width = '0';
            div.style.height = '0';
            div.style.visibility = 'hidden';
            div.innerHTML = xhr.responseText;
            document.body.insertBefore(div, document.body.firstChild)
        }
    };
    xhr.send()
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var pjaxOptions = {
            fragment: '#js-pjax-container',
            scrollTo: !1,
            timeout: 3000
        };
        $.pjax.defaults.maxCacheLength = 0;
        $(document).on('click', 'form[data-pjax] button[type="submit"][name]', function() {
            var form = $(this).closest('form');
            var buttonName = $(this).attr('name');
            var buttonValue = $(this).attr('value');
            var hiddenInput = form.find('input[type="hidden"][name="' + buttonName + '"]');
            if (hiddenInput.length > 0) {
                hiddenInput.remove()
            }
            hiddenInput = $('<input>').attr('type', 'hidden').attr('name', buttonName).val(buttonValue);
            form.append(hiddenInput)
        }).pjax('a[data-pjax]', '#js-pjax-container', pjaxOptions).on('submit', 'form[data-pjax]', function(
            event) {
            $.pjax.submit(event, '#js-pjax-container', pjaxOptions)
        }).on('pjax:clicked', function(options) {}).on('pjax:beforeReplace', function() {
            pageDestroys.forEach(function(element) {
                (element)()
            });
            pageDestroys = []
        }).on('pjax:beforeSend', function(event) {
            $('.modal-backdrop').remove();
            $('body').removeClass('modal-open');
            $('#js-preloader').removeClass('ready');
            if (!$(event.relatedTarget).hasClass('js-noscroll')) {
                setTimeout(function() {
                    window.scrollTo({
                        top: 0,
                        left: 0
                    })
                }, 10)
            }
        }).on('pjax:success', function(event, data) {}).on('pjax:error', function(event, xhr, textStatus,
            errorThrown, options) {
            options.success(xhr.responseText, textStatus, xhr);
            return !1
        }).on('pjax:end', function() {
            pageInits.forEach(function(element) {
                (element)()
            });
            pageInits = []
        }).on('pjax:complete', function() {
            layoutInit();
            $('#js-preloader').addClass('ready');
            setTimeout(function() {
                $('#js-pjax-container').css('height', '')
            })
        })
    })
</script>
<script>
    //(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
    //'https://dars1.ladesk.com/scripts/track.js',
    //function(e){ LiveAgent.createButton('u76fqdpl', e); });
</script>
<script>
    (function(w, d, v3) {
        w.chaportConfig = {
            appId: '684c6a1f1abf0018f2bd6556'
        };
        if (w.chaport) return;
        v3 = w.chaport = {};
        v3._q = [];
        v3._l = {};
        v3.q = function() {
            v3._q.push(arguments)
        };
        v3.on = function(e, fn) {
            if (!v3._l[e]) v3._l[e] = [];
            v3._l[e].push(fn)
        };
        var s = d.createElement('script');
        s.type = 'text/javascript';
        s.async = !0;
        s.src = 'https://app.chaport.com/javascripts/insert.js';
        var ss = d.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss)
    })(window, document)
</script>
<style>
    .transactions-container {
        display: none !important
    }

    .section.section-leadership.page-partnership__section-leadership.js-scrollable {
        display: none
    }
</style>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"version":"2024.11.0","token":"0ba6880f01494148a07c3ba6978a8c03","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
    crossorigin="anonymous"></script>