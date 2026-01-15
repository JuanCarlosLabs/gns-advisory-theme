<?php
/**
 * Template for displaying pages
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<main id="main-content" class="site-main page-content">
    <div class="container">

        <?php
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <div class="page-content-wrapper">
                    <?php the_content(); ?>
                </div>

            </article>
            <?php
        endwhile;
        ?>

    </div>
</main>

<?php get_footer(); ?>
