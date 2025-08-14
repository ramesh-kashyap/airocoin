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
                <h1 data-aos-anchor-placement="top-bottom" data-aos="zoom-in" data-aos-easing="ease-out-back">
                    Contact Us
                </h1>

                <div class="global__small--header" data-aos-anchor-placement="top-bottom" data-aos="zoom-in"
                    data-aos-easing="ease-out-back" data-aos-delay="300">
                    <p>
                        Client & Tech Support 24/7
                    </p>

                    <span>
                        <b>
                            Be careful! We have only one official telegram
                        </b>

                        <a class="btn-support" href="https://t.me/{{siteName()}}_support" target="_blank">
                            <!-- <img class="icon-svg" src="{{asset('')}}frontend/img/icons/chat.svg" alt="icon"> -->
                            <img class="icon-svg" src="{{asset('')}}frontend/img/icons/support.svg" width="30" alt="icon">

                            <!-- @ale_garmash -->
                            Support
                        </a>

                        <a class="btn-support" href="https://t.me/{{siteName()}}_chat" target="_blank">
                            <img class="icon-svg" src="{{asset('')}}frontend/img/icons/chat.svg" alt="icon">

                            <!-- @ale_garmash -->
                            Chat
                        </a>
                    </span>
                </div>
            </div>

            <div class="contacts">
                <div class="contacts__decoration">
                    <picture>
                        <source srcset="{{asset('')}}frontend/pic/figure/contacts.webp" type="image/webp">
                        <img src="{{asset('')}}frontend/pic/figure/contacts.png" width="384" height="394" alt="figure">
                    </picture>
                </div>

                <form action="" method="post" class="form" data-aos-anchor-placement="top-bottom"
                    data-aos="fade-right">
                    <div class="form__decoration">
                        <picture>
                            <source srcset="{{asset('')}}frontend/pic/figure/form-contacts.webp" type="image/webp">
                            <img src="{{asset('')}}frontend/pic/figure/form-contacts.png" width="256" height="252" alt="figure">
                        </picture>
                    </div>

                    <div class="bg__desktop">
                        <img class="icon-svg" src="{{asset('')}}frontend/img/bg/form-contacts.svg" alt="form">
                    </div>

                    <div class="bg__mobile">
                        <img class="icon-svg" src="{{asset('')}}frontend/img/bg/form-contacts-mob.svg" alt="form">
                    </div>

                    <div class="bg__mobile--small">
                        <img class="icon-svg" src="{{asset('')}}frontend/img/bg/form-contacts-mob-small.svg" alt="form">
                    </div>

                    <div class="form__input">
                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/icons/login-user.svg" alt="icon">
                            </div>
                            <input type="text" name="name" placeholder="Username" value="">
                        </label>

                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/icons/email.svg" alt="icon">
                            </div>
                            <input type="email" name="email" placeholder="Email" value="">
                        </label>

                        <div class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/icons/country.svg" alt="icon">
                            </div>

                            <input hidden type="text" id="select_country" name="country" placeholder="Country"
                                value="United States">

                            <div class="drop-down">
                                <div class="result">
                                    <p id="select_country2">
                                        United States </p>
                                </div>

                                <span class="drop-down__btn">
                                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13"
                                        alt="icon">
                                </span>

                                <div class="drop-down__list">
                                    <div class="drop-down__content" custom-container>
                                        <input class="drop-down__search" type="text" name="search"
                                            placeholder="Search...">

                                        <ul>
                                            <li>Afghanistan</li>
                                            <li>Aland Islands</li>
                                            <li>Albania</li>
                                            <li>Algeria</li>
                                            <li>American Samoa</li>
                                            <li>Andorra</li>
                                            <li>Angola</li>
                                            <li>Anguilla</li>
                                            <li>Antarctica</li>
                                            <li>Antigua and Barbuda</li>
                                            <li>Argentina</li>
                                            <li>Armenia</li>
                                            <li>Aruba</li>
                                            <li>Australia</li>
                                            <li>Austria</li>
                                            <li>Azerbaijan</li>
                                            <li>Bahamas</li>
                                            <li>Bahrain</li>
                                            <li>Bangladesh</li>
                                            <li>Barbados</li>
                                            <li>Belarus</li>
                                            <li>Belgium</li>
                                            <li>Belize</li>
                                            <li>Benin</li>
                                            <li>Bermuda</li>
                                            <li>Bhutan</li>
                                            <li>Bolivia</li>
                                            <li>Bosnia and Herzegovina</li>
                                            <li>Botswana</li>
                                            <li>Bouvet Island</li>
                                            <li>Brazil</li>
                                            <li>British Virgin Islands</li>
                                            <li>Brunei</li>
                                            <li>Bulgaria</li>
                                            <li>Burkina Faso</li>
                                            <li>Burundi</li>
                                            <li>Cambodia</li>
                                            <li>Cameroon</li>
                                            <li>Canada</li>
                                            <li>Cape Verde</li>
                                            <li>Cayman Islands</li>
                                            <li>Central African Republic</li>
                                            <li>Chad</li>
                                            <li>Chile</li>
                                            <li>China</li>
                                            <li>Christmas Island</li>
                                            <li>Cocos Islands</li>
                                            <li>Colombia</li>
                                            <li>Comoros</li>
                                            <li>Congo Democratic Republic</li>
                                            <li>Congo Republic</li>
                                            <li>Cook Islands</li>
                                            <li>Costa Rica</li>
                                            <li>Croatia</li>
                                            <li>Cuba</li>
                                            <li>Curacao</li>
                                            <li>Cyprus</li>
                                            <li>Czech Republic</li>
                                            <li>Denmark</li>
                                            <li>Djibouti</li>
                                            <li>Dominica</li>
                                            <li>Dominican Republic</li>
                                            <li>East Timor</li>
                                            <li>Ecuador</li>
                                            <li>Egypt</li>
                                            <li>El Salvador</li>
                                            <li>Equatorial Guinea</li>
                                            <li>Eritrea</li>
                                            <li>Estonia</li>
                                            <li>Ethiopia</li>
                                            <li>Fiji</li>
                                            <li>Finland</li>
                                            <li>France</li>
                                            <li>French Guiana</li>
                                            <li>French Polynesia</li>
                                            <li>Gabon</li>
                                            <li>Gambia</li>
                                            <li>Georgia</li>
                                            <li>Germany</li>
                                            <li>Ghana</li>
                                            <li>Gibraltar</li>
                                            <li>Greece</li>
                                            <li>Greenland</li>
                                            <li>Grenada</li>
                                            <li>Guadeloupe</li>
                                            <li>Guam</li>
                                            <li>Guatemala</li>
                                            <li>Guernsey</li>
                                            <li>Guinea</li>
                                            <li>Guinea-Bissau</li>
                                            <li>Guyana</li>
                                            <li>Haiti</li>
                                            <li>Honduras</li>
                                            <li>Hong Kong</li>
                                            <li>Hungary</li>
                                            <li>Iceland</li>
                                            <li>India</li>
                                            <li>Indonesia</li>
                                            <li>Iran</li>
                                            <li>Iraq</li>
                                            <li>Ireland</li>
                                            <li>Isle of Man</li>
                                            <li>Israel</li>
                                            <li>Italy</li>
                                            <li>Ivory Coast</li>
                                            <li>Jamaica</li>
                                            <li>Japan</li>
                                            <li>Jersey</li>
                                            <li>Jordan</li>
                                            <li>Kazakhstan</li>
                                            <li>Kenya</li>
                                            <li>Kiribati</li>
                                            <li>Kuwait</li>
                                            <li>Kyrgyzstan</li>
                                            <li>Laos</li>
                                            <li>Latvia</li>
                                            <li>Lebanon</li>
                                            <li>Lesotho</li>
                                            <li>Liberia</li>
                                            <li>Libya</li>
                                            <li>Liechtenstein</li>
                                            <li>Lithuania</li>
                                            <li>Luxembourg</li>
                                            <li>Macao</li>
                                            <li>Macedonia</li>
                                            <li>Madagascar</li>
                                            <li>Malawi</li>
                                            <li>Malaysia</li>
                                            <li>Maldives</li>
                                            <li>Mali</li>
                                            <li>Malta</li>
                                            <li>Marshall Islands</li>
                                            <li>Martinique</li>
                                            <li>Mauritania</li>
                                            <li>Mauritius</li>
                                            <li>Mayotte</li>
                                            <li>Mexico</li>
                                            <li>Micronesia</li>
                                            <li>Moldova</li>
                                            <li>Monaco</li>
                                            <li>Mongolia</li>
                                            <li>Montenegro</li>
                                            <li>Montserrat</li>
                                            <li>Morocco</li>
                                            <li>Mozambique</li>
                                            <li>Myanmar</li>
                                            <li>Namibia</li>
                                            <li>Nauru</li>
                                            <li>Nepal</li>
                                            <li>Netherlands</li>
                                            <li>New Caledonia</li>
                                            <li>New Zealand</li>
                                            <li>Nicaragua</li>
                                            <li>Niger</li>
                                            <li>Nigeria</li>
                                            <li>Niue</li>
                                            <li>Norfolk Island</li>
                                            <li>North Korea</li>
                                            <li>Northern Mariana Islands</li>
                                            <li>Norway</li>
                                            <li>Oman</li>
                                            <li>Pakistan</li>
                                            <li>Palau</li>
                                            <li>Palestinian Territory</li>
                                            <li>Panama</li>
                                            <li>Papua New Guinea</li>
                                            <li>Paraguay</li>
                                            <li>Peru</li>
                                            <li>Philippines</li>
                                            <li>Pitcairn</li>
                                            <li>Poland</li>
                                            <li>Portugal</li>
                                            <li>Puerto Rico</li>
                                            <li>Qatar</li>
                                            <li>Reunion</li>
                                            <li>Romania</li>
                                            <li>Russia</li>
                                            <li>Rwanda</li>
                                            <li>Saint Barthelemy</li>
                                            <li>Saint Helena</li>
                                            <li>Saint Kitts and Nevis</li>
                                            <li>Saint Lucia</li>
                                            <li>Saint Martin</li>
                                            <li>Saint Pierre and Miquelon</li>
                                            <li>Saint Vincent and the Grenadines</li>
                                            <li>Samoa</li>
                                            <li>San Marino</li>
                                            <li>Sandwich Islands</li>
                                            <li>Sao Tome and Principe</li>
                                            <li>Saudi Arabia</li>
                                            <li>Senegal</li>
                                            <li>Serbia</li>
                                            <li>Seychelles</li>
                                            <li>Sierra Leone</li>
                                            <li>Singapore</li>
                                            <li>Sint Maarten</li>
                                            <li>Slovakia</li>
                                            <li>Slovenia</li>
                                            <li>Solomon Islands</li>
                                            <li>Somalia</li>
                                            <li>South Africa</li>
                                            <li>South Korea</li>
                                            <li>South Sudan</li>
                                            <li>Spain</li>
                                            <li>Sri Lanka</li>
                                            <li>Sudan</li>
                                            <li>Suriname</li>
                                            <li>Swaziland</li>
                                            <li>Sweden</li>
                                            <li>Switzerland</li>
                                            <li>Syria</li>
                                            <li>Taiwan</li>
                                            <li>Tajikistan</li>
                                            <li>Tanzania</li>
                                            <li>Thailand</li>
                                            <li>Togo</li>
                                            <li>Tokelau</li>
                                            <li>Tonga</li>
                                            <li>Trinidad and Tobago</li>
                                            <li>Tunisia</li>
                                            <li>Turkey</li>
                                            <li>Turkmenistan</li>
                                            <li>Turks and Caicos Islands</li>
                                            <li>Tuvalu</li>
                                            <li>Uganda</li>
                                            <li>Ukraine</li>
                                            <li>United Arab Emirates</li>
                                            <li>United Kingdom</li>
                                            <li>United States</li>
                                            <li>Uruguay</li>
                                            <li>Uzbekistan</li>
                                            <li>Vanuatu</li>
                                            <li>Vatican</li>
                                            <li>Venezuela</li>
                                            <li>Vietnam</li>
                                            <li>Wallis and Futuna</li>
                                            <li>Western Sahara</li>
                                            <li>Yemen</li>
                                            <li>Zambia</li>
                                            <li>Zimbabwe</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/icons/star-input.svg" alt="icon">
                            </div>

                            <input hidden type="text" name="investments" placeholder="Investments and Balances"
                                value="Investments and Balances">

                            <div class="drop-down">
                                <div class="result">
                                    <p>
                                        Investments and Balances </p>
                                </div>

                                <span class="drop-down__btn">
                                    <img src="{{asset('')}}frontend/img/icons/arrow-btn-right.svg" width="8" height="13"
                                        alt="icon">
                                </span>

                                <div class="drop-down__list">
                                    <div class="drop-down__content" custom-container>
                                        <ul>
                                            <li>Investments and Balances</li>
                                            <li>Withdrawals and Rewards</li>
                                            <li>Change Profile Data</li>
                                            <li>Promotion and Offers</li>
                                            <li>Legal Inquiries</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label class="bg-input textarea">
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/icons/message.svg" alt="icon">
                            </div>

                            <div class="bg-textarea" custom-container>
                                <textarea class="textarea" name="message" rows="6" placeholder="Your message"></textarea>
                            </div>
                        </label>
                    </div>




                    <button type="submit" class="btn-registration">
                        <div class="gradient__btn">
                            <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-btn.svg" alt="gradient">
                        </div>

                        <span>
                            INQUIRE
                        </span>
                    </button>
                </form>

                <div class="contacts__description" data-aos-anchor-placement="top-bottom" data-aos="fade-left">
                    <div class="contacts__description--header">
                        <p>
                            Please, take note of these important points before making any inquiries!
                        </p>
                    </div>

                    <ol>
                        <li>
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-li.svg" alt="gradient">
                            </div>

                            <p>
                                <span>☆</span> The withdrawal procedure will take a whole day. Payment terms are shown
                                in the "Statistics" section. We process payments 7 days a week, including holidays and
                                weekends.
                            </p>
                        </li>

                        <li>
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-li.svg" alt="gradient">
                            </div>

                            <p>
                                <span>☆</span> Please use the attached contact form to make changes to your payout
                                wallets. Be sure to include the OLD and NEW addresses for verification.
                            </p>
                        </li>

                        <li>
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-li.svg" alt="gradient">
                            </div>

                            <p>
                                <span>☆</span> After you make a deposit, the first income will appear in your balance 24
                                hours later (server time). Earnings are accumulated every day, Monday through Sunday.
                            </p>
                        </li>

                        <li>
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-li.svg" alt="gradient">
                            </div>

                            <p>
                                <span>☆</span> Funds from your personal account may be reinvested, and the deposit will
                                become active immediately.
                            </p>
                        </li>

                        <li>
                            <div class="gradient__violet">
                                <img class="icon-svg" src="{{asset('')}}frontend/img/gradient/gradient-li.svg" alt="gradient">
                            </div>

                            <p>
                                <span>☆</span> Your daily earnings includes the principal of your initial investment. At
                                the conclusion of the investing cycle, there is no principal repayment.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        setTimeout(function() {
            $.ajax({
                url: "https://get.geojs.io/v1/ip/geo.js",
                dataType: "jsonp",
                jsonpCallback: "geoip",
                success: function(data) {
                    console.log("IP: " + data.ip);
                    console.log("Country: " + data.country);
                    console.log("Country Code: " + data.country_code3);
                    var el_sel = document.getElementById('select_country');
                    el_sel.value = data.country;
                    document.getElementById('select_country2').innerHTML = data.country;

                }
            });
        }, 1);
    </script>


    @include('layouts.mainsite.footer')
