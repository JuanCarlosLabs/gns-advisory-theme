<?php
/**
 * GNS Landing Theme Functions
 *
 * @package GNS_Advisory
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function gns_advisory_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gns-advisory'),
        'footer'  => __('Footer Menu', 'gns-advisory'),
    ));
}
add_action('after_setup_theme', 'gns_advisory_setup');

/**
 * Enqueue Scripts and Styles
 */
function gns_advisory_scripts() {
    // Theme main stylesheet (siempre)
    wp_enqueue_style(
        'gns-landing-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Landing page styles (cargado en todas las páginas para el footer)
    wp_enqueue_style(
        'gns-landing-page-style',
        get_template_directory_uri() . '/assets/css/landing.css',
        array('gns-landing-style'),
        filemtime(get_template_directory() . '/assets/css/landing.css')
    );

    // Servicios page styles (páginas de servicios SEO)
    // Nota: Usamos is_page() con slug porque is_page_template() no funciona
    // cuando el template se carga automáticamente via gns_auto_template_by_slug()
    $servicios_pages = array(
        'servicios',                    // HUB principal
        'crear-empresa-suiza',          // CAT 1
        'gmbh-suiza',                   // Ficha
        'holding-suiza',                // Ficha
        'ag-suiza',                     // Ficha
        'autonomo-suiza',               // Ficha
        'irpf-suiza-declaracion',       // CAT 2 - Servicio IRPF
        'iva-suiza',                    // Ficha
        'impuesto-sociedades',          // Ficha
        'optimizacion-fiscal',          // CAT 3
        'forfait-fiscal',               // Ficha
        'residencia-fiscal-suiza',      // CAT 4
        'fiscalidad-cantones-suiza',    // Ficha - Optimizacion por cantones
        'cambio-residencia-fiscal-suiza', // Ficha - Cambio residencia fiscal
    );
    if (is_page($servicios_pages)) {
        wp_enqueue_style(
            'gns-servicios-style',
            get_template_directory_uri() . '/assets/css/servicios-page.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/servicios-page.css')
        );
        // Estilos adicionales para fichas de servicio
        wp_enqueue_style(
            'gns-servicios-fichas-style',
            get_template_directory_uri() . '/assets/css/servicios.css',
            array('gns-servicios-style'),
            filemtime(get_template_directory() . '/assets/css/servicios.css')
        );
    }

    // Contacto page styles
    if (is_page('contacto')) {
        wp_enqueue_style(
            'gns-contacto-style',
            get_template_directory_uri() . '/assets/css/contacto.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/contacto.css')
        );
    }

    // About page styles
    if (is_page('quien-es-gns-advisory')) {
        wp_enqueue_style(
            'gns-about-style',
            get_template_directory_uri() . '/assets/css/about.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/about.css')
        );
    }

    // Blog article styles - Detecta páginas con template "Blog -" y TODOS los posts
    $is_blog_article = false;

    // Detectar posts del blog (todos los posts usan el estilo de artículo)
    if (is_singular('post')) {
        $is_blog_article = true;
    }

    // Detectar páginas con templates de artículo
    if (is_singular('page')) {
        global $post;

        // Lista de slugs de artículos del blog (sin 'page-' y sin '.php')
        $blog_article_slugs = array(
            // Artículos del blog - slugs actuales
            'crear-empresa-suiza-guia',
            'que-es-gmbh-suiza',
            'que-es-holding-suiza',
            'autonomo-suiza-einzelfirma',
            'empresa-suiza-sin-residencia',
            'pasos-crear-empresa-suiza',
            'iva-en-suiza-guia',
            'iva-en-suiza',  // Alias por si el slug es diferente
            'declaracion-renta-suiza',
            // Legacy (mantener por compatibilidad durante transición)
            'guia-gmbh-suiza',
            'guia-holding-suiza',
            'holding-suiza-empresas-espana-europa-2026',
            'gmbh-suiza-hispanohablantes-servicios-2026',
            'hacerse-autonomo-en-suiza',
            'crear-empresa-en-suiza',
        );

        // Lista de templates de artículos del blog (para detección por archivo)
        $blog_article_templates = array_map(function($slug) {
            return 'page-' . $slug . '.php';
        }, $blog_article_slugs);

        // Método 1: Detectar por slug de página (para auto-template por slug)
        if ($post) {
            $slug = $post->post_name;
            if (in_array($slug, $blog_article_slugs)) {
                $is_blog_article = true;
            }
        }

        // Método 2: Detectar por template asignado manualmente
        if (!$is_blog_article) {
            $template_file = get_page_template();
            if ($template_file && file_exists($template_file)) {
                // Leer el Template Name del archivo
                $template_data = get_file_data($template_file, array('Template Name' => 'Template Name'));
                if (!empty($template_data['Template Name']) && strpos($template_data['Template Name'], 'Blog -') === 0) {
                    $is_blog_article = true;
                }

                // Detectar por nombre de archivo
                $template_basename = basename($template_file);
                if (in_array($template_basename, $blog_article_templates)) {
                    $is_blog_article = true;
                }
            }
        }
    }

    if ($is_blog_article) {
        wp_enqueue_style(
            'gns-blog-article-style',
            get_template_directory_uri() . '/assets/css/blog-article.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/blog-article.css')
        );
    }

    // Blog page styles (home.php)
    if (is_home() || is_archive()) {
        wp_enqueue_style(
            'gns-blog-style',
            get_template_directory_uri() . '/assets/css/blog.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/blog.css')
        );
    }

    // Single post styles (pero NO para los artículos con template personalizado)
    if (is_single() && !$is_blog_article) {
        wp_enqueue_style(
            'gns-single-style',
            get_template_directory_uri() . '/assets/css/single.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/single.css')
        );
    }

    // 404 page styles
    if (is_404()) {
        wp_enqueue_style(
            'gns-404-style',
            get_template_directory_uri() . '/assets/css/404.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/404.css')
        );
    }

    // Legal pages styles (Privacidad, Aviso Legal, Cookies)
    if (is_page(array('politica-de-privacidad', 'aviso-legal', 'politica-de-cookies'))) {
        wp_enqueue_style(
            'gns-legal-style',
            get_template_directory_uri() . '/assets/css/legal.css',
            array('gns-landing-page-style'),
            filemtime(get_template_directory() . '/assets/css/legal.css')
        );
    }

    // Landing page scripts (cargado en todas las páginas para las animaciones del footer)
    wp_enqueue_script(
        'gns-landing-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'gns_advisory_scripts');

/**
 * Add noindex to legal pages (Privacy, Legal Notice, Cookies)
 * These pages don't need to be indexed by search engines
 */
function gns_legal_pages_noindex() {
    if (is_page(array('politica-de-privacidad', 'aviso-legal', 'politica-de-cookies')) || is_category() || is_tag() || is_date()) {
        echo '<meta name="robots" content="noindex, follow">' . "\n";
    }
}
add_action('wp_head', 'gns_legal_pages_noindex', 1);

/**
 * Register Widget Areas
 */
function gns_advisory_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'gns-advisory'),
        'id'            => 'footer-widget-area',
        'description'   => __('Appears in the footer section', 'gns-advisory'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'gns_advisory_widgets_init');

/**
 * Custom Excerpt Length
 */
function gns_advisory_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'gns_advisory_excerpt_length');

/**
 * Remove unnecessary features for landing page optimization
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * Disable Emojis (Performance Optimization)
 */
function gns_advisory_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'gns_advisory_disable_emojis');

/**
 * Add defer attribute to scripts (Performance Optimization)
 */
function gns_advisory_defer_scripts($tag, $handle, $src) {
    // Scripts that should be deferred
    $defer_scripts = array(
        'jquery-migrate',
        'gns-landing-script',
        'sib-front-js', // Brevo/Sendinblue
    );

    // Don't defer in admin
    if (is_admin()) {
        return $tag;
    }

    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }

    return $tag;
}
add_filter('script_loader_tag', 'gns_advisory_defer_scripts', 10, 3);

/**
 * Dequeue WordPress block library CSS if not using Gutenberg blocks
 */
function gns_advisory_dequeue_block_styles() {
    // Only on front page (landing)
    if (is_front_page()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-blocks-style'); // WooCommerce blocks
        wp_dequeue_style('global-styles'); // Global styles
    }
}
add_action('wp_enqueue_scripts', 'gns_advisory_dequeue_block_styles', 100);

/**
 * Remove jQuery migrate on frontend (optional - comment out if issues arise)
 */
function gns_advisory_remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) {
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'gns_advisory_remove_jquery_migrate');

/**
 * Preload critical assets
 */
function gns_advisory_preload_assets() {
    // Preload main CSS
    $css_path = get_template_directory_uri() . '/assets/css/landing.css';
    echo '<link rel="preload" href="' . esc_url($css_path) . '" as="style">' . "\n";

    // Preload Google Fonts CSS
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&display=swap" as="style" crossorigin>' . "\n";
}
add_action('wp_head', 'gns_advisory_preload_assets', 1);

/**
 * Add resource hints for external resources
 */
function gns_advisory_resource_hints($urls, $relation_type) {
    if ('dns-prefetch' === $relation_type) {
        $urls[] = '//fonts.googleapis.com';
        $urls[] = '//fonts.gstatic.com';
    }

    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'gns_advisory_resource_hints', 10, 2);

/**
 * =================================================================
 * SEO ENHANCEMENTS
 * =================================================================
 */

/**
 * Add Open Graph and Twitter Card meta tags
 * SEO Meta Tags actualizados según tabla SEO Maestra 2026
 */
function gns_advisory_meta_tags() {
    $site_name = 'GNS Advisory';
    $site_url = home_url('/');
    $default_image = home_url('/wp-content/uploads/2025/05/GNS-Advisory-Logo-negro.png');
    $locale = 'es_ES';

    // Default values
    $og_title = get_bloginfo('name') . ' - Optimización fiscal en Suiza';
    $og_description = 'Asesoría fiscal internacional especializada en Suiza. Ayudamos a empresarios y profesionales a optimizar su fiscalidad de forma 100% legal.';
    $og_type = 'website';
    $og_image = $default_image;
    $og_url = $site_url;

    // =================================================================
    // SEO META TAGS - TABLA SEO MAESTRA 2026
    // =================================================================
    if (is_front_page()) {
        // Home - KW: fiscalidad en suiza
        $og_title = 'Fiscalidad en Suiza para Empresarios 2026 | GNS Advisory';
        $og_description = 'Fiscalidad en Suiza para empresarios que no quieren regalar su dinero. Pasa del 45% al 12% de impuestos legalmente y protege tu patrimonio hoy.';
    } elseif (is_singular('post')) {
        $og_title = get_the_title();
        $og_description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30, '...');
        $og_type = 'article';
        $og_url = get_permalink();
        if (has_post_thumbnail()) {
            $og_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
        }
    } elseif (is_page()) {
        $og_url = get_permalink();

        // PÁGINAS PRINCIPALES
        if (is_page('servicios')) {
            // /servicios - KW: planificación fiscal
            $og_title = 'Planificación fiscal en Suiza y ahorro para empresas 2026';
            $og_description = 'Planificación fiscal en Suiza para asegurar lo que es tuyo. Diseñamos estructuras legales para que tu empresa pague el mínimo de impuestos posible.';
        } elseif (is_page('crear-empresa-suiza')) {
            // /crear-empresa-suiza - KW: empresa en suiza
            $og_title = 'Empresa en Suiza 2026 y cómo pagar solo un 12% de impuestos';
            $og_description = 'Empresa en Suiza: la solución definitiva para huir de la presión fiscal. Gestionamos la constitución de tu sociedad para que ahorres desde el primer día.';
        } elseif (is_page('gmbh-suiza')) {
            // /gmbh-suiza - KW: gmbh
            $og_title = 'GmbH Suiza y las ventajas de la sociedad limitada en 2026';
            $og_description = 'GmbH Suiza es la opción inteligente para pymes y freelancers. Descubre cómo tributar al 12% con la seguridad jurídica del sistema suizo.';
        } elseif (is_page('ag-suiza')) {
            // /ag-suiza - KW: ag
            $og_title = 'AG Suiza para grandes empresas con máxima privacidad 2026';
            $og_description = 'AG Suiza para quienes exigen anonimato y baja tributación. La estructura de capital perfecta para proteger grandes inversiones internacionales.';
        } elseif (is_page('holding-suiza')) {
            // /holding-suiza - KW: holding
            $og_title = 'Holding en Suiza para ahorrar el 95% en tus dividendos 2026';
            $og_description = 'Holding en Suiza: optimiza tu fiscalidad cobrando dividendos casi sin tributar. Centraliza tus sociedades en el país más estable del mundo.';
        } elseif (is_page('autonomo-suiza')) {
            // /autonomo-suiza - KW: ser autonomo en suiza
            $og_title = 'Ser autónomo en Suiza en 2026 con menos trámites y costes';
            $og_description = 'Ser autónomo en Suiza te permite conservar casi todo tu sueldo. Olvida las cuotas abusivas de España y empieza a ganar lo que te mereces.';
        } elseif (is_page('irpf-suiza-declaracion')) {
            // /irpf-suiza-declaracion - KW: irpf suiza (SERVICIO)
            $og_title = 'IRPF Suiza y ahorro máximo en tu declaración de renta 2026';
            $og_description = 'IRPF Suiza: guía para residentes que buscan pagar lo mínimo. Entiende los tramos fiscales federales y cantonales para optimizar tu renta.';
        } elseif (is_page('iva-suiza')) {
            // /iva-suiza - KW: iva en suiza
            $og_title = 'IVA en Suiza al 8,1% para empresas y autónomos en 2026';
            $og_description = 'IVA en Suiza al 8,1%, la tasa más baja de Europa. Te ayudamos con el registro y la gestión para que tu empresa sea más competitiva.';
        } elseif (is_page('residencia-fiscal-suiza')) {
            // /residencia-fiscal-suiza - KW: residencia fiscal suiza
            $og_title = 'Residencia fiscal suiza y cómo obtenerla legalmente en 2026';
            $og_description = 'Residencia fiscal suiza: deja de ser un rehén de Hacienda. Te explicamos los requisitos para trasladar tu residencia y vivir con libertad fiscal.';
        } elseif (is_page('optimizacion-fiscal') || is_page('fiscalidad-cantones-suiza')) {
            // /optimizacion-fiscal - KW: cantones suiza impuestos
            $og_title = 'Cantones Suiza impuestos y comparativa de ahorro fiscal 2026';
            $og_description = 'Cantones Suiza impuestos y diferencias clave. No todos los cantones son iguales; te ayudamos a elegir el que mejor proteja tus ahorros.';
        } elseif (is_page('contacto')) {
            // /contacto - KW: asesor fiscal suiza
            $og_title = 'Asesor fiscal en Suiza para tu consulta fiscal | GNS Advisory';
            $og_description = 'Asesor fiscal en Suiza experto en clientes hispanohablantes. Reserva tu consulta y descubre cuánto dinero puedes ahorrar con un cambio de sede.';
        } elseif (is_page('que-es-gmbh-suiza')) {
            // /que-es-gmbh-suiza - KW: qué es una gmbh en suiza
            $og_title = 'Qué es una GmbH en Suiza y sus grandes ventajas fiscales';
            $og_description = 'Qué es una GmbH en Suiza y cómo funciona. Te explicamos por qué es la sociedad limitada favorita de los españoles que emigran a Suiza.';
        } elseif (is_page('que-es-holding-suiza')) {
            // /que-es-holding-suiza - KW: qué es una holding suiza
            $og_title = 'Qué es una holding suiza para mover capital sin impuestos';
            $og_description = 'Qué es una holding suiza: la herramienta de ahorro definitiva. Mueve capital entre tus empresas sin que Hacienda toque un solo euro.';
        } elseif (is_page('autonomo-suiza-einzelfirma')) {
            // /autonomo-suiza-einzelfirma - KW: einzelfirma suiza
            $og_title = 'Einzelfirma en Suiza para ser autónomo sin capital mínimo';
            $og_description = 'Einzelfirma en Suiza: empieza tu actividad sin capital mínimo. La guía para autónomos que buscan rapidez y bajos impuestos en Suiza.';
        } elseif (is_page('empresa-suiza-sin-residencia')) {
            // /empresa-suiza-sin-residencia - KW: crear empresa suiza sin vivir alli
            $og_title = 'Crear empresa en Suiza sin vivir allí y requisitos de ley';
            $og_description = 'Crear empresa en Suiza sin vivir allí es posible. Conoce los requisitos de sustancia y cómo operar tu sociedad suiza desde el extranjero.';
        } elseif (is_page('pasos-crear-empresa-suiza')) {
            // /pasos-crear-empresa-suiza - KW: pasos crear empresa suiza
            $og_title = 'Pasos para Crear Empresa en Suiza | Guía Completa 2026';
            $og_description = 'Descubre los pasos para crear empresa en Suiza: desde elegir el tipo de sociedad hasta la inscripción en el Registro Mercantil. Te guiamos en cada fase del proceso.';
        } elseif (is_page('quien-es-gns-advisory')) {
            // /quien-es-gns-advisory - KW: gns advisory
            $og_title = 'Sobre GNS Advisory y expertos en fiscalidad | GNS Advisory';
            $og_description = 'GNS Advisory: conoce a Alejandra Ortiz y al equipo de expertos en fiscalidad suiza que te ayudarán a optimizar tus ahorros con seguridad.';
        // GUÍAS INFORMATIVAS (con ":")
        } elseif (is_page('crear-empresa-suiza-guia')) {
            // /crear-empresa-suiza-guia - KW: como crear empresa en suiza
            $og_title = 'Cómo Crear Empresa en Suiza: Guía 2026 | GNS Advisory';
            $og_description = 'Cómo crear empresa en Suiza: Guía completa 2026. Requisitos, costes, formas jurídicas y ventajas fiscales explicadas paso a paso para emprendedores.';
        } elseif (is_page('iva-en-suiza-guia')) {
            // /iva-en-suiza-guia - KW: como funciona el iva en suiza
            $og_title = 'Cómo Funciona el IVA en Suiza: Guía de Tasas y Registro';
            $og_description = 'Cómo funciona el IVA en Suiza: Guía 2026. Aprende todo sobre las tasas del 8,1%, el registro obligatorio y cómo recuperar el IVA de tu empresa.';
        } elseif (is_page('declaracion-renta-suiza')) {
            // /declaracion-renta-suiza - KW: como declarar impuestos en suiza (BLOG)
            $og_title = 'Cómo Declarar Impuestos en Suiza: Guía de la Renta 2026';
            $og_description = 'Cómo declarar impuestos en Suiza sin errores. Guía práctica sobre la declaración de la renta para residentes: deducciones, plazos y consejos.';
        } else {
            // Default para otras páginas
            $og_title = get_the_title();
        }
    } elseif (is_home() || is_archive()) {
        $og_title = 'Blog';
        $og_description = 'Artículos, guías y estrategias sobre fiscalidad en Suiza para empresarios inteligentes.';
    }

    // Output meta tags
    ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo esc_attr($og_description); ?>">
    <meta name="author" content="GNS Advisory">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>">
    <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:locale" content="<?php echo esc_attr($locale); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo esc_url($og_url); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr($og_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($og_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url($og_url); ?>">

    <!-- Language -->
    <link rel="alternate" hreflang="es" href="<?php echo esc_url($og_url); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($og_url); ?>">
    <?php
}
add_action('wp_head', 'gns_advisory_meta_tags', 2);

/**
 * Add Schema.org JSON-LD structured data
 */
function gns_advisory_schema_markup() {
    $site_url = home_url('/');

    // Organization Schema (always present)
    $organization_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'GNS Advisory',
        'alternateName' => 'GNS Group Advisory',
        'url' => $site_url,
        'logo' => home_url('/wp-content/uploads/2025/05/GNS-Advisory-Logo-negro.png'),
        'description' => 'Asesoría fiscal internacional especializada en optimización fiscal en Suiza.',
        'email' => 'info@gnsadvisory.com',
        'address' => array(
            '@type' => 'PostalAddress',
            'addressCountry' => 'CH',
            'addressLocality' => 'Suiza'
        ),
        'sameAs' => array(
            'https://www.linkedin.com/company/gns-advisory'
        ),
        'contactPoint' => array(
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'email' => 'info@gnsadvisory.com',
            'availableLanguage' => array('Spanish', 'English')
        )
    );

    echo '<script type="application/ld+json">' . wp_json_encode($organization_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";

    // LocalBusiness Schema for front page
    if (is_front_page()) {
        $local_business = array(
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'GNS Advisory',
            'image' => home_url('/wp-content/uploads/2025/05/GNS-Advisory-Logo-negro.png'),
            'url' => $site_url,
            'description' => 'Optimización fiscal en Suiza para empresarios y profesionales. Holdings, GmbH, AG y planificación patrimonial.',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressCountry' => 'CH'
            ),
            'priceRange' => '€€€',
            'openingHoursSpecification' => array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens' => '09:00',
                'closes' => '18:00'
            ),
            'areaServed' => array(
                array('@type' => 'Country', 'name' => 'Spain'),
                array('@type' => 'Country', 'name' => 'Switzerland'),
                array('@type' => 'Country', 'name' => 'France'),
                array('@type' => 'Country', 'name' => 'Germany')
            ),
            'hasOfferCatalog' => array(
                '@type' => 'OfferCatalog',
                'name' => 'Servicios de asesoría fiscal',
                'itemListElement' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Optimización fiscal personal',
                            'description' => 'Análisis y optimización de la carga fiscal personal en Suiza'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Constitución de empresas',
                            'description' => 'Creación de Holdings, GmbH y AG en Suiza'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Planificación de mudanza fiscal',
                            'description' => 'Estrategia de salida fiscal y entrada optimizada a Suiza'
                        )
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($local_business, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }

    // Article Schema for blog posts
    if (is_singular('post')) {
        $article_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'description' => has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30, '...'),
            'image' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : '',
            'author' => array(
                '@type' => 'Organization',
                'name' => 'GNS Advisory'
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => 'GNS Advisory',
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => home_url('/wp-content/uploads/2025/05/GNS-Advisory-Logo-negro.png')
                )
            ),
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'mainEntityOfPage' => array(
                '@type' => 'WebPage',
                '@id' => get_permalink()
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }

    // BreadcrumbList Schema
    if (!is_front_page()) {
        $breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Inicio',
                    'item' => home_url('/')
                )
            )
        );

        if (is_page()) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink()
            );
        } elseif (is_singular('post')) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Blog',
                'item' => get_permalink(get_option('page_for_posts'))
            );
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 3,
                'name' => get_the_title(),
                'item' => get_permalink()
            );
        } elseif (is_home() || is_archive()) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Blog',
                'item' => get_permalink(get_option('page_for_posts'))
            );
        }

        echo '<script type="application/ld+json">' . wp_json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }

    // WebSite Schema with SearchAction
    if (is_front_page()) {
        $website_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'GNS Advisory',
            'url' => $site_url,
            'description' => 'Optimización fiscal en Suiza para empresarios y profesionales',
            'inLanguage' => 'es',
            'potentialAction' => array(
                '@type' => 'SearchAction',
                'target' => array(
                    '@type' => 'EntryPoint',
                    'urlTemplate' => $site_url . '?s={search_term_string}'
                ),
                'query-input' => 'required name=search_term_string'
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($website_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'gns_advisory_schema_markup', 3);

/**
 * Add FAQ Schema for pages with FAQ sections
 * IMPORTANT: Keep this synchronized with the actual FAQ HTML in front-page.php
 */
function gns_advisory_faq_schema() {
    // FAQ Schema for front-page - synchronized with actual HTML content
    if (is_front_page()) {
        $faq_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                // Preguntas generales
                array(
                    '@type' => 'Question',
                    'name' => '¿Esto es legal?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => '100%. No hago trucos. No hago ingeniería fiscal agresiva. Hago optimización dentro del marco legal suizo. Si quieres algo ilegal, no soy tu persona. Hay otros que hacen eso. Yo no.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuánto cuesta la primera reunión?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => '230€ la hora. Si decides seguir adelante, ese coste se descuenta del proyecto. Si no, habrás invertido 230€ en entender tu situación fiscal real. Probablemente la mejor inversión que hagas este año.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Necesito mudarme a Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Depende. Hay estructuras que no requieren residencia. Otras sí. Lo vemos en la primera reunión. No te voy a decir que te mudes si no tiene sentido para ti.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Por qué debería confiar en ti?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'No tienes que hacerlo. Confía en los números. 4 años. Más de 500 clientes protegidos en Suiza. Cero problemas legales. Si eso no te basta, no pasa nada. Hay muchos asesores fiscales en el mundo.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Y si al final no me conviene?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Pues no lo hacemos. No voy a convencerte de algo que no te beneficia. Mi negocio se basa en clientes satisfechos que me recomiendan, no en vender humo. Si después de analizar tu caso veo que no tiene sentido, te lo digo. Y tan amigos.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuánto tarda todo el proceso?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Depende de la complejidad. Una estructura simple: 6-8 semanas. Una relocalización completa con residencia: 3-6 meses. Te doy un timeline realista en la primera reunión. No prometo milagros.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Eres arrogante?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Probablemente. Pero también soy buena en lo que hago. Y prefiero ser honesta a ser simpática. Si buscas alguien que te diga que sí a todo, no soy yo. Si buscas alguien que te diga la verdad aunque no te guste, hablamos.'
                    )
                ),
                // Preguntas SEO sobre impuestos en Suiza
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuánto pagan de impuestos en Suiza las empresas?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Depende de dónde te pongas. El impuesto de sociedades en Suiza oscila entre el 11% y el 21%. La parte federal es fija: 8,5% sobre beneficio neto. La cantonal varía. En Zug pagas alrededor del 12% total. En Ginebra o Vaud te vas al 18-21%. Un cliente que facturaba 800.000€ en España pagaba 200.000€ en impuestos (sociedades + dividendos). En Zug paga 96.000€.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Qué es una Holding suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Una sociedad que posee otras empresas. El 95% de los dividendos que recibe de sus filiales NO tributan. Se llama "participation exemption" y es completamente legal. Un empresario con 3 sociedades en España, Francia y Portugal puede agruparlas en una Holding en Suiza. Así los beneficios fluyen hacia arriba casi sin fricción fiscal.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Puedo crear una empresa en Suiza sin vivir allí?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Poder, puedes. Pero necesitas un administrador residente en Suiza y sustancia real: oficina física (no un buzón), empleados si el negocio lo requiere, decisiones que se tomen desde Suiza. Si montas una sociedad vacía solo para pagar menos, la AEAT te la va a tumbar. Suiza tampoco quiere ese tipo de estructuras.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuánto es el IVA en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => '8,1%. El más bajo de Europa occidental. En España pagas 21%. Hay tipos reducidos: 2,6% para alimentación básica, 3,8% para hoteles. Si tienes un e-commerce o vendes servicios digitales, esa diferencia del 13% en IVA puede ser tu margen de beneficio.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuáles son los requisitos para irse de España fiscalmente?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Hacienda mira tres cosas: 1) No pasar más de 183 días al año en España. 2) Que tu centro de intereses económicos esté fuera. 3) Que tu familia directa (cónyuge, hijos menores) no viva en España. Si tienes más de 4 millones en activos, puede aplicar el exit tax. España y Suiza tienen convenio de doble imposición.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cómo funciona la declaración de la renta en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'La declaración de la renta en Suiza se hace a tres niveles: federal, cantonal y municipal. Cada uno con sus tipos. En Suiza el patrimonio tributa (entre 0,1% y 1% según cantón), pero los tipos sobre la renta son mucho más bajos. Un cliente que en España pagaba 45% de IRPF ahora paga 25% total en su cantón.'
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'gns_advisory_faq_schema', 4);

/**
 * Add Service Schema for services pages (SEO structure)
 */
function gns_advisory_services_schema() {
    // Array de páginas de servicio con sus datos de Schema
    $service_pages_schema = array(
        'servicios' => array(
            'name' => 'Planificación Fiscal en Suiza',
            'serviceType' => 'Planificación Fiscal Internacional',
            'description' => 'Planificación fiscal en Suiza para empresarios hispanohablantes. Creación de empresas, declaraciones, optimización por cantones y cambio de residencia fiscal.'
        ),
        'crear-empresa-suiza' => array(
            'name' => 'Crear Empresa en Suiza',
            'serviceType' => 'Constitución de Empresas',
            'description' => 'Crea tu empresa en Suiza: GmbH, Holding, AG o autónomo. Impuestos del 11-15% frente al 25% de España. Más de 500 empresas constituidas.'
        ),
        'gmbh-suiza' => array(
            'name' => 'Crear GmbH en Suiza',
            'serviceType' => 'Constitución GmbH',
            'description' => 'Constitución de GmbH en Suiza. Equivalente a la Sociedad Limitada con capital mínimo de 20.000 CHF e impuesto de sociedades del 11-15%.'
        ),
        'holding-suiza' => array(
            'name' => 'Crear Holding en Suiza',
            'serviceType' => 'Constitución Holding',
            'description' => 'Holding suiza con exención del 95% en dividendos recibidos. Estructura ideal para empresarios con varias sociedades.'
        ),
        'ag-suiza' => array(
            'name' => 'Crear AG en Suiza',
            'serviceType' => 'Constitución AG',
            'description' => 'Constitución de AG (Sociedad Anónima) en Suiza. Capital mínimo 100.000 CHF, ideal para estructuras complejas e inversores.'
        ),
        'autonomo-suiza' => array(
            'name' => 'Ser Autónomo en Suiza',
            'serviceType' => 'Alta Autónomos Suiza',
            'description' => 'Einzelfirma en Suiza: ser autónomo sin capital mínimo. La forma más simple de emprender en Suiza para freelancers y consultores.'
        ),
        'irpf-suiza-declaracion' => array(
            'name' => 'Declaración de la Renta en Suiza para Residentes',
            'serviceType' => 'Declaración Fiscal y Optimización',
            'description' => 'Gestionamos tu declaración de la renta en Suiza a tres niveles: federal, cantonal y municipal. Optimización fiscal legal con conocimiento de deducciones cantonales. Más de 500 declaraciones gestionadas. Consulta 230€.'
        ),
        'iva-suiza' => array(
            'name' => 'IVA en Suiza',
            'serviceType' => 'Gestión IVA',
            'description' => 'Gestión del IVA en Suiza: tipo general 8,1%, reducido 2,6%. El más bajo de Europa occidental. Alta y declaraciones.'
        ),
        'impuesto-sociedades' => array(
            'name' => 'Impuesto de Sociedades en Suiza',
            'serviceType' => 'Impuesto Sociedades',
            'description' => 'Impuesto de sociedades en Suiza: del 11% al 15% según cantón, frente al 25% de España. Optimización de tu estructura.'
        ),
        'optimizacion-fiscal' => array(
            'name' => 'Optimización Fiscal por Cantones',
            'serviceType' => 'Optimización Fiscal',
            'description' => 'Optimiza tu fiscalidad en Suiza por cantones. Los impuestos varían hasta un 40% entre Zug, Ginebra o Vaud.'
        ),
        'forfait-fiscal' => array(
            'name' => 'Forfait Fiscal en Suiza',
            'serviceType' => 'Forfait Fiscal',
            'description' => 'Forfait fiscal suizo: régimen especial para grandes patrimonios. Tributación sobre el gasto, no sobre la renta mundial.'
        ),
        'residencia-fiscal-suiza' => array(
            'name' => 'Cambio de Residencia Fiscal a Suiza',
            'serviceType' => 'Cambio Residencia Fiscal',
            'description' => 'Cambia tu residencia fiscal a Suiza cumpliendo la regla de los 183 días, exit tax y convenio de doble imposición.'
        ),
    );

    global $post;
    if (!is_page() || !$post || !isset($service_pages_schema[$post->post_name])) {
        return;
    }

    // Obtener datos de la página actual
    $current_slug = $post->post_name;
    if (!isset($service_pages_schema[$current_slug])) {
        return;
    }
    $page_data = $service_pages_schema[$current_slug];

    if (is_page('servicios')) {
        $site_url = home_url('/');

        // Service Schema for the services page
        $services_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Asesoría Fiscal Internacional',
            'name' => 'Servicios de Fiscalidad en Suiza',
            'description' => 'Servicios especializados de fiscalidad en Suiza para empresarios españoles: crear empresa (GmbH, AG, Holding), declaración de la renta suiza, optimización de impuestos, IVA y permisos de residencia.',
            'provider' => array(
                '@type' => 'ProfessionalService',
                'name' => 'GNS Advisory',
                'url' => $site_url,
                'image' => $site_url . 'wp-content/uploads/2025/05/GNS-Advisory-Logo-negro.png',
                'address' => array(
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'CH'
                ),
                'priceRange' => '€€€'
            ),
            'areaServed' => array(
                array('@type' => 'Country', 'name' => 'España'),
                array('@type' => 'Country', 'name' => 'Suiza')
            ),
            'hasOfferCatalog' => array(
                '@type' => 'OfferCatalog',
                'name' => 'Servicios de Fiscalidad en Suiza',
                'itemListElement' => array(
                    // Servicios para Residentes
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Auditoría de Estructura Fiscal',
                            'description' => 'Revisión completa de holdings, GmbH y subsidiarias para identificar fugas fiscales y oportunidades de optimización.'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Optimización Cantonal',
                            'description' => 'Análisis comparativo de los 26 cantones suizos y gestión de cambio de domicilio fiscal para reducir impuestos.'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Declaración de la Renta Suiza',
                            'description' => 'Planificación de remuneración óptima (salario + dividendos + pilares) y declaración fiscal a tres niveles.'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Planificación Sucesoria',
                            'description' => 'Estructura de sucesión optimizada fiscalmente, testamentos y minimización de impuestos de herencia.'
                        )
                    ),
                    // Servicios para No Residentes
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Análisis de Viabilidad Fiscal',
                            'description' => 'Evaluación completa y simulación fiscal comparativa España vs Suiza con análisis coste-beneficio.'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Crear Empresa en Suiza',
                            'description' => 'Constitución de GmbH, AG o Holding en Suiza, selección de cantón óptimo y planificación de transición.'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Permisos de Residencia',
                            'description' => 'Gestión de Permiso B, Permiso C y forfait fiscal. Preparación de documentación y presentación ante autoridades.'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Relocalización Fiscal Completa',
                            'description' => 'Acompañamiento integral: apertura de cuentas bancarias suizas, constitución de sociedades y soporte post-instalación.'
                        )
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($services_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";

        // FAQ Schema específico para página de servicios
        $services_faq_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type' => 'Question',
                    'name' => '¿Qué es una GmbH en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'La GmbH (Gesellschaft mit beschränkter Haftung) es el equivalente suizo a la Sociedad Limitada española. Requiere un capital mínimo de 20.000 CHF y paga entre 12-14% de impuesto de sociedades según el cantón, frente al 25% en España.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Qué es una AG en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'La AG (Aktiengesellschaft) es el equivalente suizo a la Sociedad Anónima. Requiere un capital mínimo de 100.000 CHF y ofrece mayor flexibilidad para estructuras complejas y entrada de inversores. Impuesto de sociedades: 12-14%.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Qué ventajas tiene una Holding en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Una Holding suiza permite que el 95% de los dividendos recibidos de empresas filiales NO tributen (participation exemption). Es ideal para empresarios con varias sociedades o inversiones internacionales.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuánto cuesta la consulta inicial?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'La consulta inicial cuesta 230€ por una hora. Si decides continuar con nuestros servicios, ese importe se descuenta del proyecto. Es una inversión en claridad sobre tu situación fiscal.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Qué es el Permiso B en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'El Permiso B es el permiso de residencia estándar para ciudadanos de la UE/AELC en Suiza. Tiene una duración de 5 años (renovable) y es requisito previo para optimizar tu fiscalidad de forma legal.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '¿Cuánto es el IVA en Suiza?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'El IVA general en Suiza es del 8,1%, el más bajo de Europa occidental (España: 21%). Hay tipos reducidos: 2,6% para alimentación y 3,8% para alojamiento turístico.'
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($services_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    } else {
        // Schema Service específico para fichas de servicio (no hub)
        $service_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => $page_data['serviceType'],
            'name' => $page_data['name'],
            'description' => $page_data['description'],
            'provider' => array(
                '@type' => 'ProfessionalService',
                'name' => 'GNS Advisory',
                'url' => home_url('/'),
                'image' => home_url('/wp-content/uploads/2025/05/GNS-Advisory-Logo-negro.png'),
                'address' => array(
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'CH'
                ),
                'priceRange' => '€€€'
            ),
            'areaServed' => array(
                array('@type' => 'Country', 'name' => 'España'),
                array('@type' => 'Country', 'name' => 'Suiza')
            ),
            'url' => get_permalink()
        );
        echo '<script type="application/ld+json">' . wp_json_encode($service_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'gns_advisory_services_schema', 4);

/**
 * Add Review Schema for testimonials on front page
 */
function gns_advisory_review_schema() {
    if (is_front_page()) {
        $reviews_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'GNS Advisory',
            'aggregateRating' => array(
                '@type' => 'AggregateRating',
                'ratingValue' => '5',
                'reviewCount' => '3',
                'bestRating' => '5',
                'worstRating' => '1'
            ),
            'review' => array(
                array(
                    '@type' => 'Review',
                    'author' => array(
                        '@type' => 'Person',
                        'name' => 'C.'
                    ),
                    'datePublished' => '2024-03-15',
                    'reviewRating' => array(
                        '@type' => 'Rating',
                        'ratingValue' => '5',
                        'bestRating' => '5'
                    ),
                    'reviewBody' => 'Llevaba años mostrando pérdidas porque tenía miedo de Hacienda. Ale me montó una Holding en Suiza. Ahora no finjo. Gano dinero de verdad. Y lo reinvierto en comprar empresas. En 2 años compraré 2 más. Dejé de esconderme. Empecé a crecer.',
                    'itemReviewed' => array(
                        '@type' => 'Service',
                        'name' => 'Optimización fiscal Suiza',
                        'description' => 'Constitución de Holding suiza'
                    )
                ),
                array(
                    '@type' => 'Review',
                    'author' => array(
                        '@type' => 'Person',
                        'name' => 'A.'
                    ),
                    'datePublished' => '2024-06-22',
                    'reviewRating' => array(
                        '@type' => 'Rating',
                        'ratingValue' => '5',
                        'bestRating' => '5'
                    ),
                    'reviewBody' => 'Llevaba 4 años en Suiza. Pagando 50.000 al año. Pensando que era normal. Ale me dijo: Te puedes cambiar de cantón. Ahora pago 10.000. Mismo país. Misma vida. 40.000 más en mi bolsillo.',
                    'itemReviewed' => array(
                        '@type' => 'Service',
                        'name' => 'Optimización cantonal Suiza',
                        'description' => 'Cambio de cantón para reducción fiscal'
                    )
                ),
                array(
                    '@type' => 'Review',
                    'author' => array(
                        '@type' => 'Person',
                        'name' => 'Familia M.'
                    ),
                    'datePublished' => '2024-09-10',
                    'reviewRating' => array(
                        '@type' => 'Rating',
                        'ratingValue' => '5',
                        'bestRating' => '5'
                    ),
                    'reviewBody' => 'Nuestros hijos tenían guardaespaldas. Pagábamos impuestos sin control. No podíamos crecer a Europa. Ahora viven sin miedo. Hablan 4 idiomas. Gestionamos desde Suiza. Expandimos a 5 países europeos. Y ahorramos 1.2M al año. No es solo dinero. Es dormir tranquilo.',
                    'itemReviewed' => array(
                        '@type' => 'Service',
                        'name' => 'Mudanza fiscal a Suiza',
                        'description' => 'Planificación patrimonial y empresarial internacional'
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($reviews_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'gns_advisory_review_schema', 5);

/**
 * Add Person Schema for founder Alejandra Ortiz
 */
function gns_advisory_person_schema() {
    if (is_front_page()) {
        $person_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Alejandra Ortiz',
            'alternateName' => 'Ale',
            'jobTitle' => 'Fundadora',
            'worksFor' => array(
                '@type' => 'Organization',
                'name' => 'GNS Advisory'
            ),
            'description' => 'Experta en fiscalidad suiza y optimización fiscal internacional para empresarios.',
            'email' => 'a.ortiz@gnsadvisory.com',
            'knowsAbout' => array(
                'Fiscalidad Suiza',
                'Holdings',
                'Optimización fiscal',
                'GmbH',
                'AG',
                'Planificación patrimonial'
            ),
            'nationality' => array(
                '@type' => 'Country',
                'name' => 'Spain'
            ),
            'workLocation' => array(
                '@type' => 'Country',
                'name' => 'Switzerland'
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($person_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'gns_advisory_person_schema', 6);

/**
 * =================================================================
 * ACCESSIBILITY ENHANCEMENTS
 * =================================================================
 */

/**
 * Add screen reader text CSS
 */
function gns_advisory_screen_reader_css() {
    ?>
    <style>
    .screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        word-wrap: normal !important;
    }
    .screen-reader-text:focus {
        background-color: #f1f1f1;
        border-radius: 3px;
        box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
        clip: auto !important;
        clip-path: none;
        color: #21759b;
        display: block;
        font-size: 0.875rem;
        font-weight: 700;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000;
    }
    </style>
    <?php
}
add_action('wp_head', 'gns_advisory_screen_reader_css', 5);

/**
 * Modify document title separator
 */
function gns_advisory_document_title_separator($sep) {
    return '|';
}
add_filter('document_title_separator', 'gns_advisory_document_title_separator');

/**
 * Customize document title parts
 */
function gns_advisory_document_title_parts($title) {
    // Solo el título, sin sufijo - el título de WordPress es la fuente de verdad

    // Remove tagline
    if (isset($title['tagline'])) {
        unset($title['tagline']);
    }

    // Remove site name suffix - queremos solo el título
    if (isset($title['site'])) {
        unset($title['site']);
    }

    return $title;
}
add_filter('document_title_parts', 'gns_advisory_document_title_parts');

/**
 * =================================================================
 * PERFORMANCE ENHANCEMENTS
 * =================================================================
 */

/**
 * Add lazy loading to images in content
 */
function gns_advisory_add_lazy_loading($content) {
    // Add loading="lazy" to images that don't have it
    $content = preg_replace('/<img((?!loading=)[^>]*)>/i', '<img$1 loading="lazy">', $content);
    return $content;
}
add_filter('the_content', 'gns_advisory_add_lazy_loading');

/**
 * Add fetchpriority to hero images
 */
function gns_advisory_fetchpriority_hero($attr, $attachment, $size) {
    // Add fetchpriority="high" for large images (likely hero)
    if ($size === 'full' || $size === 'large') {
        $attr['fetchpriority'] = 'high';
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'gns_advisory_fetchpriority_hero', 10, 3);

/**
 * =================================================================
 * GNS ADVISORY THEME OPTIONS
 * Centralized settings for easy management
 * =================================================================
 */

/**
 * Register Theme Options Page
 */
function gns_advisory_add_options_page() {
    add_theme_page(
        'GNS Advisory Options',
        'GNS Options',
        'manage_options',
        'gns-advisory-options',
        'gns_advisory_options_page_html'
    );
}
add_action('admin_menu', 'gns_advisory_add_options_page');

/**
 * Register Theme Settings
 */
function gns_advisory_register_settings() {
    // Register settings
    register_setting('gns_advisory_options', 'gns_contact_email', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_email',
        'default' => 'info@gnsadvisory.com'
    ));

    register_setting('gns_advisory_options', 'gns_calendly_url', array(
        'type' => 'string',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'https://calendly.com/gnsgroupadvisory-info/consulta-estrategica'
    ));

    register_setting('gns_advisory_options', 'gns_linkedin_url', array(
        'type' => 'string',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'https://www.linkedin.com/company/gns-advisory'
    ));

    register_setting('gns_advisory_options', 'gns_consultation_price', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '230€'
    ));

    register_setting('gns_advisory_options', 'gns_newsletter_url', array(
        'type' => 'string',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#newsletter'
    ));

    // Add settings section
    add_settings_section(
        'gns_advisory_main_section',
        'Configuración General',
        'gns_advisory_section_callback',
        'gns-advisory-options'
    );

    // Add settings fields
    add_settings_field(
        'gns_contact_email',
        'Email de Contacto',
        'gns_advisory_email_field_callback',
        'gns-advisory-options',
        'gns_advisory_main_section'
    );

    add_settings_field(
        'gns_calendly_url',
        'URL de Calendly',
        'gns_advisory_calendly_field_callback',
        'gns-advisory-options',
        'gns_advisory_main_section'
    );

    add_settings_field(
        'gns_linkedin_url',
        'URL de LinkedIn',
        'gns_advisory_linkedin_field_callback',
        'gns-advisory-options',
        'gns_advisory_main_section'
    );

    add_settings_field(
        'gns_consultation_price',
        'Precio Consulta',
        'gns_advisory_price_field_callback',
        'gns-advisory-options',
        'gns_advisory_main_section'
    );

    add_settings_field(
        'gns_newsletter_url',
        'URL Newsletter',
        'gns_advisory_newsletter_field_callback',
        'gns-advisory-options',
        'gns_advisory_main_section'
    );
}
add_action('admin_init', 'gns_advisory_register_settings');

/**
 * Section Callback
 */
function gns_advisory_section_callback() {
    echo '<p>Configura las opciones principales del sitio. Estos valores se usan en todo el tema.</p>';
}

/**
 * Field Callbacks
 */
function gns_advisory_email_field_callback() {
    $value = get_option('gns_contact_email', 'info@gnsadvisory.com');
    echo '<input type="email" name="gns_contact_email" value="' . esc_attr($value) . '" class="regular-text">';
    echo '<p class="description">Email principal de contacto (usado en el footer, formularios, etc.)</p>';
}

function gns_advisory_calendly_field_callback() {
    $value = get_option('gns_calendly_url', 'https://calendly.com/gnsgroupadvisory-info/consulta-estrategica');
    echo '<input type="url" name="gns_calendly_url" value="' . esc_attr($value) . '" class="regular-text">';
    echo '<p class="description">URL completa de tu calendario de Calendly</p>';
}

function gns_advisory_linkedin_field_callback() {
    $value = get_option('gns_linkedin_url', 'https://www.linkedin.com/company/gns-advisory');
    echo '<input type="url" name="gns_linkedin_url" value="' . esc_attr($value) . '" class="regular-text">';
    echo '<p class="description">URL de la página de empresa en LinkedIn</p>';
}

function gns_advisory_price_field_callback() {
    $value = get_option('gns_consultation_price', '230€');
    echo '<input type="text" name="gns_consultation_price" value="' . esc_attr($value) . '" class="regular-text">';
    echo '<p class="description">Precio de la consulta inicial (ej: 230€)</p>';
}

function gns_advisory_newsletter_field_callback() {
    $value = get_option('gns_newsletter_url', '#newsletter');
    echo '<input type="url" name="gns_newsletter_url" value="' . esc_attr($value) . '" class="regular-text">';
    echo '<p class="description">URL del formulario de suscripcion al newsletter (Brevo, Mailchimp, etc.)</p>';
}

/**
 * Options Page HTML
 */
function gns_advisory_options_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_GET['settings-updated'])) {
        add_settings_error('gns_advisory_messages', 'gns_advisory_message', 'Opciones guardadas correctamente.', 'updated');
    }

    settings_errors('gns_advisory_messages');
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('gns_advisory_options');
            do_settings_sections('gns-advisory-options');
            submit_button('Guardar Cambios');
            ?>
        </form>

        <hr>
        <h2>Cómo usar estas opciones en el tema</h2>
        <p>Usa las siguientes funciones en tus templates:</p>
        <pre style="background: #f5f5f5; padding: 15px; border-radius: 5px;">
// Email de contacto
&lt;?php echo esc_attr(gns_get_contact_email()); ?&gt;

// URL de Calendly
&lt;?php echo esc_url(gns_get_calendly_url()); ?&gt;

// URL de LinkedIn
&lt;?php echo esc_url(gns_get_linkedin_url()); ?&gt;

// Precio de consulta
&lt;?php echo esc_html(gns_get_consultation_price()); ?&gt;

// URL de Newsletter
&lt;?php echo esc_url(gns_get_newsletter_url()); ?&gt;
        </pre>
    </div>
    <?php
}

/**
 * =================================================================
 * HELPER FUNCTIONS FOR THEME OPTIONS
 * Use these in your templates
 * =================================================================
 */

/**
 * Get contact email
 */
function gns_get_contact_email() {
    return get_option('gns_contact_email', 'info@gnsadvisory.com');
}

/**
 * Get Calendly URL
 */
function gns_get_calendly_url() {
    return get_option('gns_calendly_url', 'https://calendly.com/gnsgroupadvisory-info/consulta-estrategica');
}

/**
 * Get LinkedIn URL
 */
function gns_get_linkedin_url() {
    return get_option('gns_linkedin_url', 'https://www.linkedin.com/company/gns-advisory');
}

/**
 * Get consultation price
 */
function gns_get_consultation_price() {
    return get_option('gns_consultation_price', '230€');
}

/**
 * Get Newsletter URL
 */
function gns_get_newsletter_url() {
    return get_option('gns_newsletter_url', '#newsletter');
}

/**
 * =================================================================
 * FORCE WORDPRESS TO RECOGNIZE PAGE TEMPLATES
 * This fixes the issue where new template files don't appear
 * in the WordPress page editor template dropdown
 * =================================================================
 */

/**
 * Clear page templates cache when theme files are modified
 * This ensures WordPress always scans for new templates
 */
function gns_clear_page_templates_cache() {
    // Delete the cached page templates transient
    $stylesheet = get_stylesheet();
    delete_transient('page_templates-' . $stylesheet);

    // Also clear for theme mods cache
    wp_cache_delete('page_templates-' . $stylesheet, 'themes');
}

// Clear cache on theme switch
add_action('switch_theme', 'gns_clear_page_templates_cache');

// Clear cache when visiting the admin (ensures templates are always fresh)
add_action('admin_init', 'gns_clear_page_templates_cache');

/**
 * Force scan all page templates from theme directory
 * This function ensures WordPress detects all Template Name: headers
 */
function gns_force_register_page_templates($templates) {
    $theme_dir = get_template_directory();

    // Scan all PHP files in theme root
    $files = glob($theme_dir . '/*.php');

    if ($files) {
        foreach ($files as $file) {
            $file_content = file_get_contents($file);

            // Look for Template Name: header
            if (preg_match('/Template Name:\s*(.+)/i', $file_content, $matches)) {
                $template_name = trim($matches[1]);
                $file_basename = basename($file);

                // Add to templates array if not already present
                if (!isset($templates[$file_basename])) {
                    $templates[$file_basename] = $template_name;
                }
            }
        }
    }

    return $templates;
}
add_filter('theme_page_templates', 'gns_force_register_page_templates', 20);

/**
 * Ensure pages support page-attributes (required for template selector)
 * This makes the "Template" option visible in Gutenberg
 */
function gns_add_page_attributes_support() {
    // Ensure 'page' post type supports page-attributes
    add_post_type_support('page', 'page-attributes');
}
add_action('init', 'gns_add_page_attributes_support');

/**
 * Add custom meta box for template selection (fallback for Gutenberg)
 * This ensures template selection is always visible in the classic meta box area
 */
function gns_add_template_meta_box() {
    add_meta_box(
        'gns_page_template_box',
        'Plantilla de Página',
        'gns_template_meta_box_callback',
        'page',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'gns_add_template_meta_box');

/**
 * Meta box callback - shows template dropdown
 */
function gns_template_meta_box_callback($post) {
    // Get current template
    $current_template = get_page_template_slug($post->ID);

    // Get all available templates
    $templates = get_page_templates($post);

    wp_nonce_field('gns_template_nonce_action', 'gns_template_nonce');

    echo '<p><strong>Selecciona una plantilla:</strong></p>';
    echo '<select name="_wp_page_template" id="gns_page_template" style="width:100%;">';
    echo '<option value="default"' . selected($current_template, '', false) . '>Plantilla predeterminada</option>';

    foreach ($templates as $template_name => $template_file) {
        // Note: WordPress stores it as file => name, we need to swap
        $selected = selected($current_template, $template_file, false);
        echo '<option value="' . esc_attr($template_file) . '"' . $selected . '>' . esc_html($template_name) . '</option>';
    }

    echo '</select>';
    echo '<p class="description" style="margin-top:10px;">Las plantillas disponibles aparecen aquí. Si no ves la que buscas, recarga la página.</p>';
}

/**
 * Save template selection from meta box
 */
function gns_save_template_meta_box($post_id) {
    // Check nonce
    if (!isset($_POST['gns_template_nonce']) || !wp_verify_nonce($_POST['gns_template_nonce'], 'gns_template_nonce_action')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Save template
    if (isset($_POST['_wp_page_template'])) {
        $template = sanitize_text_field($_POST['_wp_page_template']);
        update_post_meta($post_id, '_wp_page_template', $template);
    }
}
add_action('save_post_page', 'gns_save_template_meta_box');

/**
 * =================================================================
 * AUTO-ASSIGN TEMPLATES BY PAGE SLUG
 * This automatically loads the correct template based on the page slug
 * No need to select templates in the editor - just name your file
 * matching the pattern: page-{slug}.php
 * =================================================================
 */

/**
 * Automatically load template file based on page/post slug
 * If a file named page-{slug}.php exists, use it for both pages AND posts
 */
function gns_auto_template_by_slug($template) {
    global $post;

    if (!$post) {
        return $template;
    }

    // Only for pages and single posts
    if (!is_page() && !is_single()) {
        return $template;
    }

    $slug = $post->post_name;
    $theme_dir = get_template_directory();

    // Check if a template file exists for this slug
    $slug_template = $theme_dir . '/page-' . $slug . '.php';

    if (file_exists($slug_template)) {
        return $slug_template;
    }

    return $template;
}
add_filter('template_include', 'gns_auto_template_by_slug', 99);
