<?php
function doxy_inline_style()
{
    wp_enqueue_style(
        'style',
        DOXY_THEME_URI . '/style.css'
    );

    if (!empty(get_header_image())) {
        $header_bg = 'url(' . get_header_image() . ')';
    } else {
        $header_bg = 'url(' . DOXY_IMG_URL . '/page-title-img.jpg)';
    }


    $logo_width = get_theme_mod('brand') . 'px';
    $theme_color = get_theme_mod('theme_primary_color', '#280636');

    $custom_css = "
        .doxy-header-image{
            background-image: $header_bg;
            background-size: cover;
            background-repeat: no-repeat;
        }
        a:hover,
        h1 a:hover,
        h2 a:hover,
        h3 a:hover,
        h4 a:hover,
        h5 a:hover,
        h6 a:hover,
        .btn-style1:hover,
        .btn-style1:focus,
        .btn-style1:active,
        .btn-style2:hover,
        .btn-style2:focus,
        .btn-style2:active,
        .btn-style3:hover,
        .btn-style3:focus,
        .btn-style3:active,
        .header-navigation .navigation-box #navigation-menu li.has-submenu ul li a:hover,
        .slider-search-form button,
        .slider-search-form button:hover,
        .slider-search-form button:focus,
        .slider-search-form button:active,
        ul.topics-list li i:before,
        .testimonial-item .testimonial-rating i,
        .looking-for-service:hover .btn,
        p.logged-in-as a:hover,
        .form-action .file-upload:before,
        .privacy-policy-box .privacy-policy-content .privacy-policy-list li:before,
        .single-post .single-tags-share .single-tags a:hover,
        .single-post .single-tags-share .single-tags a:focus,
        .single-post .single-tags-share .single-share a:hover,
        .single-post .single-tags-share .single-share a:focus,
        .recentcomments span.comment-author-link a:hover,
        .page-pagination .next-btn:hover,
        .page-pagination .prev-btn:hover,
        .single-comment-desc .single-comment-btn,
        .category-widget li:hover a,
        .category-widget li.list-group-active a,
        a.rsswidget,
        .sidebar-widget li a:hover,
        .footer-widget li a:hover,
        .error-text a,
        .unorder-list li:before,
        .order-list li a,
        .sidebar-menu [aria-expanded*='false']:after,
        .sidebar-menu [aria-expanded*='true']:after,
        ul.popular-article-list>li>i,
        .hentry-content a,
        .footer-copyright p a,
        .looking-for-service:hover .service-btn .elementor-button,
        .testimonial-author-name a:hover,
        .comment-content table a,
        .page-content p>a,
        .page-content li>a,
        .reply a:hover,
        li.recentcomments>a:hover,
        .comments_template .btn-style2:focus,
        .comments_template .btn-style2:active,
        .single-page-numbers .post-page-numbers,
        ul.blog-meta.list-inline li a,
        .single-content p a,
        .single-content label,
        .page-content label,
        ul.wp-block-archives.wp-block-archives-list li a:hover,
        ul.wp-block-categories.wp-block-categories-list li a:hover,
        .page-item a:hover,
        a.more-link,
        .print-link,
        .print-link:hover,
        .docs-footer span.text-left a,
        .dwqa-btn-primary:hover,
        .wpas-form h3,.navigation-navbar ul.sub-menu li a:hover {
            color: $theme_color;
        }
        
        .home-top,
        .bg-color2,
        .overlay-color,
        .btn-style2,
        .btn-style3,
        .topics-service .topics-title:before,
        .faq-service .faq-logo .logo-text,
        .faq-accordion .card .card-header,
        .pupolar-article-area2 .pupolar-article .popular-article-top,
        .feature-box .feature-logo,
        .looking-for-service:hover,
        .newsletter-form button[type='submit'],
        .sub-title:after,
        .page-navigation .pagination li:first-child a,
        .page-navigation .pagination li:last-child a,
        .single-post .single-quote:before,
        .search-form-widget button[type='submit'],
        .tag-widget li a:hover,
        .team-style .team-content .team-socials li,
        #wp-calendar caption,
        #wp-calendar thead th,
        form.search-form .search-submit,
        .prev,
        .next,
        .prev:hover,
        .next:hover,
        .tagcloud a:hover,
        h3#reply-title:after,
        ul.nav.nav-pills.nav-stacked.flex-column li a.active,
        .footer-widget button.btn.btn-primary,
        .sidebar-title:after,
        .single-content form [type=submit],
        .page-content form [type=submit],
        button.wpas-btn.wpas-btn-default,
        .dwqa-btn-primary,
        li.doc-active a,.page-title-wrapper:before,.loading-main {
            background-color: $theme_color;
        }
        
        .btn-style1:hover,
        .btn-style1:focus,
        .btn-style1:active,
        .btn-style3:hover,
        .btn-style3:focus,
        .btn-style3:active,
        .pupolar-article .popular-article-top .popular-top-logo .popular-logo-icon,
        .newsletter-form input[type='text']:focus,
        .form-action .form-group .form-control:focus,
        .reply a:hover,
        div.wpcf7-response-output,
        .comments_template .btn-style2:focus,
        .comments_template .btn-style2:active {
            border-color: $theme_color;
        }    

        a.custom-logo-link img {
            width: $logo_width;
            height: auto;
        }
        .page-title-wrapper:before{
            opacity: .5;
        }
        ul.page-title-meta.list-inline a:hover {
            color: #ab92b6;
        }
    ";

    wp_add_inline_style('style', $custom_css);
}
add_action('wp_enqueue_scripts', 'doxy_inline_style');
