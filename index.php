<html lang="<?php get_locale(); ?>">
<?php get_header(); ?>
<body>
    <?php get_sidebar(); ?>

    <h1 style="color: #F23456">Index template</h1>

    <main>
        <?php if (have_posts()) :  ?>
            <?php while (have_posts()) : ?>
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>

                    <?php the_post(); ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

    <?php get_footer(); ?>
</body>
</html>
