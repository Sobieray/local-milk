<!-- code for showing FAQ's -->

<?php if( have_rows('shop') ): ?>
	<?php while( have_rows('shop') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		$description = get_sub_field('description');
		$price = get_sub_field('price');
		$link = get_sub_field('link');
		?>
		<a href="<?php echo $link; ?>" target="_blank"><figure class="column small-12 medium-6 large-4">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			<figcaption>
				<p class="title"><?php echo $description; ?></p>
				<p><?php echo $price; ?></p>
			</figcaption>
		</figure></a>
	<?php endwhile; ?>
<?php endif; ?>