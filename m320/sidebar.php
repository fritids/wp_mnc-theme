<?php
/**
* The Sidebar containing the main widget area.
*
* @package WordPress
* @subpackage m320
*/
?>
<div class="secondary sidebar blog" role="complementary">

	<aside class="widget w-search">
		<h3 class="s-visuallyhidden"><?php _e( 'Blog Search', 'm320' ); ?></h3>
		<?php get_search_form(); ?>
	</aside>

	<aside class="widget w-categories">
		<h3><?php _e( 'Posts Categories', 'm320' ); ?></h3>

		<?php $cats = get_categories(); ?>
		<ul>
			<?php
			foreach($cats as $category){
				echo '<li><a href="'. get_category_link( $category->term_id ) .'" title="Ver todas las entradas en '.$category->name.'">' . $category->name . '</a></li>';
			}
			?>
		</ul>
	</aside>

	<aside class="widget w-recentposts">
		<?php $args = array(
			'numberposts' => 5,
			'orderby' => 'post_date'
			);
		$posts = get_posts($args);
		?>
		<h3><?php _e( 'Recent Posts', 'm320' ); ?></h3>
		<ul>
			<?php foreach($posts as $post) : ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
	</ul>
</aside>


<aside class="widget w-tags">
	<h3><?php _e( 'Posts Tags', 'm320' ); ?></h3>
	<?php $args = array(
		'smallest' => 10,
		'largest' => 20,
		'orderby' => 'count',
		'order' => 'DESC',
		'number' => 50,
		'separator' => ",\n",
		'format' => 'list'
		);
		?>
		<?php wp_tag_cloud($args); ?>
	</aside>

</div><!-- #secondary -->
