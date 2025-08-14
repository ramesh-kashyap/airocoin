<article>
    
    <style>
        .invest .table__nav ul li:last-child {
    margin: 6px;
}
.invest .bg-input {
    position: relative;
    display: flex;
    justify-content: flex-start;
    align-content: center;
    align-items: center;
    padding: 15px 15px 13px;
    width: calc(107% - 11px);
    max-width: 454px;
    border-radius: 9px;

}
    </style>
    <section class="invest affilates-link">
        <div class="invest__decoration">
            <div class="ellipse_blue__affilate">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_blue-affilate.svg"
                    alt="decoration">
            </div>

            <div class="ellipse_pink__affilate">
                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-affilate-big.svg"
                    alt="decoration">
            </div>
        </div>

        <div class="affilates-link__header">
            <h1>
                My affiliate link
            </h1>

            <div class="pay__address--input hover">
                <p>{{ asset('') }}register?ref={{ Auth::user()->username }}</p>

                <div class="btn-copy">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/copy.svg" alt="icon">
                </div>
            </div>

           


            <div class="affilates-link__header--description">
                <p>
                   Direct Referral: 5% </p>
            </div>
        </div>

        <div class="statistics__table">
            <div class="statistics__table--decoration">
                <picture>
                    <source srcset="{{ asset('') }}frontend/img/cabinet/figure/arround-figure-piece_cabinet.webp"
                        type="image/webp">
                    <img src="{{ asset('') }}frontend/img/cabinet/figure/arround-figure-piece_cabinet.png"
                        width="693" height="233" alt="figure">
                </picture>

                <div class="ellipse-violet-statistic">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/around/ellipse-violet-statistic.svg"
                        alt="decoration">
                </div>

                <div class="ellipse-violet-vertical-statistic">
                    <img class="icon-svg"
                        src="{{ asset('') }}frontend/img/around/ellipse-violet-vertical-statistic.svg"
                        alt="decoration">
                </div>

                <div class="ellipse-blue-statistic">
                    <img class="icon-svg" src="{{ asset('') }}frontend/img/around/ellipse-blue-statistic.svg"
                        alt="decoration">
                </div>
            </div>

            <div class="affilate global__item">
                <div class="global__item--decoration">
                    <div class="world-map">
                        <img src="{{ asset('') }}frontend/img/cabinet/decoration/world-map.svg" width="361"
                            height="313" alt="decoration">
                    </div>

                    <div class="ellipse-violet__affilate">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_violet-affilate.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-violet__affilate second">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_violet-affilate.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-pink__affilate">
                        <img class="icon-svg"
                            src="{{ asset('') }}frontend/img/cabinet/ellipse/ellipse_pink-affilate.svg"
                            alt="decoration">
                    </div>
                </div>

                <div class="global__header">
                    <div class="global__header--item">
                        Affiliates
                    </div>

                    
                </div>

                <div class="affilate__description">
                    <div class="affilate__item">
                        <div class="affilate__item--decoration">
                            <img class="icon-svg"
                                src="{{ asset('') }}frontend/img/cabinet/gradient/gradient-affilate-item.svg"
                                alt="gradient">
                        </div>

                        <div class="affilate__item--info">
                            <div class="affilate__item--number">
                                <img class="icon-svg" src="{{ asset('') }}frontend/img/cabinet/icons/user-plus.svg"
                                    alt="icon">

                                <p>
                                    {{$total_team}} </p>
                            </div>

                            <span>
                                All
                            </span>
                        </div>
                    </div>

                    <div class="affilate__item second">
                        <div class="affilate__item--decoration">
                            <img class="icon-svg"
                                src="{{ asset('') }}frontend/img/cabinet/gradient/gradient-affilate-item.svg"
                                alt="gradient">
                        </div>

                        <div class="affilate__item--info">
                            <div class="affilate__item--number">
                                <img class="icon-svg"
                                    src="{{ asset('') }}frontend/img/cabinet/icons/user-active.svg" alt="icon">

                                <p>
                                    {{$active_total_team}} </p>
                            </div>

                            <span>
                                Active
                            </span>
                        </div>
                    </div>

                    <div class="team-invested">
                        <p>
                            {{currency()}} {{number_format($totalPackage,2)}} </p>

                        <span class="global__small--text">
                            Team invested
                        </span>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>

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
            Affiliate statistic
        </h1>

        <div class="table">
            <nav class="table__nav">
                <ul>
                    <a href="{{ route('user.level-team') }}">
                        <li class="{{ menuActive('user.level-team') }}">

                                 My Direct Referral

                        </li>
                    </a>

                    <a href="{{ route('user.level-team') }}">
                        <li class="{{ menuActive('user.left-team') }}">

                            Total Team

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
                                        <input type="text" class="search-ref" data-colunm="search" style="" Placeholder="Search"
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
                                      
                                          <select name="selected_level" data-colunm="selected_level" class="search-ref" style="" >
                                            <option value="">Select Level</option>
                                            @for ($i=1; $i <=$max_lenght ; $i++)
                                           
                                          
                                           <option <?php echo (Session::get('selected_level')==$i)?'selected':''?> value="{{$i}}">Level {{$i}}</option>
                                            @endfor
                                       </select>   
                                            
                                        </div>
        
                                </li>
                            </a>
        
                          
        
                        </ul>
                        
                         
                   
                    
                    </nav>
                    

            <div class="table-statistics">
                <!--//level 1//-->

                <div class="table-statistics__content active" id="tabs1">


                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                User Id
                            </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                            Sponsor ID
                            </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Level
                            </p>
                        </div>

                       

                      

                        <div class="table__line--status">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                                Status
                            </p>
                        </div>

                        <div class="table__line--coin">
                            <p class="table__line--title">

                            </p>

                            <p class="table__line--text">
                            Email
                            </p>
                        </div>

                    </div>


                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                        <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                        @foreach ($direct_team as $value)

                    <div class="table__line">
                        <div class="table__line--method">
                            <p class="table__line--title">
                                User Id
                            </p>

                            <div class="table__line--text">
                                <p>
                                {{ $value->username }}</p>
                            </div>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                            Sponsor ID
                            </p>

                            <p class="table__line--text">
                            {{ $value->sponsor_detail->username }} </p>
                        </div>

                        <div class="table__line--date">
                            <p class="table__line--title">
                                Level
                            </p>

                            <p class="table__line--text">
                            {{ $value->level - Auth::user()->level }} </p>
                        </div>

                        

                       

                        <div class="table__line--status">
                            <p class="table__line--title">
                                Status
                            </p>

                            <div class="btn">
                                <p>{{ $value->active_status }}</p>
                            </div>
                        </div>
                        <div class="table__line--coin">
                            <p class="table__line--title">
                                Email ID
                            </p>

                            <p class="table__line--text">
                                 <?php echo substr($value->email,0,6)."..".substr($value->email,-11);?> </p>
                        </div>

                    </div>


                    @endforeach

                    <?php }?>



                    {{ $direct_team->withQueryString()->links() }}

                </div>


                <!--//leve2//-->

           

            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                                $(document).ready(function() {
                                                    $('.search-ref').on('keyup', function() {
                                                        var value = $(this).val().toLowerCase();
                                                        var colunm = $(this).attr('data-colunm'); // Get the target span ID
                                                        window.location.href = '{{ route('user.level-team') }}?' + colunm + '=' + value;
                                                    });
                                                    $('.search-ref').on('change', function() {
                                                        var value = $(this).val().toLowerCase();
                                                        var colunm = $(this).attr('data-colunm'); // Get the target span ID
                                                        window.location.href = '{{ route('user.level-team') }}?' + colunm + '=' + value;
                                                    });
                                                });
                                            </script>




</article>

