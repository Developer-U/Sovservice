<?php get_header('blog'); ?>

<section class="contacts-page">
    <div class="lines-up"></div>

    <div class="container container-small contacts-page__block contact-block"> 
        <h1 class="contacts-block__heading">
         <?php the_title(); ?>
        </h1>

        <span class="breadcrumbs contact">
            <a href="/">главная</a> / <?php the_title(); ?>
        </span>

        <ul class="contact-block__list row justify-content-between">
            <li class="contact-block__item col-sm-6 col-12">
                <a href="tel:+7<?php the_field('phone_link', 'options'); ?>" class="contact-block__link phone"><?php the_field('phone_number', 'options'); ?></a>
            </li>

            <li class="contact-block__item col-sm-6 col-12">
                <a href="mailto:<?php the_field('mail_address', 'options'); ?>" class="contact-block__link mail contact-block__link_left"><?php the_field('mail_address', 'options'); ?></a>
            </li>

            <li class="contact-block__item col-sm-6 col-12">
                <a href="https://api.whatsapp.com/send?phone=7<?php the_field('whatsapp_link', 'options'); ?>" class="contact-block__link whatsapp"><?php the_field('whatsapp_input', 'options'); ?></a>
            </li>

            <li class="contact-block__item col-sm-6 col-12">
                <a href="mailto:info@sovservice.ru" class="contact-block__link mail contact-block__link_left">info@sovservice.ru</a>
            </li>

            <li class="contact-block__item col-sm-6 col-12">
                <p class="contact-block__link geo"><?php the_field('address_text', 'options'); ?></p>
            </li>
        </ul>       
    </div>    
</section>

<section class="section about yourist">
    <div class="container container-small">
        <h2 class="reviews__heading">
            <?php the_field('info_your_heading'); ?>   
        </h2>

        <ul class="yourist__list">

        <?php if( have_rows('add_field_your_info') ): ?>
            <?php while( have_rows('add_field_your_info') ): the_row();               
                $inInfoName = get_sub_field('info_your_name');               
                $inInfoText = get_sub_field('info_your_text');
            ?>

            <li class="yourist__label">
                <span class="yourist__name">
                    <?= $inInfoName;?>
                </span>

                <p class="yourist__text">
                    <?= $inInfoText;?>
                </p>
            </li>

            <?php endwhile;

            else: ?>
                <p></p>  
            <?php endif;
            ?>

        </ul>
    </div>
</section>

<?php get_template_part('geo-position'); ?>

<?php get_template_part('destinations'); ?>

<?php get_template_part('form-main'); ?>

<?php get_footer(); ?>