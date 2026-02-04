<?php
/**
 * Single Post Template
 * SEO-optimized with full-screen hero, schema markup, breadcrumbs, and social sharing
 * Above The Fold completo para SEO
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/single.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main single-post-page">

    <?php while (have_posts()) : the_post();
        $categories = get_the_category();
        $primary_category = $categories ? $categories[0] : null;

        // Calculate reading time
        $content = get_the_content();
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200);

        // Get featured image URL for hero background
        $hero_image_url = '';
        if (has_post_thumbnail()) {
            $thumbnail_id = get_post_thumbnail_id();
            $hero_image_url = wp_get_attachment_image_url($thumbnail_id, 'full');
        }

        // Get author info
        $author_id = get_the_author_meta('ID');
        $author_name = get_the_author();
        $author_avatar = get_avatar_url($author_id, array('size' => 100));
        $author_description = get_the_author_meta('description');
    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/BlogPosting">
            <!-- Schema.org metadata -->
            <meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>">
            <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
            <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">

            <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display:none;">
                <meta itemprop="name" content="GNS Group Advisory">
                <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
                </span>
            </span>

            <!-- ========================================
                 HERO SECTION - ABOVE THE FOLD COMPLETO
                 ======================================== -->
            <section class="post-hero">
                <!-- Background Image -->
                <div class="post-hero-background" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <?php if ($hero_image_url) : ?>
                        <meta itemprop="url" content="<?php echo esc_url($hero_image_url); ?>">
                        <?php the_post_thumbnail('full', array('loading' => 'eager', 'itemprop' => 'image', 'fetchpriority' => 'high')); ?>
                    <?php else : ?>
                        <!-- Fallback gradient background -->
                        <div style="width:100%;height:100%;background:linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);"></div>
                    <?php endif; ?>
                </div>

                <!-- Overlay for text readability -->
                <div class="post-hero-overlay"></div>

                <!-- Hero Content -->
                <div class="post-hero-content">
                    <!-- Breadcrumbs with Schema -->
                    <nav class="hero-breadcrumbs" aria-label="Breadcrumb">
                        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo home_url(); ?>">
                                    <span itemprop="name">Inicio</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                                    <span itemprop="name">Blog</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>
                            <?php if ($primary_category) : ?>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo esc_url(get_category_link($primary_category->term_id)); ?>">
                                    <span itemprop="name"><?php echo esc_html($primary_category->name); ?></span>
                                </a>
                                <meta itemprop="position" content="3" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name" class="current"><?php the_title(); ?></span>
                                <meta itemprop="position" content="4" />
                            </li>
                            <?php else : ?>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name" class="current"><?php the_title(); ?></span>
                                <meta itemprop="position" content="3" />
                            </li>
                            <?php endif; ?>
                        </ol>
                    </nav>

                    <!-- Content Box with Blur Effect -->
                    <div class="hero-content-box">
                        <!-- Meta: Category, Date, Reading Time -->
                        <div class="hero-meta">
                            <?php if ($primary_category) : ?>
                                <a href="<?php echo esc_url(get_category_link($primary_category->term_id)); ?>" class="hero-category" itemprop="articleSection">
                                    <?php echo esc_html($primary_category->name); ?>
                                </a>
                            <?php endif; ?>
                            <span class="hero-date">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            </span>
                            <span class="hero-reading-time">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <?php echo $reading_time; ?> min
                            </span>
                        </div>

                        <!-- H1 - Main Title -->
                        <h1 itemprop="headline"><?php the_title(); ?></h1>

                        <!-- H2 - Excerpt/Subtitle -->
                        <?php if (has_excerpt()) : ?>
                            <p class="hero-excerpt" itemprop="description"><?php echo get_the_excerpt(); ?></p>
                        <?php endif; ?>

                        <!-- Footer: Author + Social Share -->
                        <div class="hero-footer">
                            <!-- Author Info -->
                            <div class="hero-author" itemprop="author" itemscope itemtype="https://schema.org/Organization">
                                <div class="hero-author-avatar">
                                    <?php if ($author_avatar && strpos($author_avatar, 'gravatar') !== false && get_avatar_url($author_id)) : ?>
                                        <img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author_name); ?>">
                                    <?php else : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    <?php endif; ?>
                                </div>
                                <div class="hero-author-info">
                                    <span class="hero-author-name" itemprop="name">GNS Group Advisory</span>
                                    <span class="hero-author-role">Asesores Fiscales en Suiza</span>
                                </div>
                            </div>

                            <!-- Social Share -->
                            <div class="hero-share">
                                <span class="hero-share-label">Compartir:</span>
                                <div class="hero-share-buttons">
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="hero-share-btn" aria-label="Compartir en X (Twitter)">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="hero-share-btn" aria-label="Compartir en LinkedIn">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                    </a>
                                    <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' - ' . get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="hero-share-btn" aria-label="Compartir en WhatsApp">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                    </a>
                                    <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode('Te recomiendo este artículo: ' . get_permalink()); ?>" class="hero-share-btn" aria-label="Compartir por email">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scroll Indicator -->
                <div class="hero-scroll-indicator" aria-hidden="true">
                    <span>Leer artículo</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </section>
            <!-- END HERO SECTION -->

            <!-- Article Content -->
            <div class="post-content animate-on-scroll" itemprop="articleBody">
                <?php the_content(); ?>
            </div>

            <footer class="post-footer">
                <?php
                $tags = get_the_tags();
                if ($tags) :
                ?>
                    <div class="post-tags animate-on-scroll">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" rel="tag">#<?php echo esc_html($tag->name); ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="post-share animate-on-scroll">
                    <span class="post-share-label">Compartir:</span>
                    <div class="share-buttons">
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="share-btn" aria-label="Compartir en X (Twitter)">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="share-btn" aria-label="Compartir en LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' - ' . get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="share-btn" aria-label="Compartir en WhatsApp">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                        <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode('Te recomiendo este artículo: ' . get_permalink()); ?>" class="share-btn" aria-label="Compartir por email">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Author Box -->
                <div class="author-box animate-on-scroll" itemprop="author" itemscope itemtype="https://schema.org/Organization">
                    <div class="author-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="author-info">
                        <h4 itemprop="name">GNS Group Advisory</h4>
                        <p itemprop="description">Somos un equipo de asesores fiscales especializados en fiscalidad suiza para emprendedores de habla hispana. Ayudamos a optimizar tu situación fiscal de forma legal y eficiente.</p>
                    </div>
                </div>

                <nav class="post-navigation animate-on-scroll" aria-label="Navegación entre artículos">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>

                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="nav-previous" rel="prev">
                            <span class="nav-label">← Anterior</span>
                            <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                        </a>
                    <?php else : ?>
                        <div></div>
                    <?php endif; ?>

                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="nav-next" rel="next">
                            <span class="nav-label">Siguiente →</span>
                            <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                        </a>
                    <?php endif; ?>
                </nav>
            </footer>

        </article>

        <!-- Related Posts -->
        <?php
        if ($primary_category) {
            $related_args = array(
                'category__in' => array($primary_category->term_id),
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()) :
        ?>
        <section class="related-posts">
            <h2 class="animate-on-scroll">Artículos relacionados</h2>
            <div class="related-grid">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="related-card animate-on-scroll">
                        <div class="related-card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                            <?php endif; ?>
                        </div>
                        <div class="related-card-content">
                            <?php
                            $rel_categories = get_the_category();
                            if ($rel_categories) : ?>
                                <span class="related-card-category"><?php echo esc_html($rel_categories[0]->name); ?></span>
                            <?php endif; ?>
                            <h3 class="related-card-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
            endif;
            wp_reset_postdata();
        }
        ?>

        <!-- CTA Section -->
        <section class="post-cta">
            <div class="post-cta-inner animate-on-scroll">
                <h3>¿Te ha resultado útil este artículo?</h3>
                <p>Si tienes dudas sobre tu situación fiscal, agenda una consulta gratuita con nuestro equipo.</p>
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">Reservar consulta gratuita</a>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect - change from transparent to solid
    const header = document.querySelector('.site-header');
    const hero = document.querySelector('.post-hero');

    if (header && hero) {
        const heroHeight = hero.offsetHeight;

        function handleScroll() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Check on load
        handleScroll();

        // Check on scroll with throttle for performance
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // Scroll animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Smooth scroll for hero scroll indicator
    const scrollIndicator = document.querySelector('.hero-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const content = document.querySelector('.post-content');
            if (content) {
                content.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
        scrollIndicator.style.cursor = 'pointer';
    }
});
</script>

<?php get_footer(); ?>
