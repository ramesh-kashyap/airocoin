

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
                Transfer Fund Reports
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
                                Transfered Date
                                </p>
                            </div>
    
                            <div class="table__line--coin">
                                <p class="table__line--title">
    
                                </p>
    
                                <p class="table__line--text">
                                    <span class="valuta-usd">Transfer From</span>
                                </p>
                            </div>

                            <div class="table__line--coin">
                                <p class="table__line--title">
    
                                </p>
    
                                <p class="table__line--text">
                                    <span class="valuta-usd"> Transfer To</span>
                                </p>
                            </div>
                            <div class="table__line--coin">
                                <p class="table__line--title">
    
                                </p>
    
                                <p class="table__line--text">
                                    <span class="valuta-usd">Amount</span>
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
    
                        <div class="table__line">
                            
                            <div class="table__line--method">

                                <p class="table__line--title">
                                    Date Created
                                </p>
    
                                <div class="table__line--text">
                                    <p>
                                        {{ date('D, d M Y', strtotime($value->created_at)) }}</p>
                                </div>

                              
                            </div>
    
                           
    
                            <div class="table__line--date">

                                <p class="table__line--title">
                                    Transfer From
                                </p>
    
                                <div class="table__line--text">
                                    <p>
                                        {{$value->user_id_from}}</p>
                                </div>

                               
                            </div>
    
                            
    
                            <div class="table__line--date">
                              
                                <p class="table__line--title">
                                    Transfer To
                                </p>
    
                                <p class="table__line--text">
                                    {{ $value->user_id_to }} </p>

                              

                        </div>
                            

                            <div class="table__line--date">
                              
                                <p class="table__line--title">
                                    Amount 
                                 </p>
     
                                 <div class="btn">
                                     <p>  {{currency()}} {{ $value->amount }}</p>
                                 </div>
                            </div>


                           
    
                           
    
                            <div class="table__line--status">
                                <p class="table__line--title">
                                    Status
                                </p>
    
                                <div class="btn">
                                    <p> {{ ($value->user_id_to==Auth::user()->username)?"Credit":"Debit" }}</p>
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
    