<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage m320
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h1>

			<?php if (is_single()) : ?>
				<?php m320_entry_meta(array('author', 'date', 'categories', 'tags')) ?>
			<?php else : ?>
				<?php m320_entry_meta(array('date')) ?>
			<?php endif; ?>
		</header>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'm320' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'm320' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

	</article><!-- #post-<?php the_ID(); ?> -->
