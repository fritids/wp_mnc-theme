<?php get_header(); ?>

<section id="content" role="main">

<?php if ( have_posts() ) : ?>

	<h1 class="page-title">
		<?php printf( __( 'Category Archives: %s', 'm320' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
	</h1>

	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
	?>

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
