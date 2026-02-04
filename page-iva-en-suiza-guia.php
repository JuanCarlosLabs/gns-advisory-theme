<?php
/**
 * Template Name: Guía - IVA en Suiza
 * Artículo SEO: Todo lo que necesitas saber sobre el IVA en Suiza si tienes o vas a crear una empresa
 *
 * Meta Título: IVA en Suiza 2026 → Tasas, registro y declaración
 * Meta Descripción: Guía actualizada del IVA en Suiza: tasas del 8,1%, umbral de 100.000 CHF, métodos de declaración y comparativa con España. Para empresarios hispanohablantes.
 * Keyword Principal: iva en suiza
 * Keywords Secundarias: iva suiza, impuesto iva suiza, tipo iva suiza, porcentaje iva suiza
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/blog-article.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main blog-article-page">

    <article itemscope itemtype="https://schema.org/BlogPosting">
        <meta itemprop="mainEntityOfPage" content="<?php echo get_permalink(); ?>">
        <meta itemprop="datePublished" content="2026-02-02">
        <meta itemprop="dateModified" content="2026-02-02">

        <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display:none;">
            <meta itemprop="name" content="GNS Group Advisory">
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
            </span>
        </span>

        <?php
        // Variables para el hero - Above The Fold con imagen de fondo
        $article_title = 'Cómo Funciona el IVA en Suiza: Guía Completa 2026';
        $article_subtitle = 'Todo sobre cómo funciona el IVA en Suiza para tu negocio';
        $article_image_url = 'https://www.gnsgroupadvisory.local/wp-content/uploads/2026/02/Como-Funciona-el-IVA-en-Suiza-Tasas_-Obligaciones-y-Recuperacion.webp';
        $article_excerpt = 'Aprender cómo funciona el IVA en Suiza te evita multas y dolores de cabeza. Aquí te explicamos las tasas del 8,1%, cuándo es obligatorio registrarte y cómo recuperar el impuesto de tus gastos. Contabilidad clara desde el primer día. Sin complicaciones innecesarias.';
        $article_category = 'Fiscalidad Suiza';
        $article_category_url = home_url('/categoria/fiscalidad-suiza/');
        $article_date = '2 de febrero de 2026';
        $article_date_iso = '2026-02-02';
        $article_reading_time = '18';
        $author_name = 'Alejandra Ortiz';
        $author_role = 'Asesora Fiscal en Suiza';
        $author_image_url = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');

        // Incluir el hero template
        include(get_template_directory() . '/template-parts/blog-article-hero.php');
        ?>

        <!-- Article Content -->
        <div class="article-content" itemprop="articleBody">

            <!-- Intro Hook -->
            <div class="intro-hook">
                <p>Un empresario español que llega a Suiza suele flipar cuando ve la factura del material de oficina: donde esperaba un 21%, ve un 8,1%. Esos 13 puntos de diferencia se notan en la caja cada mes.</p>

                <p>Pero el IVA suizo (conocido como MwSt o Mehrwertsteuer) tiene sus propias reglas. Reglas que si no conoces, te pueden costar multas de hasta 20.000 CHF por errores o intereses del 4,5% anual por mora. Esta guía te explica cómo funciona todo, sin rodeos.</p>
            </div>

            <!-- Bloque Snippet para Featured Snippet de Google -->
            <div class="highlight-box" style="background-color: #f8f9fa; border-left-color: #1a365d;">
                <p><strong>Resumen del IVA en Suiza 2026:</strong> El tipo general es del 8,1%, el reducido del 2,6% (alimentos, medicamentos, libros) y el especial de alojamiento del 3,8%. Las empresas con facturación mundial superior a 100.000 CHF deben registrarse obligatoriamente. La declaración es trimestral por defecto, aunque desde 2025 las pymes pueden optar por declaración anual. Comparado con España (21%), el IVA suizo es 13 puntos más bajo.</p>
            </div>

            <h2>Cómo funciona el IVA en Suiza y por qué es diferente al europeo</h2>

            <p>Suiza NO es miembro de la UE. Su IVA no sigue las directivas europeas. Esto tiene consecuencias prácticas: las operaciones intracomunitarias que conoces en España aquí no existen. Cada venta a la UE es una exportación y cada compra desde la UE es una importación.</p>

            <p>El IVA suizo es un impuesto al consumo que grava cada etapa de producción y distribución. Las empresas repercuten el IVA a sus clientes y deducen el soportado en sus compras. Solo pagan el neto. Hasta aquí, igual que en España.</p>

            <p>La diferencia está en la simplicidad. El sistema suizo opera bajo la LTVA (Ley del IVA) y la OTVA (Ordenanza), que establecen un marco con menos excepciones que el modelo europeo. Donde España tiene tipos superreducidos, exenciones parciales y regímenes especiales que llenan manuales enteros, Suiza mantiene tres tipos impositivos claros y un umbral de registro único de 100.000 CHF.</p>

            <div class="highlight-box">
                <p><strong>¿Prefieres que un especialista se encargue del cálculo y la declaración?</strong> Puedes ver <a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>">cómo trabajamos la gestión del IVA</a> para empresas en Suiza.</p>
            </div>

            <h2>Tasas del IVA en Suiza en 2026</h2>

            <p>Desde el 1 de enero de 2024, los tipos impositivos del IVA suizo se mantienen estables. Estos son los que aplican en 2025 y 2026:</p>

            <h3>Tasa general del 8,1%</h3>

            <p>La mayoría de bienes y servicios tributan al 8,1%. Esto incluye ropa, tecnología, vehículos, servicios profesionales (consultoría, abogados, marketing), restauración, y prácticamente todo lo que no esté expresamente en otra categoría.</p>

            <h3>Tasa reducida del 2,6%</h3>

            <p>Esta tasa existe para productos de primera necesidad: alimentos básicos, bebidas no alcohólicas, medicamentos, libros, periódicos, revistas y transporte público. La lógica es no penalizar el consumo esencial. Desde 2025 también incluye productos de higiene femenina.</p>

            <h3>Tasa especial de alojamiento del 3,8%</h3>

            <p>Hoteles, pensiones, apartamentos turísticos y casas de vacaciones tributan al 3,8%. Si tienes un negocio en el sector turístico, este es tu tipo. Ojo: la restauración dentro del hotel (excepto el desayuno incluido) va al 8,1%.</p>

            <h3>La subida prevista al 8,8% que todavía no ha llegado</h3>

            <p>En octubre de 2024, el Consejo Federal aprobó una subida del IVA para financiar la 13ª paga de pensiones. El plan original era que entrara en vigor en enero de 2026. Pero se ha retrasado a 2028.</p>

            <p>Cuando finalmente entre en vigor, los tipos subirán así: el general pasará del 8,1% al 8,8%, el reducido del 2,6% al 2,8%, y el de alojamiento del 3,8% al 4,2%. Por ahora, los tipos siguen igual. Pero conviene tenerlo en el radar.</p>

            <table class="info-table">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Tasa actual (2025-2026)</th>
                        <th>Tasa prevista (2028*)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>General</td>
                        <td>8,1%</td>
                        <td>8,8%</td>
                    </tr>
                    <tr>
                        <td>Reducido</td>
                        <td>2,6%</td>
                        <td>2,8%</td>
                    </tr>
                    <tr>
                        <td>Alojamiento</td>
                        <td>3,8%</td>
                        <td>4,2%</td>
                    </tr>
                </tbody>
            </table>
            <p style="font-size: 0.85rem; color: #6c757d; margin-top: 0.5rem;">*Pendiente de aprobación parlamentaria y votación popular.</p>

            <h2>Quién está obligado a registrarse para el IVA en Suiza</h2>

            <p>El umbral de registro es de 100.000 CHF de facturación mundial gravable al año. Por debajo, el registro es voluntario. Un dato práctico: si facturas 95.000 CHF, no estás obligado. Pero si facturas 101.000 CHF, aunque sea un solo céntimo por encima, ya tienes obligación de registro.</p>

            <p>Esto aplica tanto a empresas suizas como extranjeras que presten servicios en Suiza. La facturación computa desde cualquier actividad sujeta a IVA, incluyendo exportaciones.</p>

            <p><strong>El registro voluntario tiene sentido</strong> si estás por debajo del umbral pero tienes mucho IVA soportado que recuperar. Por ejemplo, si estás montando una empresa y tienes gastos fuertes en equipamiento, mobiliario o reforma de oficina.</p>

            <p>El proceso de inscripción es online, ante la AFC (Administración Federal de Contribuciones). Necesitas extracto del Registro Mercantil y número UID/IDE. Para empresas extranjeras sin sede en Suiza, hay un requisito adicional: nombrar un representante fiscal obligatorio.</p>

            <div class="warning-box">
                <p><strong>Representante fiscal para empresas extranjeras:</strong> Si tu empresa española vende a clientes suizos y supera el umbral, debes registrarte Y nombrar un representante fiscal con domicilio en Suiza. Este representante responde solidariamente de tus obligaciones de IVA.</p>
            </div>

            <h2>Cómo se declara el IVA en Suiza paso a paso</h2>

            <p>Una vez registrado, tienes que elegir método de cálculo y frecuencia de declaración. Vamos por partes.</p>

            <h3>Método efectivo (el estándar)</h3>

            <p>Funciona igual que en España: IVA repercutido en ventas menos IVA soportado en compras. La diferencia es lo que pagas o te devuelven. La declaración es trimestral, con plazo de 60 días tras el fin del trimestre.</p>

            <p><strong>Fórmula:</strong> IVA a ingresar = IVA repercutido - IVA soportado</p>

            <p>Este método requiere llevar registro de todas las facturas emitidas y recibidas. Es el más preciso, pero también el que más trabajo administrativo genera.</p>

            <h3>Método de tasas de deuda fiscal neta (TDFN)</h3>

            <p>Este es el método simplificado para pymes con facturación inferior a 5.005.000 CHF. En lugar de calcular el IVA soportado, aplicas un porcentaje fijo sobre tu facturación bruta que ya incluye una deducción estimada según tu sector.</p>

            <p>Por ejemplo, para servicios de consultoría el TDFN es del 5,9%. Ingresas el 5,9% de tu facturación total y te olvidas de guardar tickets de cada café. Las declaraciones son semestrales en vez de trimestrales.</p>

            <div class="warning-box">
                <p><strong>Ojo con el TDFN:</strong> Parece más sencillo y muchas veces lo es. Pero si tienes muchos gastos deducibles (material, equipamiento, subcontrataciones), puedes acabar pagando más que con el método efectivo. Hay que hacer números antes de elegir.</p>
            </div>

            <h3>La nueva opción de declaración anual desde 2025</h3>

            <p>Desde enero de 2025, las pymes que cumplan ciertas condiciones pueden optar por declaración anual en lugar de trimestral. Los requisitos: facturación máxima de 5.005.000 CHF y buen historial fiscal (3 años sin problemas con la AFC).</p>

            <p>Con esta opción haces pagos anticipados trimestrales basados en el año anterior, y luego ajustas en la declaración anual. Simplifica la gestión para negocios con pocas operaciones.</p>

            <div class="highlight-box">
                <h4>Checklist del proceso de declaración</h4>
                <ol>
                    <li>Registrarse ante la AFC</li>
                    <li>Elegir método (efectivo o TDFN)</li>
                    <li>Elegir frecuencia (trimestral, semestral o anual)</li>
                    <li>Emitir facturas con IVA correctamente desglosado</li>
                    <li>Presentar declaración en plazo</li>
                    <li>Pagar el IVA neto</li>
                </ol>
            </div>

            <p><strong>Plazos de declaración trimestral:</strong> Q1 hasta 31 mayo, Q2 hasta 31 agosto, Q3 hasta 30 noviembre, Q4 hasta 28 febrero del año siguiente.</p>

            <h2>Qué operaciones están exentas o excluidas del IVA suizo</h2>

            <p>No todo tributa IVA en Suiza. Hay dos tipos de exenciones que importa distinguir:</p>

            <p><strong>Exentas con derecho a deducción</strong> (puedes recuperar el IVA de tus gastos):</p>
            <ul>
                <li>Exportaciones de bienes fuera de Suiza</li>
                <li>Servicios prestados a clientes establecidos fuera de Suiza</li>
                <li>Transporte internacional</li>
            </ul>

            <p><strong>Exentas sin derecho a deducción</strong> (no puedes recuperar el IVA de tus gastos):</p>
            <ul>
                <li>Servicios médicos y hospitalarios</li>
                <li>Servicios educativos</li>
                <li>Seguros</li>
                <li>Operaciones bancarias y financieras</li>
                <li>Ciertas actividades agrícolas</li>
            </ul>

            <div class="warning-box">
                <p><strong>Error típico:</strong> Muchos empresarios asumen que si venden servicios digitales desde Suiza a clientes europeos están automáticamente exentos. No siempre es así. Si tienes clientes en la UE, la cosa se complica y hay que analizar caso por caso según el tipo de servicio y si el cliente es empresa o particular.</p>
            </div>

            <p>Si tu actividad está exenta pero quieres recuperar el IVA de tus compras, puedes solicitar el registro voluntario. Tiene sentido si tienes muchos gastos con IVA deducible.</p>

            <h2>El IVA en Suiza comparado con España y otros países europeos</h2>

            <p>Suiza tiene el IVA más bajo de Europa occidental. No es solo comparado con España. Mira la tabla:</p>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>País</th>
                        <th>IVA general</th>
                        <th>IVA reducido</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Suiza</strong></td>
                        <td><strong>8,1%</strong></td>
                        <td><strong>2,6%</strong></td>
                    </tr>
                    <tr>
                        <td>España</td>
                        <td>21%</td>
                        <td>10% / 4%</td>
                    </tr>
                    <tr>
                        <td>Alemania</td>
                        <td>19%</td>
                        <td>7%</td>
                    </tr>
                    <tr>
                        <td>Francia</td>
                        <td>20%</td>
                        <td>5,5% / 10%</td>
                    </tr>
                    <tr>
                        <td>Italia</td>
                        <td>22%</td>
                        <td>4% / 5% / 10%</td>
                    </tr>
                </tbody>
            </table>

            <p>Diferencia Suiza-España: 13 puntos porcentuales. En una factura de 10.000 CHF, pagas 810 CHF de IVA en Suiza frente a unos 2.100€ que pagarías en España. Esa diferencia se nota cada mes en la cuenta.</p>

            <div class="highlight-box">
                <p>Esta diferencia es una de las razones por las que muchos empresarios españoles se plantean operar desde Suiza. No es la única, pero sí la que se nota en el día a día.</p>
            </div>

            <h2>Errores frecuentes que cometen los empresarios hispanohablantes con el IVA suizo</h2>

            <p>En nuestra experiencia, hay errores que vemos repetirse una y otra vez. Esta sección es lo que la competencia no te cuenta:</p>

            <h3>1. No registrarse a tiempo</h3>
            <p>Muchos piensan "ya me registraré cuando facture más". Error. Si superas los 100.000 CHF y no estás registrado, la AFC te va a reclamar el IVA no cobrado más intereses retroactivos. Es un rollo, pero hay que hacerlo bien desde el principio.</p>

            <h3>2. Elegir el método equivocado</h3>
            <p>El TDFN (tasas de deuda fiscal neta) parece más sencillo y a menudo lo es. Pero no siempre conviene. Depende del ratio de gastos deducibles que tengas. Una empresa de servicios con pocos gastos puede ahorrar con el TDFN. Una que compra mucho material, no. Hay que hacer números antes de elegir.</p>

            <h3>3. No aplicar correctamente los tipos</h3>
            <p>Confundir qué va al 8,1% y qué al 2,6% es más común de lo que parece. Un hotel que factura alojamiento (3,8%) más spa (8,1%) debe desglosar ambos. Si aplica el mismo tipo a todo, va a tener problemas en una inspección.</p>

            <h3>4. Ignorar la obligación como empresa extranjera</h3>
            <p>Si tu empresa española vende a clientes suizos y supera los 100.000 CHF de facturación global, tienes que registrarte aunque no tengas sede en Suiza. No hay excusa de "no tengo presencia física ahí".</p>

            <h3>5. No designar representante fiscal</h3>
            <p>Obligatorio para empresas sin presencia física en Suiza. El proceso puede tardar semanas. Mejor hacerlo antes de empezar a facturar que cuando ya tienes facturas pendientes de regularizar.</p>

            <h2>Penalizaciones por incumplimiento del IVA en Suiza</h2>

            <p>La AFC no bromea con los incumplimientos. Estas son las consecuencias de no cumplir:</p>

            <p><strong>Intereses por mora:</strong> 4,5% anual sobre el IVA no pagado en plazo. Parece poco, pero se acumula.</p>

            <p><strong>Multas por errores:</strong> Hasta 20.000 CHF si la AFC detecta errores en tus declaraciones. Los errores involuntarios se pueden corregir con declaración rectificativa si lo haces antes de que te pillen.</p>

            <p><strong>Fraude de IVA:</strong> Facturación ficticia, ocultación de operaciones o facturas falsas pueden costarte hasta 800.000 CHF de multa y prisión en casos graves. La administración suiza es bastante eficiente detectando fraudes gracias al cruce de datos con bancos y aduanas.</p>

            <!-- CTA intermedio suave - ENLAZA A PAGINA DE SERVICIO (estrategia El Cebo y el Gancho) -->
            <div class="highlight-box" style="background-color: #e7f5ff; border-left-color: #0077b6;">
                <p><strong>¿No quieres complicarte con esto?</strong> Si prefieres que alguien se encargue del registro, las declaraciones y la comunicación con la AFC, puedes ver <a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>">cómo trabajamos la gestión del IVA</a>.</p>
            </div>

            <h2>Preguntas frecuentes sobre el IVA en Suiza (FAQ)</h2>

            <div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cuánto es el IVA en Suiza en 2026?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">La tasa general es del 8,1%, la reducida del 2,6% y la de alojamiento del 3,8%. Estos tipos llevan vigentes desde enero de 2024.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿A partir de qué facturación hay que registrarse para el IVA suizo?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Cuando la facturación mundial gravable supera los 100.000 CHF anuales. Por debajo de ese umbral, el registro es voluntario.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cada cuánto se declara el IVA en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Trimestralmente por defecto. Desde 2025, las pymes pueden optar por declaración anual si cumplen ciertos requisitos (facturación máxima de 5.005.000 CHF y buen historial fiscal).</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Va a subir el IVA en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Está prevista una subida al 8,8% para financiar la 13ª paga de pensiones, pero se ha retrasado de 2026 a 2028. Por ahora, los tipos siguen siendo 8,1%, 2,6% y 3,8%.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Puede una empresa española recuperar el IVA pagado en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Sí, bajo ciertas condiciones. Las empresas registradas deducen el IVA soportado del repercutido en cada declaración. Las empresas no registradas pueden solicitar devolución a la AFC, aunque el proceso es más complejo.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Qué pasa si no me registro y estoy obligado?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">La AFC puede imponer intereses del 4,5% anual sobre el IVA no declarado, multas de hasta 20.000 CHF por errores, y hasta 800.000 CHF en casos de fraude.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Qué diferencia hay entre el método efectivo y el TDFN?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El efectivo calcula IVA repercutido menos soportado (más preciso, requiere guardar todas las facturas). El TDFN aplica una tasa fija al volumen de negocios según tu sector (más sencillo pero menos flexible). La elección depende de cuántos gastos deducibles tengas.</p>
                    </div>
                </div>

            </div>

            <h2>Conclusión y siguiente paso</h2>

            <p>Lo esencial del IVA en Suiza se resume en cuatro puntos:</p>

            <ul>
                <li><strong>Tipo general del 8,1%</strong> — 13 puntos menos que España</li>
                <li><strong>Umbral de 100.000 CHF</strong> — por debajo, el registro es voluntario</li>
                <li><strong>Declaración trimestral</strong> — aunque desde 2025 puedes optar por anual si cumples requisitos</li>
                <li><strong>Subida al 8,8% retrasada a 2028</strong> — de momento, los tipos siguen igual</li>
            </ul>

            <p>El IVA suizo es más sencillo que el español, pero tiene sus propias reglas. Métodos de declaración diferentes, obligaciones para empresas extranjeras, representante fiscal... Si no lo haces bien desde el principio, los intereses y multas se acumulan.</p>

            <p>Si tienes una empresa o estás pensando en crearla en Suiza y no quieres equivocarte con el IVA ni con el resto de la fiscalidad, puedes <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener">reservar una consulta</a> para analizar tu caso concreto. Cuesta 230€ la hora. Revisamos tu situación, respondemos tus dudas y te decimos honestamente si tiene sentido para ti o si estás mejor donde estás.</p>

            <!-- Referencias y Fuentes -->
            <div class="references-box">
                <h3>Referencias y Artículos Relacionados</h3>

                <p>Amplía tu conocimiento sobre fiscalidad y empresas en Suiza:</p>
                <ul class="references-list">
                    <li>
                        <a href="<?php echo home_url('/crear-empresa-suiza-guia/'); ?>">
                            Crear empresa en Suiza desde España: Guía completa 2026
                        </a>
                    </li>
                </ul>

                <p class="official-refs-title"><strong>Fuentes oficiales citadas en este artículo:</strong></p>
                <ul class="references-list references-official">
                    <li>
                        <a href="https://www.estv.admin.ch/estv/en/home/value-added-tax.html" target="_blank" rel="noopener noreferrer">
                            MwSt Suiza: Tasas 8.1%, 2.6% y 3.8%, umbral 100k CHF y declaración online
                        </a>
                        <span class="ref-source">— ESTV - Administración Federal de Contribuciones</span>
                    </li>
                    <li>
                        <a href="https://www.estv.admin.ch/estv/en/home/value-added-tax/registration-and-deregistration-vat.html" target="_blank" rel="noopener noreferrer">
                            Registro VAT: Documentación UID, representante fiscal y proceso ePortal
                        </a>
                        <span class="ref-source">— ESTV - Administración Federal de Contribuciones</span>
                    </li>
                    <li>
                        <a href="https://www.estv.admin.ch/estv/en/home/value-added-tax/registration-and-deregistration-vat/register-for-vat.html" target="_blank" rel="noopener noreferrer">
                            Proceso de registro VAT: Métodos efectivo, saldo fijo y pauschal
                        </a>
                        <span class="ref-source">— ESTV - Administración Federal de Contribuciones</span>
                    </li>
                    <li>
                        <a href="https://www.kmu.admin.ch/kmu/de/home/praktisches-wissen/finanzielles/steuern/mwst.html" target="_blank" rel="noopener noreferrer">
                            Cómo funciona el MwSt: Cálculo trimestral y deducción input VAT
                        </a>
                        <span class="ref-source">— KMU.admin.ch - Portal Federal de Pymes</span>
                    </li>
                    <li>
                        <a href="https://www.estv.admin.ch/estv/de/home/die-estv/steuerpolitik/inkrafttreten-neuerungen/2026-2028.html" target="_blank" rel="noopener noreferrer">
                            Novedades fiscales 2026-2028: Declaración anual opcional y plataformas digitales
                        </a>
                        <span class="ref-source">— ESTV - Administración Federal de Contribuciones</span>
                    </li>
                </ul>
            </div>

        </div>

    </article>

    <!-- Final CTA - Enlaces a servicio y consulta (suave, no transaccional) -->
    <section class="final-cta">
        <div class="final-cta-inner">
            <h3>¿Quieres que alguien se encargue del IVA por ti?</h3>
            <p>Si prefieres dedicar tu tiempo a tu negocio en vez de a formularios en alemán, puedes ver cómo trabajamos la gestión del IVA para empresas en Suiza.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 1.5rem;">
                <a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>" class="btn-primary">Ver cómo trabajamos</a>
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-secondary" style="background: transparent; border: 2px solid #fff; color: #fff;">Reservar consulta (230€)</a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
