<article>
  

        <style type="text/css">
            .tree-border::before {
                display: block;
                width: 50%;
                margin-left: 25%;
                margin-right: 25%;
                border-top: 2px solid #5883b7;
                border-radius: 100px;
                color: #2D2A03;
                content: "|";
            }

            .data-table td span:nth-child(3n - 1) {
                cursor: pointer !important;
                color: #fe7e10 !important;
                font-weight: 700 !important;
                padding: 6px 6px 4px 6px;

            }

            .modal .modal-header .modal-title {
                font-weight: 500;
                font-size: 1.3rem;
                color: #ffffff;
            }

            .modal-content {
                position: relative;
                background-color: #111219;
                background-clip: padding-box;
                border: 1px solid #999;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: 6px;
                -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
                box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
                outline: 0;
            }

            /*Om code start*/
            /* .data-table td span:nth-child(3n - 1){cursor:pointer !important; color:#e6b429 !important; font-weight:400 !important; padding:6px 6px 4px 6px;}  */
            .load-gif img {
                width: 120px;
            }

            .load-gif {
                width: 20px !important;
            }

            .load-gif img {
                width: 20px !important;
                float: left;
            }

            .system-cal-report {
                font-size: 12px;
                color: red;
            }

            #userDataModal #userName {
                text-transform: uppercase;
            }

            #userData table {
                width: 100%;
                border: 1px #ccc solid;
                background-color: #000;
            }

            #userData table td {
                border: 1px #ccc solid;
                padding: 25px;
                text-transform: uppercase;
                color: #fff;
                text-align: center;
            }

            #userData table td i {
                margin-right: 4px;
            }

            #userData table td span {
                float: center;
                font-weight: 100px;
                font-size: 12px;
            }

            .text-center {
                text-align: center !important;
                color: #29c7e0;
            }

            .modal .modal-header .close span {
                display: block;
            }

            .modal-header .close {
                margin-top: -2px;
                opacity: 0.8;
            }
            .popup__item {
              position: relative;
              display: flow;
              justify-content: flex-start;
              align-content: flex-start;
              align-items: flex-start;
              flex-direction: column;
              width: 100%;
              z-index: 2;
          }
          .popup__description {
          position: relative;
          display: flex;
          justify-content: flex-start;
          align-content: flex-start;
          align-items: flex-start;
          display: none;
          flex-direction: column;
          padding: 55px 35px 39px;
          width: auto;
      }
      .popup.code .popup__description.code-form {
    display: flex;
    padding: 55px 30px 127px;
}

        </style>


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
           Team
        </h1>

        <div class="table">
            <nav class="table__nav">
                <ul>
                <!--  <a href="{{ route('user.referral-team') }}">-->
                <!--    <li class="{{ menuActive('user.referral-team') }}">-->

                <!--        Referral Team-->

                <!--    </li>-->
                <!--</a>-->

                <!--<a href="{{ route('user.left-team') }}">-->
                <!--    <li class="{{ menuActive('user.left-team') }}">-->

                <!--        Left Team-->

                <!--    </li>-->
                <!--</a>-->

                <!--<a href="{{ route('user.right-team') }}">-->
                <!--    <li class="{{ menuActive('user.right-team') }}">-->

                <!--        Right team-->

                <!--    </li>-->
                <!--</a>-->
                <!--<a href="{{ route('user.tree-view') }}">-->
                <!--    <li class="{{ menuActive('user.tree-view') }}">-->

                <!--        Tree View-->

                <!--    </li>-->
                <!--</a>-->
                </ul>
            </nav>

            <div class="table-statistics">
    <table id="zero-conf" class="data-table" style="width:100%">
        <tbody>
            <!-- Title -->
            <tr class="text-center">
                <td colspan="8">
                    <h3 class="text-center"><strong>MY STRUCTURE</strong></h3>
                </td>
            </tr>

            <!-- Search Box -->
            <tr class="text-center">
                <td colspan="8" style="border-color:transparent; background-color:transparent;">
                    Downline ID ->
                    <form method="get" action="{{ route('user.tree-view') }}">
                        <input name="suser" type="text" id="suser">
                        <input type="submit" name="submit" value="Search" id="submit">
                    </form>
                    <br>
                    <span id="ctl00_ContentPlaceHolder1_lblerror"></span>
                </td>
            </tr>

            <!-- Top Node (Self) -->
            <tr class="text-center">
                <td colspan="8" style="border-color:transparent; background-color:transparent;">
                    @php
                        $status = @$mydata->active_status;
                        $color = match($status) {
                            'Active', 'Block' => 'aironet',
                            'Pending', 'Inactive' => 'icon-member-pending',
                            default => 'aironet',
                        };
                    @endphp

                    <input type="image"
                        src="{{ asset('frontend/img') }}/{{ $color }}.png"
                        style="width: 59px; height: 59px; background: transparent; border: none;">
                    <br>
                    <span style="font-weight: 700;">{{ strtoupper(@$mydata->name) }}</span><br>
                    <span>{{ strtoupper(@$mydata->username) }}</span>
                </td>
            </tr>

            <!-- Connecting Line -->
            @if(count($direct_team) > 0)
            <tr class="text-center">
                <td colspan="8">
                    <div class="tree-border" style="height: 20px; border-bottom: 2px solid #000;"></div>
                </td>
            </tr>

            <!-- Downline Users -->
            <tr class="text-center" style="
            <!--width: 841px;-->
    display: flex;
    overflow-x: scroll;
    scrollbar-width: none;">
                @foreach($direct_team as $child)
                    @php
                        $status = $child->active_status ?? '';
                        $color = match($status) {
                            'Active', 'Block' => 'aironet',
                            'Pending', 'Inactive' => 'aironetr',
                            default => 'aironet',
                        };
                    @endphp
                    <td colspan="{{ intval(8 / count($direct_team)) }}" style="border-color:transparent; background-color:transparent;">
                        <a href="{{ route('user.tree-view', ['user_id' => $child->username]) }}">
                            <input type="image"
                                src="{{ asset('frontend/img') }}/{{ $color }}.png"
                                style="width: 50px; height: 50px; background: transparent; border: none;">
                        </a>
                        <br>
                        <span style="font-weight: 700;">{{ strtoupper($child->name ?? '') }}</span><br>
                        <span>{{ strtoupper($child->username ?? '') }}</span>
                    </td>
                @endforeach
            </tr>
            @endif
        </tbody>
    </table>
</div>

        </div>
    </section>







</article>



<section class="popup">


    <div class="popup__content">

        <div class="popup__content--decoration">
            <div class="popup__content--big">
                <div class="bg__desktop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="591" height="596" viewBox="0 0 591 596"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_19815)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M270.382 0H24C10.7452 0 0 10.7452 0 24V560.725C0 573.327 9.69915 583.771 22.2747 584.584C73.8603 587.919 204.017 595.711 294.461 595.728C385.36 595.745 516.2 587.924 567.943 584.582C580.519 583.77 590.215 573.326 590.215 560.724V24C590.215 10.7452 579.47 0 566.215 0H319.833L319.836 0.00152588L312.425 4.09992L316.523 10.9222L307.785 11.1986L307.472 18.9167L299.748 15.297L295.107 21.8429L290.467 15.297L282.743 18.9167L282.43 11.1986L273.692 10.9222L277.79 4.09992L270.379 0.00152588L270.382 0Z"
                                fill="url(#paint0_linear_349_19815)" stroke="url(#paint1_linear_349_19815)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_19815" x="-53" y="-53" width="696.215" height="701.728"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_19815">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_19815"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_19815" x1="295.107" y1="0"
                                x2="295.107" y2="591.262" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_19815" x1="295.107" y1="0"
                                x2="295.107" y2="591.262" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="360" height="578" viewBox="0 0 360 578"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_20967)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M158.907 0H24C10.7452 0 0 10.7452 0 24V543.666C0 555.89 9.14713 566.144 21.3107 567.357C56.6422 570.882 128.513 577.36 179.605 577.376C230.967 577.391 303.235 570.887 338.689 567.355C350.853 566.143 360 555.888 360 543.664V24C360 10.7452 349.255 0 336 0H201.093L201.093 0.000322342L194.771 3.87787L198.267 10.3325L190.813 10.594L190.546 17.8962L183.958 14.4715L180 20.6647L176.042 14.4715L169.453 17.8962L169.186 10.594L161.732 10.3325L165.228 3.87787L158.906 0.000322342L158.907 0Z"
                                fill="url(#paint0_linear_349_20967)" stroke="url(#paint1_linear_349_20967)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_20967" x="-53" y="-53" width="466" height="683.375"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_20967">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_20967"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_20967" x1="180" y1="0"
                                x2="180" y2="573.047" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_20967" x1="180" y1="0"
                                x2="180" y2="573.047" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile--small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="320" height="578" viewBox="0 0 320 578"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_20967_s)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M141.25 0H24C10.7452 0 0 10.7452 0 24V543.961C0 556.059 8.97844 566.249 21.0021 567.587C53.073 571.156 115.205 577.361 159.649 577.376C204.329 577.391 266.807 571.162 298.993 567.585C311.018 566.249 320 556.058 320 543.959V24C320 10.7452 309.255 0 296 0H178.749L178.75 0.000322342L173.13 3.87787L176.238 10.3325L169.612 10.594L169.375 17.8962L163.518 14.4715L160 20.6647L156.482 14.4715L150.625 17.8962L150.388 10.594L143.762 10.3325L146.869 3.87787L141.25 0.000322342L141.25 0Z"
                                fill="url(#paint0_linear_349_20967_s)" stroke="url(#paint1_linear_349_20967_s)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_20967_s" x="-53" y="-53" width="426" height="683.375"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_20967">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_20967"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_20967_s" x1="160" y1="0"
                                x2="160" y2="573.047" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_20967_s" x1="160" y1="0"
                                x2="160" y2="573.047" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="popup__content--photo">
                <div class="bg__desktop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="591" height="460" viewBox="0 0 591 460"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_1180_9444)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M270.975 0H24C10.7452 0 0 10.7452 0 24V427.093C0 439.843 9.9406 450.359 22.6747 450.994C74.5303 453.578 204.25 459.558 294.461 459.571C385.128 459.584 515.53 453.581 567.544 450.992C580.279 450.359 590.215 439.842 590.215 427.092V24C590.215 10.7452 579.47 0 566.215 0H319.24L312.425 4.2674L316.523 11.992L307.785 12.3049L307.472 21.0438L299.748 16.9453L295.107 24.357L290.467 16.9453L282.743 21.0438L282.43 12.3049L273.692 11.992L277.79 4.2674L270.975 0Z"
                                fill="url(#paint0_linear_1180_9444)" stroke="url(#paint1_linear_1180_9444)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_1180_9444" x="-53" y="-53" width="696.215" height="565.571"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_1180_9444">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1180_9444"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_1180_9444" x1="295.107" y1="0"
                                x2="295.107" y2="526.641" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_1180_9444" x1="295.107" y1="0"
                                x2="295.107" y2="526.641" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="360" height="435" viewBox="0 0 360 435"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_1180_9447)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M161.168 0H24C10.7452 0 0 10.7452 0 24V403.137C0 415.612 9.53387 425.995 21.9748 426.927C57.5362 429.589 128.831 434.403 179.605 434.415C230.65 434.426 302.342 429.593 338.026 426.924C350.468 425.994 360 415.611 360 403.135V24C360 10.7452 349.255 0 336 0H198.831L201.093 1.46563L194.771 5.56095L198.267 12.3781L190.813 12.6543L190.546 20.3666L183.958 16.7496L180 23.2906L176.042 16.7496L169.453 20.3666L169.186 12.6543L161.732 12.3781L165.228 5.56095L158.906 1.46563L161.168 0Z"
                                fill="url(#paint0_linear_1180_9447)" stroke="url(#paint1_linear_1180_9447)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_1180_9447" x="-53" y="-53" width="466" height="540.415"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_1180_9447">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1180_9447"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_1180_9447" x1="180" y1="0"
                                x2="180" y2="431.158" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_1180_9447" x1="180" y1="0"
                                x2="180" y2="431.158" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile--small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="320" height="435" viewBox="0 0 320 435"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_1180_9447)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M143.261 0H24C10.7452 0 0 10.7452 0 24V403.366C0 415.746 9.37774 426.08 21.7146 427.109C53.986 429.803 115.532 434.403 159.649 434.415C204.003 434.426 265.894 429.808 298.282 427.107C310.62 426.079 320 415.745 320 403.364V24C320 10.7452 309.255 0 296 0H176.739L178.75 1.46563L173.13 5.56095L176.238 12.3781L169.612 12.6543L169.375 20.3666L163.518 16.7496L160 23.2906L156.482 16.7496L150.625 20.3666L150.388 12.6543L143.762 12.3781L146.869 5.56095L141.25 1.46563L143.261 0Z"
                                fill="url(#paint0_linear_1180_9447)" stroke="url(#paint1_linear_1180_9447)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_1180_9447" x="-53" y="-53" width="426" height="540.415"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_1180_9447">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1180_9447"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_1180_9447" x1="160" y1="0"
                                x2="160" y2="431.158" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_1180_9447" x1="160" y1="0"
                                x2="160" y2="431.158" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="popup__content--on">
                <div class="bg__desktop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="591" height="731" viewBox="0 0 591 731"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_49641)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M272.248 0H24C10.7452 0 0 10.7452 0 24V693.338C0 705.794 9.46605 716.164 21.8826 717.15C73.1979 721.224 203.787 730.832 294.461 730.852C385.59 730.873 516.861 721.23 568.334 717.148C580.751 716.163 590.215 705.792 590.215 693.336V24C590.215 10.7452 579.47 0 566.215 0H317.967L312.425 3.47004L316.523 11.1946L307.785 11.5075L307.472 20.2464L299.748 16.1479L295.107 23.5596L290.467 16.1479L282.743 20.2464L282.43 11.5075L273.692 11.1946L277.79 3.47004L272.248 0Z"
                                fill="url(#paint0_linear_349_49641)" stroke="url(#paint1_linear_349_49641)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_49641" x="-53" y="-53" width="696.215" height="836.853"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_49641">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_49641"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_49641" x1="295.107" y1="0"
                                x2="295.107" y2="725.373" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_49641" x1="295.107" y1="0"
                                x2="295.107" y2="725.373" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="360" height="690" viewBox="0 0 360 690"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_77591)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M159.128 0H24C10.7452 0 0 10.7452 0 24V653.964C0 665.993 8.85685 676.143 20.8003 677.569C55.9461 681.765 128.265 689.577 179.605 689.596C231.214 689.614 303.931 681.771 339.198 677.566C351.142 676.142 360 665.991 360 653.962V24C360 10.7452 349.255 0 336 0H200.872L194.772 3.95158L198.267 10.7688L190.814 11.0449L190.547 18.7573L183.958 15.1402L180 21.6813L176.042 15.1402L169.453 18.7573L169.186 11.0449L161.732 10.7688L165.228 3.95158L159.128 0Z"
                                fill="url(#paint0_linear_349_77591)" stroke="url(#paint1_linear_349_77591)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_77591" x="-53" y="-53" width="466" height="795.596"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_77591">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_77591"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_77591" x1="180" y1="0"
                                x2="180" y2="684.426" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_77591" x1="180" y1="0"
                                x2="180" y2="684.426" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile--small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="320" height="690" viewBox="0 0 320 690"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_77591)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M141.447 0H24C10.7452 0 0 10.7452 0 24V654.308C0 666.188 8.68096 676.264 20.4562 677.832C52.3636 682.083 114.951 689.578 159.649 689.596C204.582 689.614 267.516 682.09 299.538 677.83C311.314 676.263 320 666.186 320 654.305V24C320 10.7452 309.255 0 296 0H178.552L173.13 3.95158L176.238 10.7688L169.612 11.0449L169.375 18.7573L163.518 15.1402L160 21.6813L156.482 15.1402L150.625 18.7573L150.388 11.0449L143.762 10.7688L146.869 3.95158L141.447 0Z"
                                fill="url(#paint0_linear_349_77591)" stroke="url(#paint1_linear_349_77591)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_77591" x="-53" y="-53" width="426" height="795.596"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_77591">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_77591"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_77591" x1="160" y1="0"
                                x2="160" y2="684.426" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C27ACB"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_77591" x1="160" y1="0"
                                x2="160" y2="684.426" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="popup__content--small">
                <div class="bg__desktop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="591" height="381" viewBox="0 0 591 381"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_19366)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M270.766 0H24C10.7452 0 0 10.7452 0 24V349.272C0 362.108 10.0842 372.665 22.9098 373.194C74.9214 375.337 204.386 380.27 294.461 380.281C384.992 380.292 515.139 375.34 567.31 373.193C580.136 372.665 590.215 362.107 590.215 349.271V24C590.215 10.7452 579.47 0 566.215 0H319.448L312.425 4.39777L316.523 12.1223L307.785 12.4352L307.472 21.1741L299.748 17.0757L295.107 24.4873L290.467 17.0757L282.743 21.1741L282.43 12.4352L273.692 12.1223L277.79 4.39777L270.766 0Z"
                                fill="url(#paint0_linear_349_19366)" stroke="url(#paint1_linear_349_19366)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_19366" x="-53" y="-53" width="696.215" height="486.281"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_19366">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_19366"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_19366" x1="295.107" y1="0"
                                x2="295.107" y2="377.43" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7244D8"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_19366" x1="295.107" y1="0"
                                x2="295.107" y2="377.43" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="360" height="336" viewBox="0 0 360 336"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_20807)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M158.906 0H24C10.7452 0 0 10.7452 0 24V305.801C0 318.453 9.81283 328.922 22.4434 329.651C58.1594 331.712 129.053 335.397 179.605 335.405C230.428 335.414 301.719 331.715 337.559 329.649C350.19 328.921 360 318.452 360 305.8V24C360 10.7452 349.255 0 336 0H201.093L201.093 0.000244141L194.771 4.09529L198.267 10.912L190.813 11.1881L190.546 18.8999L183.958 15.2831L180 21.8237L176.042 15.2831L169.453 18.8999L169.186 11.1881L161.732 10.912L165.228 4.09529L158.906 0.000244141L158.906 0Z"
                                fill="url(#paint0_linear_349_20807)" stroke="url(#paint1_linear_349_20807)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_20807" x="-53" y="-53" width="466" height="441.405"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_20807">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_20807"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_20807" x1="180" y1="0"
                                x2="180" y2="370.455" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7244D8"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_20807" x1="180" y1="0"
                                x2="180" y2="370.455" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="bg__mobile--small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="320" height="336" viewBox="0 0 320 336"
                        fill="none" class="icon-svg edit_svg">
                        <g filter="url(#filter0_b_349_20807_s)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M141.25 0H24C10.7452 0 0 10.7452 0 24V305.982C0 318.559 9.66761 328.99 22.2186 329.798C54.6233 331.882 115.76 335.397 159.649 335.405C203.774 335.414 265.257 331.885 297.78 329.796C310.331 328.99 320 318.558 320 305.981V24C320 10.7452 309.255 0 296 0H178.749L178.75 0.000244141L173.13 4.09529L176.238 10.912L169.612 11.1881L169.375 18.8999L163.518 15.2831L160 21.8237L156.482 15.2831L150.625 18.8999L150.388 11.1881L143.762 10.912L146.869 4.09529L141.25 0.000244141L141.25 0Z"
                                fill="url(#paint0_linear_349_20807_s)" stroke="url(#paint1_linear_349_20807_s)"
                                fill-opacity="0.44"></path>
                        </g>
                        <defs>
                            <filter id="filter0_b_349_20807_s" x="-53" y="-53" width="426" height="441.405"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="26.5"></feGaussianBlur>
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_349_20807">
                                </feComposite>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_349_20807"
                                    result="shape"></feBlend>
                            </filter>
                            <linearGradient id="paint0_linear_349_20807_s" x1="160" y1="0"
                                x2="160" y2="370.455" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7244D8"></stop>
                                <stop offset="1" stop-color="#654BA6"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_349_20807_s" x1="160" y1="0"
                                x2="160" y2="370.455" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

        <div class="popup__close" style="">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17"
                fill="none" class="icon-svg edit_svg">
                <path d="M16.8774 0.859863L1.41064 16.3267" stroke="white" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                <path d="M1.41064 0.859863L16.8774 16.3267" stroke="white" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </div>


        <div id="userDataRes">
           

            <div class="popup__description code-form" id="userDataModal">
                <div class="popup__header" id="userName">
                 
                </div>

                <div class="popup__info">
                    <div class="popup__item">
                      
                      <div id="userData"><span class="load-gif"><img style="width: 100%;" src="{{asset('assets/images/load.gif')}}"> System calculating reports</span></div>

                    </div>

                 
                </div>
            </div>

        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="{{ asset('frontend/js/om_all_function.js') }}"></script>
