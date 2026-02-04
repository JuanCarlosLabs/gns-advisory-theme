<?php
/**
 * Template Name: Blog - Declaración Renta Suiza
 * URL: /declaracion-renta-suiza/
 * Artículo SEO: Cómo Declarar Impuestos en Suiza: Guía para Residentes
 *
 * Meta Título: Cómo Declarar Impuestos en Suiza: Guía de la Renta 2026
 * Meta Descripción: Cómo declarar impuestos en Suiza sin errores. Guía práctica sobre la declaración de la renta para residentes: deducciones, plazos y consejos.
 * Keyword Principal: como declarar impuestos en suiza
 * Keywords Secundarias: declaración de la renta suiza, impuestos en suiza, irpf suiza, deducciones irpf suiza, hacer declaración renta suiza
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/blog-article.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main blog-article-page">

    <article itemscope itemtype="https://schema.org/BlogPosting">
        <meta itemprop="mainEntityOfPage" content="<?php echo get_permalink(); ?>">
        <meta itemprop="datePublished" content="2025-01-21">
        <meta itemprop="dateModified" content="2025-01-21">

        <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display:none;">
            <meta itemprop="name" content="GNS Group Advisory">
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
            </span>
        </span>

        <?php
        // Variables para el hero - Above The Fold con imagen de fondo
        $article_title = 'Cómo Declarar Impuestos en Suiza: Guía para Residentes';
        $article_subtitle = 'Aprende cómo declarar impuestos en Suiza sin cometer errores';
        $article_image_url = home_url('/wp-content/uploads/2026/02/Guia-para-Declarar-Impuestos-en-Suiza-Guia-para-Residentes.webp');
        $article_excerpt = 'Descubre cómo declarar impuestos en Suiza sin errores que te cuesten dinero. Esta guía práctica detalla los plazos, las diferencias entre tributación federal y cantonal, y las deducciones que puedes aplicar. Cumple con tus obligaciones optimizando cada franco. Porque cada uno cuenta.';
        $article_category = 'Fiscalidad Suiza';
        $article_category_url = home_url('/categoria/fiscalidad-suiza/');
        $article_date = '21 de enero de 2025';
        $article_date_iso = '2025-01-21';
        $article_reading_time = '15';
        $author_name = 'Alejandra Ortiz';
        $author_role = 'Asesora Fiscal en Suiza';
        $author_image_url = home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp');

        // Incluir el hero template
        include(get_template_directory() . '/template-parts/blog-article-hero.php');
        ?>

        <!-- Article Content -->
        <div class="article-content" itemprop="articleBody">

            <!-- Intro Hook - Estilo Isra Bravo -->
            <div class="intro-hook">
                <p>La respuesta corta: entre el 22% y el 35%, dependiendo del cantón donde vivas.</p>

                <p>La respuesta larga: depende de tu permiso de trabajo, tu situación familiar, tu cantón de residencia y si eres autónomo o empleado.</p>

                <p>Llevo 4 años dedicada exclusivamente a la fiscalidad en Suiza para empresarios y profesionales hispanohablantes. He visto de todo: gente que paga de más por no conocer las deducciones, gente que se mete en líos por no declarar bien, y gente que ahorra una fortuna por haber elegido el cantón correcto.</p>

                <p>En esta guía te explico exactamente cómo funciona el IRPF en Suiza según tu permiso de trabajo y cómo hacer tu declaración de la renta sin sorpresas.</p>
            </div>

            <h2>Cómo Funciona el IRPF en Suiza: El Sistema de Tres Niveles</h2>

            <p>Lo primero que tienes que entender sobre los impuestos en Suiza es que no existe un único IRPF. Hay tres.</p>

            <p>Sí, tres impuestos sobre la renta que se suman:</p>

            <table class="info-table">
                <thead>
                    <tr>
                        <th>Nivel</th>
                        <th>Tipo</th>
                        <th>Característica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Federal</td>
                        <td>Fijo para todos</td>
                        <td>Progresivo, máximo 11,5%</td>
                    </tr>
                    <tr>
                        <td>Cantonal</td>
                        <td>Varía por cantón</td>
                        <td>Desde 5% hasta 20%</td>
                    </tr>
                    <tr>
                        <td>Municipal</td>
                        <td>Varía por ciudad</td>
                        <td>Se añade al cantonal</td>
                    </tr>
                </tbody>
            </table>

            <p>Esto significa que dos personas con el mismo sueldo pueden pagar cantidades muy diferentes de IRPF en Suiza dependiendo de dónde vivan. Un profesional en Zug puede pagar el 22% total. El mismo profesional en Ginebra puede pagar el 35%.</p>

            <p>Esa diferencia de 13 puntos, en un sueldo de 150.000 CHF, son casi 20.000 francos al año. Cada año.</p>

            <h2>IRPF en Suiza según tu Permiso de Trabajo: Permiso B, C y Fronterizo</h2>

            <p>Aquí es donde la cosa se pone interesante. Tu permiso de trabajo determina CÓMO pagas el IRPF en Suiza, no solo cuánto.</p>

            <h3>IRPF con Permiso B en Suiza: Retención en Origen</h3>

            <p>Si acabas de ir a trabajar a Suiza, lo más probable es que tengas un permiso B. Este permiso tiene una particularidad fiscal importante: te retienen el IRPF directamente de la nómina.</p>

            <p>Es lo que llaman "Quellensteuer" o impuesto en la fuente. Tu empleador calcula tu IRPF suizo y lo descuenta antes de pagarte. Tú recibes el neto y no tienes que hacer declaración de la renta... en teoría.</p>

            <p><strong>¿Cuándo SÍ tienes que hacer declaración de la renta con permiso B?</strong></p>

            <ul>
                <li>Si ganas más de 120.000 CHF brutos al año</li>
                <li>Si tienes ingresos adicionales (alquileres, inversiones, autónomo)</li>
                <li>Si tienes patrimonio superior a ciertos umbrales</li>
                <li>Si quieres reclamar deducciones que no se aplican automáticamente</li>
            </ul>

            <p>Ese último punto es clave. Muchos trabajadores con permiso B en Suiza pagan de más porque no saben que pueden reclamar deducciones adicionales presentando una declaración voluntaria.</p>

            <h3>IRPF con Permiso C en Suiza: Declaración Obligatoria</h3>

            <p>Si llevas varios años trabajando en Suiza y tienes permiso C (residencia permanente), la cosa cambia. Ya no te retienen en origen. Pagas como un suizo.</p>

            <p>Eso significa que tienes que hacer la declaración de la renta suiza obligatoriamente, cada año, a tres niveles (federal, cantonal, municipal).</p>

            <p><strong>Ventaja:</strong> Tienes acceso a todas las deducciones desde el principio.</p>

            <p><strong>Desventaja:</strong> Si no planificas bien, puedes llevarte una sorpresa gorda cuando llegue la factura de impuestos en Suiza.</p>

            <h3>IRPF para Fronterizos: El Caso Especial</h3>

            <p>Si vives en Francia, Alemania o Italia y cruzas la frontera para trabajar en Suiza, tu situación fiscal depende del cantón donde trabajes y del acuerdo de doble imposición entre países.</p>

            <p>En general, los fronterizos pagan impuestos en Suiza con un tipo reducido (normalmente el 4,5% federal) y luego tributan la diferencia en su país de residencia.</p>

            <p>Es un caso complejo que requiere análisis específico. Si eres fronterizo, no intentes hacerlo solo.</p>

            <h2>Cómo Hacer la Declaración de la Renta en Suiza: Paso a Paso</h2>

            <p>La declaración de la renta suiza se presenta normalmente entre enero y marzo del año siguiente. Los plazos varían por cantón, pero la mayoría cierra el 31 de marzo.</p>

            <h3>Documentos que Necesitas para tu Declaración de IRPF en Suiza</h3>

            <ul>
                <li>Certificado de salario (Lohnausweis) de tu empleador</li>
                <li>Extractos bancarios de todas tus cuentas en Suiza</li>
                <li>Certificados del 2º y 3er pilar (pensiones)</li>
                <li>Facturas de gastos profesionales deducibles</li>
                <li>Recibos de donaciones a organizaciones benéficas</li>
                <li>Documentación de propiedades inmobiliarias</li>
                <li>Certificados de inversiones y dividendos</li>
            </ul>

            <h3>Deducciones del IRPF en Suiza que Muchos Españoles Desconocen</h3>

            <p>Aquí es donde la mayoría de la gente deja dinero sobre la mesa. Estas son las deducciones más importantes que puedes aplicar en tu declaración de la renta suiza:</p>

            <p><strong>Aportaciones al 3er pilar (pilar 3a):</strong> Hasta 7.056 CHF al año si tienes un 2º pilar, o hasta el 20% de tus ingresos (máximo 35.280 CHF) si eres autónomo sin 2º pilar.</p>

            <p><strong>Gastos de transporte:</strong> Abono de transporte público o kilometraje si usas coche para ir al trabajo.</p>

            <p><strong>Gastos de comida:</strong> Si no puedes comer en casa por la distancia al trabajo.</p>

            <p><strong>Gastos de formación:</strong> Cursos relacionados con tu profesión.</p>

            <p><strong>Intereses de deudas:</strong> Incluida la hipoteca.</p>

            <p><strong>Gastos médicos:</strong> La parte que supere el 5% de tus ingresos netos.</p>

            <p><strong>Donaciones:</strong> A organizaciones benéficas reconocidas en Suiza.</p>

            <h2>IRPF en España vs IRPF en Suiza: La Comparativa Real</h2>

            <p>Vamos con los números que importan. Esta es la comparativa real de impuestos en Suiza frente a España para diferentes niveles de renta:</p>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Salario Bruto</th>
                        <th>IRPF España</th>
                        <th>IRPF Suiza (Zug)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>80.000 CHF</td>
                        <td>~30% efectivo</td>
                        <td>~18% efectivo</td>
                    </tr>
                    <tr>
                        <td>150.000 CHF</td>
                        <td>~37% efectivo</td>
                        <td>~22% efectivo</td>
                    </tr>
                    <tr>
                        <td>250.000 CHF</td>
                        <td>~45% efectivo</td>
                        <td>~25% efectivo</td>
                    </tr>
                </tbody>
            </table>

            <p>Los números hablan solos. Un profesional que gana 150.000 CHF paga unos 55.500€ de IRPF en España. El mismo profesional, con el mismo sueldo, paga unos 33.000 CHF de IRPF en Suiza (en Zug). Eso son más de 20.000 francos de diferencia. Cada año.</p>

            <h2>IVA en Suiza: Otro Ahorro que No Esperabas</h2>

            <p>Además del IRPF, hay otro impuesto donde Suiza sale ganando: el IVA.</p>

            <p>El IVA en Suiza es del 8,1%. El más bajo de Europa occidental. En España pagas el 21%.</p>

            <p>Esa diferencia del 13% afecta a TODO lo que compras. Comida, ropa, electrónica, servicios... todo es un 13% más barato en términos de IVA.</p>

            <h3>Declaración del IVA en Suiza para Autónomos y Empresarios</h3>

            <p>Si eres autónomo o tienes una empresa en Suiza, tienes que hacer la declaración del IVA en Suiza si facturas más de 100.000 CHF al año.</p>

            <p>La declaración del IVA se presenta trimestralmente o semestralmente, dependiendo de tu volumen de facturación.</p>

            <p><strong>Tipos de IVA en Suiza:</strong></p>

            <ul>
                <li><strong>8,1%</strong> - Tipo general (la mayoría de bienes y servicios)</li>
                <li><strong>2,6%</strong> - Tipo reducido (alimentación básica, libros, medicamentos)</li>
                <li><strong>3,8%</strong> - Tipo especial (alojamiento turístico)</li>
            </ul>

            <h2>5 Errores que Cometen los Españoles con el IRPF en Suiza</h2>

            <p>Después de 4 años ayudando a españoles a trabajar en Suiza, estos son los errores más comunes que veo:</p>

            <ol class="error-list">
                <li>
                    <h4>No pedir la rectificación del impuesto en la fuente</h4>
                    <p>Si tienes permiso B y te retienen en origen, puedes solicitar una rectificación para aplicar deducciones adicionales. La mayoría no lo hace y paga de más.</p>
                </li>
                <li>
                    <h4>No aportar al 3er pilar</h4>
                    <p>El 3er pilar es dinero que ahorras para tu jubilación Y que reduces de tu base imponible. Hasta 7.056 CHF al año que puedes deducir del IRPF en Suiza. Gratis.</p>
                </li>
                <li>
                    <h4>Elegir el cantón equivocado</h4>
                    <p>La diferencia entre cantones puede ser de 10-15 puntos de IRPF. Mucha gente elige Ginebra o Zúrich por el nombre, cuando cantones menos conocidos como Zug, Schwyz o Nidwalden ofrecen tipos mucho más bajos.</p>
                </li>
                <li>
                    <h4>No declarar ingresos de España</h4>
                    <p>Si eres residente fiscal en Suiza, tienes que declarar tus ingresos mundiales. Incluidos los alquileres de España, los dividendos, las ganancias de acciones... todo. El convenio de doble imposición evita que pagues dos veces, pero tienes que declararlo.</p>
                </li>
                <li>
                    <h4>Olvidar el impuesto sobre el patrimonio</h4>
                    <p>En Suiza, tu patrimonio también tributa (entre 0,1% y 1% según el cantón). No es mucho, pero hay que tenerlo en cuenta y declararlo correctamente.</p>
                </li>
            </ol>

            <h2>Ir a Trabajar a Suiza: Lo que Debes Saber Antes de Moverte</h2>

            <p>Si estás pensando en ir a trabajar a Suiza, el tema fiscal debería ser una de tus primeras consideraciones. No la última.</p>

            <p>He visto a demasiada gente que se muda sin planificar y acaba pagando más impuestos de los necesarios durante años.</p>

            <p><strong>Antes de ir a trabajar a Suiza, deberías:</strong></p>

            <ul class="checklist">
                <li>Elegir el cantón correcto para tu perfil fiscal</li>
                <li>Entender cómo funciona la retención con permiso B</li>
                <li>Planificar las aportaciones al 2º y 3er pilar</li>
                <li>Revisar el convenio de doble imposición España-Suiza</li>
                <li>Cerrar correctamente tu residencia fiscal en España</li>
            </ul>

            <h2>Preguntas Frecuentes sobre el IRPF en Suiza</h2>

            <div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cuánto IRPF se paga en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Depende del cantón. El IRPF en Suiza va desde el 22% en cantones como Zug hasta el 35-40% en Ginebra o Vaud. La media está en torno al 25-30% para rentas medias-altas.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Tengo que hacer la declaración de la renta en Suiza con permiso B?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Solo si ganas más de 120.000 CHF brutos al año, tienes otros ingresos (alquileres, inversiones) o quieres aplicar deducciones adicionales. En el resto de casos, te retienen directamente de la nómina.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cómo evito pagar impuestos dos veces en España y Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El convenio de doble imposición entre España y Suiza regula esto. En general, si eres residente fiscal en Suiza, pagas allí y España te exime o te permite deducir lo pagado. Pero hay que aplicarlo correctamente.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cuándo deja España de considerarme residente fiscal?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Cuando cumplas tres requisitos: no pasar más de 183 días al año en España, que tu centro de intereses económicos esté en Suiza, y que tu familia (cónyuge e hijos menores) no resida en España.</p>
                    </div>
                </div>

                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h4 itemprop="name">¿Cuánto IVA se paga en Suiza?</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">El IVA en Suiza es del 8,1% general, 2,6% para alimentación básica y 3,8% para alojamiento. Es el más bajo de Europa occidental, muy por debajo del 21% español.</p>
                    </div>
                </div>

            </div>

            <h2>¿Necesitas Ayuda con tu IRPF en Suiza?</h2>

            <p>Si vas a ir a trabajar a Suiza o ya estás allí y quieres asegurarte de que no estás pagando de más, puedo ayudarte.</p>

            <p>Llevo 4 años dedicada exclusivamente a la fiscalidad en Suiza para hispanohablantes. He ayudado a más de 500 profesionales y empresarios a optimizar su situación fiscal.</p>

            <!-- CTA final -->
            <div class="article-cta">
                <h3>Consulta de 1 hora (230€)</h3>
                <p>Te digo exactamente:</p>
                <ul>
                    <li>Cuánto IRPF deberías estar pagando según tu situación</li>
                    <li>Qué deducciones puedes aplicar que probablemente no conoces</li>
                    <li>Si tu cantón es el correcto o podrías pagar menos en otro</li>
                    <li>Cómo hacer correctamente tu declaración de la renta suiza</li>
                </ul>
                <p>Si seguimos trabajando juntos, ese coste se descuenta del proyecto. Si no, habrás invertido en claridad.</p>
                <p><strong>Atiendo máximo 4 casos nuevos al mes.</strong></p>
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">Reservar consulta</a>
            </div>

            <?php
            // Referencias internas para SEO interlinking
            $references = array(
                array('url' => '/blog/crear-empresa-suiza-guia/', 'title' => 'Cómo Crear Empresa en Suiza: Guía Completa'),
                array('url' => '/blog/guia-gmbh-suiza/', 'title' => 'Cómo Crear GmbH en Suiza: Guía para hispanohablantes'),
                array('url' => '/blog/autonomo-suiza-einzelfirma/', 'title' => 'Cómo hacerse autónomo en Suiza: Einzelfirma'),
                array('url' => '/iva-en-suiza-guia/', 'title' => 'IVA en Suiza: Tasas, registro y obligaciones'),
                array('url' => '/blog/empresa-suiza-sin-residencia/', 'title' => 'Empresa Suiza sin residencia: tributar viviendo en España'),
            );
            include(get_template_directory() . '/template-parts/blog-article-references.php');
            ?>

        </div>

    </article>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="final-cta-inner">
            <h3>¿Listo para optimizar tu fiscalidad en Suiza?</h3>
            <p>Una consulta de 1 hora puede ahorrarte miles de francos al año. Sin compromisos.</p>
            <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">Reservar consulta (230€)</a>
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
