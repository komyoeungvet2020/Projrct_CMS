<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
  <?php if(have_posts()):?>
      <?php while(have_posts()):?>
        <?php the_post(); ?>
        <ul id= "child">
        <?php 
          $args = array(
            'title_li'=>'',
            'child_of'=>idparent(),
          );
        wp_list_pages($args);?>
        </ul>
        <h2 style="color:blue;"> <?php the_title(); ?></h2>
        <?php the_content();?>
      <?php endwhile; ?>
  <?php endif; ?>
</body>
</html>
