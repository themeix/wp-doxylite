<article <?php post_class(); ?>>
    <?php
            if (has_post_thumbnail()) { ?>
        <div class="blog-img">
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('doxy-featured-image'); ?></a>
        </div>
    <?php
            }
            ?>
    <div class="blog-content">
        <h3 class="heading-3"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
        <p>
            <?php
                if (class_exists('kirki')) {
                    $excerpt_limit = get_theme_mod('post_excerpt_limit', '30');
                }
                if (!empty($excerpt_limit)) {
                    $limit = $excerpt_limit;
                } else {
                    $limit = 30;
                }
                if (has_excerpt()) {
                    the_excerpt();
                } else {
                    echo doxy_excerpt($limit);
                }
                ?>
        </p>
    </div>
    <?php echo get_template_part('template-parts/blog-meta', 'blog-meta'); ?>
</article>