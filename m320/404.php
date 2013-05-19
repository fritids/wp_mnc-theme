<?php get_header(); ?>

<section id="content" class="content wide" role="main">

	<div class="post error404 not-found">
		<h1 class="page-title">
			<?php _e( 'The requested page does not exist', 'm320' ); ?>
		</h1>
		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'm320' ); ?></p>
		<?php get_search_form(); ?>
	</div>

</section>

<?php get_footer(); ?>
