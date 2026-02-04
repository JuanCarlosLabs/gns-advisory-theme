<?php
/**
 * Blog Template - Layout tipo periódico con categorías y filtros
 * This template is used when a static front page is set
 *
 * @package GNS_Advisory
 */

get_header();

// Definir las 5 categorías principales
$categorias_blog = array(
    'impuestos-suiza' => 'Impuestos en Suiza',
    'crear-empresa-suiza' => 'Crear Empresa en Suiza',
    'residencia-fiscal' => 'Residencia Fiscal',
    'cantones-optimizacion' => 'Cantones y Optimización',
    'casos-estrategias' => 'Casos y Estrategias'
);

// Obtener categoría activa del filtro
$categoria_activa = isset($_GET['categoria']) ? sanitize_text_field($_GET['categoria']) : 'recientes';
?>

<?php // CSS movido a assets/css/blog.css para mejor rendimiento (Core Web Vitals) ?>

<main id="main-content" class="site-main page-blog">

    <!-- Hero Section -->
    <section class="blog-hero">
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
                        <span itemprop="name">Blog sobre fiscalidad e impuestos en Suiza</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </nav>

            <h1 class="animate-on-scroll">Blog sobre fiscalidad e impuestos en Suiza</h1>
            <p class="animate-on-scroll">Artículos, guías y estrategias para empresarios que quieren optimizar su situación fiscal.</p>
        </div>
    </section>

    <!-- Filtros por Categoría -->
    <section class="blog-filters">
        <div class="container">
            <nav class="filter-tags" aria-label="Filtrar por categoría">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                   class="filter-tag <?php echo $categoria_activa === 'recientes' ? 'active' : ''; ?>"
                   data-filter="recientes">
                    Más Recientes
                </a>
                <?php foreach ($categorias_blog as $slug => $nombre) :
                    $cat = get_category_by_slug($slug);
                ?>
                    <a href="<?php echo $cat ? get_category_link($cat->term_id) : '#'; ?>"
                       class="filter-tag <?php echo $categoria_activa === $slug ? 'active' : ''; ?>"
                       data-filter="<?php echo esc_attr($slug); ?>">
                        <?php echo esc_html($nombre); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </section>

    <!-- Layout Periódico -->
    <section class="blog-newspaper">
        <div class="container">
            <div class="newspaper-layout">

                <!-- Contenido Central -->
                <div class="main-content">
                    <?php if (have_posts()) : ?>

                        <?php
                        // Primer post destacado
                        if (have_posts()) : the_post();
                            $categories = get_the_category();
                            $cat_name = $categories ? $categories[0]->name : 'Blog';
                            $cat_slug = $categories ? $categories[0]->slug : '';
                        ?>
                            <article class="featured-article animate-on-scroll" itemscope itemtype="https://schema.org/BlogPosting">
                                <div class="featured-article-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('large', array('loading' => 'eager')); ?>
                                        </a>
                                    <?php else : ?>
                                        <div class="image-placeholder">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
                                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                                <path d="m21 15-5-5L5 21"/>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="featured-article-content">
                                    <div class="featured-article-meta">
                                        <span class="featured-category cat-<?php echo esc_attr($cat_slug); ?>" itemprop="articleSection"><?php echo esc_html($cat_name); ?></span>
                                        <time class="featured-date" datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                                    </div>
                                    <h2 class="title-cat-<?php echo esc_attr($cat_slug); ?>" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p class="featured-excerpt" itemprop="description"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="featured-link">Leer artículo completo</a>
                                </div>
                            </article>
                        <?php endif; ?>

                        <!-- Grid de artículos -->
                        <?php if (have_posts()) : ?>
                            <div class="articles-grid">
                                <?php while (have_posts()) : the_post();
                                    $categories = get_the_category();
                                    $cat_name = $categories ? $categories[0]->name : 'Blog';
                                    $cat_slug = $categories ? $categories[0]->slug : '';
                                ?>
                                    <article class="article-card animate-on-scroll" itemscope itemtype="https://schema.org/BlogPosting">
                                        <div class="article-card-image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('medium_large', array('loading' => 'lazy')); ?>
                                                </a>
                                            <?php else : ?>
                                                <div class="image-placeholder">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
                                                        <circle cx="8.5" cy="8.5" r="1.5"/>
                                                        <path d="m21 15-5-5L5 21"/>
                                                    </svg>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="article-card-content">
                                            <div class="article-card-meta">
                                                <span class="article-category cat-<?php echo esc_attr($cat_slug); ?>"><?php echo esc_html($cat_name); ?></span>
                                                <time class="article-date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j M Y'); ?></time>
                                            </div>
                                            <h3 class="title-cat-<?php echo esc_attr($cat_slug); ?>" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Paginación -->
                        <nav class="blog-pagination" aria-label="Paginación del blog">
                            <?php
                            the_posts_pagination(array(
                                'mid_size'  => 2,
                                'prev_text' => '← Anterior',
                                'next_text' => 'Siguiente →',
                            ));
                            ?>
                        </nav>

                    <?php else : ?>
                        <!-- DEBUG: No hay posts disponibles -->
                        <div class="no-posts" style="display: block !important; visibility: visible !important; opacity: 1 !important;">
                            <h2 style="color: #1a1a1a !important;">📝 No hay artículos publicados aún</h2>
                            <p style="color: #666 !important;">Estamos preparando contenido de valor sobre fiscalidad en Suiza. Vuelve pronto.</p>
                            <p style="margin-top: 1rem; font-size: 0.9rem; color: #999 !important;">
                                <strong>Nota:</strong> Si eres el administrador, publica algunos posts en WordPress Admin → Posts para que aparezcan aquí.
                            </p>
                            <a href="<?php echo admin_url('post-new.php'); ?>" style="display: inline-block; margin-top: 1.5rem; padding: 0.75rem 1.5rem; background: #1a1a1a; color: #fff; border-radius: 8px; text-decoration: none; font-weight: 600;">
                                + Crear primer post
                            </a>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>
    </section>

    <!-- ========================================
         SECCIÓN DE CONTENIDO FIJO - FISCALIDAD EN SUIZA
         ======================================== -->
    <section class="blog-content-section">
        <div class="blog-content-container">

            <header class="blog-content-header">
                <h2>Fiscalidad en Suiza para empresarios que quieren dejar de pagar de más</h2>
                <div class="header-accent"></div>
            </header>

            <div class="blog-content-intro">
                <p>Llevas años trabajando duro. Construyendo tu negocio. Y cada trimestre, cuando llega el momento de los impuestos, sientes ese nudo en el estómago. En España puedes acabar pagando entre el <strong>45% y el 50%</strong> de lo que ganas. En Suiza, ese mismo empresario paga entre el <strong>11% y el 22%</strong> dependiendo del cantón y la estructura que elija.</p>
                <p>No es magia. No es un truco fiscal. Es simplemente otro sistema.</p>
                <p>Este blog existe para explicarte cómo funciona la fiscalidad en Suiza sin rodeos ni lenguaje de abogado. Aquí encontrarás guías prácticas, casos reales y los errores que vemos cada semana en clientes que llegan mal asesorados. Todo pensado para empresarios hispanohablantes que se plantean dar el paso o que ya viven en Suiza y sospechan que están pagando más de lo necesario.</p>
            </div>

            <article class="blog-content-article">
                <h3>Cómo funcionan los impuestos en Suiza y por qué son tan diferentes</h3>
                <p>El sistema fiscal suizo tiene una particularidad que cambia todo. Los impuestos se pagan a tres niveles: federal, cantonal y municipal. Esto significa que dos empresarios con el mismo beneficio pueden pagar cantidades muy distintas simplemente por vivir en cantones diferentes.</p>

                <div class="tax-comparison">
                    <div class="tax-item">
                        <span class="tax-label">IVA en Suiza</span>
                        <span class="tax-value tax-low">8,1%</span>
                        <span class="tax-vs">vs 21% España</span>
                    </div>
                    <div class="tax-item">
                        <span class="tax-label">Impuesto de Sociedades</span>
                        <span class="tax-value tax-low">11-15%</span>
                        <span class="tax-vs">vs 25% España</span>
                    </div>
                    <div class="tax-item">
                        <span class="tax-label">IRPF máximo</span>
                        <span class="tax-value tax-low">~35%</span>
                        <span class="tax-vs">vs 47% España</span>
                    </div>
                </div>

                <p>Pero ojo. Estos números suenan muy bien hasta que te das cuenta de que elegir mal el cantón o la estructura societaria puede costarte decenas de miles de francos al año. Hace poco revisamos el caso de un cliente que llevaba tres años en Vaud pagando <strong>50.000 CHF</strong> anuales. Le cambiamos de cantón manteniendo exactamente la misma vida y el mismo negocio. Ahora paga <strong>10.000 CHF</strong>. Cuarenta mil francos de diferencia cada año por no tener el asesoramiento correcto.</p>
            </article>

            <article class="blog-content-article">
                <h3>Crear una empresa en Suiza sin perderte en el papeleo</h3>
                <p>Si estás pensando en montar tu empresa aquí, tienes varias opciones y cada una sirve para un perfil distinto.</p>

                <div class="company-types">
                    <div class="company-type">
                        <div class="company-icon">GmbH</div>
                        <div class="company-info">
                            <h4>Sociedad Limitada</h4>
                            <p>Capital: <strong>20.000 CHF</strong></p>
                            <p>La más común para empresarios con residencia fiscal real en Suiza.</p>
                        </div>
                    </div>
                    <div class="company-type">
                        <div class="company-icon">AG</div>
                        <div class="company-info">
                            <h4>Sociedad Anónima</h4>
                            <p>Capital: <strong>100.000 CHF</strong></p>
                            <p>Ideal cuando necesitas inversores o tu facturación es elevada.</p>
                        </div>
                    </div>
                    <div class="company-type">
                        <div class="company-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="company-info">
                            <h4>Holding</h4>
                            <p>El <strong>95% de dividendos</strong> no tributan</p>
                            <p>Perfecta para consolidar empresas de varios países.</p>
                        </div>
                    </div>
                    <div class="company-type">
                        <div class="company-icon">EF</div>
                        <div class="company-info">
                            <h4>Einzelfirma (Autónomo)</h4>
                            <p>Sin capital mínimo</p>
                            <p>Para empezar sin complicaciones ni burocracia pesada.</p>
                        </div>
                    </div>
                </div>

                <p>El error más frecuente que veo es gente que elige la estructura sin entender las implicaciones fiscales a medio plazo. Montar una GmbH cuando necesitas una holding o viceversa puede costarte años de optimización perdida.</p>
            </article>

            <article class="blog-content-article">
                <h3>Cambiar tu residencia fiscal a Suiza sin sustos con Hacienda</h3>
                <p>Mudarte a Suiza no es simplemente hacer las maletas y alquilar un piso en Zúrich. Si lo haces mal, puedes acabar siendo residente fiscal en los dos países y pagando impuestos en ambos.</p>

                <div class="warning-box">
                    <div class="warning-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="warning-content">
                        <h4>Reglas claras de España</h4>
                        <ul>
                            <li>No más de <strong>183 días</strong> al año en territorio español</li>
                            <li>Centro de intereses económicos en Suiza</li>
                            <li>Cónyuge e hijos menores no pueden residir en España</li>
                            <li>Exit tax si patrimonio supera <strong>4 millones €</strong></li>
                        </ul>
                    </div>
                </div>

                <p>El convenio de doble imposición entre España y Suiza existe precisamente para evitar que pagues dos veces por los mismos ingresos. Pero hay que aplicarlo correctamente. He visto casos de clientes que acabaron tributando en ambos países el primer año porque su asesor anterior no gestionó bien la transición.</p>
            </article>

            <article class="blog-content-article">
                <h3>Por qué el cantón donde vivas cambia completamente tu factura fiscal</h3>
                <p>Suiza tiene 26 cantones y cada uno fija sus propios tipos impositivos. La diferencia entre elegir bien o elegir mal puede superar los <strong>200.000 CHF</strong> en pocos años.</p>

                <div class="canton-grid">
                    <div class="canton-card canton-top">
                        <h4>Zug</h4>
                        <span class="canton-rate">~12%</span>
                        <p>Crypto Valley. Los impuestos más bajos pero saturado de empresas tech.</p>
                    </div>
                    <div class="canton-card canton-top">
                        <h4>Schwyz</h4>
                        <span class="canton-rate">~12%</span>
                        <p>Tipos similares a Zug con menos masificación.</p>
                    </div>
                    <div class="canton-card canton-top">
                        <h4>Nidwalden / Obwalden</h4>
                        <span class="canton-rate">Muy competitivo</span>
                        <p>Cantones pequeños con trato personal.</p>
                    </div>
                    <div class="canton-card canton-mid">
                        <h4>Zúrich</h4>
                        <span class="canton-rate">Medio-alto</span>
                        <p>Centro financiero con acceso al sistema bancario suizo.</p>
                    </div>
                    <div class="canton-card canton-mid">
                        <h4>Ginebra</h4>
                        <span class="canton-rate">Hasta 45%</span>
                        <p>Forfait fiscal para grandes fortunas que no trabajan activamente.</p>
                    </div>
                    <div class="canton-card canton-high">
                        <h4>Vaud</h4>
                        <span class="canton-rate">~22%</span>
                        <p>Opción cara salvo para casos muy específicos.</p>
                    </div>
                </div>

                <p>Elegir cantón no es solo mirar una tabla de porcentajes. Depende de tu tipo de negocio, tu situación familiar, el idioma que prefieras y tus planes a cinco o diez años vista.</p>
            </article>

            <article class="blog-content-article blog-content-final">
                <h3>Lo que hace diferente a este blog</h3>

                <div class="stats-row">
                    <div class="stat-item">
                        <span class="stat-number">+500</span>
                        <span class="stat-label">Estructuras fiscales implementadas</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">4</span>
                        <span class="stat-label">Años de especialización en Suiza</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">0</span>
                        <span class="stat-label">Problemas legales con autoridades</span>
                    </div>
                </div>

                <p>No encontrarás aquí teoría copiada de Wikipedia ni promesas de paraísos fiscales mágicos. Lo que encontrarás son las preguntas que nos hacen cada semana en llamadas con clientes reales y las respuestas honestas que damos, incluyendo los casos donde Suiza no es la mejor opción.</p>
                <p>Porque a veces la respuesta correcta es quedarse donde estás. Y preferimos decírtelo antes de que gastes tiempo y dinero en un movimiento que no tiene sentido para tu situación particular.</p>
            </article>

            <div class="blog-content-cta">
                <h3>Recibe casos reales y estrategias fiscales cada semana</h3>
                <p>Más de <strong>2.000 empresarios</strong> ya la reciben. Sin bla bla, solo números y decisiones que puedes aplicar.</p>
                <a href="<?php echo esc_url(gns_get_calendly_url()); ?>" target="_blank" rel="noopener" class="cta-button">Reservar consulta gratuita</a>
            </div>

        </div>
    </section>
    <!-- FIN SECCIÓN DE CONTENIDO FIJO -->

</main>

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
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Asegurar que el mensaje de no posts sea visible
    const noPosts = document.querySelector('.no-posts');
    if (noPosts) {
        console.log('Mensaje de no posts encontrado y forzando visibilidad');
        noPosts.style.display = 'block';
        noPosts.style.visibility = 'visible';
        noPosts.style.opacity = '1';
    }

    // Debug: mostrar info del blog
    console.log('Blog page loaded');
    console.log('Articles found:', document.querySelectorAll('.article-card').length);
    console.log('Featured article:', document.querySelector('.featured-article'));
});
</script>

<?php get_footer(); ?>
