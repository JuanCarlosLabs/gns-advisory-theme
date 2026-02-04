<?php
/**
 * Template Name: Servicios - IRPF Suiza Declaracion (Ficha)
 * URL: /irpf-suiza-declaracion/
 * Tipo: Ficha de servicio (TRANSACCIONAL)
 * Objetivo: VENDER - conseguir consultas de 230€
 * Longitud: 1.500-2.000 palabras
 * Categoria padre: /servicios/
 *
 * KW Principal: declaracion renta suiza (vol 50-100)
 * KW Secundarias: declaracion de la renta en suiza (<50), impuestos suiza (100-200),
 *                 IRPF suiza (<50), hacienda suiza (<50)
 *
 * Meta Title: Declaracion de la Renta en Suiza para Residentes | GNS Advisory (58 chars)
 * Meta Description: Gestionamos tu declaracion de la renta en Suiza a tres niveles: federal, cantonal y municipal.
 * Optimizacion fiscal legal. Mas de 500 declaraciones. Consulta 230€. (160 chars)
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => '', 'name' => 'Declaracion Renta Suiza')
);
$page_title = 'IRPF Suiza y los tramos fiscales para residentes y expatriados';
$page_subtitle = 'Paga el mínimo IRPF en Suiza aprovechando las deducciones legales';
$page_description = 'Entender el IRPF en Suiza te ahorra disgustos y dinero. Los tramos varían según el cantón, pero siempre son más bajos que en España. Te ayudamos a optimizar cada deducción legal para que conserves la mayor parte de tu sueldo. Porque ya trabajaste duro para ganarlo.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'La declaracion de la renta en Suiza no es como la de España.'
    ),
    'sub' => array(
        'Tres niveles. Deducciones cantonales. Patrimonio que tributa.',
        'Si la haces bien, pagas menos. Mucho menos.',
        'El problema es que la mayoria la hace mal.'
    ),
    'accent' => 'Una declaracion bien hecha puede ahorrarte miles de francos. Cada año.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-declaracion-renta-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave sobre declaracion de la renta en Suiza">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <line x1="3" y1="9" x2="21" y2="9"/>
                            <line x1="9" y1="21" x2="9" y2="9"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">3 niveles</span>
                    <span class="hero-stat-label">Federal, cantonal y municipal</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">11-35%</span>
                    <span class="hero-stat-label">Tipo efectivo segun canton</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">+500</span>
                    <span class="hero-stat-label">Declaraciones gestionadas</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener" aria-label="Agendar consulta para declaracion de renta">Que gestionen mi declaracion</a>
            </div>
        </div>
    </section>

    <!-- SECCION 1: PROBLEMA + CONTEXTO -->
    <section class="servicios-content" aria-labelledby="problema-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="problema-heading" class="section-seo-title">Tu gestor de España no entiende el sistema suizo</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>En España haces la <strong>declaracion de la renta</strong> una vez al año. Hacienda te prepara un borrador. Revisas, confirmas y listo.</p>

                <p>En <strong>Suiza</strong> no funciona asi. Aqui la declaracion se hace a <strong>tres niveles</strong>: federal, cantonal y municipal. Cada uno con sus propios tipos, sus propias <strong>deducciones</strong> y sus propios formularios. Y hay algo que sorprende a todo el mundo: en Suiza el <strong>patrimonio</strong> tambien tributa.</p>

                <p>El resultado es que muchos empresarios hispanohablantes pagan mas de lo que deberian. No porque el sistema sea injusto, sino porque no conocen las <strong>deducciones cantonales</strong>, aplican mal los tipos o se equivocan al declarar ingresos de varios paises.</p>

                <p>Si llevas años haciendo tu declaracion con un gestor local que no habla español, o peor, intentando hacerla tu mismo con Google Translate, estas dejando dinero sobre la mesa.</p>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER #1 -->
    <?php
    $newsletter_variant = 'renta';
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    ?>

    <!-- SECCION 2: SOLUCION - PROBLEMAS QUE RESOLVEMOS -->
    <section class="servicios-content section-alt" aria-labelledby="solucion-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="solucion-heading" class="section-seo-title">Que problemas resuelve un especialista en fiscalidad suiza</h2>
            </div>

            <div class="servicios-grid servicios-grid-3">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="12" width="32" height="28" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 8v4M16 8v4M32 8v4" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: No sabes que deducciones te corresponden</h3>
                    <p>Cada <strong>canton</strong> tiene deducciones diferentes. Desplazamiento al trabajo, formacion, hijos, oficina en casa. Si no las conoces, no las aplicas.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <text x="24" y="28" text-anchor="middle" font-size="12" fill="currentColor" font-weight="bold">%</text>
                        </svg>
                    </div>
                    <h3>Problema: Estas pagando de mas sin saberlo</h3>
                    <p>La diferencia entre cantones puede ser de un 40%. Vivir en Zug o en Ginebra cambia completamente tu <strong>carga fiscal</strong>.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L8 20v20h32V20L24 8z" stroke="currentColor" stroke-width="2"/>
                            <rect x="18" y="28" width="12" height="12" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: El patrimonio te pilla por sorpresa</h3>
                    <p>En España casi nadie paga <strong>impuesto sobre el patrimonio</strong>. En Suiza lo paga todo el mundo. Si no lo has calculado, te llevas un susto.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="16" cy="24" r="8" stroke="currentColor" stroke-width="2"/>
                            <circle cx="32" cy="24" r="8" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 16v16" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: Tienes ingresos de dos paises</h3>
                    <p>Dividendos de España, alquileres, pensiones. El <strong>convenio de doble imposicion</strong> es complejo. Aplicarlo mal te hace pagar dos veces.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-5">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 8H36C37.1046 8 38 8.89543 38 10V38C38 39.1046 37.1046 40 36 40H12C10.8954 40 10 39.1046 10 38V10C10 8.89543 10.8954 8 12 8Z" stroke="currentColor" stroke-width="2"/>
                            <line x1="16" y1="16" x2="32" y2="16" stroke="currentColor" stroke-width="2"/>
                            <line x1="16" y1="24" x2="32" y2="24" stroke="currentColor" stroke-width="2"/>
                            <line x1="16" y1="32" x2="24" y2="32" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: Los formularios estan en aleman</h3>
                    <p>O en frances. O en italiano. Dependiendo del canton. Un error de traduccion puede costarte miles de francos.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-6">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 14v10l7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Problema: Los plazos son distintos</h3>
                    <p>Cada canton tiene sus propios <strong>plazos</strong>. Presentar fuera de fecha significa recargos, estimaciones de oficio y multas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 3: COMO FUNCIONA - Lo que debes saber -->
    <section class="servicios-content" aria-labelledby="como-funciona-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="como-funciona-heading" class="section-seo-title">Lo que nadie te explica sobre la declaracion de la renta en Suiza</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>El sistema fiscal suizo es federal. Eso significa que pagas impuestos a tres administraciones diferentes, cada una con sus propias reglas.</p>
            </div>

            <div class="servicios-grid servicios-grid-3">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="12" width="32" height="28" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 8v4M16 8v4M32 8v4" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Impuesto Federal</h3>
                    <p>Igual para todos. Tipos progresivos hasta el 11,5%. No hay forma de reducirlo cambiando de canton.</p>
                </div>

                <div class="servicio-card animate-on-scroll slide-fade stagger-2">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L8 20v20h32V20L24 8z" stroke="currentColor" stroke-width="2"/>
                            <rect x="18" y="28" width="12" height="12" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Impuesto Cantonal</h3>
                    <p>Aqui es donde se marca la diferencia. Cada canton decide sus tipos y deducciones. La diferencia entre Zug y Ginebra es de 20 puntos.</p>
                </div>

                <div class="servicio-card animate-on-scroll slide-fade stagger-3">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 16v8l6 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Impuesto Municipal</h3>
                    <p>Un multiplicador sobre el cantonal. Dos pueblos del mismo canton pueden tener cargas fiscales muy distintas.</p>
                </div>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>La sorpresa del patrimonio:</strong> En Suiza tributas no solo por lo que ganas, sino por lo que tienes. Cuentas, inversiones, inmuebles, vehiculos. Todo suma. Los tipos van del 0,1% al 1% segun canton e importe. Si tienes 2 millones de patrimonio, puedes pagar entre 2.000 y 20.000 CHF al año solo por tenerlo.</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <h3 class="tabla-titulo">Tipos impositivos por canton (personas fisicas)</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Canton</th>
                            <th>Tipo maximo IRPF</th>
                            <th>Impuesto Patrimonio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Zug</strong></td>
                            <td>~22%</td>
                            <td>0,15-0,30%</td>
                        </tr>
                        <tr>
                            <td><strong>Schwyz</strong></td>
                            <td>~23%</td>
                            <td>0,15-0,25%</td>
                        </tr>
                        <tr>
                            <td><strong>Zurich</strong></td>
                            <td>~30%</td>
                            <td>0,20-0,35%</td>
                        </tr>
                        <tr>
                            <td><strong>Ginebra</strong></td>
                            <td>~35%</td>
                            <td>0,25-0,50%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECCION 4: COSTES -->
    <section class="servicios-content section-alt" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Cuanto cuesta gestionar tu declaracion y cuando se paga sola</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Un especialista cuesta mas que un gestor generalista. Pero un gestor generalista no conoce las <strong>deducciones cantonales</strong> ni sabe aplicar el <strong>convenio de doble imposicion</strong>. La pregunta no es cuanto cuesta, sino cuanto te ahorra.</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <h3 class="tabla-titulo">Coste del servicio segun complejidad</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Tipo de declaracion</th>
                            <th>Coste</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Declaracion sencilla</strong> (solo rentas suizas, un canton)</td>
                            <td>800-1.500 CHF</td>
                        </tr>
                        <tr>
                            <td><strong>Declaracion media</strong> (rentas de 2 paises, deducciones complejas)</td>
                            <td>1.500-2.500 CHF</td>
                        </tr>
                        <tr>
                            <td><strong>Declaracion compleja</strong> (multiples paises, patrimonio alto, holdings)</td>
                            <td>2.500-5.000 CHF</td>
                        </tr>
                        <tr>
                            <td><strong>Consulta inicial</strong> (analisis de situacion)</td>
                            <td>230€/hora</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <h4>Caso real: 8.400 CHF recuperados</h4>
                <p>Un cliente en Zurich llevaba 3 años sin deducir los gastos de oficina en casa. Revisamos su situacion, recuperamos <strong>8.400 CHF</strong> de declaraciones anteriores y optimizamos la actual para que pagara <strong>4.200 CHF menos</strong> cada año. El coste del servicio: 1.800 CHF. El ahorro del primer año: 12.600 CHF.</p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <h4>Caso real: 23.000 CHF recuperados</h4>
                <p>Un empresario con dividendos de una SL española estuvo dos años pagando impuestos en España Y en Suiza por lo mismo. Aplicacion incorrecta del <strong>convenio de doble imposicion</strong>. Cuando corregimos su situacion, recuperamos <strong>23.000 CHF</strong> de impuestos pagados de mas.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 5: PROCESO -->
    <section class="servicios-content" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como gestionamos tu declaracion de principio a fin</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>No queremos que te compliques. Tu dedicas entre 1 y 2 horas a recopilar documentos. Nosotros nos encargamos del resto.</p>
            </div>

            <div class="proceso-timeline">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Checklist de documentacion</h3>
                        <p>Te enviamos exactamente que documentos necesitamos. Certificados salariales, extractos bancarios, facturas de deducciones.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Revision y optimizaciones</h3>
                        <p>Analizamos tu situacion y detectamos <strong>deducciones</strong> que no estabas aplicando. Tambien revisamos años anteriores.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Preparacion de la declaracion</h3>
                        <p>Completamos la declaracion a los <strong>tres niveles</strong>: federal, cantonal y municipal. Tu no tocas ningun formulario.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Explicacion del resultado</h3>
                        <p>Te explicamos cuanto vas a pagar y por que. Revisas, preguntas lo que quieras y apruebas. 15-30 minutos.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-5">
                    <span class="proceso-number">5</span>
                    <div class="proceso-content">
                        <h3>Presentacion y gestion</h3>
                        <p>Presentamos en <strong>plazo</strong> y gestionamos cualquier requerimiento de <strong>Hacienda suiza</strong>. Tu no hablas con nadie.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-6">
                    <span class="proceso-number">6</span>
                    <div class="proceso-content">
                        <h3>Verificacion de liquidacion</h3>
                        <p>Cuando llega la liquidacion, la revisamos. Si hay algo que reclamar, lo hacemos nosotros.</p>
                    </div>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Resultado:</strong> Tu dedicas 1-2 horas a recopilar documentos y 15-30 minutos a revisar antes de presentar. El resto lo hacemos nosotros. Si Hacienda tiene preguntas, tambien las respondemos nosotros.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 6: PARA QUIEN -->
    <section class="servicios-content section-alt" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Necesitas un especialista o puedes hacerlo tu mismo?</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>No vamos a decirte que todo el mundo necesita un asesor fiscal. Hay casos en los que puedes hacerlo tu mismo sin problema. Y hay casos en los que intentarlo solo te va a costar dinero.</p>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>Te conviene un especialista si...</h3>
                    <ul>
                        <li>Tienes <strong>ingresos de mas de un pais</strong></li>
                        <li>Tu <strong>patrimonio</strong> supera los 500.000 CHF</li>
                        <li>Has cambiado de <strong>canton</strong> recientemente</li>
                        <li>Tienes participaciones en empresas</li>
                        <li>No dominas el aleman, frances o italiano</li>
                        <li>Quieres <strong>optimizar</strong>, no solo cumplir</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>Puedes hacerlo solo si...</h3>
                    <ul>
                        <li>Solo tienes rentas suizas de un empleo</li>
                        <li>Tu patrimonio es bajo y sencillo</li>
                        <li>Llevas años en el mismo canton sin cambios</li>
                        <li>Eres asalariado sin inversiones complejas</li>
                        <li>Hablas el idioma de tu canton con fluidez</li>
                        <li>Solo quieres presentar y olvidarte</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p>Si estas en la columna de la izquierda, el coste de un especialista se amortiza con creces. Si estas claramente en la derecha, un software estandar puede bastar. <strong>La consulta de 230€ sirve para esto:</strong> analizamos tu caso y te decimos honestamente si te compensa contratarnos.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 7: FAQ -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Dudas frecuentes sobre la declaracion de la renta en Suiza</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-renta-1" id="faq-renta-q1">
                        <span itemprop="name">¿Cuando hay que presentar la declaracion en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-renta-1" role="region" aria-labelledby="faq-renta-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El <strong>plazo ordinario</strong> es el 31 de marzo. Pero puedes pedir prorroga hasta septiembre o diciembre segun el canton. Nosotros siempre pedimos prorroga para tener tiempo de optimizar bien.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-renta-2" id="faq-renta-q2">
                        <span itemprop="name">¿Puedo deducir los gastos de mi hipoteca?</span>
                    </button>
                    <div class="faq-answer" id="faq-renta-2" role="region" aria-labelledby="faq-renta-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Los intereses de la hipoteca de tu vivienda son <strong>deducibles</strong>. Tambien los gastos de mantenimiento de inmuebles, con limites segun el canton.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-renta-3" id="faq-renta-q3">
                        <span itemprop="name">¿Que pasa si tengo ingresos de España?</span>
                    </button>
                    <div class="faq-answer" id="faq-renta-3" role="region" aria-labelledby="faq-renta-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Hay que aplicar correctamente el <strong>convenio de doble imposicion</strong>. Cada tipo de renta (dividendos, alquileres, pensiones) tiene un tratamiento diferente. Aplicarlo mal significa pagar dos veces o tener problemas con Hacienda.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-renta-4" id="faq-renta-q4">
                        <span itemprop="name">¿Puedo corregir declaraciones de años anteriores?</span>
                    </button>
                    <div class="faq-answer" id="faq-renta-4" role="region" aria-labelledby="faq-renta-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. En Suiza puedes solicitar la rectificacion de declaraciones de los ultimos años si detectas errores a tu favor. Nosotros revisamos siempre los 2-3 años anteriores de cada cliente nuevo.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-renta-5" id="faq-renta-q5">
                        <span itemprop="name">¿Por que 230€ por una consulta?</span>
                    </button>
                    <div class="faq-answer" id="faq-renta-5" role="region" aria-labelledby="faq-renta-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Porque analizamos tu caso en serio. No es una llamada comercial de 15 minutos. Es una hora con un asesor fiscal que revisa tu situacion, detecta optimizaciones y te dice que te conviene. Si decides trabajar con nosotros, esos 230€ se descuentan del presupuesto.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-renta-6" id="faq-renta-q6">
                        <span itemprop="name">¿Y si despues de la consulta decido no seguir?</span>
                    </button>
                    <div class="faq-answer" id="faq-renta-6" role="region" aria-labelledby="faq-renta-q6" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No pasa nada. La consulta es independiente del proyecto. Habras invertido 230€ en claridad sobre tu situacion fiscal. Muchos clientes usan esa informacion para tomar mejores decisiones aunque no sigan con nosotros.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Links relacionados -->
    <section class="servicios-content section-alt">
        <div class="container">
            <div class="servicios-grid servicios-grid-3 links-relacionados">
                <a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-1">
                    <h4>IVA en Suiza</h4>
                    <p>El 8,1% mas bajo de Europa occidental</p>
                </a>
                <a href="<?php echo esc_url(home_url('/optimizacion-fiscal/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Optimizacion Fiscal</h4>
                    <p>Cambia de canton y paga menos</p>
                </a>
                <a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Cambio de Residencia</h4>
                    <p>De España a Suiza sin pagar doble</p>
                </a>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER #2 -->
    <?php
    $newsletter_variant = 'renta';
    $newsletter_hook = array(
        '<strong>¿Todavia estas aterrizando en Suiza?</strong>',
        'Normal.',
        'El sistema fiscal suizo es complejo.',
        'Y hay mucha informacion mala por ahi.'
    );
    $newsletter_agitation = array(
        'Cada semana enviamos un email con consejos fiscales practicos.',
        'Casos reales. Optimizaciones concretas. Errores que debes evitar.',
        '<strong>Mas de 2.000 personas ya lo reciben.</strong>'
    );
    $newsletter_postdata = 'Mañana te cuento como funciona el impuesto sobre el patrimonio y como minimizarlo legalmente. Te puede ahorrar miles de francos.';
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    unset($newsletter_hook, $newsletter_agitation, $newsletter_postdata);
    ?>

    <!-- CTA FINAL -->
    <section class="servicios-content servicios-cta-section" aria-labelledby="cta-final-heading">
        <div class="container">
            <div class="cta-main-block">
                <!-- Columna izquierda: Foto -->
                <div class="cta-photo-column">
                    <div class="cta-photo-circle">
                        <?php
                        $alejandra_photo = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');
                        ?>
                        <img src="<?php echo esc_url($alejandra_photo); ?>" alt="Alejandra - Asesora fiscal especializada en Suiza" width="200" height="200" loading="lazy">
                    </div>
                    <div class="cta-photo-name">Ale</div>
                    <div class="cta-photo-role">Fundadora GNS Advisory</div>
                </div>

                <!-- Columna derecha: Contenido -->
                <div class="cta-content-column">
                    <p class="cta-title">Deja de regalar dinero a Hacienda.</p>
                    <h2 id="cta-final-heading" class="cta-seo-title">Declaracion de la renta en Suiza: consulta inicial de 230€</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Una <strong>declaracion</strong> mal hecha puede costarte miles de francos cada año en deducciones no aplicadas, convenios mal interpretados o errores que pasan desapercibidos.</p>

                        <p>Llevamos mas de 4 años gestionando declaraciones para empresarios hispanohablantes en <strong>Suiza</strong>. Conocemos las particularidades de cada <strong>canton</strong> porque es lo unico que hacemos.</p>
                    </div>

                    <div class="cta-price-block animate-on-scroll fade-up">
                        <span class="cta-price counter-glow"><?php echo esc_html(gns_get_consultation_price()); ?></span>
                        <span class="cta-price-detail">1 hora de consulta</span>
                    </div>

                    <div class="cta-conditions animate-on-scroll fade-up">
                        <p>Si seguimos trabajando juntos, se descuenta del proyecto.</p>
                        <p>Si no, habras invertido en claridad.</p>
                    </div>

                    <div class="cta-honesty animate-on-scroll fade-up">
                        <p><strong>Si tu caso es tan sencillo que no necesitas un especialista, te lo decimos.</strong></p>
                        <p>Preferimos que tomes la decision correcta a venderte algo que no necesitas.</p>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener" aria-label="Agendar consulta para declaracion de renta">Que gestionen mi declaracion</a>

                    <p class="cta-slots">Atiendo maximo 4 casos nuevos al mes.</p>

                    <!-- Banner Newsletter Compacto -->
                    <?php
                    $newsletter_variant = 'impuestos';
                    $newsletter_compact_headline = 'Si todavia estas aterrizando en Suiza, empieza por aqui';
                    $newsletter_compact_subtext = 'Cada semana enviamos consejos fiscales practicos. Casos reales, optimizaciones concretas. Sin spam. Gratis.';
                    $newsletter_button_text = 'Suscribirme gratis';
                    include(get_template_directory() . '/template-parts/newsletter-banner-compact.php');
                    ?>
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
