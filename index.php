<?php
/**
 * Main Template File
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">

        <!-- Hero Section -->
        <section class="hero-section">
            <h1>Welcome to GNS Group Advisory</h1>
            <p>Professional advisory services for your business success</p>
        </section>

        <!-- Content Section -->
        <section class="content-section">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p>No content available.</p>';
            endif;
            ?>
        </section>

    </div>
</main>

<?php get_footer(); ?>
