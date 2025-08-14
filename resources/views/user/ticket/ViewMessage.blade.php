

        <article>




            <section class="invest message">
                <div class="invest__decoration">
                    <div class="ellipse-blue__big">
                        <img class="icon-svg" src="img/cabinet/ellipse/ellipse_blue-invest-big.svg" alt="decoration">
                    </div>

                    <div class="ellipse-blue__small">
                        <img class="icon-svg" src="img/cabinet/ellipse/ellipse_blue-invest-small.svg"
                            alt="decoration">
                    </div>

                    <div class="ellipse-pink__big">
                        <img class="icon-svg" src="img/cabinet/ellipse/ellipse_pink-invest-big.svg" alt="decoration">
                    </div>
                </div>

                <h1>
                    Ticket # {{$_GET['ticket_no']}} </h1>

                <!-- <div class="message__list" custom-container> -->
                <div class="message__list">
                    <div class="message__content">


                        <?php if(is_array($open_ticket_msg) || is_object($open_ticket_msg)){ ?>
                            <?php $count= 0; ?>
                            <?php foreach ($open_ticket_msg as $item): ?>
                        <div class="message__item">
                            <div class="message__item--info">
                                <div class="message__item--name">
                                    <p>
                                        <?=($item->reply_by == 'admin')? 'Admin' : 'You'?> </p>
                                </div>

                                <div class="message__item--mail">
                                    <p>
                                        <br />
                                    </p>
                                </div>

                                <div class="message__item--date">
                                    <p>
                                        <?= $item->category ?> (<?=$item->gen_date?>)</p>
                                </div>
                            </div>

                            <div class="message__item--text">
                                <p>
                                    <?= $item->msg ?> </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php } ?>





                    </div>
                </div>



            </section>




        </article>

