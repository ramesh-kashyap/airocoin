
@include('layouts.mainsite.header')


<div class="greettingsPage">
    <div class="container">
        <div class="wrapIn">
            <h2 class="cap">Partners</h2>
            <span class="desr">Earn money by inviting friends!</span>
            <div class="clockBl">
                <span class="iconBl icon-wall-clock-11"></span>
                <span id="time"></span>
                <span id="date"></span>
            </div>
        </div>
        <div class="picture" style="background-image: url(/assets/c20a81c4/img/bgpartnerspage.png);"></div>
    </div>
</div>
<div class="aboutTxt">
    <div class="container">
        <div class="wrapIn">
            <div class="textBlock">
                <span class="text">What is a referral program?</span>
                <span class="desr">A referral program is a collaboration scheme where the company pays their clients for attracting new customers.</span>
                <p>With the help of the referral program, the company leverages the marketing costs, and provides the current partners with the opportunity to earn extra money.</p>
                <p>{{siteName()}} offers 2 types of cooperation: Representative and Affiliate program. The difference is in the scale of your promotion efforts. If you plan to recommend us to your family and friends, then a 3-level Affiliate program is right for you.</p>
                <p>If you wish to make a full-fledged business out of the referral program and have due network building experience, then you can apply for the Representative program.</p>
            </div>
            <div class="progList">
                <div class="item">
                    <span class="iconBl icon-excellence"></span>
                    <span class="tit">Staking <br> Bonus</span>
                    <span class="pr">5%- 11%</span>
                </div>
                <div class="item">
                    <span class="iconBl icon-leader-1"></span>
                    <span class="tit">Affiliate <br> program</span>
                    <span class="pr">5%</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="aboutPageTxt">
    <div class="textAbout">
        <div class="container">
            <div class="wrapIn">
                <div class="lineBonus">
                    <div class="left">
                        <div class="titleBl">
                            <h2 class="cap">Bonus program <span class="colorTxt">Sip<span>Fx</span></span>
                            </h2>
                        </div>
                        <div class="textBlock">
                            <p>In addition to the Affiliate and Representative program, {{siteName()}} has a Bonus program. How do you get bonuses?</p>
                            <p>It's simple. Depending on the size of your investment and the turnover of your listed partners, you will get a certain reward. The Bonus program has 9 ranks, depending on your affiliate performance. The higher your rank, the bigger your bonus!</p>
                            <p>Please, refer to the table for the detailed bonus terms.</p>
                            <p>The bonus is credited to your deposit and your investment returns are also credited to it.</p>
                            <br><br>
                            <br><br>
                        </div>
                    </div>

                   
                  
                </div>
                <div class="lineStep">
                    <div class="list">
                        <div class="item">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="txt">Register for an account and get a referral link.</span>
                        </div>
                        <div class="item">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="txt">Attract new partners using your link.</span>
                        </div>
                        <div class="item">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>3</span>
                            </div>
                            <span class="txt">Create your own Affiliate network.</span>
                        </div>
                        <div class="item">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>4</span>
                            </div>
                            <b class="txt">Get rewards for your network performance</b>
                        </div>
                    </div>
                    <div class="pic" style="background-image: url(/assets/c20a81c4/img/pic_partners.jpg);"></div>
                                            <a href="/login/" class="btn btnWhite">start earning</a>
                                    </div>
            </div>
        </div>
    </div>
</div>
<div class="bonusProgBl">
    <div class="container">
        <div class="wrapIn">
            <div class="left">
                <div class="titleBl">
                    <h2 class="cap">Description of the <span class="colorTxt">Bonus program</span> </h2>
                </div>
                <div class="textBlock">
                    <p>Depending on the turnover of your structure (all the partners and you), you will receive a bonus from <b>$150 to $80,000</b>.</p>
                    <p>Turnover is the volume of investments made by your referrals, depending on their line \ level.</p>
                    <b>There are 2 ways to increase your turnover:</b>
                    <ul>
                        <li>increase the volume of your personal investment,</li>
                        <li>wait until someone from the depths of your structure makes an investment for the missing amount.</li>
                    </ul>
                    <p>As a rule, the second option works faster if your structure consists of at least 4 levels.</p>
                    <p>There are 9 levels to the Affiliate network. Keep in mind,  while 100% of your referrals' deposits are counted for turnover at level 1, only 1% of investments is included from level 9.</p>
                </div>
            </div>
          
        </div>
    </div>
</div>


@include('layouts.mainsite.footer')