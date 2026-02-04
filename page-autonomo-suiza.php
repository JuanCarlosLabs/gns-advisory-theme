<?php
/**
 * Template Name: Servicios - Autonomo Suiza (Ficha)
 * URL: /autonomo-suiza/
 * Tipo: Ficha de servicio (TRANSACCIONAL)
 * Objetivo: VENDER - conseguir consultas de 230€
 * Longitud: 1.400-1.800 palabras
 * Categoria padre: /crear-empresa-suiza/
 *
 * KW Principal: ser autonomo en suiza (vol 50)
 * KW Secundarias: autonomo en suiza (50), hacerse autonomo en suiza (<50)
 *
 * Meta Title: Autonomo en Suiza para Freelances y Consultores | GNS Advisory (58 chars)
 * Meta Description: Hazte autonomo en Suiza sin capital minimo. Einzelfirma para freelances hispanohablantes. Impuestos del 22-35% IRPF segun canton. Consulta inicial 230€. (156 chars)
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/crear-empresa-suiza/'), 'name' => 'Crear Empresa en Suiza'),
    array('url' => '', 'name' => 'Autonomo en Suiza')
);
$page_title = 'Ser autónomo en Suiza es la solución para pagar menos impuestos';
$page_subtitle = 'Cómo ser autónomo en Suiza sin cuotas abusivas ni burocracia';
$page_description = 'Ser autónomo en Suiza significa recuperar la libertad de quedarte con lo que ganas. Nada de cuotas mensuales que te asfixian aunque no factures. Nada de impuestos infinitos que te hacen dudar si merece la pena trabajar más. Aquí el sistema está diseñado para que prosperes, no para que sobrevivas.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'En España cobras 1.200€ y te quedas con 800.',
        'En Suiza cobras 7.000 CHF y te quedas con 5.500.'
    ),
    'sub' => array(
        'Sin capital mínimo. Sin socios. Sin complicaciones.',
        'Solo tú, tu trabajo y un país que no te castiga por ganarte la vida.'
    ),
    'accent' => 'Los números hablan solos.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-autonomo-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave del autonomo en Suiza">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">0 CHF</span>
                    <span class="hero-stat-label">Capital minimo</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">2-4 semanas</span>
                    <span class="hero-stat-label">Tiempo de alta</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">Minima</span>
                    <span class="hero-stat-label">Burocracia</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener" aria-label="Agendar consulta para hacerte autonomo en Suiza">Quiero hacerme autonomo en Suiza</a>
            </div>
        </div>
    </section>

    <!-- SECCION 1: PROBLEMA + CONTEXTO -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Estas pagando mas impuestos de los que deberia pagar un freelance</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>La <strong>Einzelfirma</strong> es el equivalente suizo al <strong>autonomo</strong> español. Pero antes de explicarte que es, dejame preguntarte algo.</p>

                <p>¿Cuantas veces has calculado cuanto te queda realmente despues de pagar IRPF y cuota de autonomo en España? ¿Cuantas veces has pensado que trabajas la mitad del año para Hacienda?</p>

                <p>Si eres freelance, consultor o profesional independiente que factura mas de 60.000 euros al año, probablemente estas pagando entre el 40% y el 50% entre IRPF y cotizaciones. En <strong>Suiza</strong>, con la misma facturacion, pagarias entre el 25% y el 35%.</p>

                <p><strong>Ser autonomo en Suiza</strong> es la forma mas sencilla de empezar a facturar legalmente en el pais. No necesitas <strong>capital minimo</strong>, no necesitas notario para constituirte y la burocracia es minima comparada con una <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH</a> o una <a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG</a>.</p>

                <p>La <strong>Einzelfirma</strong> es perfecta para freelances, consultores, diseñadores, programadores y cualquier profesional que trabaje solo y facture menos de 150.000 CHF al año. Por encima de esa cifra, una <strong>GmbH</strong> suele ser mas rentable.</p>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER #1 - Despues de Seccion 1 -->
    <?php
    $newsletter_variant = 'autonomo';
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    ?>

    <!-- SECCION 2: SOLUCION - VENTAJAS -->
    <section class="servicios-content section-alt" aria-labelledby="ventajas-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="ventajas-heading" class="section-seo-title">Que problemas resuelve ser autonomo en Suiza que España no puede</h2>
            </div>

            <div class="servicios-grid servicios-grid-3">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8v32M12 24h24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: Necesitas capital para empezar</h3>
                    <p>Con una <strong>Einzelfirma</strong> no necesitas depositar 20.000 CHF como en una <strong>GmbH</strong>. Empiezas con lo que tengas y facturas desde el primer dia. <strong>Capital minimo</strong>: 0 CHF.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <text x="24" y="28" text-anchor="middle" font-size="12" fill="currentColor" font-weight="bold">%</text>
                        </svg>
                    </div>
                    <h3>Problema: Pagas demasiados impuestos</h3>
                    <p>En España, un <strong>autonomo</strong> con 100.000€ de beneficio paga el 40-45%. En <strong>Suiza</strong>, en cantones como Zug o Schwyz, pagas el 25-32%. Mismo trabajo, mas dinero en tu bolsillo.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 14v10l7 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Problema: Demasiada burocracia</h3>
                    <p>En 2-4 semanas estas operativo. Sin notario, sin estatutos complejos, sin <strong>consejo de administracion</strong>. El alta es sencilla y rapida.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="14" width="32" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M8 22h32" stroke="currentColor" stroke-width="2"/>
                            <rect x="12" y="28" width="10" height="6" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <h3>Problema: Costes de mantenimiento altos</h3>
                    <p>La contabilidad de un <strong>autonomo en Suiza</strong> cuesta 2.000-5.000 CHF al año. Una <strong>GmbH</strong> cuesta el doble o el triple. Menos estructura, menos gastos.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-5">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <text x="24" y="28" text-anchor="middle" font-size="10" fill="currentColor" font-weight="bold">IVA</text>
                        </svg>
                    </div>
                    <h3>Problema: IVA desde el primer euro</h3>
                    <p>Si facturas menos de 100.000 CHF anuales, no tienes obligacion de registrarte en el <strong>IVA suizo</strong>. Menos papeles, mas simplicidad.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-6">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M10 24c0-8 6-14 14-14s14 6 14 14-6 14-14 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M24 38v4M24 6v4M10 24H6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M18 30l6-6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Problema: Atrapado en tu estructura</h3>
                    <p>Puedes convertirte en <strong>GmbH</strong> cuando crezcas. La transicion es sencilla y no pierdes antigüedad fiscal. Empiezas ligero, escalas cuando toca.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 3: REQUISITOS - Lo que debes saber antes -->
    <section class="servicios-content" aria-labelledby="requisitos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Lo que nadie te cuenta antes de hacerte autonomo en Suiza</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Muchos freelances descubren estos requisitos cuando ya han empezado el proceso. No cometas ese error. Esto es lo que necesitas para <strong>ser autonomo en Suiza</strong>:</p>
            </div>

            <div class="requisitos-grid">
                <ul class="requisitos-lista animate-on-scroll fade-up">
                    <li><a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>"><strong>Residencia legal en Suiza</strong></a> con permiso de trabajo (permiso B o C)</li>
                    <li>Direccion fiscal en territorio suizo - tienes que vivir alli</li>
                    <li>Alta en la caja de compensacion <strong>AVS</strong> de tu canton</li>
                    <li>Cuenta bancaria suiza (recomendable, no obligatoria)</li>
                    <li>Seguro de accidentes obligatorio</li>
                    <li>Seguro de salud (obligatorio para todos los residentes)</li>
                </ul>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>El problema mas comun:</strong> A diferencia de una <strong>GmbH</strong>, para <strong>ser autonomo en Suiza</strong> necesitas residir fisicamente en el pais. No puedes ser autonomo suizo viviendo en España. Si no quieres mudarte, la opcion es crear una <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH con administrador fiduciario</a>.</p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>Sobre el permiso de residencia:</strong> Para obtenerlo como <strong>autonomo</strong>, necesitas demostrar que tu actividad es viable economicamente. Esto suele requerir un plan de negocio y contratos o clientes ya asegurados.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 4: COSTES - Inversion vs Ahorro -->
    <section class="servicios-content section-alt" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Cuanto cuesta ser autonomo en Suiza y cuando se paga solo</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p><strong>Hacerte autonomo en Suiza</strong> es la opcion mas barata para empezar a facturar legalmente. La pregunta no es cuanto cuesta, sino cuanto te ahorra comparado con quedarte en España.</p>
            </div>

            <div class="tablas-costes-grid">
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                    <h3 class="tabla-titulo">Costes iniciales para darte de alta</h3>
                    <table class="tabla-comparativa">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Coste</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Capital social</strong></td>
                                <td><strong>0 CHF</strong> (no requerido)</td>
                            </tr>
                            <tr>
                                <td>Registro en el canton</td>
                                <td>0-200 CHF</td>
                            </tr>
                            <tr>
                                <td>Asesoramiento inicial</td>
                                <td>500-1.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Apertura cuenta bancaria</td>
                                <td>0-500 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total para empezar</strong></td>
                                <td><strong>500-2.200 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                    <h3 class="tabla-titulo">Costes anuales de mantenimiento</h3>
                    <table class="tabla-comparativa">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Coste anual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Contabilidad y declaracion</td>
                                <td>2.000-5.000 CHF</td>
                            </tr>
                            <tr>
                                <td><strong>AVS</strong> / Seguridad social</td>
                                <td>10-12% de beneficios</td>
                            </tr>
                            <tr>
                                <td>Seguro de accidentes (obligatorio)</td>
                                <td>500-1.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Segundo pilar (opcional hasta cierto umbral)</td>
                                <td>Variable</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total mantenimiento</strong></td>
                                <td><strong>2.500-6.500 CHF + cotizaciones</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Haz los numeros:</strong> Si facturas 100.000 CHF en España pagas ~39.000€ (IRPF + autonomo). En <strong>Suiza</strong> (canton Zug) pagas ~32.000 CHF (IRPF + AVS). La diferencia: 7.000 CHF al año que te quedas tu. En 3 años has recuperado todos los costes de mudarte.</p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>Nota importante:</strong> Las cotizaciones sociales (<strong>AVS</strong>) se calculan sobre tu beneficio neto, no sobre tu facturacion. Si facturas 80.000 CHF y tienes 20.000 CHF de gastos, pagas AVS sobre 60.000 CHF.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 5: IMPUESTOS -->
    <section class="servicios-content" aria-labelledby="impuestos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="impuestos-heading" class="section-seo-title">Cuanto paga un autonomo en Suiza de impuestos</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Como <strong>autonomo en Suiza</strong> tributas como persona fisica. Tus beneficios van directamente a tu <a href="<?php echo esc_url(home_url('/declaracion-renta-suiza/')); ?>">IRPF suizo</a>. El tipo efectivo depende del <strong>canton</strong> donde residas y de tu situacion familiar.</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <h3 class="tabla-titulo">IRPF por canton (ejemplo con 100.000 CHF de beneficio, soltero)</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Canton</th>
                            <th>IRPF aproximado</th>
                            <th>Tipo efectivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Zug</strong></td>
                            <td>18.000-22.000 CHF</td>
                            <td><strong>18-22%</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Schwyz</strong></td>
                            <td>19.000-23.000 CHF</td>
                            <td><strong>19-23%</strong></td>
                        </tr>
                        <tr>
                            <td>Nidwalden</td>
                            <td>19.000-24.000 CHF</td>
                            <td>19-24%</td>
                        </tr>
                        <tr>
                            <td>Zurich</td>
                            <td>24.000-28.000 CHF</td>
                            <td>24-28%</td>
                        </tr>
                        <tr>
                            <td>Ginebra</td>
                            <td>30.000-35.000 CHF</td>
                            <td>30-35%</td>
                        </tr>
                        <tr>
                            <td>Vaud</td>
                            <td>32.000-38.000 CHF</td>
                            <td>32-38%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                <h3 class="tabla-titulo">Cotizaciones sociales obligatorias</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Concepto</th>
                            <th>Porcentaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>AVS</strong> (jubilacion)</td>
                            <td>10,6% del beneficio</td>
                        </tr>
                        <tr>
                            <td>AI (invalidez)</td>
                            <td>Incluido en AVS</td>
                        </tr>
                        <tr>
                            <td>APG (perdida de ganancias)</td>
                            <td>Incluido en AVS</td>
                        </tr>
                        <tr>
                            <td>Seguro de accidentes</td>
                            <td>0,5-2% segun actividad</td>
                        </tr>
                        <tr class="fila-total">
                            <td><strong>Total cotizaciones</strong></td>
                            <td><strong>~12-14% del beneficio</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="para-quien-grid animate-on-scroll fade-up">
                <div class="para-quien-col ideal">
                    <h3>Freelance en Zug con 100.000 CHF de beneficio</h3>
                    <ul>
                        <li>IRPF cantonal + federal: ~20.000 CHF</li>
                        <li>AVS y cotizaciones: ~12.000 CHF</li>
                        <li><strong>Total: ~32.000 CHF (32% tipo efectivo)</strong></li>
                        <li><strong>Te quedan: ~68.000 CHF limpios</strong></li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada">
                    <h3>El mismo freelance en España con 100.000€</h3>
                    <ul>
                        <li>IRPF: ~35.000€</li>
                        <li>Autonomo: ~4.200€</li>
                        <li><strong>Total: ~39.200€ (39% tipo efectivo)</strong></li>
                        <li><strong>Te quedan: ~60.800€ limpios</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 6: PROCESO - Como lo hacemos -->
    <section class="servicios-content section-alt" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como te damos de alta como autonomo en Suiza en 2-4 semanas</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>El proceso para <strong>hacerte autonomo en Suiza</strong> es mucho mas sencillo que constituir una sociedad. Puedes intentar hacerlo por tu cuenta, pero si no conoces el sistema, perderas semanas en gestiones que nosotros resolvemos en dias.</p>
            </div>

            <div class="proceso-timeline">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Semana 1: Planificacion y estructura</h3>
                        <p>Verificamos tu permiso de residencia, elegimos la caja <strong>AVS</strong> mas conveniente y planificamos tu estructura fiscal segun el <strong>canton</strong>.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Semana 1-2: Alta en AVS</h3>
                        <p>Te registramos como <strong>autonomo</strong> en la caja de compensacion de tu canton. Este es el paso clave que te permite facturar legalmente.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Semana 2: Cuenta bancaria</h3>
                        <p>Abrimos cuenta bancaria profesional. Es opcional pero recomendable para separar finanzas personales y de negocio.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Semana 2-3: Seguros obligatorios</h3>
                        <p>Contratamos seguro de accidentes obligatorio y revisamos tu cobertura de salud.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-5">
                    <span class="proceso-number">5</span>
                    <div class="proceso-content">
                        <h3>Semana 3-4: Registro y operativa</h3>
                        <p>Si facturas +100.000 CHF, alta en <strong>Registro Mercantil</strong> y en <strong>IVA</strong>. Tu <strong>Einzelfirma</strong> esta lista para facturar.</p>
                    </div>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Resultado:</strong> En 2-4 semanas tienes tu alta como <strong>autonomo en Suiza</strong> completada, con cuenta bancaria, seguros y todo en regla. Sin sorpresas, sin retrasos, sin errores que te cuesten dinero.</p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>Sobre el Registro Mercantil:</strong> Solo es obligatorio si facturas mas de 100.000 CHF anuales. Por debajo de esa cifra, puedes operar sin inscribirte. Pero el registro aporta credibilidad y es gratuito en muchos cantones.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 7: AUTONOMO VS GMBH - Decision -->
    <section class="servicios-content" aria-labelledby="comparativa-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="comparativa-heading" class="section-seo-title">¿Autonomo o GmbH en Suiza segun tu facturacion?</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Esta es la pregunta que nos hace el 70% de los freelances que llegan aqui. Y es una pregunta importante porque elegir mal te puede costar miles de francos en estructura innecesaria o en impuestos de mas.</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <table class="tabla-comparativa tabla-responsive">
                    <thead>
                        <tr>
                            <th>Lo que necesitas</th>
                            <th>Autonomo te lo da</th>
                            <th>GmbH te lo da</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Empezar sin capital</strong></td>
                            <td><strong>Si</strong> - 0 CHF</td>
                            <td>No - 20.000 CHF</td>
                        </tr>
                        <tr>
                            <td><strong>Costes bajos de mantenimiento</strong></td>
                            <td><strong>Si</strong> - 2.500-6.500 CHF/año</td>
                            <td>No - 5.200-12.000 CHF/año</td>
                        </tr>
                        <tr>
                            <td><strong>Burocracia minima</strong></td>
                            <td><strong>Si</strong> - sin notario ni estatutos</td>
                            <td>No - constitucion formal</td>
                        </tr>
                        <tr>
                            <td><strong>Limitar responsabilidad</strong></td>
                            <td>No - patrimonio responde</td>
                            <td><strong>Si</strong> - limitada al capital</td>
                        </tr>
                        <tr>
                            <td><strong>Optimizar con beneficio alto</strong></td>
                            <td>No - IRPF progresivo</td>
                            <td><strong>Si</strong> - IS 12-15%</td>
                        </tr>
                        <tr>
                            <td><strong>Operar sin residir en Suiza</strong></td>
                            <td>No - residencia obligatoria</td>
                            <td><strong>Si</strong> - administrador fiduciario</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                <h3 class="tabla-titulo">Recomendacion segun tu facturacion anual</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Facturacion anual</th>
                            <th>Recomendacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&lt; 50.000 CHF</td>
                            <td><strong>Autonomo</strong> sin duda. Los costes de una GmbH no compensan.</td>
                        </tr>
                        <tr>
                            <td>50.000-100.000 CHF</td>
                            <td><strong>Autonomo</strong> en la mayoria de casos. Evaluar segun beneficio neto.</td>
                        </tr>
                        <tr>
                            <td>100.000-150.000 CHF</td>
                            <td>Zona gris. Depende de tus gastos deducibles y canton.</td>
                        </tr>
                        <tr>
                            <td>&gt; 150.000 CHF</td>
                            <td><strong>GmbH</strong> casi siempre. El ahorro fiscal compensa los costes extra.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>No te preocupes si ahora no lo tienes claro.</strong> En la consulta inicial analizamos tu situacion concreta y te decimos exactamente cual te conviene. Si una <strong>GmbH</strong> es mejor para ti, te lo diremos aunque ganemos menos con el proyecto.</p>
            </div>

            <div class="section-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>" class="btn btn-secondary" aria-label="Ver informacion completa sobre GmbH Suiza">¿Mejor una GmbH? Ver ficha completa</a>
            </div>
        </div>
    </section>

    <!-- SECCION 8: CUALIFICACION -->
    <section class="servicios-content section-alt" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Eres el tipo de profesional que necesita ser autonomo en Suiza?</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>No vamos a venderte el alta de <strong>autonomo</strong> si no te conviene. A veces una <strong>GmbH</strong> es mejor opcion. Pero si cumples alguno de estos perfiles, la <strong>Einzelfirma</strong> es probablemente lo que buscas:</p>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>Ser autonomo en Suiza es para ti si...</h3>
                    <ul>
                        <li><strong>Eres freelance o consultor</strong> que trabaja solo</li>
                        <li><strong>Facturas menos de 150.000 CHF</strong> al año</li>
                        <li><strong>Vas a residir en Suiza</strong> fisicamente</li>
                        <li><strong>Quieres empezar rapido</strong> sin complicaciones</li>
                        <li><strong>Buscas simplicidad</strong> en la gestion administrativa</li>
                        <li><strong>No tienes empleados</strong> ni planes de tenerlos pronto</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>No te recomendamos autonomo si...</h3>
                    <ul>
                        <li><strong>No vas a residir</strong> fisicamente en Suiza</li>
                        <li><strong>Facturas mas de 150.000 CHF</strong> con alto margen</li>
                        <li><strong>Tienes empleados</strong> o colaboradores fijos</li>
                        <li><strong>Necesitas limitar</strong> tu responsabilidad personal</li>
                        <li><strong>Quieres incorporar socios</strong> o inversores</li>
                        <li><strong>Ya sabes que vas a escalar</strong> rapido</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p>Si has llegado hasta aqui y te ves reflejado en la columna de la izquierda, sigue leyendo. Si te ves en la derecha, echa un vistazo a la <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH suiza</a> - te permite operar sin residir en Suiza y optimiza mejor si tienes beneficios altos.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 9: FAQ - Objeciones de compra -->
    <section class="servicios-content faq-section" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Dudas que tienen los freelances antes de hacerse autonomo en Suiza</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-1" id="faq-autonomo-q1">
                        <span itemprop="name">¿Puedo ser autonomo en Suiza sin vivir alli?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-1" role="region" aria-labelledby="faq-autonomo-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No. A diferencia de una <strong>GmbH</strong>, para <strong>ser autonomo</strong> necesitas residir fisicamente en <strong>Suiza</strong> con permiso de trabajo. Si no quieres mudarte, la alternativa es crear una <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH con administrador fiduciario</a>.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-2" id="faq-autonomo-q2">
                        <span itemprop="name">¿Cuanto cuesta hacerse autonomo en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-2" role="region" aria-labelledby="faq-autonomo-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Entre 500 y 2.200 CHF para darte de alta. El mantenimiento anual (contabilidad, seguros) esta entre 2.500 y 6.500 CHF mas un 12-14% de tu beneficio en cotizaciones <strong>AVS</strong>.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-3" id="faq-autonomo-q3">
                        <span itemprop="name">¿Cuanto paga un autonomo en Suiza de impuestos?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-3" role="region" aria-labelledby="faq-autonomo-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende del <strong>canton</strong> y tu beneficio. Con 100.000 CHF de beneficio, en Zug pagas alrededor del 32% total (IRPF + cotizaciones). En Ginebra puede llegar al 45%. En España, con esa misma cifra, pagarias el 40-45%.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-4" id="faq-autonomo-q4">
                        <span itemprop="name">¿Necesito darme de alta en el IVA suizo?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-4" role="region" aria-labelledby="faq-autonomo-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Solo si facturas mas de 100.000 CHF anuales. Por debajo de esa cifra, el registro en <strong>IVA</strong> es voluntario. Esto simplifica mucho la gestion si estas empezando.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-5" id="faq-autonomo-q5">
                        <span itemprop="name">¿Puedo pasar de autonomo a GmbH mas adelante?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-5" role="region" aria-labelledby="faq-autonomo-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Es un proceso habitual cuando creces. Puedes aportar tu actividad a una <strong>GmbH</strong> nueva. El proceso lleva 4-6 semanas y cuesta entre 6.000 y 12.000 CHF. Muchos de nuestros clientes empiezan como <strong>autonomo</strong> y escalan cuando superan los 150.000 CHF.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-6" id="faq-autonomo-q6">
                        <span itemprop="name">¿Que responsabilidad tengo como autonomo en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-6" role="region" aria-labelledby="faq-autonomo-q6" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Ilimitada. Tu patrimonio personal responde de las deudas de tu actividad. Si esto te preocupa, considera una <strong>GmbH</strong> desde el principio. La mayoria de freelances no tienen este problema porque no generan deudas significativas.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-7" id="faq-autonomo-q7">
                        <span itemprop="name">¿Puedo facturar a clientes en España siendo autonomo suizo?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-7" role="region" aria-labelledby="faq-autonomo-q7" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, sin problema. Facturas desde <strong>Suiza</strong>, cobras en tu cuenta suiza y tributas en <strong>Suiza</strong>. El cliente español recibe una factura extracomunitaria. No hay ninguna limitacion sobre a quien puedes facturar.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-autonomo-8" id="faq-autonomo-q8">
                        <span itemprop="name">¿Y si despues de la consulta decido no seguir?</span>
                    </button>
                    <div class="faq-answer" id="faq-autonomo-8" role="region" aria-labelledby="faq-autonomo-q8" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No pasa nada. La consulta de 230€ es independiente del proyecto. Muchos freelances la usan simplemente para tener claridad y decidir si les conviene o no. Si sigues adelante, esos 230€ se descuentan del presupuesto total. Si no, has invertido en informacion de calidad.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Links relacionados -->
    <section class="servicios-content">
        <div class="container">
            <div class="servicios-grid servicios-grid-3 links-relacionados">
                <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-1">
                    <h4>GmbH Suiza</h4>
                    <p>La sociedad limitada suiza para empresarios</p>
                </a>
                <a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Crear Empresa en Suiza</h4>
                    <p>Comparativa de todas las estructuras</p>
                </a>
                <a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Residencia Fiscal Suiza</h4>
                    <p>Como obtener la residencia fiscal</p>
                </a>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER #2 - Antes del CTA Final -->
    <?php
    // Variante personalizada para el segundo banner
    $newsletter_variant = 'autonomo';
    $newsletter_hook = array(
        '<strong>Todavia no lo tienes claro?</strong>',
        'Normal.',
        'Mudarse a otro pais no es una decision trivial.',
        'Y hay mucha informacion contradictoria por ahi.'
    );
    $newsletter_agitation = array(
        'Por eso envio un email cada dia.',
        'Sin teoria. Sin humo. Sin vender cursos.',
        'Solo casos reales de freelances que ya estan en Suiza.'
    );
    $newsletter_postdata = 'Manana te cuento como funciona realmente el AVS y cuanto pagaras de cotizaciones. Es menos de lo que crees.';
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    // Reset variables
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
                    <p class="cta-title">Empieza a facturar en Suiza sin complicaciones.</p>
                    <h2 id="cta-final-heading" class="cta-seo-title">Autonomo en Suiza: consulta inicial de 230€</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Ser <strong>autonomo en Suiza</strong> es la forma mas sencilla de empezar. Pero hay decisiones importantes: que <strong>canton</strong> elegir, como estructurar tus gastos, cuando tiene sentido pasar a <strong>GmbH</strong>.</p>

                        <p>Llevamos mas de 4 anos ayudando a freelances y consultores hispanohablantes a instalarse en <strong>Suiza</strong>. Sabemos que errores evitar.</p>
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
                        <p><strong>Si una GmbH es mejor para tu situacion, te lo decimos.</strong></p>
                        <p>Preferimos que tomes la decision correcta a venderte algo que no necesitas.</p>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener" aria-label="Agendar consulta para hacerte autonomo en Suiza">Quiero hacerme autonomo en Suiza</a>

                    <p class="cta-slots">Atiendo maximo 4 casos nuevos al mes.</p>
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
    "name": "Alta como autonomo en Suiza",
    "provider": {
        "@type": "Organization",
        "name": "GNS Advisory"
    },
    "description": "Servicio de alta y asesoramiento para autonomos (Einzelfirma) en Suiza para freelances y consultores hispanohablantes",
    "areaServed": "Suiza",
    "serviceType": "Asesoria fiscal y alta de autonomos"
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
