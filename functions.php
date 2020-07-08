<?php function featuerImage(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(400,400);
}
add_action('after_setup_them','featuerImage');
?>
<?php
    function nav_menu(){
        register_nav_menus(array(
            'primary'=>__('Primary Menu'),
            'footer'=>__('Footer Menu')
        ));
    }
    add_action('after_setup_theme','nav_menu');
?>
<?php
function idparent(){
    global $post;
    $id = $post->ID;
    if($post->post_parent){
        $ancestor = get_post_ancestors($id);
        return $ancestor[0];
    }
    return $id;
}
function amountchild(){
    global $post;
    $pages = get_pages('child_of',
     $post->ID);
    return count($pages);
}
?>
<?php 
    function init_widget($id){
        register_sidebar(array(
            'name'=>'Sidebar',
            'id'=>'sidebar',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red; background.color:blue; ">',
            'afer_title'=>'</h3>',
        ));
        register_sidebar(array(
            'name'=>'showcase',
            'id'=>'sidebar',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red; background.color:blue; ">',
            'afer_title'=>'</h3>',
        ));
        register_sidebar(array(
            'name'=>'box1',
            'id'=>'sidebar',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red; background.color:blue; ">',
            'afer_title'=>'</h3>',
        ));
        register_sidebar(array(
            'name'=>'box2',
            'id'=>'sidebar',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red; background.color:blue; ">',
            'afer_title'=>'</h3>',
        ));
        register_sidebar(array(
            'name'=>'box3',
            'id'=>'sidebar',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red; background.color:blue; ">',
            'afer_title'=>'</h3>',
        ));
    }
    add_action('widgets_init','init_widget');
    ?>