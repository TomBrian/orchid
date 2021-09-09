<div class="theme-custom-footer flex align-items-center justify-content-center themeBackgroundColor">
 <div class="content">
    <?php
    $custom_footer = get_theme_mod('footer_shortcode');
    if (!empty($custom_footer)) {
        echo do_shortcode($custom_footer);
    } else {
        echo do_shortcode($custom_footer, '[no_code]');
    }
    ?>
    <h2><?php echo bloginfo( 'name' )?></h2>
    <p class="text-light"><?php echo bloginfo( 'description' )?></p>
 </div>
<footer class="container-fluid themeBackgroundColor text-light footer">
    <p class="text-center my2">
        <small class=" text-center"> &copy; <?php echo  date('Y'); ?> <?php orc_get_footer_text() ?></small>
    </p>
</footer>
<?php wp_footer() ?>
</body>

</html>