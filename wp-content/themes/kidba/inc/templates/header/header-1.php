<?php 
    /*
    cmt_section_header_topbar_1: start section topbar 1
    */
    $kidba_side_logo = get_theme_mod( 'kidba_side_logo', esc_url(get_template_directory_uri() . '/assets/images/logo.png') );
    $logo_size = get_theme_mod( 'logo_size', __('144px', 'kidba') );
    $kidba_topbar_switch = get_theme_mod( 'kidba_topbar_switch', false );
    $kidba_header_top_opening_hour_switch = get_theme_mod( 'kidba_header_top_opening_hour_switch', false );
    $kidba_header_top_opening_hour = get_theme_mod( 'kidba_header_top_opening_hour', __( 'Our Opening Hours Mon- Fri', 'kidba' ) );
    $kidba_header_top_number_switch = get_theme_mod( 'kidba_header_top_number_switch', false );
    $kidba_header_top_number = get_theme_mod( 'kidba_header_top_number', __( '+800-123-4567 6587', 'kidba' ) );
    $kidba_header_top_link = get_theme_mod( 'kidba_header_top_link', __( '80012345676587', 'kidba' ) );
    $kidba_header_top_location_switch = get_theme_mod( 'kidba_header_top_location_switch', false );
    $kidba_header_top_location = get_theme_mod( 'kidba_header_top_location', __( '103 Road kagpur, Dhaka', 'kidba' ) );
    $kidba_header_main_right_switch = get_theme_mod( 'kidba_header_main_right_switch', false );
    $kidba_menu_col = $kidba_header_main_right_switch ? 'col-xl-8 col-lg-7' : 'col-xl-10 col-lg-10';
    $kidba_menu_position = $kidba_header_main_right_switch ? 'justify-content-center' : 'justify-content-end';
    $kidba_header_main_button_text = get_theme_mod( 'kidba_header_main_button_text', __('Admit Now', 'kidba') );
    $kidba_header_main_button_link = get_theme_mod( 'kidba_header_main_button_link', __('#', 'kidba') );
     $kidba_header_main_phone_number_link = get_theme_mod( 'kidba_side_contact_phone_link', __('#', 'kidba') );
    $tp_social_list_widget = get_theme_mod('tp_social_list_widget', array());
    $kidba_side_contact_address = get_theme_mod('kidba_side_contact_address', __('2/A, Mirnada City Tower, NYC', 'kidba'));
    $kidba_side_contact_phone = get_theme_mod('kidba_side_contact_phone', __('088889797697', 'kidba'));
    $kidba_side_contact_phone_link = get_theme_mod('kidba_side_contact_phone_link', __('088889797697', 'kidba'));
    $kidba_side_mail = get_theme_mod('kidba_side_mail', __('info@kidba.com', 'kidba'));
    $kidba_side_social_fb_link = get_theme_mod('kidba_side_social_fb_link', __('#', 'kidba'));
    $kidba_side_social_twitter_link = get_theme_mod('kidba_side_social_twitter_link', __('#', 'kidba'));
    $kidba_side_social_linkedin_link = get_theme_mod('kidba_side_social_linkedin_link', __('#', 'kidba'));
    $kidba_side_social_insta_link = get_theme_mod('kidba_side_social_insta_link', __('#', 'kidba'));
    $kidba_side_mail_link = get_theme_mod('kidba_side_mail_link', __('info@kidba.com', 'kidba'));
    $kidba_side_contact_info = get_theme_mod('kidba_side_contact_info', __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita dolorem magni deserunt quod obcaecati alias nostrum sapiente veritatis. Ad, fugiat.', 'kidba'));

?>
<!-- header begin -->
<div class="header header-style-1">
    <?php if( !empty($kidba_topbar_switch) ) : ?>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="top-left">
                        <div class="d-sm-flex">
                            <?php if(!empty($kidba_header_top_opening_hour_switch && $kidba_header_top_opening_hour)) : ?>
                            <div class="header-txt pr-30"><i class="icofont-clock-time"></i> <?php print  esc_html($kidba_header_top_opening_hour); ?></div>
                            <?php endif; ?>
                            <?php if(!empty($kidba_header_top_number_switch && $kidba_header_top_number)) : ?>
                            <div class="header-txt px-30"><a href="tel:<?php echo esc_url($kidba_header_main_phone_number_link ? $kidba_header_main_phone_number_link:'#'); ?>"><i class="icofont-phone"></i> <?php print  esc_html($kidba_header_top_number); ?></a></div>
                            <?php endif; ?>
                            <?php if(!empty($kidba_header_top_location_switch && $kidba_header_top_location)) : ?>
                            <div class="header-txt pl-30"><i class="icofont-google-map"></i> <?php print  esc_html($kidba_header_top_location); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="top-right">
                        <?php if(!empty($tp_social_list_widget)) : ?>
                        <div class="d-flex justify-content-lg-end justify-content-center">
                            <?php foreach($tp_social_list_widget as $social) : ?>
                                <?php if(!empty($social['social_icon'])) : ?>
                                    <a href="<?php echo esc_url($social['social_url']); ?>" class="header-right-txt"><i class="icofont-<?php echo esc_attr($social['social_icon']); ?>"></i></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="bottom-header">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-6">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php kidba_header_logo(); ?>
                                </a>
                            </div>
                        </div>
                        <div class="d-lg-none d-flex justify-content-end col-6">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icofont-navigation-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="<?php echo esc_attr($kidba_menu_col); ?>">
                    <nav class="navbar navbar-expand-lg p-0 d-none d-lg-block">
                        <div class="container-fluid p-0">
                            <div class="collapse <?php echo esc_attr($kidba_menu_position); ?> navbar-collapse" id="navbarSupportedContent">
                                <div id="mobile-menu">
                                    <?php kidba_header_menu(); ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <?php if(!empty($kidba_header_main_right_switch)) : ?>
                <div class="col-xl-2 col-lg-3 d-lg-block d-none">
                    <div class="nav-btn d-flex justify-content-end">
                        <?php if(!empty($kidba_header_main_button_text)) : ?>
                            <a href="<?php echo esc_url($kidba_header_main_button_link); ?>" class="def-btn"><?php echo esc_html($kidba_header_main_button_text); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- header end -->
<!-- sidebar area start -->
<div class="kidba-menu-sidebar">
    <div class="kidba-menu-sidebar-inner">
        <?php if(!empty($kidba_side_logo)) : ?>
        <div class="logo mb-40">
            <a href="<?php echo esc_url(home_url('/')) ?>">
                <img src="<?php echo esc_url($kidba_side_logo); ?>" alt="<?php echo esc_attr__('logo', 'kidba'); ?>">
            </a>
        </div>
        <?php endif; ?>
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="icofont-brand-nexus"></i></span>
                <span><?php echo esc_html__('close', 'kidba'); ?></span>
            </button>
        </div>
        <div class="kidba-menu-sidebar-top mb-40">
            <nav>
                <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                    <button class="active " id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu" type="button" role="tab" aria-controls="nav-menu" aria-selected="true"><?php echo esc_html__('Menu', 'kidba'); ?></button>
                    <button id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false"><?php echo esc_html__('Info','kidba'); ?></button>
                </div>
            </nav>
        </div>
        <div class="kidba-menu-sidebar-bottom">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                    <div class="mobile-menu"></div>
                </div>
                <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                    <div class="kidba-side-content-inner-1">
                        <?php if(!empty($kidba_side_contact_info)) : ?>
                        <p><?php echo esc_html($kidba_side_contact_info); ?></p>
                        <?php endif; ?>
                        <ul>
                            <?php if(!empty($kidba_side_contact_address)) : ?>
                                <li><span><i class="icofont-location-pin"></i> <?php echo esc_html($kidba_side_contact_address); ?></span></li>
                            <?php endif; ?>
                            <?php if(!empty($kidba_side_contact_phone)) : ?>
                            <li><a href="tel:<?php echo esc_attr($kidba_side_contact_phone_link) ? esc_attr($kidba_side_contact_phone_link): ''; ?>"><i class="icofont-phone"></i> <?php echo esc_html($kidba_side_contact_phone); ?></a></li>
                            <?php endif; ?>
                            <?php if(!empty($kidba_side_mail)) : ?>
                                <li><a href="mailto: <?php echo esc_attr($kidba_side_mail_link) ? esc_attr($kidba_side_mail_link): ''; ?>"><i class="icofont-email"></i> <?php echo esc_html($kidba_side_mail); ?></a></li>
                            <?php endif; ?>
                        </ul>
                        <div class="d-flex justify-content-lg-end">
                            <?php if(!empty($kidba_side_social_fb_link)) : ?>
                                <a target="_blank" href="<?php echo esc_url($kidba_side_social_fb_link) ? esc_url($kidba_side_social_fb_link): ''; ?>" class="header-right-txt"><i class="icofont-facebook"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($kidba_side_social_twitter_link)) : ?>
                                <a target="_blank" href="<?php echo esc_url($kidba_side_social_twitter_link) ? esc_url($kidba_side_social_twitter_link): ''; ?>" class="header-right-txt"><i class="icofont-twitter"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($kidba_side_social_insta_link)) : ?>
                            <a target="_blank" href="?php echo esc_url($kidba_side_social_insta_link) ? esc_url($kidba_side_social_insta_link): ''; ?>" class="header-right-txt"><i class="icofont-instagram"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar area end -->