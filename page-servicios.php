<?php
/**
 * Template Name: Servicios - Hub Principal
 * URL: /servicios/
 * KW Principal: planificación fiscal
 * KW Secundarias: asesoria fiscal especializada, empresarios españoles y latinoamericanos, fiscalidad, estructuras
 *
 * Meta Title: Planificación fiscal en Suiza y ahorro para empresas 2026
 * Meta Description: Planificación fiscal en Suiza para asegurar lo que es tuyo. Diseñamos estructuras legales para que tu empresa pague el mínimo de impuestos posible.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => '', 'name' => 'Servicios')
);
$page_title = 'Planificación fiscal en Suiza para optimizar tus impuestos legalmente';
$page_subtitle = 'Una planificación fiscal inteligente para blindar tus beneficios';
$page_description = 'Una buena planificación fiscal en Suiza marca la diferencia entre crecer o sobrevivir mes a mes. Diseñamos estructuras legales a medida para que dejes de regalar dinero a Hacienda. Sin trucos. Sin atajos ilegales. Solo una estrategia clara para blindar tus beneficios y que tu patrimonio trabaje para ti, no contra ti.';

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-hub-page page-servicios">

    <!-- SECCION 1: CREAR EMPRESA -->
    <section class="servicios-content servicios-layout-2col" aria-labelledby="crear-empresa-heading">
        <div class="container">
            <div class="servicios-2col-wrapper">

                <!-- Columna izquierda: Texto + CTA -->
                <div class="servicios-col-text">
                    <div class="section-seo-block">
                        <h2 id="crear-empresa-heading" class="section-seo-title">Crea tu empresa en Suiza</h2>
                        <p class="section-seo-intro">Diseñamos la estructura societaria que mejor encaja con tu situacion. GmbH, Holding, AG o autonomo.</p>
                        <p class="section-seo-intro">No existe una estructura "mejor" universal. Existe la correcta para tu caso segun facturacion, pais de residencia y planes de crecimiento.</p>
                        <p class="section-seo-intro">Cada empresa que constituimos esta pensada para optimizar tu tributacion desde el primer dia.</p>
                    </div>
                    <div class="section-cta-wrapper">
                        <a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>" class="btn-primary">Ver servicios de creacion de empresas</a>
                    </div>
                </div>

                <!-- Columna derecha: Cards -->
                <div class="servicios-col-cards">
                    <div class="servicios-grid servicios-categorias-grid">

                        <!-- GmbH Suiza -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-1 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <rect x="8" y="16" width="32" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <path d="M16 16V12C16 9.79086 17.7909 8 20 8H28C30.2091 8 32 9.79086 32 12V16" stroke="currentColor" stroke-width="2"/>
                                    <line x1="24" y1="24" x2="24" y2="32" stroke="currentColor" stroke-width="2"/>
                                    <line x1="20" y1="28" x2="28" y2="28" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH Suiza</a></h3>
                            <p class="servicio-hook">Sociedad limitada. Capital 20.000 CHF. La mas comun para empresarios con residencia real.</p>
                            <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                        <!-- Holding Suiza -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-2 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <rect x="16" y="8" width="16" height="12" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <rect x="6" y="28" width="14" height="12" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <rect x="28" y="28" width="14" height="12" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="24" y1="20" x2="24" y2="24" stroke="currentColor" stroke-width="2"/>
                                    <line x1="13" y1="24" x2="35" y2="24" stroke="currentColor" stroke-width="2"/>
                                    <line x1="13" y1="24" x2="13" y2="28" stroke="currentColor" stroke-width="2"/>
                                    <line x1="35" y1="24" x2="35" y2="28" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>">Holding Suiza</a></h3>
                            <p class="servicio-hook">Para consolidar varias empresas. El 95% de los dividendos recibidos no tributan.</p>
                            <a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                        <!-- AG Suiza -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-3 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <rect x="8" y="12" width="32" height="28" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="20" x2="40" y2="20" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="8" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                                    <line x1="32" y1="8" x2="32" y2="12" stroke="currentColor" stroke-width="2"/>
                                    <text x="24" y="32" text-anchor="middle" font-size="10" fill="currentColor" font-weight="bold">AG</text>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG Suiza</a></h3>
                            <p class="servicio-hook">Sociedad anonima. Capital 100.000 CHF. Para empresas grandes o con inversores.</p>
                            <a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                        <!-- Autonomo en Suiza -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-4 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="14" r="6" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 40V36C12 31.5817 15.5817 28 20 28H28C32.4183 28 36 31.5817 36 36V40" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>">Autonomo en Suiza</a></h3>
                            <p class="servicio-hook">Einzelfirma. Sin capital minimo. Para freelances y consultores que empiezan.</p>
                            <a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCION 2: DECLARACIONES -->
    <section class="servicios-content servicios-layout-2col" aria-labelledby="declaraciones-heading">
        <div class="container">
            <div class="servicios-2col-wrapper servicios-2col-reverse">

                <!-- Columna izquierda: Cards -->
                <div class="servicios-col-cards">
                    <div class="servicios-grid servicios-categorias-grid servicios-grid-vertical">

                        <!-- IRPF en Suiza -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-1 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M12 8H36C37.1046 8 38 8.89543 38 10V38C38 39.1046 37.1046 40 36 40H12C10.8954 40 10 39.1046 10 38V10C10 8.89543 10.8954 8 12 8Z" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="16" x2="32" y2="16" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="24" x2="32" y2="24" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="32" x2="24" y2="32" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/declaracion-renta-suiza/')); ?>">IRPF en Suiza</a></h3>
                            <p class="servicio-hook">Declaracion de la renta a tres niveles. Del 22% al 35% segun canton y situacion.</p>
                            <a href="<?php echo esc_url(home_url('/declaracion-renta-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                        <!-- IVA en Suiza -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-2 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                                    <text x="24" y="28" text-anchor="middle" font-size="12" fill="currentColor" font-weight="bold">%</text>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>">IVA en Suiza</a></h3>
                            <p class="servicio-hook">8,1% para empresas que superan 100.000 CHF. El mas bajo de Europa occidental.</p>
                            <a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                    </div>
                </div>

                <!-- Columna derecha: Texto + CTA -->
                <div class="servicios-col-text">
                    <div class="section-seo-block">
                        <h2 id="declaraciones-heading" class="section-seo-title">Declaracion de impuestos en Suiza</h2>
                        <p class="section-seo-intro">El sistema fiscal suizo funciona a tres niveles: federal, cantonal y municipal. Cada declaracion requiere conocer las particularidades de tu canton y aplicar correctamente las deducciones disponibles.</p>
                        <p class="section-seo-intro">Gestionamos tu IRPF, IVA e impuesto de sociedades para que pagues lo justo y no un franco mas de lo necesario.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCION 3: OPTIMIZACION Y RESIDENCIA -->
    <section class="servicios-content servicios-layout-2col" aria-labelledby="optimizacion-heading">
        <div class="container">
            <div class="servicios-2col-wrapper">

                <!-- Columna izquierda: Texto -->
                <div class="servicios-col-text">
                    <div class="section-seo-block">
                        <h2 id="optimizacion-heading" class="section-seo-title">Optimizacion fiscal y cambio de residencia</h2>
                        <p class="section-seo-intro">Si ya vives en Suiza, probablemente estes pagando mas de lo necesario. El 80% de los clientes que llegan con estructura existente tienen margen de mejora.</p>
                        <p class="section-seo-intro">Los impuestos en Suiza varian hasta un 40% entre cantones. Zug, Schwyz y Nidwalden tienen los tipos mas bajos (11-12% en sociedades). Ginebra, Vaud y Basilea los mas altos (hasta 14%). No se trata solo de donde vives, sino de donde esta registrada tu empresa y como estructuras tus ingresos.</p>
                        <p class="section-seo-intro">Revisamos tu situacion y detectamos oportunidades de ahorro real cambiando de canton o ajustando tu estructura societaria.</p>
                        <p class="section-seo-intro">Si aun estas en España, planificamos tu transicion para cumplir la regla de los 183 dias, gestionar el exit tax si tu patrimonio supera 4 millones de euros, y aplicar correctamente el convenio de doble imposicion.</p>
                    </div>
                </div>

                <!-- Columna derecha: Cards -->
                <div class="servicios-col-cards">
                    <div class="servicios-grid servicios-grid-vertical">

                        <!-- Optimizacion por canton -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-1 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                                    <path d="M24 14V24L30 30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M36 12L40 8M8 40L12 36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/fiscalidad-cantones-suiza/')); ?>">Optimizacion por canton</a></h3>
                            <p class="servicio-hook">Analisis de tu estructura actual. Cambio de canton si tiene sentido.</p>
                            <a href="<?php echo esc_url(home_url('/fiscalidad-cantones-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                        <!-- Cambio de residencia fiscal -->
                        <article class="servicio-card estructura-card animate-on-scroll slide-fade stagger-2 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M24 6L6 18V42H18V30H30V42H42V18L24 6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                    <path d="M30 12V6H38V16" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><a href="<?php echo esc_url(home_url('/cambio-residencia-fiscal-suiza/')); ?>">Cambio de residencia fiscal</a></h3>
                            <p class="servicio-hook">De España a Suiza sin pagar impuestos en dos paises. Exit tax y convenio de doble imposicion.</p>
                            <a href="<?php echo esc_url(home_url('/cambio-residencia-fiscal-suiza/')); ?>" class="btn-secondary">Ver detalles</a>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCION 5: COMO TRABAJAMOS -->
    <section class="servicios-content como-trabajamos" aria-labelledby="como-trabajamos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="como-trabajamos-heading" class="section-seo-title">Como trabajamos</h2>
            </div>

            <div class="servicios-grid proceso-grid">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1 glow-on-appear">
                    <span class="proceso-number counter-glow">1</span>
                    <h3>Consulta inicial</h3>
                    <p>230€/hora. Analizamos tu situacion y te decimos si tiene sentido Suiza para ti. Si decides seguir, ese coste se descuenta del proyecto.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-2 glow-on-appear">
                    <span class="proceso-number counter-glow">2</span>
                    <h3>Propuesta personalizada</h3>
                    <p>Diseñamos la estructura optima para tu caso con presupuesto cerrado. Sin sorpresas.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-3 glow-on-appear">
                    <span class="proceso-number counter-glow">3</span>
                    <h3>Implementacion</h3>
                    <p>Nos encargamos de todo: notaria, registro mercantil, banco, permisos. Tu solo firmas.</p>
                </div>
                <div class="proceso-step animate-on-scroll slide-fade stagger-4 glow-on-appear">
                    <span class="proceso-number counter-glow">4</span>
                    <h3>Acompañamiento continuo</h3>
                    <p>No te dejamos solo con papeles. Declaraciones, dudas, cambios. Seguimos contigo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 6: CONTENIDO SEO NARRATIVO -->
    <section class="servicios-content seo-narrative-section" aria-labelledby="seo-narrative-heading">
        <div class="container">
            <div class="seo-narrative-content">
                <h2 id="seo-narrative-heading" class="section-seo-title">Por que Suiza es el destino fiscal mas inteligente para empresarios hispanohablantes</h2>

                <div class="seo-narrative-block">
                    <h3>La diferencia real entre tributar en España y en Suiza</h3>
                    <p>Un empresario que factura 500.000 euros al ano en España puede acabar pagando entre 175.000 y 225.000 euros en impuestos entre IRPF, Sociedades y cotizaciones. La misma facturacion en Suiza, con la estructura correcta y el canton adecuado, puede reducir esa carga a 55.000-80.000 euros. Eso son entre 100.000 y 150.000 euros de diferencia cada ano. No es evasion fiscal. Es planificacion fiscal legal aprovechando los convenios de doble imposicion entre paises.</p>

                    <p>Suiza no es un paraiso fiscal. Tiene impuestos. Tiene regulacion. Tiene transparencia con otros paises. Lo que tiene diferente es un sistema federal donde cada canton compite por atraer contribuyentes ofreciendo tipos impositivos distintos. Zug, Schwyz y Nidwalden tienen los tipos mas bajos. Zurich, Ginebra y Vaud los mas altos. La diferencia entre vivir en un canton u otro puede suponer un 40% mas o menos de impuestos.</p>
                </div>

                <div class="seo-narrative-block">
                    <h3>Quien puede beneficiarse de una estructura fiscal suiza</h3>
                    <p>No todo el mundo deberia mudarse a Suiza ni crear una empresa aqui. Tiene sentido si cumples al menos uno de estos criterios: facturas mas de 150.000 euros al ano y puedes trabajar de forma remota, tienes un patrimonio superior a 2 millones de euros que quieres proteger y optimizar, o diriges una empresa que puede operar desde cualquier ubicacion.</p>

                    <p>Si eres un empleado por cuenta ajena, un autonomo que necesita presencia fisica en España, o tu negocio depende de clientes locales que requieren tu presencia, Suiza probablemente no es la solucion. Y te lo diremos en la primera consulta antes de que gastes mas tiempo y dinero.</p>
                </div>

                <div class="seo-narrative-block">
                    <h3>El proceso real de establecerse fiscalmente en Suiza</h3>
                    <p>Mudarse a Suiza no es solo reservar un vuelo y alquilar un piso. Necesitas un permiso de residencia (B para empleados, C para residentes permanentes, L para estancias cortas). Necesitas demostrar medios economicos suficientes. Necesitas un seguro medico obligatorio desde el primer dia. Necesitas abrir una cuenta bancaria suiza, lo cual no es trivial si no tienes historial en el pais.</p>

                    <p>Si vas a crear una empresa, necesitas capital minimo (20.000 CHF para GmbH, 100.000 CHF para AG), un domicilio social en Suiza, un administrador residente, contabilidad segun normas suizas, y registro en el IVA si superas los 100.000 CHF de facturacion. Todo esto se puede hacer, pero hay que hacerlo bien desde el principio para evitar problemas con las autoridades fiscales de ambos paises.</p>
                </div>

                <div class="seo-narrative-block">
                    <h3>Los errores mas comunes que vemos en clientes que vienen de otras asesorias</h3>
                    <p>El 80% de los clientes que llegan con estructuras existentes tienen margen de mejora. Los errores mas frecuentes: estar registrado en el canton equivocado pagando un 15% mas de lo necesario, no haber planificado correctamente el exit tax al salir de España, tener la empresa en Suiza pero seguir siendo residente fiscal español por no cumplir los 183 dias, o haber montado una estructura demasiado compleja con holdings innecesarios que generan costes de mantenimiento sin aportar valor real.</p>

                    <p>Tambien vemos mucho el error contrario: estructuras demasiado simples para patrimonios grandes que dejarian ahorrar decenas de miles de euros con una planificacion adecuada. No hay una estructura "mejor" universal. Hay una estructura correcta para cada situacion segun facturacion, pais de origen, situacion familiar y planes de crecimiento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 7: FAQ -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes sobre nuestros servicios</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-1" id="faq-servicios-q1">
                        <span itemprop="name">¿Cuanto cuesta una consulta inicial?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-1" role="region" aria-labelledby="faq-servicios-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">La consulta inicial cuesta 230€ por hora. Si decides continuar con nosotros, ese importe se descuenta del presupuesto del proyecto.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-2" id="faq-servicios-q2">
                        <span itemprop="name">¿Trabajais solo con empresarios o tambien con particulares?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-2" role="region" aria-labelledby="faq-servicios-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Nos especializamos en empresarios y grandes patrimonios. No hacemos declaraciones de renta de empleados ni gestiones basicas de autonomos en España.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-3" id="faq-servicios-q3">
                        <span itemprop="name">¿Puedo contratar solo la creacion de empresa sin el resto?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-3" role="region" aria-labelledby="faq-servicios-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Cada servicio se puede contratar por separado. Aunque la mayoria de clientes acaban necesitando varios porque estan conectados.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-4" id="faq-servicios-q4">
                        <span itemprop="name">¿Cuantos clientes nuevos aceptais al mes?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-4" role="region" aria-labelledby="faq-servicios-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Maximo 4 casos nuevos al mes. Preferimos hacer bien pocos proyectos que hacer mal muchos. Por eso a veces hay lista de espera.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-5" id="faq-servicios-q5">
                        <span itemprop="name">¿Que pasa si mi caso no encaja con Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-5" role="region" aria-labelledby="faq-servicios-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Te lo decimos claramente en la consulta inicial. Preferimos perderte como cliente que meterte en una estructura que no tiene sentido para tu situacion.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-6" id="faq-servicios-q6">
                        <span itemprop="name">¿Cuanto se paga de impuestos en Suiza como empresario?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-6" role="region" aria-labelledby="faq-servicios-q6" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende del canton y la estructura. El impuesto de sociedades varia entre el 11% (Zug) y el 21% (Ginebra). El IRPF para personas fisicas oscila entre el 22% y el 35% segun canton y nivel de ingresos. El IVA es del 8,1%, el mas bajo de Europa occidental. Una estructura bien diseñada puede conseguir una carga fiscal efectiva del 15-20% frente al 45-50% que pagarias en España.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-7" id="faq-servicios-q7">
                        <span itemprop="name">¿Necesito vivir en Suiza para tener una empresa alli?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-7" role="region" aria-labelledby="faq-servicios-q7" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Puedes tener una empresa en Suiza sin vivir alli, pero necesitas un administrador residente. Sin embargo, si tu sigues siendo residente fiscal en España, tributaras en España por los beneficios de esa empresa. Para optimizar realmente, lo habitual es trasladar tambien tu residencia fiscal. Cada caso es diferente y hay que analizarlo en detalle.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-8" id="faq-servicios-q8">
                        <span itemprop="name">¿Cual es el mejor canton de Suiza para pagar menos impuestos?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-8" role="region" aria-labelledby="faq-servicios-q8" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Zug, Schwyz y Nidwalden tienen los tipos mas bajos. Pero "mejor" no significa solo "mas barato". Hay que considerar calidad de vida, coste de alquiler, acceso a servicios, proximidad al aeropuerto y tus preferencias personales. Vivir en Zug es mas caro que en otros cantones, asi que el ahorro fiscal puede compensarse con el mayor coste de vida. Analizamos tu situacion completa para encontrar el equilibrio optimo.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-9" id="faq-servicios-q9">
                        <span itemprop="name">¿Que es el exit tax y como me afecta al irme de España?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-9" role="region" aria-labelledby="faq-servicios-q9" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El exit tax es un impuesto que España cobra sobre las plusvalias latentes de tu patrimonio cuando dejas de ser residente fiscal. Se aplica si tienes un patrimonio superior a 4 millones de euros o participaciones superiores al 25% en empresas valoradas en mas de 1 millon. Se puede diferir si te mudas a la UE o Suiza, pero hay que planificarlo bien para no acabar pagando de mas.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-servicios-10" id="faq-servicios-q10">
                        <span itemprop="name">¿Cuanto cuesta crear una empresa en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-servicios-10" role="region" aria-labelledby="faq-servicios-q10" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende del tipo de empresa. Una GmbH (equivalente a SL) requiere 20.000 CHF de capital minimo mas unos 3.000-5.000 CHF de gastos de constitucion (notaria, registro, etc.). Una AG (equivalente a SA) requiere 100.000 CHF de capital minimo. Un autonomo (Einzelfirma) no tiene capital minimo. A esto hay que añadir los costes de asesoria para diseñar la estructura correcta, que varian segun la complejidad del caso.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

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
                    <h2 id="cta-final-heading" class="cta-title">¿No sabes que servicio necesitas?</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Normal. Cada caso es diferente.</p>
                        <p>Reserva una consulta inicial y te decimos exactamente que tiene sentido para tu situacion.</p>
                        <p>Si no encaja Suiza, tambien te lo decimos.</p>
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
                        <p>No te voy a perseguir.</p>
                        <p>No te voy a mandar 47 emails de seguimiento.</p>
                        <p>Si quieres hablar, aqui estoy.</p>
                        <p>Si no, tambien esta bien.</p>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener" aria-label="Reservar consulta inicial">Quiero dejar de regalar mi dinero</a>

                    <p class="cta-slots">Atiendo maximo 4 casos nuevos al mes.</p>
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
