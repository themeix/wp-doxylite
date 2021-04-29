<?php get_header();

get_theme_mod('header_image', DOXY_IMG_URL . '/page-title-img.jpg');
?>
<!-- Start Page Title Area -->
<section class="page-title-area doxy-header-image">
    <div class="page-title-wrapper section-spacing">
        <div class="page-title text-center white-text">
            <h1 class="heading-1">
                <?php wp_title(''); ?>
            </h1>
        </div>
    </div>
</section>
<!-- End Page Title Area -->
<!-- Start Blog  Area -->
<div id="content" class="blog-area">
    <div class="blog-wrapper section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/post-loop', 'post-loop'); ?>
                    <?php endwhile;
                    }
                    ?>

                    <?php
                    if (!empty(get_the_posts_pagination())) {
                        get_template_part('template-parts/pagination', 'pagination');
                    }
                    ?>

                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->
<?php get_footer(); ?>