<?php
/**
 * Template Name: Servicios - GmbH Suiza (Ficha)
 * URL: /gmbh-suiza/
 * Tipo: Ficha de servicio (TRANSACCIONAL)
 * Objetivo: VENDER - conseguir consultas de 230€
 * Longitud: 1.500-2.000 palabras
 * Categoria padre: /crear-empresa-suiza/
 *
 * KW Principal: gmbh
 * KW Secundarias: gmbh (vol 5000), sociedad limitada suiza (<50), crear empresa suiza (50)
 *
 * Meta Title: GmbH Suiza y las ventajas de la sociedad limitada en 2026
 * Meta Description: GmbH Suiza es la opción inteligente para pymes y freelancers. Descubre cómo tributar al 12% con la seguridad jurídica del sistema suizo.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/crear-empresa-suiza/'), 'name' => 'Crear Empresa en Suiza'),
    array('url' => '', 'name' => 'GmbH Suiza')
);
$page_title = 'GmbH Suiza para proteger tu patrimonio con una sociedad limitada';
$page_subtitle = 'Las ventajas de la GmbH Suiza frente a la SL española';
$page_description = 'La GmbH Suiza es la sociedad limitada que eligen los españoles que quieren dormir tranquilos. Capital mínimo accesible, seguridad jurídica de verdad y una tributación que no te deja temblando cada trimestre. Tu patrimonio personal queda protegido bajo el marco legal más sólido de Europa. Sin sorpresas. Sin sustos.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        '20.000 CHF de capital.',
        '12% de impuestos.',
        'En España pagarías más del doble.'
    ),
    'sub' => array(
        'Una GmbH es como una SL española.',
        'Pero con la mitad de la carga fiscal.'
    ),
    'accent' => 'Haz los números. Es simple aritmética.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-gmbh-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave de la GmbH suiza">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-value">20.000 CHF</span>
                    <span class="hero-stat-label">Capital minimo</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-value">12-15%</span>
                    <span class="hero-stat-label">Impuesto sociedades</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-value">6-8 semanas</span>
                    <span class="hero-stat-label">Tiempo constitucion</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener">Quiero constituir mi GmbH</a>
            </div>
        </div>
    </section>

    <!-- SECCION 1: PROBLEMA + QUE ES -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Tu SL espanola te esta costando dinero</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>La <strong>GmbH</strong> (Gesellschaft mit beschrankter Haftung) es la <strong>sociedad limitada suiza</strong>. Si facturas mas de 150.000 euros al ano, cada mes sin mover tu estructura te cuesta dinero.</p>

                <p><strong>Capital minimo</strong> de <strong>20.000 CHF</strong>, <strong>impuesto de sociedades</strong> del 12-15% segun el <strong>canton</strong>, y toda la credibilidad de operar desde <strong>Suiza</strong>. Es la estructura que usa el 70% de nuestros clientes.</p>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER BANNER - Captura sutil -->
    <?php
    $newsletter_variant = 'gmbh';
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    ?>

    <!-- SECCION 2: VENTAJAS PRINCIPALES -->
    <section class="servicios-content section-alt" aria-labelledby="ventajas-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="ventajas-heading" class="section-seo-title">Que problemas resuelve una GmbH suiza</h2>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <h3>Impuesto de sociedades: 12-15%</h3>
                    <p>Frente al 25% de Espana. Mismo trabajo, mismo beneficio, la mitad de impuestos.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <h3>IVA del 8,1%</h3>
                    <p>13 puntos menos que en Espana. En B2C va directo a tu margen, en B2B mejora tu competitividad.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <h3>Banca sin complicaciones</h3>
                    <p>Cuenta en CHF, EUR y USD. Sin bloqueos, sin justificaciones constantes.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <h3>Seguridad juridica</h3>
                    <p><strong>Suiza</strong> no cambia las reglas cada legislatura. Planifica a 10 anos sin sustos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 3: REQUISITOS -->
    <section class="servicios-content" aria-labelledby="requisitos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Requisitos para crear una GmbH en Suiza</h2>
            </div>

            <div class="requisitos-grid">
                <ul class="requisitos-lista animate-on-scroll fade-up">
                    <li><strong>Capital social</strong> de <strong>20.000 CHF</strong> - 100% desembolsado</li>
                    <li>Un <strong>administrador</strong> residente en <strong>Suiza</strong> (puede ser fiduciario)</li>
                    <li>Domicilio social en <strong>Suiza</strong></li>
                    <li>Cuenta bancaria suiza abierta antes de constituir</li>
                    <li><strong>Estatutos</strong> segun el Codigo de Obligaciones suizo</li>
                </ul>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>Donde se atasca el 80% de proyectos:</strong> la apertura bancaria. Los bancos suizos no abren cuentas a cualquiera. Nosotros tenemos los contactos.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 4: COSTES -->
    <section class="servicios-content section-alt" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Cuanto cuesta y cuando se paga sola</h2>
            </div>

            <div class="tablas-costes-grid">
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                    <h3 class="tabla-titulo">Inversion inicial</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Capital social (tuyo, no es gasto)</td>
                                <td><strong>20.000 CHF</strong></td>
                            </tr>
                            <tr>
                                <td>Notaria + registro</td>
                                <td>1.500-2.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Asesoramiento legal y fiscal</td>
                                <td>2.500-4.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Domicilio social (1er ano)</td>
                                <td>1.200-3.000 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total constitucion</strong></td>
                                <td><strong>5.700-10.500 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                    <h3 class="tabla-titulo">Coste anual</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Contabilidad y cierre</td>
                                <td>2.000-5.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Domicilio social</td>
                                <td>1.200-3.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Administrador fiduciario</td>
                                <td>2.000-4.000 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total anual</strong></td>
                                <td><strong>5.200-12.000 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Haz los numeros:</strong> 300.000 CHF de beneficio. En Espana (25%): 75.000 CHF. En Suiza (13%): 39.000 CHF. <strong>Ahorro: 36.000 CHF/ano</strong>. La GmbH se paga sola el primer ano.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 5: PROCESO SIMPLIFICADO -->
    <section class="servicios-content" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como constituimos tu GmbH en 6-8 semanas</h2>
            </div>

            <div class="proceso-timeline proceso-compact">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Semana 1-2: Diseno</h3>
                        <p>Elegimos <strong>canton</strong>, estructura y administracion.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Semana 2-4: Banco + Docs</h3>
                        <p>Abrimos cuenta, depositas capital, preparamos <strong>estatutos</strong>.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Semana 4-6: Constitucion</h3>
                        <p>Firma notarial e inscripcion en <strong>Registro Mercantil</strong>.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Semana 6-8: Operativa</h3>
                        <p>Alta en IVA, numero UID. Tu <strong>GmbH suiza</strong> lista para facturar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 6: PARA QUIEN -->
    <section class="servicios-content section-alt" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Es para ti una GmbH suiza?</h2>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>Si, si...</h3>
                    <ul>
                        <li>Facturas <strong>+150.000 CHF</strong> al ano</li>
                        <li>Tienes consultora, agencia o servicios digitales</li>
                        <li>Quieres optimizar fiscalidad legalmente</li>
                        <li>Necesitas credibilidad internacional</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>No, si...</h3>
                    <ul>
                        <li>Facturas <strong>menos de 100.000 CHF</strong></li>
                        <li>Buscas solo un buzon fiscal sin sustancia</li>
                        <li>Tu negocio es 100% local en Espana</li>
                        <li>No puedes justificar 20.000 CHF de capital</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p>¿Necesitas mas anonimato o inversores? Quiza te encaje mejor una <a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>"><strong>AG Suiza</strong></a>. Lo analizamos en la consulta.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 7: FAQ COMPACTO -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-1" id="faq-q1">
                        <span itemprop="name">¿Puedo crear una GmbH sin vivir en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Los socios pueden vivir en cualquier pais. Solo necesitas un <strong>administrador</strong> residente en <strong>Suiza</strong>. Nosotros ofrecemos ese servicio de administracion fiduciaria.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-2" id="faq-q2">
                        <span itemprop="name">¿Los 20.000 CHF de capital los pierdo?</span>
                    </button>
                    <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No. El <strong>capital social</strong> es tuyo. Se deposita en la cuenta de la empresa y puedes usarlo para operar desde el primer dia.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-3" id="faq-q3">
                        <span itemprop="name">¿Es legal? ¿Tendre problemas con Hacienda?</span>
                    </button>
                    <div class="faq-answer" id="faq-3" role="region" aria-labelledby="faq-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text"><strong>Suiza</strong> no es un paraiso fiscal. Tiene convenio de doble imposicion con Espana y cumple estandares OCDE. Crear una <strong>GmbH suiza</strong> es legal siempre que tenga sustancia economica real.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-4" id="faq-q4">
                        <span itemprop="name">¿Tengo que viajar a Suiza para firmar?</span>
                    </button>
                    <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No es obligatorio. Gestionamos poderes para que un representante firme en tu nombre. Muchos clientes constituyen su <strong>GmbH</strong> sin pisar <strong>Suiza</strong>.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-5" id="faq-q5">
                        <span itemprop="name">¿Y si despues de la consulta no sigo adelante?</span>
                    </button>
                    <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No pasa nada. La consulta de 230€ es independiente. Si sigues, se descuenta del presupuesto. Si no, habras invertido en claridad.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Links relacionados -->
    <section class="servicios-content section-alt links-section">
        <div class="container">
            <div class="servicios-grid servicios-grid-3 links-relacionados">
                <a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-1">
                    <h4>AG Suiza</h4>
                    <p>SA para inversores y anonimato</p>
                </a>
                <a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Holding Suiza</h4>
                    <p>Para varias empresas</p>
                </a>
                <a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Comparativa</h4>
                    <p>Todas las estructuras</p>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="servicios-content servicios-cta-section" aria-labelledby="cta-final-heading">
        <div class="container">
            <div class="cta-main-block cta-compact">
                <!-- Columna izquierda: Foto -->
                <div class="cta-photo-column">
                    <div class="cta-photo-circle">
                        <?php
                        $alejandra_photo = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');
                        ?>
                        <img src="<?php echo esc_url($alejandra_photo); ?>" alt="Alejandra - Asesora fiscal" width="150" height="150" loading="lazy">
                    </div>
                    <div class="cta-photo-name">Ale</div>
                    <div class="cta-photo-role">Fundadora GNS</div>
                </div>

                <!-- Columna derecha: Contenido -->
                <div class="cta-content-column">
                    <h2 id="cta-final-heading" class="cta-seo-title">Consulta inicial: 230€</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Cada mes que pasa sin optimizar tu estructura, pagas de mas. Llevamos +4 anos constituyendo sociedades en <strong>Suiza</strong> para empresarios <strong>hispanohablantes</strong>.</p>
                    </div>

                    <div class="cta-price-block animate-on-scroll fade-up">
                        <span class="cta-price counter-glow"><?php echo esc_html(gns_get_consultation_price()); ?></span>
                        <span class="cta-price-detail">1 hora · Se descuenta si sigues</span>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener">Agendar mi consulta</a>

                    <p class="cta-slots">Max 4 casos nuevos al mes</p>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for animations
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

    // FAQ Accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (question && answer) {
            question.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        const otherQuestion = otherItem.querySelector('.faq-question');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        if (otherQuestion) otherQuestion.setAttribute('aria-expanded', 'false');
                        if (otherAnswer) otherAnswer.setAttribute('hidden', '');
                    }
                });

                // Toggle current item
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

            // Keyboard navigation
            question.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        }
    });
});
</script>

<?php get_footer(); ?>
