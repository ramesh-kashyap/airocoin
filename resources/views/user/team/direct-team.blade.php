<style>
    @media (max-width: 1749px) {
        .page-user-affiliate .page-user-affiliate__inner {
            gap: 24px;
        }
    }

    .page-user-affiliate .page-user-affiliate__inner {
        gap: 24px;
    }
</style>
<div class="page-user-affiliate__inner">
    <div class="page-user-affiliate__link-cell" style="width: 100%">
        <div class="ref-link-card page-user-affiliate__ref-link-card">
            <div class="ref-link-card__inner">
                <div class="title-h5"> Share your Promo Link. Get more Bonuses </div>
                <div class="ref-link-card__widgets">
                    <div class="ref-link-card__widget">
                        <div class="ref-link-card__label"> Turnover, level 1 </div>
                        <div class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                            <div class="total-balance-widget__inner">
                                <div class="total-balance-widget__ticker">$</div>
                                <div class="total-balance-widget__balance">
                                    <div class="total-balance-widget__int"> 0 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-link-card__widget">
                        <div class="ref-link-card__label"> Bonuses, total </div>
                        <div
                            class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                            <div class="total-balance-widget__inner">
                                <div class="total-balance-widget__ticker">$</div>
                                <div class="total-balance-widget__balance">
                                    <div class="total-balance-widget__int"> 0 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-link-card__widget">
                        <div class="ref-link-card__label"> Partners, total </div>
                        <div
                            class="total-balance-widget total-balance-widget--sm user-stats-card__total-balance-widget">
                            <div class="total-balance-widget__inner">
                                <div class="total-balance-widget__balance">
                                    <div class="total-balance-widget__int"> 0 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ref-link-row ref-link-card__ref-link-row">
                    <div class="ref-link-row__inner">
                        <div class="ref-link-row__left">
                            <div class="form-label-row"><label for="" class="form-label-row__label"> Promo Link
                                </label> </div>
                            <div class="form-input-row"><svg width="24" height="24"
                                    class="form-input-row__prepend">
                                    <use xlink:href="#ref-link"></use>
                                </svg> <input type="text" class="form-control form-control-lg"
                                    value="https://cortextrade.ai/?ref=rameshk036" readonly=""></div>
                        </div>
                        <div class="ref-link-row__right"><button class="btn btn-lg btn-success btn-burger js-copy"
                                data-text="https://cortextrade.ai/?ref=rameshk036"><svg width="24" height="24">
                                    <use xlink:href="#copy"></use>
                                </svg> </button> </div>
                    </div>
                </div>
                <div class="ref-link-card__footer"><a href="/partnership" class="user-arrow-link"
                        data-pjax=""><span>More about Partnership</span> <svg width="20" height="20">
                            <use xlink:href="#arrow-right"></use>
                        </svg></a> </div>
            </div>
        </div>
    </div>
</div>
<div class="table-card page-user-affiliate__table-card">
    <div class="table-card__header">
        <div class="user-tabs-list">
            <div class="user-tabs-list__inner">
                <div class="user-tabs-list__item"><a href="/user/partnership?lvl=1"
                        class="user-tabs-list__link active js-noscroll" data-pjax=""> Level 1 </a> </div>
                <div class="user-tabs-list__item"><a href="/user/partnership?lvl=2"
                        class="user-tabs-list__link  js-noscroll" data-pjax=""> Level 2 </a> </div>
                <div class="user-tabs-list__item"><a href="/user/partnership?lvl=3"
                        class="user-tabs-list__link  js-noscroll" data-pjax=""> Level 3 </a> </div>
            </div>
        </div>
    </div>
    <div class="table-responsive dragscroll">
        <table class="table table-card__table font-size-14 weight-600">
            <thead>
                <tr>
                    <td>    Date Joined</td>
                    <td>Name</td>
                    <td>Username</td>
                    <td>Email ID</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                  <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                        <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                        @foreach ($direct_team as $value)

                <tr>
                    <td>{{ date('D, d M Y', strtotime($value->created_at)) }}</td>
                    <td> {{ $value->name }}</td>
                    <td> {{ $value->username }} </td>
                        <td>{{ $value->email }}</td>
                    <td>{{ $value->active_status }}</td>
                
                </tr>
               
                  @endforeach

                    <?php }?>
          
        </table>
    </div>

</div>
</div>
