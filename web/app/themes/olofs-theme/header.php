<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="/wp-content/themes/olofs-theme/assets/images/logo.png">
    <?= wp_head(); ?>
</head>
<body>
  <header class="header text-center">
    <nav class="navbar navbar-dark" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars fa-fw"></i></span>
      </button>
      <div id="navigation" class="collapse navbar-collapse flex-column" >

        <?php
          if (function_exists("the_custom_logo")) {
            $custom_logo_id = get_theme_mod("custom_logo");
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
        ?>


        <a class="site-title" href="/">
          <img class="logo" src="<?= $logo[0] ?>" alt="logo" >
          <span class="bloginfo"><?= get_bloginfo("name"); ?></span>
        </a>

        <?php
          wp_nav_menu(
            [
              "menu" => "primary",
              "container" => "",
              "theme_location" => "primary",
              "items_wrap" => '<ul id="" class="navbar-nav">%3$s</ul>'
            ]
          );
        ?>
      </div>
      </nav>
    </header>

    <div class="main-wrapper">
      <article class="content">
        <header class="page-title">
          <h1 class="heading">
            <?php
              if (single_post_title()) {
                echo $post_title;
              }
              if (is_search()) {
                echo "<h1 class='heading'>Search Results</h1>";
              }
            ?>
          </h1>
        </header>