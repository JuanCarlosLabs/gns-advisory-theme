<?php
/**
 * Template Name: Servicios - Cambio Residencia Fiscal Suiza
 * URL: /cambio-residencia-fiscal-suiza/
 * KW Principal: cambio residencia fiscal suiza
 * KW Secundarias: trasladar residencia fiscal suiza, mudarse a suiza fiscalmente, establecer residencia fiscal suiza
 *
 * Meta Title: Cambio de Residencia Fiscal a Suiza | Guia Completa | GNS Advisory
 * Meta Description: Como cambiar tu residencia fiscal a Suiza paso a paso. Requisitos, permisos,
 * plazos y errores a evitar. Asesoramiento para expatriados de cualquier pais.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => '', 'name' => 'Cambio de Residencia Fiscal a Suiza')
);

$page_subtitle = 'Establecer tu residencia fiscal en Suiza correctamente.';
$page_description = 'Cambiar tu residencia fiscal a Suiza requiere mas que mudarte. Necesitas cumplir requisitos legales en Suiza, gestionar tu salida fiscal del pais de origen, y estructurar correctamente tu patrimonio. Un error puede costarte anos de litigios con Hacienda. Te guiamos en todo el proceso.';

// Bloque de conversion - Top of the Fold
$conversion_content = array(
    'main' => array(
        'Mudarte a Suiza es facil.',
        'Hacerlo bien fiscalmente, no tanto.'
    ),
    'sub' => array(
        'No basta con alquilar un piso y abrir una cuenta bancaria.',
        'Tu pais de origen puede seguir considerandote residente fiscal durante anos.',
        'Y si lo haces mal, pagaras impuestos en dos paises.'
    ),
    'accent' => 'La diferencia entre una mudanza bien planificada y una improvisada puede ser de cientos de miles de euros.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-cambio-residencia-fiscal-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-value">183</span>
                    <span class="hero-stat-label">Dias minimos en Suiza al ano</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-value">90</span>
                    <span class="hero-stat-label">Dias para registrarte al llegar</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-value">100+</span>
                    <span class="hero-stat-label">Cambios de residencia gestionados</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener">Planificar mi cambio de residencia</a>
            </div>
        </div>
    </section>

    <!-- Que implica el cambio -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Que implica cambiar tu residencia fiscal a Suiza</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>El <strong>cambio de residencia fiscal</strong> a Suiza tiene dos partes: establecer tu residencia en Suiza y cortar los vinculos fiscales con tu pais de origen. Ambas son igual de importantes.</p>

                <p>Suiza te considera residente fiscal si pasas mas de <strong>183 dias al ano</strong> en el pais o si estableces aqui tu "centro de intereses vitales" (familia, trabajo, vida social). Pero eso no basta: tu pais de origen tambien tiene reglas para determinar si sigues siendo su residente fiscal.</p>

                <p>El resultado de hacerlo mal: <strong>doble residencia fiscal</strong>. Dos paises reclamando impuestos sobre tu renta mundial. Aunque hay convenios de doble imposicion, la carga administrativa y los costes de defensa pueden ser enormes.</p>
            </div>
        </div>
    </section>

    <!-- Requisitos en Suiza -->
    <section class="servicios-content section-alt" aria-labelledby="requisitos-suiza-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-suiza-heading" class="section-seo-title">Requisitos para ser residente fiscal en Suiza</h2>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <h3>Permiso de residencia</h3>
                    <p>Ciudadanos UE/AELC: Permiso B automatico al registrarte con contrato de trabajo o recursos suficientes. No-UE: permiso mas restrictivo, normalmente vinculado a trabajo o inversion.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <h3>Registro en el canton</h3>
                    <p>Tienes 14 dias desde tu llegada para registrarte en la Einwohnerkontrolle (oficina de registro) de tu municipio. Necesitas contrato de alquiler y pasaporte.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <h3>Seguro medico obligatorio</h3>
                    <p>Tienes 3 meses para contratar seguro medico suizo (LAMal). Es obligatorio y cuesta 300-500 CHF/mes segun canton y franquicia elegida.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <h3>Presencia fisica real</h3>
                    <p>Debes vivir realmente en Suiza. No vale tener un piso vacio. Las autoridades pueden verificar: facturas, consumos, movimientos bancarios, viajes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Salida del pais de origen -->
    <section class="servicios-content" aria-labelledby="salida-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="salida-heading" class="section-seo-title">Gestion de salida de tu pais de origen</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Cada pais tiene sus propias reglas para determinar cuando dejas de ser residente fiscal. Los mas comunes:</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <table class="tabla-comparativa tabla-responsive">
                    <thead>
                        <tr>
                            <th>Pais</th>
                            <th>Regla principal</th>
                            <th>Exit tax</th>
                            <th>Periodo de seguimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Espana</strong></td>
                            <td>183 dias + centro intereses + familia</td>
                            <td>Si (>4M o >25%)</td>
                            <td>10 anos</td>
                        </tr>
                        <tr>
                            <td><strong>Francia</strong></td>
                            <td>Domicilio + actividad profesional</td>
                            <td>Si (>800k)</td>
                            <td>15 anos</td>
                        </tr>
                        <tr>
                            <td><strong>Alemania</strong></td>
                            <td>Vivienda a disposicion</td>
                            <td>Si (>1% participacion)</td>
                            <td>7 anos</td>
                        </tr>
                        <tr>
                            <td><strong>Italia</strong></td>
                            <td>Registro + domicilio + centro intereses</td>
                            <td>Si (>2,5M)</td>
                            <td>5 anos</td>
                        </tr>
                        <tr>
                            <td><strong>UK</strong></td>
                            <td>Statutory Residence Test</td>
                            <td>No directo</td>
                            <td>Varies</td>
                        </tr>
                        <tr>
                            <td><strong>Latam</strong></td>
                            <td>Varies por pais</td>
                            <td>Generalmente no</td>
                            <td>Varies</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>Caso especial - Espana:</strong> Si tu familia (conyuge e hijos menores) permanece en Espana, se presume que sigues siendo residente fiscal espanol. Esta presuncion se puede romper, pero requiere documentacion solida. <a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>">Ver guia especifica Espana-Suiza</a>.</p>
            </div>
        </div>
    </section>

    <!-- Proceso paso a paso -->
    <section class="servicios-content section-alt" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Proceso de cambio de residencia fiscal</h2>
            </div>

            <div class="proceso-timeline proceso-compact">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Analisis pre-mudanza (2-6 meses antes)</h3>
                        <p>Evaluamos tu situacion actual: patrimonio, participaciones societarias, exit tax aplicable, estructura familiar. Disenamos el plan optimo de salida.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Preparacion en origen (1-3 meses antes)</h3>
                        <p>Reestructuraciones societarias si proceden, donaciones, venta de activos con plusvalia antes de la salida, comunicaciones a autoridades fiscales.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Establecimiento en Suiza (mes 0)</h3>
                        <p>Llegada a Suiza, registro en canton, obtencion de permiso B, apertura de cuentas, contratacion de seguro medico. Eleccion de canton optimo fiscalmente.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Consolidacion (ano 1)</h3>
                        <p>Primera declaracion de renta en Suiza, cierre de obligaciones en pais de origen, documentacion de corte de vinculos, optimizacion fiscal continua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Errores comunes -->
    <section class="servicios-content" aria-labelledby="errores-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="errores-heading" class="section-seo-title">Errores comunes al cambiar de residencia fiscal</h2>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card error-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <h3>No cortar vinculos suficientemente</h3>
                    <p>Mantener vivienda a disposicion, tarjetas de credito activas, coche, club de golf... Todo suma para que tu pais de origen te considere residente.</p>
                </div>

                <div class="servicio-card error-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <h3>Ignorar el exit tax</h3>
                    <p>No planificar la salida puede suponer tributar inmediatamente por plusvalias latentes de millones de euros. Con planificacion, se puede diferir o reducir.</p>
                </div>

                <div class="servicio-card error-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <h3>Mudanza "de papel"</h3>
                    <p>Registrarte en Suiza pero seguir viviendo en tu pais. Las autoridades fiscales cruzan datos. Si te pillan, multas + impuestos atrasados + intereses.</p>
                </div>

                <div class="servicio-card error-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <h3>Elegir canton equivocado</h3>
                    <p>Instalarte en Ginebra porque hablas frances cuando Zug te ahorraria 50.000 CHF/ano. El canton es una decision fiscal, no solo geografica.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Costes del proceso -->
    <section class="servicios-content section-alt" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Costes del proceso de cambio</h2>
            </div>

            <div class="tablas-costes-grid">
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                    <h3 class="tabla-titulo">Costes administrativos en Suiza</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Permiso de residencia</td>
                                <td>100-200 CHF</td>
                            </tr>
                            <tr>
                                <td>Deposito alquiler (3 meses)</td>
                                <td>6.000-15.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Seguro medico (1er ano)</td>
                                <td>4.000-6.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Mudanza internacional</td>
                                <td>5.000-15.000 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total establecimiento</strong></td>
                                <td><strong>15.000-35.000 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                    <h3 class="tabla-titulo">Asesoria especializada</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Consulta inicial</td>
                                <td>230€</td>
                            </tr>
                            <tr>
                                <td>Planificacion salida pais origen</td>
                                <td>2.000-5.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Gestion exit tax (si aplica)</td>
                                <td>3.000-10.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Acompanamiento ano 1</td>
                                <td>2.000-4.000 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total asesoria</strong></td>
                                <td><strong>7.000-20.000 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Perspectiva:</strong> Una mudanza bien planificada puede ahorrarte 50.000-200.000 CHF en impuestos el primer ano dependiendo de tu renta. La asesoria se amortiza en semanas, no en anos.</p>
            </div>
        </div>
    </section>

    <!-- Para quien es -->
    <section class="servicios-content" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Te conviene cambiar tu residencia fiscal a Suiza?</h2>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>Si, si...</h3>
                    <ul>
                        <li>Tienes <strong>rentas altas</strong> (>200.000 CHF/ano)</li>
                        <li>Tu trabajo es <strong>remoto o internacional</strong></li>
                        <li>Tienes <strong>empresa con beneficios</strong> que relocalizarias</li>
                        <li>Valoras la <strong>estabilidad juridica y fiscal</strong></li>
                        <li>Estas dispuesto a <strong>vivir realmente en Suiza</strong></li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>No, si...</h3>
                    <ul>
                        <li>Solo quieres <strong>direccion fiscal sin vivir</strong></li>
                        <li>Tu familia no puede o quiere mudarse</li>
                        <li>Tu trabajo exige <strong>presencia en otro pais</strong></li>
                        <li>Tu renta es <strong>inferior a 100.000 CHF</strong></li>
                        <li>Buscas <strong>opacidad fiscal</strong> (Suiza intercambia info)</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p>¿No estas seguro? La consulta inicial de 230€ incluye un analisis de viabilidad. Te decimos si tiene sentido para tu caso y cuanto ahorrarias.</p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="servicios-content section-alt faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-1" id="faq-q1">
                        <span itemprop="name">¿Cuanto tiempo tarda el proceso completo?</span>
                    </button>
                    <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Desde la decision hasta estar plenamente establecido: 3-6 meses. La planificacion previa (analisis, reestructuraciones) puede empezar 6-12 meses antes si hay exit tax significativo. El registro en Suiza es rapido (2-3 semanas), pero consolidar la residencia fiscal lleva un ano completo.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-2" id="faq-q2">
                        <span itemprop="name">¿Puedo mantener mi empresa en el pais de origen?</span>
                    </button>
                    <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, puedes mantenerla. La empresa tributa donde esta constituida. Tu como socio tributas en Suiza por dividendos que recibas. Pero cuidado: si tu eres el administrador unico y diriges la empresa desde Suiza, las autoridades de origen podrian considerar que la "direccion efectiva" esta en Suiza (y reclamar impuestos). Hay formas de estructurarlo correctamente.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-3" id="faq-q3">
                        <span itemprop="name">¿Que pasa con mis inmuebles en el pais de origen?</span>
                    </button>
                    <div class="faq-answer" id="faq-3" role="region" aria-labelledby="faq-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Los inmuebles tributan donde estan ubicados (IBI, plusvalias, alquileres). Puedes mantenerlos sin problema. Pero tener una vivienda "a tu disposicion" puede complicar demostrar que has cortado vinculos. Mejor alquilarla que tenerla vacia esperandote.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-4" id="faq-q4">
                        <span itemprop="name">¿Suiza intercambia informacion fiscal?</span>
                    </button>
                    <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Suiza participa en el CRS (Common Reporting Standard) desde 2017. Intercambia informacion automaticamente con mas de 100 paises, incluyendo toda la UE. No hay opacidad fiscal. Lo que si hay es un sistema tributario favorable, estabilidad juridica y respeto por el contribuyente.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-5" id="faq-q5">
                        <span itemprop="name">¿Necesito hablar aleman, frances o italiano?</span>
                    </button>
                    <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No es requisito legal, pero ayuda. En Zurich, Zug, Ginebra y Lausana puedes vivir perfectamente con ingles. Los tramites administrativos pueden hacerse en el idioma oficial del canton, pero nosotros nos encargamos de eso. Para integrarte socialmente, el idioma local siempre suma.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Links relacionados -->
    <section class="servicios-content links-section">
        <div class="container">
            <div class="servicios-grid servicios-grid-3 links-relacionados">
                <a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-1">
                    <h4>Residencia Fiscal desde Espana</h4>
                    <p>Guia especifica para espanoles</p>
                </a>
                <a href="<?php echo esc_url(home_url('/fiscalidad-cantones-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Fiscalidad por Cantones</h4>
                    <p>Elige el canton con menos impuestos</p>
                </a>
                <a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Crear Empresa en Suiza</h4>
                    <p>Estructura societaria optima</p>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="servicios-content servicios-cta-section" aria-labelledby="cta-final-heading">
        <div class="container">
            <div class="cta-main-block cta-compact">
                <div class="cta-photo-column">
                    <div class="cta-photo-circle">
                        <?php $alejandra_photo = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp'); ?>
                        <img src="<?php echo esc_url($alejandra_photo); ?>" alt="Alejandra - Asesora fiscal" width="150" height="150" loading="lazy">
                    </div>
                    <div class="cta-photo-name">Ale</div>
                    <div class="cta-photo-role">Fundadora GNS</div>
                </div>

                <div class="cta-content-column">
                    <h2 id="cta-final-heading" class="cta-seo-title">Consulta de cambio de residencia fiscal</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Analizamos tu situacion actual, calculamos el impacto fiscal del cambio (incluyendo exit tax si aplica), y disenamos un plan de mudanza optimizado para tu caso.</p>
                    </div>

                    <div class="cta-price-block animate-on-scroll fade-up">
                        <span class="cta-price counter-glow"><?php echo esc_html(gns_get_consultation_price()); ?></span>
                        <span class="cta-price-detail">1 hora · Se descuenta si sigues</span>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener">Planificar mi cambio de residencia</a>

                    <p class="cta-slots">Max 4 casos nuevos al mes</p>
                </div>
            </div>
        </div>
    </section>

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

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (question && answer) {
            question.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        const otherQuestion = otherItem.querySelector('.faq-question');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        if (otherQuestion) otherQuestion.setAttribute('aria-expanded', 'false');
                        if (otherAnswer) otherAnswer.setAttribute('hidden', '');
                    }
                });

                if (isExpanded) {
                    item.classList.remove('active');
                    this.setAttribute('aria-expanded', 'false');
                    answer.setAttribute('hidden', '');
                } else {
                    item.classList.add('active');
                    this.setAttribute('aria-expanded', 'true');
                    answer.removeAttribute('hidden');
                }
            });
        }
    });
});
</script>

<?php get_footer(); ?>
