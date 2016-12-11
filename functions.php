<?php register_nav_menus( array(
	'menu1 '=> __('Menu1','tema1'),
	'menu2' => __('Menu2','tema2')
) );
	register_sidebar( array(
		'name'          => __( 'SideBar1', 'temapropio' ),
		'id'            => 'sidebar1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'temapropio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


?>