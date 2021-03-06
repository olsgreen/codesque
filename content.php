<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title"><span class="underline">', '</span></h1>' );
			elseif ( is_archive() || is_search() ) :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

		<div class="entry-meta top">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
		
			<span class="cat-links">In <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'codesque' ) ); ?></span>
		<?php
			endif; ?>

			<?php
				if ( 'post' == get_post_type() )
					codesque_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'codesque' ), __( '1 Comment', 'codesque' ), __( '% Comments', 'codesque' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'codesque' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( !is_single() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'codesque' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'codesque' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	<?php if ( is_single() ) : ?>
	<hr>
	<?php endif; ?>
	<?php the_tags( '<footer class="entry-meta">TAGS<span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
<hr>
