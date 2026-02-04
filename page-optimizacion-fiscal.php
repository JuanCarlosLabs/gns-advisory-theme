<?php
/**
 * Template Name: Servicios - Optimizacion Fiscal (CAT 3)
 * URL: /optimizacion-fiscal/
 * KW Principal: cantones suiza impuestos (vol 50)
 * KW Secundarias: impuestos en suiza por cantones, optimizacion fiscal suiza, cambio canton suiza
 *
 * Meta Title: Cantones Suiza impuestos y comparativa de ahorro fiscal 2026
 * Meta Description: Optimiza tu fiscalidad en Suiza por cantones. Los impuestos varian
 * hasta un 40% entre Zug, Ginebra o Vaud. Revisamos tu estructura y detectamos ahorro real.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => '', 'name' => 'Optimizacion Fiscal')
);
$page_title = 'Cantones Suiza impuestos bajos y comparativa para elegir tu sede';
$page_subtitle = 'Elige los cantones en Suiza con impuestos más ventajosos para ti';
$page_description = 'Los cantones en Suiza y sus impuestos tienen tasas muy diferentes entre sí. Desde Zug con sus tasas bajísimas hasta Ginebra con su exclusividad. Te asesoramos para elegir la ubicación que mejor encaje con tu perfil y tu negocio. No es lo mismo para todos. Por eso lo analizamos contigo.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'No estás pagando lo justo.',
        'Estás pagando de más.'
    ),
    'sub' => array(
        'Y no porque seas tonto. Sino porque nadie te ha sentado a explicarte las opciones.',
        'Cantón equivocado. Estructura mal montada. Remuneración sin optimizar.',
        'Cada una de esas cosas tiene un coste. Y se acumula cada mes.'
    ),
    'accent' => 'Una revisión de una hora puede ahorrarte lo que ganas en tres meses.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-categoria-page">

    <!-- Por qué el cantón importa -->
    <section class="servicios-content" aria-labelledby="canton-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="canton-heading" class="section-seo-title">Por que el canton donde vives cambia tu factura fiscal</h2>
                <p class="section-seo-intro">Suiza no tiene un sistema fiscal unico. Cada canton (son 26) establece sus propios tipos de IRPF e impuesto de sociedades. A eso se suma el impuesto municipal. El resultado: dos personas con la misma renta pueden pagar cantidades muy diferentes segun donde vivan.</p>
            </div>

            <div class="servicios-content-header">
                <p class="section-hook animate-on-scroll fade-up">El canton donde vives es una decision fiscal.</p>
                <p class="animate-on-scroll fade-up stagger-1">
                    No es solo una cuestion de paisaje o idioma.<br><br>
                    Un empresario que gana 500.000 CHF al año puede pagar 110.000 CHF de impuestos en Zug o 175.000 CHF en Ginebra.<br><br>
                    Son 65.000 francos de diferencia. Cada año. Por vivir en un sitio u otro.<br><br>
                    ¿La calidad de vida es tan diferente? No necesariamente. Pero la factura fiscal, si.
                </p>
            </div>
        </div>
    </section>

    <!-- Comparativa de Cantones -->
    <section class="servicios-content comparativa-section" aria-labelledby="comparativa-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="comparativa-heading" class="section-seo-title">Comparativa de impuestos por cantones</h2>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Canton</th>
                            <th>IRPF Efectivo*</th>
                            <th>Imp. Sociedades</th>
                            <th>Idioma</th>
                            <th>Caracteristicas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Zug</strong></td>
                            <td>22%</td>
                            <td>11,9%</td>
                            <td>Aleman</td>
                            <td>Mas barato, hub de cripto</td>
                        </tr>
                        <tr>
                            <td><strong>Schwyz</strong></td>
                            <td>23%</td>
                            <td>12,3%</td>
                            <td>Aleman</td>
                            <td>Rural, muy barato</td>
                        </tr>
                        <tr>
                            <td><strong>Zurich</strong></td>
                            <td>27%</td>
                            <td>13,0%</td>
                            <td>Aleman</td>
                            <td>Capital financiera</td>
                        </tr>
                        <tr>
                            <td><strong>Ginebra</strong></td>
                            <td>35%</td>
                            <td>14,0%</td>
                            <td>Frances</td>
                            <td>Internacional, caro</td>
                        </tr>
                        <tr>
                            <td><strong>Vaud</strong></td>
                            <td>33%</td>
                            <td>14,0%</td>
                            <td>Frances</td>
                            <td>Lausana, costa del lago</td>
                        </tr>
                        <tr>
                            <td><strong>Tesino</strong></td>
                            <td>30%</td>
                            <td>13,5%</td>
                            <td>Italiano</td>
                            <td>Forfait fiscal disponible</td>
                        </tr>
                    </tbody>
                </table>
                <p class="tabla-nota">*IRPF efectivo para renta de ~300.000 CHF, incluyendo federal + cantonal + municipal tipico</p>
            </div>
        </div>
    </section>

    <!-- Cuándo cambiar de cantón -->
    <section class="servicios-content" aria-labelledby="cuando-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="cuando-heading" class="section-seo-title">Cuando tiene sentido cambiar de canton</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Cambiar de canton no es para todos.<br><br>
                    Tiene sentido si la diferencia de impuestos justifica el coste y la molestia de mudarse.<br><br>
                    <strong>Tipicamente vale la pena si:</strong>
                </p>
            </div>

            <div class="servicios-grid">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1">
                    <h3>Rentas altas</h3>
                    <p>Si ganas mas de 300.000 CHF al año, la diferencia entre cantones puede ser de 30.000-50.000 CHF anuales. Eso justifica mudarse.</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2">
                    <h3>Patrimonio elevado</h3>
                    <p>En Suiza el patrimonio tributa. Si tienes mas de 2-3 millones, la diferencia entre cantones es significativa (Schwyz tiene 0% de impuesto sobre patrimonio).</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-3">
                    <h3>Flexibilidad de ubicacion</h3>
                    <p>Si trabajas en remoto o tu negocio no depende de estar en una ciudad concreta, tienes libertad para elegir el canton mas favorable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Forfait Fiscal -->
    <section class="servicios-content" aria-labelledby="forfait-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="forfait-heading" class="section-seo-title">Forfait fiscal para grandes patrimonios</h2>
                <p class="section-seo-intro">El forfait fiscal (lump-sum taxation) es un regimen especial para personas con grandes patrimonios que se mudan a Suiza sin trabajar alli. En lugar de tributar sobre tu renta mundial, tributas sobre tu gasto en Suiza.</p>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    El forfait no es para todos. Solo para quien cumple estos requisitos:<br><br>
                    - No tener nacionalidad suiza<br>
                    - No trabajar en Suiza (rentas pasivas ok)<br>
                    - Gasto minimo de 400.000-600.000 CHF segun canton<br><br>
                    Si cumples, tributas sobre ese gasto, no sobre tu patrimonio real. Disponible en Vaud, Valais, Tesino, Ginebra y otros cantones.
                </p>
            </div>

        </div>
    </section>

    <!-- FAQ -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes</h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Es legal cambiar de canton para pagar menos impuestos?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, completamente legal. La competencia fiscal entre cantones es una caracteristica del sistema suizo. No hay ninguna norma anti-elusion por cambiar de canton. Lo unico que necesitas es establecer tu residencia real en el nuevo canton (vivir alli de verdad, no solo tener una direccion).</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Cuanto cuesta mudarse de canton?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El coste depende de tu situacion: mudanza fisica, posible cambio de domicilio social de tu empresa, nuevos contratos de alquiler o compra de vivienda. Para una familia tipica, entre 20.000 CHF y 50.000 CHF de costes directos. Pero si el ahorro fiscal es de 50.000 CHF al año, se amortiza en menos de un año.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Que canton me conviene?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende de tu renta, patrimonio, idioma preferido y estilo de vida. Zug es el mas barato pero es aleman y tiene menos vida cultural que Ginebra. Tesino es italiano y tiene forfait fiscal. Vaud tiene buen equilibrio precio/calidad de vida. No hay respuesta universal: hay que analizar tu caso concreto.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Puedo tener la empresa en un canton y vivir en otro?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Tu empresa tributa donde tiene su domicilio social. Tu como persona fisica tributas donde vives. Puedes tener la empresa en Zug (11,9% sociedades) y vivir en Zurich. Pero si eres el administrador unico y trabajas desde casa, podria haber discusion sobre donde esta la "direccion efectiva" de la empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <?php
    $cta_title = 'Analisis de optimizacion cantonal';
    $cta_subtitle = 'Te decimos si tiene sentido cambiar y cuanto ahorrarias';
    $cta_intro = 'Si llevas mas de un año en Suiza y no has revisado si estas en el canton correcto, probablemente estas pagando de mas. Analizamos tu situacion y te damos numeros reales.';
    $cta_button_text = 'Quiero saber si estoy en el canton correcto';
    include(get_template_directory() . '/template-parts/servicios-cta.php');
    ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>
