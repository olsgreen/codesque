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
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'codesque' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<br class='clear'>
<?php
get_footer();
