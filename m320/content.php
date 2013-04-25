<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage m320
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<h3 class="entry-format"><?php _e( 'Featured', 'm320' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'm320' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>
            
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php m320_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

			<?php if ( comments_open() && ! post_password_required() ) : ?>
            
			<!-- @matmancini removed comment item numbers from article header
            <div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'm320' ) . '</span>', _x( '1', 'comments number', 'm320' ), _x( '%', 'comments number', 'm320' ) ); ?>
			</div>
            -->
            
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'm320' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'm320' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'm320' ) );
				if ( $categories_list ):
			?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'm320' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if categories ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'm320' ) );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
			<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
			<span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'm320' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'm320' ) . '</span>', __( '<b>1</b> Reply', 'm320' ), __( '<b>%</b> Replies', 'm320' ) ); ?></span>
			<?php endif; // End if comments_open() ?>
            
		</footer><!-- #entry-meta -->
        
	</article><!-- #post-<?php the_ID(); ?> -->