<footer class="row site-footer">
	<div class="social-contact group">
		<?php if ( is_active_sidebar( 'social-media' ) ) : ?>
			<?php dynamic_sidebar( 'social-media' ); ?>
		<?php endif; ?>
		<a class="contact" href="contact">contact/work together</a>
	</div>
	<div class="credits">
    	<p class="copyright">&copy; <?php echo date('Y'); ?> Local Milk. All Rights Reserved.</p>
    	<p class="creators">Site Design: <a href="http://www.thedenizenco.com/" target="=_blank">the Denizen CO.</a> | Devlopment: <a href="http://alchemyandaim.com" target="_blank">Alchemy + Aim</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
<?php
if ( current_user_can( 'administrator' ) ) {
    global $wpdb;
    echo "<pre>";
    print_r( $wpdb->queries );
    echo "</pre>";
}
?>
</body>
</html>
