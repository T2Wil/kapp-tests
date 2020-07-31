
	<footer>
		<h5><?php echo esc_html( Theme_Utils::instance()->footer_text() ); ?>
			<?php echo esc_html( Theme_Utils::instance()->get_theme_version() );?>
		</h5>
		<p><?php echo esc_html__( 'Kapp &copy; 2020', 'kapp-test-theme' ); ?></p>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
