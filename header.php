<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <header>
        <h2 class="ml-5 mt-4">
            <?php bloginfo('name');?>
        </h2>
        <span class="ml-5"><?php bloginfo('description');?></span>
        <div class="menu-link">
        <?php wp_nav_menu(); ?>
        </div>
    </header>
</body>
</html>