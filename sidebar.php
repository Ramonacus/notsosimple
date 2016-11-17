<?php 
if ( is_active_sidebar( 'content-sidebar' ) ) :
	?>
	<ul class="content-sidebar sidebar">
		<?php dynamic_sidebar( 'content-sidebar' ); ?>
	</ul>
	<?php
endif;