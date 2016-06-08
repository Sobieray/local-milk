<footer class="row site-footer">
    <p class="copyright"><span>Site by <a href="http://alchemyandaim.com" target="_blank">Alchemy + Aim</a></span> &copy; <?php echo date('Y'); ?> [Client Name] - All Rights Reserved</p>
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
