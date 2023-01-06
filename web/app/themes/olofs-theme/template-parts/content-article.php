<div class="container">
  <header class="content-header">
    <div class="meta">

      <span class="date"><?php the_date(); ?></span>

      <span class="tags">
      <?php
        // the_tags(
        //   '<span class="tag"><i class="fa fa-tag"></i>',
        //   '</span><span class="tag"><i class="fa fa-tag"></i>',
        //   '</span>'
        // );

        the_tags();
      ?>
      </span>

      <span class="comment">
        <a href="#comments">
          <i class='fa fa-comment'></i>
          <?php comments_number(); ?>
        </a>
      </span>

    </div>
  </header>

<?php
  the_content();

  the_post_navigation();

  comments_template();
?>

</div>