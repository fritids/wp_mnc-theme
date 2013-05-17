<?php get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					$mime_type = get_post_mime_type( $post->ID );
					$allowed_mime_types = array(
						'application/pdf',
						'application/msword'
					);
					if( in_array( $mime_type, $allowed_mime_types ) ){
						echo '<iframe src="http://docs.google.com/viewer?url=' . $post->guid .'&embedded=true" width="100%" height="1280" style="border:none;" frameborder="0"></iframe>';
					}

					?>

				<?php endwhile; ?>

			</div>
		</section>

<?php get_footer(); ?>
