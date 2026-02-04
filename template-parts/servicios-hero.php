<?php
/**
 * Servicios Hero Template Part
 * Hero section reutilizable para todas las páginas de servicios
 *
 * Variables esperadas:
 * $page_title - H1 de la página (keyword principal)
 * $page_subtitle - Subtítulo visual estilo Isra Bravo (opcional)
 * $page_description - Descripción SEO (2-3 líneas)
 * $breadcrumb_items - Array de items para breadcrumb: [['url' => '/', 'name' => 'Inicio'], ...]
 * $show_logo - Boolean para mostrar logo GNS (default: true)
 * $conversion_content - Array con el contenido del bloque de conversión (opcional)
 *                       Estructura: ['main' => [], 'sub' => [], 'accent' => '']
 *
 * @package GNS_Advisory
 */

// Valores por defecto
$page_title = $page_title ?? get_the_title();
$page_subtitle = $page_subtitle ?? '';
$page_description = $page_description ?? '';
$breadcrumb_items = $breadcrumb_items ?? array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => '', 'name' => get_the_title())
);
$show_logo = isset($show_logo) ? $show_logo : true;
$conversion_content = $conversion_content ?? null;
?>

<!-- Hero Servicios -->
<section class="servicios-hero" aria-labelledby="hero-seo-title">
    <div class="container">
        <!-- Breadcrumbs con Schema BreadcrumbList -->
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                <?php
                $position = 1;
                foreach ($breadcrumb_items as $index => $item) :
                    $is_last = ($index === count($breadcrumb_items) - 1);
                ?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <?php if (!$is_last && !empty($item['url'])) : ?>
                        <a itemprop="item" href="<?php echo esc_url($item['url']); ?>">
                            <span itemprop="name"><?php echo esc_html($item['name']); ?></span>
                        </a>
                    <?php else : ?>
                        <span itemprop="name"><?php echo esc_html($item['name']); ?></span>
                    <?php endif; ?>
                    <meta itemprop="position" content="<?php echo $position; ?>" />
                </li>
                <?php
                    $position++;
                endforeach;
                ?>
            </ol>
        </nav>

        <!-- Bloque SEO Hero -->
        <div class="hero-seo-block">
            <div class="hero-seo-content">
                <div class="hero-seo-text">
                    <!-- H1 OPTIMIZADO: Keyword principal -->
                    <h1 id="hero-seo-title" class="hero-seo-title"><?php echo esc_html($page_title); ?></h1>

                    <?php if (!empty($page_subtitle)) : ?>
                    <!-- H2 OPTIMIZADO: Beneficio principal con dato numérico -->
                    <h2 class="hero-seo-subtitle"><?php echo esc_html($page_subtitle); ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($page_description)) : ?>
                    <p class="hero-seo-description"><?php echo wp_kses_post($page_description); ?></p>
                    <?php endif; ?>
                </div>

                <?php if ($show_logo) : ?>
                <div class="hero-seo-logo">
                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>"
                         alt="GNS Advisory - Asesoría fiscal en Suiza"
                         width="180" height="37" loading="eager">
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($conversion_content) : ?>
        <!-- Bloque de Conversión - Top of the Fold -->
        <div class="conversion-headline">
            <?php if (!empty($conversion_content['main'])) : ?>
                <?php foreach ($conversion_content['main'] as $line) : ?>
                    <p class="conversion-main"><strong><?php echo esc_html($line); ?></strong></p>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($conversion_content['sub'])) : ?>
                <?php foreach ($conversion_content['sub'] as $line) : ?>
                    <p class="conversion-sub"><?php echo esc_html($line); ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (!empty($conversion_content['accent'])) : ?>
                <p class="conversion-accent"><strong><?php echo esc_html($conversion_content['accent']); ?></strong></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>

    </div>
</section>
