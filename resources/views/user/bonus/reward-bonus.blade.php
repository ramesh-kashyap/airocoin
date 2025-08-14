

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
                Royalty Bonus
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
                            Rank                         </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Strong Group
                            </p>
                        </div>

                        <div class="table__line--coin">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                <span class="valuta-usd">Other Group</span>
                            </p>
                        </div>

                        <div class="table__line--coin">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                <span class="valuta-usd">Rewards</span>
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
                    
                    <?php 
                    
                    $levels = [
                        ["rank" => "Bronze", "strong_group" => "$2.5K", "other_group" => "$2.5K", "reward" => "$40", "level" => $first_lvl],
                        ["rank" => "Silver", "strong_group" => "$5K", "other_group" => "$5K", "reward" => "$60", "level" => $second_lvl],
                        ["rank" => "Platinum", "strong_group" => "$10K", "other_group" => "$10K", "reward" => "$120", "level" => $third_lvl],
                        ["rank" => "Titanium", "strong_group" => "$15K", "other_group" => "$15K", "reward" => "$150", "level" => $fourth_lvl],
                        ["rank" => "Gold", "strong_group" => "$20K", "other_group" => "$20K", "reward" => "$250", "level" => $fifth_lvl],
                        ["rank" => "Pearl", "strong_group" => "$25K", "other_group" => "$25K", "reward" => "$300", "level" => $sixth_lvl],
                        ["rank" => "Topaz", "strong_group" => "$30K", "other_group" => "$30K", "reward" => "$400", "level" => $seventh_lvl],
                        
                        // New levels from the second image
                        ["rank" => "Emerald", "strong_group" => "$1 Lac", "other_group" => "$1 Lac", "reward" => "$900", "level" => $eighth_lvl],
                        ["rank" => "Sapphire", "strong_group" => "$2 Lac", "other_group" => "$2 Lac", "reward" => "$1800", "level" => $ninth_lvl],
                        ["rank" => "Ruby", "strong_group" => "$5 Lac", "other_group" => "$5 Lac", "reward" => "$4500", "level" => $tenth_lvl],
                        ["rank" => "Diamond", "strong_group" => "$10 Lac", "other_group" => "$10 Lac", "reward" => "$9000", "level" => $eleventh_lvl],
                        ["rank" => "Blue Diamond", "strong_group" => "$25 Lac", "other_group" => "$25 Lac", "reward" => "$20,000", "level" => $twelfth_lvl],
                        ["rank" => "Crown", "strong_group" => "$50 Lac", "other_group" => "$50 Lac", "reward" => "$45,000", "level" => $thirteenth_lvl],
                        ["rank" => "Crown Ambassador", "strong_group" => "$1 Cr", "other_group" => "$1 Cr", "reward" => "$90,000", "level" => $fourteenth_lvl]
                    ];

                    ?>

                <?php foreach ($levels as $level) { 
                
                
                   $status = $level['level'] > 0 ? 'Achieved' : 'Pending';
                ?>
               
                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">
                           Rank
                            </p>

                            <div class="table__line--text">
                                <p>
                                <?= $level['rank'] ?></p>
                            </div>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                                Strong Group
                            </p>

                            <p class="table__line--text">
                          <?= $level['strong_group'] ?> </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                           Other Group
                            </p>

                            <p class="table__line--text">
                          <?= $level['other_group'] ?> </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                            Rewards
                            </p>

                            <p class="table__line--text">
                           <?= $level['reward'] ?> </p>
                        </div>

                        

                       

                        <div class="table__line--status">
                            <p class="table__line--title">
                            Status
                            </p>

                            <div class="btn">
                                <p><?= $status ?></p>
                            </div>
                        </div>
                        

                    </div>
                    
                       <?php } ?>



                </div>
                 
    
                </div>
            </div>
        </section>
    
    
    
    
    </article>
    