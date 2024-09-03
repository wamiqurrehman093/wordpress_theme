<?php get_header() ?>
<article class="archive">
    <?php while (have_posts()) {
        the_title();
        the_post();
        get_template_part('template-parts/content', 'archive');
    } ?>
</article>
<?php get_footer() ?>