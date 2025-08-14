@include('layouts.mainsite.header')


<main>
    <section class="other">
        <div class="other__decoration">
            <picture>
                <source srcset="{{ asset('') }}frontend/img/bg/bg-main-other.webp" type="image/webp">
                <img src="{{ asset('') }}frontend/img/bg/bg-main-other.jpg" width="2075" height="1384"
                    alt="background">
            </picture>

            <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-main-other.svg" alt="decoration">
        </div>

        <div class="wrapper">
            <div class="other__hedaer">
                <h1>
                    Sign Up
                </h1>
            </div>

            <div class="signup">
                <form action="{{ route('registers') }}" method="post" class="form">

                    {{ csrf_field() }}
                    @php
                        $sponsor = @$_GET['ref'];
                        $pos = @$_GET['pos'];
                        $name = \App\Models\User::where('username', $sponsor)->first();
                    @endphp

                    <div class="form__decoration">
                        <picture>
                            <source srcset="{{ asset('') }}frontend/pic/figure/sign.webp" type="image/webp">
                            <img src="{{ asset('') }}frontend/pic/figure/sign.png" width="584" height="597"
                                alt="figure">
                        </picture>

                        <img src="{{ asset('') }}frontend/img/bg/small-sign.png" width="164" height="152"
                            alt="decoration">
                    </div>

                    <div class="bg__desktop">
                        
                    </div>

                    <div class="bg__mobile">
                    
                    </div>

                    <div class="bg__mobile--small">
                        <img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-signup-mob-small.svg"
                            alt="form">
                    </div>

                    <div class="form__input">

                    <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg"
                                    alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg"
                                    alt="icon">
                            </div>
                            <input type="text" class=" check_sponsor_exist" value="{{($sponsor)?$sponsor:''}}" data-response="sponsor_res" name="sponsor" required placeholder="Sponsor ID">
                            </label>

                        <?= $name ? $name->name : '' ?>

                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg"
                                    alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg"
                                    alt="icon">
                            </div>
                            <input type="text"  name="name" required placeholder="Your Name">
                            </label>

                       
                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg"
                                    alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/email.svg"
                                    alt="icon">
                            </div>
                            <input type="email" name="email" id="email"  required placeholder="Your Email">                        </label>

                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg"
                                    alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg"
                                    alt="icon">
                            </div>
                            <input type="text" name="phone" id="phone"  required placeholder="Your Mobile No">                        </label>



                      

                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg"
                                    alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/key.svg"
                                    alt="icon">
                            </div>

                            <input type="password" name="password" placeholder="Your Password" >
                            <div class="bg-input__show">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/eye.svg"
                                    alt="icon">
                            </div>
                        </label>

                        <label class="bg-input">
                            <div class="gradient__violet">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg"
                                    alt="gradient">
                            </div>

                            <div class="bg-input__icon">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/key.svg"
                                    alt="icon">
                            </div>

                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="confirm-password" >
                            <div class="bg-input__show">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/eye.svg"
                                    alt="icon">
                            </div>
                        </label>

                      
                    </div>

                    <p>
                        <a href="{{ route('term-candition') }}">Read and Accept our Terms & Conditions</a>
                    </p>


                    <button type="submit" class="btn-registration">
                        <div class="gradient__btn">
                            <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-btn.svg"
                                alt="gradient">
                        </div>

                        <span>
                            Registration
                        </span>
                    </button>

                    <div class="global__small--text">
                        <p>
                            <a href="login">If you already have an account Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

    @include('partials.notify')

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
                 alert();

            }
        });
    }, 1000);

 
  

</script>


@include('layouts.mainsite.footer')
