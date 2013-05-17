<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : the_post(); ?>

				<h1><?php printf( __( 'Author Archives: %s', 'm320' ), '<span class="vcard">' . get_the_author() . '</span>' ); ?></h1>

				<?php rewind_posts(); ?>

				<?php
				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) : ?>
				<div id="author-info">
					<div id="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) ); ?>
					</div>
					<div id="author-description">
						<h2><?php printf( __( 'About %s', 'm320' ), get_the_author() ); ?></h2>
						<?php the_author_meta( 'description' ); ?>
					</div>
				</div>
				<?php endif; ?>

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
