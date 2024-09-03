<p class="post-date">
    Published on:
    <span><?php echo get_the_date(); ?></span>
    at
    <span><?php echo get_the_time(); ?></span>
</p>
<div class="post-content">
    <?php the_content(); ?>
</div>
<?php
    comments_template();
?>