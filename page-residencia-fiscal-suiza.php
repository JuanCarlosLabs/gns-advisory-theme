<?php
/**
 * Template Name: Servicios - Residencia Fiscal Suiza (CAT 4)
 * URL: /residencia-fiscal-suiza/
 * KW Principal: residencia fiscal suiza (vol 10)
 * KW Secundarias: cambiar residencia fiscal suiza
 * KW Semanticas: exit tax espana, convenio doble imposicion suiza espana, regla 183 dias
 *
 * Meta Title: Residencia fiscal suiza y cómo obtenerla legalmente en 2026
 * Meta Description: Cambia tu residencia fiscal a Suiza cumpliendo la regla de los 183 dias,
 * exit tax y convenio de doble imposicion España-Suiza. Planificacion completa.
 *
 * NOTA: Poco volumen de busqueda pero ALTO VALOR por cliente (10.000-50.000 CHF en honorarios).
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => '', 'name' => 'Cambio de Residencia Fiscal')
);
$page_title = 'Residencia fiscal en Suiza para salir de España legalmente';
$page_subtitle = 'Obtén tu residencia fiscal suiza y deja de ser un rehén tributario';
$page_description = 'La residencia fiscal en Suiza es el primer paso para dejar de ser rehén de un sistema que te exprime. Te explicamos los requisitos para trasladar tu vida de forma legal, sin problemas con Hacienda. Un país seguro, servicios de calidad y una presión fiscal que te deja respirar. Eso existe.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'Cambiar tu residencia fiscal a Suiza no es mudarte de piso.',
        'Es la decisión financiera más importante que tomarás en tu vida.'
    ),
    'sub' => array(
        'De pagar el 45% a pagar el 15%.',
        'De temer a Hacienda a vivir tranquilo.',
        'Pero hay que hacerlo bien. Convenio de doble imposición. Exit tax. Plazos.'
    ),
    'accent' => 'Un error aquí te puede costar más que lo que ahorras en 5 años.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-categoria-page">

    <!-- Requisitos para dejar España -->
    <section class="servicios-content" aria-labelledby="requisitos-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Requisitos para dejar de ser residente fiscal en España</h2>
                <p class="section-seo-intro">España te considera residente fiscal si cumples alguna de estas condiciones: permaneces mas de 183 dias al año, tienes el nucleo principal de tus actividades economicas, o tu conyuge e hijos menores viven en España. Para dejar de ser residente fiscal, debes romper todos estos vinculos.</p>
            </div>

            <div class="servicios-content-header">
                <p class="section-hook animate-on-scroll fade-up">España no te deja ir facilmente.</p>
                <p class="animate-on-scroll fade-up stagger-1">
                    Hacienda española tiene mecanismos para seguir considerandote residente aunque te vayas:<br><br>
                    - Si tu familia sigue en España, se presume que tu tambien.<br>
                    - Si tienes el nucleo de tus actividades aqui, se presume que tu tambien.<br>
                    - Si no puedes demostrar residencia en otro pais, se presume que sigues aqui.<br><br>
                    La planificacion es clave. No es solo mudarse: es demostrar que te has mudado.
                </p>
            </div>
        </div>
    </section>

    <!-- Regla de los 183 días -->
    <section class="servicios-content" aria-labelledby="183dias-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="183dias-heading" class="section-seo-title">La regla de los 183 dias</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Para ser residente fiscal suizo (y dejar de serlo español), debes pasar mas de 183 dias al año en Suiza.<br><br>
                    Pero ojo: no es solo contar dias. Suiza cuenta "dias de presencia" y España puede contar "dias de ausencia" de forma diferente.<br><br>
                    Ademas, hay situaciones especiales: viajes de trabajo, estancias en terceros paises, etc.<br><br>
                    Lo importante es poder demostrar tu residencia habitual en Suiza con pruebas objetivas: contrato de alquiler, facturas, movimientos bancarios, registros de entrada/salida...
                </p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <h3>Pruebas de residencia en Suiza</h3>
                <ul>
                    <li>Registro en el canton (Anmeldung)</li>
                    <li>Contrato de alquiler o propiedad</li>
                    <li>Facturas de servicios (luz, telefono, internet)</li>
                    <li>Cuenta bancaria suiza con movimientos regulares</li>
                    <li>Permiso de residencia (B o C)</li>
                    <li>Seguro medico suizo obligatorio</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Exit Tax -->
    <section class="servicios-content" aria-labelledby="exittax-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="exittax-heading" class="section-seo-title">Exit tax si tu patrimonio supera 4 millones</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    España tiene un "exit tax" para quienes dejan de ser residentes fiscales.<br><br>
                    Si tienes participaciones en empresas valoradas en mas de 4 millones de euros (o representan mas del 25% del capital), debes tributar por la plusvalia latente como si las vendieras.<br><br>
                    No pagas en el momento de irte, pero queda "devengado". Cuando vendas esas participaciones, tributaras en España por la plusvalia hasta la fecha de salida.<br><br>
                    Hay formas de minimizar este impacto con planificacion anticipada.
                </p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up" style="background-color: #fff3cd; border-left-color: #ffc107;">
                <h3>Importante sobre el Exit Tax</h3>
                <p>El exit tax aplica si:</p>
                <ul>
                    <li>Valor de tus participaciones > 4 millones €</li>
                    <li>O participacion > 25% en cualquier empresa</li>
                    <li>Y has sido residente fiscal español al menos 10 de los ultimos 15 años</li>
                </ul>
                <p>Si te vas a Suiza (pais con convenio), puedes aplazar el pago hasta la venta efectiva. Pero la planificacion anticipada puede reducir significativamente la base imponible.</p>
            </div>
        </div>
    </section>

    <!-- Convenio Doble Imposición -->
    <section class="servicios-content" aria-labelledby="convenio-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="convenio-heading" class="section-seo-title">Convenio de doble imposicion España-Suiza</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    España y Suiza tienen un convenio de doble imposicion (CDI) que evita pagar impuestos dos veces por lo mismo.<br><br>
                    El convenio establece que pais tiene derecho a gravar cada tipo de renta: salarios, dividendos, intereses, plusvalias, pensiones...<br><br>
                    Conocer el convenio es fundamental para planificar la salida de España. Por ejemplo, las pensiones publicas españolas se siguen tributando en España aunque vivas en Suiza. Pero las pensiones privadas tributan en Suiza.
                </p>
            </div>

            <div class="servicios-grid">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1">
                    <h3>Rentas del trabajo</h3>
                    <p>Tributan donde se realiza el trabajo. Si trabajas en Suiza para empresa suiza, tributan en Suiza.</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2">
                    <h3>Dividendos</h3>
                    <p>Retencion maxima del 15% en origen. Si cobras dividendos de España, retencion del 15% alli + tributacion en Suiza con credito fiscal.</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-3">
                    <h3>Plusvalias inmobiliarias</h3>
                    <p>Tributan donde esta el inmueble. Si vendes piso en España, tributas en España aunque seas residente suizo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pasos para cambiar -->
    <section class="servicios-content" aria-labelledby="pasos-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="pasos-heading" class="section-seo-title">Pasos para cambiar tu residencia fiscal</h2>
            </div>

            <div class="servicios-grid proceso-grid">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <h3>Analisis previo</h3>
                    <p>Evaluamos tu situacion: patrimonio, vinculos en España, exit tax aplicable, estructura optima en Suiza.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <h3>Preparacion</h3>
                    <p>Documentacion, estructura societaria, eleccion de canton, busqueda de vivienda, apertura de cuentas.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <h3>Mudanza efectiva</h3>
                    <p>Registro en canton suizo, baja consular en España, comunicacion a Hacienda del cambio de residencia.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <h3>Consolidacion</h3>
                    <p>Primera declaracion de renta en Suiza, seguimiento de obligaciones en España (si las hay), optimizacion continua.</p>
                </div>
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
                    <h3 itemprop="name">¿Puedo seguir teniendo propiedades en España si me mudo a Suiza?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, puedes tener propiedades en España. Pero esas propiedades tributaran en España (IBI, plusvalia municipal si vendes, IRPF por alquileres). Ademas, si tienes una vivienda a tu disposicion, Hacienda podria argumentar que mantienes vinculos significativos. Es mejor alquilarla que tenerla vacia.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Y si mi familia sigue en España?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si tu conyuge e hijos menores viven en España, se presume que tu tambien eres residente fiscal español (salvo prueba en contrario). Es una presuncion que se puede romper, pero complica las cosas. Idealmente, la familia se muda contigo. Si no es posible, hay que documentar muy bien la separacion real.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Cuanto tiempo debo esperar para vender mis participaciones sin exit tax?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El exit tax español tiene un periodo de seguimiento de 10 años. Si vendes dentro de esos 10 años, tributas en España por la plusvalia generada hasta tu fecha de salida. Pasados los 10 años, solo tributas en Suiza. La planificacion anticipada (donaciones, reestructuraciones) puede reducir este impacto.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">¿Necesito obtener un permiso de residencia suizo?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si eres ciudadano de la UE/AELC, tienes derecho a residir en Suiza. Necesitas el Permiso B (residencia temporal, 5 años) que se obtiene al registrarte en el canton. Despues de 5-10 años puedes optar al Permiso C (residencia permanente). El permiso es requisito para ser considerado residente fiscal suizo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <?php
    $cta_title = 'Planifica tu cambio de residencia fiscal';
    $cta_subtitle = 'Analisis completo de tu situacion y plan de salida de España';
    $cta_intro = 'Cambiar de residencia fiscal es una decision importante que afecta a toda tu estructura patrimonial. No lo hagas sin un analisis profesional previo.';
    $cta_button_text = 'Quiero analizar mi cambio de residencia';
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
