<?php get_header(); ?>

<section id="content" class="content" role="main">

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

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php endif; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
