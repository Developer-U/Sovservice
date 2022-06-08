<?php get_header('blog'); ?>

<section class="contacts-page reviews-page">  
    <div class="container reviews-page__block reviews-block"> 
        <h1 class="contacts-block__heading">
            <?php the_title(); ?>
        </h1>

        <span class="breadcrumbs">
            <a href="/">главная</a> / <?php the_title(); ?>
        </span>

        <p class="reviews-page__text col-xl-7 col-12">
            <?php the_field('reviews_page_text'); ?>           
        </p>

        <div class="blog__stripe blog__stripe_reviews"></div>

        <ul class="reviews-list">

            <?php if( have_rows('new_reviews_add') ): ?>
                <?php while( have_rows('new_reviews_add') ): the_row();
                    $reviewsPhoto = get_sub_field('reviews_photo');
                    $reviewsName = get_sub_field('reviews_name');
                    $reviewsPost = get_sub_field('reviews_post');
                    $reviewsText = get_sub_field('reviews_text');
                ?>

            <li class="reviews-list__item row justify-content-between">               
                <figure class="reviews-list__image">
                    <img src="<?= $reviewsPhoto;?>" alt="" class="blog-table__img">
                </figure>

                <div class="reviews-list__right">
                    <div class="blog-list__block">
                        <h3 class="blog-list__heading reviews-list__heading">
                            <?= $reviewsName;?>
                        </h3>

                        <p class="reviews-list__post">
                            <?= $reviewsPost;?>
                        </p>
                    </div>

                    <p class="reviews-list_text">
                        <?= $reviewsText;?>
                    </p>              
                </div>                
            </li>

            <?php endwhile;

            else: ?>
                <p>Отзывов не добавлено.</p>  
            <?php endif;
            ?>

        </ul>
    </div>
</section>

<?php get_template_part('destinations'); ?>

<?php get_footer(); ?>