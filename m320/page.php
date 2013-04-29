<?php
/**
 * @package WordPress
 * @subpackage m320
 */
get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'm320' ) . '</span>', 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-<?php the_ID(); ?> -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
