<?php
/**
 * Template Name: Servicios - IVA Suiza (Ficha)
 * URL: /iva-suiza/
 *
 * ESTRATEGIA SEO: Página TRANSACCIONAL (El Gancho)
 * - Objetivo: Convertir visitantes en clientes que contraten gestión de IVA
 * - NO compite con el blog /iva-en-suiza-guia/ (que es informativo)
 *
 * KW Principal: gestoria iva suiza (transaccional)
 * KW Secundarias: servicio declaracion iva suiza, representante fiscal suiza,
 *                 gestion mwst suiza, asesoria iva suiza empresas
 *
 * Meta Title: Gestoria IVA Suiza para Empresas | Declaracion y Alta MWST | GNS Advisory
 * Meta Description: Servicio completo de gestion del IVA en Suiza: alta en registro MWST,
 * declaraciones trimestrales y representacion fiscal. Atencion en espanol. Desde 1.500 CHF/ano.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero - ENFOQUE TRANSACCIONAL
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/declaracion-renta-suiza/'), 'name' => 'Declaracion Impuestos'),
    array('url' => '', 'name' => 'Gestoria IVA Suiza')
);

$page_title = 'IVA en Suiza al 8,1% para que tu negocio sea más rentable';
$page_subtitle = 'Cómo gestionar el IVA en Suiza para recuperar tus gastos';
$page_description = 'El IVA en Suiza está al 8,1%. El más bajo de Europa. Eso significa que tu negocio es más competitivo desde el primer día. Te ayudamos con el registro, la gestión de facturas y la recuperación del impuesto en tus gastos operativos. Más dinero en tu bolsillo, menos en las arcas del Estado.';
$show_logo = true;

// Bloque de conversión - Top of the Fold (enfocado en el SERVICIO, no en educar)
$conversion_content = array(
    'main' => array(
        'Tu te dedicas a facturar.',
        'Nosotros gestionamos el IVA.',
        'Sin formularios en aleman. Sin plazos que recordar.'
    ),
    'sub' => array(
        'Alta en registro MWST. Declaraciones trimestrales. Optimizacion de deducciones.',
        'Todo gestionado por asesores fiscales que hablan tu idioma.',
        'Y si la AFC tiene alguna pregunta, respondemos nosotros.'
    ),
    'accent' => 'Llevamos mas de 4 anos gestionando el IVA de empresas suizas para hispanohablantes.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<!-- CTA Hero -->
<section class="hero-cta-section" style="background: #f8f9fa; padding: 2rem 0; text-align: center;">
    <div class="container">
        <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn btn-primary" aria-label="Reservar consulta sobre IVA en Suiza">
            Reservar consulta inicial (230€)
        </a>
    </div>
</section>

<main id="main-content" class="site-main servicios-ficha-page">

    <!-- SECCION 1: Por qué externalizar (enfoque SERVICIO) -->
    <section class="servicios-content" aria-labelledby="ventaja-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="ventaja-heading" class="section-seo-title">Por que contratar una gestoria para el IVA suizo</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    El sistema de IVA suizo (MWST) tiene sus propias reglas: declaraciones trimestrales en aleman, metodos de liquidacion diferentes al espanol y plazos que si no cumples generan recargos del 5%.
                </p>
            </div>

            <div class="servicios-grid servicios-grid-2" style="margin: 2rem 0;">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1" style="border-left: 4px solid #dc3545;">
                    <h3 style="color: #dc3545;">Si lo haces tu</h3>
                    <ul class="servicio-includes" style="--check-color: #dc3545;">
                        <li style="color: #6c757d;">Formularios en aleman o frances</li>
                        <li style="color: #6c757d;">4 plazos trimestrales que recordar</li>
                        <li style="color: #6c757d;">Elegir entre 3 metodos de liquidacion</li>
                        <li style="color: #6c757d;">Responder requerimientos de la AFC</li>
                        <li style="color: #6c757d;">Riesgo de errores y sanciones</li>
                    </ul>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2" style="border-left: 4px solid #28a745;">
                    <h3 style="color: #28a745;">Si lo hacemos nosotros</h3>
                    <ul class="servicio-includes">
                        <li>Todo gestionado en espanol</li>
                        <li>Te avisamos antes de cada plazo</li>
                        <li>Analizamos que metodo te conviene</li>
                        <li>Nos encargamos de la AFC</li>
                        <li>Cero preocupaciones fiscales</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>El coste de una gestoria de IVA en Suiza se paga solo.</strong> Una sancion por declaracion fuera de plazo es del 5% del IVA a ingresar. Si debes 10.000 CHF de IVA, son 500 CHF de multa. Nuestra gestion trimestral cuesta menos que eso.</p>
            </div>

        </div>
    </section>

    <!-- SECCION 2: Resumen tipos IVA (minimo, enlace al blog para detalles) -->
    <section class="servicios-content" aria-labelledby="tipos-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="tipos-heading" class="section-seo-title">Tipos de IVA que gestionamos</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    El sistema MWST suizo tiene tres tipos impositivos. Nosotros nos aseguramos de aplicar el correcto en cada operacion:
                </p>
            </div>

            <div class="servicios-grid servicios-grid-3" style="margin: 2rem 0;">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1" style="text-align: center; padding: 1.5rem;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: #1a365d;">8,1%</div>
                    <p style="margin: 0.5rem 0 0; color: #6c757d; font-size: 0.9rem;">General (servicios, productos)</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2" style="text-align: center; padding: 1.5rem;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: #1a365d;">2,6%</div>
                    <p style="margin: 0.5rem 0 0; color: #6c757d; font-size: 0.9rem;">Reducido (alimentacion, libros)</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-3" style="text-align: center; padding: 1.5rem;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: #1a365d;">3,8%</div>
                    <p style="margin: 0.5rem 0 0; color: #6c757d; font-size: 0.9rem;">Hotelero (alojamiento)</p>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up" style="background-color: #e7f5ff; border-left-color: #0077b6;">
                <p><strong>¿Quieres entender el sistema MwSt en profundidad?</strong> Hemos escrito una <a href="<?php echo esc_url(home_url('/iva-en-suiza-guia/')); ?>">guia tecnica completa del IVA en Suiza</a> donde explicamos metodos de liquidacion, operaciones exentas, plazos y mas. 22 minutos de lectura con todo lo que necesitas saber.</p>
            </div>

        </div>
    </section>

    <!-- SECCION 3: Alta en registro (enfoque SERVICIO) -->
    <section class="servicios-content" aria-labelledby="registro-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="registro-heading" class="section-seo-title">Te damos de alta en el registro MWST</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Si tu empresa factura mas de <strong>100.000 CHF/ano</strong>, el registro en el IVA suizo es obligatorio. Nosotros nos encargamos de todo el proceso de alta en la Administracion Federal de Contribuciones (AFC).
                </p>
            </div>

            <div class="servicios-grid servicios-grid-2" style="margin: 2rem 0;">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1">
                    <h3>Que hacemos en el alta</h3>
                    <ul class="servicio-includes">
                        <li>Preparamos toda la documentacion</li>
                        <li>Tramitamos el registro en ePortal ESTV</li>
                        <li>Obtenemos tu numero MWST</li>
                        <li>Configuramos el metodo de liquidacion optimo</li>
                        <li>Te explicamos tus obligaciones</li>
                    </ul>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2">
                    <h3>Representante fiscal</h3>
                    <p>Si tu empresa no tiene sede en Suiza, la AFC exige un <strong>representante fiscal</strong> con domicilio suizo. Actuamos como tu representante, asumiendo la responsabilidad solidaria ante la administracion.</p>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: #6c757d;">Esto elimina la necesidad de buscar un contacto local por tu cuenta.</p>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up" style="background-color: #fff3cd; border-left-color: #ffc107;">
                <p><strong>¿No llegas a 100.000 CHF?</strong> El registro voluntario puede interesarte si tienes mucho IVA soportado que recuperar o si tus clientes son empresas que esperan facturas con IVA. En la consulta inicial analizamos que te conviene.</p>
            </div>

        </div>
    </section>

    <!-- SECCION 4: Que incluye el servicio (reforzado) -->
    <section class="servicios-content" aria-labelledby="servicio-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="servicio-heading" class="section-seo-title">Que incluye nuestra gestoria de IVA en Suiza</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Gestion completa del ciclo MWST. Tu nos pasas facturas, nosotros hacemos el resto:
                </p>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1">
                    <h3>Alta en registro MWST</h3>
                    <p>Tramitamos tu registro en la AFC y obtenemos tu numero de IVA suizo. Incluye analisis del metodo de liquidacion optimo para tu actividad.</p>
                    <p class="servicio-precio"><strong>500-800 CHF</strong> (una vez)</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2">
                    <h3>Declaraciones trimestrales</h3>
                    <p>Preparamos y presentamos las 4 declaraciones anuales. Te avisamos antes de cada plazo, recogemos la documentacion y presentamos por ti.</p>
                    <p class="servicio-precio"><strong>1.500-3.000 CHF/ano</strong></p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-3">
                    <h3>Optimizacion de deducciones</h3>
                    <p>Revisamos cada factura de gasto para maximizar el IVA soportado deducible. No pagas un franco de mas.</p>
                    <p class="servicio-precio">Incluido en gestion trimestral</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-4">
                    <h3>Representacion ante AFC</h3>
                    <p>Si la Administracion Federal de Contribuciones tiene alguna pregunta o abre una comprobacion, respondemos nosotros.</p>
                    <p class="servicio-precio">Incluido en gestion trimestral</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-1">
                    <h3>Revision de facturas emitidas</h3>
                    <p>Verificamos que tus facturas cumplan los requisitos formales suizos: datos obligatorios, tipo correcto, formato valido.</p>
                    <p class="servicio-precio">Incluido en gestion trimestral</p>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2">
                    <h3>Asesoramiento operaciones especiales</h3>
                    <p>Exportaciones, importaciones, servicios digitales, operaciones con la UE. Te asesoramos sobre el tratamiento fiscal correcto.</p>
                    <p class="servicio-precio"><strong>230€/hora</strong> (consultas extra)</p>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up" style="margin-top: 2rem; background-color: #d4edda; border-left-color: #28a745;">
                <h3>Todo en espanol</h3>
                <p>No te dejamos solo con formularios en aleman. Toda la comunicacion contigo es en espanol. Los documentos para la AFC los preparamos nosotros en el idioma correspondiente.</p>
            </div>

        </div>
    </section>

    <!-- SECCION 5: Proceso -->
    <section class="servicios-content" aria-labelledby="proceso-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como trabajamos la gestion de tu IVA</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    El proceso es sencillo. Nosotros hacemos el trabajo tecnico, tu solo nos pasas la informacion basica.
                </p>
            </div>

            <div class="servicios-grid proceso-grid">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <div class="proceso-number">1</div>
                    <h3>Analisis inicial</h3>
                    <p>Revisamos tu situacion, determinamos si necesitas registrarte y planificamos la estrategia de IVA.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <div class="proceso-number">2</div>
                    <h3>Alta y configuracion</h3>
                    <p>Te registramos en la AFC, configuramos tu perfil y te explicamos como funciona el proceso.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <div class="proceso-number">3</div>
                    <h3>Gestion trimestral</h3>
                    <p>Cada trimestre recogemos facturas emitidas y recibidas, calculamos el IVA y presentamos la declaracion.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <div class="proceso-number">4</div>
                    <h3>Optimizacion continua</h3>
                    <p>Revisamos deducciones, detectamos oportunidades y te asesoramos para maximizar el ahorro.</p>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up" style="margin-top: 2rem; background-color: #fff3cd; border-left-color: #ffc107;">
                <h3>Plazos de declaracion trimestral</h3>
                <table style="width: 100%; margin-top: 1rem; font-size: 0.95rem;">
                    <tr><td><strong>Q1 (Ene-Mar):</strong></td><td>31 mayo</td></tr>
                    <tr><td><strong>Q2 (Abr-Jun):</strong></td><td>31 agosto</td></tr>
                    <tr><td><strong>Q3 (Jul-Sep):</strong></td><td>30 noviembre</td></tr>
                    <tr><td><strong>Q4 (Oct-Dic):</strong></td><td>28 febrero</td></tr>
                </table>
            </div>

        </div>
    </section>

    <!-- SECCION 6: Precios -->
    <section class="servicios-content" aria-labelledby="precios-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="precios-heading" class="section-seo-title">Cuanto cuesta la gestion del IVA en Suiza</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Te damos los precios claros. Sin sorpresas ni costes ocultos que aparecen despues.
                </p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Servicio</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alta inicial en registro IVA</td>
                            <td><strong>500-800 CHF</strong></td>
                        </tr>
                        <tr>
                            <td>Gestion trimestral (4 declaraciones/ano)</td>
                            <td><strong>1.500-3.000 CHF/ano</strong></td>
                        </tr>
                        <tr>
                            <td>Asesoramiento puntual (por consulta)</td>
                            <td><strong>230€/hora</strong></td>
                        </tr>
                        <tr class="total-row">
                            <td>Pack completo anual (alta + 4 declaraciones + asesoramiento)</td>
                            <td><strong>2.000-3.500 CHF/ano</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="servicios-content-header" style="margin-top: 1.5rem;">
                <p class="animate-on-scroll fade-up">
                    El precio depende del volumen de facturas y la complejidad de tus operaciones. Una empresa con 20 facturas al trimestre no es lo mismo que una con 200. En la consulta inicial te damos presupuesto cerrado para tu caso.
                </p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up" style="background-color: #d4edda; border-left-color: #28a745;">
                <h3>Comparativa de ahorro</h3>
                <p>Si tu empresa factura <strong>200.000 CHF al ano</strong>, la diferencia de IVA con Espana es de unos <strong>26.000 CHF anuales</strong> (13% de diferencia). El coste de gestion de 2.500 CHF/ano se paga solo mas de 10 veces.</p>
            </div>

        </div>
    </section>

    <!-- SECCION 7: Para quien -->
    <section class="servicios-content" aria-labelledby="paraquien-heading">
        <div class="container">

            <div class="section-seo-block">
                <h2 id="paraquien-heading" class="section-seo-title">Para quien es este servicio</h2>
            </div>

            <div class="servicios-grid servicios-grid-2">
                <div class="servicio-card animate-on-scroll slide-fade stagger-1" style="border-left: 4px solid #28a745;">
                    <h3 style="color: #28a745;">Ideal para</h3>
                    <ul class="servicio-includes">
                        <li>Empresas suizas que facturan +100.000 CHF/ano</li>
                        <li><a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH</a>, AG y Holdings con operaciones sujetas a IVA</li>
                        <li>Negocios con muchas facturas que gestionar</li>
                        <li>Empresarios que prefieren dedicar tiempo a su negocio</li>
                        <li>Empresas con operaciones internacionales (exportaciones, importaciones)</li>
                        <li>Quienes quieren asegurarse de no tener problemas con la AFC</li>
                    </ul>
                </div>
                <div class="servicio-card animate-on-scroll slide-fade stagger-2" style="border-left: 4px solid #dc3545;">
                    <h3 style="color: #dc3545;">No necesitas si</h3>
                    <ul class="servicio-includes" style="--check-color: #dc3545;">
                        <li style="color: #6c757d;">Facturas menos de 100.000 CHF y no quieres registro voluntario</li>
                        <li style="color: #6c757d;">Eres autonomo con facturacion muy baja</li>
                        <li style="color: #6c757d;">Solo tienes 2-3 facturas al trimestre y prefieres hacerlo tu</li>
                        <li style="color: #6c757d;">Ya tienes contable interno que domina el MWST</li>
                        <li style="color: #6c757d;">Tu actividad esta 100% exenta de IVA</li>
                        <li style="color: #6c757d;">No te importa el riesgo de errores o retrasos</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- SECCION 8: FAQ (orientadas al SERVICIO, no educativas) -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes sobre nuestra gestoria de IVA</h2>
            </div>

            <div class="faq-list">
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Puedo contratar solo la gestion de IVA sin otros servicios?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Si. El servicio de gestoria de IVA en Suiza se contrata de forma independiente. No necesitas tener la contabilidad, nominas ni otros servicios con nosotros. Muchos clientes solo nos contratan para el IVA.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Que informacion necesitais de mi cada trimestre?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Facturas emitidas, facturas recibidas con IVA suizo y extracto bancario del trimestre. Te enviamos un recordatorio con la lista exacta 2 semanas antes de cada cierre. La mayoria de clientes nos lo pasan en PDF o acceso a su software de facturacion.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Cuanto tardais en dar de alta mi empresa en el IVA suizo?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Entre 2 y 4 semanas desde que nos envias la documentacion completa. Si necesitas representante fiscal (empresas sin sede en Suiza), puede tardar 1-2 semanas mas por la documentacion adicional.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Actuais como representante fiscal ante la AFC?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Si. Si tu empresa no tiene domicilio en Suiza, la AFC exige un representante fiscal local. Nosotros asumimos ese rol y la responsabilidad solidaria que conlleva. Esta incluido en el precio de la gestion trimestral.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Que pasa si la AFC me envia un requerimiento?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Respondemos nosotros. Toda la comunicacion con la Administracion Federal de Contribuciones la gestionamos en tu nombre. Tu nos avisas (o nos llega directamente si somos representante fiscal) y nos encargamos de preparar la respuesta.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Gestionais el IVA de empresas que facturan a varios paises?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Si, es una de nuestras especialidades. Exportaciones a la UE, importaciones, servicios digitales B2B y B2C... Cada tipo de operacion tiene su tratamiento especifico en el IVA suizo y nos aseguramos de aplicarlo correctamente.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Cual es el precio exacto de vuestro servicio?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">El alta inicial cuesta entre 500-800 CHF. La gestion trimestral (4 declaraciones/ano) entre 1.500-3.000 CHF/ano segun volumen de facturas. En la consulta inicial (230€) analizamos tu caso y te damos presupuesto cerrado. Si decides seguir, ese coste se descuenta del proyecto.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" aria-expanded="false">
                        <span itemprop="name">Tengo mas dudas sobre como funciona el IVA suizo. Donde puedo informarme?</span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" style="display: none;">
                        <p itemprop="text">Hemos escrito una <a href="<?php echo esc_url(home_url('/iva-en-suiza-guia/')); ?>">guia tecnica completa del IVA en Suiza</a> donde explicamos todo: tipos impositivos, metodos de liquidacion, plazos, operaciones exentas, errores frecuentes y mas. 22 minutos de lectura con todo lo que necesitas saber antes de tomar una decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <?php
    $cta_title = 'Deja de preocuparte por el IVA suizo';
    $cta_subtitle = 'Gestion completa del IVA en Suiza para empresas';
    $cta_intro = 'Cada trimestre tienes que calcular IVA repercutido, restar el soportado, rellenar formularios en aleman y presentar antes del plazo. O puedes dejarlo en nuestras manos.<br><br>Llevamos mas de 4 anos gestionando el IVA de empresas suizas para hispanohablantes. Conocemos el sistema MWST, los formularios y los trucos para maximizar deducciones.<br><br>La consulta inicial cuesta 230€/hora. Analizamos tu situacion, te decimos si necesitas registrarte y te damos presupuesto cerrado para la gestion. Si decides seguir, ese coste se descuenta del proyecto.';
    $cta_button_text = 'Reservar consulta inicial';
    include(get_template_directory() . '/template-parts/servicios-cta.php');
    ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animaciones de scroll
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

        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');

            // Cerrar todos los demas
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.faq-answer').style.display = 'none';
                otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            // Abrir el actual si estaba cerrado
            if (!isActive) {
                item.classList.add('active');
                answer.style.display = 'block';
                question.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
