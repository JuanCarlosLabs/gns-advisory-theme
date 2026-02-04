<?php
/**
 * Front Page Template - Landing Page Principal
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<?php // CSS movido a assets/css/landing.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main landing-page">

    <!-- Hero Section -->
    <section class="hero" aria-labelledby="hero-seo-title">
        <div class="container">

            <!-- Bloque SEO Hero - Discreto con branding -->
            <div class="hero-seo-block">
                <div class="hero-seo-content">
                    <div class="hero-seo-text">
                        <h1 id="hero-seo-title" class="hero-seo-title">Fiscalidad en Suiza para empresarios que quieren proteger su capital</h1>
                        <h2 class="hero-seo-subtitle">La fiscalidad en Suiza es el refugio que tu negocio necesita</h2>
                        <p class="hero-seo-description">La fiscalidad en Suiza es lo que separa a los que siguen regalando su dinero de los que decidieron protegerlo. Mientras en España pagas un 45% por el delito de trabajar bien, aquí la tributación real ronda el 12%. No es magia. Es un sistema que premia al que produce en lugar de castigarlo. Miles de empresarios ya lo descubrieron. La pregunta es cuánto tiempo más vas a esperar tú.</p>
                    </div>
                    <div class="hero-seo-logo">
                        <img src="<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>"
                             alt="GNS Advisory - Asesoría fiscal especializada en Suiza"
                             width="180" height="37" loading="eager">
                    </div>
                </div>
            </div>

            <!-- Header -->
            <div class="hero-header">
                <p class="hero-title" id="hero-visual-title">
                    <span class="hero-title-line">Te están robando cada vez más.</span>
                    <span class="hero-title-line">Y lo sabes.</span>
                    <span class="hero-title-line">Pero no haces nada.</span>
                    <span class="hero-title-line hero-title-semibold">Sigue pensando que Suiza es solo para los ricos.</span>
                    <span class="hero-title-line hero-title-semibold">A ver cómo te va.</span>
                </p>
            </div>

            <!-- Main block -->
            <div class="hero-main">

                <!-- Foto Alejandra -->
                <div class="hero-photo-column">
                    <div class="hero-photo-circle">
                        <img src="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp"
                             srcset="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp 200w,
                                     <?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp 400w"
                             sizes="(max-width: 768px) 150px, 200px"
                             alt="Alejandra Ortiz" width="200" height="200" loading="eager" fetchpriority="high">
                    </div>
                    <div class="hero-photo-name">Ale</div>
                    <div class="hero-photo-role">Fundadora GNS Advisory</div>
                </div>

                <!-- Story -->
                <div class="hero-story-column">

                    <div class="hero-story">

                        <p class="story-hook">Mira.</p>

                        <p>Un empresario español me llamó hace 2 años.</p>

                        <p>No te puedo decir su nombre. Acuerdo de confidencialidad.</p>

                        <p>Pero te puedo contar su historia.</p>

                        <p>Porque es la tuya.</p>

                        <p class="story-protagonist">47 años. Empresas en Francia y España. Patrimonio de 2 millones de euros.</p>

                        <p>Y cada año, el mismo infierno:</p>

                        <p>Fingir pérdidas.</p>

                        <p>Mostrar números en rojo para que Hacienda no le destroce.</p>

                        <p>Ganar dinero de verdad... pero no poder tocarlo.</p>

                        <p>No poder reinvertirlo. No poder crecer. No poder moverlo.</p>

                        <p>Porque si lo mueve, Hacienda se lo lleva.</p>

                        <p>37% de impuestos personales.</p>

                        <p>Más el resto de porquerías fiscales que ya conoces.</p>

                        <p>Así que hacía lo que todos:</p>

                        <p>Esconder ganancias. Fingir pérdidas. Sobrevivir.</p>

                        <blockquote class="story-quote">
                            "Ale, llevo años así. Gano dinero pero no puedo usarlo. Quiero comprar empresas, quiero crecer, pero si muevo un euro me crucifican."
                        </blockquote>

                        <p>Le pregunté: ¿Por qué no has explorado la fiscalidad en Suiza?</p>

                        <p>Su respuesta:</p>

                        <p class="story-objection">"Pensaba que eso era solo para millonarios."</p>

                        <p>No lo es.</p>

                        <p class="story-result">Le expliqué cómo funciona la fiscalidad en Suiza y le monté una <a href="<?php echo esc_url(home_url('/servicios/')); ?>">Holding en Suiza</a>.</p>

                        <p class="story-emphasis">Legalmente. Transparente. Sin trucos.</p>

                        <p>Y esto es lo que pasó:</p>

                        <p>Ya no finge pérdidas.</p>

                        <p>Ahora declara ganancias reales.</p>

                        <p>Paga 15% en impuestos. No 37%.</p>

                        <p>Ha comprado 2 empresas nuevas.</p>

                        <p>Y en menos de 2 años comprará otras 2.</p>

                        <p>Dejó de esconderse de Hacienda.</p>

                        <p>Y empezó a construir un imperio.</p>

                        <p class="story-number">La diferencia en impuestos: <strong>22% menos.</strong></p>

                        <p>Eso en su caso son cientos de miles de euros al año.</p>

                        <p>Que antes se los quedaba el Estado.</p>

                        <p>Ahora se los queda él.</p>

                        <p>Y los reinvierte.</p>

                        <p>Y crece.</p>

                        <p>Y duerme tranquilo.</p>

                        <p class="story-lesson">Porque aquí está la verdad sobre fiscalidad en Suiza que nadie te dice:</p>

                        <p class="story-lesson-answer">Mientras estés en España fingiendo pérdidas, no estás construyendo nada.</p>

                        <p>Estás sobreviviendo.</p>

                        <p>Como una rata escondiéndose en un rincón.</p>

                        <p>¿Es eso lo que quieres?</p>

                        <p>¿Trabajar 14 horas al día para esconder lo que ganas?</p>

                        <p>¿Tener miedo cada vez que Hacienda te llama?</p>

                        <p>¿No poder crecer porque mover dinero es un riesgo?</p>

                        <p>Él dejó de fingir.</p>

                        <p>Y empezó a crecer.</p>

                        <p class="story-question">¿Y tú?</p>

                        <p class="story-question-follow">¿Hasta cuándo vas a seguir escondiéndote?</p>

                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary hero-button" aria-label="Agendar consulta con asesor fiscal en Suiza">Quiero dejar de regalar mi dinero</a>

                </div>

            </div>

        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" aria-labelledby="testimonials-heading">
        <div class="container">
            <!-- Bloque SEO Testimonials -->
            <div class="section-seo-block">
                <h2 id="testimonials-heading" class="section-seo-title">Empresarios que aplicaron la fiscalidad suiza y dejaron de pagar de más</h2>
                <p class="section-seo-intro">Un cliente me dijo hace poco: "Ale, llevo 8 años mostrando pérdidas falsas para que Hacienda no me destroce". Ahora tiene una holding en Suiza y paga el 15% sobre beneficios reales. La fiscalidad suiza permite esto de forma completamente legal. Otro empresario español vivía en Vaud pagando 50.000 CHF al año —nuestra asesoría fiscal en Suiza le cambió de cantón y ahora paga 10.000. El sistema fiscal suizo varía tanto entre Zug, Ginebra y Zúrich que elegir mal te puede costar cientos de miles. Aplicamos correctamente los convenios de doble imposición para que no pagues dos veces. Estos son algunos casos reales de ahorro fiscal en Suiza.</p>
            </div>

            <p class="section-visual-title animate-on-scroll fade-up">Esto es lo que pasa cuando entiendes el juego</p>
            <p class="animate-on-scroll fade-up stagger-1">Sin marketing vacío. Solo historias reales.</p>

            <h3 class="section-seo-subtitle sr-only">Casos de Éxito en Optimización Fiscal Suiza</h3>

            <div class="testimonial-grid">
                <div class="testimonial-card animate-on-scroll zoom-in stagger-1 glow-on-appear shine-effect shadow-grow">
                    <div class="testimonial-result counter-animate counter-glow">1.8M CHF</div>
                    <p class="testimonial-name">C. dejó de fingir pérdidas</p>
                    <h3 class="testimonial-seo-title">Caso de éxito: Ahorro de 1.8M CHF con Holding en Suiza</h3>
                    <p class="testimonial-detail">Empresario español | 2M€ patrimonio<br>
                    Antes: 37% de impuestos + empresas en rojo para sobrevivir<br>
                    Ahora: 15% + Holding suiza + 4 empresas reales</p>
                    <p class="testimonial-quote">"Llevaba años mostrando pérdidas porque tenía miedo de Hacienda.<br>
                    Ale me montó una Holding en Suiza.<br>
                    Ahora no finjo.<br>
                    Gano dinero de verdad.<br>
                    Y lo reinvierto en comprar empresas.<br>
                    En 2 años compraré 2 más.<br>
                    Dejé de esconderme.<br>
                    Empecé a crecer."</p>
                </div>

                <div class="testimonial-card animate-on-scroll zoom-in stagger-2 glow-on-appear shine-effect shadow-grow">
                    <div class="testimonial-result counter-animate counter-glow">200K CHF</div>
                    <p class="testimonial-name">A. vivía en Suiza pagando de más</p>
                    <h3 class="testimonial-seo-title">Cambió de cantón en Suiza y ahora ahorra 40.000 CHF cada año</h3>
                    <p class="testimonial-detail">Residente suiza | 3M CHF patrimonio<br>
                    Antes: 50.000 CHF/año en Vaud<br>
                    Ahora: 10.000 CHF/año en otro cantón</p>
                    <p class="testimonial-quote">"Llevaba 4 años en Suiza.<br>
                    Pagando 50.000 al año.<br>
                    Pensando que era normal.<br>
                    Ale me dijo: 'Te puedes cambiar de cantón.'<br>
                    Ahora pago 10.000.<br>
                    Mismo país.<br>
                    Misma vida.<br>
                    40.000 más en mi bolsillo."</p>
                </div>

                <div class="testimonial-card animate-on-scroll zoom-in stagger-3 glow-on-appear shine-effect shadow-grow">
                    <div class="testimonial-result counter-animate counter-glow">1.2M CHF</div>
                    <p class="testimonial-name">La familia M. dejó el miedo atrás</p>
                    <h3 class="testimonial-seo-title">Esta familia latinoamericana ahorra 1.2M CHF al año con su estructura en Suiza</h3>
                    <p class="testimonial-detail">Empresarios latinos | Empresas en 3 países<br>
                    Antes: Inseguridad + impuestos caóticos + sin Europa<br>
                    Ahora: Suiza + hijos seguros + expansión europea</p>
                    <p class="testimonial-quote">"Nuestros hijos tenían guardaespaldas.<br>
                    Pagábamos impuestos sin control.<br>
                    No podíamos crecer a Europa.<br><br>
                    Ahora viven sin miedo.<br>
                    Hablan 4 idiomas.<br>
                    Gestionamos desde Suiza.<br>
                    Expandimos a 5 países europeos.<br><br>
                    Y ahorramos 1.2M al año.<br><br>
                    No es solo dinero.<br>
                    Es dormir tranquilo."</p>
                </div>
            </div>

            <h3 class="section-seo-subtitle">Resultados de Nuestros Clientes con Residencia Fiscal en Suiza</h3>

            <!-- CTA Integrado 1 -->
            <div class="inline-cta animate-on-scroll slide-fade stagger-1">
                <div class="inline-cta-content">
                    <p class="cta-visual-title">¿Cuánto podrías estar ahorrando tú?</p>
                    <p>Si estás pagando más de 100K EUR/año en impuestos y no conoces la fiscalidad en Suiza, probablemente estás dejando dinero sobre la mesa.</p>
                    <p>Cada año que no actúas, ese dinero desaparece. Para siempre.</p>
                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" aria-label="Calcular ahorro fiscal con asesoría en Suiza">Quiero saber cuánto</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services" aria-labelledby="services-heading">
        <div class="container">
            <!-- Bloque SEO Services -->
            <div class="section-seo-block">
                <h2 id="services-heading" class="section-seo-title">Servicios de asesoría fiscal en Suiza para empresarios españoles y latinoamericanos</h2>
                <p class="section-seo-intro">Hay dos tipos de clientes que nos contactan buscando consultoría fiscal en Suiza. Los que ya residen en territorio suizo pero pagan de más (porque nadie les explicó que la tributación suiza varía hasta un 40% según el cantón —Zug, Ginebra o Zúrich tienen diferencias brutales). Y los empresarios españoles hartos de Hacienda que quieren saber si la fiscalidad en Suiza tiene sentido para ellos. Como asesoría fiscal especializada exclusivamente en Suiza, a los primeros les encontramos dónde están dejando dinero. A los segundos les decimos la verdad: si crear una GmbH, Holding o AG no encaja con tu situación, te lo decimos y tan amigos. Las ventajas fiscales de Suiza son reales, pero no son para todos. Puedes ver todos <a href="<?php echo esc_url(home_url('/servicios/')); ?>">nuestros servicios de fiscalidad suiza</a> en detalle.</p>
            </div>

            <p class="section-visual-title animate-on-scroll fade-up">¿Qué necesitas exactamente?</p>
            <p class="animate-on-scroll fade-up stagger-1">Porque no es lo mismo estar ya en Suiza que estar pensando en venir.</p>

            <div class="services-grid">
                <div class="service-column green animate-on-scroll fade-left stagger-2">
                    <p class="service-column-title">Ya estás en Suiza</p>
                    <h3 class="service-seo-title">Fiscalidad suiza para quienes ya residen en Suiza</h3>
                    <p>Miro tu estructura actual y encuentro dónde estás dejando dinero.</p>
                    <p>Casi siempre hay algo.</p>
                    <p>Luego lo arreglamos.</p>
                    <ul>
                        <li>Reviso tu estructura societaria (Holding, GmbH, AG, subsidiarias)</li>
                        <li>Busco fugas en tu tributación suiza que tu gestor no ve</li>
                        <li>Optimizo cómo te pagas a ti mismo (dividendos, salario, forfait)</li>
                        <li>Planifico sucesiones aplicando convenios de doble imposición</li>
                        <li>Analizo si tu cantón actual (Zug, Ginebra, Zúrich) es el óptimo para tu caso</li>
                    </ul>
                </div>

                <div class="service-column red animate-on-scroll fade-right stagger-2">
                    <p class="service-column-title">No estás en Suiza (todavía)</p>
                    <h3 class="service-seo-title">Fiscalidad en Suiza para empresarios que quieren trasladarse a Suiza</h3>
                    <p>Te digo si tiene sentido para tu caso.</p>
                    <p>Cómo hacerlo. Cuánto cuesta. Cuánto vas a ahorrar.</p>
                    <p>Sin rodeos.</p>
                    <ul>
                        <li>Analizo si el sistema fiscal suizo tiene sentido para ti (a veces no lo tiene)</li>
                        <li>Diseño la estructura: GmbH, AG o Holding según tu situación</li>
                        <li>Gestiono permisos y convenios de doble imposición España-Suiza</li>
                        <li>Coordino con tus asesores actuales en España o Latinoamérica</li>
                        <li>Te acompaño en todo el proceso para conseguir el ahorro fiscal en Suiza</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- Swiss Structures -->
    <section class="swiss-structures" aria-labelledby="structures-heading">
        <div class="container">
            <!-- Bloque SEO Structures -->
            <div class="section-seo-block">
                <h2 id="structures-heading" class="section-seo-title">Te explico las estructuras societarias en Suiza para que elijas entre GmbH, Holding y AG</h2>
                <p class="section-seo-intro">Te voy a ahorrar horas de Google. Como asesoría fiscal especializada en fiscalidad suiza, te explico las cuatro estructuras: Holding (si ya tienes varias empresas), GmbH (lo más parecido a una SL española), AG (para estructuras grandes con inversores) y Einzelfirma (autónomo). ¿La diferencia en tributación suiza? Brutal. En Zug pagas un 12%. En Ginebra o Zúrich puede variar significativamente —y eso sin contar el forfait para grandes patrimonios. La fiscalidad en Suiza para empresarios hispanohablantes requiere elegir bien desde el principio. Esa diferencia puede ser 200.000€ al año de ahorro fiscal.</p>
            </div>

            <p class="section-visual-title animate-on-scroll fade-up">Las herramientas (sin el rollo técnico)</p>
            <p class="animate-on-scroll fade-up stagger-1">Hay varias formas de estructurarte en Suiza. Esto es lo que necesitas saber de cada una. El resto te lo explico cuando hablemos.</p>

            <h3 class="section-seo-subtitle">Ventajas fiscales de cada estructura societaria en Suiza</h3>

            <div class="structures-content">
                <div class="structures-main-grid">
                    <div class="structures-grid">
                        <div class="structure-card animate-on-scroll slide-fade stagger-1">
                            <p class="structure-card-title">Holding Suiza</p>
                            <p class="structure-card-subtitle">Para quienes tienen varias empresas</p>
                            <h4 class="structure-seo-title">Con una Holding en Suiza el 95% de tus dividendos quedan exentos</h4>
                            <p>El 95% de los dividendos que recibes de tus empresas NO tributan. Así funciona la fiscalidad suiza para holdings. Sí, has leído bien.</p>
                            <p><strong>Ideal si:</strong> Tienes varias sociedades y necesitas asesoría fiscal que optimice flujos entre países.</p>
                        </div>

                        <div class="structure-card animate-on-scroll slide-fade stagger-2">
                            <p class="structure-card-title">GMBH</p>
                            <p class="structure-card-subtitle">La más común para empezar</p>
                            <h4 class="structure-seo-title">La GmbH suiza te permite tributar entre el 12% y el 14%</h4>
                            <p>Como una SL española, pero con <a href="<?php echo esc_url(home_url('/blog-fiscalidad-impuestos-suiza/')); ?>">fiscalidad suiza</a> del 12-14%. Capital mínimo: 20.000 CHF. La estructura más elegida por empresarios españoles y latinoamericanos.</p>
                            <p><strong>Ideal si:</strong> Eres empresario hispanohablante con pyme o quieres emprender en Suiza.</p>
                        </div>

                        <div class="structure-card animate-on-scroll slide-fade stagger-3">
                            <p class="structure-card-title">AG</p>
                            <p class="structure-card-subtitle">Para estructuras grandes</p>
                            <h4 class="structure-seo-title">La AG suiza es ideal si buscas inversores y ventajas fiscales</h4>
                            <p>Como una SA española. Facilita meter inversores. Capital mínimo: 100.000 CHF.</p>
                            <p><strong>Ideal si:</strong> Facturas mucho o planeas crecer con socios.</p>
                        </div>

                        <div class="structure-card animate-on-scroll slide-fade stagger-4">
                            <p class="structure-card-title">Einzelfirma</p>
                            <p class="structure-card-subtitle">Autónomo en Suiza</p>
                            <h4 class="structure-seo-title">La Einzelfirma te permite ser autónomo en Suiza con un sistema fiscal simplificado</h4>
                            <p>Sin capital mínimo. Simple. Tributas como persona física bajo el sistema fiscal suizo. Tu asesoría fiscal te ayuda con la declaración.</p>
                            <p><strong>Ideal si:</strong> Eres freelance hispanohablante o estás empezando a emprender en Suiza.</p>
                        </div>
                    </div>

                    <!-- Grid 2x2 de Cantones -->
                    <p class="section-visual-title">¿Dónde? Depende de lo que busques.</p>
                    <h3 class="section-seo-subtitle">Así varía la fiscalidad suiza entre Zug, Ginebra y Zúrich</h3>
                    <div class="cantons-grid">
                <!-- Ginebra -->
                <div class="canton-card animate-on-scroll slide-fade stagger-1">
                    <img class="canton-flag-img" src="<?php echo home_url(''); ?>/wp-content/uploads/2026/01/Canton-Ginebra-grandes-fortunas-impuestos-en-Suiza.webp" alt="Cantón de Ginebra" width="80" height="80" loading="lazy">
                    <p class="canton-card-title">Genève</p>
                    <p class="canton-card-subtitle">El internacional</p>
                    <h4 class="canton-seo-title">En Ginebra la fiscalidad suiza beneficia especialmente a patrimonios internacionales</h4>
                    <p>Hub diplomático. Francófono. Prestigio. El cantón preferido para grandes patrimonios y empresarios hispanohablantes con negocios globales. Nuestra asesoría fiscal analiza si encajas.</p>
                </div>

                <!-- Zug -->
                <div class="canton-card animate-on-scroll slide-fade stagger-2">
                    <img class="canton-flag-img" src="<?php echo home_url(''); ?>/wp-content/uploads/2026/01/Canton-Zug-impuestos-bajos-y-criptomonedas.webp" alt="Cantón de Zug" width="80" height="80" loading="lazy">
                    <p class="canton-card-title">Zug</p>
                    <p class="canton-card-subtitle">El que todos conocen</p>
                    <h4 class="canton-seo-title">Zug ofrece una tributación suiza del 12% y es el famoso Crypto Valley</h4>
                    <p>12% de tributación. Crypto Valley. El más conocido por empresarios españoles, pero no siempre el mejor para tu caso según nuestra consultoría fiscal.</p>
                </div>

                <!-- Zürich -->
                <div class="canton-card animate-on-scroll slide-fade stagger-3">
                    <img class="canton-flag-img" src="<?php echo home_url(''); ?>/wp-content/uploads/2026/01/Kanton-zurich-emprendimiento-y-en-la-ciudad-mas-grande-del-pais.webp" alt="Cantón de Zürich" width="80" height="80" loading="lazy">
                    <p class="canton-card-title">Zürich</p>
                    <p class="canton-card-subtitle">El centro financiero</p>
                    <h4 class="canton-seo-title">Zúrich combina ser el centro financiero europeo con una fiscalidad competitiva</h4>
                    <p>Más caro que Zug, pero más servicios y conexiones para empresarios. Si tu negocio necesita presencia internacional, aquí está.</p>
                </div>

                <!-- Basel-Stadt -->
                <div class="canton-card animate-on-scroll slide-fade stagger-4">
                    <img class="canton-flag-img" src="<?php echo home_url(''); ?>/wp-content/uploads/2026/01/Kanton-basel-impuestos-para-las-empresas-farmaceuticas.webp" alt="Cantón de Basel-Stadt" width="80" height="80" loading="lazy">
                    <p class="canton-card-title">Basel</p>
                    <p class="canton-card-subtitle">El farmacéutico</p>
                    <h4 class="canton-seo-title">Basel tiene un sistema fiscal suizo al 13% y es el hub de innovación farmacéutica</h4>
                    <p>13% de tributación suiza. Hub de innovación. Menos conocido por hispanohablantes, pero muy competitivo.</p>
                </div>
            </div>
                </div>

                <div class="switzerland-flag-container">
                    <!-- Bandera de Suiza SVG de alta calidad -->
                    <!-- NO aplicar animate-on-scroll - debe permanecer sticky puro -->
                    <svg class="switzerland-flag-svg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="swiss-flag-title">
                        <title id="swiss-flag-title">Suiza: Residencia Fiscal con Impuestos del 12% para Empresarios</title>
                        <!-- Fondo rojo oficial de Suiza (#DA291C) -->
                        <rect width="400" height="400" fill="#DA291C" rx="0"/>

                        <!-- Cruz blanca suiza con proporciones oficiales perfectas -->
                        <!-- Proporciones: brazos de 7:6 (largo:ancho), grosor 1/5 del total -->
                        <!-- Grosor de brazo: 400 * 1/5 = 80px -->
                        <!-- Largo de brazo: 80 * 7/6 = 93.33px desde el centro -->

                        <!-- Barra horizontal de la cruz -->
                        <rect x="73.33" y="160" width="253.34" height="80" fill="#FFFFFF"/>

                        <!-- Barra vertical de la cruz -->
                        <rect x="160" y="73.33" width="80" height="253.34" fill="#FFFFFF"/>
                    </svg>
                </div>
            </div>

            <div class="structures-bottom-text animate-on-scroll fade-up">
                <p><strong>Dato real:</strong></p>
                <p>Un empresario que factura 1M EUR/año puede ahorrar entre 200.000 y 350.000 EUR anuales aprovechando la fiscalidad en Suiza y relocalizando correctamente.</p>
                <p>No necesitas ser millonario.</p>
                <p>Necesitas entender cómo funciona el sistema.</p>
                <p>Y alguien que te lo explique sin venderte humo.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section with Accessibility -->
    <section class="faq" aria-labelledby="faq-heading">
        <div class="container">
            <h2 id="faq-heading" class="animate-on-scroll fade-up">Preguntas frecuentes sobre fiscalidad suiza para empresarios</h2>

            <div class="faq-list animate-on-scroll fade-up stagger-1" role="list">
                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1" id="faq-question-1">
                        ¿Esto es legal?
                    </button>
                    <div class="faq-answer" id="faq-answer-1" role="region" aria-labelledby="faq-question-1" hidden>
                        <p>100%. No hago trucos. No hago ingeniería fiscal agresiva. Hago optimización dentro del marco legal suizo. Puedes ver <a href="<?php echo esc_url(home_url('/servicios/')); ?>">cómo trabajamos</a>.</p>
                        <p>Si quieres algo ilegal, no soy tu persona. Hay otros que hacen eso. Yo no.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2" id="faq-question-2">
                        ¿Cuánto cuesta la primera reunión?
                    </button>
                    <div class="faq-answer" id="faq-answer-2" role="region" aria-labelledby="faq-question-2" hidden>
                        <p>230€ la hora.</p>
                        <p>Si decides seguir adelante, ese coste se descuenta del proyecto. Si no, habrás invertido 230€ en entender tu situación fiscal real.</p>
                        <p>Probablemente la mejor inversión que hagas este año.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3" id="faq-question-3">
                        ¿Necesito mudarme a Suiza?
                    </button>
                    <div class="faq-answer" id="faq-answer-3" role="region" aria-labelledby="faq-question-3" hidden>
                        <p>Depende.</p>
                        <p>Hay estructuras que no requieren residencia. Otras sí. Lo vemos en la primera reunión.</p>
                        <p>No te voy a decir que te mudes si no tiene sentido para ti.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4" id="faq-question-4">
                        ¿Por qué debería confiar en ti?
                    </button>
                    <div class="faq-answer" id="faq-answer-4" role="region" aria-labelledby="faq-question-4" hidden>
                        <p>No tienes que hacerlo. Confía en los números.</p>
                        <p>4 años. Más de 500 clientes protegidos en Suiza. Cero problemas legales.</p>
                        <p>Si eso no te basta, no pasa nada. Hay muchos asesores fiscales en el mundo.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-5" id="faq-question-5">
                        ¿Y si al final no me conviene?
                    </button>
                    <div class="faq-answer" id="faq-answer-5" role="region" aria-labelledby="faq-question-5" hidden>
                        <p>Pues no lo hacemos.</p>
                        <p>No voy a convencerte de algo que no te beneficia. Mi negocio se basa en clientes satisfechos que me recomiendan, no en vender humo.</p>
                        <p>Si después de analizar tu caso veo que no tiene sentido, te lo digo. Y tan amigos.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-6" id="faq-question-6">
                        ¿Cuánto tarda todo el proceso?
                    </button>
                    <div class="faq-answer" id="faq-answer-6" role="region" aria-labelledby="faq-question-6" hidden>
                        <p>Depende de la complejidad.</p>
                        <p>Una estructura simple: 6-8 semanas.</p>
                        <p>Una relocalización completa con residencia: 3-6 meses.</p>
                        <p>Te doy un timeline realista en la primera reunión. No prometo milagros.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-7" id="faq-question-7">
                        ¿Eres arrogante?
                    </button>
                    <div class="faq-answer" id="faq-answer-7" role="region" aria-labelledby="faq-question-7" hidden>
                        <p>Probablemente.</p>
                        <p>Pero también soy buena en lo que hago. Y prefiero ser honesta a ser simpática.</p>
                        <p>Si buscas alguien que te diga que sí a todo, no soy yo. Si buscas alguien que te diga la verdad aunque no te guste, hablamos.</p>
                    </div>
                </article>

                <!-- Preguntas SEO adicionales -->
                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-8" id="faq-question-8">
                        ¿Cuánto es el impuesto de sociedades en Suiza para una GmbH?
                    </button>
                    <div class="faq-answer" id="faq-answer-8" role="region" aria-labelledby="faq-question-8" hidden>
                        <p>Depende de dónde te pongas. El impuesto de sociedades en Suiza oscila entre el 11% y el 21%. ¿La parte federal? Fija: 8,5% sobre beneficio neto. ¿La cantonal? Ahí está el juego. En Zug pagas alrededor del 12% total. En Ginebra o Vaud te vas al 18-21%.</p>
                        <p>Para que te hagas una idea: un cliente que facturaba 800.000€ en España pagaba 200.000€ en impuestos (sociedades + dividendos). En Zug paga 96.000€. La diferencia no es "significativa". Es brutal.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-9" id="faq-question-9">
                        ¿Qué es una Holding Suiza y cómo optimiza la doble imposición?
                    </button>
                    <div class="faq-answer" id="faq-answer-9" role="region" aria-labelledby="faq-question-9" hidden>
                        <p>Una sociedad que posee otras empresas y optimiza el convenio de doble imposición Suiza-España. ¿Por qué mola? Porque el 95% de los dividendos que recibe de sus filiales NO tributan. Se llama "participation exemption" y es completamente legal.</p>
                        <p>Un empresario me vino con 3 sociedades en España, Francia y Portugal. Como asesora fiscal en Suiza, le montamos una Holding que las agrupa. Ahora los beneficios fluyen sin doble imposición. Antes pagaba impuestos cada vez que movía dinero. Ahora reinvierte desde su residencia fiscal Suiza.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-10" id="faq-question-10">
                        ¿Puedo crear una GmbH Suiza sin tener residencia fiscal allí?
                    </button>
                    <div class="faq-answer" id="faq-answer-10" role="region" aria-labelledby="faq-question-10" hidden>
                        <p>Poder, puedes crear una GmbH Suiza sin residencia fiscal. Pero ojo: necesitas un administrador residente y sustancia real. Oficina física, empleados si el negocio lo requiere, decisiones que se tomen desde Suiza. Las estructuras vacías no aplican el convenio de doble imposición Suiza-España correctamente.</p>
                        <p>¿Por qué? Porque Hacienda no es tonta. Si montas una sociedad vacía, la AEAT te la tumba. Como asesora fiscal especializada, lo hablamos en la primera reunión para ver si necesitas residencia fiscal Suiza o puedes operar sin ella.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-11" id="faq-question-11">
                        ¿Cuánto es el IVA en Suiza para mi GmbH o Holding?
                    </button>
                    <div class="faq-answer" id="faq-answer-11" role="region" aria-labelledby="faq-question-11" hidden>
                        <p>8,1%. El más bajo de Europa occidental. En España pagas 21%. Haz las cuentas.</p>
                        <p>Hay tipos reducidos: 2,6% para alimentación básica, 3,8% para hoteles. Si tienes un e-commerce o vendes servicios digitales, esa diferencia del 13% en IVA puede ser tu margen de beneficio. Un cliente de SaaS me lo dijo claro: "Ese 13% que me ahorro es lo que antes era mi beneficio neto".</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-12" id="faq-question-12">
                        ¿Cuáles son los requisitos para obtener residencia fiscal en Suiza desde España?
                    </button>
                    <div class="faq-answer" id="faq-answer-12" role="region" aria-labelledby="faq-question-12" hidden>
                        <p>Para obtener residencia fiscal en Suiza y aplicar el convenio de doble imposición Suiza-España, Hacienda mira tres cosas. Una: que no pases más de 183 días al año en España. Dos: que tu centro de intereses económicos esté en Suiza (tu GmbH Suiza o Holding opera desde allí). Tres: que tu familia directa no viva en España.</p>
                        <p>¿Tienes más de 4 millones en activos? Entonces viene el exit tax. Como asesora fiscal especializada en residencia fiscal Suiza, te ayudo a planificarlo antes de que muevas un euro.</p>
                    </div>
                </article>

                <article class="faq-item" role="listitem">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-13" id="faq-question-13">
                        ¿Cómo hace mi asesor fiscal la declaración de la renta en Suiza?
                    </button>
                    <div class="faq-answer" id="faq-answer-13" role="region" aria-labelledby="faq-question-13" hidden>
                        <p>Aquí viene lo interesante. La declaración de la renta en Suiza se hace a tres niveles: federal, cantonal y municipal. Como tu asesora fiscal en Suiza, gestiono los tres. Cada cantón tiene sus deducciones, y si tienes residencia fiscal Suiza en el cantón equivocado, pagas de más.</p>
                        <p>Una cosa que sorprende: en Suiza el patrimonio tributa (entre 0,1% y 1%), pero algunos cantones ofrecen forfait fiscal Suiza que lo compensa. Un cliente con residencia fiscal en el cantón correcto pasó del 45% de IRPF en España al 25%. La diferencia: 200.000€ al año.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta" id="cta" aria-labelledby="cta-heading">
        <div class="container">

            <!-- Bloque principal -->
            <div class="cta-main-block">

                <!-- Columna izquierda: Foto -->
                <div class="cta-photo-column">
                    <div class="cta-photo-circle">
                        <img src="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp"
                             srcset="<?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp 200w,
                                     <?php echo home_url(''); ?>/wp-content/uploads/2026/02/Alejandra-Ortiz-Experta-en-Fiscalidad-Suiza-Fundadora-GNS-Advisory.webp 400w"
                             sizes="(max-width: 768px) 150px, 200px"
                             alt="Alejandra Ortiz" width="200" height="200" loading="lazy">
                    </div>
                    <div class="cta-photo-name">Ale</div>
                    <div class="cta-photo-role">Fundadora GNS Advisory</div>
                </div>

                <!-- Columna derecha: Contenido -->
                <div class="cta-content-column">

                    <p class="cta-title">Mira, esto es simple.</p>
                    <h2 id="cta-heading" class="cta-seo-title">Consulta de fiscalidad en Suiza: 230€ la primera hora</h2>

                    <div class="cta-text">
                        <p>Si estás pagando más de 100.000€ al año en impuestos y no has hablado con alguien que entienda Suiza, estás perdiendo dinero.</p>

                        <p class="cta-emphasis">Cada mes.</p>
                        <p class="cta-emphasis">Cada año.</p>
                        <p class="cta-emphasis">Para siempre.</p>

                        <p>Yo puedo decirte en una hora si tiene sentido hacer algo o si ya lo tienes todo bien.</p>
                    </div>

                    <div class="cta-price-block">
                        <span class="cta-price counter-animate counter-glow">230€</span>
                        <span class="cta-price-detail">1 hora de consulta</span>
                    </div>

                    <div class="cta-conditions">
                        <p>Si seguimos trabajando juntos, se descuenta del proyecto.</p>
                        <p>Si no, habrás invertido en claridad.</p>
                    </div>

                    <div class="cta-honesty">
                        <p>No te voy a perseguir.</p>
                        <p>No te voy a mandar 47 emails de seguimiento.</p>
                        <p>Si quieres hablar, aquí estoy.</p>
                        <p>Si no, también está bien.</p>
                    </div>

                    <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary cta-button" aria-label="Reservar consulta fiscal de 230€ con GNS Advisory">
                        Quiero dejar de regalar mi dinero
                    </a>

                    <p class="cta-slots">Atiendo máximo 4 casos nuevos al mes.</p>

                </div>

            </div>

            <!-- Bloque secundario: Newsletter -->
            <div class="cta-secondary-block">

                <div class="cta-newsletter">
                    <p class="cta-newsletter-intro">Pd: Si todavía no estás listo para hablar, puedes seguirme por email.</p>
                    <p class="cta-newsletter-desc">Mando casos reales cada semana. Sin bla bla. Solo números y estrategias que puedes copiar.</p>

                    <div class="cta-newsletter-form">
                        <?php echo do_shortcode('[sibwp_form id=1]'); ?>
                    </div>

                    <p class="cta-newsletter-proof">Ya somos más de 2.000. Si no te aporta, te das de baja en un clic.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- Sección SEO Informativa -->
    <section class="seo-info-section" aria-labelledby="seo-info-heading">
        <div class="container">

            <div class="seo-info-header">
                <h2 id="seo-info-heading">Guía completa de fiscalidad en Suiza para empresarios hispanohablantes</h2>
                <p>Llevo 4 años con GNS Advisory ayudando a empresarios españoles y latinoamericanos a entender la fiscalidad suiza. Esto es lo que me hubiera gustado que alguien me explicara cuando empecé: cómo funciona el sistema fiscal suizo, qué ventajas fiscales ofrece Suiza realmente, y cuándo tiene sentido una <a href="<?php echo esc_url(home_url('/gmbh-suiza/')); ?>">GmbH</a> vs una <a href="<?php echo esc_url(home_url('/holding-suiza/')); ?>">Holding</a>. Si quieres profundizar, visita nuestro <a href="<?php echo esc_url(home_url('/blog-fiscalidad-impuestos-suiza/')); ?>">blog sobre fiscalidad en Suiza</a>.</p>
            </div>

            <div class="seo-info-content">

                <div class="seo-info-block">
                    <h3>Esto es lo que tu asesoría fiscal debe explicarte sobre el sistema fiscal suizo</h3>
                    <p>La primera vez que vi cómo funcionaba la fiscalidad en Suiza, pensé que era un error. ¿26 cantones compitiendo entre sí por atraer empresarios? ¿Cada uno con su propia tributación suiza? Parecía caos. Pero como asesoría fiscal especializada, te digo que es justo lo contrario.</p>
                    <p>El sistema fiscal suizo funciona a tres niveles: federal, cantonal y municipal. La parte federal es fija para todos. La cantonal y municipal varían según dónde te pongas. Eso significa que una empresa puede pagar el 11% en un cantón como Zug... o el 21% en otro. Misma actividad, mismo beneficio, 10 puntos de diferencia en la fiscalidad suiza.</p>
                    <p>¿Es Suiza un paraíso fiscal? No. Intercambia información con la UE, cumple con la OCDE, no acepta dinero sucio. Pero entiende algo que España no quiere entender: que las ventajas fiscales de Suiza atraen talento, empresas y capital. Y que eso beneficia a todos.</p>
                </div>

                <div class="seo-info-block">
                    <h3>Comparativa de fiscalidad suiza entre Zug, Ginebra y Zúrich</h3>
                    <p>Me preguntan mucho: "¿Cuál es el mejor cantón para la fiscalidad en Suiza?" La respuesta corta: depende. La respuesta larga es esta:</p>
                    <ul class="seo-info-list">
                        <li><strong>Zug:</strong> El famoso. Tributación suiza del 12%. Crypto Valley. Muchos empresarios españoles con GmbH y Holdings. Pero está saturado. Como asesoría fiscal, no lo recomendamos a todos.</li>
                        <li><strong>Schwyz:</strong> El vecino discreto de Zug. Tipos parecidos pero menos masificado. Buenos números para personas físicas. Un cliente empresario se mudó de Zug a Schwyz y bajó su IRPF 8 puntos.</li>
                        <li><strong>Nidwalden y Obwalden:</strong> Los cantones que nadie conoce pero que tienen las mejores cifras. Menos burocracia, trato más personal, fiscalidad suiza muy competitiva.</li>
                        <li><strong>Ginebra:</strong> Más caro (14-15% para empresas, hasta 45% para personas). Pero ofrece el forfait para grandes patrimonios. El convenio de doble imposición se aplica igual, pero el ecosistema internacional no tiene rival para empresarios hispanohablantes.</li>
                        <li><strong>Zúrich:</strong> El centro financiero. Tipos medios-altos, pero acceso directo a todo el sistema bancario suizo. Si necesitas presencia corporativa seria, aquí.</li>
                        <li><strong>Vaud:</strong> Puede llegar al 22% para empresas. Caro. Pero tiene ventajas fiscales para grandes fortunas que no trabajan activamente en Suiza.</li>
                    </ul>
                    <p>La elección del cantón no es solo un número. ¿Hablas francés o alemán? ¿Tienes hijos que escolarizar? ¿Tu negocio necesita estar cerca de un aeropuerto internacional? Todo eso importa. Por eso nuestra consultoría fiscal lo analiza caso por caso, no damos una respuesta genérica.</p>
                </div>

                <div class="seo-info-block">
                    <h3>Los números reales de tributación suiza para tu GmbH, Holding o AG</h3>
                    <p>Cuando decides <a href="<?php echo esc_url(home_url('/crear-empresa-suiza/')); ?>">crear una empresa en Suiza</a>, esto es lo que pagas según el sistema fiscal suizo comparado con el sistema español:</p>
                    
                    <div class="tabla-comparativa-wrapper animate-on-scroll fade-up">
                        <table class="tabla-comparativa">
                            <thead>
                                <tr>
                                    <th>Concepto Fiscal</th>
                                    <th>España (Madrid/BCN)</th>
                                    <th>Suiza (Zug/Nidwalden)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Impuesto de Sociedades</td>
                                    <td>25%</td>
                                    <td><strong>11.8% - 12%</strong></td>
                                </tr>
                                <tr>
                                    <td>IVA (Tipo General)</td>
                                    <td>21%</td>
                                    <td><strong>8.1%</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <ul class="seo-info-list">
                        <li><strong>Impuesto federal:</strong> 8,5% fijo sobre beneficio neto. No cambia, da igual dónde estés.</li>
                        <li><strong>Impuesto cantonal + municipal:</strong> Aquí está el juego de la fiscalidad suiza. Desde el 3% adicional en Zug hasta el 13% en Vaud. <a href="<?php echo esc_url(home_url('/fiscalidad-cantones-suiza/')); ?>">Ver comparativa de cantones</a>.</li>
                        <li><strong>IVA en Suiza:</strong> 8,1%. El más bajo de Europa occidental. <a href="<?php echo esc_url(home_url('/iva-suiza/')); ?>">Gestión de IVA para empresas</a>.</li>
                    </ul>
                    <p>Total para una empresa bien ubicada: entre 11% y 15%. ¿Y en España? 25% de sociedades. Más 19-26% cuando sacas dividendos. Haz las cuentas del ahorro fiscal en Suiza.</p>
                    <p>Un empresario español que factura 1 millón de euros y tiene 400.000€ de beneficio pagaba en España unos 160.000€ (entre sociedades y dividendos). En Suiza paga 60.000€. La diferencia de 100.000€ al año la reinvierte en su negocio. En 3 años ha comprado dos empresas más.</p>
                </div>

                <div class="seo-info-block">
                    <h3>Requisitos para crear tu GmbH, Holding o AG si eres empresario hispanohablante</h3>
                    <p>¿Se puede emprender en Suiza sin ser suizo? Sí. ¿Es fácil? Depende de tu situación.</p>
                    <ul class="seo-info-list">
                        <li><strong>Si no tienes residencia:</strong> Puedes crear una sociedad, pero necesitas un administrador que viva en Suiza. Y sustancia real: oficina física (no un buzón), empleados si el negocio lo requiere, decisiones que se tomen desde Suiza. Las estructuras vacías no aprovechan la fiscalidad suiza.</li>
                        <li><strong>Si tienes residencia:</strong> Mucho más fácil. Necesitas permiso de trabajo (B o C). Los ciudadanos de la UE y empresarios españoles tenemos ventaja por los acuerdos bilaterales.</li>
                        <li><strong>Capital mínimo:</strong> Una GmbH pide 20.000 CHF. Una AG pide 100.000 CHF (con 50.000 desembolsados). La GmbH es lo más elegido por empresarios hispanohablantes.</li>
                        <li><strong>Tiempo de registro:</strong> Entre 2 y 4 semanas normalmente. El sistema fiscal suizo es eficiente con el papeleo.</li>
                    </ul>
                    <p>Una cosa que le decimos a todos desde nuestra asesoría fiscal: si tu plan es montar una estructura vacía para pagar menos impuestos, no funciona. Los convenios de doble imposición requieren sustancia real. La AEAT tiene intercambio de información con Suiza. Si no tienes residencia fiscal real, no pierdas el tiempo. Mira nuestros <a href="<?php echo esc_url(home_url('/servicios/')); ?>">servicios de fiscalidad en Suiza</a> para entender el proceso.</p>
                </div>

                <div class="seo-info-block">
                    <h3>Si eres español, así te afecta el convenio de doble imposición y el exit tax</h3>
                    <p>Esta es la parte que más miedo da a los empresarios españoles. Y con razón. Hacienda no te deja ir tan fácilmente. Los requisitos para acceder a la fiscalidad en Suiza desde España y realizar un <a href="<?php echo esc_url(home_url('/cambio-residencia-fiscal-suiza/')); ?>">cambio de residencia fiscal</a> correcto son estos:</p>
                    <ul class="seo-info-list">
                        <li><strong>La regla de los 183 días:</strong> No puedes pasar más de 183 días al año en España. Suena simple, pero Hacienda cuenta bien. Viajes de trabajo, escalas, todo suma.</li>
                        <li><strong>Centro de intereses económicos:</strong> Si tu negocio principal sigue operando desde España, da igual que vivas en Zúrich. Hacienda puede argumentar que tu centro económico está en España.</li>
                        <li><strong>Familia:</strong> Si tu cónyuge e hijos menores viven en España, Hacienda presume que tú también eres residente. Hay que planificar esto bien con tu asesoría fiscal.</li>
                    </ul>
                    <p>¿Y si tienes pasta? Ahí viene el exit tax. Si tienes más de 4 millones de euros en activos (acciones, participaciones, inmuebles fuera de la vivienda habitual), puedes tener que tributar por plusvalías que ni siquiera has cobrado. Es complicado, pero se puede planificar con tiempo.</p>
                    <p>España y Suiza tienen convenio de doble imposición, así que no pagas dos veces por los mismos ingresos. Pero hay que aplicarlo bien. Un empresario español vino a GNS Advisory después de mudarse y tuvo problemas porque su anterior asesor no le explicó la transición. Acabó pagando en los dos países. Con nuestra consultoría fiscal especializada en fiscalidad suiza para hispanohablantes, eso no te va a pasar.</p>
                </div>

                <div class="seo-info-block">
                    <h3>Por qué GNS Advisory se especializa exclusivamente en asesoría fiscal para Suiza</h3>
                    <p>No voy a decirte que somos los mejores. Eso lo decides tú. Lo que sí puedo decirte es esto:</p>
                    <p>Llevamos 4 años como asesoría fiscal especializada exclusivamente en fiscalidad suiza para empresarios hispanohablantes —españoles y latinoamericanos. Más de 500 estructuras implementadas entre GmbH, Holdings y AG. Cero problemas con convenios de doble imposición. Trabajamos con abogados suizos y fiduciarias que conocen el sistema fiscal suizo desde dentro. <a href="<?php echo esc_url(home_url('/quien-es-gns-advisory/')); ?>">Descubre quiénes somos</a>.</p>
                    <p>No somos una gestoría que "también hace Suiza". Somos tu consultoría fiscal especializada en fiscalidad en Suiza, tributación suiza y ahorro fiscal para empresarios. Por eso conocemos matices que otros no ven en cantones como Zug, Ginebra o Zúrich.</p>
                    <p>¿Tu caso tiene sentido para aprovechar las ventajas fiscales de Suiza? Te lo decimos. ¿No lo tiene? También. No vamos a venderte una estructura que no te beneficia. Nuestro negocio se basa en los más de 500 clientes satisfechos que nos recomiendan.</p>
                </div>

            </div>

        </div>
    </section>

</main>

<!-- Schema.org JSON-LD para SEO -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "WebPage",
            "@id": "<?php echo esc_url(home_url('/')); ?>#webpage",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "name": "Fiscalidad en Suiza para Empresarios | GNS Advisory - Asesoría Fiscal Especializada",
            "description": "Asesoría fiscal especializada exclusivamente en fiscalidad en Suiza para empresarios españoles y latinoamericanos. Más de 500 estructuras implementadas. GmbH, Holding, AG.",
            "isPartOf": {
                "@id": "<?php echo esc_url(home_url('/')); ?>#website"
            },
            "about": {
                "@id": "<?php echo esc_url(home_url('/')); ?>#organization"
            },
            "primaryImageOfPage": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>"
            },
            "inLanguage": "es"
        },
        {
            "@type": "WebSite",
            "@id": "<?php echo esc_url(home_url('/')); ?>#website",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "name": "GNS Advisory",
            "description": "Asesoría fiscal especializada en fiscalidad en Suiza para empresarios hispanohablantes",
            "publisher": {
                "@id": "<?php echo esc_url(home_url('/')); ?>#organization"
            },
            "inLanguage": "es"
        },
        {
            "@type": "Organization",
            "@id": "<?php echo esc_url(home_url('/')); ?>#organization",
            "name": "GNS Advisory",
            "alternateName": "GNS Group Advisory",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>",
                "width": 180,
                "height": 37
            },
            "description": "Asesoría fiscal especializada exclusivamente en fiscalidad en Suiza para empresarios españoles y latinoamericanos. Más de 4 años de experiencia y 500+ estructuras implementadas.",
            "foundingDate": "2022",
            "numberOfEmployees": {
                "@type": "QuantitativeValue",
                "value": "4"
            },
            "slogan": "Fiscalidad en Suiza para empresarios que quieren pagar menos impuestos",
            "knowsAbout": [
                "Fiscalidad en Suiza",
                "Asesoría fiscal Suiza",
                "GmbH Suiza",
                "Holding Suiza",
                "AG Suiza",
                "Residencia fiscal Suiza",
                "Convenio doble imposición España-Suiza",
                "Impuestos en Suiza",
                "Tributación suiza"
            ],
            "areaServed": [
                {
                    "@type": "Country",
                    "name": "España"
                },
                {
                    "@type": "Country",
                    "name": "Suiza"
                },
                {
                    "@type": "Country",
                    "name": "México"
                },
                {
                    "@type": "Country",
                    "name": "Argentina"
                },
                {
                    "@type": "Country",
                    "name": "Colombia"
                }
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer service",
                "email": "a.ortiz@gnsadvisory.com",
                "availableLanguage": ["Spanish", "English", "French", "German"]
            },
            "sameAs": [
                "https://www.linkedin.com/in/aortizher/"
            ]
        },
        {
            "@type": "LocalBusiness",
            "@id": "<?php echo esc_url(home_url('/')); ?>#localbusiness",
            "name": "GNS Advisory",
            "description": "Asesoría fiscal especializada en fiscalidad en Suiza para empresarios hispanohablantes",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "logo": "<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>",
            "image": "<?php echo esc_url(home_url('/wp-content/uploads/2026/01/gns-advisory-asesoria-fiscal-y-legal-en-suiza-paga-menos-impuestos.webp')); ?>",
            "priceRange": "€€€",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "CH",
                "addressLocality": "Suiza"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "47.3769",
                "longitude": "8.5417"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "18:00"
            },
            "founder": {
                "@type": "Person",
                "name": "Alejandra Ortiz",
                "jobTitle": "Fundadora y Especialista en Fiscalidad en Suiza",
                "url": "https://www.linkedin.com/in/aortizher/"
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "<?php echo esc_url(home_url('/')); ?>#breadcrumb",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Inicio",
                    "item": "<?php echo esc_url(home_url('/')); ?>"
                }
            ]
        },
        {
            "@type": "FAQPage",
            "@id": "<?php echo esc_url(home_url('/')); ?>#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "¿Esto es legal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "100%. No hago trucos. No hago ingeniería fiscal agresiva. Hago optimización dentro del marco legal suizo. Si quieres algo ilegal, no soy tu persona. Hay otros que hacen eso. Yo no."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuánto cuesta la primera reunión?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "230€ la hora. Si decides seguir adelante, ese coste se descuenta del proyecto. Si no, habrás invertido 230€ en entender tu situación fiscal real. Probablemente la mejor inversión que hagas este año."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Necesito mudarme a Suiza?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Depende. Hay estructuras que no requieren residencia. Otras sí. Lo vemos en la primera reunión. No te voy a decir que te mudes si no tiene sentido para ti."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Por qué debería confiar en ti?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No tienes que hacerlo. Confía en los números. 4 años. Más de 500 clientes protegidos en Suiza. Cero problemas legales. Si eso no te basta, no pasa nada. Hay muchos asesores fiscales en el mundo."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Y si al final no me conviene?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Pues no lo hacemos. No voy a convencerte de algo que no te beneficia. Mi negocio se basa en clientes satisfechos que me recomiendan, no en vender humo. Si después de analizar tu caso veo que no tiene sentido, te lo digo. Y tan amigos."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuánto tarda todo el proceso?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Depende de la complejidad. Una estructura simple: 6-8 semanas. Una relocalización completa con residencia: 3-6 meses. Te doy un timeline realista en la primera reunión. No prometo milagros."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Eres arrogante?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Probablemente. Pero también soy buena en lo que hago. Y prefiero ser honesta a ser simpática. Si buscas alguien que te diga que sí a todo, no soy yo. Si buscas alguien que te diga la verdad aunque no te guste, hablamos."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuánto es el impuesto de sociedades en Suiza para una GmbH?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Depende de dónde te pongas. El impuesto de sociedades en Suiza oscila entre el 11% y el 21%. La parte federal es fija: 8,5% sobre beneficio neto. La cantonal varía. En Zug pagas alrededor del 12% total. En Ginebra o Vaud te vas al 18-21%. Un cliente que facturaba 800.000€ en España pagaba 200.000€ en impuestos. En Zug paga 96.000€."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Qué es una Holding Suiza y cómo optimiza la doble imposición?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Una sociedad que posee otras empresas y optimiza el convenio de doble imposición Suiza-España. El 95% de los dividendos que recibe de sus filiales NO tributan. Se llama 'participation exemption' y es completamente legal. Ideal para empresarios con varias sociedades en diferentes países."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Puedo crear una GmbH Suiza sin tener residencia fiscal allí?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Poder, puedes crear una GmbH Suiza sin residencia fiscal. Pero necesitas un administrador residente y sustancia real: oficina física, empleados si el negocio lo requiere, decisiones que se tomen desde Suiza. Las estructuras vacías no aplican el convenio de doble imposición Suiza-España correctamente."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuánto es el IVA en Suiza para mi GmbH o Holding?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "8,1%. El más bajo de Europa occidental. En España pagas 21%. Hay tipos reducidos: 2,6% para alimentación básica, 3,8% para hoteles. Si tienes un e-commerce o vendes servicios digitales, esa diferencia del 13% en IVA puede ser tu margen de beneficio."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuáles son los requisitos para obtener residencia fiscal en Suiza desde España?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Para obtener residencia fiscal en Suiza, Hacienda española mira tres cosas: que no pases más de 183 días al año en España, que tu centro de intereses económicos esté en Suiza, y que tu familia directa no viva en España. Si tienes más de 4 millones en activos, también hay que planificar el exit tax."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cómo hace mi asesor fiscal la declaración de la renta en Suiza?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "La declaración de la renta en Suiza se hace a tres niveles: federal, cantonal y municipal. Cada cantón tiene sus deducciones, y si tienes residencia fiscal Suiza en el cantón equivocado, pagas de más. En Suiza el patrimonio tributa (entre 0,1% y 1%), pero algunos cantones ofrecen forfait fiscal que lo compensa."
                    }
                }
            ]
        },
        {
            "@type": "Service",
            "@id": "<?php echo esc_url(home_url('/')); ?>#service",
            "serviceType": "Asesoría Fiscal",
            "name": "Consultoría de Fiscalidad en Suiza",
            "description": "Asesoría fiscal especializada en fiscalidad en Suiza para empresarios españoles y latinoamericanos. Creación de GmbH, Holding y AG. Optimización fiscal y residencia en Suiza.",
            "provider": {
                "@id": "<?php echo esc_url(home_url('/')); ?>#organization"
            },
            "areaServed": {
                "@type": "Country",
                "name": "Suiza"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Servicios de Fiscalidad en Suiza",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Consulta inicial de fiscalidad en Suiza",
                            "description": "Primera consulta para analizar tu situación fiscal y determinar si la fiscalidad en Suiza tiene sentido para tu caso"
                        },
                        "price": "230",
                        "priceCurrency": "CHF"
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Creación de GmbH en Suiza",
                            "description": "Constitución de sociedad limitada suiza con fiscalidad del 12-14%"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Creación de Holding en Suiza",
                            "description": "Estructura holding con 95% de dividendos exentos según la fiscalidad suiza"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Residencia fiscal en Suiza",
                            "description": "Gestión completa del cambio de residencia fiscal a Suiza incluyendo convenio de doble imposición"
                        }
                    }
                ]
            }
        }
    ]
}
</script>

<?php get_footer(); ?>
