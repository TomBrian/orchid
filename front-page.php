<?php get_header() ?>
<div class="hero align-items-center container-fluid p-8 <?php
                                                        if (get_theme_mod('hero_visibility', '1') == '1') {
                                                            echo 'flex ';
                                                        } elseif (get_theme_mod('hero_visibility', '1') == '0') {
                                                            echo 'hide';
                                                        } ?>" style="background-image:url('<?php echo get_theme_mod('hero_image', get_template_directory_uri() . '/includes/scripts/customizer/hero.png') ?>');">
    <div class="text mx-5 text-left">
        <h1 class="hero-heading"><?php echo get_theme_mod('hero_heading', 'some hero heading here') ?></h1>
        <p class="text-light t">
            <?php echo get_theme_mod('hero_paragraph', 'some hero paragraph here') ?>
        </p>
        <button class="btn  animate__animated animate__jackInTheBox themeBackgroundColor shadow-lg text-center hero-cta" onclick="window.location = '<?php echo get_theme_mod('hero_button_link', '#'); ?>'" style="background-color: <?php echo get_theme_mod('theme_color', '#1CAA9D') ?>;">
            <?php echo get_theme_mod('hero_button_text', 'take the first step,Call us now');  ?>
        </button>
    </div>
</div>
    <?php if(is_home()){?>
        <div class="container my-3 text-center shadow-lg p-5 bg-white">
        <h1 class="text  themeTextColor "><?php the_title()?></h1>
        <p class="text-muted">
            <?php the_content()?>
        </p>
      </div> 
      <?php }?>

<div class="archive container flex align-items-center">
    <div class="container-fluid catalogue py-5 flex">
        <?php if (is_home()) {
        ?>
            <?php get_template_part('template-parts/blog', 'catalogue') ?>
        <?php
        } else { ?>
            <?php $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="card group hover:shadow-lg  shadow-sm  m-1">
                        <div class="thumbnail">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail(['300', '169']) ?>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="<?php the_permalink() ?>"><strong class="my-2"><?php the_title() ?></strong></a>
                            <p class="text-muted my-2">
                                <?php the_excerpt() ?>
                            </p>
                            <p>
                                <a href="<?php the_permalink() ?>">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </p>

                        </div>
                        <div class="date px-4 py-1 text-muted">
                            <small><?php echo get_the_date() ?></small>
                        </div>
                    </div>


                <?php endwhile; ?>
            <?php endif; ?>
        <?php } ?>
    </div>
        <div class="front-form">
            <?php get_template_part('includes/templates/enquiry') ?>
        </div>
</div>

</div>
<?php get_footer() ?>