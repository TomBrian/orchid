
<?php 
$custom_footer = get_theme_mod( 'footer_shortcode' );
if(!empty($custom_footer)){
   echo do_shortcode( $custom_footer );
}
?>
<footer class="container-fluid bg-light footer">
<p class="text-center">
    <small class="text-muted text-center">&copy; <?php echo date('Y')." ";?> <?php bloginfo( 'site_title' )?>  All rights reserved</small>
</p> 
</footer>
<?php wp_footer()?>
</body>
</html>