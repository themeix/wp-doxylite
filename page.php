<?php
get_header();

if (class_exists('acf')) {
   $bg_image = get_field('doxy_page_title_bg');
   $bg_color = get_post_meta(get_the_id(), 'doxy_page_title_bg_color', true);
   $bg = get_post_meta(get_the_id(), 'page_bg', true);
} else {
   $bg_image = '';
   $bg_color = '';
   $bg = '';
}

?>
<!-- Start Page Title Area -->
<section class="page-title-area bg-cover1" style="<?php if ($bg == 'image' && class_exists('ACF')) {
                                                      echo 'background-image: url(' . esc_url($bg_image) . ')';
                                                   } elseif ($bg == 'color' && class_exists('ACF')) {
                                                      echo 'background:' . esc_attr($bg_color);
                                                   } else {
                                                      echo '';
                                                   } ?>">
   <div class="page-title-wrapper section-spacing">
      <div class="container">
         <div class="page-title text-center white-text">
            <h1 class="heading-1">
               <?php the_title(); ?>
            </h1>
         </div>
      </div>
   </div>
</section>

<!-- Start Blog  Area -->
<div id="content" class="blog-area">
   <div class="blog-wrapper section-spacing">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-7">
               <div class="page-content hentry-content">
                  <?php
                  if (have_posts()) {
                     while (have_posts()) {
                        the_post();
                        the_content();
                        wp_link_pages(array(
                           'before'      => '<div class="single-page-pagination"><div class="single-page-numbers"><span class="page-links-title">' . esc_html__('Pages : ', 'doxylite') . '</span>',
                           'after'       => '</div></div>',
                           'separator'   => ' ',
                        ));
                     }
                  }
                  ?>
               </div>

               <?php get_template_part('template-parts/comments-template', 'comments-template'); ?>

            </div>
            <?php get_sidebar(); ?>
         </div>
      </div>
   </div>
</div>
<!-- End Blog Area -->
<?php get_footer(); ?>