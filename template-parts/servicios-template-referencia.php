<?php
/**
 * TEMPLATE DE REFERENCIA - Paginas de Servicio (Ficha)
 * =====================================================
 *
 * Este archivo NO se usa directamente. Es una GUIA para crear nuevas paginas de servicio.
 * Copia este template y adaptalo para cada nuevo servicio.
 *
 * ESTRUCTURA SEO OPTIMIZADA:
 * --------------------------
 * 1. Hero (NO MODIFICAR) - Con H1 + H2 + descripcion SEO + conversion block
 * 2. Hero Stats - 3 datos clave
 * 3. Seccion Problema/Que es - Texto narrativo (problema-solucion)
 * 4. Newsletter Banner #1 - Captura sutil (variante segun servicio)
 * 5. Ventajas - Grid de 4-6 cards (problemas que resuelve)
 * 6. Tabla Comparativa o Info Clave - Con datos duros
 * 7. Requisitos - Lista con checkmarks
 * 8. Costes - 2 tablas (constitucion + mantenimiento)
 * 9. Proceso - Timeline compacto (4 pasos)
 * 10. Para Quien / No recomendada - Grid 2 columnas
 * 11. FAQ - Accordion con Schema FAQPage
 * 12. Links Relacionados - Grid 3 cards
 * 13. Newsletter Banner #2 - Variante final (opcional)
 * 14. CTA Final - Foto + contenido + precio
 *
 * PRIORIDAD MOVIL:
 * ----------------
 * - Tablas con scroll horizontal + indicador "Desliza"
 * - Grids pasan a 1 columna en <768px
 * - Padding reducido
 * - Botones min-height 48px para tactil
 *
 * LONGITUD IDEAL: 1.500-2.500 palabras
 *
 * @package GNS_Advisory
 */

// ============================================================
// SECCION 1: CONFIGURACION DE LA PAGINA
// ============================================================

get_header();

// Variables para el Hero (OBLIGATORIAS)
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/crear-empresa-suiza/'), 'name' => 'Crear Empresa en Suiza'), // Categoria padre
    array('url' => '', 'name' => 'NOMBRE SERVICIO') // Pagina actual (sin URL)
);

// H2 con beneficio numerico (OBLIGATORIO)
$page_subtitle = 'El beneficio principal con datos concretos (ej: impuestos del 12-15%)';

// Descripcion SEO - parrafo largo con keywords (OBLIGATORIO, 80-150 palabras)
$page_description = 'Descripcion completa del servicio que incluya las keywords principales naturalmente. Debe explicar que es, para quien es, y por que elegirlo. Incluir datos numericos y comparaciones con Espana. Mencionar la experiencia de GNS Advisory (500+ estructuras, 4+ anos).';

// Bloque de conversion - Top of the Fold (OBLIGATORIO)
$conversion_content = array(
    'main' => array(
        'Dato impactante #1.',
        'Dato impactante #2.',
        'Comparacion con Espana.'
    ),
    'sub' => array(
        'Frase corta explicativa.',
        'Otra frase de refuerzo.'
    ),
    'accent' => 'Frase de cierre memorable con urgencia sutil.'
);

// Incluir el hero (NO MODIFICAR LA ESTRUCTURA DEL HERO)
include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-NOMBRE-SERVICIO">

    <!-- ============================================================
         SECCION 2: HERO STATS (3 datos clave)
         ============================================================ -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-value">VALOR 1</span>
                    <span class="hero-stat-label">Label 1</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-value">VALOR 2</span>
                    <span class="hero-stat-label">Label 2</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-value">VALOR 3</span>
                    <span class="hero-stat-label">Label 3</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener">CTA principal</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 3: PROBLEMA + QUE ES (Texto narrativo SEO)
         - Titulo H2 que plantea el PROBLEMA
         - 2-3 parrafos explicando que es y como resuelve el problema
         - Keywords naturales en negrita
         ============================================================ -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Titulo que plantea el problema del usuario</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Primer parrafo explicando <strong>que es</strong> el servicio. Incluir la <strong>keyword principal</strong> de forma natural. Explicar el equivalente en Espana si aplica.</p>

                <p>Segundo parrafo con <strong>datos concretos</strong>: porcentajes de impuestos, capital minimo, tiempos. Siempre comparar con la situacion en Espana para mostrar el beneficio.</p>

                <p>Tercer parrafo opcional con estadistica de GNS: "El X% de nuestros clientes eligen esta opcion" o similar para dar credibilidad.</p>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 4: NEWSLETTER BANNER #1 (Captura sutil)
         - Usar el template-part con la variante correcta
         - Variantes: 'default', 'empresas', 'gmbh', 'ag', 'holding', 'impuestos', 'residencia'
         ============================================================ -->
    <?php
    $newsletter_variant = 'default'; // Cambiar segun el servicio
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    ?>

    <!-- ============================================================
         SECCION 5: VENTAJAS (Grid de cards)
         - H2 orientado a "que problemas resuelve"
         - 4-6 cards con ventajas concretas
         - Cada card: H3 + parrafo breve
         - Sin iconos innecesarios (opcional solo si aportan)
         ============================================================ -->
    <section class="servicios-content section-alt" aria-labelledby="ventajas-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="ventajas-heading" class="section-seo-title">Que problemas resuelve [SERVICIO]</h2>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <h3>Ventaja 1: Dato concreto</h3>
                    <p>Explicacion breve comparando con Espana o situacion actual del usuario.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <h3>Ventaja 2: Dato concreto</h3>
                    <p>Explicacion breve con numeros si es posible.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <h3>Ventaja 3: Dato concreto</h3>
                    <p>Beneficio tangible y medible.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <h3>Ventaja 4: Dato concreto</h3>
                    <p>Otro beneficio relevante para el usuario.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 6: REQUISITOS (Lista con checkmarks)
         - H2 con "Requisitos para..."
         - Lista estructurada con puntos clave
         - Highlight box con el problema mas comun
         ============================================================ -->
    <section class="servicios-content" aria-labelledby="requisitos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Requisitos para [SERVICIO]</h2>
            </div>

            <div class="requisitos-grid">
                <ul class="requisitos-lista animate-on-scroll fade-up">
                    <li><strong>Requisito 1</strong> - detalle importante</li>
                    <li><strong>Requisito 2</strong> - detalle con keyword si aplica</li>
                    <li><strong>Requisito 3</strong> - especificar montos o tiempos</li>
                    <li><strong>Requisito 4</strong> - mencionar alternativas si existen</li>
                    <li><strong>Requisito 5</strong> - ultimo punto relevante</li>
                </ul>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>Donde se atasca el X% de proyectos:</strong> explicar el problema mas comun y como GNS lo resuelve.</p>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 7: COSTES (2 tablas lado a lado)
         - H2 con "Cuanto cuesta y cuando se paga sola"
         - Tabla 1: Inversion inicial (constitucion)
         - Tabla 2: Coste anual (mantenimiento)
         - Highlight box con calculo de ahorro

         IMPORTANTE MOVIL: Las tablas tienen scroll horizontal
         ============================================================ -->
    <section class="servicios-content section-alt" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Cuanto cuesta y cuando se paga sola</h2>
            </div>

            <div class="tablas-costes-grid">
                <!-- Tabla 1: Inversion inicial -->
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                    <h3 class="tabla-titulo">Inversion inicial</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Capital social (tuyo, no es gasto)</td>
                                <td><strong>XX.XXX CHF</strong></td>
                            </tr>
                            <tr>
                                <td>Concepto 2</td>
                                <td>X.XXX-X.XXX CHF</td>
                            </tr>
                            <tr>
                                <td>Concepto 3</td>
                                <td>X.XXX-X.XXX CHF</td>
                            </tr>
                            <tr>
                                <td>Concepto 4</td>
                                <td>X.XXX-X.XXX CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total constitucion</strong></td>
                                <td><strong>X.XXX-XX.XXX CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Tabla 2: Coste anual -->
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                    <h3 class="tabla-titulo">Coste anual</h3>
                    <table class="tabla-comparativa tabla-responsive">
                        <tbody>
                            <tr>
                                <td>Concepto anual 1</td>
                                <td>X.XXX-X.XXX CHF</td>
                            </tr>
                            <tr>
                                <td>Concepto anual 2</td>
                                <td>X.XXX-X.XXX CHF</td>
                            </tr>
                            <tr>
                                <td>Concepto anual 3</td>
                                <td>X.XXX-X.XXX CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total anual</strong></td>
                                <td><strong>X.XXX-XX.XXX CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Calculo de ahorro -->
            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Haz los numeros:</strong> XXX.XXX CHF de beneficio. En Espana (25%): XX.XXX CHF. En Suiza (13%): XX.XXX CHF. <strong>Ahorro: XX.XXX CHF/ano</strong>. [SERVICIO] se paga sola el primer ano.</p>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 8: PROCESO (Timeline compacto - 4 pasos)
         - H2 con "Como [hacemos/constituimos] en X semanas"
         - 4 pasos visuales
         - Cada paso: numero + H3 + descripcion breve
         ============================================================ -->
    <section class="servicios-content" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como lo hacemos en X-X semanas</h2>
            </div>

            <div class="proceso-timeline proceso-compact">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Semana 1-2: Fase 1</h3>
                        <p>Descripcion breve con <strong>keyword</strong> si aplica.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Semana X-X: Fase 2</h3>
                        <p>Descripcion de esta fase.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Semana X-X: Fase 3</h3>
                        <p>Descripcion de esta fase.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Semana X-X: Operativo</h3>
                        <p>Tu <strong>[SERVICIO]</strong> lista para operar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 9: PARA QUIEN ES / NO RECOMENDADA
         - H2 con pregunta "Es para ti?"
         - Grid 2 columnas: verde (ideal) vs rojo (no recomendada)
         - 4-5 items por columna
         - Highlight box con alternativa si no encaja
         ============================================================ -->
    <section class="servicios-content section-alt" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Es para ti [SERVICIO]?</h2>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>Si, si...</h3>
                    <ul>
                        <li>Condicion ideal 1 con <strong>datos</strong></li>
                        <li>Condicion ideal 2</li>
                        <li>Condicion ideal 3</li>
                        <li>Condicion ideal 4</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>No, si...</h3>
                    <ul>
                        <li>Situacion no recomendada 1</li>
                        <li>Situacion no recomendada 2</li>
                        <li>Situacion no recomendada 3</li>
                        <li>Situacion no recomendada 4</li>
                    </ul>
                </div>
            </div>

            <!-- Alternativa si no encaja -->
            <div class="highlight-box animate-on-scroll fade-up">
                <p>¿No encaja? Quiza te interese <a href="<?php echo esc_url(home_url('/otro-servicio/')); ?>"><strong>otro servicio</strong></a>. Lo analizamos en la consulta.</p>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 10: FAQ (Accordion con Schema FAQPage)
         - H2 "Preguntas frecuentes"
         - 5-7 preguntas relevantes
         - Schema markup para Google
         - Accordion interactivo
         ============================================================ -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <!-- FAQ 1 -->
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-1" id="faq-q1">
                        <span itemprop="name">Pregunta frecuente 1?</span>
                    </button>
                    <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Respuesta con <strong>keywords</strong> naturales. Ser conciso pero completo.</p>
                    </div>
                </article>

                <!-- FAQ 2 -->
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-2" id="faq-q2">
                        <span itemprop="name">Pregunta frecuente 2?</span>
                    </button>
                    <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Respuesta clara y directa.</p>
                    </div>
                </article>

                <!-- FAQ 3 -->
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-3" id="faq-q3">
                        <span itemprop="name">Pregunta frecuente 3?</span>
                    </button>
                    <div class="faq-answer" id="faq-3" role="region" aria-labelledby="faq-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Respuesta relevante.</p>
                    </div>
                </article>

                <!-- FAQ 4 -->
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-4" id="faq-q4">
                        <span itemprop="name">Pregunta sobre el proceso o tiempos?</span>
                    </button>
                    <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Respuesta con datos concretos.</p>
                    </div>
                </article>

                <!-- FAQ 5 -->
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-5" id="faq-q5">
                        <span itemprop="name">Pregunta sobre la consulta inicial?</span>
                    </button>
                    <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">La consulta de 230€ es independiente. Si sigues, se descuenta del presupuesto. Si no, habras invertido en claridad.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 11: LINKS RELACIONADOS
         - Grid de 3 cards con servicios relacionados
         - Ayuda al interlinking SEO
         ============================================================ -->
    <section class="servicios-content section-alt links-section">
        <div class="container">
            <div class="servicios-grid servicios-grid-3 links-relacionados">
                <a href="<?php echo esc_url(home_url('/servicio-1/')); ?>" class="link-card animate-on-scroll slide-fade stagger-1">
                    <h4>Servicio relacionado 1</h4>
                    <p>Descripcion breve</p>
                </a>
                <a href="<?php echo esc_url(home_url('/servicio-2/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Servicio relacionado 2</h4>
                    <p>Descripcion breve</p>
                </a>
                <a href="<?php echo esc_url(home_url('/servicio-3/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Comparativa</h4>
                    <p>Ver todas las estructuras</p>
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECCION 12: CTA FINAL (Foto + Contenido + Precio)
         - Layout 2 columnas: foto a la izquierda, contenido a la derecha
         - H2 con "Consulta inicial: 230€"
         - Precio destacado
         - Boton CTA
         - Nota de escasez: "Max 4 casos nuevos al mes"
         ============================================================ -->
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
                        <p>Parrafo breve sobre la urgencia de actuar y la experiencia de GNS con <strong>keywords</strong>.</p>
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

<!-- ============================================================
     JAVASCRIPT: Animaciones + FAQ Accordion
     (Mismo script para todas las paginas de servicio)
     ============================================================ -->
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
