<?php get_header() ?>
<article>
    <h2>
        <?php the_title(); ?>
    </h2>
    <p>
        <?php the_content() ?>
    </p>
    <div>
        <p>the site currently has posts: <?php print_r(get_posts()) ?></p>
        <?php
            if (have_posts())
            {
                while (have_posts())
                {
                    echo the_post();
                }
            }
        ?>
    </div>
</article>
<?php get_footer() ?>