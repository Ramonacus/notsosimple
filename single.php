<?php
	get_header();
?>
<main role="main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'single' );
		endwhile;

		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

		the_post_navigation(
			array(
				'next_text' => sprintf( __( 'Next post: %s', 'notsosimple' ), '%title' ),
				'prev_text' => sprintf( __( 'Previous post: %s', 'notsosimple' ), '%title' )
			)
		);

	else :
		_e( 'Nothing here.', 'notsosimple' );

	endif;
	?>
</main>
<?php
	get_sidebar();
	get_footer();