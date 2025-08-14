@include('layouts.mainsite.header')
    <main>
        <section class="other">
            <div class="other__decoration">
                <picture>
                    <source srcset="{{ asset('') }}frontend/img/bg/bg-main-other.webp" type="image/webp">
                    <img src="{{ asset('') }}frontend/img/bg/bg-main-other.jpg" width="2075" height="1384" alt="background">
                </picture>

                <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-main-other.svg" alt="decoration">
            </div>

            <div class="wrapper">
                <div class="other__hedaer">
                    <h1>
                        Login
                    </h1>
                </div>

                <div class="login">
                    <form action="{{ route('login') }}" method="post" class="form">

                        {{ csrf_field() }}
                        <div class="form__decoration">
                            <picture>
                                <source srcset="{{ asset('') }}frontend/pic/figure/login.webp" type="image/webp">
                                <img src="{{ asset('') }}frontend/pic/figure/login.png" width="498" height="306" alt="figure">
                            </picture>
                        </div>

                        <div class="bg__desktop">
                            <!--<img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-login.svg" alt="form">-->
                        </div>

                        <div class="bg__mobile">
                            <!--<img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-login-mob.svg" alt="form">-->
                        </div>

                        <div class="bg__mobile--small">
                            <!--<img class="icon-svg" src="{{ asset('') }}frontend/img/bg/form-login-mob-small.svg" alt="form">-->
                        </div>

                        <div class="form__input">
                            <label class="bg-input">
                                <div class="gradient__violet">
                                    <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                                </div>

                                <div class="bg-input__icon">
                                    <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/login-user.svg" alt="icon">
                                </div>
                                <input type="text" name="username" placeholder="Username">
                            </label>

                            <label class="bg-input">
                                <div class="gradient__violet">
                                    <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-violet-plan.svg" alt="gradient">
                                </div>

                                <div class="bg-input__icon">
                                    <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/key.svg" alt="icon">
                                </div>

                                <input type="password" name="password" placeholder="Password">

                                <div class="bg-input__show">
                                    <img class="icon-svg" src="{{ asset('') }}frontend/img/icons/eye.svg" alt="icon">
                                </div>
                            </label>
                        </div>


                        <p>
                            <a href="{{route('forgot-password')}}">Forgot your Password?</a>
                        </p>


                        <button type="submit" class="btn-registration">
                            <div class="gradient__btn">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/gradient/gradient-btn.svg" alt="gradient">
                            </div>

                            <span>
                                Login
                            </span>
                        </button>

                        <div class="global__small--text">
                            <p>
                                <a href="{{route('register')}}">Or Register your account</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>
@include('partials.notify')

    @include('layouts.mainsite.footer')
