<?php
/**
 * Template Name: Aviso Legal
 * Página legal de términos y condiciones para GNS Group Advisory LLC
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<main id="main-content" class="site-main legal-page">

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo home_url(); ?>">
                    <span itemprop="name">Inicio</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name" class="current">Aviso Legal</span>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </nav>

    <article class="legal-content">
        <header class="legal-header">
            <h1><?php the_title(); ?></h1>
            <p class="legal-updated">Última actualización: <?php echo date('d/m/Y'); ?></p>
        </header>

        <div class="legal-body">

            <section>
                <h2>1. Datos Identificativos</h2>
                <p>En cumplimiento del deber de información, se facilitan los siguientes datos:</p>
                <ul>
                    <li><strong>Titular:</strong> GNS Group Advisory LLC</li>
                    <li><strong>Actividad:</strong> Asesoría fiscal y legal internacional especializada en Suiza</li>
                    <li><strong>Domicilio:</strong> Suiza</li>
                    <li><strong>Email:</strong> <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a></li>
                    <li><strong>Sitio web:</strong> <?php echo home_url(); ?></li>
                </ul>
            </section>

            <section>
                <h2>2. Objeto</h2>
                <p>El presente aviso legal regula el uso del sitio web <strong><?php echo home_url(); ?></strong>, del que es titular GNS Group Advisory LLC.</p>
                <p>La navegación por el sitio web atribuye la condición de usuario e implica la aceptación plena y sin reservas de todas las disposiciones incluidas en este aviso legal.</p>
            </section>

            <section>
                <h2>3. Servicios</h2>
                <p>GNS Group Advisory LLC ofrece servicios de asesoría fiscal y legal internacional, incluyendo:</p>
                <ul>
                    <li>Planificación fiscal en Suiza</li>
                    <li>Constitución de empresas en Suiza (GmbH, AG, Holdings)</li>
                    <li>Asesoramiento sobre residencia fiscal</li>
                    <li>Optimización tributaria internacional</li>
                    <li>Gestión de trámites con autoridades suizas</li>
                </ul>
                <p>La información proporcionada en este sitio web tiene carácter meramente informativo y no constituye asesoramiento profesional. Para obtener asesoramiento personalizado, es necesario contratar nuestros servicios.</p>
            </section>

            <section>
                <h2>4. Condiciones de Uso</h2>
                <p>El usuario se compromete a:</p>
                <ul>
                    <li>Hacer un uso adecuado y lícito del sitio web</li>
                    <li>No realizar actividades ilícitas o contrarias a la buena fe</li>
                    <li>No difundir contenidos de carácter ilegal, violento, discriminatorio o que atenten contra derechos de terceros</li>
                    <li>No introducir virus o programas maliciosos que puedan causar daños</li>
                    <li>No intentar acceder a áreas restringidas del sitio web</li>
                </ul>
            </section>

            <section>
                <h2>5. Propiedad Intelectual</h2>
                <p>Todos los contenidos del sitio web (textos, imágenes, gráficos, logotipos, iconos, software, etc.) son propiedad de GNS Group Advisory LLC o de terceros que han autorizado su uso.</p>
                <p>Queda prohibida la reproducción, distribución, comunicación pública o transformación de los contenidos sin autorización expresa del titular, salvo lo estrictamente necesario para la navegación o uso personal.</p>
            </section>

            <section>
                <h2>6. Exclusión de Responsabilidad</h2>
                <p>GNS Group Advisory LLC no se hace responsable de:</p>
                <ul>
                    <li>Errores u omisiones en los contenidos del sitio web</li>
                    <li>La falta de disponibilidad o continuidad del sitio web</li>
                    <li>La presencia de virus o elementos lesivos en los contenidos</li>
                    <li>Daños derivados del uso de la información publicada</li>
                    <li>Contenidos de sitios web de terceros enlazados desde esta página</li>
                </ul>
                <p>La información fiscal y legal publicada tiene carácter general y puede no estar actualizada. Las decisiones basadas en esta información son responsabilidad exclusiva del usuario.</p>
            </section>

            <section>
                <h2>7. Enlaces a Terceros</h2>
                <p>Este sitio web puede contener enlaces a páginas de terceros. GNS Group Advisory LLC no tiene control sobre dichas páginas y no asume responsabilidad por sus contenidos ni por su política de privacidad.</p>
                <p>Los enlaces se proporcionan únicamente para conveniencia del usuario y no implican aprobación o recomendación.</p>
            </section>

            <section>
                <h2>8. Legislación Aplicable y Jurisdicción</h2>
                <p>Las relaciones entre GNS Group Advisory LLC y el usuario se rigen por la legislación suiza.</p>
                <p>Para la resolución de cualquier controversia, las partes se someten a los tribunales competentes de Suiza, salvo que la legislación aplicable establezca otro fuero.</p>
            </section>

            <section>
                <h2>9. Modificaciones</h2>
                <p>GNS Group Advisory LLC se reserva el derecho de modificar este aviso legal en cualquier momento. Las modificaciones entrarán en vigor desde su publicación en el sitio web.</p>
                <p>Se recomienda revisar periódicamente este aviso legal para estar informado de posibles cambios.</p>
            </section>

            <section>
                <h2>10. Contacto</h2>
                <p>Para cualquier consulta relacionada con este aviso legal, puedes contactarnos en:</p>
                <p><strong>Email:</strong> <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a></p>
            </section>

        </div>
    </article>

</main>

<?php get_footer(); ?>
