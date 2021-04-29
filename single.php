<?php get_header();
    
     if(class_exists('ACF')){
        $bg_image = get_field('doxy_post_title_bg');
    }
     
    $bg_color = get_post_meta(get_the_id(), 'doxy_post_title_bg_color', true);
    $bg = get_post_meta(get_the_id(), 'post_bg', true);
    
?>
      <!-- Start Page Title Area -->
      <?php 
          if(have_posts()){
               while(have_posts()) : the_post();
               ?>
                   <section class="page-title-area bg-cover1" style="<?php if($bg == 'image' && class_exists('ACF')){echo 'background-image: url('.esc_url($bg_image).')'; }elseif($bg == 'color' && class_exists('ACF')){ echo 'background:'.esc_attr($bg_color); }else{echo '';}?>">
                   
                     <div class="page-title-wrapper section-spacing">
                        <div class="page-title text-center white-text">
                           <h2 class="heading-2"><?php the_title(); ?></h2>
                           <ul class="page-title-meta list-inline">
                              <li class="list-inline-item"><img src="<?php echo esc_url(DOXY_IMG_URL.'/slider-author.png'); ?>" alt="<?php esc_attr_e('Author Icon', 'doxylite'); ?>"> <?php the_author_posts_link(); ?></li>
                              <li class="list-inline-item"><img src="<?php echo esc_url(DOXY_IMG_URL.'/slider-date.png'); ?>" alt="<?php esc_attr_e('Calender Icon', 'doxylite'); ?>"> <?php the_time(get_option('date_format')); ?></li>
                              <?php
                                  if(is_sticky()){?>
                                      <li class="list-inline-item"><img src="<?php echo esc_url(DOXY_IMG_URL.'/push-pin-light.png'); ?>" alt="<?php esc_attr_e('Sticky Post', 'doxylite');  ?>"><?php esc_html_e('Sticky', 'doxylite'); ?></li>
                                  <?php 
                                  }
                              ?>
                           </ul>
                        </div>
                     </div>
                  </section>


                  <!-- End Page Title Area -->
                  <!-- Start Blog  Area -->
                  <section id="content" class="blog-area">
                     <div class="blog-wrapper section-spacing bminus-30">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-8 col-md-7">
                                 <?php get_template_part('template-parts/content', 'single-content');?>
                              </div>
                              <?php get_sidebar(  ); ?>
                           </div>
                        </div>
                     </div>
                  </section>
              <?php endwhile;
          }
          
      ?>
      
      <!-- End Blog Area -->
<?php get_footer(); ?>