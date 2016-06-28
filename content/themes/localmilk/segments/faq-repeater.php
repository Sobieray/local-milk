<!-- code for showing FAQ's -->

<?php if( have_rows('faq') ): ?>
	<?php while( have_rows('faq') ): the_row(); 
		// vars
		$question = get_sub_field('question');
		$answer = get_sub_field('answer');
		?>
		<div class="faq">
			<p class="title">Q: <?php echo $question; ?></p>
			<p><?php echo $answer; ?></p>
		</div>
	<?php endwhile; ?>
<?php endif; ?>