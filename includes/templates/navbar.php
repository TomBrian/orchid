<div class="banner themeBackgroundColor sticky-top <?php
                                                                if (get_theme_mod('banner_visibility', '1') == '1') {
                                                                    echo 'show';
                                                                } elseif (get_theme_mod('banner_visibility', '1') == '0') {
                                                                    echo 'hide';
                                                                } ?> p-1 text-right">
    <p class="font-weight-bold">
        <?php echo get_theme_mod('edit_banner_text','Dont wait .Get help now. Call us on 123-567-890'); ?>
    </p>
</div>
<nav class="navbar px-9 navbar-expand-md py-3 text-light">
    <a class="navbar-brand themeTextColor" href="<?php bloginfo('url') ?>">
        <?php $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
            echo  get_bloginfo('name');
        } ?>
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <img src="<?php bloginfo('template_url') ?>/icons/menu.svg"  width="30" height="30" alt="menu">
    </button>
    <?php
    wp_nav_menu(array(
        'header-menu'    => 'Header Menu',
        'depth'             => 10,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse ',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ));
    ?>
    <!-- The call us button rendered to the menu container by javascript (menu.js)-->
</nav>
<script>
    //  jQuery wordpress conflict
    jQuery(function($) {
        var button = $('.callUs');
        var buttonText = "<?php echo get_theme_mod('edit_navbar_button_text', 'call us'); ?>";
        button.html(buttonText);
        button.click(() => {
            window.location = '<?php echo  get_theme_mod('edit_navbar_button_link', '#') ?>';
        });
        // call to action visibility
        var toggleStatus = '<?php echo get_theme_mod('cta_visibility', '1'); ?>';
        var visibility = 'show';
        if (toggleStatus == 1) {
            visibility = 'show'
        } else {
            visibility = "hide";
        }
        button.addClass(visibility);
    });
</script>