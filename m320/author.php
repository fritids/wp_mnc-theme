<?php get_header(); ?>

<section id="content" role="main">

<?php if ( have_posts() ) : the_post(); ?>

	<h1 class="page-title">
		<?php printf( __( 'Author Archives: %s', 'm320' ), '<span class="vcard">' . get_the_author() . '</span>' ); ?>
	</h1>

	<?php rewind_posts(); ?>

	<?php
	// If a user has filled out their description, show a bio on their entries.
	if ( get_the_author_meta( 'description' ) ) : ?>
	<section class="author">
		<div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) ); ?>
		</div>
		<div class="author-description">
			<h2>
				<?php printf( __( 'About %s', 'm320' ), get_the_author() ); ?>
			</h2>
			<?php the_author_meta( 'description' ); ?>
		</div>
	</section>
	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
			</a>
			<?php the_excerpt(); ?>
		</article>

	<?php endwhile; ?>

<?php endif; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
