<?php
/*
* Template name: Услуги
*/
get_header();
?>

<section class="hero-second" style="
    <?php
        $image = get_field('main_bg');
 
        if( !empty( $image ) ): ?>
            background-image: url(<?= $image; ?>) 
        <?php 
        else:  ?>
            background-color: rgba(0,0,0,.7)     
    <?php endif; ?>
    ">
   
    <div class="lines"></div>

    <div class="container-fluid">
        <h1 class="hero-second__heading conditioners-hero__heading">
            <?php the_title(); ?>
        </h1>
    </div>
</section>

<main class="main">
    <div class="main-sidebar">
        <?php get_sidebar(); ?>
    </div>    

    <div class="main__content">
        <section class="section section-breadcrumbs about">
            <div class="container margin-left-zero"> 
                <span class="breadcrumbs">
                    <a href="/">главная</a> / услуги / <?php the_title(); ?>
                </span>   

                <div class="row justify-content-between align-items-stretch">
                    <div class="about__text col-lg-6 col-12">
                        <?php if( have_rows('add_text_block2') ): ?>
                            <?php while( have_rows('add_text_block2') ): the_row();
                                $text2 = get_sub_field('text_block2');
                            ?>

                        <p class="about__desc">
                            <?= $text2; ?>
                        </p>                      

                            <?php endwhile;
                            endif;
                            ?>
                    </div>

                    <figure class="about__image col-lg-6 col-sm-10 col-12">
                        <img src= "<?php the_field('image_block_2'); ?>" class="about__img">
                    </figure>
                </div>
            </div>       
        </section>

        <section class="section-services">
            <div class="lines-up"></div>

            <div class="container destinations__contain margin-left-zero">
                <h2 class="reviews__heading">
                    <?php the_field('head_3'); ?>
                </h2>

                <div class="row align-items-stretch dest destinations__list">

                    <?php if( have_rows('new_card_3') ): ?>
                        <?php while( have_rows('new_card_3') ): the_row();
                            $text3 = get_sub_field('card3_name');
                            $image3 = get_sub_field('card3_image');
                        ?>

                    <article class="dest__article col-lg-4 col-sm-6 col-12">
                        <h3 class="visually-hidden"><?= $text3; ?></h3>
                        <figure class="dest__image">                            
                            <img src="<?= $image3; ?>" alt="" class="dest__img">
                        </figure>

                        <div class="dest__descr">
                            <p class="dest__link"><?= $text3; ?></p>
                        </div>
                    </article>                                     
                   

                    <?php endwhile;

                    else: ?>
                        <p>Ни одной услуги не добавлено.</p>  
                    <?php endif;
                    ?>

                </div>          
            </div>
        </section>

        <section class="section brands">
            <div class="container margin-left-zero">
                <h2 class="brands__heading">
                    <?php the_field('head_4'); ?>
                </h2>

                <ul class="brands-list brands__list row align-items-stretch">
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item1"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item2"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item3"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item4"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item5"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item6"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item7"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item8"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item9"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item10"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item11"></li>
                    <li class="brands-list__item col-xl-2 col-md-3 col-sm-4 col-6 item12"></li>
                </ul>
            </div>
        </section>

        <section class="black prices">
            <div class="container margin-left-zero black__contain">
                <h2 class="black__heading">
                    <?php the_field('head_5'); ?>
                </h2>

                <a href="<?php the_field('price_file'); ?>" download class="black__file">скачать прайс</a>

                <?php 
                $link = get_field('price_link');
                if( $link ): ?>
                
                <iframe id="priceDiv" class="black__price" src="<?php echo esc_url( $link ); ?>?widget=true&amp;headers=false"></iframe>
                
                
                  

                <?php else: ?>
                    <div></div>
                    <?php endif;
                ?>
                    
                <?php if( empty( $link ) ): ?>
                <script>document.querySelector('.prices').classList.add('none')</script> 

                <?php endif;
                ?>
            </div>
        </section>

        <section class="break">
            <div class="container margin-left-zero">
                <h2 class="reviews__heading">
                    <?php the_field('head_6'); ?>
                </h2>

                <ul class="break__list break-list row align-items-stretch">

                    <?php if( have_rows('new_card_6') ): ?>
                        <?php while( have_rows('new_card_6') ): the_row();
                            $icon6 = get_sub_field('card_6_icon');
                            $head6 = get_sub_field('card_6_head');
                            $text6 = get_sub_field('card_6_descr');
                        ?>

                    <li class="break-list__item col-sm-6 col-12">
                        <div class="break__block">
                            <div class="break__icon" style="background-image: url(<?= $icon6; ?>)">

                            </div>

                            <h3 class="break-list__heading"><?= $head6; ?></h3>
                        </div>  

                        <p class="break-list__text"><?= $text6; ?></p>                       
                    </li>

                    <?php endwhile;

                    else: ?>
                        <script>document.querySelector('.break').classList.add('none')</script> 
                    <?php endif;
                    ?>

                </ul>

                <!-- <button class="list-more">показать полный список</button> -->
            </div>
        </section>

        <section class="levels-vent">
            <div class="container margin-left-zero">
                <?php if( have_rows('new_level_block') ): ?>
                    <?php while( have_rows('new_level_block') ): the_row();
                        $levelhead = get_sub_field('level_head');                               
                    ?> 

                <div class="levels-vent__block"> 
                    <h2 class="reviews__heading">
                        <?= $levelhead; ?>

                        <ul class="levels-vent__list">

                        <?php if( have_rows('new_level_item') ): ?>
                            <?php while( have_rows('new_level_item') ): the_row();
                                $levelitem = get_sub_field('level_item');                               
                            ?> 

                            <li class="levels-vent__item">
                                <p class="about__desc"><?= $levelitem; ?></p>
                            </li>

                            <?php endwhile;                            
                            endif;
                            ?>

                        </ul>
                    </h2>
                </div> 
                
                <?php endwhile;

                else: ?>
                    <script>document.querySelector('.levels-vent').classList.add('none')</script> 
                <?php endif;
                ?>
                
            </div>
        </section>

        <section class="why">
            <div class="container margin-left-zero">
                <h2 class="reviews__heading">
                    <?php the_field('head_7'); ?>
                </h2>

                <ul class="row justify-content-between align-items-stretch adv-list why__list">

                    <?php if( have_rows('new_card_7') ): ?>
                        <?php while( have_rows('new_card_7') ): the_row();
                            $icon7 = get_sub_field('card_7_icon');
                            $head7 = get_sub_field('card_7_head');
                            $text7 = get_sub_field('card_7_text');
                        ?>

                    <li class="adv-list__item col-lg-4 col-sm-6 col-12">
                        <div class="adv-list__image" style="background-image: url(<?= $icon7; ?>)"></div>

                        <h3 class="adv-list__heading adv-list__heading_black"><?= $head7; ?></h3>

                        <p class="adv-list__text adv-list__text_black">
                            <?= $text7; ?>
                        </p>
                    </li>

                    <?php endwhile;

                    else: ?>
                        <p>Преимуществ не добавлено.</p>  
                    <?php endif;
                    ?>

                </ul>
            </div>
        </section>

        <section class="section contacts">
            <div class="lines"></div>

            <div class="container margin-left-zero">
                <h2 class="contacts__heading">
                    ОСТАВЬТЕ ЗАЯВКУ УЖЕ СЕГОДНЯ!
                </h2>

                <div class="form col-lg-7 col-12">
                    <?php echo do_shortcode('[contact-form-7 id="14" title="Основная контактная форма"]'); ?>
                </div>
            </div>
        </section>
    </div>   
</main>

<?php
get_footer(); 
?>
