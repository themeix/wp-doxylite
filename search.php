<?php get_header();  ?>
<!-- Start Page Title Area -->
<section class="page-title-area bg-cover1">
    <div class="page-title-wrapper section-spacing">
        <div class="container">
            <div class="page-title text-center white-text">
                <h1 class="heading-1">
                    <?php echo esc_html__('Search results for : ', 'doxylite'); ?> <strong><?php echo get_search_query(); ?></strong>
                </h1>
            </div>
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
                            } else { ?>

                            <h2 class="text-left search-empty"><?php echo esc_html__('Nothing Found', 'doxylite');  ?></h2>

                            <p class="text-left search-empty"><?php echo esc_html__('Sorry, nothing matched your search terms. Please try again with some different keywords.', 'doxylite');  ?></p>

                            <div class="search-page-searchform">
                                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url()); ?>">
                                    <label>
                                        <input type="search" class="search-field" placeholder="<?php esc_attr_e('Search', 'doxylite'); ?>" value="" name="s">
                                    </label>
                                    <button type="submit" class="search-submit"><i class="fa fa-search"></i> </button>

                                </form>
                            </div>

                        <?php

                        }
                        if (!empty(get_the_posts_pagination())) {
                            get_template_part('template-parts/pagination', 'pagination');
                        }
                    ?>
                </div>
                <?php get_sidebar();  ?>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->
<?php get_footer(); ?>