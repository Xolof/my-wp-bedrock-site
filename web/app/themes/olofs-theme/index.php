<?php
  get_header();
?>
	<?php
    if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
        		get_template_part("template-parts/content", "archive");
			}

		}
	?>

	<?php
		the_posts_pagination();
	?>
<?php
  get_footer();
?>