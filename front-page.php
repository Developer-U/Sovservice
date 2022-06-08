<?php get_header( ); ?>

    <section class="hero">
        <div class="lines"></div>

        <div class="container-fluid hero__contain"> 
            <h1 class="hero__heading">
                РЕМОНТ И&nbsp;ОБСЛУЖИВАНИЕ <br><b class="hero__heading hero__heading_small">БЫТОВОЙ И&nbsp;ПРОМЫШЛЕННОЙ ТЕХНИКИ</b>
            </h1>

            <button class="yellow-button hero__button js-getZakaz">оставить заявку</button>

            <ul class="cols-auto row justify-content-center hero__list col-12">

                <?php wp_nav_menu( array( 'theme_location' => 'additionalmenu' ) ); ?>

            </ul>

            <ul class="social hero__social">
                <li class="social__item col-auto">
                    <a href="https://api.whatsapp.com/send?phone=79091503381" class="social__link whatsapp"></a>
                </li>

                <li class="social__item col-auto">
                    <a href="#" class="social__link viber"></a>
                </li>                

                <li class="social__item col-auto">
                    <a href="#" class="social__link telegram"></a>
                </li>

                <li class="social__item col-auto">
                    <a href="#" class="social__link vk"></a>
                </li> 
            </ul>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <h2 class="about__heading">
                <?php the_field('mainpage_second_head'); ?>
            </h2>

            <div class="row justify-content-between align-items-stretch about__block">
                <div class="about__text col-lg-6 col-12">

                <?php if( have_rows('add_about_text') ): ?>
                    <?php while( have_rows('add_about_text') ): the_row();
                        $aboutText = get_sub_field('about_text');                      
                    ?>

                    <p class="about__desc">
                        <?= $aboutText;?>
                    </p>

                    <?php endwhile;                    
                    endif;
                    ?>
                </div>

                <figure class="about__image col-lg-6 col-sm-10 col-12">
                    <img src="<?php the_field('about_image'); ?>" alt="" class="about__img">
                </figure>
            </div>

            <ul class="row col-11 justify-content-between counter about__list">
                <li class="counter__item col-auto">
                    <span class="counter__digit"><?php the_field('counter_digit1'); ?></span>
    
                    <p class="counter__descr"><?php the_field('counter_text1'); ?></p>
                </li>
    
                <li class="counter__item col-auto">
                    <span class="counter__digit"><?php the_field('counter_digit2'); ?></span>
    
                    <p class="counter__descr"><?php the_field('counter_text2'); ?></p>
                </li>
    
                <li class="counter__item col-auto">
                    <span class="counter__digit"><?php the_field('counter_digit3'); ?></span>
    
                    <p class="counter__descr"><?php the_field('counter_text3'); ?></p>
                </li>
            </ul>
        </div>       
    </section>

    <?php get_template_part('destinations'); ?>

    <section class="advantages">
        <div class="container">
            <h2 class="advantages__heading">
                <?php the_field('why_we_head'); ?>
            </h2>

            <ul class="row justify-content-between align-items-stretch adv-list advantages__list">

                <?php if( have_rows('add_advantage') ): ?>
                    <?php while( have_rows('add_advantage') ): the_row();
                        $advHead = get_sub_field('advantage_head');  
                        $advDescr = get_sub_field('advantage_descr');
                        $advIcon = get_sub_field('advantage_icon');                    
                    ?>

                <li class="adv-list__item col-lg-4 col-sm-6 col-12">
                    <div class="adv-list__image" style="

                    <?php 
                        if( !empty( $advIcon ) ): ?>
                            background-image: url(<?= $advIcon; ?>) 
                        <?php 
                        else:  ?>
                            background-color: rgba(0,0,0,.7)     
                    <?php endif; ?>
                    
                    "></div>

                    <h3 class="adv-list__heading"><?= $advHead; ?></h3>

                    <p class="adv-list__text"><?= $advDescr; ?></p>
                </li>

                <?php endwhile;

                else: ?>
                    <p>Преимуществ не добавлено.</p>  
                <?php endif;
                ?>

            </ul>
        </div>
    </section>

    <section class="section reviews">
        <div class="container">
            <h2 class="reviews__heading">
                ОТЗЫВЫ НАШИХ КЛИЕНТОВ 
            </h2>

            <!-- Slider main container -->
            <div class="swiper slider-reviews reviews__slider">   
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <?php if( have_rows('new_reviews_add', 'options') ): ?>
                    <?php while( have_rows('new_reviews_add', 'options') ): the_row();
                        $reviewsPhoto = get_sub_field('reviews_photo', 'options');
                        $reviewsName = get_sub_field('reviews_name', 'options');
                        $reviewsPost = get_sub_field('reviews_post', 'options');
                        $reviewsText = get_sub_field('reviews_text', 'options');
                    ?>

                    <div class="swiper-slide">
                        <div class="slider-reviews__slide">
                            <figure class="slider-reviews__photo">
                                <img src="<?= $reviewsPhoto;?>" alt="Фото отзыва" class="slider-reviews__img">
                            </figure>  

                            <h4 class="slider-reviews__name"><?= $reviewsName;?></h4>

                            <p class="slider-reviews__text">
                                <?= $reviewsText;?>
                            </p>

                            <a href="/reviews" class="slider-reviews__link">читать полностью</a>
                        </div>
                    </div> 
                    
                    <?php endwhile;

                    else: ?>
                        <p></p>  
                    <?php endif;
                    ?>
                  
                </div>
                
                <!-- If we need navigation buttons -->
                <div class="button-prev"></div>
                <div class="button-next"></div>
            </div> 

            <a class="yellow-button destinations__button" href="/reviews">смотреть все отзывы</a>
        </div>
    </section>

    <?php get_template_part('form-main'); ?>

<?php get_footer(); ?>