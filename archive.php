<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="stylesheet" href="<?php bloginfo('stulesheet_url');?>">
</head>
<body>
    <?php get_header();?>   
    welcome to filde archive
    <?php
    if(have_posts()):
        while(have_posts()): 
            the_post();?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                <p>the date of post:<?php the_date('F j, Y g: i a'); ?></p>
    <?php endwhile; ?>
        <?php else: echo "not found"; ?>
    <?php endif;?>
        
</body>
</html>