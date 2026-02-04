<?php
/**
 * Template Name: Política de Privacidad
 * Página legal de privacidad para GNS Group Advisory LLC
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
                <span itemprop="name" class="current">Política de Privacidad</span>
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
                <h2>1. Responsable del Tratamiento</h2>
                <p><strong>GNS Group Advisory LLC</strong> es el responsable del tratamiento de los datos personales recogidos a través de este sitio web.</p>
                <ul>
                    <li><strong>Denominación:</strong> GNS Group Advisory LLC</li>
                    <li><strong>Actividad:</strong> Asesoría fiscal y legal internacional especializada en Suiza</li>
                    <li><strong>Email de contacto:</strong> <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a></li>
                    <li><strong>Web:</strong> <?php echo home_url(); ?></li>
                </ul>
            </section>

            <section>
                <h2>2. Datos que Recopilamos</h2>
                <p>Recopilamos los siguientes tipos de datos personales:</p>

                <h3>2.1 Datos proporcionados voluntariamente</h3>
                <ul>
                    <li>Nombre y apellidos</li>
                    <li>Dirección de correo electrónico</li>
                    <li>Número de teléfono (si se proporciona)</li>
                    <li>Información sobre tu situación fiscal (cuando solicitas una consulta)</li>
                </ul>

                <h3>2.2 Datos recopilados automáticamente</h3>
                <ul>
                    <li>Dirección IP</li>
                    <li>Tipo de navegador y dispositivo</li>
                    <li>Páginas visitadas y tiempo de permanencia</li>
                    <li>Cookies (ver <a href="/politica-de-cookies/">Política de Cookies</a>)</li>
                </ul>
            </section>

            <section>
                <h2>3. Finalidad del Tratamiento</h2>
                <p>Utilizamos tus datos personales para:</p>
                <ul>
                    <li>Responder a tus consultas y solicitudes de información</li>
                    <li>Gestionar la contratación de nuestros servicios de asesoría fiscal</li>
                    <li>Enviarte comunicaciones comerciales si has dado tu consentimiento</li>
                    <li>Mejorar la experiencia de navegación en nuestra web</li>
                    <li>Cumplir con obligaciones legales aplicables</li>
                </ul>
            </section>

            <section>
                <h2>4. Base Legal del Tratamiento</h2>
                <p>El tratamiento de tus datos se fundamenta en:</p>
                <ul>
                    <li><strong>Consentimiento:</strong> Cuando envías un formulario de contacto o te suscribes a comunicaciones</li>
                    <li><strong>Ejecución de contrato:</strong> Cuando contratas nuestros servicios de asesoría</li>
                    <li><strong>Interés legítimo:</strong> Para mejorar nuestros servicios y la experiencia del usuario</li>
                    <li><strong>Obligación legal:</strong> Cuando debemos conservar datos por requisitos normativos</li>
                </ul>
            </section>

            <section>
                <h2>5. Conservación de los Datos</h2>
                <p>Conservamos tus datos personales durante el tiempo necesario para cumplir con la finalidad para la que fueron recogidos:</p>
                <ul>
                    <li><strong>Consultas:</strong> Máximo 2 años desde la última comunicación</li>
                    <li><strong>Clientes:</strong> Durante la relación comercial y los plazos legales de conservación (mínimo 5 años para documentación fiscal)</li>
                    <li><strong>Marketing:</strong> Hasta que retires tu consentimiento</li>
                </ul>
            </section>

            <section>
                <h2>6. Destinatarios de los Datos</h2>
                <p>Tus datos pueden ser comunicados a:</p>
                <ul>
                    <li>Proveedores de servicios tecnológicos (hosting, email marketing)</li>
                    <li>Administraciones públicas cuando sea legalmente requerido</li>
                    <li>Colaboradores profesionales necesarios para prestar el servicio (abogados, fiduciarias suizas)</li>
                </ul>
                <p>No vendemos ni cedemos tus datos a terceros con fines comerciales.</p>
            </section>

            <section>
                <h2>7. Transferencias Internacionales</h2>
                <p>Dado que operamos en Suiza, tus datos pueden ser transferidos y tratados en Suiza. Suiza cuenta con una decisión de adecuación de la Comisión Europea que garantiza un nivel de protección equivalente al del Espacio Económico Europeo.</p>
            </section>

            <section>
                <h2>8. Tus Derechos</h2>
                <p>Puedes ejercer los siguientes derechos enviando un email a <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a>:</p>
                <ul>
                    <li><strong>Acceso:</strong> Conocer qué datos tenemos sobre ti</li>
                    <li><strong>Rectificación:</strong> Corregir datos inexactos</li>
                    <li><strong>Supresión:</strong> Solicitar la eliminación de tus datos</li>
                    <li><strong>Oposición:</strong> Oponerte al tratamiento de tus datos</li>
                    <li><strong>Limitación:</strong> Solicitar la limitación del tratamiento</li>
                    <li><strong>Portabilidad:</strong> Recibir tus datos en formato estructurado</li>
                </ul>
                <p>También tienes derecho a presentar una reclamación ante la autoridad de protección de datos competente.</p>
            </section>

            <section>
                <h2>9. Seguridad</h2>
                <p>Implementamos medidas técnicas y organizativas para proteger tus datos personales contra acceso no autorizado, pérdida o destrucción, incluyendo:</p>
                <ul>
                    <li>Conexión segura mediante HTTPS</li>
                    <li>Acceso restringido a los datos personales</li>
                    <li>Sistemas de backup y recuperación</li>
                </ul>
            </section>

            <section>
                <h2>10. Modificaciones</h2>
                <p>Nos reservamos el derecho de modificar esta política de privacidad. Cualquier cambio será publicado en esta página con la fecha de actualización correspondiente.</p>
            </section>

            <section>
                <h2>11. Contacto</h2>
                <p>Para cualquier consulta relacionada con esta política de privacidad o el tratamiento de tus datos, puedes contactarnos en:</p>
                <p><strong>Email:</strong> <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a></p>
            </section>

        </div>
    </article>

</main>

<?php get_footer(); ?>
