<footer class="site-footer">
	<div class="row">
		<div class="social-contact group">
			<?php if ( is_active_sidebar( 'social-media' ) ) : ?>
				<?php dynamic_sidebar( 'social-media' ); ?>
			<?php endif; ?>
			<a class="contact" href="contact">contact</a>
		</div>
		<div class="credits">
	    	<p class="copyright">&copy; <?php echo date('Y'); ?> Local Milk. All Rights Reserved.</p>
	    	<ul class="creators">
		    	<li>Site Design: <a href="http://www.thedenizenco.com/" target="=_blank">the Denizen CO.</a></li>
		    	<li>Devlopment: <a href="http://alchemyandaim.com" target="_blank">Alchemy + Aim</a></li>
	    	</ul>
	    </div>
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
