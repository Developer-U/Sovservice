<?php get_header( ); ?>

<section class="hero-second about-hero">
    <div class="lines"></div>

    <div class="container-fluid">
        <h1 class="hero-second__heading about-hero__heading">
            о нас
        </h1>
    </div>
</section>

<section class="section about">
    <div class="container">    
        <div class="row justify-content-between align-items-stretch">
            <div class="about__text col-lg-6 col-12">

            <?php if( have_rows('add_text_of_about') ): ?>
                <?php while( have_rows('add_text_of_about') ): the_row();
                    $aboutOfText = get_sub_field('about_of_text');                      
                ?>

                <p class="about__desc">
                    <?= $aboutOfText;?>
                </p>

                <?php endwhile;                    
                endif;
                ?>
        
            </div>

            <figure class="about__image col-lg-6 col-sm-10 col-12">
                <img src="<?php the_field('about_of_image'); ?>" alt="" class="about__img">
            </figure>
        </div>
    </div>       
</section>

<section class="section it-works">
    <div class="lines-up"></div>

    <div class="container destinations__contain">
        <h2 class="reviews__heading">
            <?php the_field('how_we_head'); ?>
        </h2>

        <div class="row align-items-stretch justify-content-between dest it-works__list">

        <?php if( have_rows('add_work_level') ): ?>
            <?php while( have_rows('add_work_level') ): the_row();
                $levelHead = get_sub_field('level_head'); 
                $levelNum = get_sub_field('level_number');
                $levelDescrip = get_sub_field('level_descrip');                          
            ?>
                
            <article class="dest__article it-works__article col-xl-4 col-sm-6 col-12">
                <span class="it-works__digit"><?= $levelNum;?></span>

                <h3 class="it-works__heading"><?= $levelHead;?></h3>

                <p class="it-works__text it-works__item">
                    <?= $levelDescrip;?>
                </p>
            </article>
            
            <?php endwhile;

            else: ?>
                <p>Этапы работы не добавлены.</p>  
            <?php endif;
            ?>

        </div>

        <button class="yellow-button destinations__button js-getZakaz">оставить заявку</button>
    </div>
</section>

<?php get_template_part('geo-position'); ?>

<?php get_template_part('form-main'); ?>

<?php get_footer(); ?>