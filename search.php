<?php get_header(); ?>

<?php get_sidebar('menu'); ?>

<section class="posts" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="post-info">
            <h1><?php printf( __( 'Search Results for: %s', 'espresso-programmer' ), get_search_query() ); ?></h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content' ); ?>
        <?php endwhile; ?>

        <?php get_template_part('navigation'); ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>