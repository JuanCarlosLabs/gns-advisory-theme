<?php
/**
 * Footer Template
 *
 * @package GNS_Advisory
 */
?>
    <footer class="site-footer-seo" aria-label="Información adicional">
        <div class="container">

            <!-- Mensaje de redirección al CTA -->
            <div class="footer-redirect animate-on-scroll fade-up">
                <p class="footer-redirect-text">¿Buscas más información?</p>
                <p class="footer-redirect-emphasis">Lo importante está arriba.</p>
                <a href="#cta" class="footer-scroll-up" aria-label="Volver al formulario de contacto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 19V5M12 5L5 12M12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <!-- Grid principal: 3 columnas -->
            <div class="footer-main-grid footer-three-cols">

                <!-- Columna 1: Artículos del Blog -->
                <div class="footer-seo-column animate-on-scroll slide-fade stagger-1">
                    <h4>Guías y Artículos</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/que-es-gmbh-suiza/')); ?>">¿Qué es una GmbH?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/que-es-holding-suiza/')); ?>">¿Qué es un Holding?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/pasos-crear-empresa-suiza/')); ?>">Pasos para crear empresa</a></li>
                        <li><a href="<?php echo esc_url(home_url('/crear-empresa-suiza-guia/')); ?>">Guía completa 2026</a></li>
                        <li><a href="<?php echo esc_url(home_url('/autonomo-suiza-einzelfirma/')); ?>">Einzelfirma: autónomo suizo</a></li>
                        <li><a href="<?php echo esc_url(home_url('/empresa-suiza-sin-residencia/')); ?>">Empresa sin residencia</a></li>
                        <li><a href="<?php echo esc_url(home_url('/iva-en-suiza-guia/')); ?>">Guía del IVA</a></li>
                        <li><a href="<?php echo esc_url(home_url('/irpf-suiza-declaracion/')); ?>">IRPF en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/declaracion-renta-suiza/')); ?>">Declaración de renta</a></li>
                        <li><a href="<?php echo esc_url(home_url('/fiscalidad-cantones-suiza/')); ?>">Fiscalidad por cantones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cambio-residencia-fiscal-suiza/')); ?>">Cambio de residencia</a></li>
                    </ul>
                </div>

                <!-- Columna 2: Páginas de Servicio -->
                <div class="footer-seo-column animate-on-scroll slide-fade stagger-2">
                    <h4>Servicios</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>">Crear empresa en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/ag-suiza/')); ?>">AG en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>">Holding en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/autonomo-suiza/')); ?>">Autónomo en Suiza</a></li>
                        <li><a href="<?php echo esc_url(home_url('/residencia-fiscal-suiza/')); ?>">Residencia fiscal</a></li>
                        <li><a href="<?php echo esc_url(home_url('/optimizacion-fiscal/')); ?>">Optimización fiscal</a></li>
                        <li><a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>">IVA en Suiza</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Navegación + Mapa -->
                <div class="footer-right-column animate-on-scroll slide-fade stagger-3">
                    <nav class="footer-sitemap-nav" aria-label="Navegación del sitio">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
                        <a href="<?php echo esc_url(home_url('/servicios/')); ?>">Servicios</a>
                        <a href="<?php echo esc_url(home_url('/quien-es-gns-advisory/')); ?>">Nosotros</a>
                        <a href="<?php echo esc_url(home_url('/blog-fiscalidad-impuestos-suiza/')); ?>">Blog</a>
                        <a href="<?php echo esc_url(home_url('/contacto/')); ?>">Contacto</a>
                    </nav>

                    <!-- Google Maps Widget -->
                    <div class="footer-map-widget">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43096.07631628391!2d8.475097899999999!3d47.1661507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa7d8c8e8e36d%3A0x400ff88439651d0!2sZug%2C%20Switzerland!5e0!3m2!1sen!2ses!4v1706000000000!5m2!1sen!2ses"
                            width="100%"
                            height="120"
                            style="border:0; border-radius: 8px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Ubicación GNS Advisory - Zug, Suiza">
                        </iframe>
                        <p class="footer-map-label">Zug, Suiza</p>
                    </div>
                </div>

            </div>

            <!-- Línea divisoria animada -->
            <div class="footer-divider animate-on-scroll fade-up"></div>

            <!-- Footer bottom: Logo + Legal -->
            <div class="footer-bottom animate-on-scroll fade-up stagger-2">

                <!-- Logo -->
                <div class="footer-logo">
                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>" alt="GNS Advisory - Fiscalidad en Suiza" width="180" height="37" loading="lazy">
                </div>

                <!-- Info legal -->
                <div class="footer-legal">
                    <p>&copy; <?php echo date('Y'); ?> GNS Group Advisory LLC. Todos los derechos reservados.</p>
                    <p>Asesoría fiscal internacional especializada en Suiza.</p>
                </div>

                <!-- Links legales -->
                <div class="footer-legal-links">
                    <a href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>">Política de Privacidad</a>
                    <span class="footer-separator">|</span>
                    <a href="<?php echo esc_url(home_url('/aviso-legal/')); ?>">Aviso Legal</a>
                    <span class="footer-separator">|</span>
                    <a href="<?php echo esc_url(home_url('/politica-de-cookies/')); ?>">Cookies</a>
                </div>

            </div>

        </div>
    </footer>

<script>
// Proteger y mostrar el footer SEO inmediatamente
(function() {
    function showFooter() {
        const footer = document.querySelector('.site-footer-seo');
        if (footer) {
            // Forzar visibilidad con máxima prioridad
            footer.style.cssText = 'display: block !important; visibility: visible !important; opacity: 1 !important; position: relative !important; height: auto !important; max-height: none !important; overflow: visible !important; left: auto !important; top: auto !important; z-index: 1 !important;';
            footer.classList.add('keep'); // Marcar como elemento a mantener

            // Activar animaciones
            setTimeout(function() {
                footer.classList.add('footer-visible');
                var animatedElements = footer.querySelectorAll('.animate-on-scroll');
                animatedElements.forEach(function(el) {
                    el.classList.add('animate-visible');
                });
            }, 100);
        }
    }

    // Ejecutar inmediatamente
    showFooter();

    // También ejecutar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', showFooter);
    }

    // Y después de que todo cargue
    window.addEventListener('load', showFooter);

    // Protección adicional con intervalos
    setTimeout(showFooter, 500);
    setTimeout(showFooter, 1000);
    setTimeout(showFooter, 2000);
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
