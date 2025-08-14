

        <article>


            <style>.invest .table__nav ul {
                display: ruby;
                justify-content: flex-start;
                align-content: center;
                align-items: center;
                width: 100%;
                line-height: 18px;
            }</style>

            <section class="invest statistics">
                <div class="invest__decoration">
                    <div class="ellipse-blue__big">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest-big.svg" alt="decoration">
                    </div>

                    <div class="ellipse-blue__small">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-invest-small.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-pink__big">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-invest-big.svg" alt="decoration">
                    </div>

                    <div class="ellipse-pink__statistics">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-statistics.svg" alt="decoration">
                    </div>
                </div>

                <h1>
                    Roi Bonus
                </h1>

                <div class="table">
                    <nav class="table__nav">
                         <ul>



                        <a href="{{ route('user.level-income') }}">
                                <li class="{{ menuActive('user.level-income') }}">
        
                                    Level Bonus
        
                                </li>
                            </a>

                            <a href="{{ route('user.roi-bonus') }}">
                                <li class="{{ menuActive('user.roi-bonus') }}">
        
                                  Roi  Bonus
        
                                </li>
                            </a>
        
                          
                            <a href="{{ route('user.direct-bonus') }}">
                            <li class="{{ menuActive('user.direct-bonus') }}">
        
                                   
                                Direct Bonus
        
                                </li>
                            </a>
                          
                            <a href="{{ route('user.DepositHistory') }}">
                                <li class="{{ menuActive('user.DepositHistory') }}">
        
                                    Deposits
        
                                </li>
                            </a>

                            <a href="{{ route('user.Withdraw-History') }}">
                                <li class="{{ menuActive('user.Withdraw-History') }}">
        
                                    Withdrawals
        
                                </li>
                            </a>

                            <a href="{{ route('user.fundHistory') }}">
                                <li class="{{ menuActive('user.fundHistory') }}">
        
                                    Fund Reports
        
                                </li>
                            </a>
                            
                            
                              <a href="{{ route('user.transferfundhistory') }}">
                                <li class="{{ menuActive('user.transferfundhistory') }}">
        
                                   Transfer Fund Reports
        
                                </li>
                            </a>
                             <a href="{{ route('user.reward-bonus') }}">
                                <li class="{{ menuActive('user.reward-bonus') }}">
        
                                   Reward Bonus
        
                                </li>
                            </a>
                        </ul>
                    </nav>

                    <div class="table-statistics">


                        <div class="table-statistics__content active" id="tabs1">

                            <div class="table__line">
                                <div class="table__line--method">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                    Date Created
                                    </p>
                                </div>

                                <div class="table__line--date">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Package
                                    </p>
                                </div>

                                <div class="table__line--coin">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        <span class="valuta-usd">Commission</span>
                                    </p>
                                </div>

                               

                                <div class="table__line--status">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Description
                                    </p>
                                </div>
                            </div>

                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                @foreach ($level_income as $value)
        
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
                                        Package
                                    </p>
        
                                    <p class="table__line--text">
                                        {{currency()}} {{ $value->amt }} </p>
                                </div>
        
                                <div class="table__line--date">
                                    <p class="table__line--title">
                                        Commission
                                    </p>
        
                                    <p class="table__line--text">
                                        {{currency()}} {{ $value->comm }} </p>
                                </div>
        
                                
        
                               
        
                                <div class="table__line--status">
                                    <p class="table__line--title">
                                        Description
                                    </p>
        
                                    <div class="btn">
                                        <p>{{ $value->remarks }}</p>
                                    </div>
                                </div>
                                
        
                            </div>
        
                            @endforeach

                            <?php }?>
                
        
        
        
                            {{ $level_income->withQueryString()->links() }}





                        </div>

                        <div class="table-statistics__content" id="tabs3">
                            <div class="table__line">
                                <div class="table__line--method">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Method
                                    </p>
                                </div>

                                <div class="table__line--date">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Date Created
                                    </p>
                                </div>

                                <div class="table__line--coin">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        <span class="valuta-usd active">USD</span>/<span
                                            class="valuta-coin">Coin</span>
                                    </p>
                                </div>

                                <div class="table__line--link">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Type
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





                        </div>

                        <div class="table-statistics__content" id="tabs2">
                            <div class="table__line">
                                <div class="table__line--method">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Method
                                    </p>
                                </div>

                                <div class="table__line--date">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Date Created
                                    </p>
                                </div>

                                <div class="table__line--coin">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        <span class="valuta-usd active">USD</span>/<span
                                            class="valuta-coin">Coin</span>
                                    </p>
                                </div>

                                <div class="table__line--link">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        TXID
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



                        </div>

                        <div class="table-statistics__content" id="tabs5">
                            <div class="table__line">
                                <div class="table__line--method">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Method
                                    </p>
                                </div>

                                <div class="table__line--date">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Date Created
                                    </p>
                                </div>

                                <div class="table__line--coin">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        <span class="valuta-usd active">USD</span>/<span
                                            class="valuta-coin">Coin</span>
                                    </p>
                                </div>

                                <div class="table__line--link">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Level / User
                                    </p>
                                </div>

                                <div class="table__line--status">
                                    <p class="table__line--title">

                                    </p>

                                    <p class="table__line--text">
                                        Deposit
                                    </p>
                                </div>
                            </div>




                        </div>


                    </div>
                </div>
            </section>




        </article>
