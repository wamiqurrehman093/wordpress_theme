<div class="post-comments">
    <div class="post-comments-header">
        <h3>Comments</h3>
        <p class="post-comments-number">[<?php comments_number() ?>]</p>
    </div>
    <hr>
    <?php
        if (comments_open())
        {
            comment_form(array(
            ));
        }
    ?>
    <hr>
    <?php
        wp_list_comments(
            array(
            )
        );
    ?>
</div>