<?php
	get_header();
?>
<main role="main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;

	else :
		_e( 'Nothing here.', 'not-so-simple' );

	endif;
	?>
</main>
<?php
	get_sidebar();
	get_footer();