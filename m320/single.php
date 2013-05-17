<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"> <?php the_title(); ?></h1>

					<?php m320_entry_meta(array('author', 'date', 'categories', 'tags')) ?>

					<?php the_content(); ?>

					</div>

				<?php endwhile; ?>

			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
