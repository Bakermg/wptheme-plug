<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<?php if ( is_page() ) {
		return;
	}
	else { ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
	<?php } ?>

	<div class="entry-content">
		<?php the_content('<p class="left"></p>');?>
	</div><!--.entry-content-->

</article>
