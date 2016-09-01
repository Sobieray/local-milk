<?php
/**
 * Template Name: Faux Landing Page
 */

$logo = get_field('logo', 'option');
?>
<div class="full-width">
	<div class="satsuki-bg">
		<img src="<?php echo $logo['url']; ?>" >
		<h1><?php the_field('title', 'option'); ?> </h1>
		
	</div>

</div>