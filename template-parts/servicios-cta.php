<?php
/**
 * Servicios CTA Template Part
 * CTA section reutilizable para todas las páginas de servicios
 * Estructura de dos columnas: foto izquierda, contenido derecha
 *
 * Variables esperadas:
 * $cta_title - Título del CTA (H2) - texto conversacional
 * $cta_subtitle - Subtítulo SEO con keywords (opcional)
 * $cta_intro - Texto introductorio (párrafo principal)
 * $cta_button_text - Texto del botón CTA
 * $show_photo - Boolean para mostrar foto de Ale (default: true)
 * $show_price - Boolean para mostrar precio (default: true)
 *
 * @package GNS_Advisory
 */

// Valores por defecto
$cta_title = $cta_title ?? 'Mira, esto es simple.';
$cta_subtitle = $cta_subtitle ?? '';
$cta_intro = $cta_intro ?? 'Si estas pagando mas de 100.000€ al ano en impuestos y no has hablado con alguien que entienda el sistema fiscal suizo, estas perdiendo dinero.';
$cta_button_text = $cta_button_text ?? 'Quiero dejar de regalar mi dinero';
$show_photo = isset($show_photo) ? $show_photo : true;
$show_price = isset($show_price) ? $show_price : true;

$alejandra_photo = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');
?>

<!-- CTA Servicios -->
<section class="servicios-cta servicios-cta-section" aria-labelledby="cta-heading">
    <div class="container">
        <div class="cta-main-block">

            <?php if ($show_photo) : ?>
            <!-- Columna izquierda: Foto -->
            <div class="cta-photo-column">
                <div class="cta-photo-circle">
                    <img src="<?php echo esc_url($alejandra_photo); ?>"
                         alt="Alejandra Ortiz - Asesora de Fiscalidad en Suiza"
                         width="200" height="200" loading="lazy">
                </div>
                <div class="cta-photo-name">Ale</div>
                <div class="cta-photo-role">Fundadora GNS Advisory</div>
            </div>
            <?php endif; ?>

            <!-- Columna derecha: Contenido -->
            <div class="cta-content-column">
                <h2 id="cta-heading" class="cta-title"><?php echo esc_html($cta_title); ?></h2>

                <?php if (!empty($cta_subtitle)) : ?>
                <p class="cta-seo-subtitle"><?php echo esc_html($cta_subtitle); ?></p>
                <?php endif; ?>

                <div class="cta-text animate-on-scroll fade-up">
                    <p><?php echo wp_kses_post($cta_intro); ?></p>

                    <p class="cta-emphasis">Cada mes.</p>
                    <p class="cta-emphasis">Cada ano.</p>
                    <p class="cta-emphasis">Para siempre.</p>

                    <p>Yo puedo decirte en una hora si tiene sentido para ti o si ya lo tienes todo bien.</p>
                </div>

                <?php if ($show_price) : ?>
                <div class="cta-price-block animate-on-scroll fade-up">
                    <span class="cta-price counter-glow"><?php echo esc_html(gns_get_consultation_price()); ?></span>
                    <span class="cta-price-detail">1 hora de consulta</span>
                </div>

                <div class="cta-conditions animate-on-scroll fade-up">
                    <p>Si seguimos trabajando juntos, se descuenta del proyecto.</p>
                    <p>Si no, habras invertido en claridad.</p>
                </div>
                <?php endif; ?>

                <div class="cta-honesty animate-on-scroll fade-up">
                    <p>No te voy a perseguir.</p>
                    <p>No te voy a mandar 47 emails de seguimiento.</p>
                    <p>Si quieres hablar, aqui estoy.</p>
                    <p>Si no, tambien esta bien.</p>
                </div>

                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn btn-primary cta-button" aria-label="Reservar consulta de fiscalidad en Suiza">
                    <?php echo esc_html($cta_button_text); ?>
                </a>

                <p class="cta-slots">Atiendo maximo 4 casos nuevos al mes.</p>
            </div>

        </div>
    </div>
</section>
