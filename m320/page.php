<?php get_header(); ?>

<section id="content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="page-title">
				<?php the_title(); ?>
			</h1>
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
