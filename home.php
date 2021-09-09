<?php get_header() ?>
<div class="hero p-6" style="background-image:url('<?php echo get_theme_mod('hero_image', get_template_directory_uri() . '/includes/scripts/customizer/hero.jpg') ?>'); min-height:150px !important;">
    <div class="text">
        <h1>blog</h1>
        <br>
        <button class="btn text-center hero-cta" onclick="window.location = '<?php echo get_theme_mod('hero_button_link', '#'); ?>'" style="background-color: <?php echo get_theme_mod('theme_color', '#1CAA9D') ?>;">
            <?php echo get_theme_mod('hero_button_text', 'take the first step,Call us');  ?>
        </button>
    </div>
</div>
<div class="flex archive">
    <div class="container-fluid catalogue py-5 flex">
        <?php get_template_part('template-parts/blog', 'catalogue') ?>
    </div>
    <div>
        <?php orc_get_blog_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>