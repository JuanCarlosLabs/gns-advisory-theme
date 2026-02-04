<?php
/**
 * Template Name: Servicios - AG Suiza (Ficha)
 * URL: /ag-suiza/
 * Tipo: Ficha de servicio (TRANSACCIONAL)
 * Objetivo: VENDER - conseguir consultas de 230€
 * Longitud: 1.500-2.000 palabras
 * Categoria padre: /crear-empresa-suiza/
 *
 * KW Principal: ag suiza (vol <50)
 * KW Secundarias: ag (vol 5000), sociedad anonima suiza (<50), crear empresa suiza (50)
 *
 * Meta Title: AG Suiza para Empresarios e Inversores | GNS Advisory (54 chars)
 * Meta Description: Constituye tu AG en Suiza con impuestos del 12-15%. Capital 100.000 CHF.
 * Ideal para empresas grandes y entrada de inversores. Mas de 500 estructuras. Consulta 230€. (160 chars)
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => home_url('/crear-empresa-suiza/'), 'name' => 'Crear Empresa en Suiza'),
    array('url' => '', 'name' => 'AG Suiza')
);
$page_title = 'AG Suiza para grandes inversores que buscan privacidad y ahorro';
$page_subtitle = 'Máxima discreción con tu AG Suiza y protección de capitales';
$page_description = 'La AG Suiza es para quien necesita discreción y una estructura de capital seria. Si gestionas grandes inversiones o quieres que tu nombre no aparezca en cada registro público, esta es tu opción. Privacidad real, carga fiscal mínima y la estabilidad de operar en el país más seguro del mundo. Así de simple.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'La estructura que eligen los que van en serio.'
    ),
    'sub' => array(
        '100.000 CHF de capital. Impuestos del 12-14%.',
        'Acceso a inversores. Flexibilidad real. Credibilidad suiza.',
        'Si tu negocio factura más de medio millón, necesitas saber esto.'
    ),
    'accent' => 'No es para todos. Pero si es para ti, cambia todo.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-ficha-page page-ag-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave de la AG suiza">
        <div class="container">
            <div class="hero-stats-grid">
                <div class="hero-stat animate-on-scroll slide-fade stagger-1">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">100.000 CHF</span>
                    <span class="hero-stat-label">Capital minimo (50.000 desembolsado)</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">12-15%</span>
                    <span class="hero-stat-label">Impuesto de sociedades</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">Ilimitados</span>
                    <span class="hero-stat-label">Accionistas e inversores</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener" aria-label="Agendar consulta para constituir AG en Suiza">Quiero constituir mi AG en Suiza</a>
            </div>
        </div>
    </section>

    <!-- SECCION 1: PROBLEMA + CONTEXTO -->
    <section class="servicios-content" aria-labelledby="que-es-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="que-es-heading" class="section-seo-title">Tu SL espanola te esta limitando y lo sabes</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>La <strong>AG</strong> (Aktiengesellschaft) es la <strong>sociedad anonima suiza</strong>. Pero antes de explicarte que es, dejame preguntarte algo.</p>

                <p>¿Cuantas veces has tenido que rechazar un inversor porque meter a un socio nuevo en tu SL es un lio de notario, estatutos y burocracia? ¿Cuantas veces has pensado en escalar tu negocio pero tu estructura societaria no te deja moverse?</p>

                <p>Si facturas mas de 500.000 euros al ano, tienes <strong>inversores</strong> interesados o quieres que tu nombre no aparezca en ningun registro publico, tu SL ya no te sirve. Y una <strong>GmbH</strong> suiza tampoco.</p>

                <p>Lo que necesitas es una <strong>AG suiza</strong>: <strong>acciones</strong> que puedes vender libremente, <strong>accionistas</strong> anonimos, <strong>impuesto de sociedades</strong> del 12-15%, y una estructura preparada para crecer. El <strong>capital minimo</strong> es de <strong>100.000 CHF</strong>, pero solo desembolsas 50.000 CHF de entrada.</p>

                <p>No es para todos. El 70% de empresarios estan mejor con una <strong>GmbH</strong>. Pero si estas leyendo esto, probablemente eres del 30% que necesita algo mas.</p>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER #1 - Despues de Seccion 1 -->
    <?php
    $newsletter_variant = 'ag';
    include(get_template_directory() . '/template-parts/newsletter-banner.php');
    ?>

    <!-- SECCION 2: SOLUCION - VENTAJAS -->
    <section class="servicios-content section-alt" aria-labelledby="ventajas-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="ventajas-heading" class="section-seo-title">Que problemas resuelve una AG suiza que tu estructura actual no puede</h2>
            </div>

            <div class="servicios-grid servicios-grid-3">
                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-1">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M34 21v-2a4 4 0 0 0-4-4H18a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                            <circle cx="24" cy="11" r="4" stroke="currentColor" stroke-width="2"/>
                            <path d="M42 37v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2"/>
                            <path d="M32 7a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2"/>
                            <path d="M6 37v-2a4 4 0 0 1 3-3.87" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 7a4 4 0 0 0 0 7.75" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: No puedes meter inversores facilmente</h3>
                    <p>Con una <strong>AG</strong> emites <strong>acciones</strong> y las vendes. Sin notario, sin modificar estatutos, sin esperar semanas. Un <strong>inversor</strong> entra hoy si quieres.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-2">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                            <text x="24" y="28" text-anchor="middle" font-size="12" fill="currentColor" font-weight="bold">%</text>
                        </svg>
                    </div>
                    <h3>Problema: Pagas demasiados impuestos</h3>
                    <p>En Espana, el <strong>impuesto de sociedades</strong> puede llegar al 25%. En <strong>Suiza</strong>, con una <strong>AG</strong> bien ubicada, pagas entre el 12% y el 15%. Mismo beneficio, menos para Hacienda.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-3">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="currentColor" stroke-width="2"/>
                            <circle cx="24" cy="20" r="6" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 36c0-4.418 3.582-8 8-8s8 3.582 8 8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: Tu nombre aparece en todos los registros</h3>
                    <p>En una <strong>AG</strong> los <strong>accionistas</strong> no salen en el <strong>registro mercantil</strong>. Solo el <strong>consejo de administracion</strong> es publico. Tu patrimonio, tu privacidad.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-4">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M8 40V16l16-8 16 8v24" stroke="currentColor" stroke-width="2"/>
                            <rect x="18" y="24" width="12" height="16" stroke="currentColor" stroke-width="2"/>
                            <line x1="24" y1="24" x2="24" y2="40" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Problema: Tu estructura no esta preparada para crecer</h3>
                    <p>Si algun dia quieres <strong>cotizar</strong> en bolsa o hacer una salida grande, solo la <strong>AG</strong> te lo permite. Con una <strong>GmbH</strong> o SL tendras que reestructurar todo.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-5">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L30 20H40L32 28L35 40L24 33L13 40L16 28L8 20H18L24 8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Problema: Los clientes grandes no te toman en serio</h3>
                    <p>Una <strong>AG suiza</strong> transmite solidez internacional. Para contratos con multinacionales o administraciones publicas, la estructura importa tanto como el servicio.</p>
                </div>

                <div class="servicio-card shadow-grow animate-on-scroll slide-fade stagger-6">
                    <div class="servicio-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="6" y="14" width="36" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                            <line x1="6" y1="22" x2="42" y2="22" stroke="currentColor" stroke-width="2"/>
                            <rect x="10" y="30" width="8" height="4" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <h3>Problema: Todos los socios tienen los mismos derechos</h3>
                    <p>En una <strong>AG</strong> puedes crear <strong>acciones</strong> ordinarias, preferentes, con o sin voto. Disenas el <strong>capital social</strong> para que cada socio tenga exactamente lo que le corresponde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION 3: REQUISITOS - Lo que debes saber antes -->
    <section class="servicios-content" aria-labelledby="requisitos-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="requisitos-heading" class="section-seo-title">Lo que nadie te cuenta antes de crear una AG en Suiza</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Muchos empresarios descubren estos requisitos cuando ya han empezado el proceso. No cometas ese error. Esto es lo que necesitas para <strong>constituir tu AG suiza</strong>:</p>
            </div>

            <div class="requisitos-grid">
                <ul class="requisitos-lista animate-on-scroll fade-up">
                    <li><strong>Capital social</strong> de <strong>100.000 CHF</strong> - pero solo desembolsas 50.000 CHF de entrada</li>
                    <li>Un miembro del <strong>consejo de administracion</strong> que viva en <strong>Suiza</strong> - puede ser un fiduciario profesional</li>
                    <li>Domicilio social en <strong>Suiza</strong> - no vale una direccion virtual cualquiera</li>
                    <li>Cuenta bancaria suiza abierta antes de constituir - y los bancos suizos no abren cuentas a cualquiera</li>
                    <li>Estatutos redactados segun el Codigo de Obligaciones suizo - un abogado local es imprescindible</li>
                    <li>Organo de <strong>auditoria</strong> - salvo que cumplas los requisitos de opting-out</li>
                </ul>
            </div>

            <div class="highlight-box warning animate-on-scroll fade-up">
                <p><strong>El problema mas comun:</strong> empresarios que intentan hacerlo por su cuenta, pierden meses con el banco, y acaban pagando el doble por no tener un administrador residente desde el principio. Si no tienes contactos en <strong>Suiza</strong>, necesitas a alguien que los tenga.</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <h3 class="tabla-titulo">Capital que necesitas tener disponible</h3>
                <table class="tabla-comparativa">
                    <thead>
                        <tr>
                            <th>Concepto</th>
                            <th>Importe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Capital minimo legal</strong></td>
                            <td><strong>100.000 CHF</strong></td>
                        </tr>
                        <tr>
                            <td>Desembolso obligatorio al constituir</td>
                            <td>50.000 CHF (50%)</td>
                        </tr>
                        <tr>
                            <td>Valor nominal minimo por <strong>accion</strong></td>
                            <td>0,01 CHF</td>
                        </tr>
                        <tr>
                            <td>Capital maximo</td>
                            <td>Sin limite</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECCION 4: COSTES - Inversion vs Ahorro -->
    <section class="servicios-content section-alt" aria-labelledby="costes-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="costes-heading" class="section-seo-title">Cuanto cuesta una AG suiza y cuando se paga sola</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Una <strong>AG</strong> cuesta mas que una <strong>GmbH</strong>. Eso es un hecho. La pregunta no es cuanto cuesta, sino cuanto te ahorra. Si facturas 500.000 CHF al ano, la diferencia en <strong>impuestos</strong> entre Espana y <strong>Suiza</strong> puede superar los 40.000 CHF anuales. La <strong>AG</strong> se paga sola en el primer ano.</p>
            </div>

            <div class="tablas-costes-grid">
                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                    <h3 class="tabla-titulo">Inversion inicial para constituir tu AG</h3>
                    <table class="tabla-comparativa">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Coste</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Capital social</strong> (minimo desembolsado)</td>
                                <td>50.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Notaria y <strong>registro mercantil</strong></td>
                                <td>2.500-4.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Asesoramiento legal y fiscal</td>
                                <td>4.000-7.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Domicilio social (primer ano)</td>
                                <td>1.500-3.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Apertura cuenta bancaria</td>
                                <td>500-1.500 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total constitucion (sin capital)</strong></td>
                                <td><strong>8.500-16.000 CHF</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tabla-comparativa-wrapper animate-on-scroll fade-up stagger-1">
                    <h3 class="tabla-titulo">Coste anual de mantener tu AG operativa</h3>
                    <table class="tabla-comparativa">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Coste anual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Contabilidad y cierre</td>
                                <td>4.000-10.000 CHF</td>
                            </tr>
                            <tr>
                                <td>Domicilio social</td>
                                <td>1.500-3.500 CHF</td>
                            </tr>
                            <tr>
                                <td>Consejero residente (si aplica)</td>
                                <td>3.000-6.000 CHF</td>
                            </tr>
                            <tr>
                                <td><strong>Auditoria</strong> (si aplica)</td>
                                <td>5.000-15.000 CHF</td>
                            </tr>
                            <tr>
                                <td><strong>Junta general</strong> y actas</td>
                                <td>1.000-2.000 CHF</td>
                            </tr>
                            <tr class="fila-total">
                                <td><strong>Total mantenimiento</strong></td>
                                <td><strong>14.500-36.500 CHF/ano</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Haz los numeros:</strong> Si facturas 600.000 CHF y pagas el 25% en Espana, son 150.000 CHF en impuestos. En <strong>Suiza</strong> con un tipo del 13%, son 78.000 CHF. La diferencia: 72.000 CHF al ano. El coste de mantener tu <strong>AG</strong> es de 15.000-35.000 CHF. Te quedan 37.000-57.000 CHF de ahorro neto cada ano.</p>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>Sobre la auditoria:</strong> es obligatoria para <strong>AG</strong> salvo que cumplas opting-out (menos de 10 empleados, balance inferior a 20M CHF y facturacion inferior a 40M CHF). Si cumples estos requisitos, te ahorras entre 5.000 y 15.000 CHF anuales.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 5: PROCESO - Como lo hacemos -->
    <section class="servicios-content" aria-labelledby="proceso-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="proceso-heading" class="section-seo-title">Como constituimos tu AG suiza en 8-10 semanas</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Puedes intentar hacerlo por tu cuenta. Tardaras meses, te rechazaran en varios bancos y acabaras pagando mas de lo necesario. O puedes hacerlo con alguien que ya ha abierto cientos de <strong>sociedades anonimas suizas</strong> y sabe exactamente que pasos dar.</p>
            </div>

            <div class="proceso-timeline">
                <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                    <span class="proceso-number">1</span>
                    <div class="proceso-content">
                        <h3>Semana 1-2: Diseno de estructura</h3>
                        <p>Decidimos el <strong>canton</strong>, tipo de <strong>acciones</strong>, composicion del <strong>consejo</strong> y estructura de <strong>capital</strong>. Aqui se evitan errores que cuestan miles despues.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                    <span class="proceso-number">2</span>
                    <div class="proceso-content">
                        <h3>Semana 2-3: Apertura bancaria</h3>
                        <p>Abrimos la cuenta en un banco suizo que conocemos. No pierdes tiempo con rechazos. Depositas el <strong>capital minimo</strong> de 50.000 CHF.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                    <span class="proceso-number">3</span>
                    <div class="proceso-content">
                        <h3>Semana 3-4: Documentacion legal</h3>
                        <p>Preparamos estatutos, reglamento del <strong>consejo de administracion</strong> y pactos de <strong>accionistas</strong> si hay varios socios.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                    <span class="proceso-number">4</span>
                    <div class="proceso-content">
                        <h3>Semana 4-6: Constitucion notarial</h3>
                        <p>Firma ante notario suizo. Si no puedes viajar, gestionamos poderes para que firme un representante.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-5">
                    <span class="proceso-number">5</span>
                    <div class="proceso-content">
                        <h3>Semana 6-7: Registro Mercantil</h3>
                        <p>Inscripcion en el <strong>Registro Mercantil</strong> del <strong>canton</strong>. Tu <strong>AG</strong> ya existe legalmente.</p>
                    </div>
                </div>

                <div class="proceso-step animate-on-scroll slide-fade stagger-6">
                    <span class="proceso-number">6</span>
                    <div class="proceso-content">
                        <h3>Semana 8-10: Operativa completa</h3>
                        <p>Alta en IVA, numero UID, cuentas operativas y toda la documentacion lista. Tu <strong>AG suiza</strong> esta preparada para facturar.</p>
                    </div>
                </div>
            </div>

            <div class="highlight-box success animate-on-scroll fade-up">
                <p><strong>Resultado:</strong> En 10 semanas tienes una <strong>AG suiza</strong> operativa, con cuenta bancaria, domicilio social, administrador residente y todo en regla. Sin sorpresas, sin retrasos, sin errores que te cuesten dinero.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 6: AG VS GMBH - Decision -->
    <section class="servicios-content section-alt" aria-labelledby="comparativa-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="comparativa-heading" class="section-seo-title">¿Necesitas realmente una AG o te basta con una GmbH?</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>Esta es la pregunta que nos hace el 80% de los empresarios que llegan aqui. Y es una pregunta importante porque elegir mal te puede costar decenas de miles de francos en estructura innecesaria o en limitaciones que te frenan el crecimiento.</p>
            </div>

            <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                <table class="tabla-comparativa tabla-responsive">
                    <thead>
                        <tr>
                            <th>Lo que necesitas</th>
                            <th>AG te lo da</th>
                            <th>GmbH te lo da</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Meter inversores rapidamente</strong></td>
                            <td><strong>Si</strong> - emites <strong>acciones</strong> y vendes</td>
                            <td>No - notario cada vez</td>
                        </tr>
                        <tr>
                            <td><strong>Que tu nombre no aparezca</strong></td>
                            <td><strong>Si</strong> - <strong>accionistas</strong> anonimos</td>
                            <td>No - socios en registro</td>
                        </tr>
                        <tr>
                            <td><strong>Cotizar en bolsa algun dia</strong></td>
                            <td><strong>Si</strong> - unica estructura valida</td>
                            <td>No - imposible</td>
                        </tr>
                        <tr>
                            <td><strong>Pagar menos impuestos</strong></td>
                            <td>Si - 12-15%</td>
                            <td>Si - 12-15% (igual)</td>
                        </tr>
                        <tr>
                            <td><strong>Empezar con poco capital</strong></td>
                            <td>No - 50.000 CHF minimo</td>
                            <td><strong>Si</strong> - 20.000 CHF</td>
                        </tr>
                        <tr>
                            <td><strong>Costes bajos de mantenimiento</strong></td>
                            <td>No - 15.000-35.000 CHF/ano</td>
                            <td><strong>Si</strong> - 5.000-12.000 CHF/ano</td>
                        </tr>
                        <tr>
                            <td><strong>Evitar auditoria obligatoria</strong></td>
                            <td>Solo con opting-out</td>
                            <td><strong>Si</strong> - mas facil</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="para-quien-grid animate-on-scroll fade-up">
                <div class="para-quien-col ideal">
                    <h3>La AG es para ti si...</h3>
                    <ul>
                        <li>Facturas mas de 500.000 CHF al ano</li>
                        <li>Tienes o tendras <strong>inversores</strong> externos</li>
                        <li>Quieres que tu nombre no aparezca en ningun registro</li>
                        <li>Planeas rondas de financiacion o venta de la empresa</li>
                        <li>Necesitas cerrar contratos con grandes corporaciones</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada">
                    <h3>Una GmbH te basta si...</h3>
                    <ul>
                        <li>Facturas menos de 500.000 CHF al ano</li>
                        <li>Solo estas tu o tu socio de confianza</li>
                        <li>No te importa que sepan que eres el dueno</li>
                        <li>Financias el negocio con recursos propios</li>
                        <li>Quieres empezar con menos capital y costes</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p><strong>No te preocupes si ahora no lo tienes claro.</strong> En la consulta inicial analizamos tu situacion concreta y te decimos exactamente cual te conviene. Si una <strong>GmbH</strong> es mejor para ti, te lo diremos aunque ganes menos con el proyecto.</p>
            </div>

            <div class="section-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>" class="btn btn-secondary" aria-label="Ver informacion completa sobre GmbH Suiza">¿Mejor una GmbH? Ver ficha completa</a>
            </div>
        </div>
    </section>

    <!-- SECCION 7: CUALIFICACION -->
    <section class="servicios-content" aria-labelledby="para-quien-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="para-quien-heading" class="section-seo-title">¿Eres el tipo de empresario que necesita una AG suiza?</h2>
            </div>

            <div class="servicios-content-body animate-on-scroll fade-up">
                <p>No vamos a venderte una <strong>AG</strong> si no la necesitas. Es mas cara, mas compleja y requiere mas mantenimiento. Pero si cumples alguno de estos perfiles, probablemente es exactamente lo que buscas:</p>
            </div>

            <div class="para-quien-grid">
                <div class="para-quien-col ideal animate-on-scroll slide-fade stagger-1">
                    <h3>La AG suiza es para ti si...</h3>
                    <ul>
                        <li><strong>Tienes una startup</strong> y vas a levantar capital de <strong>inversores</strong></li>
                        <li><strong>Facturas +500.000 CHF</strong> y quieres optimizar fiscalidad</li>
                        <li><strong>Tienes un holding familiar</strong> con varios miembros</li>
                        <li><strong>Necesitas anonimato</strong> - que tu nombre no aparezca como dueno</li>
                        <li><strong>Planeas vender la empresa</strong> o sacarla a bolsa en unos anos</li>
                        <li><strong>Operas con socios internacionales</strong> que necesitan estructura seria</li>
                    </ul>
                </div>

                <div class="para-quien-col no-recomendada animate-on-scroll slide-fade stagger-2">
                    <h3>No te recomendamos una AG si...</h3>
                    <ul>
                        <li><strong>Eres autonomo</strong> o empresario individual sin planes de socios</li>
                        <li><strong>Facturas menos de 200.000 CHF</strong> - los costes no compensan</li>
                        <li><strong>Solo tienes un negocio sencillo</strong> sin complejidad societaria</li>
                        <li><strong>No te importa aparecer</strong> en el registro como propietario</li>
                        <li><strong>No tienes planes de expansion</strong> ni de meter <strong>inversores</strong></li>
                        <li><strong>Operas solo tu</strong> o con un socio de confianza de toda la vida</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-box animate-on-scroll fade-up">
                <p>Si has llegado hasta aqui y te ves reflejado en la columna de la izquierda, sigue leyendo. Si te ves en la derecha, echa un vistazo a la <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH suiza</a> - es mas sencilla, mas barata y probablemente te encaje mejor.</p>
            </div>
        </div>
    </section>

    <!-- SECCION 8: FAQ - Objeciones de compra -->
    <section class="servicios-content faq-section section-alt" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Dudas que tienen los empresarios antes de crear una AG suiza</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-1" id="faq-ag-q1">
                        <span itemprop="name">¿Puedo crear una AG suiza sin vivir en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-1" role="region" aria-labelledby="faq-ag-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Los <strong>accionistas</strong> pueden vivir en cualquier pais. El unico requisito es tener un miembro del <strong>consejo de administracion</strong> residente en <strong>Suiza</strong>. Nosotros ofrecemos ese servicio de consejero fiduciario, asi que no necesitas conocer a nadie alli.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-2" id="faq-ag-q2">
                        <span itemprop="name">¿Necesito tener 100.000 CHF disponibles ahora mismo?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-2" role="region" aria-labelledby="faq-ag-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No. El <strong>capital minimo</strong> legal es de <strong>100.000 CHF</strong>, pero solo necesitas depositar 50.000 CHF en el momento de la constitucion. El resto es un compromiso que puedes aportar mas adelante cuando lo necesites.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-3" id="faq-ag-q3">
                        <span itemprop="name">¿Es esto legal o puede darme problemas con Hacienda espanola?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-3" role="region" aria-labelledby="faq-ag-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text"><strong>Suiza</strong> no es un paraiso fiscal. Tiene convenio de doble imposicion con Espana y cumple todos los estandares de la OCDE. Crear una <strong>AG suiza</strong> es perfectamente legal siempre que la empresa tenga sustancia economica real (oficina, actividad, empleados). Te ayudamos a cumplir todos los requisitos.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-4" id="faq-ag-q4">
                        <span itemprop="name">¿Puedo empezar con una GmbH y convertirla en AG despues?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-4" role="region" aria-labelledby="faq-ag-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, es una estrategia que usamos a menudo. Empiezas con <strong>GmbH</strong> para minimizar costes iniciales y cuando llegas a cierto volumen la conviertes en <strong>AG</strong>. La transformacion cuesta 5.000-10.000 CHF y tarda 4-6 semanas. Es un cambio de forma juridica, no una empresa nueva.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-5" id="faq-ag-q5">
                        <span itemprop="name">¿Por que deberia fiarme de vosotros y no de otra asesoria?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-5" role="region" aria-labelledby="faq-ag-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Llevamos mas de 4 anos trabajando exclusivamente con empresarios hispanohablantes que quieren operar desde <strong>Suiza</strong>. Hemos constituido mas de 500 estructuras societarias. Conocemos a los bancos, a los notarios, a las autoridades cantonales. Y si despues de la consulta inicial creemos que una <strong>AG</strong> no te conviene, te lo decimos aunque eso signifique cobrar menos.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-6" id="faq-ag-q6">
                        <span itemprop="name">¿Cuanto me va a costar todo el proceso de principio a fin?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-6" role="region" aria-labelledby="faq-ag-q6" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">La constitucion completa de una <strong>AG</strong> cuesta entre 8.500 y 16.000 CHF (sin contar el <strong>capital social</strong> de 50.000 CHF). El mantenimiento anual esta entre 14.500 y 36.500 CHF dependiendo de si necesitas <strong>auditoria</strong>, consejero residente, etc. En la consulta inicial te damos un presupuesto exacto para tu caso.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-7" id="faq-ag-q7">
                        <span itemprop="name">¿Tengo que desplazarme a Suiza para firmar algo?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-7" role="region" aria-labelledby="faq-ag-q7" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No es obligatorio. Podemos gestionar poderes para que un representante firme en tu nombre ante el notario suizo. Muchos de nuestros clientes constituyen su <strong>AG</strong> sin pisar <strong>Suiza</strong>. Aunque si quieres venir, te acompanamos y conoces a los profesionales con los que trabajaras.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ag-8" id="faq-ag-q8">
                        <span itemprop="name">¿Y si despues de la consulta decido no seguir?</span>
                    </button>
                    <div class="faq-answer" id="faq-ag-8" role="region" aria-labelledby="faq-ag-q8" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No pasa nada. La consulta de 230€ es independiente del proyecto. Muchos empresarios la usan simplemente para tener claridad y decidir si les conviene o no. Si sigues adelante, esos 230€ se descuentan del presupuesto total. Si no, has invertido en informacion de calidad.</p>
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
                <a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-2">
                    <h4>Holding Suiza</h4>
                    <p>Para varias empresas o inversiones</p>
                </a>
                <a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>" class="link-card animate-on-scroll slide-fade stagger-3">
                    <h4>Crear Empresa en Suiza</h4>
                    <p>Comparativa de todas las estructuras</p>
                </a>
            </div>
        </div>
    </section>

    <!-- BANNER NEWSLETTER #2 - Antes del CTA Final -->
    <?php
    // Variante personalizada para el segundo banner
    $newsletter_variant = 'ag';
    $newsletter_hook = array(
        '<strong>Todavia no lo tienes claro?</strong>',
        'Normal.',
        'Es una decision de 50.000 CHF.',
        'Y hay mucha informacion mala por ahi.'
    );
    $newsletter_agitation = array(
        'Por eso envio un email cada dia.',
        'Sin teoria. Sin humo. Sin vender cursos.',
        'Solo casos reales de empresarios que ya estan en Suiza.'
    );
    $newsletter_postdata = 'Manana te cuento como funciona la auditoria en una AG y cuando puedes evitarla. Te puede ahorrar 15.000 CHF al ano.';
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
                    <p class="cta-title">Constituye tu AG con quien conoce el sistema.</p>
                    <h2 id="cta-final-heading" class="cta-seo-title">AG Suiza: consulta inicial de 230€</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Una <strong>AG</strong> mal estructurada puede costarte cientos de miles de francos en impuestos innecesarios, conflictos entre <strong>accionistas</strong> o problemas con el regulador.</p>

                        <p>Llevamos mas de 4 anos constituyendo sociedades en <strong>Suiza</strong> para empresarios hispanohablantes. Sabemos que <strong>canton</strong> elegir, como estructurar el <strong>capital</strong> y que clausulas incluir en los estatutos.</p>
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

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener" aria-label="Agendar consulta para constituir AG en Suiza">Quiero constituir mi AG en Suiza</a>

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
