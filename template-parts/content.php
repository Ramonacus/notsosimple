<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_title(); ?>					
		</a>
	</h2>
	<section class="post-body">
		<?php the_content( __( 'Read more.', 'notsosimple' ) ); ?>
	</section>
	<?php
	edit_post_link( __( 'Edit this', 'notsosimple' ) );
	?>
</article>