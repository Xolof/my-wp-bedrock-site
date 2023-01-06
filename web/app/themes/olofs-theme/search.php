<?php
  get_header();
  $query = get_search_query();
?>
	<article class="content">

	<?php if (have_posts()): ?>
		<h1>
			<?php echo $wp_query->found_posts; ?> <?php _e( 'results found for', 'locale' ); ?>: "<?php the_search_query(); ?>"
		</h1>
		<?php
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
        get_template_part("template-parts/content", "archive");
			}
		?>
	<?php else: ?>
		<h3>Search for <?= $query ?> did not return any results.</h3>
	<?php endif; ?>
	</article>
<?php
  get_footer();
?>