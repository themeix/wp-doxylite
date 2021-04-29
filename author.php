<?php get_header();  ?>
<!-- Start Page Title Area -->
<section class="page-title-area bg-cover1">
    <div class="page-title-wrapper section-spacing">
        <div class="page-title text-center white-text">
            <h1 class="heading-1">
                <?php esc_html_e('Author - ', 'doxylite');
                the_author(); ?>
            </h1>
            <p class="page-title-meta">
                <?php
                $count_author_post = count_user_posts(get_the_author_meta('ID'));
                if ($count_author_post < 2) {
                    echo esc_html($count_author_post . ' post', 'doxylite');
                } else {
                    echo esc_html($count_author_post . ' posts', 'doxylite');
                }
                ?>
            </p>
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