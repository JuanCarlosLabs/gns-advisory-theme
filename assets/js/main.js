/**
 * GNS Landing - Main JavaScript
 *
 * @package GNS_Landing
 * @version 1.1.0
 */

(function() {
    'use strict';

    // === MARCAR QUE JS ESTÁ HABILITADO PARA LAS ANIMACIONES ===
    document.documentElement.classList.add('js-enabled');

    // === VARIABLES GLOBALES ===
    let lastScrollY = window.pageYOffset;
    let scrollDirection = 'down';

    // === BARRA DE PROGRESO DE SCROLL ===
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    document.body.appendChild(progressBar);

    function updateScrollProgress() {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.pageYOffset / windowHeight) * 100;
        progressBar.style.width = scrolled + '%';
    }

    window.addEventListener('scroll', updateScrollProgress);

    // === DETECTAR DIRECCIÓN DE SCROLL ===
    window.addEventListener('scroll', () => {
        const currentScrollY = window.pageYOffset;
        scrollDirection = currentScrollY > lastScrollY ? 'down' : 'up';
        lastScrollY = currentScrollY;
    });

    // === INTERSECTION OBSERVER CON ANIMACIONES BIDIRECCIONALES ===
    const observerOptions = {
        threshold: [0, 0.15, 0.5, 1],
        rootMargin: '0px 0px -50px 0px'
    };

    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const element = entry.target;

            if (entry.isIntersecting && entry.intersectionRatio >= 0.15) {
                // Entrando en viewport - ANIMACIÓN HACIA ADELANTE
                element.classList.add('animate-visible');
                element.classList.remove('animate-hidden');

                // Si es un counter, animar el número
                if (element.classList.contains('counter-animate') && !element.dataset.counted) {
                    animateCounter(element);
                    element.dataset.counted = 'true';
                }
            } else if (!entry.isIntersecting && scrollDirection === 'up') {
                // Saliendo del viewport HACIA ARRIBA - Reversa suave
                if (element.dataset.bidirectional !== 'false') {
                    element.classList.remove('animate-visible');
                    element.classList.add('animate-hidden');
                }
            }
        });
    }, observerOptions);

    // === FUNCIÓN PARA ANIMAR NÚMEROS (COUNTER EFFECT) ===
    function animateCounter(element) {
        const text = element.textContent;
        const number = parseFloat(text.replace(/[^0-9.]/g, ''));

        if (isNaN(number)) return;

        const duration = 2000;
        const steps = 60;
        const stepValue = number / steps;
        const stepDuration = duration / steps;
        let current = 0;
        let step = 0;

        const suffix = text.replace(/[0-9.,]/g, '').trim();
        const hasDecimal = text.includes('.');

        const timer = setInterval(() => {
            step++;
            current = Math.min(stepValue * step, number);

            let displayValue;
            if (hasDecimal) {
                displayValue = current.toFixed(1);
            } else {
                displayValue = Math.floor(current).toString();
            }

            element.textContent = displayValue + (suffix ? ' ' + suffix : '');

            if (step >= steps) {
                clearInterval(timer);
                element.textContent = text;
            }
        }, stepDuration);
    }

    // === SMOOTH SCROLL PARA LINKS INTERNOS CON EASING ===
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    const startPosition = window.pageYOffset;
                    const distance = targetPosition - startPosition;
                    const duration = 1500;
                    let start = null;

                    function easeInOutCubic(t) {
                        return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
                    }

                    function animation(currentTime) {
                        if (start === null) start = currentTime;
                        const timeElapsed = currentTime - start;
                        const progress = Math.min(timeElapsed / duration, 1);
                        const ease = easeInOutCubic(progress);

                        window.scrollTo(0, startPosition + distance * ease);

                        if (timeElapsed < duration) {
                            requestAnimationFrame(animation);
                        }
                    }

                    requestAnimationFrame(animation);
                }
            });
        });
    }

    // === ANIMACIONES AL HACER HOVER EN TARJETAS ===
    function initCardHoverEffects() {
        document.querySelectorAll('.testimonial-card, .service-column, .structure-card, .canton-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transition = 'all 0.3s ease';
            });
        });
    }

    // === THROTTLE PARA EVENTOS DE SCROLL (PERFORMANCE) ===
    function throttle(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // === LAZY LOADING DE ANIMACIONES PESADAS ===
    function initHeavyAnimations() {
        const heavyAnimations = document.querySelectorAll('.blur-fade, .reveal-center');
        const heavyObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-visible');
                    heavyObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        heavyAnimations.forEach(el => heavyObserver.observe(el));
    }

    // === LIMPIAR ELEMENTOS EXTRA AL CARGAR ===
    // IMPORTANTE: Esta función SOLO se ejecuta en la landing page (front-page.php)
    function cleanupExtraElements() {
        // Verificar si estamos en la landing page (detectar por la clase .landing-page en el main)
        const landingPageElement = document.querySelector('main.landing-page');
        const isLandingPage = landingPageElement !== null;

        // Si NO estamos en la landing page, no hacer nada destructivo
        if (!isLandingPage) {
            // Solo asegurar que el footer SEO sea visible en otras páginas
            const seoFooter = document.querySelector('.site-footer-seo');
            if (seoFooter) {
                seoFooter.style.cssText = 'display: block !important; visibility: visible !important; opacity: 1 !important; position: relative !important; height: auto !important;';
            }
            return; // Salir sin eliminar nada en otras páginas
        }

        // === SOLO PARA LANDING PAGE ===

        // 1. Eliminar cualquier elemento después del main (EXCEPTO el footer SEO)
        const main = document.querySelector('.landing-page');
        if (main) {
            let nextElement = main.nextElementSibling;
            while (nextElement) {
                const toRemove = nextElement;
                nextElement = nextElement.nextElementSibling;

                // NUNCA eliminar el footer SEO, elementos con clase 'keep', o scripts
                const isFooterSeo = toRemove.classList.contains('site-footer-seo') || toRemove.tagName === 'FOOTER';
                const isKeep = toRemove.classList.contains('keep');
                const isScript = toRemove.tagName === 'SCRIPT';

                if (!isFooterSeo && !isKeep && !isScript) {
                    toRemove.remove();
                }
            }
        }

        // 2. Eliminar footers duplicados (EXCEPTO el footer SEO) - SOLO en landing
        const footers = document.querySelectorAll('#colophon, .footer-widget-area, #footer, .site-info');
        footers.forEach(footer => {
            if (!footer.classList.contains('site-footer-seo')) {
                footer.remove();
            }
        });

        // 3. Asegurar que el footer SEO sea visible
        const seoFooter = document.querySelector('.site-footer-seo');
        if (seoFooter) {
            seoFooter.style.cssText = 'display: block !important; visibility: visible !important; opacity: 1 !important; position: relative !important; height: auto !important;';
        }
    }

    // === ANIMACIÓN DEL FOOTER SEO ===
    function initFooterAnimation() {
        const seoFooter = document.querySelector('.site-footer-seo');

        if (seoFooter) {
            const footerObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('footer-visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            footerObserver.observe(seoFooter);
        }

        // Smooth scroll para botón de volver arriba
        const scrollUpBtn = document.querySelector('.footer-scroll-up');
        if (scrollUpBtn) {
            scrollUpBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const ctaSection = document.querySelector('#cta');
                if (ctaSection) {
                    ctaSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        }
    }

    // === ACORDEÓN FAQ CON ACCESIBILIDAD ===
    // NOTA: Solo se aplica a FAQs dentro de .landing-page
    // Otras páginas (contacto, etc.) tienen su propio JS inline
    function initFAQAccordion() {
        // Solo inicializar en la landing page para evitar conflictos
        const landingPage = document.querySelector('.landing-page');
        if (!landingPage) return;

        const faqItems = landingPage.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            if (!question || !answer) return;

            question.addEventListener('click', () => {
                const wasActive = item.classList.contains('active');

                // Cerrar todos los items y actualizar ARIA
                faqItems.forEach(otherItem => {
                    const otherQuestion = otherItem.querySelector('.faq-question');
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    otherItem.classList.remove('active');
                    if (otherQuestion) otherQuestion.setAttribute('aria-expanded', 'false');
                    if (otherAnswer) otherAnswer.style.maxHeight = '0';
                });

                // Toggle el item clickeado
                if (!wasActive) {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });

            // Soporte para navegación con teclado
            question.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    question.click();
                }
            });
        });
    }

    // === ANIMACIÓN INICIAL DEL HERO ===
    function initHeroAnimation() {
        const heroTitle = document.querySelector('.hero-title');
        const heroSubtitle = document.querySelector('.hero-subtitle');
        const heroVideo = document.querySelector('.hero-video');
        const heroBanner = document.querySelector('.hero-banner');

        if (heroTitle) heroTitle.classList.add('hero-animate-in');
        if (heroSubtitle) {
            setTimeout(() => heroSubtitle.classList.add('hero-animate-in'), 200);
        }
        if (heroVideo) heroVideo.classList.add('video-entrance');
        if (heroBanner) {
            setTimeout(() => heroBanner.classList.add('hero-animate-in'), 600);
        }
    }

    // === OPTIMIZACIÓN: REDUCIR ANIMACIONES SI EL USUARIO PREFIERE ===
    function checkReducedMotion() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                el.style.transition = 'opacity 0.3s ease';
            });
        }
    }

    // === OPTIMIZACIÓN MÓVIL: PAUSAR ANIMACIONES CUANDO NO ESTÁ VISIBLE ===
    function initVisibilityOptimization() {
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                document.body.style.animationPlayState = 'paused';
            } else {
                document.body.style.animationPlayState = 'running';
            }
        });
    }

    // === DOM READY ===
    document.addEventListener('DOMContentLoaded', function() {
        // Observar elementos animados
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        animatedElements.forEach(el => scrollObserver.observe(el));

        // Inicializar componentes
        initSmoothScroll();
        initCardHoverEffects();
        initHeavyAnimations();
        initFooterAnimation();
        initFAQAccordion();
        checkReducedMotion();
        initVisibilityOptimization();

        // Limpieza de elementos extra
        cleanupExtraElements();
    });

    // === WINDOW LOAD ===
    window.addEventListener('load', () => {
        // Animación del hero
        initHeroAnimation();

        // Limpieza adicional
        cleanupExtraElements();
        setTimeout(cleanupExtraElements, 500);
        setTimeout(cleanupExtraElements, 1000);
    });

})();
