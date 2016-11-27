<?php
	get_header();
?>
<main role="main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content' );
		endwhile;

		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'not-so-simple' ),
			'next_text'          => __( 'Next page', 'not-so-simple' ),
			'before_page_number' => __( 'Page', 'not-so-simple' ),
		) );

	else :
		_e( 'Nothing here.', 'not-so-simple' );

	endif;
	?>
</main>
<?php
	get_sidebar();
	get_footer();