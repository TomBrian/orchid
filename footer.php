<div class="theme-custom-footer">
    <?php
    $custom_footer = get_theme_mod('footer_shortcode');
    if (!empty($custom_footer)) {
        echo do_shortcode($custom_footer);
    } else {
        echo do_shortcode($custom_footer, '[no_code]');
    }
    ?>
    <div class="p-5 flex justify-content-center align-items-center themeBackgroundColor">
        <div class="column column-1 shadow-sm mx-3 p-2">
            <p class="header text-white" style="text-transform:uppercase;">Address List</p>
            <ul class="text-light">
                <ol>
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="text mx-2">123, Any Street North
                        Your City Name
                        Country Name. P.O 3554
                    </div>
                </ol>
                <ol>
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="text mx-2">
                        +1 234 567 8902
                    </div>
                </ol>
            </ul>
        </div>
        <div class="column column-2 shadow-sm mx-3 p-2">
            <p class="header text-white" style="text-transform:uppercase;">social links</p>
            <ul class="text-light">
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
            </ul>
        </div>
        <div class="column column-3 shadow-sm mx-3 p-2">
            <p class="header text-white" style="text-transform:uppercase;">links list</p>
            <ul class="text-light">
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
                <ol>link</ol>
            </ul>
        </div>
        <div class="column column-4 shadow-sm p-5 site-identity">
            <strong class="text-white"><?php echo bloginfo('site_title') ?></strong>
            <p class="text-light"><?php bloginfo('description') ?></p>
        </div>
    </div>
</div>
<footer class="container-fluid themeBackgroundColor text-light bg-light footer">
    <p class="text-center my2">
        <small class=" text-center"> &copy; <?php echo  date('Y'); ?> <?php orc_get_footer_text() ?></small>
    </p>
</footer>
<?php wp_footer() ?>
</body>

</html>