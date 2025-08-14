
                        <div class="user-balance-info-group page-user-dashboard__user-balance-info-group">
                            <div class=user-balance-info-group__inner>
                                <div class=user-balance-info-group__balance-cell>
                                    <div class=user-balance-info-group__label> Balance, total </div>
                                    <div class=user-balance-info-group__balance-value>
                                        <div class="total-balance-widget user-balance-info-group__total-balance-widget">
                                            <div class=total-balance-widget__inner>
                                                <div class=total-balance-widget__ticker> $ </div>
                                                <div class=total-balance-widget__balance>
                                                    <div class=total-balance-widget__int> 0 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=user-balance-info-group__footer><span
                                                class="font-size-15 weight-600">Last 24h.</span> <span
                                                class="font-size-15 weight-600 color-green"> +0% </span></div>
                                    </div>
                                </div>
                                <div class=user-balance-info-group__rank-cell>
                                    <div class=user-balance-info-group__label> Your rank </div>
                                    <div class="rank-badge user-balance-info-group__rank-badge">
                                        <div class=rank-badge__inner><svg width=24 height=24>
                                                <use xlink:href=#rank-bronze></use>
                                            </svg> Bronze </div>
                                    </div>
                                </div>
                                <div class=user-balance-info-group__offer-cell>
                                    <div class=user-balance-info-group__label> Offer per day </div>
                                    <div class=user-balance-info-group__offer-value> N/A </div>
                                </div>
                                <div class=user-balance-info-group__pnl-cell><button
                                        class="pnl-link js-open-pnl-modal"><svg width=24 height=24>
                                            <use xlink:href=#pnl-rocket></use>
                                        </svg> <span>PNL</span></button> </div>
                                <div class=user-balance-info-group__controls-cell><a href=/user/investment
                                        class="btn btn-lg btn-success" data-pjax=""><span>Make Investment</span> <svg
                                            width=18 height=16>
                                            <use xlink:href=#arrow-right></use>
                                        </svg></a> <a href=/user/wallet/usdt class="btn btn-lg btn-outline-success"
                                        data-pjax=""><span>Withdraw funds</span> <svg width=18 height=16>
                                            <use xlink:href=#arrow-right></use>
                                        </svg></a></div>
                            </div>
                        </div>
                        <div class="user-balance-info-mobile-group page-user-dashboard__user-balance-info-mobile-group">
                            <div class=user-balance-info-mobile-group__inner>
                                <div class=user-balance-info-mobile-group__body>
                                    <div class=user-balance-info-mobile-group__row>
                                        <div class=user-balance-info-mobile-group__label> Balance, total </div>
                                        <div class=user-balance-info-mobile-group__value><span
                                                class=color-green>$0.0000</span>
                                            <div class=user-balance-info-mobile-group__helper><span
                                                    class="font-size-15 weight-600">Last 24h.</span> <span
                                                    class="font-size-15 weight-600 color-green"> +0% </span></div>
                                        </div>
                                    </div>
                                    <div class=user-balance-info-mobile-group__row>
                                        <div class=user-balance-info-mobile-group__label> Your rank </div>
                                        <div class=user-balance-info-mobile-group__value> Bronze </div>
                                    </div>
                                    <div class=user-balance-info-mobile-group__row>
                                        <div class=user-balance-info-mobile-group__label> Offer per day </div>
                                        <div class=user-balance-info-mobile-group__value> N/A </div>
                                    </div>
                                </div>
                                <div class=user-balance-info-mobile-group__footer>
                                    <div
                                        class="user-balance-info-mobile-group__btn-cell user-balance-info-mobile-group__btn-cell--pnl">
                                        <button
                                            class="btn btn-block btn-lg btn-outline-success pulse js-open-pnl-modal"><svg
                                                width=18 height=18>
                                                <use xlink:href=#pnl-rocket></use>
                                            </svg> <span>PNL</span></button> </div>
                                    <div class=user-balance-info-mobile-group__btn-cell><a href=/user/investment
                                            class="btn btn-block btn-lg btn-success" data-pjax=""><span>Make
                                                Investment</span> <svg width=18 height=16>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></a> </div>
                                    <div class=user-balance-info-mobile-group__btn-cell><a href=/user/wallet/usdt
                                            class="btn btn-block btn-lg btn-outline-success"
                                            data-pjax=""><span>Withdraw funds</span> <svg width=18 height=16>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id=js-pnl-modal tabindex=-1 role=dialog>
                            <div class=modal-dialog role=document>
                                <div class=modal-content><button
                                        class="btn btn-sm btn-outline-success btn-burger modal-close"
                                        data-dismiss=modal><svg width=16 height=16>
                                            <use xlink:href=#close></use>
                                        </svg> </button>
                                    <div class="modal-body js-pnl-modal-body"></div>
                                </div>
                            </div>
                        </div> <template id=js-pnl-card-template>
                            <div class=pnl-card>
                                <div class=pnl-card__inner>
                                    <div class="modal-title pnl-card__modal-title"> Your PNL </div>
                                    <div class=pnl-card__img-wrapper><img src=""> </div>
                                    <div class=pnl-card__footer>
                                        <div class=pnl-card__btn-cell><button
                                                class="btn btn-lg btn-block btn-outline-success js-copy" data-text="">
                                                Copy image </button> </div>
                                        <div class=pnl-card__btn-cell><a href="" target=_blank
                                                class="btn btn-lg btn-block btn-success js-download" download="">
                                                Download </a> </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <script>
                            (function() {
                                pageInits.push(function() {
                                    $(document).on('click', '.js-open-pnl-modal', function() {
                                        $.getJSON('/user/deposit/pnl').done(function(data) {
                                            var url = data.result;
                                            var fullUrl = window.location.origin + url;
                                            var $card = $($('#js-pnl-card-template').html());
                                            $card.find('img').attr('src', url);
                                            $card.find('.js-copy').attr('data-text', fullUrl);
                                            $card.find('.js-download').attr('href', url);
                                            $('.js-pnl-modal-body').empty().append($card);
                                            $('#js-pnl-modal').modal('show')
                                        })
                                    });
                                    $('#js-pnl-modal').on('hidden.bs.modal', function() {
                                        $('.js-pnl-modal-body').empty()
                                    })
                                });
                                pageDestroys.push(function() {
                                    $(document).off('click', '.js-open-pnl-modal');
                                    $('#js-pnl-modal').off('hidden.bs.modal')
                                })
                            })()
                        </script>
                        <div class="user-stats-group page-user-dashboard__user-stats-group">
                            <div class=user-stats-group__inner>
                                <div class=user-stats-group__cell>
                                    <div class="user-stats-card user-stats-group__user-stats-card">
                                        <div class=user-stats-card__inner>
                                            <div class=user-stats-card__header>
                                                <div class="user-stats-icon user-stats-card__user-stats-icon"><svg
                                                        width=44 height=44>
                                                        <use xlink:href=#user-stats-1></use>
                                                    </svg> </div>
                                                <div class=user-stats-card__help>
                                                    <div class="user-stats-card__label user-stats-card__label--sm">
                                                        Today: </div>
                                                    <div class=user-stats-card__value> + $0.0000 </div>
                                                </div>
                                            </div>
                                            <div class=user-stats-card__body>
                                                <div class=user-stats-card__label> Total invested </div>
                                                <div
                                                    class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                                                    <div class=total-balance-widget__inner>
                                                        <div class=total-balance-widget__ticker> $ </div>
                                                        <div class=total-balance-widget__balance>
                                                            <div class=total-balance-widget__int> 0 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=user-stats-group__cell>
                                    <div class="user-stats-card user-stats-group__user-stats-card">
                                        <div class=user-stats-card__inner>
                                            <div class=user-stats-card__header>
                                                <div class="user-stats-icon user-stats-card__user-stats-icon"><svg
                                                        width=44 height=44>
                                                        <use xlink:href=#user-stats-2></use>
                                                    </svg> </div>
                                                <div class=user-stats-card__help>
                                                    <div class="user-stats-card__label user-stats-card__label--sm">
                                                        Today: </div>
                                                    <div class=user-stats-card__value> + $0.0000 </div>
                                                </div>
                                            </div>
                                            <div class=user-stats-card__body>
                                                <div class=user-stats-card__label> Total earned </div>
                                                <div
                                                    class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                                                    <div class=total-balance-widget__inner>
                                                        <div class=total-balance-widget__ticker> $ </div>
                                                        <div class=total-balance-widget__balance>
                                                            <div class=total-balance-widget__int> 0 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=user-stats-group__cell>
                                    <div class="user-stats-card user-stats-group__user-stats-card">
                                        <div class=user-stats-card__inner>
                                            <div class=user-stats-card__header>
                                                <div class="user-stats-icon user-stats-card__user-stats-icon"><svg
                                                        width=44 height=44>
                                                        <use xlink:href=#user-stats-3></use>
                                                    </svg> </div>
                                                <div class=user-stats-card__help>
                                                    <div class="user-stats-card__label user-stats-card__label--sm">
                                                        Partners: </div>
                                                    <div class=user-stats-card__value> 0 </div>
                                                </div>
                                            </div>
                                            <div class=user-stats-card__body>
                                                <div class=user-stats-card__label> Total turnover </div>
                                                <div
                                                    class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                                                    <div class=total-balance-widget__inner>
                                                        <div class=total-balance-widget__ticker> $ </div>
                                                        <div class=total-balance-widget__balance>
                                                            <div class=total-balance-widget__int> 0 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=user-stats-group__cell>
                                    <div class="user-stats-card user-stats-group__user-stats-card">
                                        <div class=user-stats-card__inner>
                                            <div class=user-stats-card__header>
                                                <div class="user-stats-icon user-stats-card__user-stats-icon"><svg
                                                        width=44 height=44>
                                                        <use xlink:href=#user-stats-4></use>
                                                    </svg> </div>
                                                <div class=user-stats-card__help>
                                                    <div class="user-stats-card__label user-stats-card__label--sm">
                                                        Today: </div>
                                                    <div class=user-stats-card__value> + $0.0000 </div>
                                                </div>
                                            </div>
                                            <div class=user-stats-card__body>
                                                <div class=user-stats-card__label> Total bonus </div>
                                                <div
                                                    class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                                                    <div class=total-balance-widget__inner>
                                                        <div class=total-balance-widget__ticker> $ </div>
                                                        <div class=total-balance-widget__balance>
                                                            <div class=total-balance-widget__int> 0 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-profile-gutter page-user-dashboard__user-profile-gutter">
                            <div class=user-profile-gutter__inner>
                                <div class=user-profile-gutter__deals-cell>
                                    <div class="table-card user-profile-gutter__table-card">
                                        <div class=table-card__header>
                                            <div class="justify-row table-card__justify-row">
                                                <div class=title-h5> Latest Deals in Real Time </div> <a
                                                    href=/user/investment class=user-arrow-link data-pjax=""><span
                                                        class="d-none d-sm-inline">Run your trading bots</span> <svg
                                                        width=20 height=20>
                                                        <use xlink:href=#arrow-right></use>
                                                    </svg></a>
                                            </div>
                                            <div class="deals-controls-row deals-table-card__deals-controls-row">
                                                <div class=deals-controls-row__inner>
                                                    <div class=deals-controls-row__controls-cell>
                                                        <div class=frame-controls-list><button
                                                                class="frame-controls-list__btn js-deal-info-btn active"
                                                                data-value=6H> 6H </button> <button
                                                                class="frame-controls-list__btn js-deal-info-btn"
                                                                data-value=1D> 1D </button> <button
                                                                class="frame-controls-list__btn js-deal-info-btn"
                                                                data-value=7D> 7D </button> <button
                                                                class="frame-controls-list__btn js-deal-info-btn"
                                                                data-value=30D> 1M </button></div>
                                                    </div>
                                                    <div class=deals-controls-row__result-cell>
                                                        <div class=my-trades-widget>
                                                            <div class=my-trades-widget__inner>
                                                                <div class=my-trades-widget__icon></div>
                                                                <div class=my-trades-widget__label> My trades: </div>
                                                                <div class=my-trades-widget__value><span
                                                                        class=js-deal-info-count></span> trades </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-results-row deals-table-card__deals-results-row">
                                                <div class=deals-results-row__inner>
                                                    <div
                                                        class="deals-results-row__percent-cell js-deal-info-positive-percent">
                                                    </div>
                                                    <div class=deals-results-row__scale-cell>
                                                        <div
                                                            class="deals-results-row__scale deals-results-row__scale--green js-deal-info-positive-scale">
                                                        </div>
                                                        <div
                                                            class="deals-results-row__scale deals-results-row__scale--red js-deal-info-negative-scale">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="deals-results-row__percent-cell js-deal-info-negative-percent">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive deals-table-card__table-responsive dragscroll">
                                            <table class="table table-card__table font-size-14 weight-600">
                                                <thead>
                                                    <tr>
                                                        <td>Pair (Ticker)</td>
                                                        <td>Trade Type</td>
                                                        <td>Entry Time</td>
                                                        <td>Entry Price</td>
                                                        <td>Close Time</td>
                                                        <td>Close Price</td>
                                                        <td>PnL (%)</td>
                                                    </tr>
                                                </thead>
                                                <tbody id=js-deals-tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-sui></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> SUI/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 05:57</td>
                                                        <td><span class=color-grey> 4.0607 USDT </span> </td>
                                                        <td>2025-08-14 09:55</td>
                                                        <td><span class=color-grey> 3.9854 USDT </span> </td>
                                                        <td><span class=color-green>1.8544%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-pepe></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> PEPE/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 08:00</td>
                                                        <td><span class=color-grey> 0.00001211 USDT </span> </td>
                                                        <td>2025-08-14 09:50</td>
                                                        <td><span class=color-grey> 0.00001194 USDT </span> </td>
                                                        <td><span class=color-green>1.4038%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-ada></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> ADA/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 09:28</td>
                                                        <td><span class=color-grey> 0.98950 USDT </span> </td>
                                                        <td>2025-08-14 09:43</td>
                                                        <td><span class=color-grey> 0.98200 USDT </span> </td>
                                                        <td><span class=color-green>0.7580%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-ada></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> ADA/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 07:03</td>
                                                        <td><span class=color-grey> 1.0163 USDT </span> </td>
                                                        <td>2025-08-14 09:40</td>
                                                        <td><span class=color-grey> 0.98280 USDT </span> </td>
                                                        <td><span class=color-green>3.2963%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-ondo></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> ONDO/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 05:11</td>
                                                        <td><span class=color-grey> 1.0945 USDT </span> </td>
                                                        <td>2025-08-14 09:01</td>
                                                        <td><span class=color-grey> 1.0601 USDT </span> </td>
                                                        <td><span class=color-green>3.1430%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-shib></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> SHIB/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 07:06</td>
                                                        <td><span class=color-grey> 0.00001386 USDT </span> </td>
                                                        <td>2025-08-14 08:55</td>
                                                        <td><span class=color-grey> 0.00001361 USDT </span> </td>
                                                        <td><span class=color-green>1.8038%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-xrp></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> XRP/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 08:01</td>
                                                        <td><span class=color-grey> 3.2502 USDT </span> </td>
                                                        <td>2025-08-14 08:44</td>
                                                        <td><span class=color-grey> 3.2251 USDT </span> </td>
                                                        <td><span class=color-green>0.7723%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-pol></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> POL/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 08:03</td>
                                                        <td><span class=color-grey> 0.25440 USDT </span> </td>
                                                        <td>2025-08-14 08:41</td>
                                                        <td><span class=color-grey> 0.25090 USDT </span> </td>
                                                        <td><span class=color-green>1.3758%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-avax></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> AVAX/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 07:03</td>
                                                        <td><span class=color-grey> 25.6300 USDT </span> </td>
                                                        <td>2025-08-14 08:02</td>
                                                        <td><span class=color-grey> 25.2700 USDT </span> </td>
                                                        <td><span class=color-green>1.4046%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-pol></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> POL/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 04:32</td>
                                                        <td><span class=color-grey> 0.26020 USDT </span> </td>
                                                        <td>2025-08-14 07:57</td>
                                                        <td><span class=color-grey> 0.25530 USDT </span> </td>
                                                        <td><span class=color-green>1.8832%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-link></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> LINK/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-green> Long </span> </td>
                                                        <td>2025-08-14 04:24</td>
                                                        <td><span class=color-grey> 24.2500 USDT </span> </td>
                                                        <td>2025-08-14 07:47</td>
                                                        <td><span class=color-grey> 23.4800 USDT </span> </td>
                                                        <td><span class=color-red>-3.1753%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-hbar></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> HBAR/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 05:12</td>
                                                        <td><span class=color-grey> 0.27182 USDT </span> </td>
                                                        <td>2025-08-14 07:44</td>
                                                        <td><span class=color-grey> 0.26926 USDT </span> </td>
                                                        <td><span class=color-green>0.9418%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-etc></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> ETC/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 03:51</td>
                                                        <td><span class=color-grey> 24.4000 USDT </span> </td>
                                                        <td>2025-08-14 07:21</td>
                                                        <td><span class=color-grey> 23.6400 USDT </span> </td>
                                                        <td><span class=color-green>3.1148%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-btc></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> BTC/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 00:40</td>
                                                        <td><span class=color-grey> 124046.27 USDT </span> </td>
                                                        <td>2025-08-14 07:20</td>
                                                        <td><span class=color-grey> 121743.44 USDT </span> </td>
                                                        <td><span class=color-green>1.8564%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-xrp></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> XRP/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 05:35</td>
                                                        <td><span class=color-grey> 3.2918 USDT </span> </td>
                                                        <td>2025-08-14 07:02</td>
                                                        <td><span class=color-grey> 3.2659 USDT </span> </td>
                                                        <td><span class=color-green>0.7868%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-near></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> NEAR/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 05:38</td>
                                                        <td><span class=color-grey> 3.0270 USDT </span> </td>
                                                        <td>2025-08-14 06:53</td>
                                                        <td><span class=color-grey> 2.9870 USDT </span> </td>
                                                        <td><span class=color-green>1.3214%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-sui></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> SUI/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-green> Long </span> </td>
                                                        <td>2025-08-14 05:29</td>
                                                        <td><span class=color-grey> 4.0845 USDT </span> </td>
                                                        <td>2025-08-14 06:13</td>
                                                        <td><span class=color-grey> 4.0322 USDT </span> </td>
                                                        <td><span class=color-red>-1.2805%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-shib></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> SHIB/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 05:06</td>
                                                        <td><span class=color-grey> 0.00001406 USDT </span> </td>
                                                        <td>2025-08-14 06:10</td>
                                                        <td><span class=color-grey> 0.00001379 USDT </span> </td>
                                                        <td><span class=color-green>1.9203%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-ondo></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> ONDO/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 03:50</td>
                                                        <td><span class=color-grey> 1.1099 USDT </span> </td>
                                                        <td>2025-08-14 06:04</td>
                                                        <td><span class=color-grey> 1.0749 USDT </span> </td>
                                                        <td><span class=color-green>3.1534%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-pepe></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> PEPE/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 02:59</td>
                                                        <td><span class=color-grey> 0.00001268 USDT </span> </td>
                                                        <td>2025-08-14 05:30</td>
                                                        <td><span class=color-grey> 0.00001224 USDT </span> </td>
                                                        <td><span class=color-green>3.4700%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-tao></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> TAO/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 04:30</td>
                                                        <td><span class=color-grey> 399.200 USDT </span> </td>
                                                        <td>2025-08-14 05:24</td>
                                                        <td><span class=color-grey> 393.800 USDT </span> </td>
                                                        <td><span class=color-green>1.3527%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-xlm></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> XLM/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 04:40</td>
                                                        <td><span class=color-grey> 0.46380 USDT </span> </td>
                                                        <td>2025-08-14 05:19</td>
                                                        <td><span class=color-grey> 0.45980 USDT </span> </td>
                                                        <td><span class=color-green>0.8624%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-ondo></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> ONDO/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 04:28</td>
                                                        <td><span class=color-grey> 1.1092 USDT </span> </td>
                                                        <td>2025-08-14 05:18</td>
                                                        <td><span class=color-grey> 1.0889 USDT </span> </td>
                                                        <td><span class=color-green>1.8301%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-pepe></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> PEPE/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 02:59</td>
                                                        <td><span class=color-grey> 0.00001268 USDT </span> </td>
                                                        <td>2025-08-14 04:28</td>
                                                        <td><span class=color-grey> 0.00001252 USDT </span> </td>
                                                        <td><span class=color-green>1.2618%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-sui></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> SUI/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-green> Long </span> </td>
                                                        <td>2025-08-14 03:51</td>
                                                        <td><span class=color-grey> 4.1770 USDT </span> </td>
                                                        <td>2025-08-14 04:11</td>
                                                        <td><span class=color-grey> 4.1451 USDT </span> </td>
                                                        <td><span class=color-red>-0.7637%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-uni></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> UNI/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-green> Long </span> </td>
                                                        <td>2025-08-14 00:40</td>
                                                        <td><span class=color-grey> 12.2150 USDT </span> </td>
                                                        <td>2025-08-14 03:20</td>
                                                        <td><span class=color-grey> 12.1180 USDT </span> </td>
                                                        <td><span class=color-red>-0.7941%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-render></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> RENDER/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-13 22:54</td>
                                                        <td><span class=color-grey> 4.2260 USDT </span> </td>
                                                        <td>2025-08-14 03:17</td>
                                                        <td><span class=color-grey> 4.1710 USDT </span> </td>
                                                        <td><span class=color-green>1.3015%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-render></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> RENDER/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-green> Long </span> </td>
                                                        <td>2025-08-13 23:41</td>
                                                        <td><span class=color-grey> 4.2100 USDT </span> </td>
                                                        <td>2025-08-14 02:43</td>
                                                        <td><span class=color-grey> 4.1340 USDT </span> </td>
                                                        <td><span class=color-red>-1.8052%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-sui></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> SUI/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-14 02:14</td>
                                                        <td><span class=color-grey> 4.1008 USDT </span> </td>
                                                        <td>2025-08-14 02:36</td>
                                                        <td><span class=color-grey> 4.0664 USDT </span> </td>
                                                        <td><span class=color-green>0.8389%</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=ticker-pair-widget>
                                                                <div class=ticker-pair-widget__inner>
                                                                    <div class=ticker-pair-widget__icons><svg width=25
                                                                            height=25 class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-near></use>
                                                                        </svg> <svg width=25 height=25
                                                                            class=ticker-pair-widget__icon>
                                                                            <use xlink:href=#ticker-usdt></use>
                                                                        </svg></div>
                                                                    <div class=ticker-pair-widget__label> NEAR/USDT
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class=color-red> Short </span> </td>
                                                        <td>2025-08-13 22:54</td>
                                                        <td><span class=color-grey> 3.0440 USDT </span> </td>
                                                        <td>2025-08-14 02:33</td>
                                                        <td><span class=color-grey> 3.0050 USDT </span> </td>
                                                        <td><span class=color-green>1.2812%</span> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <script>
                                        (function() {
                                            pageInits.push(function() {
                                                function updateUI(period, counts) {
                                                    var pos = counts.positive;
                                                    var neg = counts.negative;
                                                    var total = pos + neg;
                                                    $('.js-deal-info-count').text(total);
                                                    var posPerc = total > 0 ? (pos / total * 100).toFixed(2) + '%' : '0.00%';
                                                    var negPerc = total > 0 ? (neg / total * 100).toFixed(2) + '%' : '0.00%';
                                                    $('.js-deal-info-positive-percent').text(posPerc);
                                                    $('.js-deal-info-negative-percent').text(negPerc);
                                                    $('.js-deal-info-positive-scale').css('flex-basis', posPerc);
                                                    $('.js-deal-info-negative-scale').css('flex-basis', negPerc);
                                                    $('.js-deal-info-btn').removeClass('active');
                                                    $('.js-deal-info-btn[data-value="' + period + '"]').addClass('active')
                                                }

                                                function loadData($btn) {
                                                    var period = $btn.data('value');
                                                    $.getJSON('/user/deals/info', {
                                                        period: period
                                                    }).done(function(data) {
                                                        updateUI(period, data.result)
                                                    }).fail(function() {
                                                        console.error('Api error')
                                                    })
                                                }
                                                var $init = $('.js-deal-info-btn.active');
                                                if ($init.length) {
                                                    loadData($init)
                                                } else {
                                                    var $first = $('.js-deal-info-btn').first().addClass('active');
                                                    loadData($first)
                                                }
                                                $(document).on('click', '.js-deal-info-btn', function() {
                                                    var $btn = $(this);
                                                    if ($btn.hasClass('active')) return;
                                                    loadData($btn)
                                                })
                                            });
                                            pageDestroys.push(function() {
                                                $(document).off('click', '.js-deal-info-btn')
                                            })
                                        })()
                                    </script> <template id=js-deal-row-template>
                                        <tr>
                                            <td>
                                                <div class=ticker-pair-widget>
                                                    <div class=ticker-pair-widget__inner>
                                                        <div class=ticker-pair-widget__icons><svg width=25 height=25
                                                                class="ticker-pair-widget__icon js-deal-from-svg">
                                                                <use xlink:href=#ticker-></use>
                                                            </svg> <svg width=25 height=25
                                                                class="ticker-pair-widget__icon js-deal-to-svg">
                                                                <use xlink:href=#ticker-></use>
                                                            </svg></div>
                                                        <div class="ticker-pair-widget__label js-deal-tickers"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class=js-deal-direction></span></td>
                                            <td class=js-deal-open-time></td>
                                            <td><span class="color-grey js-deal-open-price"></span></td>
                                            <td class=js-deal-close-time></td>
                                            <td><span class="color-grey js-deal-close-price"></span></td>
                                            <td><span class=js-deal-pnl></span></td>
                                        </tr>
                                    </template>
                                    <script>
                                        var dealsSub = null;
                                        pageInits.push(function() {
                                            dealsSub = centrifuge.subscribe('deals-all', function(ctx) {
                                                var $tbody = $('#js-deals-tbody'),
                                                    deal = ctx.data;
                                                var $template = $($('#js-deal-row-template').html());
                                                $template.find('.js-deal-from-svg use').attr('xlink:href', '#ticker-' + deal.tickerFrom
                                                    .toLowerCase()).attr('href', '#ticker-' + deal.tickerFrom.toLowerCase());
                                                $template.find('.js-deal-to-svg use').attr('xlink:href', '#ticker-' + deal.tickerTo
                                                    .toLowerCase()).attr('href', '#ticker-' + deal.tickerTo.toLowerCase());
                                                $template.find('.js-deal-tickers').text(deal.tickerFrom + '/' + deal.tickerTo);
                                                $template.find('.js-deal-direction').addClass(deal.direction === 'long' ? 'color-green' :
                                                    'color-red').text(deal.direction.charAt(0).toUpperCase() + deal.direction.slice(1));
                                                $template.find('.js-deal-open-time').text(deal.openTime);
                                                $template.find('.js-deal-open-price').text(deal.openPrice + ' ' + deal.tickerTo);
                                                $template.find('.js-deal-close-time').text(deal.closeTime);
                                                $template.find('.js-deal-close-price').text(deal.closePrice + ' ' + deal.tickerTo);
                                                $template.find('.js-deal-pnl').addClass(parseFloat(deal.pnl) > 0 ? 'color-green' :
                                                    'color-red').text(deal.pnl + '%');
                                                $tbody.prepend($template);
                                                var $rows = $tbody.find('tr');
                                                if ($rows.length > 30) {
                                                    $rows.slice(30).remove()
                                                }
                                            })
                                        });
                                        pageDestroys.push(function() {
                                            if (dealsSub) {
                                                dealsSub.unsubscribe()
                                            }
                                        })
                                    </script>
                                </div>
                                <div class=user-profile-gutter__leaders-cell id=js-leaders-cell>
                                    <div
                                        class="user-banner-slider-block user-profile-gutter__user-banner-slider-block js-user-banner-slider-block">
                                        <div class=user-banner-slider-block__inner id=js-user-banner-slider>
                                            <div class=user-banner-slider-block__cell>
                                                <div class=user-banner-card>
                                                    <div class=user-banner-card__inner>
                                                        <div class=user-banner-card__icon><svg width=44 height=44>
                                                                <use xlink:href=#user-banner-1></use>
                                                            </svg> </div>
                                                        <div class=user-banner-card__body>
                                                            <div class=user-banner-card__title> Team Bonus up to $50,000
                                                            </div>
                                                            <div class=user-banner-card__content> Earn more together -
                                                                grow your team and <span>unlock bonuses up to
                                                                    $50,000</span> as your network expands. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=user-banner-slider-block__cell>
                                                <div class=user-banner-card>
                                                    <div class=user-banner-card__inner>
                                                        <div class=user-banner-card__icon><svg width=44 height=44>
                                                                <use xlink:href=#user-banner-2></use>
                                                            </svg> </div>
                                                        <div class=user-banner-card__body>
                                                            <div class=user-banner-card__title> Instant, Fee-Free
                                                                Withdrawals </div>
                                                            <div class=user-banner-card__content> Access your funds
                                                                anytime you want - <span>with zero withdrawal fees,
                                                                    always</span>. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=user-banner-slider-block__cell>
                                                <div class=user-banner-card>
                                                    <div class=user-banner-card__inner>
                                                        <div class=user-banner-card__icon><svg width=44 height=44>
                                                                <use xlink:href=#user-banner-3></use>
                                                            </svg> </div>
                                                        <div class=user-banner-card__body>
                                                            <div class=user-banner-card__title> You Relax, the Robot
                                                                Works 24/7 </div>
                                                            <div class=user-banner-card__content><span>Our automated
                                                                    system never sleeps</span> - it keeps working around
                                                                the clock to grow your earnings. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        pageInits.push(function() {
                                            $('#js-user-banner-slider').slick({
                                                slidesToShow: 1,
                                                slidesToScroll: 1,
                                                fade: !0,
                                                speed: 800,
                                                arrows: !1,
                                                dots: !0,
                                                infinite: !0,
                                                autoplay: !0,
                                                autoplaySpeed: 5000
                                            })
                                        });
                                        pageDestroys.push(function() {
                                            $('#js-user-banner-slider').slick('unslick')
                                        })
                                    </script>
                                    <div class="leaders-card user-profile-gutter__leaders-card">
                                        <div class=leaders-card__header>
                                            <div class="justify-row table-card__justify-row">
                                                <div class=title-h5> Top 5 Leaders </div> <a href=/user/partnership
                                                    class=user-arrow-link data-pjax=""><span
                                                        class="d-none d-sm-inline">Partnership</span> <svg width=20
                                                        height=20>
                                                        <use xlink:href=#arrow-right></use>
                                                    </svg></a>
                                            </div>
                                        </div>
                                        <div class=leaders-card__body>
                                            <table class=leaders-table>
                                                <thead>
                                                    <tr>
                                                        <td>№</td>
                                                        <td>Partner</td>
                                                        <td>Turnover</td>
                                                        <td class="d-none d-sm-table-cell">Bonus</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="empty-icon-text-widget color-green font-size-18">
                                                                <svg width=20 height=20>
                                                                    <use xlink:href=#top-medal></use>
                                                                </svg> <span>01</span></div>
                                                        </td>
                                                        <td>CryptoTrader2024</td>
                                                        <td>$600713.32</td>
                                                        <td class="d-none d-sm-table-cell">$11105.74</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="empty-icon-text-widget color-green font-size-18">
                                                                <svg width=20 height=20>
                                                                    <use xlink:href=#top-medal></use>
                                                                </svg> <span>02</span></div>
                                                        </td>
                                                        <td>BitMasterX</td>
                                                        <td>$499033.74</td>
                                                        <td class="d-none d-sm-table-cell">$8931.46</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="empty-icon-text-widget color-green font-size-18">
                                                                <svg width=20 height=20>
                                                                    <use xlink:href=#top-medal></use>
                                                                </svg> <span>03</span></div>
                                                        </td>
                                                        <td>BlockChainPro</td>
                                                        <td>$361312.26</td>
                                                        <td class="d-none d-sm-table-cell">$6769.52</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="empty-icon-text-widget color-green font-size-18">
                                                                <svg width=20 height=20>
                                                                    <use xlink:href=#top-medal></use>
                                                                </svg> <span>04</span></div>
                                                        </td>
                                                        <td>CoinSavvy</td>
                                                        <td>$257599.93</td>
                                                        <td class="d-none d-sm-table-cell">$4943.73</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="empty-icon-text-widget color-green font-size-18">
                                                                <svg width=20 height=20>
                                                                    <use xlink:href=#top-medal></use>
                                                                </svg> <span>05</span></div>
                                                        </td>
                                                        <td>DigitalGold</td>
                                                        <td>$248667.42</td>
                                                        <td class="d-none d-sm-table-cell">$4557.98</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=leaders-card__footer>
                                            <div class="ref-link-row user-profile-gutter__leaders-card">
                                                <div class=ref-link-row__inner>
                                                    <div class=ref-link-row__left>
                                                        <div class=form-label-row><label for=""
                                                                class=form-label-row__label> Promo Link </label> </div>
                                                        <div class=form-input-row><svg width=24 height=24
                                                                class=form-input-row__prepend>
                                                                <use xlink:href=#ref-link></use>
                                                            </svg> <input type=text
                                                                class="form-control form-control-lg"
                                                                value="https://cortextrade.ai/?ref=rameshk036"
                                                                readonly></div>
                                                    </div>
                                                    <div class=ref-link-row__right><button
                                                            class="btn btn-lg btn-success btn-burger js-copy"
                                                            data-text="https://cortextrade.ai/?ref=rameshk036"><svg
                                                                width=24 height=24>
                                                                <use xlink:href=#copy></use>
                                                            </svg> </button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=user-profile-gutter__chart-cell id=js-chart-cell>
                                    <div class="profit-chart-card user-profile-gutter__profit-chart-card">
                                        <div class=profit-chart-card__inner>
                                            <div class=profit-chart-card__header>
                                                <div class="title-h5 profit-chart-card__title-h5"> Your Profit, total
                                                </div>
                                                <div
                                                    class="frame-controls-list profit-chart-card__frame-controls-list">
                                                    <button class="frame-controls-list__btn js-period-btn active"
                                                        data-value=6H>6H</button> <button
                                                        class="frame-controls-list__btn js-period-btn"
                                                        data-value=1D>1D</button> <button
                                                        class="frame-controls-list__btn js-period-btn"
                                                        data-value=7D>7D</button> <button
                                                        class="frame-controls-list__btn js-period-btn"
                                                        data-value=30D>1M</button></div>
                                            </div>
                                            <div class="chart-profit-row profit-chart-card__chart-profit-row">
                                                <div class=chart-profit-row__widget>
                                                    <div class=chart-profit-row__label>Amount</div>
                                                    <div class="chart-profit-row__value js-profit-amount">+$0.00</div>
                                                </div>
                                                <div class=chart-profit-row__delimiter>|</div>
                                                <div class=chart-profit-row__widget>
                                                    <div class=chart-profit-row__label>Percent</div>
                                                    <div class="chart-profit-row__value js-profit-percent">+0.00%</div>
                                                </div>
                                            </div> <canvas id=js-profit-chart class=profit-chart-card__canvas></canvas>
                                        </div>
                                    </div>
                                    <script>
                                        pageInits.push(function() {
                                            $.getScript('https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js').done(function() {
                                                var ctx = document.getElementById('js-profit-chart').getContext('2d');
                                                var gradient = ctx.createLinearGradient(0, 0, 0, 300);
                                                gradient.addColorStop(0.16, 'rgba(0, 223, 129, 0.4)');
                                                gradient.addColorStop(0.5, 'rgba(0, 223, 129, 0.15)');
                                                gradient.addColorStop(0.99, 'rgba(0, 223, 129, 0)');
                                                var chart = new Chart(ctx, {
                                                    type: 'line',
                                                    data: {
                                                        labels: [],
                                                        datasets: [{
                                                            data: [],
                                                            fill: !0,
                                                            backgroundColor: gradient,
                                                            borderColor: 'rgba(255, 255, 255, 0.2)',
                                                            tension: 0.4,
                                                            pointRadius: 0,
                                                            pointHoverRadius: 10,
                                                            pointHitRadius: 10,
                                                            pointBackgroundColor: '#00DF81',
                                                            pointBorderColor: '#26744F',
                                                            pointBorderWidth: 10,
                                                            pointHoverBorderWidth: 10
                                                        }]
                                                    },
                                                    options: {
                                                        responsive: !0,
                                                        maintainAspectRatio: !1,
                                                        plugins: {
                                                            legend: {
                                                                display: !1
                                                            },
                                                            tooltip: {
                                                                callbacks: {
                                                                    title: function() {
                                                                        return ''
                                                                    },
                                                                    label: function(context) {
                                                                        return '+' + context.parsed.y.toFixed(2).replace('.',
                                                                            ',') + '%'
                                                                    }
                                                                },
                                                                bodyFont: {
                                                                    family: 'Manrope',
                                                                    size: 15,
                                                                    weight: 600
                                                                },
                                                                offset: 10,
                                                                caretSize: 0,
                                                                caretPadding: 10,
                                                                displayColors: !1,
                                                                backgroundColor: 'rgba(0, 0, 0, 0.7)',
                                                                borderColor: '#00DF81',
                                                                borderWidth: 2,
                                                                padding: 10,
                                                                cornerRadius: 8
                                                            }
                                                        },
                                                        scales: {
                                                            x: {
                                                                ticks: {
                                                                    align: 'end',
                                                                    font: {
                                                                        family: 'Manrope',
                                                                        size: 14,
                                                                        weight: 600,
                                                                        color: '#848484'
                                                                    }
                                                                },
                                                                grid: {
                                                                    display: !1
                                                                }
                                                            },
                                                            y: {
                                                                ticks: {
                                                                    crossAlign: 'far',
                                                                    padding: 5,
                                                                    font: {
                                                                        family: 'Manrope',
                                                                        size: 14,
                                                                        weight: 600,
                                                                        color: '#848484'
                                                                    },
                                                                    callback: function(val) {
                                                                        return val + '%'
                                                                    },
                                                                    maxTicksLimit: 7,
                                                                    autoSkip: !1
                                                                },
                                                                border: {
                                                                    display: !1
                                                                },
                                                                grid: {
                                                                    color: 'rgba(255, 255, 255, 0.05)',
                                                                    lineWidth: 2
                                                                },
                                                                beginAtZero: !0
                                                            }
                                                        }
                                                    }
                                                });

                                                function load(period) {
                                                    $.getJSON('/user/chart/profit', {
                                                        period: period
                                                    }).done(function(data) {
                                                        chart.data.labels = data.result.labels;
                                                        chart.data.datasets[0].data = data.result.percents;
                                                        chart.update();
                                                        $('.js-period-btn').removeClass('active');
                                                        $('.js-period-btn[data-value="' + period + '"]').addClass('active');
                                                        $('.js-profit-amount').text('+$' + data.result.total.amount.toFixed(4));
                                                        $('.js-profit-percent').text('+' + data.result.total.percent.toFixed(2) +
                                                            '%')
                                                    })
                                                }
                                                var initial = $('.js-period-btn.active').data('value');
                                                if (!initial) {
                                                    initial = $('.js-period-btn').first().addClass('active').data('value')
                                                }
                                                load(initial);
                                                $(document).on('click', '.js-period-btn', function() {
                                                    var btn = $(this);
                                                    if (btn.hasClass('active')) {
                                                        return
                                                    }
                                                    load(btn.data('value'))
                                                })
                                            })
                                        })
                                    </script>
                                </div>
                                <div class=user-profile-gutter__history-cell>
                                    <div class="table-card user-profile-gutter__table-card">
                                        <div class=table-card__header>
                                            <div class="justify-row table-card__justify-row">
                                                <div class=title-h5> Your Last transactions </div> <a href=/user/history
                                                    class=user-arrow-link data-pjax=""><span
                                                        class="d-none d-sm-inline">All transactions</span> <svg
                                                        width=20 height=20>
                                                        <use xlink:href=#arrow-right></use>
                                                    </svg></a>
                                            </div>
                                        </div>
                                        <div class="table-responsive dragscroll">
                                            <table class="table table-card__table font-size-14 weight-600">
                                                <thead>
                                                    <tr>
                                                        <td>Date and Time</td>
                                                        <td>Currency</td>
                                                        <td>Type</td>
                                                        <td>Amount</td>
                                                        <td>Status</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="empty-data-card table-card__empty-data-card"> You haven't made any
                                            transactions yet. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   