<!-- code for showing FAQ's -->

	<h3 class="text-center underline"><?php the_field('press_title'); ?></h3>
	<ul class="press">
	<?php if( have_rows('press') ): ?>
		<?php while( have_rows('press') ): the_row(); 
			// vars
			$link = get_sub_field('link');
			$name = get_sub_field('name');
			?>
			<li><a class="press" href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
		<?php endwhile; ?>
	<?php endif; ?>
	</ul>

	<h3 class="text-center underline"><?php the_field('awards_title'); ?></h3>
	<ul class="awards">
	<?php if( have_rows('awards') ): ?>
		<?php while( have_rows('awards') ): the_row(); 
			// vars
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			?>
			<li><a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>"></a></li>
		<?php endwhile; ?>
	<?php endif; ?>
	</ul>