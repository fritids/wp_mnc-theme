<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

					</div>

				<?php endwhile; ?>

			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
