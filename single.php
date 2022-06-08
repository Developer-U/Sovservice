<?php
/*
* Template name: Страница блога
*/
get_header('blog');
?>

<main class="blog-page">
    <div class="container">
        <h1 class="blog-page__heading">
            <?php echo $post->post_title; ?>
        </h1>

        <div class="row justify-content-between blog-page__share share-block">
            <date class="blog-page__date"><?php the_date(); ?></date>

            <div class="share-block__content row justify-content-between">
                <span class="share-block__share">
                    поделиться статьёй
                </span>

                <span class="share-block__buttons"></span>
            </div>
        </div>

        <figure class="blog-page__image">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="blog-page__img">
        </figure>

        <section class="single-main">
            <article class="single-main__article single-article">
                <h2 class="single-main__heading visually-hidden">
                    <?php echo $post->post_title; ?>
                </h2>

                <span class="breadcrumbs short">
                    <a href="/">главная</a> / <a href="/blog-page">блог</a> / <?php the_title(); ?>
                </span> 

                <div class="single-main__content">
                    <?php echo get_the_content(); ?>
                </div>

                <span class="share-block__buttons"></span>
            </article>

            <div class="single-main__sidebar single-sidebar">
                <?php get_sidebar('blog'); ?> 
            </div>            
        </section>

        <section class="btns-blog">
            <div class="btns-blog__contain row justify-content-between col-xl-7 col-sm-9 col-11">
                <a class="transparent-button btns-blog__btn btns-blog__btn_first" href="#">к списку статей</a>

                <a class="transparent-button btns-blog__btn" href="#">на главную</a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>