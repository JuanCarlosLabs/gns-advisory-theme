<?php
/**
 * Newsletter Banner Template Part
 * Banner de conversion para captar suscriptores de newsletter
 * Estilo copywriting Isra Bravo - SLO (Story-Lesson-Offer)
 *
 * Variables esperadas:
 * $newsletter_hook - Array de frases para el hook (opcional)
 * $newsletter_agitation - Array de frases para agitacion (opcional)
 * $newsletter_solution - Array de frases para solucion (opcional)
 * $newsletter_cta - Array de frases para CTA (opcional)
 * $newsletter_postdata - Frase postdata con curiosidad (opcional)
 * $newsletter_button_text - Texto del boton (opcional)
 * $newsletter_variant - 'default', 'empresas', 'impuestos', 'residencia' (opcional)
 *
 * NO usa headings (H1-H6) para no afectar SEO
 * Solo usa p, div, span, strong, em
 *
 * @package GNS_Advisory
 */

// Variant presets
$variants = array(
    'default' => array(
        'hook' => array(
            '<strong>Mira.</strong>',
            'Si estas aqui, es porque algo no cuadra.',
            'Trabajas mas que nadie.',
            'Y te quedas con menos que nadie.'
        ),
        'agitation' => array(
            'Mientras tu pagas el 45% en impuestos, otros pagan el 12%.',
            'Legalmente.',
            'Desde Suiza.'
        ),
        'solution' => array(
            '<strong>Cada dia envio un email.</strong>',
            'Casos reales. Numeros concretos. Sin rodeos.',
            'Gente que se fue. Gente que lo esta pensando. Gente que ya vive diferente.'
        ),
        'cta' => array(
            'No es un curso. No es un webinar de 3 horas.',
            'Es un email al dia que puedes leer en 2 minutos.',
            '<strong>Gratis. Sin compromiso. Date de baja cuando quieras.</strong>'
        ),
        'postdata' => 'Manana te cuento el caso de un autonomo de Barcelona que ahora paga 4 veces menos. Con nombres y numeros.',
        'button' => 'Quiero recibir los emails'
    ),
    'empresas' => array(
        'hook' => array(
            '<strong>Una pregunta.</strong>',
            'Cuanto pagaste de impuesto de sociedades el ano pasado?',
            'Y cuanto te quedo para reinvertir?',
            'Ahora imagina pagar el 12% en vez del 25%.'
        ),
        'agitation' => array(
            'En Espana, tu SL paga el 25% sobre beneficios.',
            'En Suiza, una GmbH paga el 12-15%.',
            'Mismo trabajo. Diferente pais. Diferente resultado.'
        ),
        'solution' => array(
            '<strong>Cada dia cuento un caso real.</strong>',
            'Empresarios que han dado el paso.',
            'Numeros reales. Errores que cometieron. Lo que habrian hecho diferente.'
        ),
        'cta' => array(
            'No es teoria. Son historias de gente como tu.',
            'Un email al dia. 2 minutos de lectura.',
            '<strong>Gratis. Sin venta. Solo informacion.</strong>'
        ),
        'postdata' => 'Manana te cuento el caso de un empresario de Madrid que creo su GmbH en Zug. Paga 180.000 CHF menos al ano.',
        'button' => 'Quiero esos emails'
    ),
    'ag' => array(
        'hook' => array(
            '<strong>Una pregunta.</strong>',
            'Tienes inversores interesados?',
            'O planeas tenerlos?',
            'Entonces tu SL espanola te esta frenando.'
        ),
        'agitation' => array(
            'Cada vez que quieres meter un socio nuevo: notario, estatutos, burocracia.',
            'Con una AG suiza emites acciones y las vendes. Sin mas.',
            'Y de paso pagas el 12% en vez del 25%.'
        ),
        'solution' => array(
            '<strong>Cada dia cuento casos de empresarios que dieron el paso.</strong>',
            'Startups que levantaron capital. Holdings familiares. Empresas que escalaron.',
            'Numeros reales. Errores que cometieron. Lo que aprendieron.'
        ),
        'cta' => array(
            'No es un curso. No es un PDF de 50 paginas.',
            'Es un email al dia que lees en 2 minutos.',
            '<strong>Gratis. Sin compromiso. Informacion que vale dinero.</strong>'
        ),
        'postdata' => 'Manana te cuento como un empresario de Barcelona convirtio su GmbH en AG cuando facturo 800.000 CHF. Con los numeros exactos.',
        'button' => 'Quiero recibir los emails'
    ),
    'gmbh' => array(
        'hook' => array(
            '<strong>Una pregunta.</strong>',
            'Cuanto pagaste de impuesto de sociedades el ano pasado?',
            'Y si te dijera que podrias pagar la mitad?',
            'Legalmente. Desde Suiza.'
        ),
        'agitation' => array(
            'Tu SL espanola paga el 25% sobre beneficios.',
            'Una GmbH suiza paga el 12-15%.',
            'Mismo negocio. Diferente pais. Diferente resultado.'
        ),
        'solution' => array(
            '<strong>Cada dia cuento un caso real.</strong>',
            'Consultores, agencias, negocios digitales que dieron el paso.',
            'Numeros reales. Errores que cometieron. Lo que habrian hecho diferente.'
        ),
        'cta' => array(
            'No es teoria. Son historias de gente como tu.',
            'Un email al dia. 2 minutos de lectura.',
            '<strong>Gratis. Sin venta. Solo informacion que vale dinero.</strong>'
        ),
        'postdata' => 'Manana te cuento el caso de un consultor de Madrid que creo su GmbH en Zug. Paga 35.000 CHF menos al ano.',
        'button' => 'Quiero esos emails'
    ),
    'holding' => array(
        'hook' => array(
            '<strong>Mira.</strong>',
            'Si estas leyendo esto, tienes varias empresas.',
            'Y pagas impuestos como si tuvieras una.',
            'Cada vez que mueves dividendos, Hacienda se queda un trozo.'
        ),
        'agitation' => array(
            'En Espana, un empresario con 3 sociedades puede pagar el 45% cada vez que saca dinero.',
            'En Suiza, con una Holding bien hecha, el 95% de los dividendos no tributan.',
            'Legalmente.'
        ),
        'solution' => array(
            '<strong>Cada dia envio un email.</strong>',
            'Casos reales de empresarios que han montado su estructura.',
            'Numeros concretos. Errores que cometieron. Lo que habrian hecho diferente.'
        ),
        'cta' => array(
            'No es un curso. No es un PDF de 50 paginas.',
            'Es un email al dia que lees en 2 minutos mientras desayunas.',
            '<strong>Gratis. Sin compromiso. Date de baja cuando quieras.</strong>'
        ),
        'postdata' => 'Manana te cuento el caso de un empresario de Madrid con 4 SLs que ahora tiene todo bajo una Holding en Zug. Con numeros reales.',
        'button' => 'Quiero recibir los emails'
    ),
    'impuestos' => array(
        'hook' => array(
            '<strong>Una pregunta.</strong>',
            'Cuanto pagaste de IRPF el ano pasado?',
            'Y cuanto te quedo para ti?',
            'Ahora imagina quedarte con el 85% en vez del 55%.'
        ),
        'agitation' => array(
            'Eso no es fantasia. Es Suiza.',
            'Donde un autonomo paga el 15% en vez del 45%.',
            'Donde los dividendos tributan la mitad.'
        ),
        'solution' => array(
            '<strong>Te lo explico cada dia por email.</strong>',
            'Casos reales. Gente como tu. Sin humo.',
            'Numeros concretos. Estrategias que funcionan.'
        ),
        'cta' => array(
            'No vendo cursos. No hago webinars.',
            'Solo informacion util en 2 minutos.',
            '<strong>Gratis. Y si no te gusta, te das de baja en 1 clic.</strong>'
        ),
        'postdata' => 'Manana te cuento como funciona el forfait fiscal suizo. El regimen que permite pagar impuestos sobre el gasto, no sobre los ingresos.',
        'button' => 'Enviame los emails'
    ),
    'residencia' => array(
        'hook' => array(
            '<strong>Suiza esta cerrando puertas.</strong>',
            'Los permisos son cada vez mas dificiles.',
            'Los requisitos suben cada ano.',
            'Lo que hoy es posible, manana puede no serlo.'
        ),
        'agitation' => array(
            'En 2019, conseguir un permiso B era relativamente sencillo.',
            'En 2024, te piden mas documentacion, mas capital, mas justificacion.',
            'La ventana se esta cerrando.'
        ),
        'solution' => array(
            '<strong>Cada dia te cuento que esta pasando.</strong>',
            'Cambios en leyes. Oportunidades. Cierres de ventanas.',
            'Informacion que no encuentras en Google.'
        ),
        'cta' => array(
            'Un email. 2 minutos. Informacion real.',
            'Sin spam. Sin vender cursos.',
            '<strong>Solo lo que necesitas saber.</strong>'
        ),
        'postdata' => 'Manana te cuento los cambios que entraran en vigor en 2025. Algunos te afectan directamente.',
        'button' => 'Suscribirme gratis'
    )
);

// Select variant
$variant_key = isset($newsletter_variant) ? $newsletter_variant : 'default';
if (!isset($variants[$variant_key])) {
    $variant_key = 'default';
}
$variant = $variants[$variant_key];

// Override with custom values if provided
$hook = isset($newsletter_hook) ? $newsletter_hook : $variant['hook'];
$agitation = isset($newsletter_agitation) ? $newsletter_agitation : $variant['agitation'];
$solution = isset($newsletter_solution) ? $newsletter_solution : $variant['solution'];
$cta_text = isset($newsletter_cta) ? $newsletter_cta : $variant['cta'];
$postdata = isset($newsletter_postdata) ? $newsletter_postdata : $variant['postdata'];
$button_text = isset($newsletter_button_text) ? $newsletter_button_text : $variant['button'];
?>

<!-- Banner Conversion Newsletter -->
<section class="servicios-content newsletter-conversion-section" aria-label="Suscripcion newsletter">
    <div class="container">
        <div class="newsletter-conversion-banner">

            <div class="banner-hook">
                <?php foreach ($hook as $line) : ?>
                <p class="hook-text"><?php echo wp_kses_post($line); ?></p>
                <?php endforeach; ?>
            </div>

            <div class="banner-agitation">
                <?php foreach ($agitation as $line) : ?>
                <p><?php echo wp_kses_post($line); ?></p>
                <?php endforeach; ?>
            </div>

            <div class="banner-solution">
                <?php foreach ($solution as $line) : ?>
                <p><?php echo wp_kses_post($line); ?></p>
                <?php endforeach; ?>
            </div>

            <div class="banner-cta">
                <?php foreach ($cta_text as $index => $line) : ?>
                <p class="<?php echo $index < count($cta_text) - 1 ? 'cta-urgency' : 'cta-main'; ?>"><?php echo wp_kses_post($line); ?></p>
                <?php endforeach; ?>
            </div>

            <div class="banner-form">
                <?php
                // Usar el formulario de Brevo (Sendinblue)
                if (shortcode_exists('sibwp_form')) {
                    echo do_shortcode('[sibwp_form id=1]');
                } else {
                    // Fallback si Brevo no esta activo - form que no hace nada
                    // pero muestra la estructura para cuando se active
                    ?>
                    <form class="newsletter-form newsletter-fallback" action="#" method="post">
                        <p class="newsletter-fallback-notice"><em>Formulario de newsletter pendiente de configurar</em></p>
                        <input type="email" name="email" placeholder="Tu mejor email" class="newsletter-input" required disabled>
                        <button type="submit" class="newsletter-button" disabled><?php echo esc_html($button_text); ?></button>
                    </form>
                    <?php
                }
                ?>
            </div>

            <div class="banner-postdata">
                <p><em>PD: <?php echo wp_kses_post($postdata); ?></em></p>
            </div>

        </div>
    </div>
</section>
