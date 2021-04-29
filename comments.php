<?php
if (!post_password_required()) { ?>
    <ul class="comments-list">
        <?php
            wp_list_comments(array(
                'avatar_size'    => 60,
                'style'            => 'ul',
                'callback'        => 'doxy_comments',
                'type'            => 'all'
            ));

            ?>
    </ul>
<?php
}
?>

<div class="comment-pagination <?php if (empty(get_comments_number())) {
                                    echo 'minus-comment-spacing';
                                } ?>">
    <?php
    paginate_comments_links(array(
        'prev_text' => esc_html__('<', 'doxylite'),
        'next_text' => esc_html__('>', 'doxylite'),
        'mid_size'  => 3
    ));
    ?>

</div>

<?php

$comments_args = array(
    'label_submit' => esc_html__('Add Comment', 'doxylite'),
    'title_reply' => esc_html__('Leave a Comment', 'doxylite'),
    'comment_notes_after' => '',
    'class_submit' => 'submit_class',
    'fields' => array(
        'author' => '<div class="row"> <div class="col-md-6"><input type="text" class="form-control" name="author" placeholder="' . esc_attr__('Your Name*', 'doxylite') . '" required /></div>',
        'email' => '<div class="col-md-6"><input class="form-control" placeholder="' . esc_attr__('Your Email*', 'doxylite') . '" name="email" type="email" required></div></div> ',
    ),
    'comment_field' => '<textarea placeholder="' . esc_attr__('Type Comment', 'doxylite') . '" class="form-control" id="comment" name="comment" ></textarea>',
    'id_form'           => 'commentform',
    'class_form'      => 'comment-form',
    'id_submit'         => 'submit',
    'class_submit'   => 'btn-style2 btn',
    'title_reply_to'    => esc_html__('Leave a Reply to %s', 'doxylite'),
    'cancel_reply_link' => esc_html__('Cancel Reply', 'doxylite'),
    'format'            => 'xhtml',

);
comment_form($comments_args);
?>