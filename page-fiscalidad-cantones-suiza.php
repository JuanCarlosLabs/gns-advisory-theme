<?php
/**
 * Template Name: Servicios - Fiscalidad Cantones Suiza
 * URL: /fiscalidad-cantones-suiza/
 * KW Principal: fiscalidad cantones suiza
 * KW Secundarias: cambio canton suiza impuestos, mejor canton suiza impuestos, comparativa cantones suiza
 *
 * Meta Title: Fiscalidad por Cantones en Suiza | GNS Advisory
 * Meta Description: Cambia de canton y ahorra hasta 40% en impuestos. Zug, Schwyz, Zurich:
 * analizamos tu situacion y te decimos si el cambio merece la pena. Consulta personalizada.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/optimizacion-fiscal/'), 'name' => 'Optimizacion Fiscal'),
    array('url' => '', 'name' => 'Fiscalidad por Cantones')
);

$page_subtitle = 'Hasta 40% menos impuestos sin salir de Suiza.';
$page_description = 'El canton donde vives determina cuanto pagas de impuestos. Un empresario con 400.000 CHF de beneficio puede pagar 88.000 CHF en Zug o 140.000 CHF en Ginebra. Esa diferencia de 52.000 CHF al ano es legal, legitima y al alcance de cualquiera que pueda mudarse. Analizamos tu caso y calculamos si el cambio de canton compensa.';

// Bloque de conversion - Top of the Fold
$conversion_content = array(
    'main' => array(
        'Mismo trabajo. Mismo salario.',
        'Diferente canton. Diferente factura.'
    ),
    'sub' => array(
        'En Suiza no existe un tipo impositivo unico. Cada canton fija sus propios impuestos.',
        'El resultado: puedes ahorrar decenas de miles de francos cambiando de canton.',
        'Es legal. Es habitual. Y nadie te lo ha explicado.'
    ),
    'accent' => 'Una mudanza estrategica puede equivaler a un aumento de sueldo del 15-20%.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-fiscalidad-cantones-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-value">26</span>
                    <span class="hero-stat-label">Cantones con impuestos diferentes</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-value">40%</span>
                    <span class="hero-stat-label">Diferencia maxima entre cantones</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-value">22%</span>
                    <span class="hero-stat-label">IRPF efectivo en Zug (el mas bajo)</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener">Analizar mi canton actual</a>
            </div>
        </div>
    </section>

    <!-- Que es la optimizacion por canton -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Que es la optimizacion fiscal por canton</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>La <strong>optimizacion fiscal por canton</strong> consiste en elegir tu lugar de residencia en funcion de la carga tributaria. En Suiza, cada canton tiene autonomia para fijar sus propios tipos de IRPF, impuesto sobre el patrimonio e impuesto de sociedades.</p>

                <p>La diferencia es brutal: un salario de <strong>300.000 CHF</strong> tributa al 22% efectivo en Zug y al 35% en Ginebra. Son <strong>39.000 CHF de diferencia</strong> cada ano. En cinco anos, casi 200.000 francos.</p>

                <p>El 70% de nuestros clientes con rentas superiores a 250.000 CHF han considerado o ejecutado un cambio de canton tras nuestra consulta.</p>
            </div>
        </div>
    </section>

    <!-- Comparativa de Cantones Detallada -->
    <section class="servicios-content section-alt" aria-labelledby="comparativa-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="comparativa-heading" class="section-seo-title">Comparativa de impuestos por canton</h2>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <table class="tabla-comparativa tabla-responsive">
                    <thead>
                        <tr>
                            <th>Canton</th>
                            <th>IRPF Efectivo*</th>
                            <th>Imp. Patrimonio</th>
                            <th>Imp. Sociedades</th>
                            <th>Perfil ideal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Zug</strong></td>
                            <td>22%</td>
                            <td>0,25%</td>
                            <td>11,9%</td>
                            <td>Empresarios, crypto, holdings</td>
                        </tr>
                        <tr>
                            <td><strong>Schwyz</strong></td>
                            <td>23%</td>
                            <td>0,00%</td>
                            <td>12,3%</td>
                            <td>Grandes patrimonios, retirados</td>
                        </tr>
                        <tr>
                            <td><strong>Nidwalden</strong></td>
                            <td>24%</td>
                            <td>0,15%</td>
                            <td>12,0%</td>
                            <td>Trabajo remoto, naturaleza</td>
                        </tr>
                        <tr>
                            <td><strong>Zurich</strong></td>
                            <td>27%</td>
                            <td>0,30%</td>
                            <td>13,0%</td>
                            <td>Ejecutivos, servicios financieros</td>
                        </tr>
                        <tr>
                            <td><strong>Tesino</strong></td>
                            <td>30%</td>
                            <td>0,35%</td>
                            <td>13,5%</td>
                            <td>Forfait fiscal, italiano</td>
                        </tr>
                        <tr>
                            <td><strong>Vaud</strong></td>
                            <td>33%</td>
                            <td>0,40%</td>
                            <td>14,0%</td>
                            <td>Frances, Lausana, calidad vida</td>
                        </tr>
                        <tr>
                            <td><strong>Ginebra</strong></td>
                            <td>35%</td>
                            <td>0,45%</td>
                            <td>14,0%</td>
                            <td>Internacional, ONGs, banca</td>
                        </tr>
                    </tbody>
                </table>
                <p class="tabla-nota">*IRPF efectivo para renta de ~300.000 CHF, incluyendo impuesto federal + cantonal + municipal tipico</p>
            </div>
        </div>
    </section>

    <!-- Ventajas del cambio de canton -->
    <section class="servicios-content" aria-labelledby="ventajas-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="ventajas-heading" class="section-seo-title">Ventajas de optimizar tu canton</h2>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <h3>Ahorro fiscal inmediato</h3>
                    <p>Desde el primer ano en el nuevo canton pagas menos. No hay periodo de transicion ni penalizaciones. El ahorro es real y tangible.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <h3>100% legal y transparente</h3>
                    <p>La competencia fiscal entre cantones es una caracteristica del sistema suizo. No es elusion ni agujero legal: es el sistema funcionando como fue disenado.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <h3>Patrimonio protegido</h3>
                    <p>Schwyz tiene 0% de impuesto sobre patrimonio. Si tienes mas de 2-3 millones CHF, la diferencia con otros cantones puede ser de 10.000-20.000 CHF anuales solo en este impuesto.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <h3>Empresa mas competitiva</h3>
                    <p>Si tienes empresa, el impuesto de sociedades en Zug (11,9%) vs Ginebra (14%) marca la diferencia. Con 500.000 CHF de beneficio: 10.500 CHF de ahorro anual.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Requisitos para cambiar de canton -->
    <section class="servicios-content section-alt" aria-labelledby="requisitos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Requisitos para cambiar de canton</h2>
            </div>

            <div class="requisitos-grid">
                <ul class="requisitos-lista animate-on-scroll fade-up">
                    <li><strong>Residencia efectiva</strong> - Debes vivir realmente en el nuevo canton, no solo tener una direccion postal</li>
                    <li><strong>Permiso de residencia</strong> - Tu permiso B o C se traslada sin problema al nuevo canton</li>
                    <li><strong>Registro civil</strong> - Darte de baja en el canton antiguo y alta en el nuevo (tramite sencillo)</li>
                    <li><strong>Vivienda</strong> - Contrato de alquiler o propiedad en el nuevo canton</li>
                    <li><strong>Centro de vida</strong> - Tu familia, actividades principales y vida social deben estar en el nuevo canton</li>
                </ul>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>Atencion:</strong> Las autoridades fiscales pueden verificar que tu residencia es real. Mantener un piso vacio en Zug mientras vives en Ginebra no funciona y puede tener consecuencias legales.</p>
            </div>
        </div>
    </section>

    <!-- Costes del cambio -->
    <section class="servicios-content" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Costes del cambio y cuando se amortiza</h2>
            </div>

            <div class="tablas-costes-grid">
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                    <h3 class="tabla-titulo">Costes tipicos de mudanza</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Mudanza fisica</td>
                                <td>3.000-8.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Deposito nuevo alquiler</td>
                                <td>6.000-15.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Tramites administrativos</td>
                                <td>500-1.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Cambio domicilio empresa (si aplica)</td>
                                <td>2.000-5.000 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total estimado</strong></td>
                                <td><strong>12.000-30.000 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                    <h3 class="tabla-titulo">Ahorro anual tipico</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Renta 200.000 CHF</td>
                                <td>15.000-25.000 CHF/ano</td>
                            </tr>
                            <tr>
                                <td>Renta 400.000 CHF</td>
                                <td>35.000-55.000 CHF/ano</td>
                            </tr>
                            <tr>
                                <td>Renta 800.000 CHF</td>
                                <td>70.000-110.000 CHF/ano</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Amortizacion tipica</strong></td>
                                <td><strong>6-18 meses</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Ejemplo real:</strong> Cliente con 450.000 CHF de renta anual. Coste de mudanza Ginebra → Zug: 25.000 CHF. Ahorro anual: 52.000 CHF. <strong>Amortizado en 6 meses</strong>. A 5 anos: 235.000 CHF de ahorro neto.</p>
            </div>
        </div>
    </section>

    <!-- Proceso de cambio -->
    <section class="servicios-content section-alt" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como te ayudamos a cambiar de canton</h2>
            </div>

            <div class="proceso-timeline proceso-compact">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Analisis de situacion</h3>
                        <p>Revisamos tu renta, patrimonio, situacion familiar y preferencias de vida para calcular el ahorro potencial por canton.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Simulacion comparativa</h3>
                        <p>Te damos numeros exactos: cuanto pagas ahora, cuanto pagarias en cada canton candidato, y cual es el ahorro neto despues de costes.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Plan de mudanza fiscal</h3>
                        <p>Si decides seguir, coordinamos el timing optimo (ano fiscal), los tramites administrativos y, si tienes empresa, el cambio de domicilio social.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Acompanamiento continuo</h3>
                        <p>Supervisamos la primera declaracion en el nuevo canton para asegurar que todo esta correcto y maximizar las deducciones locales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Para quien es -->
    <section class="servicios-content" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Te compensa cambiar de canton?</h2>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>Si, si...</h3>
                    <ul>
                        <li>Ganas mas de <strong>200.000 CHF</strong> al ano</li>
                        <li>Tienes <strong>patrimonio superior a 1M CHF</strong></li>
                        <li>Trabajas en <strong>remoto</strong> o tienes flexibilidad geografica</li>
                        <li>Tu empresa puede cambiar de domicilio social</li>
                        <li>Vives en canton caro (Ginebra, Vaud, Basilea)</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>No, si...</h3>
                    <ul>
                        <li>Ganas menos de <strong>150.000 CHF</strong> (ahorro insuficiente)</li>
                        <li>Tu trabajo exige presencia fisica en ciudad concreta</li>
                        <li>Tienes hijos en colegio especifico</li>
                        <li>Tu pareja trabaja en otro canton</li>
                        <li>No quieres cambiar tu estilo de vida</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p>¿No te compensa mudarte? Hay otras formas de <a href="<?php echo esc_url(home_url('/optimizacion-fiscal/')); ?>"><strong>optimizar tu fiscalidad sin cambiar de canton</strong></a>. Lo analizamos en la consulta.</p>
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
                        <span itemprop="name">¿Es legal cambiar de canton para pagar menos impuestos?</span>
                    </button>
                    <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, completamente legal. La competencia fiscal entre cantones es una caracteristica fundamental del federalismo suizo. No hay ninguna norma anti-elusion por cambiar de canton. El unico requisito es que tu residencia sea real: debes vivir de verdad en el nuevo canton, no solo tener una direccion.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-2" id="faq-q2">
                        <span itemprop="name">¿Cual es el mejor canton para pagar menos impuestos?</span>
                    </button>
                    <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Zug suele ser el mas barato en IRPF (22% efectivo), pero Schwyz tiene 0% de impuesto sobre patrimonio. Nidwalden y Obwalden tambien son muy competitivos. El "mejor" depende de tu perfil: renta vs patrimonio, si tienes empresa, idioma preferido y estilo de vida.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-3" id="faq-q3">
                        <span itemprop="name">¿Puedo tener la empresa en un canton y vivir en otro?</span>
                    </button>
                    <div class="faq-answer" id="faq-3" role="region" aria-labelledby="faq-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Tu empresa tributa donde tiene su domicilio social. Tu como persona fisica tributas donde vives. Puedes tener una GmbH en Zug y vivir en Zurich. Pero si eres administrador unico y trabajas desde casa, podria discutirse donde esta la "direccion efectiva". Te asesoramos sobre la estructura optima.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-4" id="faq-q4">
                        <span itemprop="name">¿Cuanto se tarda en cambiar de canton?</span>
                    </button>
                    <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El tramite administrativo es rapido: 1-2 semanas para darte de baja en un canton y alta en otro. Lo que lleva tiempo es encontrar vivienda en el nuevo canton (especialmente en Zug, donde hay mucha demanda). Recomendamos planificar con 2-3 meses de antelacion.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-5" id="faq-q5">
                        <span itemprop="name">¿Cuando es el mejor momento para cambiar de canton?</span>
                    </button>
                    <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Idealmente a principios de ano (enero). Tributas en el canton donde estas el 31 de diciembre. Si te mudas en diciembre, todo el ano se declara en el nuevo canton. Esto maximiza el ahorro fiscal desde el primer ano.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Links relacionados -->
    <section class="servicios-content links-section">
        <div class="container">
            <div class="servicios-grid servicios-grid-3 links-relacionados">
                <a href="<?php echo esc_url(home_url('/optimizacion-fiscal/')); ?>" class="link-card animate-on-scroll slide-fade stagger-1">
                    <h4>Optimizacion Fiscal General</h4>
                    <p>Mas formas de reducir tu carga fiscal</p>
                </a>
                <a href="<?php echo esc_url(home_url('/cambio-residencia-fiscal-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Cambio de Residencia Fiscal</h4>
                    <p>Mudarte a Suiza desde otro pais</p>
                </a>
                <a href="<?php echo esc_url(home_url('/declaracion-renta-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Declaracion de Renta</h4>
                    <p>Maximiza deducciones en tu canton</p>
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
                    <h2 id="cta-final-heading" class="cta-seo-title">Analisis de optimizacion cantonal</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>En una hora analizamos tu situacion fiscal actual, calculamos el ahorro potencial en cada canton candidato y te decimos si el cambio merece la pena para tu caso concreto.</p>
                    </div>

                    <div class="cta-price-block animate-on-scroll fade-up">
                        <span class="cta-price counter-glow"><?php echo esc_html(gns_get_consultation_price()); ?></span>
                        <span class="cta-price-detail">1 hora · Se descuenta si sigues</span>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener">Calcular mi ahorro potencial</a>

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
