<?php
/**
 * Blog Article Hero Template Part
 * Hero section con imagen de fondo, autor y compartir arriba
 * Reutilizable para todos los artículos de blog
 *
 * Variables esperadas:
 * $article_title - Título del artículo (H1)
 * $article_excerpt - Descripción/subtítulo
 * $article_category - Texto de la categoría
 * $article_category_url - URL de la categoría
 * $article_date - Fecha formateada para mostrar
 * $article_date_iso - Fecha en formato ISO para datetime
 * $article_reading_time - Tiempo de lectura en minutos
 * $article_image_url - URL de la imagen de fondo (opcional, usa featured image si está disponible)
 * $author_name - Nombre del autor
 * $author_role - Rol/descripción corta del autor
 * $author_image_url - URL de la imagen del autor
 *
 * @package GNS_Advisory
 */

// Valores por defecto
$article_title = $article_title ?? get_the_title();
$article_excerpt = $article_excerpt ?? get_the_excerpt();
$article_category = $article_category ?? 'Blog';
$article_category_url = $article_category_url ?? home_url('/blog/');
$article_date = $article_date ?? get_the_date();
$article_date_iso = $article_date_iso ?? get_the_date('c');
$article_reading_time = $article_reading_time ?? '10';

// Imagen de fondo - usa featured image si existe
if (!isset($article_image_url) || empty($article_image_url)) {
    if (has_post_thumbnail()) {
        $article_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    } else {
        $article_image_url = '';
    }
}

// Autor por defecto - Alejandra Ortiz
$author_name = $author_name ?? 'Alejandra Ortiz';
$author_role = $author_role ?? 'Asesora Fiscal en Suiza';
$author_image_url = $author_image_url ?? home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');

// URL actual para compartir
$share_url = get_permalink();
$share_title = $article_title;
?>

<!-- ========================================
     HERO SECTION - ABOVE THE FOLD COMPLETO
     ======================================== -->
<section class="article-hero">
    <!-- Background Image -->
    <div class="article-hero-background" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <?php if ($article_image_url) : ?>
            <meta itemprop="url" content="<?php echo esc_url($article_image_url); ?>">
            <img src="<?php echo esc_url($article_image_url); ?>" alt="<?php echo esc_attr($article_title); ?>" loading="eager" fetchpriority="high">
        <?php else : ?>
            <!-- Fallback gradient background -->
            <div class="article-hero-fallback"></div>
        <?php endif; ?>
    </div>

    <!-- Overlay for text readability -->
    <div class="article-hero-overlay"></div>

    <!-- Hero Content -->
    <div class="article-hero-content">
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
                    <a itemprop="item" href="<?php echo home_url('/blog/'); ?>">
                        <span itemprop="name">Blog</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name" class="current"><?php echo esc_html($article_category); ?></span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>

        <!-- Content Box with Blur Effect -->
        <div class="hero-content-box">
            <!-- Meta: Category, Date, Reading Time -->
            <div class="hero-meta">
                <a href="<?php echo esc_url($article_category_url); ?>" class="hero-category" itemprop="articleSection">
                    <?php echo esc_html($article_category); ?>
                </a>
                <span class="hero-date">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <time datetime="<?php echo esc_attr($article_date_iso); ?>"><?php echo esc_html($article_date); ?></time>
                </span>
                <span class="hero-reading-time">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <?php echo esc_html($article_reading_time); ?> min
                </span>
            </div>

            <!-- H1 - Main Title -->
            <h1 itemprop="headline"><?php echo esc_html($article_title); ?></h1>

            <!-- H2 - Subtitle -->
            <?php if (!empty($article_subtitle)) : ?>
                <h2 class="hero-subtitle"><?php echo esc_html($article_subtitle); ?></h2>
            <?php endif; ?>

            <!-- Excerpt/Description -->
            <?php if ($article_excerpt) : ?>
                <p class="hero-excerpt" itemprop="description"><?php echo esc_html($article_excerpt); ?></p>
            <?php endif; ?>

            <!-- Footer: Author + Social Share -->
            <div class="hero-footer">
                <!-- Author Info -->
                <div class="hero-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="hero-author-avatar">
                        <?php if ($author_image_url) : ?>
                            <img src="<?php echo esc_url($author_image_url); ?>" alt="<?php echo esc_attr($author_name); ?>" itemprop="image">
                        <?php else : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        <?php endif; ?>
                    </div>
                    <div class="hero-author-info">
                        <span class="hero-author-name" itemprop="name"><?php echo esc_html($author_name); ?></span>
                        <span class="hero-author-role"><?php echo esc_html($author_role); ?></span>
                    </div>
                </div>

                <!-- Social Share -->
                <div class="hero-share">
                    <span class="hero-share-label">Compartir:</span>
                    <div class="hero-share-buttons">
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($share_url); ?>&text=<?php echo urlencode($share_title); ?>" target="_blank" rel="noopener noreferrer" class="hero-share-btn" aria-label="Compartir en X (Twitter)">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($share_url); ?>&title=<?php echo urlencode($share_title); ?>" target="_blank" rel="noopener noreferrer" class="hero-share-btn" aria-label="Compartir en LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode($share_title . ' - ' . $share_url); ?>" target="_blank" rel="noopener noreferrer" class="hero-share-btn" aria-label="Compartir en WhatsApp">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                        <a href="mailto:?subject=<?php echo rawurlencode($share_title); ?>&body=<?php echo rawurlencode('Te recomiendo este artículo: ' . $share_url); ?>" class="hero-share-btn" aria-label="Compartir por email">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HERO SECTION -->
