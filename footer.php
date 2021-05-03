    <!-- Start Footer Area -->
    <footer class="footer-area bg-color3">
        <?php
            if (is_active_sidebar('footer1') || is_active_sidebar('footer2') || is_active_sidebar('footer3') || is_active_sidebar('footer4')) { ?>
                <div class="footer-wrapper section-spacing bminus-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <?php dynamic_sidebar('footer1'); ?>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <?php dynamic_sidebar('footer2'); ?>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <?php dynamic_sidebar('footer3'); ?>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <?php dynamic_sidebar('footer4'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        ?>
        <div class="footer-wrapper copyright">
            <div class="container">
                <div class="footer-copyright text-center">
                    <p><?php esc_html_e('Copyright ', 'doxylite'); echo esc_html(date('Y')); esc_html_e(' Doxylite - Designed by ', 'doxylite'); ?> <a href="<?php echo esc_url('https//themeix.com'); ?>"><?php esc_html_e('Themeix', 'doxylite'); ?></a></p>
                </div>
            </div>
        </div>



        <?php if (get_theme_mod('back_to_top', '1') == '1') { ?>
            <a href="#" class="home-top"><i class="fa fa-angle-down" ></i></a>
        <?php } ?>

    </footer>
    <!-- End Footer Area -->

    <?php wp_footer(); ?>
    </body>

    </html>