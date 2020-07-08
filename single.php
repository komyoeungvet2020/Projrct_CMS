
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet"href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
<?php get_header();?>
<div class="container">
            <div class="row">
                <div class="col-12">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                       <span style="width:40%"><?php the_post(); ?></span> 
                       <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3> 
                        <?php wp_list_pages();?>
                        <?php the_cxcerpt();?><br><br>
                        Write by: <?php the_author();?>
                        Date: <?php the_time('F, j,Y');?>
                        <?php $caters = get_the_category();
                            $output = "";
                            if($caters){
                                foreach($caters as $cater){
                                    $output = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name. '</a>';
                                }
                            }
                            echo $output;
                            ?>
                            <?php the_tags();?>
                            <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail();?>
                            <?php endif?>
                    <?php endwhile;?>
                <?php endif;?>
                <?php comments_template(); ?>
                </div>
                <div class="sidebar">
                        <?php if(is_active_sidebar('sidebar')): ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
</body>
</html>