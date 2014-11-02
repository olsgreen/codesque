<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<div class="grid-container">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'codesque' ); ?></h1>
			</header>

			<div class="page-content text-center">
				<?php 
					$s = preg_replace("/(.*)-(html|htm|php|asp|aspx)$/","$1",$wp_query->query_vars['name']);
					$posts = query_posts('post_type=any&name='.$s);
					$s = str_replace("-"," ",$s);
					if (count($posts) == 0) {
						$posts = query_posts('post_type=any&s='.$s);
					}
					if (count($posts) > 0) {
						echo "<ol><li>";
						echo "<p>Were you looking for <strong>one of the following</strong> posts or pages?</p>";
						echo "<ul>";
						foreach ($posts as $post) {
							echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
						}
						echo "</ul>";
						echo "<p>If not, don't worry, try searching for it:</p></li>";
					} else {						
						echo "<p>" . _e( 'It looks like nothing was found at this location. Maybe try a search?', 'codesque' ) . "</p>";
					}
				?>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<br class='clear'>
<?php
get_footer();
