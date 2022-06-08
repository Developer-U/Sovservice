<?php
/*
* Template name: Блог
*/
get_header('blog');
?>

<section class="hero-second blog-bg" style="
    <?php
        $imageblog = get_field('blog_bg');

        if( !empty( $imageblog ) ): ?>
            background-image: url(<?= $imageblog; ?>) 
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

<section class="section-breadcrumbs blog">
    <div class="container"> 
        <span class="breadcrumbs">
            <a href="/">главная</a> / <?php the_title(); ?>
        </span> 

        <p class="blog__text col-xl-7 col-12">
            <?php the_field('blog_main_text'); ?>
        </p>

        <div class="blog__stripe">
            <span class="listBlock blog__list level-btn row justify-content-between">
                <div class="level-btn__block">
                    <span class="level-btn__table"></span>

                    <button id="block1" class="block1Link link1">плиткой</button>
                </div>

                <div class="level-btn__block">
                    <span class="level-btn__list"></span>

                    <button id="block2" class="block1Link link2">списком</button>  
                </div>      
            </span>
        </div>

        <ul id="table" class="blog__table blog-table row align-items-stretch">

        <?php
   
        $query = new WP_Query( array(
            'post_type' => 'post',
            'orderby' => 'ID',
            'order' => 'ASC',
            'posts_per_page' => -1,

        ) );

        if( $query->have_posts() ): 

        while( $query->have_posts() ) : $query->the_post();
        setup_postdata($post);
        ?>

            <li class="blog-table__item col-4">
                <div class="blog-table__top">
                    <figure class="blog-table__image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="blog-table__img">
                    </figure>

                    <a href="<?php echo $post->post_name;?>" class="blog-table__to">
                        <h3 class="blog-table__heading">
                            <?php echo $post->post_title; ?>
                        </h3>
                    </a>                    

                    <p class="blog-table__text">
                        <?php echo $post->post_excerpt; ?>...  
                    </p>
                </div>

                <div class="blog-table__bottom">
                    <a href="<?php echo $post->post_name;?>" class="blog-table__link">читать далее</a>

                    <date class="blog-table__date"><?php the_date(); ?></date>
                </div>
            </li>

        <?php  	endwhile;
        wp_reset_postdata(); 

        else: ?>
            <div class="blog-none">
                <p class="blog-none__text">Статьи пока не добавлены.</p>

                <a class="list-more" href="/"> Перейти на главную</a>
            </div>             
            
        <?php endif;
        ?>       

        </ul>

        <ul id="list" class="blog__list blog-list">

        <?php   
        $query = new WP_Query( array(
            'post_type' => 'post',
            'orderby' => 'ID',
            'order' => 'ASC',
            'posts_per_page' => -1,

        ) );

        while( $query->have_posts() ) : $query->the_post();
        setup_postdata($post);
        ?>

            <li class="blog-list__item row justify-content-between">               
                <figure class="blog-list__image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="blog-table__img">
                </figure>

                <div class="blog-list__right">
                    <div class="row blog-list__block row justify-content-between">
                        <a href="<?php echo $post->post_name;?>" class="blog-table__to">
                            <h3 class="blog-list__heading">
                                <?php echo $post->post_title; ?>
                            </h3>
                        </a>

                        <date class="blog-list__date"><?php the_date(); ?></date>
                    </div>

                    <p class="blog-list__text">
                        <?php echo $post->post_excerpt; ?>...  
                    </p>

                    <a href="<?php echo $post->post_name;?>" class="blog-table__link">читать далее</a>
                </div>                
            </li>

        <?php  	endwhile;
        wp_reset_postdata(); 
        ?>

        </ul>

    </div>
</section>

<?php get_footer(); ?>

