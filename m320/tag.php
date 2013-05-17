<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<h1><?php printf( __( 'Tag Archives: %s', 'm320' ), '<span>' . single_tag_title( '', false ) . '</span>' );	?></h1>

				<?php
					$tag_description = tag_description();
					if ( ! empty( $tag_description ) )
						echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
				?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
								<?php the_title(); ?>
							</a>
						</h1>
						<?php the_excerpt(); ?>
					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'm320' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'm320' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</article>

			<?php endif; ?>

			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
