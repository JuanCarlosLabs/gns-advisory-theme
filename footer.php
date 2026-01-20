<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-brand">
                <span class="footer-logo">GNS Advisory</span>
                <p class="footer-tagline">Optimización fiscal en Suiza</p>
            </div>

            <nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e('Navegación del pie de página', 'gns-advisory'); ?>">
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-menu',
                        'container'      => false,
                        'menu_class'     => 'footer-menu',
                        'depth'          => 1,
                    ));
                }
                ?>
            </nav>

            <div class="footer-contact">
                <p>
                    <a href="mailto:info@gnsadvisory.com" aria-label="<?php esc_attr_e('Enviar correo a GNS Advisory', 'gns-advisory'); ?>">info@gnsadvisory.com</a>
                </p>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copyright">
                &copy; <?php echo date('Y'); ?> GNS Group Advisory.
                <?php esc_html_e('Todos los derechos reservados.', 'gns-advisory'); ?>
            </p>
            <p class="footer-legal">
                <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" aria-label="<?php esc_attr_e('Leer política de privacidad', 'gns-advisory'); ?>"><?php esc_html_e('Política de Privacidad', 'gns-advisory'); ?></a>
                <span class="separator" aria-hidden="true">|</span>
                <a href="<?php echo esc_url(home_url('/legal/')); ?>" aria-label="<?php esc_attr_e('Leer aviso legal', 'gns-advisory'); ?>"><?php esc_html_e('Aviso Legal', 'gns-advisory'); ?></a>
            </p>
        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
