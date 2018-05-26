<?php
	get_header();
?>
<main role="main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'list' );
		endwhile;

		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'notsosimple' ),
			'next_text'          => __( 'Next page', 'notsosimple' ),
			'before_page_number' => __( 'Page', 'notsosimple' ),
		) );

	else :
		_e( 'Nothing here.', 'notsosimple' );

	endif;
	?>
</main>
<?php
	get_sidebar();
	get_footer();