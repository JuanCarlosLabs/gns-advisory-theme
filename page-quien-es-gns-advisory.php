<?php
/**
 * Template Name: Quién es GNS Advisory
 * Sobre GNS Advisory - Quiénes somos
 * Asesor fiscal Suiza para empresarios españoles
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/about.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main page-sobre-nosotros" itemscope itemtype="https://schema.org/AboutPage">

    <!-- Hero -->
    <section class="sobre-hero">
        <div class="container">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo home_url(); ?>">
                            <span itemprop="name">Inicio</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">Asesor Fiscal Suiza</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </nav>

            <h1 class="sobre-hero-title animate-on-scroll fade-up">
                GNS Advisory y el Equipo detrás de tu Fiscalidad
            </h1>
            <p class="sobre-hero-subtitle animate-on-scroll fade-up stagger-1">
                Por qué confiar en GNS Advisory para tu optimización fiscal
            </p>
            <p class="sobre-hero-description animate-on-scroll fade-up stagger-2">
                GNS Advisory nace para empresarios que buscan justicia financiera. Liderados por Alejandra Ortiz, somos expertos en fiscalidad suiza y derecho mercantil. No somos una gestoría más. Somos tus aliados para que tu transición a Suiza sea rentable, segura y sin sorpresas desagradables.
            </p>
        </div>
    </section>

    <!-- Historia de Ale -->
    <section class="sobre-fundadora" itemscope itemtype="https://schema.org/Person">
        <div class="container">
            <div class="fundadora-grid">

                <div class="fundadora-photo animate-on-scroll fade-right">
                    <img itemprop="image" src="<?php echo home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp'); ?>" alt="Alejandra Ortiz - Asesora fiscal española en Suiza y fundadora de GNS Advisory" width="300" height="300" loading="lazy">
                </div>

                <div class="fundadora-content animate-on-scroll fade-left stagger-1">
                    <h2>La Historia de <span itemprop="name">Alejandra Ortiz</span></h2>
                    <p class="fundadora-role" itemprop="jobTitle">Fundadora y Asesora Fiscal en Suiza</p>

                    <div class="fundadora-story" itemprop="description">
                        <p>Mira.</p>

                        <p>A mí me encanta España.</p>

                        <p>La comida. La familia. Las cañas a las 2 de la tarde. Las cenas que empiezan a las 10 y terminan a las 2 de la mañana.</p>

                        <p>Eso lo echo de menos.</p>

                        <p>Pero hay algo que no echo de menos.</p>

                        <p>Ver cómo cada año España se convierte en un infierno fiscal. Donde trabajas 14 horas al día para que el 45% se lo lleve Hacienda. Donde no puedes crecer porque crecer significa pagar más. Donde ahorrar es sospechoso.</p>

                        <p>Yo lo viví. Vi a empresarios brillantes fingiendo pérdidas para sobrevivir. Vi a familias con patrimonio escondiendo dinero como si fueran criminales.</p>

                        <p>Me cansé de ver a gente buena siendo tratada como delincuentes.</p>

                        <p><strong>Por eso creé GNS Advisory.</strong></p>

                        <p>Para ayudar a empresarios españoles a optimizar impuestos legalmente en Suiza. A dejar de fingir. A construir patrimonio de verdad en un país que respeta a quien genera riqueza.</p>
                    </div>

                    <div class="fundadora-contact">
                        <a href="mailto:a.ortiz@gnsadvisory.com" itemprop="email">a.ortiz@gnsadvisory.com</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Números / Credibilidad -->
    <section class="sobre-numeros">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">Optimización Fiscal en Suiza: Los Números</h2>

            <div class="numeros-grid">
                <div class="numero-item animate-on-scroll zoom-in stagger-1">
                    <span class="numero-value">4+</span>
                    <span class="numero-label">Años asesorando en fiscalidad suiza</span>
                </div>
                <div class="numero-item animate-on-scroll zoom-in stagger-2">
                    <span class="numero-value">500+</span>
                    <span class="numero-label">Empresarios españoles protegidos</span>
                </div>
                <div class="numero-item animate-on-scroll zoom-in stagger-3">
                    <span class="numero-value">0</span>
                    <span class="numero-label">Problemas legales</span>
                </div>
                <div class="numero-item animate-on-scroll zoom-in stagger-4">
                    <span class="numero-value">26</span>
                    <span class="numero-label">Cantones suizos dominados</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Team / Equipo Completo -->
    <section class="team" aria-labelledby="team-heading">
        <div class="container">
            <h2 id="team-heading" class="animate-on-scroll fade-up">Conoce al equipo de GNS Advisory, tu asesoría fiscal especializada en Suiza</h2>
            <p class="animate-on-scroll fade-up stagger-1">Las personas que harán que todo funcione para ti.</p>

            <div class="team-grid">
                <!-- Alejandra Ortiz - Fundadora -->
                <div class="team-member main animate-on-scroll zoom-in stagger-2">
                    <div class="team-photo-wrapper">
                        <div class="team-photo">
                            <img src="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp"
                                 srcset="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp 250w,
                                         <?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp 500w"
                                 sizes="(max-width: 768px) 200px, 250px"
                                 alt="Alejandra Ortiz" width="250" height="250" loading="lazy">
                        </div>
                    </div>
                    <div class="team-info">
                        <div class="team-name">
                            Alejandra Ortiz (Ale)
                            <a href="https://www.linkedin.com/in/aortizher/" target="_blank" rel="noopener noreferrer" class="team-linkedin" aria-label="LinkedIn de Alejandra Ortiz">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="team-role">Fundadora | Especialista en Fiscalidad Suiza para Hispanohablantes</div>
                        <div class="team-credentials">
                            <span class="credential">Máster en Fiscalidad Internacional y Doble Imposición</span>
                            <span class="credential">4+ años de asesoría fiscal especializada exclusivamente en Suiza</span>
                            <span class="credential">500+ estructuras fiscales implementadas (GmbH, Holding, AG)</span>
                        </div>
                        <div class="team-email">a.ortiz@gnsadvisory.com</div>
                        <p style="margin-top: 1rem; color: #495057;">Mira.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">A mí me encanta España.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">La comida. La familia. Las cañas a las 2 de la tarde. Las cenas que empiezan a las 10 y terminan a las 2 de la mañana. El estilo de vida que no tiene ningún otro país en Europa.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Eso lo echo de menos.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Pero hay algo que no echo de menos.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Ver cómo cada año España se convierte en un infierno fiscal. Donde trabajas 14 horas al día para que el 45% se lo lleve Hacienda. Donde no puedes crecer porque crecer significa pagar más. Donde no puedes ahorrar porque ahorrar es sospechoso. Donde no puedes invertir porque invertir te pone una diana en la espalda.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Donde solo puedes hacer una cosa bien: comer.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Eso sí que se hace bien en España.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Pero mientras comes bien, tu empresa no crece. Mientras brindas con amigos, tus impuestos suben. Mientras disfrutas el estilo de vida, tu patrimonio se estanca.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Y lo peor de todo: la situación va a peor.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Cada año, nuevos impuestos. Cada año, más persecución. Cada año, más empresarios que se van.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Porque llega un punto en el que tienes que elegir: ¿Quieres vivir bien? ¿O quieres crecer?</p>
                        <p style="margin-top: 0.75rem; color: #495057;">En España, solo puedes hacer una cosa. No las dos.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Yo lo viví. Vi a empresarios brillantes fingiendo pérdidas para sobrevivir. Vi a familias con patrimonio escondiendo dinero como si fueran criminales. Vi a gente que ganaba bien pero no podía dormir tranquila.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Porque en España, ganar dinero es un delito. No oficialmente. Pero en la práctica, sí.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Me cansé de ver a gente buena siendo tratada como delincuentes. Me cansé de ver talento desperdiciado. Me cansé de ver empresarios brillantes atrapados en un sistema que los castiga por ganar.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Por eso creé GNS Advisory. Fiscalidad en Suiza para empresarios que quieren dejar de regalar su dinero. Fiscalidad en Suiza para revertir esta mierda.</p>
                    </div>
                </div>

                <!-- Sofía Fajardo -->
                <div class="team-member animate-on-scroll fade-up stagger-3">
                    <div class="team-photo">
                        <img src="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Sofia-Fajardo-abogada-derecho-mercantil-contratos-internacionales-GNS-Advisory.webp" alt="Sofía Fajardo" width="150" height="150" loading="lazy">
                    </div>
                    <div class="team-name">
                        Sofía Fajardo
                    </div>
                    <div class="team-role">Directora Legal</div>
                    <div class="team-credentials">
                        <span class="credential">Abogada especializada en derecho mercantil</span>
                        <span class="credential">Experta en contratos internacionales</span>
                    </div>
                    <div class="team-email">s.fajardo@gnsadvisory.com</div>
                    <p style="margin-top: 0.75rem; color: #495057;">La que se asegura de que todo lo que hacemos esté blindado legalmente.</p>
                    <p style="margin-top: 0.75rem; color: #495057;">Si algo puede salir mal en un contrato, Sofía lo encuentra antes.</p>
                </div>

                <!-- Javier Catota -->
                <div class="team-member animate-on-scroll fade-up stagger-3">
                    <div class="team-photo">
                        <img src="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Javier-Catota-director-operaciones-relocalizacion-fiscal-Suiza-GNS-Advisory.webp" alt="Javier Catota" width="150" height="150" loading="lazy">
                    </div>
                    <div class="team-name">
                        Javier Catota
                        <a href="https://www.linkedin.com/in/javier-catota-18692622a/" target="_blank" rel="noopener noreferrer" class="team-linkedin" aria-label="LinkedIn de Javier Catota">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="team-role">Director de Operaciones</div>
                    <div class="team-credentials">
                        <span class="credential">Gestión de procesos de relocalización fiscal</span>
                        <span class="credential">Coordinación con autoridades suizas</span>
                    </div>
                    <div class="team-email">j.catota@gnsadvisory.com</div>
                    <p style="margin-top: 0.75rem; color: #495057;">El que hace que todo funcione por dentro.</p>
                    <p style="margin-top: 0.75rem; color: #495057;">Papeles, procesos, coordinación. Lo que no se ve pero sin lo cual nada funcionaría.</p>
                </div>

                <!-- Carlos Duarte -->
                <div class="team-member animate-on-scroll fade-up stagger-4">
                    <div class="team-photo">
                        <img src="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Carlos-Duarte-Soporte-al-Cliente-GNS-Advisory-Plataformas-Digitales.webp" alt="Carlos Duarte" width="150" height="150" loading="lazy">
                    </div>
                    <div class="team-name">
                        Carlos Duarte
                    </div>
                    <div class="team-role">Soporte al Cliente</div>
                    <div class="team-credentials">
                        <span class="credential">Gestión de plataformas digitales</span>
                        <span class="credential">Soporte técnico especializado</span>
                    </div>
                    <div class="team-email">support@gnsadvisory.com</div>
                    <p style="margin-top: 0.75rem; color: #495057;">El que te ayuda cuando algo técnico no funciona.</p>
                    <p style="margin-top: 0.75rem; color: #495057;">Plataformas, accesos, formación online. Si tienes un problema técnico, él lo resuelve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="sobre-valores">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">Cómo Trabajamos la Fiscalidad en Suiza</h2>

            <div class="valores-grid">

                <div class="valor-card animate-on-scroll slide-fade stagger-1">
                    <div class="valor-icon" aria-hidden="true">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 5L5 15V25L20 35L35 25V15L20 5Z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Honestidad Radical</h3>
                    <p>Si no te conviene tributar en Suiza, te lo digo. No voy a venderte humo para facturar. Mi negocio se basa en clientes satisfechos que me recomiendan.</p>
                </div>

                <div class="valor-card animate-on-scroll slide-fade stagger-2">
                    <div class="valor-icon" aria-hidden="true">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <circle cx="20" cy="20" r="15" stroke="currentColor" stroke-width="2"/>
                            <path d="M13 20L18 25L28 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Optimización Fiscal 100% Legal</h3>
                    <p>No hago trucos. No hago ingeniería fiscal agresiva. Todo dentro del marco legal suizo y español. Si quieres algo ilegal, no soy tu persona.</p>
                </div>

                <div class="valor-card animate-on-scroll slide-fade stagger-3">
                    <div class="valor-icon" aria-hidden="true">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 5V35M5 20H35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="20" cy="20" r="8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Acompañamiento en Todo el Proceso</h3>
                    <p>No te dejo solo con papeles. Te acompaño en todo el proceso de traslado fiscal. Hasta que estés instalado, operativo y tributando tranquilo en Suiza.</p>
                </div>

                <div class="valor-card animate-on-scroll slide-fade stagger-4">
                    <div class="valor-icon" aria-hidden="true">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect x="5" y="8" width="30" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M5 16H35" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Sin Persecución</h3>
                    <p>No te voy a mandar 47 emails de seguimiento. Si quieres hablar de impuestos en Suiza, aquí estoy. Si no, también está bien. Sin presiones.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="sobre-cta">
        <div class="container">
            <div class="sobre-cta-content animate-on-scroll zoom-in">
                <h2>¿Quieres Optimizar tus Impuestos en Suiza?</h2>
                <p>Una hora de conversación honesta. Te digo si la fiscalidad suiza te conviene o no.</p>
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="btn-primary">
                    Reservar Consulta Fiscal
                </a>
            </div>
        </div>
    </section>

</main>

<!-- Schema.org para Asesoría Fiscal -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "GNS Advisory - Asesor Fiscal Suiza",
    "description": "Asesoría fiscal especializada en optimización de impuestos en Suiza para empresarios españoles. Traslado fiscal legal y acompañamiento completo.",
    "url": "<?php echo get_permalink(); ?>",
    "logo": "<?php echo home_url('/wp-content/uploads'); ?>/2025/06/gns-logo.png",
    "image": "<?php echo home_url('/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp'); ?>",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "CH",
        "addressLocality": "Suiza"
    },
    "areaServed": [
        {
            "@type": "Country",
            "name": "España"
        },
        {
            "@type": "Country",
            "name": "Suiza"
        }
    ],
    "serviceType": ["Asesoría Fiscal", "Optimización de Impuestos", "Traslado Fiscal a Suiza", "Planificación Fiscal Internacional"],
    "founder": {
        "@type": "Person",
        "name": "Alejandra Ortiz",
        "jobTitle": "Asesora Fiscal en Suiza",
        "email": "a.ortiz@gnsadvisory.com"
    },
    "employee": [
        {
            "@type": "Person",
            "name": "Sofía Fajardo",
            "jobTitle": "Legal"
        },
        {
            "@type": "Person",
            "name": "Javier Catota",
            "jobTitle": "Operaciones"
        },
        {
            "@type": "Person",
            "name": "Carlos Duarte",
            "jobTitle": "Soporte"
        }
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "500"
    },
    "knowsAbout": [
        "Impuestos en Suiza",
        "Fiscalidad suiza para españoles",
        "Optimización fiscal internacional",
        "Traslado fiscal España-Suiza",
        "Tributación en cantones suizos"
    ]
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>
