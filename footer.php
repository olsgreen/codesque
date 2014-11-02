<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
<footer id='siteFooter' class="grid-container no-padding">
	<div class="grid-80">
		&copy; <?php echo date('Y'); ?> Oliver Green.
All third party content, logos, trademarks, etc are property of their respective owners.
	</div>
	<div class="grid-20 text-right">

	<a href="https://twitter.com/olsgreen" class="icon-holder">
		<i class="icon social twitter"></i>
	</a>
	<a href="https://github.com/olsgreen" class="icon-holder">
		<i class="icon social github"></i>
	</a>
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>