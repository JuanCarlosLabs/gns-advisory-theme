<?php
/**
 * Template Name: Contacto
 * SEO-optimized contact page for "Planificación Fiscal en Suiza"
 * Target keyword: planificación fiscal
 * Secondary keywords: hacienda, crear empresa en suiza, irse de españa, iva en suiza, irpf suiza
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/contacto.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main contact-page" itemscope itemtype="https://schema.org/ContactPage">

    <!-- Breadcrumbs with Schema -->
    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo home_url(); ?>">
                    <span itemprop="name">Inicio</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name" class="current">Planificación Fiscal - Contacto</span>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </nav>

    <!-- Hero Section - SEO Optimizado -->
    <header class="contact-hero animate-on-scroll">
        <h1>Asesor fiscal en Suiza para resolver tus dudas ahora mismo</h1>
        <h2 class="hero-seo-subtitle">Habla con un asesor fiscal en Suiza experto en clientes españoles</h2>
        <p>Un asesor fiscal en Suiza es lo que necesitas para dar el paso sin dudas. Analizamos tu caso concreto, calculamos tu ahorro real y diseñamos la hoja de ruta para tu traslado. Nada de teoría. Números reales sobre tu situación. Reserva tu consulta y deja de darle vueltas.</p>
    </header>

    <!-- SEO Content Section -->
    <section class="seo-intro-section">
        <div class="container">
            <div class="seo-content-box">
                <h2>¿Por qué elegir Suiza para tu planificación fiscal?</h2>
                <p>Suiza ofrece uno de los sistemas fiscales más atractivos de Europa. Si estás cansado de la presión de <strong>Hacienda</strong> en España y buscas una alternativa legal, la <strong>planificación fiscal</strong> en Suiza puede reducir significativamente tu carga tributaria.</p>
                <ul class="seo-benefits">
                    <li><strong>IVA en Suiza:</strong> Solo 8,1% (frente al 21% en España)</li>
                    <li><strong>IRPF en Suiza:</strong> Tipos variables por cantón, desde el 11% hasta el 35%</li>
                    <li><strong>Crear empresa en Suiza:</strong> Proceso ágil y beneficios fiscales para holdings</li>
                    <li><strong>Sin impuesto de patrimonio</strong> en la mayoría de cantones</li>
                </ul>
                <p>Miles de españoles ya han dado el paso de <strong>irse de España</strong> a Suiza. Nosotros te guiamos en todo el proceso de <strong>planificación fiscal</strong> para que la transición sea perfecta.</p>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">

                <!-- Contact Info -->
                <div class="contact-info animate-on-scroll" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="GNS Group Advisory">
                    <meta itemprop="url" content="<?php echo home_url(); ?>">

                    <h2>Hablemos</h2>
                    <p>La forma más rápida de resolver tus dudas es agendar una consulta gratuita. Sin compromiso, sin presiones.</p>

                    <address class="contact-methods" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <div class="contact-method">
                            <div class="contact-method-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="contact-method-content">
                                <h3>Email</h3>
                                <p><a href="mailto:info@gnsadvisory.com" itemprop="email">info@gnsadvisory.com</a></p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="contact-method-content">
                                <h3>Ubicación</h3>
                                <p><span itemprop="addressCountry">Suiza</span></p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="contact-method-content">
                                <h3>Horario</h3>
                                <p>Lunes a Viernes, 9:00 - 18:00 CET</p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="contact-method-content">
                                <h3>Idiomas</h3>
                                <p>Español, Inglés, Francés</p>
                            </div>
                        </div>
                    </address>

                    <div class="contact-cta-box">
                        <p class="cta-intro">Si estás pagando más de 100.000€ al año en impuestos y no has hablado con alguien que entienda Suiza, estás perdiendo dinero.</p>
                        <div class="cta-price">
                            <span class="price">230€</span>
                            <span class="price-desc">1 hora de consulta</span>
                        </div>
                        <p class="cta-note">Si seguimos trabajando juntos, se descuenta del proyecto.</p>
                        <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-cta">Quiero dejar de regalar mi dinero</a>
                    </div>
                </div>

                <!-- Contact Form - Contact Form 7 Integration -->
                <div class="contact-form-wrapper animate-on-scroll">
                    <h2>Consulta sobre Planificación Fiscal</h2>
                    <p>Cuéntanos tu situación con Hacienda y te asesoramos sin compromiso.</p>

                    <?php
                    // Contact Form 7 Integration
                    // Shortcode ID: Cambia 'XXX' por el ID de tu formulario en CF7
                    if (shortcode_exists('contact-form-7')) {
                        // Si CF7 está instalado, muestra el formulario
                        echo do_shortcode('[contact-form-7 id="gns-planificacion-fiscal" title="Planificación Fiscal"]');
                    } else {
                        // Formulario de respaldo si CF7 no está instalado
                    ?>
                    <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <input type="hidden" name="action" value="gns_contact_form">
                        <?php wp_nonce_field('gns_contact_nonce', 'gns_nonce'); ?>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name">Nombre <span class="required" aria-label="obligatorio">*</span></label>
                                <input type="text" id="contact-name" name="name" autocomplete="name" required>
                            </div>

                            <div class="form-group">
                                <label for="contact-email">Email <span class="required" aria-label="obligatorio">*</span></label>
                                <input type="email" id="contact-email" name="email" autocomplete="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-subject">¿En qué podemos ayudarte?</label>
                            <select id="contact-subject" name="subject">
                                <option value="planificacion-fiscal">Planificación fiscal en Suiza</option>
                                <option value="irse-espana">Irse de España a Suiza</option>
                                <option value="crear-empresa">Crear empresa en Suiza</option>
                                <option value="hacienda">Problemas con Hacienda</option>
                                <option value="iva-irpf">IVA / IRPF en Suiza</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="contact-message">Mensaje <span class="required" aria-label="obligatorio">*</span></label>
                            <textarea id="contact-message" name="message" placeholder="Describe tu situación actual con Hacienda, tus ingresos aproximados y qué tipo de planificación fiscal buscas..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Solicitar asesoramiento fiscal</button>

                        <p class="form-note">Al enviar este formulario, aceptas nuestra <a href="/politica-de-privacidad/">política de privacidad</a>.</p>
                    </form>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section with Schema - Optimizado para SEO -->
    <section class="contact-faq" aria-labelledby="faq-contacto">
        <div class="container">
            <h2 id="faq-contacto" class="animate-on-scroll">Preguntas frecuentes sobre planificación fiscal en Suiza</h2>

            <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">

                <div class="faq-item animate-on-scroll" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span itemprop="name">¿Cómo funciona la planificación fiscal si quiero irme de España a Suiza?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-answer-content" itemprop="text">
                            <p>La <strong>planificación fiscal</strong> para <strong>irse de España</strong> a Suiza requiere una estrategia bien definida. Analizamos tu situación con <strong>Hacienda</strong>, determinamos el momento óptimo de salida, gestionamos el cambio de residencia fiscal y te ayudamos a evitar la "exit tax" o impuesto de salida. El proceso incluye elegir el cantón más favorable según tu perfil de ingresos.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span itemprop="name">¿Cuánto es el IVA en Suiza comparado con España?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-answer-content" itemprop="text">
                            <p>El <strong>IVA en Suiza</strong> es del 8,1% (tipo general), mientras que en España es del 21%. Para empresarios y autónomos, esto representa un ahorro significativo. Además, existe un tipo reducido del 2,6% para productos de primera necesidad. Si vas a <strong>crear tu empresa en Suiza</strong>, el IVA es una de las grandes ventajas competitivas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span itemprop="name">¿Cómo funciona el IRPF en Suiza? ¿Es más bajo que en España?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-answer-content" itemprop="text">
                            <p>El <strong>IRPF en Suiza</strong> (impuesto sobre la renta) varía significativamente según el cantón. Mientras en España puedes pagar hasta un 47%, en Suiza los tipos oscilan entre el 11% y el 35% según el cantón y nivel de ingresos. Cantones como Zug o Schwyz tienen los tipos más bajos. Nuestra <strong>planificación fiscal</strong> incluye elegir el cantón óptimo para tu situación.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span itemprop="name">¿Qué necesito para crear mi empresa en Suiza?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-answer-content" itemprop="text">
                            <p>Para <strong>crear tu empresa en Suiza</strong> necesitas: capital mínimo de 20.000 CHF para una GmbH (SL), un administrador residente en Suiza, y una dirección comercial. Nosotros gestionamos todo el proceso: constitución, registro mercantil, apertura de cuenta bancaria y alta fiscal. También asesoramos sobre estructuras holding para optimizar dividendos y evitar problemas con <strong>Hacienda</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span itemprop="name">¿Puedo tener problemas con Hacienda española si me mudo a Suiza?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-answer-content" itemprop="text">
                            <p>Si la <strong>planificación fiscal</strong> se hace correctamente, no. <strong>Hacienda</strong> puede cuestionar tu cambio de residencia si no cumples ciertos requisitos (como pasar menos de 183 días en España y demostrar el centro de intereses vitales en Suiza). Nosotros te ayudamos a documentar todo correctamente: baja consular, certificado de residencia fiscal suizo, y corte de vínculos económicos con España.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span itemprop="name">¿Cuánto puedo ahorrar en impuestos si me voy de España a Suiza?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-answer-content" itemprop="text">
                            <p>El ahorro depende de tu perfil, pero generalmente: con ingresos de 200.000€ puedes ahorrar entre 30.000€ y 50.000€ anuales. Con 500.000€ de ingresos, el ahorro puede superar los 100.000€ al año. Además, en Suiza no hay impuesto de patrimonio en la mayoría de cantones. Agenda una consulta gratuita y calculamos tu ahorro exacto con nuestra <strong>planificación fiscal</strong> personalizada.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA - Optimizado para SEO -->
    <section class="contact-final-cta animate-on-scroll">
        <div class="container">
            <h2>¿Listo para tu planificación fiscal en Suiza?</h2>
            <p>Deja de pagar de más a <strong>Hacienda</strong>. Agenda una consulta gratuita y descubre cuánto puedes ahorrar si decides <strong>irse de España</strong> a Suiza. Analizamos tu caso sin compromiso.</p>
            <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">Agendar consulta de planificación fiscal</a>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion - versión mejorada para página de contacto
    const faqItems = document.querySelectorAll('.contact-faq .faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (!question || !answer) return;

        // Remover atributo hidden si existe (conflicto con main.js)
        answer.removeAttribute('hidden');

        question.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Evitar que main.js también capture el evento

            const isActive = item.classList.contains('active');

            // Close all items
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                const otherQuestion = otherItem.querySelector('.faq-question');
                const otherAnswer = otherItem.querySelector('.faq-answer');
                if (otherQuestion) otherQuestion.setAttribute('aria-expanded', 'false');
                if (otherAnswer) otherAnswer.removeAttribute('hidden');
            });

            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
                question.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
