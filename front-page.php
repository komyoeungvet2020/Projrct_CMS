<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet"href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
    <?php get_header();?>
    <?php 
        if(is_active_sidebar('showcase')):?>
        <?php dynamic_sidebar('showcase');?>
<?php endif;?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
    <?php the_post();?>
    <div class="box">
        <?php if(amountchild()|| $post->post_parent): ?>
        <ul id="new">
        <?php
            $args = array(
                'title_li'=>'',
                'child_of'=>idparent(),
            );
            ?>
            <?php wp_list_pages($args);?>
        </ul>
<?php endif; ?>
<?php the_title();
      the_content();
       ?>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<div class="boxnew">
       <div class="box1">
            <?php if(is_active_sidebar('box1')): ?>
            <?php dynamic_sidebar('box1');?>
        <?php endif;?>
       </div> 
       <div class="box2">
            <?php if(is_active_sidebar('box2')): ?>
            <?php dynamic_sidebar('box2');?>
        <?php endif;?>
       </div> 
       <div class="box3">
            <?php if(is_active_sidebar('box3')): ?>
            <?php dynamic_sidebar('box3');?>
        <?php endif;?>
       </div> 
</div>
</body>
</html>