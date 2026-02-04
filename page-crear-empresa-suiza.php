<?php
/**
 * Template Name: Servicios - Crear Empresa Suiza (Categoria)
 * URL: /crear-empresa-suiza/
 * Tipo: Pagina de categoria (TRANSACCIONAL)
 * Objetivo: VENDER + DISTRIBUIR a fichas
 * Longitud: 1.800-2.200 palabras
 * Pagina padre: /servicios/
 * Paginas hijas: /gmbh-suiza/, /holding-suiza/, /ag-suiza/, /autonomo-suiza/
 *
 * ESTRUCTURA SEO: Problema -> Solucion (x6) + FAQ
 *
 * KW Principal: empresa en suiza
 * KW Secundarias: crear empresa en suiza (50), crear empresa suiza (50), emprender en suiza (50),
 *                 abrir empresa en suiza (70), montar empresa en suiza (40), sociedad suiza (50)
 *
 * Meta Title: Empresa en Suiza 2026 y cómo pagar solo un 12% de impuestos
 * Meta Description: Empresa en Suiza: la solución definitiva para huir de la presión fiscal. Gestionamos la constitución de tu sociedad para que ahorres desde el primer día.
 *
 * @package GNS_Advisory
 */

get_header();

// Variables para el Hero
$breadcrumb_items = array(
    array('url' => home_url('/'), 'name' => 'Inicio'),
    array('url' => home_url('/servicios/'), 'name' => 'Servicios'),
    array('url' => '', 'name' => 'Crear Empresa en Suiza')
);
$page_title = 'Empresa en Suiza con gestión integral para empresarios españoles';
$page_subtitle = 'Por qué tener una empresa en Suiza es tu mejor decisión financiera';
$page_description = 'Abrir una empresa en Suiza es el primer paso que dan los empresarios que se cansan de trabajar para pagar impuestos. Aquí no hablamos de evasión. Hablamos de un país donde tributas al 12% de forma legal y transparente. Nos encargamos de todo el proceso para que tú solo tengas que firmar y empezar a facturar con tranquilidad.';

// Bloque de conversión - Top of the Fold
$conversion_content = array(
    'main' => array(
        'Tu empresa tributa al 25% en España.',
        'Aquí tributa al 12%.'
    ),
    'sub' => array(
        'Mismo negocio. Mismos clientes. Misma facturación.',
        'La única diferencia es dónde está constituida.'
    ),
    'accent' => 'Y esa diferencia vale decenas de miles de euros al año.'
);

include(get_template_directory() . '/template-parts/servicios-hero.php');
?>

<main id="main-content" class="site-main servicios-categoria-page page-servicios page-crear-empresa-suiza">

    <!-- Hero Stats -->
    <section class="servicios-content hero-stats-section" aria-label="Datos clave sobre crear empresa en Suiza">
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
                    <span class="hero-stat-value">+500</span>
                    <span class="hero-stat-label">Empresas constituidas</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-2">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">11-15%</span>
                    <span class="hero-stat-label">Impuesto de sociedades</span>
                </div>
                <div class="hero-stat animate-on-scroll slide-fade stagger-3">
                    <span class="hero-stat-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </span>
                    <span class="hero-stat-value">6-10 semanas</span>
                    <span class="hero-stat-label">Tiempo de constitucion</span>
                </div>
            </div>
            <div class="hero-cta-wrapper animate-on-scroll fade-up">
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn-primary" target="_blank" rel="noopener">Reservar consulta inicial (230€)</a>
            </div>
        </div>
    </section>

    <!-- ========================================
         PROBLEMA 1: PAGAS DEMASIADOS IMPUESTOS
         ======================================== -->
    <section class="servicios-content" aria-labelledby="problema-1-heading">
        <div class="container">
            <div class="problema-solucion-block animate-on-scroll fade-up">
                <!-- PROBLEMA -->
                <div class="problema-header">
                    <span class="problema-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        Problema
                    </span>
                    <h2 id="problema-1-heading" class="problema-titulo">Pagas demasiados impuestos en España o Latinoamerica</h2>
                    <p class="problema-descripcion">El <strong>impuesto de sociedades en España es del 25%</strong>. En muchos paises de Latinoamerica supera el 30%. Y cuando quieres sacar dividendos, vuelves a tributar. Al final, de cada 100 euros que gana tu empresa, te quedas con menos de 60.</p>

                    <div class="agitacion-list">
                        <div class="agitacion-item">25% de impuesto de sociedades en España</div>
                        <div class="agitacion-item">Doble tributacion al sacar dividendos</div>
                        <div class="agitacion-item">Cambios fiscales cada legislatura</div>
                        <div class="agitacion-item">Presion de Hacienda sobre empresarios</div>
                    </div>
                </div>

                <!-- SOLUCION -->
                <div class="solucion-body">
                    <span class="solucion-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        Solucion
                    </span>
                    <p class="solucion-intro"><strong>Crear una empresa en Suiza</strong> significa pagar entre el 11% y el 15% de <strong>impuesto de sociedades</strong> segun el <strong>canton</strong> que elijas. El sistema fiscal suizo no cambia cada legislatura. Lo que firmas hoy vale mañana, dentro de 5 años y dentro de 20.</p>

                    <p style="font-size: 1.05rem; line-height: 1.8; color: #2a2a2a; margin-bottom: 2rem;">Suiza no es el unico pais con impuestos bajos. Pero es el unico que combina <strong>fiscalidad atractiva</strong> con seguridad juridica absoluta, acceso al mercado europeo y un sistema bancario que funciona. Estas son las razones por las que mas de 500 empresarios <strong>hispanohablantes</strong> han elegido <strong>montar su empresa en Suiza</strong>:</p>

                    <div class="servicios-grid servicios-grid-3 razones-grid">
                        <div class="servicio-card animate-on-scroll slide-fade stagger-1 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                                    <path d="M24 16v8l6 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>Impuestos predecibles</h3>
                            <p>El sistema fiscal suizo no cambia cada legislatura. Lo que firmas hoy vale mañana, dentro de 5 años y dentro de 20.</p>
                        </div>

                        <div class="servicio-card animate-on-scroll slide-fade stagger-2 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M24 8L8 20v20h32V20L24 8z" stroke="currentColor" stroke-width="2"/>
                                    <rect x="18" y="28" width="12" height="12" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Seguridad juridica total</h3>
                            <p>Los contratos se cumplen. Los tribunales funcionan. El Estado no te persigue por ganar dinero.</p>
                        </div>

                        <div class="servicio-card animate-on-scroll slide-fade stagger-3 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="2"/>
                                    <path d="M16 24h16M24 16v16" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Acceso a Europa sin ser UE</h3>
                            <p>Suiza tiene acuerdos bilaterales que te permiten operar en toda Europa sin las rigideces de la normativa comunitaria.</p>
                        </div>

                        <div class="servicio-card animate-on-scroll slide-fade stagger-4 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <rect x="6" y="14" width="36" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="6" y1="22" x2="42" y2="22" stroke="currentColor" stroke-width="2"/>
                                    <rect x="10" y="30" width="8" height="4" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <h3>Sistema bancario de referencia</h3>
                            <p>Abrir cuenta en Suiza significa acceso a CHF, EUR, USD sin restricciones ni las sospechas que genera operar desde España.</p>
                        </div>

                        <div class="servicio-card animate-on-scroll slide-fade stagger-5 shine-effect shadow-grow">
                            <div class="servicio-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M24 8L30 20H40L32 28L35 40L24 33L13 40L16 28L8 20H18L24 8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>Reputacion internacional</h3>
                            <p>Una factura desde Suiza no se cuestiona. Una factura desde España o Latinoamerica, a veces si.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         PROBLEMA 2: NO SABES QUE ESTRUCTURA ELEGIR
         ======================================== -->
    <section class="servicios-content section-alt" aria-labelledby="problema-2-heading">
        <div class="container">
            <div class="problema-solucion-block animate-on-scroll fade-up">
                <!-- PROBLEMA -->
                <div class="problema-header">
                    <span class="problema-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        Problema
                    </span>
                    <h2 id="problema-2-heading" class="problema-titulo">No sabes que tipo de empresa en Suiza te conviene</h2>
                    <p class="problema-descripcion">GmbH, AG, Holding, Einzelfirma... Los <strong>tipos de empresas en Suiza</strong> son diferentes a los de España. Elegir mal significa pagar de mas en impuestos, tener problemas legales o gastar en una <strong>estructura societaria</strong> que no necesitas.</p>

                    <div class="agitacion-list">
                        <div class="agitacion-item">Terminologia diferente (GmbH, AG...)</div>
                        <div class="agitacion-item">Requisitos de capital distintos</div>
                        <div class="agitacion-item">Implicaciones fiscales complejas</div>
                        <div class="agitacion-item">Costes ocultos si eliges mal</div>
                    </div>
                </div>

                <!-- SOLUCION -->
                <div class="solucion-body">
                    <span class="solucion-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        Solucion
                    </span>
                    <p class="solucion-intro">No existe una <strong>estructura societaria</strong> "mejor" universal para <strong>abrir empresa en Suiza</strong>. Existe la correcta para tu situacion segun facturacion, planes de crecimiento, numero de socios y si vas a residir en Suiza o no. Estos son los cuatro <strong>tipos de empresas en Suiza</strong> que constituimos para empresarios <strong>hispanohablantes</strong>:</p>

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
                            <p class="servicio-hook">La <strong>sociedad limitada suiza</strong>. La estructura mas elegida por empresarios que van a residir en Suiza.</p>
                            <p>Ideal para pymes, consultoras y negocios digitales. <strong>Capital minimo</strong> de 20.000 CHF con responsabilidad limitada e <strong>impuestos</strong> del 12-15%.</p>
                            <div class="estructura-details">
                                <span class="detail-item">Capital: 20.000 CHF</span>
                                <span class="detail-item">Impuestos: 12-15%</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>" class="btn-secondary">Ver detalles GmbH</a>
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
                            <p class="servicio-hook">Para empresarios con varias sociedades en diferentes paises.</p>
                            <p>El 95% de los <strong>dividendos</strong> que recibe de sus filiales no tributan. Perfecta para consolidar y reinvertir beneficios de forma eficiente.</p>
                            <div class="estructura-details">
                                <span class="detail-item">Capital: 20.000-100.000 CHF</span>
                                <span class="detail-item">Dividendos: 95% exentos</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>" class="btn-secondary">Ver detalles Holding</a>
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
                            <p class="servicio-hook">La <strong>sociedad anonima suiza</strong>. Para empresas grandes o con inversores.</p>
                            <p>Permite emitir acciones y captar capital externo facilmente. Ideal si planeas escalar o buscar financiacion externa.</p>
                            <div class="estructura-details">
                                <span class="detail-item">Capital: 100.000 CHF</span>
                                <span class="detail-item">Accionistas: ilimitados</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>" class="btn-secondary">Ver detalles AG</a>
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
                            <p class="servicio-hook">La <strong>Einzelfirma</strong>. Para freelances y consultores que empiezan.</p>
                            <p>Sin <strong>capital minimo</strong>, maxima simplicidad. Tributas como persona fisica. Ideal para probar el mercado antes de constituir <strong>sociedad suiza</strong>.</p>
                            <div class="estructura-details">
                                <span class="detail-item">Capital: 0 CHF</span>
                                <span class="detail-item">Impuestos: IRPF personal</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>" class="btn-secondary">Ver detalles Autonomo</a>
                        </article>

                    </div>

                    <!-- Tabla comparativa -->
                    <div class="tabla-comparativa-wrapper tabla-estructuras animate-on-scroll fade-up" style="margin-top: 3rem;">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Criterio</th>
                                    <th><a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH</a></th>
                                    <th><a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>">Holding</a></th>
                                    <th><a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG</a></th>
                                    <th><a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>">Autonomo</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Capital minimo</strong></td>
                                    <td>20.000 CHF</td>
                                    <td>20.000-100.000 CHF</td>
                                    <td>100.000 CHF</td>
                                    <td>0 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong>Responsabilidad</strong></td>
                                    <td>Limitada</td>
                                    <td>Limitada</td>
                                    <td>Limitada</td>
                                    <td>Ilimitada</td>
                                </tr>
                                <tr>
                                    <td><strong>Impuesto sociedades</strong></td>
                                    <td>12-15%</td>
                                    <td>12-15%</td>
                                    <td>12-15%</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td><strong>Ideal para</strong></td>
                                    <td>Pymes, consultoras</td>
                                    <td>Varias empresas</td>
                                    <td>Empresas grandes, inversores</td>
                                    <td>Freelances</td>
                                </tr>
                                <tr>
                                    <td><strong>Coste constitucion</strong></td>
                                    <td>5.700-10.500 CHF</td>
                                    <td>6.000-12.000 CHF</td>
                                    <td>8.500-16.000 CHF</td>
                                    <td>500-1.500 CHF</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="section-cta-wrapper animate-on-scroll fade-up">
                        <p class="cta-note">¿No sabes cual elegir? Te lo decimos en la consulta inicial.</p>
                        <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn-primary" target="_blank" rel="noopener">Reservar consulta (230€)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         PROBLEMA 3: NO SABES CUANTO CUESTA
         ======================================== -->
    <section class="servicios-content" aria-labelledby="problema-3-heading">
        <div class="container">
            <div class="problema-solucion-block animate-on-scroll fade-up">
                <!-- PROBLEMA -->
                <div class="problema-header">
                    <span class="problema-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        Problema
                    </span>
                    <h2 id="problema-3-heading" class="problema-titulo">No sabes cuanto cuesta realmente crear una empresa en Suiza</h2>
                    <p class="problema-descripcion">Buscas en internet y encuentras precios que van desde 2.000 hasta 50.000 CHF. Algunos incluyen el capital, otros no. Unos hablan de constitucion, otros de mantenimiento. Al final no sabes que estas pagando ni si te estan timando.</p>

                    <div class="agitacion-list">
                        <div class="agitacion-item">Precios confusos e incomparables</div>
                        <div class="agitacion-item">Costes ocultos que aparecen despues</div>
                        <div class="agitacion-item">No distinguen capital de gastos</div>
                        <div class="agitacion-item">Sin informacion de mantenimiento anual</div>
                    </div>
                </div>

                <!-- SOLUCION -->
                <div class="solucion-body">
                    <span class="solucion-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        Solucion
                    </span>
                    <p class="solucion-intro"><strong>Crear una empresa en Suiza</strong> no es barato, pero tampoco es prohibitivo. Te damos el <strong>coste crear empresa suiza</strong> real, con rangos claros. Sin sorpresas ni costes ocultos que aparecen despues de firmar.</p>

                    <h3 class="tabla-titulo">Costes de constitucion por estructura</h3>

                    <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Estructura</th>
                                    <th>Capital minimo</th>
                                    <th>Coste constitucion</th>
                                    <th>Total inicial</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong><a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH</a></strong></td>
                                    <td>20.000 CHF</td>
                                    <td>5.700-10.500 CHF</td>
                                    <td>25.700-30.500 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong><a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>">Holding</a></strong></td>
                                    <td>20.000-100.000 CHF</td>
                                    <td>6.000-12.000 CHF</td>
                                    <td>26.000-112.000 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong><a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG</a></strong></td>
                                    <td>50.000 CHF (desembolsado)</td>
                                    <td>8.500-16.000 CHF</td>
                                    <td>58.500-66.000 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong><a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>">Autonomo</a></strong></td>
                                    <td>0 CHF</td>
                                    <td>500-1.500 CHF</td>
                                    <td>500-1.500 CHF</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="highlight-box animate-on-scroll fade-up">
                        <p>El <strong>capital social</strong> no es un gasto. Es dinero tuyo que depositas en la cuenta de la empresa y puedes usar para operar. Los costes reales de constitucion son notaria, <strong>registro mercantil</strong>, asesoramiento y domicilio social.</p>
                    </div>

                    <h3 class="tabla-titulo" style="margin-top: 3rem;">Costes anuales de mantenimiento</h3>

                    <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                        <table class="tabla-comparativa">
                            <thead>
                                <tr>
                                    <th>Estructura</th>
                                    <th>Mantenimiento anual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>GmbH</strong></td>
                                    <td>5.200-12.000 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong>Holding</strong></td>
                                    <td>6.000-15.000 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong>AG</strong></td>
                                    <td>14.500-36.500 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong>Autonomo</strong></td>
                                    <td>2.000-5.000 CHF</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         PROBLEMA 4: CREES QUE NECESITAS VIVIR EN SUIZA
         ======================================== -->
    <section class="servicios-content section-alt" aria-labelledby="problema-4-heading">
        <div class="container">
            <div class="problema-solucion-block animate-on-scroll fade-up">
                <!-- PROBLEMA -->
                <div class="problema-header">
                    <span class="problema-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        Problema
                    </span>
                    <h2 id="problema-4-heading" class="problema-titulo">Crees que necesitas vivir en Suiza para tener una empresa alli</h2>
                    <p class="problema-descripcion">Has oido que para <strong>crear empresa en Suiza siendo extranjero</strong> necesitas residir alli, obtener permisos complicados o tener un socio suizo. No sabes cuales son los <strong>requisitos abrir empresa suiza</strong> reales y cuales son mitos.</p>

                    <div class="agitacion-list">
                        <div class="agitacion-item">Confusion sobre requisitos de residencia</div>
                        <div class="agitacion-item">Mitos sobre permisos y visados</div>
                        <div class="agitacion-item">No saber si necesitas socio suizo</div>
                        <div class="agitacion-item">Miedo a tramites en aleman o frances</div>
                    </div>
                </div>

                <!-- SOLUCION -->
                <div class="solucion-body">
                    <span class="solucion-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        Solucion
                    </span>
                    <p class="solucion-intro">Puedes <strong>crear una empresa en Suiza</strong> siendo español, latinoamericano o de cualquier otra nacionalidad. <strong>No necesitas vivir en Suiza</strong>. Los <strong>requisitos abrir empresa suiza</strong> basicos son los mismos para todos:</p>

                    <div class="requisitos-grid">
                        <ul class="requisitos-lista animate-on-scroll fade-up">
                            <li><strong>Capital social</strong> segun el tipo de empresa (0 CHF para <strong>autonomo</strong>, 20.000 CHF para <strong>GmbH</strong>, 100.000 CHF para <strong>AG</strong>)</li>
                            <li>Al menos un administrador o consejero con residencia en Suiza (puede ser fiduciario)</li>
                            <li>Domicilio social en territorio suizo (oficina real o virtual segun <strong>canton</strong>)</li>
                            <li>Cuenta bancaria en Suiza para depositar el capital</li>
                            <li>Estatutos redactados segun el Codigo de Obligaciones suizo</li>
                            <li>Nombre comercial disponible (verificable en Zefix)</li>
                        </ul>
                    </div>

                    <div class="highlight-box animate-on-scroll fade-up">
                        <p><strong>No necesitas vivir en Suiza para crear una empresa suiza.</strong> Pero si necesitas un representante residente. GNS Advisory ofrece servicios de administrador fiduciario para empresarios que no residen en Suiza. El coste adicional es de 2.000-6.000 CHF/año segun la estructura.</p>
                    </div>

                    <p style="font-size: 1.05rem; line-height: 1.8; color: #2a2a2a; margin-top: 2rem;">Si planeas residir en Suiza, el proceso cambia. Primero obtienes el permiso de residencia y luego constituyes la empresa como residente. Esto simplifica muchos tramites y reduce costes. Consulta nuestro servicio de <a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>" style="color: #1a1a1a; text-decoration: underline;">cambio de residencia fiscal a Suiza</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         PROBLEMA 5: EL PROCESO PARECE COMPLICADO
         ======================================== -->
    <section class="servicios-content" aria-labelledby="problema-5-heading">
        <div class="container">
            <div class="problema-solucion-block animate-on-scroll fade-up">
                <!-- PROBLEMA -->
                <div class="problema-header">
                    <span class="problema-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        Problema
                    </span>
                    <h2 id="problema-5-heading" class="problema-titulo">El proceso para crear empresa en Suiza parece complicado e interminable</h2>
                    <p class="problema-descripcion">Notarios en aleman, bancos que piden documentos imposibles, registros mercantiles cantonales con normas diferentes... Parece que necesitas un doctorado en burocracia suiza para <strong>montar empresa en Suiza</strong>.</p>

                    <div class="agitacion-list">
                        <div class="agitacion-item">Idiomas: aleman, frances, italiano</div>
                        <div class="agitacion-item">Burocracia desconocida</div>
                        <div class="agitacion-item">26 cantones con normas diferentes</div>
                        <div class="agitacion-item">Bancos muy exigentes con extranjeros</div>
                    </div>
                </div>

                <!-- SOLUCION -->
                <div class="solucion-body">
                    <span class="solucion-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        Solucion
                    </span>
                    <p class="solucion-intro">El proceso completo para <strong>crear una empresa en Suiza</strong> lleva entre 6 y 10 semanas. Nosotros gestionamos todo en español. Tu solo firmas y depositas el capital. Estos son los <strong>pasos crear empresa suiza</strong>:</p>

                    <div class="proceso-timeline">
                        <div class="proceso-step animate-on-scroll slide-fade stagger-1">
                            <span class="proceso-number">1</span>
                            <div class="proceso-content">
                                <h3>Semana 1-2: Analisis y planificacion</h3>
                                <p>Analizamos tu situacion, elegimos <strong>estructura societaria</strong> y <strong>canton</strong> optimos, definimos estatutos.</p>
                            </div>
                        </div>

                        <div class="proceso-step animate-on-scroll slide-fade stagger-2">
                            <span class="proceso-number">2</span>
                            <div class="proceso-content">
                                <h3>Semana 2-3: Apertura de cuenta</h3>
                                <p>Abrimos cuenta bancaria suiza y depositas el <strong>capital minimo</strong> requerido.</p>
                            </div>
                        </div>

                        <div class="proceso-step animate-on-scroll slide-fade stagger-3">
                            <span class="proceso-number">3</span>
                            <div class="proceso-content">
                                <h3>Semana 3-4: Documentacion</h3>
                                <p>Redactamos estatutos, poderes y toda la documentacion necesaria.</p>
                            </div>
                        </div>

                        <div class="proceso-step animate-on-scroll slide-fade stagger-4">
                            <span class="proceso-number">4</span>
                            <div class="proceso-content">
                                <h3>Semana 4-6: Notaria</h3>
                                <p>Firma de escritura de constitucion ante notario suizo (presencial o por poder).</p>
                            </div>
                        </div>

                        <div class="proceso-step animate-on-scroll slide-fade stagger-5">
                            <span class="proceso-number">5</span>
                            <div class="proceso-content">
                                <h3>Semana 6-8: Registro</h3>
                                <p>Inscripcion en el <strong>Registro Mercantil</strong> del <strong>canton</strong> elegido.</p>
                            </div>
                        </div>

                        <div class="proceso-step animate-on-scroll slide-fade stagger-6">
                            <span class="proceso-number">6</span>
                            <div class="proceso-content">
                                <h3>Semana 8-10: Activacion</h3>
                                <p>Alta en IVA (si aplica), numero UID, cuentas operativas, entrega de documentacion.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-box animate-on-scroll fade-up">
                        <p>La <strong>GmbH</strong> y el <strong>autonomo</strong> se constituyen en 6-8 semanas. La <strong>AG</strong> requiere 8-10 semanas por las formalidades adicionales. Si tienes prisa, algunos <strong>cantones</strong> ofrecen procedimientos acelerados con coste extra.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         PROBLEMA 6: NO SABES QUE CANTON ELEGIR
         ======================================== -->
    <section class="servicios-content section-alt" aria-labelledby="problema-6-heading">
        <div class="container">
            <div class="problema-solucion-block animate-on-scroll fade-up">
                <!-- PROBLEMA -->
                <div class="problema-header">
                    <span class="problema-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        Problema
                    </span>
                    <h2 id="problema-6-heading" class="problema-titulo">No sabes que canton suizo elegir para tu empresa</h2>
                    <p class="problema-descripcion">Suiza tiene 26 <strong>cantones</strong> y cada uno tiene sus propias tasas de <strong>impuestos</strong>. Has leido que Zug es el mejor, pero no sabes si es verdad o si te conviene otro. La diferencia puede ser de decenas de miles de francos al año.</p>

                    <div class="agitacion-list">
                        <div class="agitacion-item">26 cantones con fiscalidad diferente</div>
                        <div class="agitacion-item">Hasta 40% de diferencia en impuestos</div>
                        <div class="agitacion-item">Informacion contradictoria online</div>
                        <div class="agitacion-item">Lo mas barato no siempre es lo mejor</div>
                    </div>
                </div>

                <!-- SOLUCION -->
                <div class="solucion-body">
                    <span class="solucion-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        Solucion
                    </span>
                    <p class="solucion-intro">En Suiza los <strong>impuestos sociedades suiza</strong> varian hasta un 40% entre <strong>cantones</strong>. Elegir el <strong>canton</strong> correcto puede suponer decenas de miles de francos de diferencia al año. No siempre el canton con impuestos mas bajos es el mejor para tu caso.</p>

                    <div class="tabla-comparativa-wrapper tabla-cantones animate-on-scroll fade-up">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Canton</th>
                                    <th>Impuesto sociedades</th>
                                    <th>Ideal para</th>
                                    <th>Consideraciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Zug</strong></td>
                                    <td>~12%</td>
                                    <td>Tech, holdings, crypto, trading</td>
                                    <td>Muy saturado, coste de vida altisimo, dificil encontrar vivienda</td>
                                </tr>
                                <tr>
                                    <td><strong>Schwyz</strong></td>
                                    <td>~12%</td>
                                    <td>Empresarios que buscan tranquilidad</td>
                                    <td>Similar a Zug pero menos masificado, mas familiar</td>
                                </tr>
                                <tr>
                                    <td><strong>Nidwalden</strong></td>
                                    <td>~12%</td>
                                    <td>Pymes, consultoras, perfiles discretos</td>
                                    <td><strong>Canton</strong> pequeño, trato muy personal, menos burocracia</td>
                                </tr>
                                <tr>
                                    <td><strong>Zurich</strong></td>
                                    <td>~15%</td>
                                    <td>Negocios que necesitan presencia corporativa</td>
                                    <td>Centro financiero, acceso a talento, mas caro</td>
                                </tr>
                                <tr>
                                    <td><strong>Ginebra</strong></td>
                                    <td>~14%</td>
                                    <td>Perfiles internacionales, diplomaticos</td>
                                    <td>Hub internacional, francofono, forfait disponible</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="section-cta-wrapper animate-on-scroll fade-up">
                        <p>¿No sabes que <strong>canton</strong> elegir? En la consulta inicial analizamos tu perfil y te recomendamos el mas adecuado para tu <a href="<?php echo esc_url(home_url('/optimizacion-fiscal/')); ?>">optimizacion fiscal</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION: ERRORES COMUNES (Refuerzo) -->
    <section class="servicios-content" aria-labelledby="errores-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="errores-heading" class="section-seo-title">Errores que cometen los empresarios al crear empresa en Suiza</h2>
                <p class="section-seo-intro">En 4 años hemos visto de todo. Estos son los errores mas frecuentes que cometen los empresarios <strong>hispanohablantes</strong> al <strong>crear su empresa en Suiza</strong>. No los cometas tu:</p>
            </div>

            <div class="errores-grid">
                <div class="error-card animate-on-scroll slide-fade stagger-1">
                    <span class="error-number">1</span>
                    <div class="error-content">
                        <h3>Elegir canton solo por impuestos</h3>
                        <p>Zug tiene los impuestos mas bajos, pero si tu negocio es servicios en español para España, no tiene sentido. El <strong>canton</strong> debe encajar con tu actividad y tu vida.</p>
                    </div>
                </div>

                <div class="error-card animate-on-scroll slide-fade stagger-2">
                    <span class="error-number">2</span>
                    <div class="error-content">
                        <h3>Crear estructura sin sustancia real</h3>
                        <p>Una <strong>empresa suiza</strong> sin oficina real, sin actividad local y sin administrador residente es un problema esperando a ocurrir. Hacienda española lo detecta.</p>
                    </div>
                </div>

                <div class="error-card animate-on-scroll slide-fade stagger-3">
                    <span class="error-number">3</span>
                    <div class="error-content">
                        <h3>No planificar el cambio de residencia</h3>
                        <p>Si vas a vivir en Suiza, el orden importa. Primero residencia, luego empresa. Hacerlo al reves complica todo y puede costarte dinero. Consulta nuestro servicio de <a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>">cambio de residencia</a>.</p>
                    </div>
                </div>

                <div class="error-card animate-on-scroll slide-fade stagger-4">
                    <span class="error-number">4</span>
                    <div class="error-content">
                        <h3>Infravalorar los costes de mantenimiento</h3>
                        <p><strong>Crear la empresa</strong> cuesta X. Mantenerla cuesta 2X cada año. Muchos empresarios se sorprenden cuando llega la factura de contabilidad y auditoria.</p>
                    </div>
                </div>

                <div class="error-card animate-on-scroll slide-fade stagger-5">
                    <span class="error-number">5</span>
                    <div class="error-content">
                        <h3>Elegir la estructura equivocada</h3>
                        <p>Una <strong>AG</strong> para facturar 100.000 CHF/año es tirar dinero. Una <strong>Einzelfirma</strong> para facturar 500.000 CHF es pagar de mas en IRPF. Cada estructura tiene su rango optimo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECCION: PREGUNTAS SEO DETALLADAS
         ======================================== -->
    <section class="servicios-content section-alt" aria-labelledby="preguntas-seo-heading">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="preguntas-seo-heading" class="section-seo-title">Todo lo que necesitas saber sobre crear empresa en Suiza</h2>
                <p class="section-seo-intro">Respondemos en detalle las preguntas mas frecuentes de empresarios <strong>hispanohablantes</strong> que quieren <strong>crear empresa en Suiza</strong>.</p>
            </div>

            <!-- PREGUNTA 1: Cuanto cuesta -->
            <div class="pregunta-seo-block animate-on-scroll fade-up" id="cuanto-cuesta-crear-empresa-suiza">
                <h3 class="pregunta-seo-titulo">¿Cuanto cuesta crear una empresa en Suiza?</h3>
                <p class="pregunta-seo-snippet"><strong>Crear una empresa en Suiza cuesta entre 5.700 y 16.000 CHF</strong> dependiendo del tipo de sociedad, sin contar el capital social. Una <strong>GmbH</strong> (equivalente a SL) requiere unos 5.700-10.500 CHF en gastos de constitucion mas 20.000 CHF de capital. Una <strong>AG</strong> (sociedad anonima) sube a 8.500-16.000 CHF mas 50.000 CHF de capital minimo desembolsado.</p>

                <div class="pregunta-seo-contenido">
                    <p>Estos son los numeros reales que manejamos con nuestros clientes:</p>

                    <div class="tabla-comparativa-wrapper">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Tipo de sociedad</th>
                                    <th>Gastos constitucion</th>
                                    <th>Capital minimo</th>
                                    <th>Total minimo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>GmbH (SL suiza)</strong></td>
                                    <td>5.700-10.500 CHF</td>
                                    <td>20.000 CHF</td>
                                    <td>25.700 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong>AG (SA suiza)</strong></td>
                                    <td>8.500-16.000 CHF</td>
                                    <td>50.000 CHF*</td>
                                    <td>58.500 CHF</td>
                                </tr>
                                <tr>
                                    <td><strong>Einzelfirma (autonomo)</strong></td>
                                    <td>500-1.500 CHF</td>
                                    <td>0 CHF</td>
                                    <td>500 CHF</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="tabla-nota">*La AG requiere 100.000 CHF de capital, pero solo 50.000 CHF de desembolso inicial.</p>

                    <p>Los gastos de constitucion incluyen notaria, <strong>registro mercantil</strong>, asesoramiento legal y fiscal, domicilio social y apertura de cuenta bancaria.</p>

                    <p>Lo que mucha gente no tiene en cuenta es el <strong>coste anual de mantenimiento</strong>. Una GmbH cuesta entre 5.200 y 12.000 CHF al año en contabilidad, domicilio y gestion. Una AG puede llegar a 36.500 CHF si necesita auditoria.</p>

                    <div class="highlight-box">
                        <p>¿El coste te parece alto? Comparalo con lo que pagas en impuestos en España y veras que se amortiza en el primer año.</p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 2: Que se necesita -->
            <div class="pregunta-seo-block animate-on-scroll fade-up" id="que-se-necesita-montar-negocio-suiza">
                <h3 class="pregunta-seo-titulo">¿Que se necesita para montar un negocio en Suiza?</h3>
                <p class="pregunta-seo-snippet">Para <strong>montar un negocio en Suiza</strong> necesitas: capital inicial (desde 0 CHF para autonomo hasta 100.000 CHF para AG), un domicilio social en territorio suizo, y en el caso de sociedades, al menos un administrador o consejero con residencia en Suiza. <strong>No necesitas ser suizo ni vivir alli para ser propietario.</strong></p>

                <div class="pregunta-seo-contenido">
                    <p>Los <strong>requisitos</strong> concretos dependen del tipo de estructura que elijas:</p>

                    <h4>Para una GmbH (la mas habitual):</h4>
                    <ul class="requisitos-lista">
                        <li><strong>Capital social</strong> de 20.000 CHF depositado en banco suizo</li>
                        <li>Domicilio social en Suiza (puede ser una oficina virtual)</li>
                        <li>Al menos un gerente con residencia en Suiza</li>
                        <li>Estatutos redactados segun el Codigo de Obligaciones suizo</li>
                        <li>Inscripcion en el <strong>Registro Mercantil</strong> cantonal</li>
                    </ul>

                    <h4>Para una AG:</h4>
                    <ul class="requisitos-lista">
                        <li><strong>Capital social</strong> de 100.000 CHF (50.000 desembolsados)</li>
                        <li>Domicilio social en Suiza</li>
                        <li>Consejo de administracion con al menos un miembro residente en Suiza</li>
                        <li>Estatutos y documentacion mas compleja</li>
                    </ul>

                    <h4>Para un Einzelfirma (autonomo):</h4>
                    <ul class="requisitos-lista">
                        <li>Permiso de residencia y trabajo en Suiza</li>
                        <li>Inscripcion en el registro si facturas mas de 100.000 CHF/año</li>
                        <li>Alta en IVA si superas 100.000 CHF de facturacion</li>
                    </ul>

                    <div class="highlight-box">
                        <p>El requisito del administrador o consejero residente es el que mas complica las cosas a empresarios extranjeros. Pero tiene solucion: puedes contratar un <strong>fiduciario profesional</strong> que actue como administrador nominal mientras tu mantienes el control real de la empresa.</p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 3: Puede un extranjero -->
            <div class="pregunta-seo-block animate-on-scroll fade-up" id="puede-extranjero-crear-empresa-suiza">
                <h3 class="pregunta-seo-titulo">¿Puede un extranjero crear una empresa en Suiza?</h3>
                <p class="pregunta-seo-snippet"><strong>Si, un extranjero puede crear una empresa en Suiza sin restricciones de nacionalidad.</strong> Puedes ser propietario al 100% de una GmbH o AG suiza siendo español, latinoamericano o de cualquier pais. El unico requisito es que al menos un administrador o consejero tenga residencia en Suiza, pero eso se resuelve con un fiduciario profesional.</p>

                <div class="pregunta-seo-contenido">
                    <p>Esta es una de las preguntas mas frecuentes que recibimos, y la respuesta es clara: <strong>si, puedes</strong>.</p>

                    <p>Suiza no discrimina por nacionalidad a la hora de <strong>crear empresas</strong>. Un ciudadano español, mexicano, argentino o de cualquier otro pais puede:</p>

                    <ul class="requisitos-lista">
                        <li>Ser accionista unico de una <strong>AG suiza</strong></li>
                        <li>Ser socio unico de una <strong>GmbH suiza</strong></li>
                        <li>Poseer el 100% del capital de cualquier sociedad</li>
                    </ul>

                    <p>Lo que si necesitas es cumplir el requisito de representacion local:</p>

                    <div class="tabla-comparativa-wrapper">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Tipo sociedad</th>
                                    <th>Requisito de residencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>GmbH</strong></td>
                                    <td>Al menos un gerente residente en Suiza</td>
                                </tr>
                                <tr>
                                    <td><strong>AG</strong></td>
                                    <td>Al menos un consejero residente en Suiza</td>
                                </tr>
                                <tr>
                                    <td><strong>Holding</strong></td>
                                    <td>Al menos un administrador residente en Suiza</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p>¿Como lo resolvemos? Con un servicio de <strong>administrador o consejero fiduciario</strong>. Una persona fisica con residencia suiza que actua como representante legal mientras tu mantienes el control efectivo de la empresa a traves de poderes, contratos y pactos de socios.</p>

                    <div class="highlight-box">
                        <p>Es legal, es habitual, y es exactamente lo que hacemos para el 70% de nuestros clientes que no viven en Suiza.</p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 4: Cuantos impuestos -->
            <div class="pregunta-seo-block animate-on-scroll fade-up" id="cuantos-impuestos-paga-empresa-suiza">
                <h3 class="pregunta-seo-titulo">¿Cuantos impuestos paga una empresa en Suiza?</h3>
                <p class="pregunta-seo-snippet">Una <strong>empresa en Suiza paga entre el 11% y el 21% de impuesto de sociedades</strong> dependiendo del canton donde este domiciliada. Los cantones mas favorables como Zug o Nidwalden rondan el 12%, mientras que Ginebra o Vaud pueden llegar al 14-22%. Compara esto con el 25% de España mas el 19-26% de dividendos.</p>

                <div class="pregunta-seo-contenido">
                    <p>El <strong>impuesto de sociedades en Suiza</strong> tiene dos componentes:</p>

                    <ul class="requisitos-lista">
                        <li><strong>Impuesto federal:</strong> 8,5% fijo sobre el beneficio neto (igual en todo el pais)</li>
                        <li><strong>Impuesto cantonal y municipal:</strong> Variable entre el 3% y el 13% segun donde este la empresa</li>
                    </ul>

                    <p>El resultado es un tipo efectivo total que varia mucho segun el <strong>canton</strong>:</p>

                    <div class="tabla-comparativa-wrapper">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Canton</th>
                                    <th>Impuesto total sociedades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Zug</strong></td>
                                    <td>~12%</td>
                                </tr>
                                <tr>
                                    <td><strong>Nidwalden</strong></td>
                                    <td>~12%</td>
                                </tr>
                                <tr>
                                    <td><strong>Schwyz</strong></td>
                                    <td>~13%</td>
                                </tr>
                                <tr>
                                    <td><strong>Basel</strong></td>
                                    <td>~13%</td>
                                </tr>
                                <tr>
                                    <td><strong>Zurich</strong></td>
                                    <td>~14%</td>
                                </tr>
                                <tr>
                                    <td><strong>Ginebra</strong></td>
                                    <td>~14-15%</td>
                                </tr>
                                <tr>
                                    <td><strong>Vaud</strong></td>
                                    <td>~18-22%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p>Ahora compara con España:</p>

                    <div class="tabla-comparativa-wrapper">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Concepto</th>
                                    <th>España</th>
                                    <th>Suiza (canton favorable)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Impuesto sociedades</strong></td>
                                    <td>25%</td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td><strong>Impuesto dividendos</strong></td>
                                    <td>19-26%</td>
                                    <td>0-7%*</td>
                                </tr>
                                <tr>
                                    <td><strong>Carga fiscal total</strong></td>
                                    <td>~40-45%</td>
                                    <td>~15-20%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="tabla-nota">*En holdings suizas, el 95% de los dividendos recibidos estan exentos de tributacion.</p>

                    <div class="highlight-box">
                        <p>La diferencia puede suponer decenas o cientos de miles de euros al año. Un cliente nuestro con beneficios de 500.000€ paso de pagar 225.000€ en España a 75.000 CHF en Suiza. Misma actividad, diferente estructura.</p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 5: Regla 8 dias -->
            <div class="pregunta-seo-block animate-on-scroll fade-up" id="regla-8-dias-suiza">
                <h3 class="pregunta-seo-titulo">¿Que es la regla de los 8 dias en Suiza?</h3>
                <p class="pregunta-seo-snippet">La <strong>regla de los 8 dias en Suiza</strong> establece que si trabajas fisicamente en territorio suizo mas de 8 dias al año, puedes generar obligaciones fiscales y de seguridad social en el pais. Es relevante para empresarios con empresa suiza que viajan frecuentemente, ya que puede crear un "establecimiento permanente" no deseado o complicaciones con la residencia fiscal.</p>

                <div class="pregunta-seo-contenido">
                    <p>Esta regla genera mucha confusion, asi que vamos a aclararla.</p>

                    <p>La regla de los 8 dias <strong>no significa que no puedas ir a Suiza mas de 8 dias</strong>. Lo que dice es que si realizas actividad laboral remunerada en Suiza durante mas de 8 dias al año, pueden pasar varias cosas:</p>

                    <h4>Para trabajadores por cuenta ajena:</h4>
                    <ul class="requisitos-lista">
                        <li>Obligacion de cotizar a la seguridad social suiza</li>
                        <li>Posible retencion de impuestos en origen</li>
                        <li>Necesidad de permisos de trabajo especificos</li>
                    </ul>

                    <h4>Para empresarios con sociedad suiza:</h4>
                    <ul class="requisitos-lista">
                        <li>Riesgo de que las autoridades consideren que la gestion efectiva esta en Suiza</li>
                        <li>Posible creacion de <strong>establecimiento permanente</strong> si no lo habia</li>
                        <li>Implicaciones para la residencia fiscal personal</li>
                    </ul>

                    <h4>Lo que debes saber:</h4>
                    <p>Si tienes una <strong>empresa en Suiza</strong> pero vives en España, tus viajes a Suiza para reuniones, supervision o gestion cuentan. Si superas los 8 dias de forma recurrente, necesitas planificar bien para evitar problemas.</p>

                    <p>No es que no puedas viajar. Es que hay que documentarlo correctamente y, en algunos casos, estructurar la relacion laboral de forma que cumpla con ambas jurisdicciones.</p>

                    <div class="highlight-box">
                        <p>Esto es exactamente el tipo de detalle que revisamos en la consulta inicial. Muchos asesores generalistas ni siquiera conocen esta regla.</p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 6: IVA en Suiza -->
            <div class="pregunta-seo-block animate-on-scroll fade-up" id="cuanto-pagan-iva-suiza">
                <h3 class="pregunta-seo-titulo">¿Cuanto pagan de IVA en Suiza?</h3>
                <p class="pregunta-seo-snippet">El <strong>IVA en Suiza es del 8,1%</strong> como tipo general, el mas bajo de Europa occidental. Existen tipos reducidos del 2,6% para alimentacion basica y productos de primera necesidad, y del 3,8% para alojamiento hotelero. Compara esto con el 21% de España y veras la ventaja competitiva para negocios con mucho volumen de ventas.</p>

                <div class="pregunta-seo-contenido">
                    <p>El <strong>IVA suizo</strong> es una de las ventajas menos conocidas pero mas potentes para ciertos negocios.</p>

                    <div class="tabla-comparativa-wrapper">
                        <table class="tabla-comparativa tabla-responsive">
                            <thead>
                                <tr>
                                    <th>Tipo de IVA</th>
                                    <th>Suiza</th>
                                    <th>España</th>
                                    <th>Diferencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>General</strong></td>
                                    <td>8,1%</td>
                                    <td>21%</td>
                                    <td>-12,9 puntos</td>
                                </tr>
                                <tr>
                                    <td><strong>Reducido</strong></td>
                                    <td>2,6%</td>
                                    <td>10%</td>
                                    <td>-7,4 puntos</td>
                                </tr>
                                <tr>
                                    <td><strong>Hotelero</strong></td>
                                    <td>3,8%</td>
                                    <td>10%</td>
                                    <td>-6,2 puntos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4>¿A quien beneficia especialmente?</h4>
                    <ul class="requisitos-lista">
                        <li><strong>E-commerce:</strong> Si vendes productos a consumidores europeos desde Suiza, tu margen es automaticamente mayor</li>
                        <li><strong>Servicios digitales:</strong> Software, SaaS, consultoria online con clientes europeos</li>
                        <li><strong>Hosteleria y turismo:</strong> El 3,8% de IVA hotelero es imbatible</li>
                        <li><strong>Comercio B2B internacional:</strong> Exportaciones exentas + importaciones con IVA bajo</li>
                    </ul>

                    <p><strong>Dato importante:</strong> Las empresas suizas deben registrarse a efectos de IVA si su facturacion supera los 100.000 CHF anuales. Por debajo de ese umbral, el registro es opcional.</p>

                    <div class="highlight-box">
                        <p>Para empresarios que venden principalmente a otros paises de la UE, la estructura suiza puede suponer un ahorro de 10-15 puntos en cada transaccion. En volumenes grandes, eso son decenas de miles de euros al año.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECCION: FAQ -->
    <section class="servicios-content faq-section section-alt" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <div class="section-seo-block">
                <h2 id="faq-heading" class="section-seo-title">Preguntas frecuentes sobre crear empresa en Suiza</h2>
            </div>

            <div class="faq-list animate-on-scroll fade-up" role="list">
                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-1" id="faq-crear-q1">
                        <span itemprop="name">¿Puedo crear una empresa en Suiza sin vivir alli?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-1" role="region" aria-labelledby="faq-crear-q1" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Necesitas un administrador o consejero con residencia en Suiza, que puede ser un profesional fiduciario. GNS Advisory ofrece este servicio.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-2" id="faq-crear-q2">
                        <span itemprop="name">¿Cuanto cuesta crear una empresa en Suiza?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-2" role="region" aria-labelledby="faq-crear-q2" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende de la estructura. Una <strong>GmbH</strong> cuesta entre 5.700 y 10.500 CHF de constitucion mas 20.000 CHF de <strong>capital</strong>. Un <strong>autonomo</strong> puede constituirse por 500-1.500 CHF sin capital.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-3" id="faq-crear-q3">
                        <span itemprop="name">¿Cuanto tiempo tarda el proceso?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-3" role="region" aria-labelledby="faq-crear-q3" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Entre 6 y 10 semanas segun la estructura. La <strong>GmbH</strong> y el <strong>autonomo</strong> son mas rapidos (6-8 semanas). La <strong>AG</strong> requiere mas tiempo (8-10 semanas).</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-4" id="faq-crear-q4">
                        <span itemprop="name">¿Que estructura es mejor para mi?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-4" role="region" aria-labelledby="faq-crear-q4" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende de tu facturacion, planes de crecimiento y si vas a residir en Suiza. En la consulta inicial analizamos tu caso y te recomendamos la <strong>estructura</strong> optima.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-5" id="faq-crear-q5">
                        <span itemprop="name">¿Necesito hablar aleman o frances?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-5" role="region" aria-labelledby="faq-crear-q5" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No. Nosotros gestionamos todo en español. Los documentos oficiales van en el idioma del <strong>canton</strong>, pero te los traducimos y explicamos.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-6" id="faq-crear-q6">
                        <span itemprop="name">¿Puedo tener empresa en Suiza y seguir viviendo en España?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-6" role="region" aria-labelledby="faq-crear-q6" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si, pero tu tributacion personal seguira siendo española. La <strong>empresa suiza</strong> paga impuestos en Suiza, pero tus dividendos tributan donde resides.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-7" id="faq-crear-q7">
                        <span itemprop="name">¿Que pasa si mi negocio no funciona?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-7" role="region" aria-labelledby="faq-crear-q7" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Puedes liquidar la empresa. El proceso es mas sencillo y rapido que en España. El capital que quede despues de pagar deudas es tuyo.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-crear-8" id="faq-crear-q8">
                        <span itemprop="name">¿GNS Advisory gestiona todo el proceso?</span>
                    </button>
                    <div class="faq-answer" id="faq-crear-8" role="region" aria-labelledby="faq-crear-q8" hidden itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Si. Nos encargamos de todo: eleccion de <strong>canton</strong>, estatutos, banco, notaria, <strong>registro</strong>. Tu solo firmas y depositas el capital.</p>
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
                    <h2 id="cta-final-heading" class="cta-title">Mira, esto es simple.</h2>

                    <div class="cta-text animate-on-scroll fade-up">
                        <p>Si estas pagando mas de 100.000€ al ano en impuestos y no has hablado con alguien que entienda Suiza, estas perdiendo dinero.</p>

                        <p class="cta-emphasis">Cada mes.</p>
                        <p class="cta-emphasis">Cada ano.</p>
                        <p class="cta-emphasis">Para siempre.</p>

                        <p>Yo puedo decirte en una hora si tiene sentido <strong>crear una empresa en Suiza</strong> o si ya lo tienes todo bien.</p>
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

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" class="btn btn-primary cta-button" target="_blank" rel="noopener" aria-label="Reservar consulta para crear empresa en Suiza">Quiero dejar de regalar mi dinero</a>

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
