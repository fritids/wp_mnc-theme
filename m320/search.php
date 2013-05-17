<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage m320
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="alt-title"><?php printf( __( 'Search Results for: %s', 'm320' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1><?php _e( 'Nothing Found', 'm320' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'm320' ); ?></p>
						<div class="search-wide">
                            <?php get_search_form(); ?>
                        </div>
					</div>
				</article>

			<?php endif; ?>

			</div>
		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
