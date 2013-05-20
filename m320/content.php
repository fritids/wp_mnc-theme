<article <?php post_class(); ?>>
	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			<?php the_title(); ?>
		</a>
	</h2>
	<?php the_excerpt(); ?>
</article>
