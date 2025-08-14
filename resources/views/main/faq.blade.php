
@include('layouts.mainsite.header')

  <main>
    <section class="other">
      <div class="other__decoration">
        <picture>
          <source srcset="{{asset('')}}frontend/img/bg/bg-main-other.webp" type="image/webp">
          <img src="{{asset('')}}frontend/img/bg/bg-main-other.jpg" width="2075" height="1384" alt="background">
        </picture>

        <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-main-other.svg" alt="decoration">
      </div>

      <div class="wrapper">
        <div class="other__header">
          <h1>
            Crypto {{siteName()}} FAQ
          </h1>

          <div class="global__small--header">
            <p>CHECK OUT POPULAR QUESTIONS AND ANSWERS</p>
          </div>
        </div>

        <div class="faq">
          <div class="faq__decoration">
            <picture>
              <source srcset="{{asset('')}}frontend/pic/figure/main-figure-faq.webp" type="image/webp">
              <img src="{{asset('')}}frontend/pic/figure/main-figure-faq.png" width="747" height="451" alt="figure">
            </picture>
          </div>

          <div class="faq__nav">
            <div class="faq__nav--result">
              <div class="gradient-faq">
                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-faq.svg" alt="gradient">
              </div>

              <div class="faq__around">
                <img src="{{asset('')}}frontend/img/around/ellipse-faq.png" width="41" height="41" alt="decoration">

                <div class="faq__around--gradient">
                  <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan-t.svg" alt="gradient">
                </div>
              </div>

              <span>Account</span>

              <p>
                <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
              </p>
            </div>

            <ul>
              <li class="active">
                <div class="gradient-faq">
                  <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-faq.svg" alt="gradient">
                </div>

                <div class="faq__around">
                  <img src="{{asset('')}}frontend/img/around/ellipse-faq.png" width="41" height="41" alt="decoration">

                  <div class="faq__around--gradient">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan-t.svg" alt="gradient">
                  </div>
                </div>

                <span>Account</span>
              </li>

              <li>
                <div class="gradient-faq">
                  <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-faq.svg" alt="gradient">
                </div>

                <div class="faq__around">
                  <img src="{{asset('')}}frontend/img/around/ellipse-faq.png" width="41" height="41" alt="decoration">

                  <div class="faq__around--gradient">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan-t.svg" alt="gradient">
                  </div>
                </div>

                <span>Investments</span>
              </li>

              <li>
                <div class="gradient-faq">
                  <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-faq.svg" alt="gradient">
                </div>

                <div class="faq__around">
                  <img src="{{asset('')}}frontend/img/around/ellipse-faq.png" width="41" height="41" alt="decoration">

                  <div class="faq__around--gradient">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan-t.svg" alt="gradient">
                  </div>
                </div>

                <span>Withdrawal</span>
              </li>

              <li>
                <div class="gradient-faq">
                  <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-faq.svg" alt="gradient">
                </div>

                <div class="faq__around">
                  <img src="{{asset('')}}frontend/img/around/ellipse-faq.png" width="41" height="41" alt="decoration">

                  <div class="faq__around--gradient">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan-t.svg" alt="gradient">
                  </div>
                </div>

                <span>Networking</span>
              </li>
            </ul>
          </div>

          <div class="faq__content">
            <img class="icon-svg" src="{{asset('')}}frontend/img/around/drop.png" width="120" height="107" alt="figure">

            <div class="tab active">
              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                  DO I FACE ANY RESTRICTIONS REGARDING ACCESS TO MY ACCOUNT?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   Permanently available 365 days a year, we ensure that you have access to your account. A current list of deposits, balance statistics, affiliate earnings and all account activity (withdrawals, investments, interest earned) are readily available for observation. Real-time updates are provided for each of these activities.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
              What steps should I take if I forget my secure two-factor authentication?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  In such a case, please contact our customer service department via the contact form on our website. In order to authenticate your identity, the support staff may inquire about security-related matters or request specific details regarding recent profile activity.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 Password entry is proving to be challenging. What can I do to recover my password?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  Please attempt the "Recovery Account" option initially if you are unable to log in. Should your personal and account information be inadequate, kindly reach out to our support center and furnish the necessary details.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 CAN MY ACCOUNT BE DELETED?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  It is not possible to delete a user account. All account information is encrypted and is not accessible to other users or corporate personnel in order to protect user privacy. Due to the fact that this information can only be used in accordance with the user's explicit consent, deleting an account is technically impossible and serves no purpose.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                  Do any limitations apply to the creation of numerous accounts?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   Creating an unlimited number of accounts is not possible. It is critical, nonetheless, to ensure that none of the three tiers of the affiliate program feature a referral link connecting these accounts. The firm reserves the right to instantaneously and without prior notice revoke access to any funds in these profiles in the event that this condition is violated.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                Can my payment information be modified or added to?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                 Updates to your wallet require a request sent to support@{{siteName()}}.cc from your old email address. Upon request, kindly enclose both your previous and current wallets.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 WHAT AUDIENCE HAVE YOU DEVELOPED YOUR WEBSITE FOR?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   Our program invites individuals and organizations from around the world to participate. It is easy for investors from all over the world to open an account with us, no matter where they are located.
                  </p>
                </div>
              </div>

              
            </div>

            <div class="tab">
              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 How can my income be increased or reinvested?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   To reinvest your earnings, locate your Available Balance and click the "INVEST" indicator that appears next to it. Proceed in the same manner as you would with a standard deposit. Although this approach does not yield a direct increase in earnings, it does obviate the necessity of withdrawing funds prior to re-depositing them. Instant reinvestment commences, and the moment you place a deposit, your funds begin to accrue interest.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
               Following the transfer of funds, how long does it take for the funds to be credited to my business account?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   The time required to credit your deposit is blockchain network-dependent and generally consists of three confirmations. Occasionally, your investment might not become visible for several hours. Check your account balance again after a period of time has passed.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                  Will the initial deposit be reimbursed once the 10x14 cycle has been completed?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                    No, the initial investment deposit is incorporated into one's daily income. Following fourteen calendar days, your investment will be terminated without the possibility of a refund. A 10% daily return exceeds 140% over the course of 14 calendar days (40% NET plus 100% principal).
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                  What is the anticipated rate of return on my investments?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                Throughout the 14-day investment period, an individual shall accrue a daily return of 10%. Throughout the entire cycle, the net return amounts to 40%, while no principal is returned. Incorporating the principal deposit into your payments yields a cumulative return on investment of 140% (40% NET plus 100% principal). In 14 days, the total investment reaches its break-even point.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 What are the acceptable methods of payment for deposits?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  As of now, the following payment methods are accepted: Bitcoin, Tron, USDT (TRC20, BEP20) and Litecoin. 
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 Am I permitted to make new investments at my convenience?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   Undoubtedly so! It is possible to establish multiple reservations utilizing distinct payment methods. There is no upper limit on the number of available deposit spaces. After three network confirmations, your investments will be credited to your account once the payment has been confirmed.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
               What is the minimum acceptable deposit?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   A minimum investment of merely 25 dollars is required. When processing invoices, over payments and underpayments are accepted. $30,000 is the utmost quantity permitted for a single investment transaction.
                  </p>
                </div>
              </div>
              
              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>
              
                <div class="faq__item--header">
              What are the steps involved in completing the initial deposit?
              
                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>
              
                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>
              
                  <p>
                Prior to initiating a deposit, membership registration is required. After concluding registration, log into your account using your username and password to make your initial investment. To make a deposit, select "Invest" from the account menu, then enter your preferred payment method and adhere to the straightforward on-screen instructions.
                  </p>
                </div>
              </div>
              
              
              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                What is the duration of my deposit?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  Once the deposit is deposited into your account, your investment will become operational for a duration of 14 calendar days (Monday through Sunday). Each may have an unlimited number of active deposits, and any profits generated from them will be credited individually.
                  </p>
                </div>
              </div>
            </div>

            <div class="tab">
              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 Am I able to withdraw funds on weekends?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                 Certainly, indeed! Payment requests are accepted on weekends. Our withdrawal service remains available even on weekends.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
               What is the duration required to execute inquiries for withdrawals?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  The withdrawal procedure may take up to 24 hours. Withdrawals are processed even on non-business days. At any given moment, you may have no more than three payments in the processing status.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 Which withdrawal quantities constitute the minimum and maximum?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  The minimum withdrawal quantity differs among cryptocurrencies: USDT (BEP20, TRC20) - $15, BTC - $50, TRX - $1 and LTC - 1$. This quantity will perpetually be equivalent in cryptocurrency using the prevailing exchange rate.  <br>Maximum withdrawal amount per transaction - $30.000
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
             How do I request a withdrawal of my earnings?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                   Navigate to the "Withdrawal" section of your dashboard and enter the desired withdrawal amount to withdraw your earnings. Verify that you have specified the cryptocurrency address to which you wish to receive your earnings in the payment system settings and that you have confirmed the request. These details can be specified with ease on the "Settings" page.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 What time of day is most favorable for profit withdrawals?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
            Profit withdrawal requests may be submitted at your convenience. After logging into your account, select "Withdraw" and provide confirmation of the desired withdrawal amount. Upon the conclusion of the transaction, your earnings will be deposited into the designated account at the specified time. 
                  </p>
                </div>
              </div>

          
            </div>

            <div class="tab">
              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                  Is a deposit prerequisite for the eligibility of an affiliate bonus?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                 No, there is no requirement for an active investment in order to begin promoting the platform and earning referral commissions. Simply register for an account and utilize your exclusive affiliate link to refer users to the platform.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
           How do I determine the total number of referrals I have made?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  Enter your credentials and proceed to the "Affiliates" area of your account. A comprehensive roster of your downlines, including every deposit made by them and the corresponding affiliate commissions credited to your account, can be found in that location.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
           Who is eligible to participate in the affiliate program for your platform?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  Registration for our affiliate program is mandatory on the {{siteName()}}. The purpose of the affiliate program is to offer financial incentives and technical support to enthusiastic advocates who wish to aid in the growth of our organization while receiving equitable remuneration for their endeavors.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                 Is each deposit referred eligible to receive an affiliate bonus?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
             Your affiliate bonus will be applied to all deposits, including reinvestments, made by your referrals. The amount of the affiliate commission in the network, for each of your referrals, is as follows: 5%-2%-1% for each of the three levels of the network.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
                Are there any restrictions on the earning potential of the affiliate bonus?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
             The potential earnings you can generate as an affiliate are limitless. The prospective commission earned by you is proportional to the deposits referred by your clients.
                  </p>
                </div>
              </div>

              <div class="faq__item">
                <div class="faq__item--decoration">
                  <div class="gradient__violet">
                    <img src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" width="100" height="100" alt="gradient">
                  </div>
                </div>

                <div class="faq__item--header">
         When do the affiliate incentives become accessible to the public?

                  <p>
                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13" alt="icon">
                  </p>
                </div>

                <div class="faq__item--description">
                  <div class="header__underline">
                    <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/underline-header.svg" alt="decoration">
                  </div>

                  <p>
                  Prior to approving the affiliate incentive, the system verifies and activates the partner's deposit.
                  </p>
                </div>
              </div>

              

              
            </div>
          </div>

          <div class="global__small--header">
            <img class="icon-svg" src="{{asset('')}}frontend/img/icons/star-six-blue.svg" alt="icon">

            <p>
              If you have more questions - ask our support 24/7
            </p>
          </div>
        </div>
      </div>
    </section>

      <section class="join">
        <div class="ellipse__blue--join">
          <img class="icon-svg" src="{{asset('')}}frontend/img/around/ellipse-blue-big-face.svg" alt="decoration">
        </div>

              <div class="run-text">
        <div class="run-text__wrapper">

<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>



        </div>

        <!-- <div aria-hidden="true" class="run-text__wrapper"> -->
        <div class="run-text__wrapper">

<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>
<div class="run-text__item"><p>140<span>%</span></p><span>profit</span><p>14</p><span>days</span></div>





        </div>
      </div>
        <div class="wrapper">
          <div class="ellipse-violet">
            <img class="icon-svg" src="{{asset('')}}frontend/img/around/ellipse-violet.svg" alt="decoration">
          </div>

          <div class="ellipse-blue">
            <img class="icon-svg" src="{{asset('')}}frontend/img/around/ellipse-blue.svg" alt="decoration">
          </div>

          <div class="join__description">
            <div class="join__decoration">
              <picture>
                <source srcset="{{asset('')}}frontend/img/bg/bg-face.webp" type="image/webp">
                <img src="{{asset('')}}frontend/img/bg/bg-face.png" width="1227" height="391" alt="figure">
              </picture>
            </div>

            <img class="icon-svg" src="{{asset('')}}frontend/img/icons/star-face.svg" alt="image">

            <h2 data-aos-anchor-placement="top-bottom" data-aos="zoom-in" data-aos-easing="ease-out-back">
              Join the Path to Financial Success with {{siteName()}}!<br>

              <span>
                Sign Up Now and Become<br>
                Part of Our Thriving Project!
              </span>
            </h2>

            <picture>
              <source media="(max-width: 479px)" srcset="{{asset('')}}frontend/pic/figure/face-figure-mob.webp">
              <source media="(max-width: 479px)" srcset="{{asset('')}}frontend/pic/figure/face-figure-mob.png">
              <source srcset="{{asset('')}}frontend/pic/figure/face-figure.webp" type="image/webp">
              <img src="{{asset('')}}frontend/pic/figure/face-figure.png" width="465" height="435" alt="figure" data-aos-anchor-placement="top-bottom" data-aos="fade-right" data-aos-easing="ease-out-back">
            </picture>

            <a href="signup.html" class="btn-registration" data-aos-anchor-placement="top-bottom" data-aos="fade-right" data-aos-delay="300">
              <div class="gradient__btn">
                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-btn.svg" alt="gradient">
              </div>

              <p>
                <img class="icon-svg" src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" alt="icon">
              </p>

              <span>
                Sign Up              </span>
            </a>
          </div>
        </div>
      </section>
    </main>



    @include('layouts.mainsite.footer')