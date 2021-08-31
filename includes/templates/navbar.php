<div class="banner sticky-top shadow-lg  <?php echo get_theme_mod( 'banner_visibility')?> p-2 text-right">
 <p class="font-weight-bold">
    <?php echo get_theme_mod( 'edit_banner_text')?>
 </p>
</div>
<nav class="navbar px-9 navbar-expand-lg py-3 text-light">
    <a class="navbar-brand" href="<?php bloginfo( 'url' )?>"><?php bloginfo( 'site_title' )?></a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
    <img src="<?php bloginfo( 'template_url' )?>/icons/menu.svg" alt="menu">
    </button>
        <?php
        wp_nav_menu( array(
            'header-menu'    => 'Header Menu',
            'depth'             => 10,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
     <!-- The call us button rendered to the menu container by javascript (menu.js)-->
  </nav>
  <script>
    //  jQuery wordpress conflict
      jQuery(function($) {
        var button = $('.callUs');
        var buttonText = "<?php echo get_theme_mod( 'edit_navbar_button_text','call us')?>";
        button.html(buttonText);
    button.click(()=>{
        window.location = '<?php echo  get_theme_mod( 'edit_navbar_button_link','#')?>';
    });
        });
   
 </script>