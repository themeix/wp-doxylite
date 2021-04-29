<div <?php post_class(); ?>>
    <?php
    global $doxy;
    if (has_post_thumbnail()) { ?>
        <div class="single-img">
            <?php the_post_thumbnail('doxy-featured-image'); ?>
        </div>
    <?php
    }
    ?>
    <?php
    if (!empty(get_the_content())) { ?>

        <div class="single-content hentry-content">
            <?php
                the_content();
                wp_link_pages(array(
                    'before'      => '<div class="single-page-pagination"><div class="single-page-numbers"><span class="page-links-title">' . esc_html__('Pages : ', 'doxylite') . '</span>',
                    'after'       => '</div></div>',
                    'separator'   => ' ',
                ));
                ?>
        </div>
    <?php
    }
    ?>

    <div class="single-tags-share">
        <?php
        if (!empty(get_the_tags())) { ?>
            <ul class="single-tags list-inline float-left">
                <li class="list-inline-item"><?php esc_html_e('Tags : ', 'doxylite'); ?></li>
                <li class="list-inline-item">
                    <?php
                        the_tags('', ' ', '');
                        ?>
                </li>
            </ul>
        <?php
        }
        if (class_exists('ThemeixDoxyPlugin')) {
            echo do_shortcode('[social_share_buttons]');
        }
        ?>
    </div>

    <?php
    $author_desc = get_the_author_meta('description');
    if (!empty($author_desc)) { ?>
        <div class="single-admin">
            <div class="admin-avatar">
                <?php echo get_avatar(get_the_author_meta('ID'), 130); ?>
            </div>
            <div class="admin-comment">
                <p><?php the_author_meta('description'); ?> </p>
                <h4 class="heading-4"><?php the_author(); ?></h4>
                <h6 class="heading-6"><?php the_author_meta('job-status'); ?></h6>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    if (is_singular('post')) { ?>
        <nav class="page-pagination">
            <ul class="pagination d-flex justify-content-between themeix-highlight">
                <?php
                    if (!empty(get_previous_post_link())) { ?>
                    <li class="page-item themeix-highlight">
                        <?php previous_post_link('%link', esc_html__('<< Previous Post', 'doxylite'), 'no') ?>
                    </li>
                <?php
                    }
                    ?>

                <?php
                    if (!empty(get_next_post_link())) { ?>
                    <li class="page-item themeix-highlight">
                        <?php next_post_link('%link', esc_html__('Next Post >>', 'doxylite'), 'no') ?>
                    </li>
                <?php
                    }
                    ?>

            </ul>
        </nav>
    <?php
    }

    get_template_part('template-parts/comments-template', 'comments-template');
    ?>
</div>