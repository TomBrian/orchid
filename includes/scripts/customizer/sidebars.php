<?php	
add_theme_support( 'customize-selective-refresh-widgets' );
add_action( 'widgets_init', 'orchid_widgets_init');
function orchid_widgets_init() {
	/*sidebar*/
	// blog sidebar
	register_sidebar( array(
		'name' => __( 'blog sidebar', 'orchid' ),
		'id' => 'blog_sidebar',
		'description' => __( 'blog sidebar', 'orchid' ),
		'before_widget' => '<aside class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<div class=""><h4 class="widget-title">',
		'after_title' => '</h4><span></span></div>',
	) );
	// page sidebar
	register_sidebar( array(
		'name' => __( 'page sidebar', 'orchid' ),
		'id' => 'page_sidebar',
		'description' => __( 'page sidebar', 'orchid' ),
		'before_widget' => '<aside class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<div class=""><h4 class="widget-title">',
		'after_title' => '</h4><span></span></div>',
	) );
}	                     
