<?php
/**
 * Template Name: Faux Landing Page
 */

get_header('faux');
$logo = get_field('logo');
?>
<div class="full-width">
	<div class="satsuki-bg">
		<img src="<?php echo $logo['url']; ?>" >
		<h1><?php the_field('title'); ?> </h1>
		<?php
			if(have_rows('categories')) : ?>
				<ol>
				<?php while(have_rows('categories')) : the_row();
					$category = get_sub_field('category');
				?>
					<li><?php echo $category; ?></li>
				<?php endwhile; ?>
				</ol>
			<?php endif; ?>
		<?php
			if(have_rows('links')) : ?>
				<ul>
				<?php while(have_rows('links')) : the_row();
					$linkUrl = get_sub_field('link_url');
					$linkTitle = get_sub_field('link_name');
				?>
					<li><a href="<?php echo $linkUrl; ?>"><?php echo $linkTitle; ?></a></li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
	</div>

</div>