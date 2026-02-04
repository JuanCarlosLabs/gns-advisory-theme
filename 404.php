<?php
/**
 * 404 Error Page
 * Página de error personalizada - GNS Advisory
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/404.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main page-404">

    <section class="error-hero">
        <div class="container">

            <div class="error-code animate-on-scroll">404</div>

            <h1 class="error-title animate-on-scroll stagger-1">
                Esta página no existe
            </h1>

            <p class="error-description animate-on-scroll stagger-2">
                Puede que la página haya sido movida, eliminada, o simplemente nunca existió. No te preocupes, te ayudamos a encontrar lo que buscas.
            </p>

            <div class="error-actions animate-on-scroll stagger-3">
                <a href="<?php echo home_url(); ?>" class="btn-primary-404">
                    Volver al inicio
                </a>
                <a href="<?php echo home_url('/contacto/'); ?>" class="btn-secondary-404">
                    Contactar con nosotros
                </a>
            </div>

            <div class="error-suggestions animate-on-scroll stagger-4">
                <h2>Quizás buscabas...</h2>

                <div class="suggestions-grid">

                    <a href="<?php echo home_url('/servicios/'); ?>" class="suggestion-link">
                        <div class="suggestion-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                <path d="M2 17l10 5 10-5"></path>
                                <path d="M2 12l10 5 10-5"></path>
                            </svg>
                        </div>
                        <span class="suggestion-text">Servicios</span>
                    </a>

                    <a href="<?php echo home_url('/quien-es-gns-advisory/'); ?>" class="suggestion-link">
                        <div class="suggestion-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <span class="suggestion-text">Sobre nosotros</span>
                    </a>

                    <a href="<?php echo home_url('/blog-fiscalidad-impuestos-suiza/'); ?>" class="suggestion-link">
                        <div class="suggestion-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <span class="suggestion-text">Blog</span>
                    </a>

                    <a href="<?php echo home_url('/contacto/'); ?>" class="suggestion-link">
                        <div class="suggestion-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <span class="suggestion-text">Contacto</span>
                    </a>

                </div>
            </div>

            <div class="error-help animate-on-scroll stagger-4">
                <p>Si crees que esto es un error o necesitas ayuda, escríbenos a <a href="mailto:info@gnsadvisory.com">info@gnsadvisory.com</a></p>
                <p>O si prefieres, <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener">agenda una consulta directamente</a>.</p>
            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animaciones al cargar
    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    // Pequeño delay para que las animaciones se vean
    setTimeout(() => {
        animatedElements.forEach(el => {
            el.classList.add('animate-visible');
        });
    }, 100);
});
</script>

<?php get_footer(); ?>
