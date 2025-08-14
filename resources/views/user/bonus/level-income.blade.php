

<article>


<style>
.invest .table__nav ul {
    display: ruby;
    justify-content: flex-start;
    align-content: center;
    align-items: center;
    width: 100%;
    line-height: 18px;
}
.new-li .active {
    pointer-events: none;
    color: #5967F6;
    border-color: rgba(0,0,0,0);
    background-color: rgba(20,22,38,.48);
    box-shadow: 0 3px 43px 0 rgba(221, 122, 237, 0.25);
}
.invest .bg-input {
    position: relative;
    display: flex;
    justify-content: flex-start;
    align-content: center;
    align-items: center;
    padding: 10px 5px 10px;
    width: calc(100% - 11px);
    max-width: 454px;
    border-radius: 9px;
    background: var(--cabinet_bg_settings);
    border: 1px solid var(--cabinet_bg_settings);
}
</style>
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
            Level Bonus
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
                    
                    
                        <nav class="table_nav" style="margin: 0 0 29px;
                        display: flex;
                        justify-content: flex-start;
                        align-content: center;
                        align-items: center;
                        width: 100%;">
                                            <ul style="display: ruby;
                        justify-content: flex-start;
                        align-content: center;
                        align-items: center;
                        width: 100%;
                        line-height: 18px;">



                      
                                <li style="
                                        display: flex;
                                        justify-content: center;
                                        align-content: center;
                                        align-items: center;
                                        position: relative;
                                        padding: 10px 18px;
                                        margin: 0 8px 0 0;
                                        font-weight: 700;
                                        border-radius: 10px;
                                        line-height: 1.92857;
                                        transition: 0.3s all;">
        
                                <div class="bg-input">
                                        <input type="text" style="" Placeholder="Search"
                                            name="search"  value="{{ @$search }}">
                                        </div>
        
                                </li>
                                
                                
                            
                          
                                <li style="
                                        display: flex;
                                        justify-content: center;
                                        align-content: center;
                                        align-items: center;
                                        position: relative;
                                        padding: 10px 18px;
                                        margin: 0 8px 0 0;
                                        font-weight: 700;
                                        border-radius: 10px;
                                        line-height: 1.92857;
                                        transition: 0.3s all;">
        
                                 <div class="bg-input">
                                        <input type="text" style="" Placeholder="Search"
                                            name="search"  value="{{ @$search }}">
                                        </div>
        
                                </li>
                            </a>
        
                          
        
                        </ul>
                        
                         
                   
                    
                    </nav>
                    
                        <!--<form action="{{ route('user.level-income') }}" method="GET" style="    width: 100%;">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-xl-4">-->
                        <!--            <div class="bg-input">-->
                        <!--                <input type="text" style="" Placeholder="Search"-->
                        <!--                    name="search"  value="{{ @$search }}">-->
                        <!--                </div>-->
                        <!--        </div>-->

                               
                        <!--        <div class="col-xl-4">-->
                        <!--            <div class="bg-input">-->
                        <!--                <select name="limit" style="" >-->
                        <!--                    <option value="10">10</option>-->
                        <!--                    <option value="25">25</option>-->
                        <!--                    <option value="50">50</option>-->
                        <!--                    <option value="100">100</option>-->
                        <!--                </select>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col">-->
                        <!--            <div class="bg-input">-->
                        <!--                <input type="submit" style="padding: 0.6rem 2rem;" name="submit"-->
                        <!--                    class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"-->
                        <!--                    value="Search" />-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col">-->
                        <!--            <div class="bg-input">-->
                        <!--                <a href="{{ route('user.level-income') }}" style="padding: 0.6rem 2rem;"-->
                        <!--                    name="reset"-->
                        <!--                    class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"-->
                        <!--                    value="Reset">Reset</a>-->
                        <!--            </div>-->
                        <!--        </div>-->
    
    
                        <!--    </div>-->
                        <!--</form>-->
                       
                    
                   
                    
                    

            <div class="table-statistics">


                <div class="table-statistics__content active" id="tabs1">

                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                            User ID                            </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Amount
                            </p>
                        </div>

                        <div class="table__line--coin">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                <span class="valuta-usd">From ID</span>
                            </p>
                        </div>

                        <div class="table__line--coin">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                <span class="valuta-usd">Level</span>
                            </p>
                        </div>

                       

                        <div class="table__line--status">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Remarks
                            </p>
                        </div>
                    </div>

                    <?php if(is_array($level_income) || is_object($level_income)){ ?>

                        <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                        @foreach ($level_income as $value)

                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">
                            User ID       
                            </p>

                            <div class="table__line--text">
                                <p>
                                {{ $value->user_id_fk }}</p>
                            </div>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                                Amount
                            </p>

                            <p class="table__line--text">
                            {{currency()}} {{ $value->comm }}  </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                            From ID
                            </p>

                            <p class="table__line--text">
                            {{ $value->rname }} </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                            Level
                            </p>

                            <p class="table__line--text">
                            {{ $value->level }} </p>
                        </div>

                        

                       

                        <div class="table__line--status">
                            <p class="table__line--title">
                            Remarks
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

             

            </div>
        </div>
    </section>




</article>
