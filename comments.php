<h2>Comments</h2>
<?php $args = array(
    'walker'     => null,
    'max_depth'  =>'3',
    'style'      =>'ol',
    'callback'   =>null,
    'end-callback' =>null,
    'type'         => 'all',
    'reply_text'   =>'Reply',
    'page'         =>'',
    'per_page'     =>'',
    'avatar_size'  =>80,
    'reverse_top_level' => null,
    'reverse_children' =>'',
    'format'           => 'html5',//or 'xhtml' if no 'HTML5' teme
    'short_ping'       => false, //@since 3.6
    'echo'             => true //boolean, default is true
);
?>
<?php wp_list_comments($args, $comments);?>
<?php 
     $form_args = array(
         'label_sumit'          => 'Send Comment',
         'title_reply'          => 'Write a Reply or comment',
         'comment_notes_after'  => '',
         'comment_field'        => '<p class= "comment-form-comment">
         <label for="comment">'._x('comment','noun').'</label><br>
         <textarea id= "comment" name="comment" 
         cols="60" rows="10" aria-required ="true"></textarea></p>',
     );
     comment_form($form_args);
     ?>