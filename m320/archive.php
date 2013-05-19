<?php get_header(); ?>

<section id="content" role="main">

<?php if ( have_posts() ) : ?>

	<h1 class="page-title">
		<?php if ( is_day() ) : ?>
			<?php printf( __( 'Daily Archives: %s', 'm320' ), '<span>' . get_the_date() . '</span>' ); ?>
		<?php elseif ( is_month() ) : ?>
			<?php printf( __( 'Monthly Archives: %s', 'm320' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?>
		<?php elseif ( is_year() ) : ?>
			<?php printf( __( 'Yearly Archives: %s', 'm320' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
		<?php else : ?>
			<?php _e( 'Blog Archives', 'm320' ); ?>
		<?php endif; ?>
	</h1>

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
