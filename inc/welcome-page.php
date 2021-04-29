<?php

function doxy_admin_menu()
{

    add_theme_page('About Doxylite', 'About Doxylite', 'edit_theme_options', 'about-Doxylite', 'doxylite_info');
}
add_action('admin_menu', 'doxy_admin_menu');



function doxylite_info()
{
    ?>

    <div id="wpbody-content">
        <div id="screen-meta" class="metabox-prefs">
            <div id="contextual-help-wrap" class="hidden no-sidebar" tabindex="-1" aria-label="<?php echo esc_attr__('Contextual Help Tab', 'doxylite'); ?>">
                <div id="contextual-help-back"></div>
                <div id="contextual-help-columns">
                    <div class="contextual-help-tabs">
                        <ul>
                        </ul>
                    </div>
                    <div class="contextual-help-tabs-wrap">
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap about-wrap doxy-add-css">
            <div>
                </h3>


                <h3 class="welcome-text">
                    <?php echo esc_html__('Welcome to Doxylite WordPress Theme!', 'doxylite') ?> </h3>

                <div class="feature-section three-col">
                    <div class="col">
                        <div class="widgets-holder-wrap">
                            <h3><?php echo esc_html__('Contact Support', 'doxylite') ?></h3>
                            <p><?php echo esc_html__('Getting started with a new theme can be difficult, if you have issues with doxy then throw us an email.', 'doxylite') ?></p>
                            <p><a target="blank" href="<?php echo esc_url('https://support.themeix.com') ?>" class="button button-secondary button-hero">
                                    <?php echo esc_html__('Contact Support', 'doxylite') ?> </a></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="widgets-holder-wrap">
                            <h3><?php echo esc_html__('More WordPress Themes', 'doxylite') ?></h3>
                            <p><?php echo esc_html__('Do you like our concept but feel like the design doesn\'t fit your need? Then check out our website for more designs.', 'doxylite') ?></p>

                            <p><a target="blank" href="<?php echo esc_url('https://themeix.com/product/category/wordpress/') ?>" class="button button-secondary button-hero">
                                    <?php echo esc_html__(' View All Theme', 'doxylite') ?> </a></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="widgets-holder-wrap">
                            <h3><?php echo esc_html__('Doxy Pro', 'doxylite') ?></h3>
                            <p><?php echo esc_html__('If you enjoy doxy and want to take your website to the next step, then check out our premium edition here.', 'doxylite') ?></p>

                            <p><a target="blank" href="<?php echo esc_url('https://themeix.com/product/doxy-responsive-wordpress-theme/') ?>" class="button button-primary button-hero">
                                    <?php echo esc_html__('View Details', 'doxylite') ?> </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="free-vs-pro">
                <h3 class="welcome-text"><?php echo esc_html__('Free Vs Premium', 'doxylite') ?></h3>
            </div>
            <table class="themeix-compare-table-btns">
                <tbody>
                    <tr>
                        <th><strong><a target="blank" href="<?php echo esc_url('https://docs.themeix.com/doxy-wordpress-theme/') ?>" class="themeix-admin-btn themeix-admin-btn-md button button-"><?php echo esc_html__('Read Full Documentation', 'doxylite') ?> </a></strong></th>

                        <th><strong><a target="blank" href="<?php echo esc_url('https://wp-doxy.themeix.com') ?>" class="button button-primary"><?php echo esc_html__('Pro Version Demo', 'doxylite') ?> </a></strong></th>
                    </tr>
                </tbody>
            </table>
            <table class="themeix-compare-table wp-list-table widefat">

                <thead>
                    <tr>
                        <th><strong><?php echo esc_html__('Theme Features', 'doxylite') ?></strong></th>
                        <th><strong><?php echo esc_html__('Lite Version', 'doxylite') ?></strong></th>
                        <th><strong><?php echo esc_html__('Pro Version', 'doxylite') ?></strong></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo esc_html__('Elementor Support', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Documentation Compatibility', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Theme Options', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>

                    <tr>
                        <td><?php echo esc_html__('Custom Navigation Logo Or Text', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Hide Logo Text', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>


                    <tr>
                        <td><?php echo esc_html__('Custom Logo Upload', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Logo Size maintains', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>

                    <tr>
                        <td><?php echo esc_html__('Page Options', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Normal Page Title Background(color/image)', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>

                    <tr>
                        <td><?php echo esc_html__('Blog Post Excerpt Limit', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Scroll Back to Top', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Facebook Pixel Code Support', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Google Analytics Code Support', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Fully Responsive', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Widgetized Footer', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Translation Ready', 'doxylite') ?></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Multilingual Ready', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Fully Customizable Colors', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Advance Typography Options', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Priority support', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('1 Year Email Support', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Child Theme', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Demo Content', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Custom Elemenor Addons', 'doxylite') ?></td>
                        <td><span class="cross"><?php echo esc_html__('0', 'doxylite') ?></span></td>
                        <td><span class="checkmark"><?php echo esc_html__('9', 'doxylite') ?></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('One Click Demo Import', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Breadcrumb', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>


                    <tr>
                        <td><?php echo esc_html__('Text Logo Custom Color', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Text Logo Custom Typography', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Logo Tagline Color', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Logo Tagline Typography', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>

                    <tr>
                        <td><?php echo esc_html__('Preloader Enable/Disable', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Page Layout', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Blog Layout', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Footer Layout', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>


                    <tr>
                        <td><?php echo esc_html__('Brand Removal Option', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Unlimited Color', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Unlimited Typography', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html__('Security updates & feature releases', 'doxylite') ?></td>
                        <td><span class="dashicons dashicons-no-alt"></span></td>
                        <td><span class="dashicons-before dashicons-yes"></span></td>
                    </tr>

                </tbody>
            </table>

        </div>

        <div class="clear"></div>
    </div>
<?php
}


?>