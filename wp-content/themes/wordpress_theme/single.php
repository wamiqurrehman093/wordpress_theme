<?php get_header() ?>
<article class="post">
    <h2>
        <?php the_title(); ?>
    </h2>
    <?php if (has_post_thumbnail()) {?>
        <img class="post-thumbnail" src="<?php the_post_thumbnail_url(); ?>">
    <?php } ?>
    <p>
        <?php get_template_part('template-parts/content', 'article') ?>
    </p>
</article>
<?php get_footer() ?>