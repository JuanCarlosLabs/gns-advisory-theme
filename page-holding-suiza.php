<?php
/**
 * Template Name: Servicios - Holding Suiza (Ficha)
 * URL: /holding-suiza/
 * Tipo: Ficha de servicio (TRANSACCIONAL)
 * Objetivo: VENDER - conseguir consultas de 230€
 * Longitud: 1.600-2.000 palabras
 * Categoria padre: /crear-empresa-suiza/
 *
 * KW Principal: holding (vol 5000), holding suiza (<50)
 * KW Secundarias: holding en suiza (10), crear holding en suiza (<50), sociedad holding (<50)
 *
 * Meta Title: Holding en Suiza para Empresarios con Varias Sociedades | GNS Advisory (62 chars)
 * Meta Description: Crea tu Holding en Suiza y consolida tus empresas. El 95% de los dividendos recibidos no tributan. Impuesto de sociedades 12-15%. Mas de 500 estructuras. Consulta 230€. (165 chars)
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/crear-empresa-suiza/'), 'name' => 'Crear Empresa en Suiza'),
    array('url' => '', 'name' => 'Holding Suiza')
);
$page_title = 'Holding en Suiza para gestionar tus dividendos sin pagar de más';
$page_subtitle = 'Optimiza tus filiales con una holding en Suiza y ahorra el 95%';
$page_description = 'Crear una holding en Suiza es lo que hacen los empresarios que tienen varios negocios y están hartos de que Hacienda se lleve un trozo de cada movimiento. Exención del 95% en dividendos. Puedes mover capital entre tus empresas sin que te sangren por el camino. Centraliza, protege y optimiza. Todo legal.';

// Puntos clave del Hero
$hero_highlights = array(
    array('icon' => '💰', 'value' => '95%', 'label' => 'Dividendos exentos'),
    array('icon' => '📊', 'value' => '12-15%', 'label' => 'Impuesto de sociedades'),
    array('icon' => '🏢', 'value' => '+200', 'label' => 'Holdings constituidas')
);

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'El 95% de los dividendos que recibes de tus empresas NO tributan.'
    ),
    'sub' => array(
        'Lee eso otra vez.',
        'El noventa y cinco por ciento.',
        'Si tienes varias sociedades y no tienes un holding en Suiza, estás dejando una fortuna sobre la mesa.'
    ),
    'accent' => 'Cada mes que pasa sin esto, es dinero que regalas.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-servicios page-holding-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave de la Holding suiza">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">95%</span>
                    <span class="hero-stat-label">Dividendos exentos</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">12-15%</span>
                    <span class="hero-stat-label">Impuesto de sociedades</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <line x1="3" y1="9" x2="21" y2="9"/>
                            <line x1="9" y1="21" x2="9" y2="9"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">+200</span>
                    <span class="hero-stat-label">Holdings constituidas</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn-primary" target="_blank" rel="noopener">Quiero constituir mi Holding en Suiza</a>
            </div>
        </div>
    </section>

    <!-- SECCION 1: Que es una Holding suiza -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Que es una Holding suiza y como funciona la exencion de dividendos</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Una Holding es una sociedad cuya actividad principal es poseer participaciones en otras empresas. No vende productos ni presta servicios directamente. Su negocio es ser dueña de otras sociedades y recibir los dividendos que estas generan.
                </p>
                <p class="animate-on-scroll fade-up stagger-1">
                    ¿Por que crear una Holding en Suiza y no en otro pais? Por una ventaja fiscal brutal: la participation exemption o exencion de participaciones.
                </p>
                <p class="animate-on-scroll fade-up stagger-2">
                    Cuando tu Holding suiza recibe dividendos de sus filiales, el 95% de ese dinero no tributa. Lee eso otra vez. El 95% de los dividendos que recibe tu Holding estan exentos de impuestos si cumples los requisitos minimos.
                </p>
                <p class="animate-on-scroll fade-up stagger-3">
                    Eso significa que si tienes una empresa en España que genera 500.000€ de beneficios y los distribuye como dividendos a tu Holding suiza, solo tributas por el 5% de esa cantidad. Los otros 475.000€ llegan limpios a tu Holding y puedes reinvertirlos sin friccion fiscal.
                </p>
                <p class="animate-on-scroll fade-up stagger-4">
                    Esta es la razon por la que el 30% de los empresarios hispanohablantes que trabajan con nosotros eligen crear una Holding en Suiza. No es para todos, pero para quien tiene varias sociedades o inversiones diversificadas, es probablemente la mejor estructura societaria legal que existe en Europa.
                </p>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER COMPACTO #1 -->
    <section class="servicios-content" aria-label="Suscripcion newsletter">
        <div class="container">
            <?php
            $newsletter_variant = 'holding';
            include(get_template_directory() . '/template-parts/newsletter-banner-compact.php');
            ?>
        </div>
    </section>

    <!-- SECCION 2: Ventajas -->
    <section class="servicios-content" aria-labelledby="ventajas-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="ventajas-heading" class="section-seo-title">Ventajas de crear una Holding en Suiza</h2>
            </div>

            <div class="servicios-grid servicios-grid-3">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8v32M12 20h24M12 28h24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>95% de dividendos exentos</h3>
                    <p>Los dividendos que recibe tu Holding de sus filiales practicamente no tributan. Solo el 5% entra en la base imponible.</p>
                </div>
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M8 38L20 26l8 8 12-16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="38" cy="10" r="4" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Plusvalias por venta de participaciones exentas</h3>
                    <p>Si vendes una filial, la plusvalia tambien puede quedar exenta si cumples los requisitos de participacion minima.</p>
                </div>
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <text x="24" y="28" text-anchor="middle" font-size="12" fill="currentColor" font-weight="bold">%</text>
                        </svg>
                    </div>
                    <h3>Impuesto de sociedades del 12-15%</h3>
                    <p>Sobre el 5% que si tributa y sobre otros ingresos, pagas entre el 12% y el 15% segun el canton.</p>
                </div>
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L38 16v16L24 40 10 32V16L24 8z" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 24v16M10 16l14 8 14-8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Reinversion sin friccion</h3>
                    <p>El dinero que llega a tu Holding puedes moverlo a otras inversiones o filiales sin tributar cada vez que lo mueves.</p>
                </div>
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-5">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="20" width="32" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 20V14a8 8 0 0 1 16 0v6" stroke="currentColor" stroke-width="2"/>
                            <circle cx="24" cy="30" r="3" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Consolidacion de patrimonio</h3>
                    <p>Todas tus participaciones bajo un mismo paraguas. Mas orden, mas control, mejor planificacion sucesoria.</p>
                </div>
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-6">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 8v4M24 36v4M8 24h4M36 24h4M11.5 11.5l2.8 2.8M33.7 33.7l2.8 2.8M11.5 36.5l2.8-2.8M33.7 14.3l2.8-2.8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Acceso a tratados de doble imposicion</h3>
                    <p>Suiza tiene convenios con mas de 100 paises. Tu Holding puede recibir dividendos de casi cualquier lugar con retencion reducida.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 3: Participation Exemption -->
    <section class="servicios-content" aria-labelledby="exemption-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="exemption-heading" class="section-seo-title">La exencion de participaciones en Suiza explicada con numeros</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    La participation exemption es el corazon fiscal de una Holding suiza. Funciona asi:
                </p>
            </div>

            <div class="pricing-table animate-on-scroll fade-up stagger-1">
                <h3>Requisitos para aplicar la exencion</h3>
                <table class="tabla-precios">
                    <thead>
                        <tr>
                            <th>Requisito</th>
                            <th>Condicion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Participacion minima</td>
                            <td>10% del capital de la filial</td>
                        </tr>
                        <tr>
                            <td>O valor de mercado</td>
                            <td>Participacion con valor ≥ 1.000.000 CHF</td>
                        </tr>
                        <tr>
                            <td>Tipo de ingreso</td>
                            <td>Dividendos o plusvalias por venta de participaciones</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ejemplo-practico animate-on-scroll fade-up stagger-2">
                <h3>Ejemplo practico: dividendos de filial española</h3>
                <div class="comparativa-grid">
                    <div class="comparativa-box espana">
                        <h4>Sin Holding (cobras como persona fisica en España)</h4>
                        <ul>
                            <li>Dividendos: 300.000€</li>
                            <li>Retencion en origen: 19% = 57.000€</li>
                            <li>IRPF adicional: hasta 26% sobre el resto</li>
                            <li><strong>Total impuestos: ~70.000-80.000€</strong></li>
                            <li class="resultado">Te quedan: ~220.000-230.000€</li>
                        </ul>
                    </div>
                    <div class="comparativa-box suiza">
                        <h4>Con Holding suiza</h4>
                        <ul>
                            <li>Dividendos recibidos: 300.000€</li>
                            <li>Retencion España → Suiza (convenio): 0-15% = 0-45.000€</li>
                            <li>Base imponible en Suiza: 5% de 300.000€ = 15.000€</li>
                            <li>Impuesto suizo (12%): 1.800€</li>
                            <li><strong>Total impuestos: 1.800-46.800€</strong></li>
                            <li class="resultado">En tu Holding quedan: 253.200-298.200€ para reinvertir</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up stagger-3" style="background-color: #d4edda; border-left-color: #28a745;">
                <h3>Ahorro anual: entre 23.000€ y 78.000€</h3>
                <p>El ahorro real depende de varios factores: pais de origen de los dividendos, convenio de doble imposicion aplicable, y tu situacion personal. En la consulta inicial calculamos los numeros exactos para tu caso.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 4: Requisitos -->
    <section class="servicios-content" aria-labelledby="requisitos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Requisitos para constituir tu Holding suiza</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Una Holding suiza puede constituirse como <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH</a> o como <a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG</a>. Los requisitos basicos son:
                </p>
            </div>

            <div class="requisitos-lista animate-on-scroll fade-up stagger-1">
                <ul class="check-list">
                    <li>Capital social minimo de 20.000 CHF (GmbH) o 100.000 CHF (AG)</li>
                    <li>Al menos un socio (persona fisica o juridica, puede ser extranjero)</li>
                    <li>Un administrador con residencia en Suiza (puede ser fiduciario)</li>
                    <li>Domicilio social en Suiza</li>
                    <li>Objeto social que incluya la tenencia de participaciones</li>
                    <li>Cuenta bancaria suiza para depositar el capital</li>
                    <li>Estatutos que definan la actividad de holding</li>
                </ul>
            </div>

            <div class="pricing-table animate-on-scroll fade-up stagger-2">
                <h3>Capital segun estructura</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Estructura</th>
                            <th>Capital minimo</th>
                            <th>Desembolso</th>
                            <th>Recomendada para</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Holding GmbH</td>
                            <td>20.000 CHF</td>
                            <td>100%</td>
                            <td>Holdings pequeñas y medianas</td>
                        </tr>
                        <tr>
                            <td>Holding AG</td>
                            <td>100.000 CHF</td>
                            <td>50% (50.000 CHF)</td>
                            <td>Holdings grandes, con inversores o anonimato</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="highlight-box animate-on-scroll fade-up stagger-3" style="background-color: #e7f5ff; border-left-color: #0077b6;">
                <h3>Nota sobre GmbH vs AG</h3>
                <p>La mayoria de Holdings que constituimos son GmbH. La AG solo tiene sentido si necesitas anonimato de accionistas, planeas incorporar inversores externos o el volumen de activos justifica la estructura mas compleja.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 5: Costes -->
    <section class="servicios-content" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Cuanto cuesta crear y mantener una Holding en Suiza</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    Los costes de una Holding son similares a los de una GmbH o AG operativa, con algunas particularidades. Te damos los numeros reales:
                </p>
            </div>

            <div class="pricing-tables-wrapper animate-on-scroll fade-up stagger-1">
                <div class="pricing-table">
                    <h3>Costes de constitucion</h3>
                    <table class="tabla-comparativa">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Holding GmbH</th>
                                <th>Holding AG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Capital social</td>
                                <td>20.000 CHF</td>
                                <td>50.000-100.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Notaria y registro mercantil</td>
                                <td>1.500-2.500 CHF</td>
                                <td>2.500-4.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Asesoramiento legal y fiscal</td>
                                <td>3.000-5.000 CHF</td>
                                <td>4.000-7.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Domicilio social (primer año)</td>
                                <td>1.200-2.500 CHF</td>
                                <td>1.500-3.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Apertura cuenta bancaria</td>
                                <td>500-1.000 CHF</td>
                                <td>500-1.500 CHF</td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Total constitucion (sin capital)</strong></td>
                                <td><strong>6.200-11.000 CHF</strong></td>
                                <td><strong>9.000-16.000 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pricing-table">
                    <h3>Costes anuales de mantenimiento</h3>
                    <table class="tabla-precios">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Coste anual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Contabilidad y cierre</td>
                                <td>3.000-6.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Domicilio social</td>
                                <td>1.200-2.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Administrador fiduciario (si aplica)</td>
                                <td>2.000-5.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Auditoria (si superas limites)</td>
                                <td>4.000-10.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Gestion fiscal (convenios, retenciones)</td>
                                <td>1.500-3.000 CHF</td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Total mantenimiento</strong></td>
                                <td><strong>7.700-26.500 CHF/año</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up stagger-2" style="background-color: #d4edda; border-left-color: #28a745;">
                <h3>Regla general</h3>
                <p>Una Holding bien estructurada se paga sola. Si el ahorro fiscal anual supera los 30.000-50.000 CHF, los costes de mantenimiento son irrelevantes. La clave es que los numeros cuadren para tu caso concreto.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 6: Tipos de Holding -->
    <section class="servicios-content" aria-labelledby="tipos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="tipos-heading" class="section-seo-title">Tipos de Holding en Suiza segun tu situacion</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    No todas las Holdings son iguales. Segun tu situacion y objetivos, te conviene una u otra:
                </p>
            </div>

            <div class="pricing-table animate-on-scroll fade-up stagger-1">
                <h3>Comparativa de tipos de Holding</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Descripcion</th>
                            <th>Ideal para</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Holding pura</strong></td>
                            <td>Solo posee participaciones en otras empresas. No tiene actividad operativa propia. Maxima eficiencia fiscal.</td>
                            <td>Empresarios con 2+ sociedades operativas que quieren consolidar dividendos y reinvertir.</td>
                        </tr>
                        <tr>
                            <td><strong>Holding mixta</strong></td>
                            <td>Posee participaciones pero tambien tiene cierta actividad operativa (gestion, servicios a filiales).</td>
                            <td>Grupos empresariales que quieren centralizar servicios compartidos (contabilidad, RRHH, IT).</td>
                        </tr>
                        <tr>
                            <td><strong>Holding familiar</strong></td>
                            <td>Diseñada para consolidar el patrimonio de una familia y planificar la sucesion.</td>
                            <td>Familias empresarias que quieren organizar la transmision a la siguiente generacion.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="highlight-box animate-on-scroll fade-up stagger-2" style="background-color: #e7f5ff; border-left-color: #0077b6;">
                <h3>Nuestra experiencia</h3>
                <p>El 70% de las Holdings que constituimos son Holdings puras. Es la estructura mas sencilla y fiscalmente eficiente. Las Holdings mixtas tienen sentido cuando hay sinergias operativas reales entre las filiales. Las Holdings familiares requieren planificacion sucesoria especifica.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 7: Cantones -->
    <section class="servicios-content" aria-labelledby="cantones-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="cantones-heading" class="section-seo-title">Mejores cantones para tu Holding suiza</h2>
            </div>

            <div class="servicios-content-header">
                <p class="animate-on-scroll fade-up">
                    El canton donde constituyas tu Holding afecta directamente a los impuestos que pagas sobre el 5% de dividendos que si tributa y sobre cualquier otro ingreso.
                </p>
            </div>

            <div class="pricing-table animate-on-scroll fade-up stagger-1">
                <h3>Comparativa de cantones para Holdings</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Canton</th>
                            <th>Impuesto efectivo</th>
                            <th>Ventajas</th>
                            <th>Consideraciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Zug</td>
                            <td>~12%</td>
                            <td>El mas bajo. Muy profesionalizado.</td>
                            <td>Saturado, costes de oficina altos.</td>
                        </tr>
                        <tr>
                            <td>Schwyz</td>
                            <td>~12%</td>
                            <td>Similar a Zug, menos masificado.</td>
                            <td>Buena alternativa si Zug no encaja.</td>
                        </tr>
                        <tr>
                            <td>Nidwalden</td>
                            <td>~12%</td>
                            <td>Trato personal, menos burocracia.</td>
                            <td>Canton pequeño, menos servicios.</td>
                        </tr>
                        <tr>
                            <td>Zurich</td>
                            <td>~15%</td>
                            <td>Centro financiero, maxima credibilidad.</td>
                            <td>Impuestos algo mas altos.</td>
                        </tr>
                        <tr>
                            <td>Ginebra</td>
                            <td>~14%</td>
                            <td>Hub internacional, francofono.</td>
                            <td>Ideal para Holdings con filiales en paises francofonos.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="highlight-box animate-on-scroll fade-up stagger-2" style="background-color: #e7f5ff; border-left-color: #0077b6;">
                <h3>Nota sobre la eleccion del canton</h3>
                <p>Para una Holding pura, el canton importa menos que para una empresa operativa. No necesitas estar cerca de clientes ni de talento. Lo que importa es el tipo impositivo y la facilidad administrativa. Por eso Zug, Schwyz y Nidwalden son los favoritos.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 8: Para quien es -->
    <section class="servicios-content" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">Para quien es y para quien no es una Holding suiza</h2>
            </div>

            <div class="para-quien-grid animate-on-scroll fade-up">
                <div class="para-quien-box ideal">
                    <h3>✅ Ideal para</h3>
                    <ul>
                        <li>Empresarios con 2 o mas sociedades en diferentes paises</li>
                        <li>Inversores con carteras de participaciones diversificadas</li>
                        <li>Familias empresarias que quieren planificar sucesion</li>
                        <li>Grupos que quieren consolidar dividendos y reinvertir</li>
                        <li>Empresarios que venden y compran empresas regularmente</li>
                        <li>Perfiles que necesitan acceso a convenios de doble imposicion</li>
                    </ul>
                </div>
                <div class="para-quien-box no-recomendado">
                    <h3>❌ No recomendada si</h3>
                    <ul>
                        <li>Solo tienes una empresa y no planeas tener mas</li>
                        <li>Tu unica empresa factura menos de 200.000€/año</li>
                        <li>Buscas una estructura sin sustancia real</li>
                        <li>No tienes capacidad de aportar el capital minimo</li>
                        <li>Tus empresas no generan dividendos significativos</li>
                        <li>Quieres beneficios fiscales inmediatos sin inversion</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 9: FAQ -->
    <section class="servicios-content faq-section section-alt" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes sobre Holdings en Suiza</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-1" id="faq-holding-q1">
                        <span itemprop="name">¿Cuantas empresas necesito para que tenga sentido una Holding?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-1" role="region" aria-labelledby="faq-holding-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No hay minimo legal, pero en la practica tiene sentido con 2 o mas sociedades que generen al menos 100.000€ anuales en dividendos combinados. Por debajo de esa cifra, los costes de mantenimiento pueden no compensar.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-2" id="faq-holding-q2">
                        <span itemprop="name">¿Puedo crear una Holding suiza siendo español sin vivir en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-2" role="region" aria-labelledby="faq-holding-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Necesitas un administrador residente en Suiza, que puede ser un profesional fiduciario. GNS Advisory ofrece este servicio. Tu puedes seguir viviendo donde quieras.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-3" id="faq-holding-q3">
                        <span itemprop="name">¿Como funciona exactamente la exencion del 95%?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-3" role="region" aria-labelledby="faq-holding-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Los dividendos que recibe tu Holding de sus filiales se reducen en un 95% a efectos fiscales. Solo el 5% restante entra en la base imponible y tributa al tipo del canton (12-15%). El resultado es una tributacion efectiva inferior al 1% sobre los dividendos.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-4" id="faq-holding-q4">
                        <span itemprop="name">¿Puedo sacar dinero de la Holding a mi bolsillo?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-4" role="region" aria-labelledby="faq-holding-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, pero cuando lo hagas tributaras como persona fisica en tu pais de residencia. La ventaja de la Holding es diferir esa tributacion y reinvertir mientras tanto. Si vives en Suiza, los dividendos que te pagues tributan en tu IRPF suizo.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-5" id="faq-holding-q5">
                        <span itemprop="name">¿La Holding suiza funciona con filiales en cualquier pais?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-5" role="region" aria-labelledby="faq-holding-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Funciona con la mayoria de paises, pero el ahorro real depende del convenio de doble imposicion entre Suiza y el pais de la filial. Con España, el convenio permite retencion 0-15%. Con otros paises varia.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-6" id="faq-holding-q6">
                        <span itemprop="name">¿Que diferencia hay entre una Holding GmbH y una Holding AG?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-6" role="region" aria-labelledby="faq-holding-q6" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Principalmente el capital (20k vs 100k), el anonimato de socios (la AG permite mas privacidad) y la complejidad administrativa. Para la mayoria de casos, la Holding GmbH es suficiente.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-holding-7" id="faq-holding-q7">
                        <span itemprop="name">¿Cuanto tarda el proceso de constitucion?</span>
                    </button>
                    <div class="faq-answer" id="faq-holding-7" role="region" aria-labelledby="faq-holding-q7" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Entre 6 y 10 semanas dependiendo de si eliges estructura GmbH o AG. El proceso incluye planificacion, apertura de cuenta, constitucion notarial y registro mercantil.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Links relacionados -->
    <section class="servicios-content blog-link-section">
        <div class="container">
            <div class="servicios-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <div class="blog-link-box animate-on-scroll fade-up">
                    <p>Otras estructuras empresariales</p>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>">Autonomo (Einzelfirma)</a></li>
                    </ul>
                </div>
                <div class="blog-link-box animate-on-scroll fade-up stagger-1">
                    <p>Servicios relacionados</p>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>">Crear empresa en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/optimizacion-fiscal/')); ?>">Optimizacion fiscal</a></li>
                        <li><a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>">Residencia fiscal Suiza</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER COMPACTO #2 -->
    <section class="servicios-content" aria-label="Suscripcion newsletter">
        <div class="container">
            <?php
            $newsletter_variant = 'holding';
            $newsletter_compact_headline = 'Casos reales de Holdings cada semana en tu email';
            $newsletter_compact_subtext = 'Empresarios con varias sociedades. Numeros reales. Errores a evitar. 2 minutos de lectura.';
            include(get_template_directory() . '/template-parts/newsletter-banner-compact.php');
            ?>
        </div>
    </section>

    <!-- CTA FINAL - Version completa -->
    <section class="cta" id="cta" aria-labelledby="cta-heading">
        <div class="container">

            <!-- Bloque principal -->
            <div class="cta-main-block">

                <!-- Columna izquierda: Foto -->
                <div class="cta-photo-column">
                    <div class="cta-photo-circle">
                        <img src="<?php echo esc_url(home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp')); ?>"
                             srcset="<?php echo esc_url(home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp')); ?> 200w,
                                     <?php echo esc_url(home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp')); ?> 400w"
                             sizes="(max-width: 768px) 150px, 200px"
                             alt="Alejandra Ortiz"
                             width="200"
                             height="200"
                             loading="lazy">
                    </div>
                    <div class="cta-photo-name">Ale</div>
                    <div class="cta-photo-role">Fundadora GNS Advisory</div>
                </div>

                <!-- Columna derecha: Contenido -->
                <div class="cta-content-column">

                    <p class="cta-title">Tienes varias empresas. Y pagas impuestos como si tuvieras una.</p>
                    <h2 id="cta-heading" class="cta-seo-title">Consulta de Holding en Suiza: <?php echo esc_html(gns_get_consultation_price()); ?> la primera hora</h2>

                    <div class="cta-text">
                        <p>Si tienes dos o mas sociedades y no has explorado la opcion de una Holding suiza, probablemente estas dejando dinero sobre la mesa.</p>

                        <p class="cta-emphasis">El 95% de los dividendos exentos.</p>
                        <p class="cta-emphasis">Impuesto de sociedades del 12-15%.</p>
                        <p class="cta-emphasis">Reinversion sin friccion fiscal.</p>

                        <p>En una hora te digo si tiene sentido para tu caso concreto. Con numeros reales.</p>
                    </div>

                    <div class="cta-price-block">
                        <span class="cta-price counter-animate counter-glow"><?php echo esc_html(gns_get_consultation_price()); ?></span>
                        <span class="cta-price-detail">1 hora de consulta</span>
                    </div>

                    <div class="cta-conditions">
                        <p>Si seguimos trabajando juntos, se descuenta del proyecto.</p>
                        <p>Si no, habras invertido en claridad.</p>
                    </div>

                    <div class="cta-honesty">
                        <p>No te voy a perseguir.</p>
                        <p>No te voy a mandar 47 emails de seguimiento.</p>
                        <p>Si quieres hablar, aqui estoy.</p>
                        <p>Si no, tambien esta bien.</p>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary cta-button" aria-label="Reservar consulta de Holding en Suiza con GNS Advisory">
                        Quiero consolidar mis empresas
                    </a>

                    <p class="cta-slots">Atiendo maximo 4 casos nuevos al mes.</p>

                </div>

            </div>

            <!-- Bloque secundario: Newsletter -->
            <div class="cta-secondary-block">

                <div class="cta-newsletter">
                    <p class="cta-newsletter-intro">Pd: Si todavia no estas listo para hablar, puedes seguirme por email.</p>
                    <p class="cta-newsletter-desc">Mando casos reales de Holdings cada semana. Sin bla bla. Solo numeros y estrategias que puedes copiar.</p>

                    <div class="cta-newsletter-form">
                        <?php echo do_shortcode('[sibwp_form id=1]'); ?>
                    </div>

                    <p class="cta-newsletter-proof">Ya somos mas de 2.000. Si no te aporta, te das de baja en un clic.</p>
                </div>

            </div>

        </div>
    </section>

</main>

<!-- Schema Service -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Creacion de Holding en Suiza",
    "provider": {
        "@type": "Organization",
        "name": "GNS Advisory"
    },
    "description": "Servicio de constitucion de Holdings en Suiza para empresarios hispanohablantes con varias sociedades o inversiones diversificadas",
    "areaServed": "Suiza",
    "serviceType": "Asesoria fiscal y constitucion de empresas"
}
</script>

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
