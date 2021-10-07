<?php

if ( is_front_page() and is_home() ) // Default Homepage
	get_template_part( sg_tp_content , 'default' );

elseif ( is_front_page() ) // Static Homepage
	get_template_part( sg_tp_content , 'static' );

elseif ( is_home() ) // Blog Homepage
	get_template_part( sg_tp_content , 'blog' );

else {
	if ( is_singular() ) // 
		get_template_part( sg_tp_content , 'singular' );

	if ( is_404() ) // 
		get_template_part( sg_tp_content , '404' );

	if ( is_archive() ) // 
		get_template_part( sg_tp_content , 'archive' );

	if ( is_tax() ) // 
		get_template_part( sg_tp_content , 'archive' );

	if ( is_category() ) // 
		get_template_part( sg_tp_content , 'archive' );

	if ( is_tag() ) // 
		get_template_part( sg_tp_content , 'archive' );

	if ( is_search() ) // 
		get_template_part( sg_tp_content , 'category' );

	if ( is_author() ) // 
		get_template_part( sg_tp_content , 'category' );
}

/*
is_author()

is_singular()
*/