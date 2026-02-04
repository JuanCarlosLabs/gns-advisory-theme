<?php
/**
 * Template Name: Política de Cookies
 * Página legal de cookies para GNS Group Advisory LLC
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
                <span itemprop="name" class="current">Política de Cookies</span>
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
                <h2>1. ¿Qué son las Cookies?</h2>
                <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (ordenador, tablet o móvil) cuando visitas un sitio web. Se utilizan para recordar tus preferencias, mejorar tu experiencia de navegación y recopilar información analítica.</p>
            </section>

            <section>
                <h2>2. ¿Quién Utiliza las Cookies?</h2>
                <p>Las cookies de este sitio web son utilizadas por:</p>
                <ul>
                    <li><strong>GNS Group Advisory LLC</strong> (cookies propias)</li>
                    <li><strong>Terceros</strong> como Google Analytics, para analítica web (cookies de terceros)</li>
                </ul>
            </section>

            <section>
                <h2>3. Tipos de Cookies que Utilizamos</h2>

                <h3>3.1 Cookies Técnicas (Necesarias)</h3>
                <p>Son imprescindibles para el funcionamiento del sitio web. Sin ellas, no podrías navegar correctamente.</p>
                <table class="cookies-table">
                    <thead>
                        <tr>
                            <th>Cookie</th>
                            <th>Finalidad</th>
                            <th>Duración</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>wordpress_logged_in</td>
                            <td>Mantener la sesión de usuario</td>
                            <td>Sesión</td>
                        </tr>
                        <tr>
                            <td>wp_lang</td>
                            <td>Recordar el idioma seleccionado</td>
                            <td>Sesión</td>
                        </tr>
                        <tr>
                            <td>cookie_consent</td>
                            <td>Almacenar tus preferencias de cookies</td>
                            <td>1 año</td>
                        </tr>
                    </tbody>
                </table>

                <h3>3.2 Cookies Analíticas</h3>
                <p>Nos permiten medir y analizar la navegación de los usuarios para mejorar nuestros servicios.</p>
                <table class="cookies-table">
                    <thead>
                        <tr>
                            <th>Cookie</th>
                            <th>Proveedor</th>
                            <th>Finalidad</th>
                            <th>Duración</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>_ga</td>
                            <td>Google Analytics</td>
                            <td>Distinguir usuarios únicos</td>
                            <td>2 años</td>
                        </tr>
                        <tr>
                            <td>_ga_*</td>
                            <td>Google Analytics</td>
                            <td>Mantener el estado de sesión</td>
                            <td>2 años</td>
                        </tr>
                        <tr>
                            <td>_gid</td>
                            <td>Google Analytics</td>
                            <td>Distinguir usuarios</td>
                            <td>24 horas</td>
                        </tr>
                    </tbody>
                </table>

                <h3>3.3 Cookies de Marketing</h3>
                <p>Utilizadas para mostrar anuncios relevantes. Actualmente no utilizamos cookies de marketing en este sitio web.</p>
            </section>

            <section>
                <h2>4. ¿Cómo Gestionar las Cookies?</h2>
                <p>Puedes gestionar tus preferencias de cookies de varias formas:</p>

                <h3>4.1 Desde tu navegador</h3>
                <p>Puedes configurar tu navegador para bloquear o eliminar cookies:</p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                    <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                    <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">Microsoft Edge</a></li>
                </ul>

                <h3>4.2 Opt-out de Google Analytics</h3>
                <p>Puedes evitar que Google Analytics recopile datos instalando el <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">complemento de inhabilitación de Google Analytics</a>.</p>
            </section>

            <section>
                <h2>5. Consecuencias de Desactivar las Cookies</h2>
                <p>Si decides bloquear o eliminar las cookies:</p>
                <ul>
                    <li>Algunas funcionalidades del sitio web pueden no funcionar correctamente</li>
                    <li>No podremos recordar tus preferencias</li>
                    <li>La experiencia de navegación puede verse afectada</li>
                </ul>
            </section>

            <section>
                <h2>6. Actualizaciones de esta Política</h2>
                <p>Esta política de cookies puede ser actualizada periódicamente para reflejar cambios en las cookies que utilizamos o por motivos legales. Te recomendamos revisarla periódicamente.</p>
            </section>

            <section>
                <h2>7. Más Información</h2>
                <p>Para más información sobre cómo tratamos tus datos personales, consulta nuestra <a href="/politica-de-privacidad/">Política de Privacidad</a>.</p>
                <p>Si tienes alguna duda sobre nuestra política de cookies, puedes contactarnos en:</p>
                <p><strong>Email:</strong> <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a></p>
            </section>

        </div>
    </article>

</main>

<?php get_footer(); ?>
