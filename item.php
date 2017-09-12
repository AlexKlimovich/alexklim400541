<div class="block_w no_bord no_p_b">
    <div class="block">
        <div class="brcs">
            <b>Вы здесь:</b>
            <a href="/section/<?php echo $service_section->url ?>"><?php echo $service_section->name ?></a>
            <i>&bull;</i>
            <a href="/service/<?php echo $url?>"><?php echo $name ?></a>
            <i>&bull;</i>
            <span><?php echo $product->name ?></span>
        </div>
    </div>
</div>
<div class="block_w no_bord no_p_t">
    <div class="block">
        <h1 class="block_title"><span><?php echo $product -> name ?></span></h1>
        <?php if ( !$mobile->isMobile() ) { ?>
            <div class="left_block">
                <div class="call_w stick">
                    <strong>Ваш консультант</strong>
                    <div class="cons_name">
                        <div class="img_wrap">
                            <img src="<?php echo Lib_Image::crop($manager->icon, 'managers',$manager->id, 74, 74); ?>" alt="<?php echo $manager->first_name?> <?php echo $manager->last_name?>"/>
                        </div>
                        <span><?php echo $manager->first_name?><br/><?php echo $manager->last_name?></span>
                    </div>
                    <span class="cons_cont"><?php echo $manager->employee?></span>
                    <span class="cons_cont"><b>Тел.:</b><?php echo $manager->phone?></span>
                    <span class="cons_cont"><b>E-mail:</b><a href="mailto:<?php echo $manager->email?>"><span><?php echo $manager->email?></span></a></span>
                    <a class="skype_call" href="skype:<?php echo $manager->skype?>"><i><!--skype_ico--></i><span>Начать разговор<b></b></span></a>
                </div>
            </div>
        <?php } ?>
        <div class="right_block">
            <div class="block_content">
                <article>
                        <div class="">
                            <div>
                                <form action="#" id="buy_form<?php echo $product->id; ?>" method="post" class="fancyprod_form prod">
                                    <div class="left">
                                        <img id="zoom_0<?php echo $product->id; ?>" class="image_zoom" src="<?php echo Lib_Image::resize_height($product->main_image, 'products',$product->id, 235, 235); ?>" data-zoom-image="<?php echo $product->main_image ?>" alt="<?php echo $product->name ?>"/>
                                        <div class="small_images" style="display: none">
                                            <div class="item">
                                                <img src="<?php echo Lib_Image::resize_height($product->main_image, 'products',$product->id, 235, 235); ?>" data-zoom-image="<?php echo $product->main_image ?>" alt="<?php echo $product->name ?>"/>
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo Lib_Image::resize_height($product->main_image, 'products',$product->id, 235, 235); ?>" data-zoom-image="<?php echo $product->main_image ?>" alt="<?php echo $product->name ?>"/>
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo Lib_Image::resize_height($product->main_image, 'products',$product->id, 235, 235); ?>" data-zoom-image="<?php echo $product->main_image ?>" alt="<?php echo $product->name ?>"/>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="name"><?php echo $product->name ?></div>
                                        <?php $price_round = round($product->price*$curr_arr); ?>
                                        <div class="price"><span><?php echo number_format($price_round, 2, ',', ' '); ?></span> <span>руб. с НДС</span></div>
                                        <div class="clear"></div>
                                        <div class="form">
                                            <input name="name" type="text" placeholder="Ваше имя *">
                                            <input name="email" type="text" placeholder="E-mail *">
                                            <input name="phone" type="text" placeholder="Телефон *">
                                            <div class="submit_wrap">
                                                <input class="slider_link_b" type="submit" value="Заказать" data-id="<?php echo $product->id; ?>">
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                     <div class="clear"></div>
                                    <?php
									/* <div class="advantages">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><i class="icon_delivery"></i> Бесплатная доставка по городу Минску!</td>
                                                <td><i class="icon_bag"></i> Сумка для транспортировки в комплекте!</td>
                                            </tr>
                                            <tr>
                                                <td><i class="icon_gift"></i> Дизайн макет два варианта в подарок!</td>
                                                <td><i class="icon_guarantee"></i> Гарантия один год!</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div> */
									?>
									<br></br>
                                    <div class="clear"></div>
                                    <div class="content">
                                        <?php echo $product->content ?>
                                        
                                        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus" data-yashareTheme="counter"></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                   
                </article>
                <div>
                    <?php if ( $mobile->isMobile() ) { ?>
                        <div class="call_w">
                            <strong>Ваш консультант</strong>
                            <div class="cons_name">
                                <div class="img_wrap">
                                    <img src="<?php echo Lib_Image::crop($manager->icon, 'managers',$manager->id, 74, 74); ?>" alt="<?php echo $manager->first_name?> <?php echo $manager->last_name?>"/>
                                </div>
                                <span><?php echo $manager->first_name?><br/><?php echo $manager->last_name?></span>
                            </div>
                            <span class="cons_cont"><?php echo $manager->employee?></span>
                            <span class="cons_cont"><b>Тел.:</b><?php echo $manager->phone?></span>
                            <span class="cons_cont"><b>E-mail:</b><a href="mailto:<?php echo $manager->email?>"><span><?php echo $manager->email?></span></a></span>
                            <a class="skype_call" href="skype:<?php echo $manager->skype?>"><i><!--skype_ico--></i><span>Начать разговор<b></b></span></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
