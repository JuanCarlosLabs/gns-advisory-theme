<?php
/**
 * Newsletter Banner Compact Template Part
 * Version compacta y horizontal del banner de newsletter
 * Diseno para paginas de servicio - ocupa menos espacio vertical
 *
 * Variables esperadas:
 * $newsletter_variant - 'default', 'empresas', 'impuestos', 'residencia' (opcional)
 * $newsletter_compact_headline - Titular principal (opcional)
 * $newsletter_compact_subtext - Subtexto (opcional)
 * $newsletter_button_text - Texto del boton (opcional)
 *
 * @package GNS_Advisory
 */

// Variant presets para version compacta
$compact_variants = array(
    'default' => array(
        'headline' => 'Consejos fiscales cada semana en tu email',
        'subtext' => 'Casos reales, numeros concretos y estrategias que funcionan. 2 minutos de lectura. Sin spam.',
        'button' => 'Suscribirme gratis'
    ),
    'empresas' => array(
        'headline' => 'Un email semanal con casos reales de empresarios',
        'subtext' => 'Como montan sus estructuras en Suiza, cuanto ahorran y que errores evitar. Gratis.',
        'button' => 'Quiero esos emails'
    ),
    'impuestos' => array(
        'headline' => 'Consejos fiscales practicos cada semana',
        'subtext' => 'Casos reales de optimizacion fiscal en Suiza. 2 minutos de lectura. Sin spam, sin venta.',
        'button' => 'Suscribirme gratis'
    ),
    'residencia' => array(
        'headline' => 'Novedades sobre permisos y residencia en Suiza',
        'subtext' => 'Cambios en leyes, oportunidades y cierres de ventanas. Informacion que no encuentras en Google.',
        'button' => 'Suscribirme gratis'
    ),
    'holding' => array(
        'headline' => 'Estrategias de Holdings y estructuras societarias',
        'subtext' => 'Casos reales de empresarios con varias sociedades. Como optimizan y cuanto ahorran.',
        'button' => 'Quiero esos emails'
    ),
    'gmbh' => array(
        'headline' => 'Casos reales de GmbH suizas cada semana',
        'subtext' => 'Numeros concretos, errores a evitar y optimizaciones que funcionan. Gratis.',
        'button' => 'Quiero esos emails'
    ),
    'ag' => array(
        'headline' => 'Estrategias de AG suizas en tu email',
        'subtext' => 'Startups, Holdings, empresas que escalaron. Casos reales con numeros.',
        'button' => 'Suscribirme gratis'
    )
);

// Select variant
$variant_key = isset($newsletter_variant) ? $newsletter_variant : 'default';
if (!isset($compact_variants[$variant_key])) {
    $variant_key = 'default';
}
$variant = $compact_variants[$variant_key];

// Override with custom values if provided
$headline = isset($newsletter_compact_headline) ? $newsletter_compact_headline : $variant['headline'];
$subtext = isset($newsletter_compact_subtext) ? $newsletter_compact_subtext : $variant['subtext'];
$button_text = isset($newsletter_button_text) ? $newsletter_button_text : $variant['button'];
?>

<!-- Banner Newsletter Compacto -->
<div class="newsletter-compact-banner animate-on-scroll fade-up">
    <div class="newsletter-compact-content">
        <div class="newsletter-compact-text">
            <p class="newsletter-compact-headline"><strong><?php echo esc_html($headline); ?></strong></p>
            <p class="newsletter-compact-subtext"><?php echo esc_html($subtext); ?></p>
        </div>
        <div class="newsletter-compact-form">
            <?php
            // Usar el formulario de Brevo (Sendinblue)
            if (shortcode_exists('sibwp_form')) {
                echo do_shortcode('[sibwp_form id=1]');
            } else {
                // Fallback si Brevo no esta activo
                ?>
                <form class="newsletter-form newsletter-fallback" action="#" method="post">
                    <input type="email" name="email" placeholder="Tu email" class="newsletter-input" required disabled>
                    <button type="submit" class="newsletter-button" disabled><?php echo esc_html($button_text); ?></button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>
