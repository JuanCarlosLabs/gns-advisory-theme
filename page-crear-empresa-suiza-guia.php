<?php
/**
 * Template Name: Blog - Crear Empresa Suiza Guía
 * Artículo SEO: Cómo Crear Empresa en Suiza - Guía Completa de Tipos de Sociedades
 * URL Slug: /blog/crear-empresa-suiza-guia/
 *
 * Meta Título: Cómo Crear Empresa en Suiza 2026: Guía Completa Paso a Paso
 * Meta Descripción: Guía completa sobre cómo crear empresa en Suiza. GmbH, AG, Holding o Einzelfirma según tu facturación. Impuestos 12-15%, procesos y errores a evitar.
 * Keyword Principal: cómo crear empresa en suiza
 * Keywords Secundarias: empresa en suiza, tipos de empresas en suiza, cuánto cuesta abrir empresa suiza, requisitos abrir empresa en suiza, abrir negocio suiza, creación de empresa en suiza, pasos crear empresa suiza
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/blog-article.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main blog-article-page">

    <article itemscope itemtype="https://schema.org/BlogPosting">
        <meta itemprop="mainEntityOfPage" content="<?php echo get_permalink(); ?>">
        <meta itemprop="datePublished" content="2025-01-22">
        <meta itemprop="dateModified" content="2026-01-23">

        <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display:none;">
            <meta itemprop="name" content="GNS Group Advisory">
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
            </span>
        </span>

        <?php
        // Variables para el hero - Above The Fold con imagen de fondo
        $article_title = 'Cómo Crear Empresa en Suiza: Guía Paso a Paso 2026';
        $article_subtitle = 'Cómo crear empresa en Suiza: requisitos, costes y trámites';
        $article_image_url = home_url('/wp-content/uploads/2026/02/Como-Crear-Empresa-en-Suiza-Requisitos_-Costes-y-Tramites.webp');
        $article_excerpt = 'Esta guía sobre cómo crear empresa en Suiza te lleva de la mano por todo el proceso. Desde elegir entre GmbH o AG hasta abrir cuentas bancarias y pasar por notaría. Todo explicado paso a paso para que montes tu negocio en el país más estable del mundo sin perderte por el camino.';
        $article_category = 'Crear Empresa';
        $article_category_url = home_url('/categoria/crear-empresa-suiza/');
        $article_date = '22 de enero de 2025';
        $article_date_iso = '2025-01-22';
        $article_reading_time = '18';
        $author_name = 'Alejandra Ortiz';
        $author_role = 'Asesora Fiscal en Suiza';
        $author_image_url = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');
        // La featured image se usará como fondo del hero si está configurada en WordPress

        // Incluir el hero template
        include(get_template_directory() . '/template-parts/blog-article-hero.php');
        ?>

        <!-- Article Content -->
        <div class="article-content" itemprop="articleBody">

            <!-- Intro Hook - Estilo Isra Bravo -->
            <div class="intro-hook">
                <p>Crear empresa en Suiza no es difícil. Lo difícil es elegir la estructura correcta.</p>

                <p>Porque si eliges mal, puedes acabar pagando más impuestos de los necesarios, teniendo problemas con Hacienda española, o montando una estructura que no encaja con tu negocio.</p>

                <p>Lo he visto cientos de veces. Empresarios que montan una GmbH cuando les convenía una Holding. Freelances que crean sociedad cuando deberían haber empezado como autónomos. Gente que paga 30.000 CHF en estructurar algo que podría haberse hecho con 5.000 CHF.</p>

                <p>Llevo 4 años dedicada exclusivamente a ayudar a empresarios hispanohablantes a crear tu empresa en Suiza. He montado más de 500 estructuras. En esta guía:</p>

                <ul class="intro-list">
                    <li>Explico los 4 tipos de estructuras (Einzelfirma, GmbH, AG, Holding) con casos reales.</li>
                    <li>Te muestro cuál elegir según tu facturación y situación.</li>
                    <li>Te enseño el proceso real con plazos y costes exactos.</li>
                    <li>Evitas los 7 errores más costosos que veo constantemente.</li>
                </ul>
                <p>Desde aquí puedes saltar a guías más específicas si ya sabes qué estructura te interesa. Sin rodeos. Solo lo que necesitas para tomar una buena decisión.</p>
            </div>

            <h2>Por Qué Crear Empresa en Suiza en Lugar de España</h2>

            <p>Antes de entrar en los tipos de sociedades, vamos a lo importante: ¿por qué crear empresa en Suiza tiene sentido?</p>

            <p>Los números hablan solos:</p>

            <table class="info-table">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th class="spain-header">🇪🇸 España</th>
                        <th class="swiss-header">🇨🇭 Suiza</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Impuesto de Sociedades</td>
                        <td>25%</td>
                        <td>12-15%</td>
                    </tr>
                    <tr>
                        <td>IRPF máximo</td>
                        <td>45%</td>
                        <td>22-35%</td>
                    </tr>
                    <tr>
                        <td>IVA general</td>
                        <td>21%</td>
                        <td>8,1%</td>
                    </tr>
                    <tr>
                        <td>Dividendos</td>
                        <td>19-26%</td>
                        <td>0-50% exento*</td>
                    </tr>
                    <tr>
                        <td>Actitud de Hacienda</td>
                        <td>Persecutoria</td>
                        <td>Colaborativa</td>
                    </tr>
                </tbody>
            </table>

            <p><small>*En Suiza, entre el 50% y el 70% de los dividendos pueden estar exentos de tributación según el cantón.</small></p>

            <p>Pero más allá de los impuestos en Suiza, hay algo que no se puede medir con números: la tranquilidad.</p>

            <p>En España, Hacienda te trata como sospechoso. Cualquier movimiento raro y ya te están investigando. En Suiza, la fiscalidad funciona diferente: te tratan como cliente, no como criminal.</p>

            <p>Si tienes un negocio que factura más de 200.000-300.000€ al año y estás harto de vivir con miedo a la próxima carta de Hacienda, crear empresa en Suiza puede ser la mejor decisión de tu vida profesional.</p>

            <h2>Tipos de Empresas en Suiza: Las 4 Estructuras que Debes Conocer</h2>

            <p>En Suiza existen varias formas jurídicas para crear sociedad. Estas son las 4 que te interesan como empresario español:</p>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Capital</th>
                        <th>Equivalente ES</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Einzelfirma</td>
                        <td>0 CHF</td>
                        <td>Autónomo</td>
                        <td>Freelances, inicio</td>
                    </tr>
                    <tr>
                        <td>GmbH</td>
                        <td>20.000 CHF</td>
                        <td>SL (Soc. Limitada)</td>
                        <td>Pymes, mayoría</td>
                    </tr>
                    <tr>
                        <td>AG</td>
                        <td>100.000 CHF*</td>
                        <td>SA (Soc. Anónima)</td>
                        <td>Grandes, inversores</td>
                    </tr>
                    <tr>
                        <td>Holding</td>
                        <td>20.000+ CHF</td>
                        <td>Holding</td>
                        <td>Varias empresas</td>
                    </tr>
                </tbody>
            </table>

            <p><small>*AG: 50.000 CHF desembolsados mínimo en la constitución.</small></p>

            <h2>Einzelfirma: El Autónomo Suizo (Sin Cuota Fija)</h2>

            <p>La Einzelfirma es la forma más simple de crear empresa en Suiza. Es el equivalente a ser autónomo en España, pero con una diferencia brutal:</p>

            <p><strong>No existe cuota de autónomo.</strong></p>

            <div class="article-link-box">
                <p><strong>→ Si eres freelance o consultor hispanohablante,</strong> consulta nuestra <a href="/blog/autonomo-suiza-einzelfirma/"><strong>guía completa para hacerse autónomo en Suiza (Einzelfirma)</strong></a> con requisitos, impuestos reales por cantón y ejemplos de cuánto pagarías.</p>
            </div>

            <p>En España pagas 300€+ al mes hagas lo que hagas. En Suiza, si no ganas, no pagas. Así de simple.</p>

            <h3>Características de la Einzelfirma</h3>

            <ul>
                <li><strong>Capital mínimo:</strong> 0 CHF (puedes empezar sin invertir nada)</li>
                <li><strong>Registro mercantil:</strong> Opcional si facturas menos de 100.000 CHF/año</li>
                <li><strong>Tributación:</strong> Como persona física (IRPF suizo del 22-35% según cantón)</li>
                <li><strong>Responsabilidad:</strong> Ilimitada (tu patrimonio personal responde)</li>
                <li><strong>IVA:</strong> Solo obligatorio si facturas más de 100.000 CHF/año</li>
                <li><strong>Contabilidad:</strong> Simplificada</li>
            </ul>

            <h3>Cuándo Elegir Einzelfirma para Crear tu Empresa</h3>

            <p><strong>Te conviene si:</strong></p>
            <ul class="pros-list">
                <li>Eres freelance, consultor o profesional independiente</li>
                <li>Estás empezando y no sabes cuánto vas a facturar</li>
                <li>Facturas menos de 150.000 CHF al año</li>
                <li>No tienes empleados ni grandes inversiones</li>
            </ul>

            <p><strong>No te conviene si:</strong></p>
            <ul class="cons-list">
                <li>Facturas más de 200.000 CHF (mejor GmbH por fiscalidad)</li>
                <li>Tu negocio tiene riesgo (responsabilidad ilimitada)</li>
                <li>Necesitas dar imagen corporativa a clientes grandes</li>
            </ul>

            <div class="case-study-box">
                <h4>📋 Caso Real: Diseñador Gráfico que Creó Einzelfirma</h4>
                <p><strong>Perfil:</strong> Carlos, diseñador gráfico español, 38 años. Facturaba 70.000€ en España como autónomo.</p>
                <p><strong>Problema:</strong> Pagaba 4.200€/año de cuota de autónomo + 23.000€ de IRPF. Total: 27.200€ en impuestos y cargas.</p>
                <p><strong>Solución:</strong> Se mudó a Zug y creó una Einzelfirma.</p>
                <p><strong>Resultado:</strong> Ahora paga ~15.400 CHF al año (contribuciones AVS + IRPF cantonal). Sin cuota fija mensual. <strong>Ahorro anual: ~12.000 CHF.</strong></p>
            </div>

            <h2>GmbH Suiza: La Sociedad Limitada que Más Recomendamos</h2>

            <p>La GmbH (Gesellschaft mit beschränkter Haftung) es el equivalente suizo a la Sociedad Limitada española. Es, con diferencia, la estructura más popular para crear empresa en Suiza.</p>

            <p>¿Por qué? Porque combina protección (responsabilidad limitada) con flexibilidad fiscal (impuesto de sociedades del 12-15%).</p>

            <div class="article-link-box">
                <p><strong>→ Si tienes una agencia, consultoría o negocio de servicios online facturando 150k–1M CHF,</strong> mira la <a href="/blog/guia-gmbh-suiza/"><strong>guía de GmbH para hispanohablantes de servicios en 2026</strong></a> con capital mínimo, mejores cantones, pasos semana a semana y los 5 errores que más dinero cuestan.</p>
            </div>

            <h3>Características de la GmbH Suiza</h3>

            <ul>
                <li><strong>Capital mínimo:</strong> 20.000 CHF (100% desembolsado en la constitución)</li>
                <li><strong>Socios:</strong> Mínimo 1 socio (puede ser extranjero)</li>
                <li><strong>Administrador:</strong> Mínimo 1 administrador residente en Suiza</li>
                <li><strong>Tributación:</strong> Impuesto de Sociedades del 12-15% según cantón</li>
                <li><strong>Responsabilidad:</strong> Limitada al capital social</li>
                <li><strong>Contabilidad:</strong> Obligatoria, con auditoría si supera ciertos umbrales</li>
                <li><strong>Registro:</strong> Obligatorio en el Registro Mercantil</li>
            </ul>

            <h3>El Requisito del Administrador Residente</h3>

            <p>Este es un punto importante: para crear sociedad tipo GmbH en Suiza, necesitas que al menos un administrador tenga residencia en Suiza.</p>

            <p>¿Qué opciones tienes?</p>

            <ul>
                <li><strong>Te mudas tú a Suiza</strong> (la opción más común y recomendable)</li>
                <li>Un socio tuyo se muda</li>
                <li>Contratas un administrador fiduciario (más caro y menos control)</li>
            </ul>

            <p>La primera opción es la que más sentido tiene si quieres optimizar tu fiscalidad completa, no solo la de la empresa.</p>

            <h3>Cuándo Elegir GmbH para Crear tu Empresa en Suiza</h3>

            <p><strong>Te conviene si:</strong></p>
            <ul class="pros-list">
                <li>Facturas más de 150.000-200.000 CHF al año</li>
                <li>Quieres separar patrimonio personal y empresarial</li>
                <li>Necesitas dar imagen profesional a clientes</li>
                <li>Planeas reinvertir beneficios en el negocio</li>
                <li>Vas a contratar empleados</li>
            </ul>

            <p><strong>No te conviene si:</strong></p>
            <ul class="cons-list">
                <li>Estás empezando y no sabes si funcionará</li>
                <li>No puedes o no quieres mudarte a Suiza</li>
                <li>Facturas poco y los costes de estructura no compensan</li>
            </ul>

            <div class="article-link-box">
                <p><strong>→ Si tienes o planeas tener varias empresas,</strong> consulta nuestra <a href="/blog/guia-holding-suiza/"><strong>guía de Holding Suiza</strong></a> para entender cuándo tiene sentido consolidar con esta estructura.</p>
            </div>

            <div class="case-study-box">
                <h4>📋 Caso Real: Consultora de Marketing que Creó una GmbH</h4>
                <p><strong>Perfil:</strong> Laura, consultora de marketing digital, 42 años. Facturaba 280.000€ en España con su SL.</p>
                <p><strong>Problema:</strong> Pagaba 70.000€ en Impuesto de Sociedades + 35.000€ en IRPF por dividendos. Hacienda le había abierto dos inspecciones en 3 años.</p>
                <p><strong>Solución:</strong> Cerró la SL española (correctamente, sin problemas fiscales), se mudó a Schwyz y creó una GmbH.</p>
                <p><strong>Resultado:</strong> Impuesto de Sociedades: ~36.000 CHF (13%). Dividendos parcialmente exentos. <strong>Ahorro anual: ~50.000 CHF.</strong> Cero inspecciones en 2 años.</p>
            </div>

            <h2>AG Suiza: La Sociedad Anónima para Grandes Empresas</h2>

            <p>La AG (Aktiengesellschaft) es el equivalente suizo a la Sociedad Anónima española. Es la estructura más "seria" y formal.</p>

            <h3>Características de la AG Suiza</h3>

            <ul>
                <li><strong>Capital mínimo:</strong> 100.000 CHF (mínimo 50.000 CHF desembolsados)</li>
                <li><strong>Socios:</strong> Mínimo 1 accionista</li>
                <li><strong>Consejo de Administración:</strong> Obligatorio, mayoría residente en Suiza</li>
                <li><strong>Tributación:</strong> Igual que GmbH (12-15% según cantón)</li>
                <li><strong>Responsabilidad:</strong> Limitada al capital</li>
                <li><strong>Acciones:</strong> Transferibles (facilita entrada de inversores)</li>
                <li><strong>Auditoría:</strong> Obligatoria si supera umbrales</li>
            </ul>

            <h3>Cuándo Elegir AG en Lugar de GmbH</h3>

            <p><strong>Elige AG si:</strong></p>
            <ul class="pros-list">
                <li>Planeas meter inversores externos</li>
                <li>Quieres facilitar la transmisión de acciones</li>
                <li>Tu negocio tiene facturación muy alta (1M+ CHF)</li>
                <li>Necesitas máxima credibilidad corporativa</li>
                <li>Planeas salir a bolsa en el futuro</li>
            </ul>

            <p>En la mayoría de casos, la GmbH es suficiente. La AG tiene más requisitos formales y costes de mantenimiento. Solo tiene sentido si realmente necesitas sus ventajas específicas.</p>

            <h2>Holding Suiza: La Estructura para Empresarios con Varias Sociedades</h2>

            <p>La Holding es, probablemente, la estructura más potente fiscalmente para crear empresa en Suiza. Pero no es para todos.</p>

            <h3>Qué es una Holding y Cómo Funciona</h3>

            <div class="article-link-box">
                <p><strong>→ Si tienes 2+ empresas en España, Francia o LATAM y quieres consolidar dividendos,</strong> lee la <a href="/blog/guia-holding-suiza/"><strong>guía de Holding para varias empresas en Europa</strong></a> con ejemplos de cómo funciona el 95% de participación exenta y cuándo realmente tiene sentido.</p>
            </div>

            <p>Una Holding es una sociedad cuya única actividad es poseer participaciones en otras empresas (filiales). No vende productos ni servicios directamente. Solo "tiene" otras empresas.</p>

            <div class="highlight-box">
                <p><strong>La ventaja fiscal brutal:</strong> El 95% de los dividendos que una Holding suiza recibe de sus filiales están EXENTOS de impuestos (participation exemption).</p>
            </div>

            <p><strong>Ejemplo:</strong> Tu empresa operativa en España gana 500.000€ y reparte dividendos a la Holding suiza. La Holding recibe esos dividendos prácticamente sin tributar. Luego, cuando tú como persona física necesitas dinero, lo sacas de la Holding de forma planificada.</p>

            <h3>Cuándo Tiene Sentido Crear una Holding en Suiza</h3>

            <p><strong>Te conviene si:</strong></p>
            <ul class="pros-list">
                <li>Tienes 2+ empresas en diferentes países</li>
                <li>Recibes dividendos significativos de tus sociedades</li>
                <li>Quieres consolidar beneficios y reinvertir sin fricción fiscal</li>
                <li>Tu patrimonio empresarial supera los 2-3 millones de euros</li>
                <li>Planeas adquirir más empresas en el futuro</li>
            </ul>

            <p><strong>No te conviene si:</strong></p>
            <ul class="cons-list">
                <li>Solo tienes una empresa</li>
                <li>No generas dividendos (reinviertes todo)</li>
                <li>Los costes de estructura no compensan el ahorro fiscal</li>
            </ul>

            <div class="case-study-box">
                <h4>📋 Caso Real: Empresario con 3 Sociedades que Montó una Holding</h4>
                <p><strong>Perfil:</strong> Miguel, 52 años. Tenía una empresa en España, otra en Francia y participaciones en una startup alemana. Patrimonio total: ~4M€.</p>
                <p><strong>Problema:</strong> Pagaba impuestos en 3 países diferentes. Los dividendos de cada empresa tributaban al máximo. Hacienda española le había puesto en el punto de mira por sus "operaciones internacionales".</p>
                <p><strong>Solución:</strong> Se mudó a Zug, creó una Holding suiza, y transfirió la propiedad de sus empresas a la Holding (con planificación fiscal correcta para minimizar exit tax).</p>
                <p><strong>Resultado:</strong> Los dividendos ahora fluyen a la Holding casi sin impuestos. Ha comprado 2 empresas más desde entonces. <strong>Ahorro acumulado en 3 años: ~1,8M CHF.</strong></p>
            </div>

            <h2>Comparativa Completa: Qué Estructura Elegir según tu Situación</h2>

            <p>Esta tabla te ayuda a decidir rápidamente:</p>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Tu Situación</th>
                        <th>Estructura</th>
                        <th>Por Qué</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Freelance, &lt;150K CHF/año</td>
                        <td>Einzelfirma</td>
                        <td>Simple, barato, sin capital</td>
                    </tr>
                    <tr>
                        <td>Empresario, 150K-1M CHF/año</td>
                        <td>GmbH</td>
                        <td>Protección + fiscalidad óptima</td>
                    </tr>
                    <tr>
                        <td>Gran empresa, &gt;1M CHF, inversores</td>
                        <td>AG</td>
                        <td>Acciones transferibles</td>
                    </tr>
                    <tr>
                        <td>2+ empresas, dividendos altos</td>
                        <td>Holding</td>
                        <td>95% dividendos exentos</td>
                    </tr>
                </tbody>
            </table>

            <h2>Proceso para Crear Empresa en Suiza: Paso a Paso</h2>

            <p>Esto es lo que tienes que hacer para crear tu empresa en Suiza (ejemplo con GmbH, la más común):</p>

            <h3>Los 7 Pasos para Crear una GmbH en Suiza</h3>

            <div class="article-link-box">
                <p><strong>→ Si quieres ver cada fase con fechas y tareas concretas semana a semana,</strong> consulta la <a href="/blog/pasos-crear-empresa-suiza/"><strong>guía detallada de pasos y plazos reales para crear empresa en Suiza</strong></a> con cronograma 4–8 semanas y qué documentos necesitas en cada punto.</p>
            </div>

            <ol class="steps-list">
                <li>
                    <strong>Elegir cantón y nombre</strong>
                    El cantón determina tus impuestos. El nombre debe estar disponible en el Registro Mercantil.
                </li>
                <li>
                    <strong>Redactar estatutos</strong>
                    Los estatutos definen las reglas de la sociedad. Un abogado o fiduciaria suiza los prepara.
                </li>
                <li>
                    <strong>Abrir cuenta suiza y depositar capital</strong>
                    Necesitas abrir cuenta suiza en un banco y depositar los 20.000 CHF de capital. El banco emite un certificado de depósito.
                </li>
                <li>
                    <strong>Escritura notarial</strong>
                    Un notario suizo formaliza la constitución. Puedes hacerlo por poderes si no puedes ir en persona.
                </li>
                <li>
                    <strong>Inscripción en el Registro Mercantil</strong>
                    La sociedad se inscribe y obtiene personalidad jurídica. Tarda 1-2 semanas.
                </li>
                <li>
                    <strong>Alta en AVS y autoridades fiscales</strong>
                    La empresa se registra en la seguridad social suiza y en la administración fiscal cantonal.
                </li>
                <li>
                    <strong>Alta en IVA (si corresponde)</strong>
                    Si vas a facturar más de 100.000 CHF, te registras en el IVA suizo.
                </li>
            </ol>

            <h3>Tiempos y Costes Reales para Crear Empresa en Suiza</h3>

            <table class="info-table">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>GmbH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Capital social</td>
                        <td>20.000 CHF</td>
                    </tr>
                    <tr>
                        <td>Costes de constitución</td>
                        <td>3.000-6.000 CHF</td>
                    </tr>
                    <tr>
                        <td>Tiempo de constitución</td>
                        <td>4-8 semanas</td>
                    </tr>
                    <tr>
                        <td>Mantenimiento anual (contabilidad, fiduciaria)</td>
                        <td>5.000-15.000 CHF</td>
                    </tr>
                </tbody>
            </table>

            <h2>La Cuenta Bancaria Suiza: Paso Crítico en la Constitución</h2>

            <p>Abrir una cuenta bancaria suiza es parte obligatoria del proceso de crear empresa (especialmente para GmbH, donde necesitas depositar los 20.000 CHF).</p>

            <p>Los bancos suizos son estrictos con el compliance y necesitarás demostrar origen de fondos, actividad real y documentación completa. PostFinance y los bancos cantonales suelen ser más accesibles que UBS para empresarios extranjeros en fase de constitución.</p>

            <div class="article-link-box">
                <p><strong>Para una guía completa sobre cómo abrir cuenta bancaria suiza,</strong> qué bancos funcionan realmente, documentación y plazos, tenemos un pilar dedicado a abrir cuentas bancarias que abordaremos próximamente. Mientras, enfócate en elegir tu estructura.</p>
            </div>

            <h2>7 Errores que Cometen los Españoles al Crear Empresa en Suiza</h2>

            <p>Después de 500+ estructuras, estos son los errores más costosos que veo:</p>

            <div class="error-box">
                <h4>1. Elegir el cantón equivocado</h4>
                <p>Ginebra suena bien, pero pagas 35%+ de impuestos. Zug suena menos glamuroso, pero pagas 22%. Elige con la cabeza, no con el corazón.</p>
            </div>

            <div class="error-box">
                <h4>2. No entender las opciones si no puedes o no quieres mudarte</h4>
                <p><strong>Sí se puede tener una empresa en Suiza viviendo en España.</strong> Hay estructuras legales que lo permiten (holdings, administrador fiduciario, sustancia real en Suiza). Mucha gente lo hace correctamente. Sin embargo, lo ideal para acceder a TODAS las ventajas del sistema suizo (fiscalidad personal, banca, seguridad jurídica) es ser residente.</p>
                <p><a href="/blog/empresa-suiza-sin-residencia/"><strong>Lee la guía completa sobre empresa en Suiza sin residencia: cuándo tiene sentido, cuándo no, y cómo hacerlo bien</strong></a>.</p>
            </div>

            <div class="error-box">
                <h4>3. No planificar la salida de España</h4>
                <p>Si tienes patrimonio superior a 4M€, existe el exit tax. Si no lo planificas bien, puedes pagar una fortuna innecesaria.</p>
            </div>

            <div class="error-box">
                <h4>4. Crear holding sin necesitarla</h4>
                <p>Una holding tiene costes de mantenimiento. Si solo tienes una empresa, probablemente no la necesitas.</p>
            </div>

            <div class="error-box">
                <h4>5. Usar administrador fiduciario como solución permanente</h4>
                <p>Es caro, tienes menos control, y no resuelve tu problema fiscal personal. Múdate tú.</p>
            </div>

            <div class="error-box">
                <h4>6. No coordinar con asesores españoles</h4>
                <p>El cierre de tu situación fiscal en España debe hacerse correctamente. Si no, Hacienda te perseguirá.</p>
            </div>

            <div class="error-box">
                <h4>7. Pensar que Suiza es un paraíso fiscal</h4>
                <p>Suiza NO es un paraíso fiscal. Tiene impuestos (bajos, pero los tiene). Tiene reporting automático con España. Tiene reglas estrictas. Es simplemente un país con fiscalidad competitiva y sensata.</p>
            </div>

            <!-- CTA intermedio -->
            <div class="article-cta">
                <h3>¿Quieres Crear tu Empresa en Suiza Correctamente?</h3>
                <p>En una consulta de 1 hora te digo exactamente qué estructura te conviene y cómo hacerlo sin errores.</p>
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">Reservar consulta (230€)</a>
            </div>

            <h2>Preguntas Frecuentes sobre Crear Empresa en Suiza</h2>

            <div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cuánto cuesta crear empresa en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Para una GmbH: 20.000 CHF de capital + 3.000-6.000 CHF de costes de constitución. Total: 23.000-26.000 CHF aproximadamente.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Puedo crear empresa en Suiza sin vivir allí?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Sí, es legal y mucha gente lo hace. Puedes usar un administrador fiduciario, crear una holding, o estructuras con sustancia real en Suiza. Sin embargo, para acceder a todas las ventajas fiscales (especialmente en tu IRPF personal), lo ideal es ser residente. <a href="/blog/empresa-suiza-sin-residencia/">Mira la guía completa sobre cuándo tiene sentido y cómo hacerlo correctamente</a>.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cuánto tardan en crear una empresa en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Entre 4 y 8 semanas para una GmbH estándar. Una Einzelfirma puede estar lista en días.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Tendré problemas con Hacienda española?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">No, si haces las cosas bien. Eso implica: mudarte realmente, cumplir la regla de los 183 días, cerrar correctamente tu situación fiscal española, y aplicar bien el convenio de doble imposición.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Qué estructura me conviene?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende de tu facturación, número de empresas, y planes futuros. La mayoría de empresarios españoles eligen GmbH. Si tienes varias sociedades, puede tener sentido una Holding.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Es difícil abrir cuenta bancaria en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Más que en España, sí. Los bancos suizos son muy estrictos con el compliance. Pero si tienes actividad legítima y residencia suiza, es perfectamente posible. PostFinance y los bancos cantonales suelen ser más accesibles.</p>
                    </div>
                </div>

            </div>

            <?php
            // Referencias internas para SEO interlinking
            $references = array(
                array('url' => '/blog/guia-gmbh-suiza/', 'title' => 'GmbH en Suiza para hispanohablantes del sector servicios'),
                array('url' => '/blog/autonomo-suiza-einzelfirma/', 'title' => 'Hacerse autónomo en Suiza: Einzelfirma paso a paso'),
                array('url' => '/blog/pasos-crear-empresa-suiza/', 'title' => 'Pasos y plazos reales para crear empresa en Suiza'),
            );
            include(get_template_directory() . '/template-parts/blog-article-references.php');
            ?>

        </div>

    </article>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="final-cta-inner">
            <h3>¿Listo para crear tu empresa en Suiza?</h3>
            <p>En una consulta de 1 hora (230€) te digo exactamente qué estructura te conviene, qué cantón es óptimo para tu perfil, y los pasos exactos para hacerlo bien.</p>
            <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">Reservar consulta (230€)</a>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect - change from transparent to solid
    const header = document.querySelector('.site-header');
    const hero = document.querySelector('.article-hero');

    if (header && hero) {
        function handleScroll() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        handleScroll();

        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // Smooth scroll for hero scroll indicator
    const scrollIndicator = document.querySelector('.hero-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const content = document.querySelector('.article-content');
            if (content) {
                content.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }
});
</script>

<?php get_footer(); ?>
