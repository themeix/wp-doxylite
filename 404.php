<?php get_header();  ?>
      <!-- Start Page Title Area -->
      <section class="page-title-area bg-cover1">
        <div class="page-title-wrapper section-spacing">
           <div class="page-title text-center white-text">
              <h1 class="heading-1"><?php esc_html_e('404', 'doxylite'); ?> </h1>
           </div>
        </div>
     </section>
       
      <!-- End Page Title Area -->
      <!-- Start Blog  Area -->
      <section id="content" class="blog-area">
         <div class="blog-wrapper section-spacing minus-t-35p">
            <div class="container">
                  <div class="error-page text-center">
                      <img src="<?php echo esc_url(DOXY_IMG_URL.'/404.png'); ?>" alt="<?php esc_attr_e('Error Logo','doxylite'); ?>">
                      <p class="error-text text-center"><?php echo esc_html__( ' It looks like nothing was found at this location. Maybe try a search..?', 'doxylite' ); ?></p>
                      
                      <div class="search-page-searchform form-404">
                        <?php  get_template_part('template-parts/error-search', 'error-search'); ?>
                     </div>
                      
                  </div>
            </div>
         </div>
      </section>
      <!-- End Blog Area -->
<?php get_footer(); ?>