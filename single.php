<html lang="<?php get_locale() ?>">
<?php get_header(); ?>
<body>
    <?php get_sidebar(); ?>

    <h1 style="color: #F23456">Single template</h1>

    <main>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>

            <?php the_post(); ?>
            <?php the_content() ?>
        </article>
    </main>

    <?php get_footer(); ?>
</body>
</html>
