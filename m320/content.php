<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
		</a>

		<?php if (is_single()) : ?>
			<?php m320_entry_meta(array('author', 'date', 'categories', 'tags')) ?>
		<?php else : ?>
			<?php m320_entry_meta(array('date')) ?>
		<?php endif; ?>
	</header>

	<?php if ( is_search() ) :?>
		<?php the_excerpt(); ?>
	<?php else : ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'm320' ) ); ?>
	<?php endif; ?>

</article>
