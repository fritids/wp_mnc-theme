<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
		<h2 class="entry-title">
			<?php the_title(); ?>
		</h2>
	</a>
	<?php the_excerpt(); ?>
</article>
