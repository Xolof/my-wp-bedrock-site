
<?php
  get_header();

  $tag = get_queried_object();
  $archiveTitle = get_the_archive_title();

  if ($archiveTitle) {
	echo "<h1>$archiveTitle</h1>";
  };

  if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
        get_template_part("template-parts/content", "archive");
			}

		}
	?>
<?php
  get_footer();
?>