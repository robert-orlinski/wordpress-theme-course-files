<footer>
	<?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?>

	<?php
		wp_nav_menu( array(
			'menu' => 'secondary'
		));
	?>

</footer>

<?php wp_footer(); ?>
</body>
</html>