<?php get_header() ?>
<div class="hero text-left container-fluid p-8" style="background-image:url('<?php echo get_theme_mod('hero_image', get_template_directory_uri() . '/includes/scripts/customizer/hero.jpg') ?>');">
    <div class="text">
        <h1 class="hero-heading"><?php echo get_theme_mod('hero_heading', 'some hero heading here') ?></h1>
        <p class="text-light">
        <?php echo get_theme_mod('hero_paragraph','some hero paragraph here') ?>
        </p>
        <button class="btn text-center" style="background-color: <?php echo get_theme_mod('theme_color','#1CAA9D')?>;">take the first step,Call us on 0789837466</button>
    </div>
</div>
<?php the_content() ?>
<?php get_footer() ?>