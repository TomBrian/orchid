<?php get_header()?>
<div class="container-fluid catalogue py-5 flex">
   <?php if(have_posts( )): 
    while(have_posts()):the_post()?>
<div class="card group hover:shadow-lg  shadow-sm  m-3">
    <div class="thumbnail">
        <a href="<?php the_permalink(  )?>">
      <?php the_post_thumbnail(['300','169'])?> 
    </a>
    </div>
    <div class="card-body">
         <a href="<?php the_permalink(  )?>"><strong class="my-2"><?php the_title()?></strong></a>
        <p class="text-muted my-2">
            <?php the_excerpt()?>
        </p>
        <p>
        <a href="<?php the_permalink()?>">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </p>
   
</div>
<div class="date px-4 py-1 text-muted">
       <small><?php echo get_the_date( )?></small>
 </div>
</div>
    <?php
     endwhile;
    endif;
    ?>
</div>
<?php get_footer()?>