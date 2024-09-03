<?php get_header() ?>
<article class="page">
    <h2>
        <?php the_title(); ?>
    </h2>
    <p>
        <?php get_template_part('template-parts/content', 'page') ?>
    </p>
</article>
<?php get_footer() ?>