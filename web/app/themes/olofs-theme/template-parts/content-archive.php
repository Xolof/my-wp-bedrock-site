<div class="container">
  <div class="post">
    <div class="media">
      <?php
        $post_thumbnail_url = get_the_post_thumbnail_url();
      ?>
      <?php if ($post_thumbnail_url): ?>
        <a href="<?php the_permalink(); ?>">
          <img
            class="img-fluid post-thumb"
            src="<?= $post_thumbnail_url; ?>"
            alt="image"
          >
        </a>
      <?php endif; ?>
      <div class="media-body">
        <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <div class="meta"><span class="date"><?php the_date(); ?></span>
        <span class="comment"><a href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></span></div>
        <div class="intro"><?php the_excerpt(); ?></div>
        <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
      </div><!--//media-body-->
    </div><!--//media-->
  </div>
</div>