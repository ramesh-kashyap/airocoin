<article>
    <section class="invest affilates-link">
        <div class="invest__decoration">
            <div class="ellipse_blue__affilate">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-affilate.svg"
                    alt="decoration">
            </div>

            <div class="ellipse_pink__affilate">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-affilate-big.svg"
                    alt="decoration">
            </div>
        </div>

        <div class="affilates-link__header">
            <h1>
                My affiliate link
            </h1>

            <div class="pay__address--input hover">
                <p>{{ asset('') }}register?ref={{ Auth::user()->username }}</p>

                <div class="btn-copy">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/copy.svg" alt="icon">
                </div>
            </div>

            <div class="views">
                <p>2</p>
            </div>


            <div class="affilates-link__header--description">
                <p>
                    💎 Each user: 5% </p>
            </div>
        </div>

        <div class="statistics__table">
            <div class="statistics__table--decoration">
                <picture>
                    <source srcset="{{ asset('') }}frontend/img/cabinet/figure/arround-figure-piece_cabinet.webp"
                        type="image/webp">
                    <img src="{{ asset('') }}frontend/img/cabinet/figure/arround-figure-piece_cabinet.png"
                        width="693" height="233" alt="figure">
                </picture>

                <div class="ellipse-violet-statistic">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/around/ellipse-violet-statistic.svg"
                        alt="decoration">
                </div>

                <div class="ellipse-violet-vertical-statistic">
                    <img class="icon-svg"
                        src="{{ asset('') }}frontend/img/around/ellipse-violet-vertical-statistic.svg"
                        alt="decoration">
                </div>

                <div class="ellipse-blue-statistic">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/around/ellipse-blue-statistic.svg"
                        alt="decoration">
                </div>
            </div>

            <div class="affilate global__item">
                <div class="global__item--decoration">
                    <div class="world-map">
                        <img src="{{ asset('') }}frontend/img/cabinet/decoration/world-map.svg" width="361"
                            height="313" alt="decoration">
                    </div>

                    <div class="ellipse-violet__affilate">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_violet-affilate.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-violet__affilate second">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_violet-affilate.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-pink__affilate">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-affilate.svg"
                            alt="decoration">
                    </div>
                </div>

               

                <div class="affilate__description">
                    <div class="affilate__item">
                        <div class="affilate__item--decoration">
                            <img class="icon-svg"
                                src="{{ asset('') }}frontend/img/cabinet/gradient/gradient-affilate-item.svg"
                                alt="gradient">
                        </div>

                        <div class="affilate__item--info">
                            <div class="affilate__item--number">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/user-plus.svg"
                                    alt="icon">

                                <p>
                                    {{ $total_team }} </p>
                            </div>

                            <span>
                                All
                            </span>
                        </div>
                    </div>

                    <div class="affilate__item second">
                        <div class="affilate__item--decoration">
                            <img class="icon-svg"
                                src="{{ asset('') }}frontend/img/cabinet/gradient/gradient-affilate-item.svg"
                                alt="gradient">
                        </div>

                        <div class="affilate__item--info">
                            <div class="affilate__item--number">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/cabinet/icons/user-active.svg" alt="icon">

                                <p>
                                    {{ $active_total_team }} </p>
                            </div>

                            <span>
                                Active
                            </span>
                        </div>
                    </div>

                    <div class="team-invested">
                        <p>
                            {{ currency() }} {{ number_format($totalPackage, 2) }} </p>

                        <span class="global__small--text">
                            Team invested
                        </span>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="invest statistics affilates">
        <div class="invest__decoration">
            <div class="ellipse_blue__affilate">
                <img class="icon-svg"
                    src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-affilate-rotate.svg"
                    alt="decoration">
            </div>

            <div class="ellipse_pink__affilate">
                <img class="icon-svg"
                    src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-affilate-big-rotate.svg"
                    alt="decoration">
            </div>
        </div>

        <h1>
            Right Team
        </h1>

        <div class="table">
            <nav class="table__nav">
                <ul>
                    <a href="{{ route('user.referral-team') }}">
                        <li class="{{ menuActive('user.referral-team') }}">

                            Referral Team

                        </li>
                    </a>

                    <a href="{{ route('user.left-team') }}">
                        <li class="{{ menuActive('user.left-team') }}">

                            Left Team

                        </li>
                    </a>

                    <a href="{{ route('user.right-team') }}">
                        <li class="{{ menuActive('user.right-team') }}">

                            Right team

                        </li>
                    </a>
                    <a href="{{ route('user.tree-view') }}">
                        <li class="{{ menuActive('user.tree-view') }}">

                            Tree View

                        </li>
                    </a>
                </ul>
            </nav>

            <div class="table-statistics">
                <!--//level 1//-->

                <div class="table-statistics__content active" id="tabs1">


                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Date Joined
                            </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Name
                            </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Username
                            </p>
                        </div>

                       

                      

                        <div class="table__line--status">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Status
                            </p>
                        </div>

                        <div class="table__line--coin">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Email ID
                            </p>
                        </div>

                    </div>


                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                        <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                        @foreach ($direct_team as $value)

                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">
                                Date Joined
                            </p>

                            <div class="table__line--text">
                                <p>
                                    {{ date('D, d M Y', strtotime($value->created_at)) }}</p>
                            </div>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                                Name
                            </p>

                            <p class="table__line--text">
                                {{ $value->name }} </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                                Username
                            </p>

                            <p class="table__line--text">
                                {{ $value->username }} </p>
                        </div>

                        

                       

                        <div class="table__line--status">
                            <p class="table__line--title">
                                Status
                            </p>

                            <div class="btn">
                                <p>{{ $value->active_status }}</p>
                            </div>
                        </div>
                        <div class="table__line--coin">
                            <p class="table__line--title">
                                Email ID
                            </p>

                            <p class="table__line--text">
                                 <?php echo substr($value->email,0,6)."..".substr($value->email,-11);?> </p>
                        </div>

                    </div>


                    @endforeach

                    <?php }?>





                </div>
                {{ $direct_team->withQueryString()->links() }}


                <!--//leve2//-->

         

            </div>
        </div>
    </section>







</article>

