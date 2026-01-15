<?php
/**
 * Front Page Template - Landing Page Principal
 *
 * @package GNS_Advisory
 */

get_header(); ?>

<style>
    /* Reset y base para la landing */
    .landing-page * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter Tight', sans-serif;
        background: #ffffff;
        color: #000000;
        margin: 0;
        padding: 0;
    }

    .landing-page h1,
    .landing-page h2,
    .landing-page h3,
    .landing-page h4,
    .landing-page h5,
    .landing-page h6 {
        font-family: 'Inter Tight', sans-serif;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1rem;
        color: #000000;
    }

    .landing-page h1 {
        font-size: clamp(2.5rem, 6vw, 4rem);
        font-weight: 700;
    }

    .landing-page h2 {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 700;
    }

    .landing-page h3 {
        font-size: clamp(1.5rem, 4vw, 2.25rem);
        font-weight: 700;
    }

    .landing-page p {
        margin-bottom: 1rem;
        font-size: 1.125rem;
        line-height: 1.6;
        font-weight: 600;
        color: #000000;
    }

    .landing-page section {
        padding: 5rem 0;
    }

    .container {
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
        padding: 0 2rem;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .landing-page section {
            padding: 3rem 0;
        }

        .container {
            padding: 0 1.5rem;
        }
    }

    /* Hero Section */
    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
        position: relative;
        overflow: hidden;
        padding: 80px 0;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 30%, rgba(192, 192, 192, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(169, 169, 169, 0.15) 0%, transparent 50%);
        pointer-events: none;
    }

    .hero .container {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    /* Hero Header */
    .hero-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .hero-title {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 0;
    }

    .hero-title-line {
        display: block;
        font-size: clamp(36px, 6vw, 52px);
        font-weight: 700;
        background: linear-gradient(135deg, #000000 0%, #4a4a4a 50%, #000000 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1.1;
    }

    .hero-title-line.hero-title-semibold {
        font-weight: 600;
        background: linear-gradient(135deg, #000000 0%, #4a4a4a 50%, #000000 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Hero Main */
    .hero-main {
        display: flex;
        gap: 80px;
        align-items: flex-start;
        margin-bottom: 60px;
    }

    /* Hero Photo Column */
    .hero-photo-column {
        width: 250px;
        flex-shrink: 0;
        text-align: center;
        position: sticky;
        top: 100px;
    }

    .hero-photo-circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #000000;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        margin: 0 auto;
    }

    .hero-photo-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-photo-name {
        font-size: 28px;
        font-weight: 700;
        margin-top: 20px;
        color: #000000;
    }

    .hero-photo-role {
        font-size: 14px;
        color: #4a4a4a;
        margin-top: 4px;
    }

    /* Hero Story Column */
    .hero-story-column {
        flex: 1;
        max-width: 700px;
    }

    .hero-story {
        font-size: 18px;
        line-height: 1.8;
        color: #000000;
    }

    .hero-story p {
        margin-bottom: 1rem;
    }

    .story-hook {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 24px;
    }

    .story-protagonist {
        font-weight: 600;
        color: #000000;
    }

    .story-quote {
        font-style: italic;
        border-left: 4px solid #000000;
        padding-left: 24px;
        margin: 24px 0;
        color: rgba(0, 0, 0, 0.7);
        font-size: 17px;
    }

    .story-objection {
        font-style: italic;
        color: rgba(0, 0, 0, 0.7);
        font-size: 17px;
    }

    .story-result {
        font-size: 22px;
        font-weight: 700;
        margin-top: 32px;
    }

    .story-emphasis {
        font-size: 20px;
        font-weight: 700;
        color: #000000;
    }

    .story-number {
        font-size: 20px;
        margin: 24px 0;
    }

    .story-number strong {
        font-size: 32px;
        color: #000000;
        font-weight: 700;
    }

    .story-lesson {
        font-size: 18px;
        margin-top: 32px;
    }

    .story-lesson-answer {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 24px;
    }

    .story-question {
        font-size: 22px;
        font-weight: 700;
        margin-top: 32px;
    }

    .story-question-follow {
        font-size: 20px;
        color: #000000;
        font-weight: 600;
    }

    /* Hero Button */
    .hero-button {
        margin-top: 40px;
        padding: 20px 48px;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: #000000;
        color: #ffffff;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: 2px solid #000000;
    }

    .hero-button:hover {
        background: #ffffff;
        color: #000000;
        border: 2px solid #000000;
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    /* Hero Logo */
    .hero-logo {
        text-align: center;
        margin-top: 40px;
        opacity: 0.6;
    }

    .hero-logo img {
        max-width: 120px;
        height: auto;
    }

    .company-banner {
        max-width: 900px;
        margin: 3rem auto 0;
        background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        display: grid;
        grid-template-columns: 150px 1fr;
        gap: 2.5rem;
        align-items: center;
        border: 1px solid #e0e0e0;
    }

    .company-logo {
        width: 150px;
        height: 150px;
        background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.5rem;
        color: #1a1a1a;
        border: 2px solid #a8a8a8;
    }

    .company-description {
        text-align: left;
    }

    .company-description p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #2a2a2a;
        margin: 0;
    }

    @media (max-width: 768px) {
        .hero-header {
            margin-bottom: 40px;
        }

        .hero-title-line {
            font-size: 32px;
        }

        .hero-title-line.hero-title-semibold {
            font-size: 32px;
        }

        .hero-main {
            flex-direction: column;
            gap: 40px;
        }

        .hero-photo-column {
            width: 100%;
            position: relative;
            top: 0;
        }

        .hero-photo-circle {
            width: 150px;
            height: 150px;
        }

        .hero-photo-name {
            font-size: 24px;
        }

        .hero-story-column {
            text-align: left;
        }

        .hero-story {
            font-size: 16px;
        }

        .story-hook {
            font-size: 20px;
        }

        .story-result {
            font-size: 18px;
        }

        .story-number strong {
            font-size: 26px;
        }

        .hero-button {
            width: 100%;
            text-align: center;
        }

        .hero h1 {
            font-size: 2rem;
        }

        .hero h2 {
            font-size: 1.25rem;
        }

        .hero-description {
            font-size: 1.1rem;
        }

        .company-banner {
            grid-template-columns: 1fr;
            gap: 1.5rem;
            padding: 2rem;
            text-align: center;
        }

        .company-logo {
            margin: 0 auto;
            width: 120px;
            height: 120px;
        }

        .company-description {
            text-align: center;
        }
    }

    /* Testimonials */
    .testimonials {
        background: #ffffff;
        position: relative;
    }

    .testimonials h2 {
        text-align: center;
        margin-bottom: 1rem;
    }

    .testimonials > .container > p {
        text-align: center;
        color: #4a4a4a;
        margin-bottom: 3rem;
    }

    .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2.5rem;
        margin-top: 3rem;
    }

    .testimonial-card {
        padding: 2.5rem;
        background: linear-gradient(135deg, #fafafa 0%, #f5f5f5 100%);
        border-radius: 16px;
        border: 1px solid #e0e0e0;
        border-left: 5px solid #c0c0c0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .testimonial-result {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #000000 0%, #4a4a4a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .testimonial-detail {
        color: #2a2a2a;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .testimonial-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }

    /* Services Columns */
    .services {
        background: linear-gradient(135deg, #f8f8f8 0%, #ffffff 100%);
        position: relative;
    }

    .services h2 {
        text-align: center;
        margin-bottom: 1rem;
    }

    .services > .container > p {
        text-align: center;
        color: #4a4a4a;
        margin-bottom: 3rem;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 3rem;
        margin-top: 3rem;
    }

    .service-column {
        padding: 3.5rem;
        border-radius: 24px;
        background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .service-column::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at top right, rgba(192, 192, 192, 0.1) 0%, transparent 60%);
        pointer-events: none;
    }

    .service-column:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .service-column.green {
        border: 3px solid #2ecc71;
    }

    .service-column.red {
        border: 3px solid #e74c3c;
    }

    .service-column h3 {
        margin-bottom: 2rem;
        position: relative;
        z-index: 1;
    }

    .service-column ul {
        list-style: none;
        padding: 0;
        position: relative;
        z-index: 1;
    }

    .service-column li {
        padding: 0.85rem 0;
        padding-left: 2.5rem;
        position: relative;
        font-size: 1.1rem;
        color: #2a2a2a;
        line-height: 1.6;
    }

    .service-column li:before {
        content: "●";
        position: absolute;
        left: 0;
        font-size: 1.3rem;
        font-weight: 700;
        top: 0.85rem;
    }

    .service-column.green li:before {
        color: #2ecc71;
    }

    .service-column.red li:before {
        color: #e74c3c;
    }

    @media (max-width: 1024px) {
        .services-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Swiss Structures */
    .swiss-structures {
        background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
        position: relative;
    }

    .swiss-structures h2 {
        text-align: center;
        margin-bottom: 1rem;
    }

    .swiss-structures > .container > p {
        text-align: center;
        color: #4a4a4a;
        margin-bottom: 3rem;
        font-size: 1.25rem;
    }

    .structures-content {
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 3rem;
        align-items: start;
        margin-top: 3rem;
        position: relative;
        /* CRÍTICO: Altura mínima para que el sticky tenga espacio para bajar */
        min-height: 200vh; /* Forzar altura para que la bandera pueda bajar */
    }

    .structures-main-grid {
        display: flex;
        flex-direction: column;
        gap: 3rem;
        position: relative;
        z-index: 1;
        /* El contenido de la izquierda define cuánto debe bajar la bandera */
        padding-bottom: 5rem; /* Espacio extra para que la bandera baje más */
    }

    .structures-main-grid h3 {
        text-align: center;
        margin: 2rem 0 1.5rem;
    }

    .structures-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }

    .structure-card {
        padding: 2.5rem;
        background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        border-radius: 16px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
        /* Aislar transforms para NO afectar sticky del padre */
        will-change: transform;
        transform: translateZ(0); /* Crear contexto 3D independiente */
    }

    /* Gradiente sutil de fondo para unificar el look */
    .structure-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at top center, rgba(192, 192, 192, 0.08) 0%, transparent 60%);
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .structure-card:hover::before {
        opacity: 1;
    }

    .structure-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .structure-card h4 {
        color: #1a1a1a;
        margin-bottom: 1rem;
        font-weight: 700;
        font-size: 1.5rem;
        position: relative;
        z-index: 1;
    }

    .structure-card p {
        color: #2a2a2a;
        line-height: 1.7;
        position: relative;
        z-index: 1;
    }

    /* Grid de cantones 2x2 */
    .cantons-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin-top: 3rem;
    }

    .canton-card {
        padding: 2.5rem;
        background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%);
        border-radius: 16px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        position: relative;
        overflow: hidden;
        /* Aislar transforms para NO afectar sticky del padre */
        will-change: transform;
        transform: translateZ(0); /* Crear contexto 3D independiente */
    }

    .canton-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at top center, rgba(192, 192, 192, 0.1) 0%, transparent 60%);
        pointer-events: none;
    }

    .canton-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
    }

    .canton-flag-svg,
    .canton-flag-img {
        width: 120px;
        height: 120px;
        margin: 0 auto 1.5rem;
        filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.15));
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        z-index: 1;
    }

    .canton-flag-img {
        display: block;
        object-fit: contain;
        border-radius: 12px;
    }

    .canton-card:hover .canton-flag-svg,
    .canton-card:hover .canton-flag-img {
        transform: scale(1.1) rotate(2deg);
    }

    .canton-card h4 {
        color: #1a1a1a;
        font-size: 1.75rem;
        margin-bottom: 1rem;
        font-weight: 700;
        position: relative;
        z-index: 1;
    }

    .canton-card p {
        color: #2a2a2a;
        font-size: 1.1rem;
        line-height: 1.6;
        font-weight: 600;
        position: relative;
        z-index: 1;
    }

    /* Contenedor de la bandera de Suiza - STICKY PERFECTO */
    .switzerland-flag-container {
        position: sticky;
        top: 2rem;
        background: linear-gradient(135deg, #ffffff 0%, #f8f8f8 100%);
        padding: 2rem;
        border-radius: 20px;
        border: 1px solid #000000;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 350px;
        max-height: calc(100vh - 4rem);
        height: fit-content;
        align-self: flex-start;
        z-index: 2;
        /* NO aplicar transform ni animaciones que rompan el sticky */
        transition: opacity 0.3s ease, box-shadow 0.3s ease;
    }

    /* Bandera SVG de Suiza con máxima calidad */
    .switzerland-flag-svg {
        width: 100%;
        max-width: 300px;
        height: auto;
        filter: drop-shadow(0 8px 20px rgba(0, 0, 0, 0.2));
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    /* Hover sutil solo en el SVG, NO en el contenedor */
    .switzerland-flag-container:hover .switzerland-flag-svg {
        transform: scale(1.05);
        filter: drop-shadow(0 12px 25px rgba(0, 0, 0, 0.3));
    }


    .structures-bottom-text {
        margin-top: 3rem;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        padding: 2.5rem;
        background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
        border-radius: 16px;
        border-left: 5px solid #c0c0c0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .structures-bottom-text p {
        margin-bottom: 1rem;
    }

    .structures-bottom-text strong {
        color: #1a1a1a;
    }

    @media (max-width: 1024px) {
        .structures-content {
            grid-template-columns: 1fr;
        }

        .structures-main-grid {
            gap: 2rem;
        }

        .structures-grid {
            grid-template-columns: 1fr;
        }

        .cantons-grid {
            grid-template-columns: 1fr;
        }

        .switzerland-flag-container {
            position: relative;
            top: 0;
            max-width: 350px;
            margin: 2rem auto 0;
            order: -1; /* Mover la bandera arriba en móvil */
        }
    }

    @media (max-width: 768px) {
        .structures-grid {
            gap: 1.5rem;
            grid-template-columns: 1fr;
        }

        .structure-card {
            padding: 2rem;
        }

        .cantons-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .canton-card {
            padding: 2rem;
        }

        .canton-flag-svg,
        .canton-flag-img {
            width: 100px;
            height: 100px;
        }

        .switzerland-flag-container {
            max-width: 280px;
            min-height: 280px;
        }

        .structures-bottom-text {
            padding: 2rem;
            text-align: left;
        }
    }

    /* Team */
    .team {
        background: linear-gradient(135deg, #f8f8f8 0%, #ffffff 100%);
    }

    .team h2 {
        text-align: center;
        margin-bottom: 1rem;
    }

    .team > .container > p {
        text-align: center;
        color: #4a4a4a;
        margin-bottom: 3rem;
    }

    .team-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        gap: 3rem;
        margin-top: 3rem;
    }

    .team-member {
        text-align: center;
        max-width: 280px;
    }

    /* Alejandra con diseño especial horizontal */
    .team-member.main {
        max-width: 100%;
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        gap: 3rem;
        text-align: left;
        margin-bottom: 2rem;
        padding: 2rem;
        background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .team-member.main .team-photo-wrapper {
        flex-shrink: 0;
    }

    .team-member.main .team-info {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .team-photo {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%);
        margin: 0 auto 1rem;
        overflow: hidden;
        border: 4px solid #a8a8a8;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .team-member:hover .team-photo {
        transform: scale(1.05);
    }

    .team-member.main .team-photo {
        width: 220px;
        height: 220px;
        border-width: 6px;
        border-color: #1a1a1a;
        margin: 0;
    }

    .team-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-name {
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        color: #1a1a1a;
    }

    .team-role {
        color: #4a4a4a;
        font-size: 1rem;
    }

    .team-member p {
        font-size: 0.95rem;
        color: #2a2a2a;
    }

    @media (max-width: 768px) {
        .team-grid {
            gap: 2.5rem;
        }

        .team-member {
            max-width: 100%;
        }

        .team-member.main {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1.5rem;
        }

        .team-member.main .team-photo-wrapper {
            margin-bottom: 1.5rem;
        }

        .team-member.main .team-info {
            align-items: center;
        }

        .team-photo {
            width: 180px;
            height: 180px;
        }

        .team-member.main .team-photo {
            width: 200px;
            height: 200px;
        }
    }

    /* FAQ */
    .faq {
        background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
    }

    .faq h2 {
        text-align: center;
        margin-bottom: 3rem;
    }

    .faq-list {
        max-width: 900px;
        margin: 3rem auto 0;
        background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        border-radius: 16px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .faq-item {
        border-bottom: 1px solid #e0e0e0;
        transition: background-color 0.3s ease;
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-item:hover {
        background-color: #f8f8f8;
    }

    .faq-question {
        font-weight: 700;
        font-size: 1.2rem;
        color: #1a1a1a;
        padding: 1.5rem 2rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        user-select: none;
        transition: color 0.3s ease;
    }

    .faq-question:hover {
        color: #4a4a4a;
    }

    .faq-question::after {
        content: '+';
        font-size: 2rem;
        font-weight: 300;
        color: #c0c0c0;
        transition: transform 0.3s ease, color 0.3s ease;
        flex-shrink: 0;
        margin-left: 1rem;
    }

    .faq-item.active .faq-question::after {
        content: '−';
        color: #1a1a1a;
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), padding 0.4s ease;
        color: #2a2a2a;
        font-size: 1.05rem;
        line-height: 1.7;
        padding: 0 2rem;
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
        padding: 0 2rem 1.5rem 2rem;
    }

    .faq-answer p {
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .faq-question {
            padding: 1.25rem 1.5rem;
            font-size: 1.05rem;
        }

        .faq-question::after {
            font-size: 1.75rem;
        }

        .faq-answer {
            padding: 0 1.5rem;
            font-size: 1rem;
        }

        .faq-item.active .faq-answer {
            padding: 0 1.5rem 1.25rem 1.5rem;
        }
    }

    /* CTA Integrados */
    .inline-cta {
        max-width: 800px;
        margin: 4rem auto;
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border-radius: 24px;
        padding: 3.5rem;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
        position: relative;
        overflow: hidden;
    }

    .inline-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at center, rgba(192, 192, 192, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .inline-cta-content {
        position: relative;
        z-index: 1;
    }

    .inline-cta h3 {
        color: #ffffff;
        font-size: 2rem;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #ffffff 0%, #c0c0c0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .inline-cta p {
        color: #ffffff !important;
        font-size: 1.15rem;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .inline-cta .btn {
        background: #000000;
        color: #ffffff !important;
        border: 2px solid #ffffff;
        padding: 1.25rem 3rem;
        font-size: 1.2rem;
    }

    .inline-cta .btn:hover {
        background: #ffffff;
        color: #000000 !important;
        border: 2px solid #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 768px) {
        .inline-cta {
            padding: 2.5rem 2rem;
        }

        .inline-cta h3 {
            font-size: 1.5rem;
        }

        .inline-cta p {
            font-size: 1rem;
        }
    }

    /* CTA Section */
    .cta {
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        color: #fff;
        text-align: center;
        position: relative;
        overflow: hidden;
        padding: 5rem 0 6rem 0 !important; /* Más padding abajo para cierre limpio */
    }

    .cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 30% 50%, rgba(192, 192, 192, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 70% 50%, rgba(169, 169, 169, 0.15) 0%, transparent 50%);
        pointer-events: none;
    }

    .cta .container {
        position: relative;
        z-index: 1;
    }

    .cta h2 {
        color: #ffffff;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #ffffff 0%, #c0c0c0 50%, #ffffff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta > .container > p {
        color: #e0e0e0;
        font-size: 1.15rem;
        margin-bottom: 4rem;
    }

    .cta-single-container {
        max-width: 700px;
        margin: 0 auto 3rem;
        background: linear-gradient(135deg, #ffffff 0%, #f8f8f8 100%);
        color: #1a1a1a;
        padding: 4rem;
        border-radius: 24px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .cta-single-container:hover {
        transform: translateY(-8px);
    }

    .cta-single-container:last-child {
        margin-bottom: 0; /* El último no tiene margen inferior */
    }

    .cta-single-container h3 {
        margin-bottom: 1.5rem;
        color: #1a1a1a;
        font-size: 2rem;
        background: linear-gradient(135deg, #000000 0%, #4a4a4a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-single-container p {
        color: #2a2a2a;
    }

    .newsletter-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 2rem;
    }

    .newsletter-form input {
        padding: 1.25rem;
        font-size: 1rem;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-family: 'Inter Tight', sans-serif;
        font-weight: 500;
        transition: border-color 0.3s ease;
    }

    .newsletter-form input:focus {
        outline: none;
        border-color: #a8a8a8;
    }

    .newsletter-form input::placeholder {
        color: #999;
        font-weight: 400;
    }

    .btn {
        padding: 1.25rem 2.5rem;
        font-size: 1.125rem;
        font-weight: 700;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        font-family: 'Inter Tight', sans-serif;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-primary {
        background: #000000;
        color: #ffffff !important;
        border: 2px solid #000000;
    }

    .btn-primary:hover {
        background: #ffffff;
        color: #000000 !important;
        border: 2px solid #000000;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary {
        background: #000000;
        color: #ffffff !important;
        border: 2px solid #000000;
    }

    .btn-secondary:hover {
        background: #ffffff;
        color: #000000 !important;
        border: 2px solid #000000;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    /* Estilos para el formulario de newsletter del CTA */
    .cta-newsletter-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .cta-newsletter-form input[type="text"],
    .cta-newsletter-form input[type="email"] {
        padding: 1.25rem;
        font-size: 1rem;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-family: 'Inter Tight', sans-serif;
        font-weight: 500;
        transition: border-color 0.3s ease;
    }

    .cta-newsletter-form input[type="text"]:focus,
    .cta-newsletter-form input[type="email"]:focus {
        outline: none;
        border-color: #a8a8a8;
    }

    .cta-newsletter-form input[type="text"]::placeholder,
    .cta-newsletter-form input[type="email"]::placeholder {
        color: #999;
        font-weight: 400;
    }

    .price-tag {
        font-size: 3rem;
        font-weight: 700;
        color: #1a1a1a;
        margin: 1.5rem 0;
    }

    .consultant-photo {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%);
        margin: 0 auto 1.5rem;
        overflow: hidden;
        border: 5px solid #1a1a1a;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .consultant-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cta-flag-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .cta-switzerland-flag {
        width: 80px;
        height: 80px;
        background: #DA291C;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        flex-shrink: 0;
    }

    .cta-switzerland-flag::before,
    .cta-switzerland-flag::after {
        content: '';
        position: absolute;
        background: white;
    }

    .cta-switzerland-flag::before {
        width: 63.33%;
        height: 20%;
        top: 40%;
        left: 18.33%;
    }

    .cta-switzerland-flag::after {
        width: 20%;
        height: 63.33%;
        top: 18.33%;
        left: 40%;
    }

    @media (max-width: 1024px) {
        .cta-options {
            grid-template-columns: 1fr;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 768px) {
        .cta {
            padding: 4rem 0 5rem 0 !important; /* Padding ajustado para móvil */
        }

        .cta-single-container {
            padding: 2.5rem 2rem;
            margin-bottom: 2.5rem;
        }

        .cta-single-container:last-child {
            margin-bottom: 0;
        }

        .cta-single-container h3 {
            font-size: 1.5rem;
        }

        .price-tag {
            font-size: 2.5rem;
        }

        .consultant-photo {
            width: 140px;
            height: 140px;
        }

        .cta-flag-container {
            flex-direction: column;
            gap: 1rem;
        }
    }

    /* === FOOTER Y FINAL DE PÁGINA - ELIMINACIÓN TOTAL DEL ESPACIO BLANCO === */

    /* CRÍTICO: Forzar que body y html terminen exactamente donde termina el contenido */
    html {
        padding: 0 !important;
        margin: 0 !important;
        height: 100% !important;
    }

    body {
        padding: 0 !important;
        margin: 0 !important;
        padding-bottom: 0 !important;
        margin-bottom: 0 !important;
        min-height: 100vh !important;
        height: auto !important;
    }

    /* OCULTAR COMPLETAMENTE EL FOOTER Y CUALQUIER ELEMENTO DESPUÉS DEL CTA */
    .site-footer,
    footer,
    #colophon,
    .footer,
    [role="contentinfo"],
    footer.site-footer,
    div.site-footer,
    .footer-widget-area,
    #footer,
    .site-info {
        display: none !important;
        visibility: hidden !important;
        height: 0 !important;
        min-height: 0 !important;
        max-height: 0 !important;
        overflow: hidden !important;
        margin: 0 !important;
        padding: 0 !important;
        opacity: 0 !important;
        position: absolute !important;
        left: -9999px !important;
    }

    /* Eliminar TODOS los elementos después del main/CTA */
    .landing-page ~ *,
    .cta ~ *,
    .cta + *,
    main ~ *,
    main + *,
    #main-content ~ *,
    #main-content + *,
    section.cta ~ *,
    section.cta + * {
        display: none !important;
        visibility: hidden !important;
        margin: 0 !important;
        padding: 0 !important;
        height: 0 !important;
        max-height: 0 !important;
        overflow: hidden !important;
        position: absolute !important;
        left: -9999px !important;
    }

    /* Forzar que el CTA sea el último elemento visible - SIN margen inferior */
    .cta {
        margin-bottom: 0 !important;
        padding-bottom: 6rem !important; /* Padding interno del CTA */
        position: relative;
    }

    /* Asegurar que el main termine limpio */
    #main-content,
    .site-main,
    .landing-page {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
        display: block !important;
    }

    /* Eliminar espacios de WordPress inyectados */
    #wpadminbar ~ *:not(#page):not(.landing-page):not(#main-content) {
        display: none !important;
    }

    /* Ocultar elementos de plugins que aparecen al final */
    body > div[id*="cookie"],
    body > div[class*="cookie"],
    body > div[id*="gdpr"],
    body > div[class*="gdpr"],
    body > div[id*="popup"],
    body > div[class*="popup"] {
        display: none !important;
    }

    /* Limpiar floats */
    .cta::after,
    .landing-page::after {
        content: "";
        display: table;
        clear: both;
    }

    /* Eliminar pseudo-elementos que creen espacio */
    body::after,
    html::after,
    body::before,
    html::before {
        content: none !important;
        display: none !important;
    }

    /* CRÍTICO: Prevenir que WordPress o plugins agreguen espacio al final */
    body > *:last-child:not(.landing-page):not(#page):not(#main-content) {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }

    /* Forzar overflow correcto sin romper sticky */
    html {
        overflow-y: auto !important;
        /* NO usar overflow-x: hidden - rompe position: sticky */
    }

    body {
        overflow-x: clip !important; /* Alternativa moderna a hidden que no rompe sticky */
    }

    /* Eliminar márgenes de elementos de WordPress */
    #page,
    .site {
        margin: 0 !important;
        padding: 0 !important;
    }

    /* Asegurar que no haya espacio después del CTA incluso en pantallas grandes */
    @media (min-width: 1400px) {
        .cta {
            margin-bottom: 0 !important;
        }

        body {
            padding-bottom: 0 !important;
        }

        html,
        body {
            margin-bottom: 0 !important;
        }
    }

    /* === ANIMACIONES ON SCROLL === */

    /* IMPORTANTE: Marcar elementos que deben animarse como ocultos inicialmente */
    .js-enabled .animate-on-scroll {
        opacity: 0 !important;
    }

    /* Elementos con animaciones base */
    .animate-on-scroll {
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.8s cubic-bezier(0.16, 1, 0.3, 1) !important;
        will-change: transform, opacity;
    }

    /* Fade In desde abajo */
    .fade-up {
        transform: translateY(60px) !important;
    }

    .fade-up.animate-visible {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }

    /* Fade In desde la izquierda */
    .fade-left {
        transform: translateX(-60px) !important;
    }

    .fade-left.animate-visible {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    /* Fade In desde la derecha */
    .fade-right {
        transform: translateX(60px) !important;
    }

    .fade-right.animate-visible {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    /* Zoom In */
    .zoom-in {
        transform: scale(0.85) !important;
    }

    .zoom-in.animate-visible {
        opacity: 1 !important;
        transform: scale(1) !important;
    }

    /* Flip In */
    .flip-in {
        transform: perspective(1000px) rotateY(-15deg) !important;
        transform-origin: center;
    }

    .flip-in.animate-visible {
        opacity: 1 !important;
        transform: perspective(1000px) rotateY(0deg) !important;
    }

    /* Slide y Fade combinado - MEJORADO para estructuras y cantones */
    .slide-fade {
        transform: translateY(40px) scale(0.95) !important;
    }

    .slide-fade.animate-visible {
        opacity: 1 !important;
        transform: translateY(0) scale(1) !important;
    }

    /* Las animaciones de structures y cantons usan el sistema slide-fade estándar */
    /* NO agregar animaciones adicionales que puedan causar conflictos con el sticky */

    /* Animación especial para números (counter effect) */
    .counter-animate {
        transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    /* Efecto de brillo al aparecer */
    .glow-on-appear {
        position: relative;
    }

    .glow-on-appear.animate-visible::after {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, transparent, rgba(192, 192, 192, 0.4), transparent);
        border-radius: inherit;
        opacity: 0;
        animation: glow-pulse 2s ease-in-out;
        z-index: 0;
        pointer-events: none;
    }

    @keyframes glow-pulse {
        0%, 100% { opacity: 0; }
        50% { opacity: 1; }
    }

    /* Delays escalonados para múltiples elementos */
    .animate-on-scroll.stagger-1 { transition-delay: 0.15s !important; }
    .animate-on-scroll.stagger-2 { transition-delay: 0.3s !important; }
    .animate-on-scroll.stagger-3 { transition-delay: 0.45s !important; }
    .animate-on-scroll.stagger-4 { transition-delay: 0.6s !important; }
    .animate-on-scroll.stagger-5 { transition-delay: 0.75s !important; }

    /* Animación para hero inicial */
    .hero-animate-in {
        animation: heroEntry 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
    }

    @keyframes heroEntry {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animación suave para video placeholder */
    .video-entrance {
        animation: videoEntrance 1s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards !important;
        opacity: 0;
    }

    @keyframes videoEntrance {
        from {
            opacity: 0;
            transform: scale(0.9) translateY(20px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    /* Hover mejorado - SOLO aplica cuando ya está visible */
    .testimonial-card.animate-visible:hover,
    .structure-card.animate-visible:hover,
    .canton-card.animate-visible:hover,
    .faq-item.animate-visible:hover {
        transform: translateY(-8px) !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .service-column.animate-visible:hover {
        transform: translateY(-10px) scale(1.02) !important;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.18) !important;
    }

    .inline-cta.animate-visible:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.35) !important;
    }

    /* Animación especial para team photos */
    .team-photo {
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    .team-member.animate-visible .team-photo:hover {
        transform: scale(1.1) rotate(5deg) !important;
        box-shadow: 0 15px 35px rgba(169, 169, 169, 0.4) !important;
    }

    /* Optimizaciones para móvil */
    @media (max-width: 768px) {
        /* Reducir movimientos en móvil para mejor rendimiento */
        .fade-up {
            transform: translateY(30px) !important;
        }

        .fade-left,
        .fade-right {
            transform: translateY(30px) !important; /* En móvil, convertir a fade-up */
        }

        .zoom-in {
            transform: scale(0.92) !important;
        }

        /* Reducir hover effects en móvil */
        .testimonial-card.animate-visible:hover,
        .structure-card.animate-visible:hover,
        .canton-card.animate-visible:hover,
        .faq-item.animate-visible:hover {
            transform: translateY(-4px) !important;
        }

        .service-column.animate-visible:hover {
            transform: translateY(-4px) scale(1.01) !important;
        }

        .inline-cta.animate-visible:hover {
            transform: translateY(-3px) !important;
        }

        .team-member.animate-visible .team-photo:hover {
            transform: scale(1.05) rotate(3deg) !important;
        }

        /* Animación más rápida en móvil */
        .animate-on-scroll {
            transition-duration: 0.6s !important;
        }
    }

    /* Prevenir conflictos con otras transiciones */
    .testimonial-card,
    .structure-card,
    .service-column,
    .faq-item,
    .inline-cta {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    /* Override para elementos animados */
    .testimonial-card.animate-on-scroll,
    .structure-card.animate-on-scroll,
    .canton-card.animate-on-scroll,
    .service-column.animate-on-scroll,
    .faq-item.animate-on-scroll,
    .inline-cta.animate-on-scroll {
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.8s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    /* === SMOOTH SCROLL NATIVO === */
    html {
        scroll-behavior: smooth;
    }

    /* === ANIMACIONES ADICIONALES GRÁFICAS === */

    /* Blur fade effect */
    .blur-fade {
        filter: blur(10px);
        opacity: 0;
        transform: scale(0.95);
    }

    .blur-fade.animate-visible {
        filter: blur(0px);
        opacity: 1;
        transform: scale(1);
        transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Rotate fade effect */
    .rotate-fade {
        opacity: 0;
        transform: rotate(-5deg) scale(0.9);
    }

    .rotate-fade.animate-visible {
        opacity: 1;
        transform: rotate(0deg) scale(1);
        transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Elastic bounce effect */
    .elastic-bounce {
        opacity: 0;
        transform: scale(0.5);
    }

    .elastic-bounce.animate-visible {
        opacity: 1;
        transform: scale(1);
        transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    /* Reveal from center */
    .reveal-center {
        opacity: 0;
        clip-path: circle(0% at 50% 50%);
    }

    .reveal-center.animate-visible {
        opacity: 1;
        clip-path: circle(150% at 50% 50%);
        transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Barra de progreso al hacer scroll */
    .scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #c0c0c0 0%, #a8a8a8 50%, #808080 100%);
        z-index: 9999;
        transition: width 0.1s ease-out;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Efecto de shine que pasa por los elementos */
    .shine-effect {
        position: relative;
        overflow: hidden;
    }

    .shine-effect::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent 0%,
            rgba(255, 255, 255, 0.3) 50%,
            transparent 100%
        );
        transition: left 0.7s ease;
    }

    .shine-effect.animate-visible::before {
        left: 100%;
    }

    /* Animación de typing para textos */
    .typing-effect {
        overflow: hidden;
        border-right: 2px solid #c0c0c0;
        white-space: nowrap;
        animation: typing 3s steps(40, end), blink-caret 0.75s step-end infinite;
    }

    @keyframes typing {
        from { width: 0; }
        to { width: 100%; }
    }

    @keyframes blink-caret {
        from, to { border-color: transparent; }
        50% { border-color: #c0c0c0; }
    }

    /* Efecto de ondas al aparecer */
    .wave-effect {
        position: relative;
    }

    .wave-effect.animate-visible::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        border: 2px solid rgba(192, 192, 192, 0.5);
        transform: translate(-50%, -50%);
        animation: wave-pulse 1.5s ease-out;
    }

    @keyframes wave-pulse {
        0% {
            width: 0;
            height: 0;
            opacity: 1;
        }
        100% {
            width: 200%;
            height: 200%;
            opacity: 0;
        }
    }

    /* Sombra animada en scroll */
    .shadow-grow {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: box-shadow 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .shadow-grow.animate-visible {
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    /* Gradient text animation */
    .gradient-text-animate {
        background: linear-gradient(
            90deg,
            #000000 0%,
            #4a4a4a 25%,
            #808080 50%,
            #4a4a4a 75%,
            #000000 100%
        );
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradient-shift 3s ease infinite;
    }

    @keyframes gradient-shift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    /* Contador con efecto de brillo */
    .counter-glow {
        position: relative;
        display: inline-block;
    }

    .counter-glow.animate-visible {
        animation: number-glow 2s ease-in-out;
    }

    @keyframes number-glow {
        0%, 100% {
            text-shadow: 0 0 5px rgba(192, 192, 192, 0);
        }
        50% {
            text-shadow: 0 0 20px rgba(192, 192, 192, 0.8),
                         0 0 30px rgba(192, 192, 192, 0.6);
        }
    }

    /* Floating animation suave */
    .float-animate {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    /* Pulse subtle en hover */
    .pulse-hover:hover {
        animation: pulse-subtle 1s ease-in-out infinite;
    }

    @keyframes pulse-subtle {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.03); }
    }

    /* Border animation en aparecer */
    .border-draw {
        position: relative;
    }

    .border-draw::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        border: 2px solid #c0c0c0;
        opacity: 0;
    }

    .border-draw.animate-visible::before {
        width: 100%;
        height: 100%;
        opacity: 1;
        transition: width 0.6s ease, height 0.6s ease 0.3s, opacity 0.3s ease;
    }

    /* Slide scale combinado mejorado */
    .slide-scale-advanced {
        opacity: 0;
        transform: translateY(50px) scale(0.8) rotateX(10deg);
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .slide-scale-advanced.animate-visible {
        opacity: 1;
        transform: translateY(0) scale(1) rotateX(0deg);
        transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
    }
</style>

<main id="main-content" class="site-main landing-page">

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">

            <!-- Header -->
            <div class="hero-header">
                <h1 class="hero-title">
                    <span class="hero-title-line">Estás pagando impuestos de más.</span>
                    <span class="hero-title-line">Y lo sabes.</span>
                    <span class="hero-title-line">Pero no haces nada.</span>
                    <span class="hero-title-line hero-title-semibold">Sigue pensando que Suiza es solo para los ricos.</span>
                    <span class="hero-title-line hero-title-semibold">A ver cómo te va.</span>
                </h1>
            </div>

            <!-- Main block -->
            <div class="hero-main">

                <!-- Foto Alejandra -->
                <div class="hero-photo-column">
                    <div class="hero-photo-circle">
                        <img src="https://gnsadvisory.com/wp-content/uploads/2025/06/Alejandra_Ortiz.jpg" alt="Alejandra Ortiz">
                    </div>
                    <div class="hero-photo-name">Ale</div>
                    <div class="hero-photo-role">Fundadora GNS Advisory</div>
                </div>

                <!-- Story -->
                <div class="hero-story-column">

                    <div class="hero-story">

                        <p class="story-hook">Mira.</p>

                        <p>Carlos pensaba lo mismo que tú.</p>

                        <p class="story-protagonist">47 años. Empresario. Logística. 2 millones de facturación al año.</p>

                        <p>Cada trimestre, el mismo ritual:</p>

                        <p>Abrir la declaración. Ver el 45%. Tragar. Seguir trabajando.</p>

                        <blockquote class="story-quote">
                            "Ale, estoy harto. Trabajo 14 horas al día para que casi la mitad se vaya en impuestos. Esto no puede seguir así."
                        </blockquote>

                        <p>Le pregunté por qué no había mirado Suiza antes.</p>

                        <p>Su respuesta:</p>

                        <p class="story-objection">"Pensaba que eso era solo para millonarios."</p>

                        <p>No lo es.</p>

                        <p class="story-result">Diez semanas después, Carlos paga el 11,9%.</p>

                        <p class="story-emphasis">Legalmente. En Suiza. Con la misma empresa.</p>

                        <p>Mismos clientes. Mismo trabajo. Mismo esfuerzo.</p>

                        <p>Diferente país.</p>

                        <p class="story-number">La diferencia en 3 años: <strong>640.000€</strong></p>

                        <p>Para él. No para Hacienda.</p>

                        <p class="story-lesson">Carlos dejó de pensar que Suiza era para ricos.</p>

                        <p class="story-lesson-answer">Y empezó a quedarse con lo que gana.</p>

                        <p class="story-question">¿Y tú?</p>

                        <p class="story-question-follow">¿Hasta cuándo vas a seguir regalando tu dinero?</p>

                    </div>

                    <a href="https://calendly.com/gnsgroupadvisory-info/consulta-estrategica" target="_blank" class="btn btn-primary hero-button">Quiero dejar de regalarlo</a>

                </div>

            </div>

            <!-- Logo -->
            <div class="hero-logo">
                <img src="https://gnsadvisory.com/wp-content/uploads/2025/05/logo_foter-2.png" alt="GNS Advisory">
            </div>

        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">Esto es lo que pasa cuando entiendes el juego</h2>
            <p class="animate-on-scroll fade-up stagger-1">Sin marketing vacío. Solo historias reales.</p>

            <div class="testimonial-grid">
                <div class="testimonial-card animate-on-scroll zoom-in stagger-1 glow-on-appear shine-effect shadow-grow">
                    <div class="testimonial-result counter-animate counter-glow">1.2M CHF</div>
                    <h4>Carlos, empresario español</h4>
                    <p class="testimonial-detail">Sector: Logística | Facturación: 2M€/año<br>
                    Antes: 45% en España<br>
                    Ahora: 11.9% en Zug<br>
                    Tiempo: 10 semanas</p>
                    <p class="testimonial-quote">"Tenía miedo de que fuera demasiado complicado. En 10 semanas estaba operando desde Suiza."</p>
                </div>

                <div class="testimonial-card animate-on-scroll zoom-in stagger-2 glow-on-appear shine-effect shadow-grow">
                    <div class="testimonial-result counter-animate counter-glow">340K CHF</div>
                    <h4>Familia Rodríguez, argentinos</h4>
                    <p class="testimonial-detail">Situación: Patrimonio familiar diversificado<br>
                    Problema: Pagaban impuestos sobre patrimonio<br>
                    Ahora: Solo tributan sobre beneficios distribuidos</p>
                    <p class="testimonial-quote">"Llevábamos años pagando de más sin saberlo."</p>
                </div>

                <div class="testimonial-card animate-on-scroll zoom-in stagger-3 glow-on-appear shine-effect shadow-grow">
                    <div class="testimonial-result counter-animate counter-glow">890K CHF</div>
                    <h4>Miguel, empresario mexicano</h4>
                    <p class="testimonial-detail">Sector: Tecnología<br>
                    Problema: Holding desordenado, dividendos mal estructurados<br>
                    Ahorro: Primer año</p>
                    <p class="testimonial-quote">"Pensé que tenía todo controlado. Ale me mostró que estaba dejando casi un millón sobre la mesa cada año."</p>
                </div>
            </div>

            <!-- CTA Integrado 1 -->
            <div class="inline-cta animate-on-scroll slide-fade stagger-1">
                <div class="inline-cta-content">
                    <h3>¿Cuánto podrías estar ahorrando tú?</h3>
                    <p>Si estás pagando más de 100K EUR/año en impuestos, probablemente estás dejando dinero sobre la mesa.</p>
                    <p>Cada año que no actúas, ese dinero desaparece. Para siempre.</p>
                    <a href="https://calendly.com/gnsgroupadvisory-info/consulta-estrategica" target="_blank" class="btn btn-primary">Quiero saber cuánto</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">¿Qué necesitas exactamente?</h2>
            <p class="animate-on-scroll fade-up stagger-1">Porque no es lo mismo estar ya en Suiza que estar pensando en venir.</p>

            <div class="services-grid">
                <div class="service-column green animate-on-scroll fade-left stagger-2">
                    <h3>Ya estás en Suiza</h3>
                    <p>Miro tu estructura actual y encuentro dónde estás dejando dinero.</p>
                    <p>Casi siempre hay algo.</p>
                    <p>Luego lo arreglamos.</p>
                    <ul>
                        <li>Reviso tu estructura societaria (holdings, subsidiarias, el lío que tengas)</li>
                        <li>Busco fugas fiscales que tu gestor no ve</li>
                        <li>Optimizo cómo te pagas a ti mismo (dividendos, salario, combinación)</li>
                        <li>Planifico qué pasa cuando no estés (herencias, sucesión)</li>
                        <li>Reduzco tu carga cantonal si estás en el cantón equivocado</li>
                    </ul>
                </div>

                <div class="service-column red animate-on-scroll fade-right stagger-2">
                    <h3>No estás en Suiza (todavía)</h3>
                    <p>Te digo si tiene sentido para tu caso.</p>
                    <p>Cómo hacerlo. Cuánto cuesta. Cuánto vas a ahorrar.</p>
                    <p>Sin rodeos.</p>
                    <ul>
                        <li>Analizo si Suiza tiene sentido para ti (a veces no lo tiene, y te lo digo)</li>
                        <li>Diseño la estructura antes de que muevas un euro</li>
                        <li>Gestiono permisos de residencia si los necesitas</li>
                        <li>Coordino con tus asesores actuales para que no haya sorpresas</li>
                        <li>Te acompaño en todo el proceso, no te dejo solo con papeles</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- Swiss Structures -->
    <section class="swiss-structures">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">Las herramientas (sin el rollo técnico)</h2>
            <p class="animate-on-scroll fade-up stagger-1">Hay varias formas de estructurarte en Suiza. Esto es lo que necesitas saber de cada una. El resto te lo explico cuando hablemos.</p>

            <div class="structures-content">
                <div class="structures-main-grid">
                    <div class="structures-grid">
                        <div class="structure-card animate-on-scroll slide-fade stagger-1">
                            <h4>Holding Suiza</h4>
                            <h5>Para quienes tienen varias empresas</h5>
                            <p>El 95% de los dividendos que recibes de tus empresas NO tributan. Sí, has leído bien.</p>
                            <p><strong>Ideal si:</strong> Tienes varias sociedades o inversiones en diferentes países.</p>
                        </div>

                        <div class="structure-card animate-on-scroll slide-fade stagger-2">
                            <h4>GMBH</h4>
                            <h5>La más común para empezar</h5>
                            <p>Como una SL española, pero con impuestos del 12-14%. Capital mínimo: 20.000 CHF.</p>
                            <p><strong>Ideal si:</strong> Eres empresario o tienes una pyme.</p>
                        </div>

                        <div class="structure-card animate-on-scroll slide-fade stagger-3">
                            <h4>AG</h4>
                            <h5>Para estructuras grandes</h5>
                            <p>Como una SA. Facilita meter inversores. Capital mínimo: 100.000 CHF.</p>
                            <p><strong>Ideal si:</strong> Facturas mucho o planeas crecer con socios.</p>
                        </div>

                        <div class="structure-card animate-on-scroll slide-fade stagger-4">
                            <h4>Einzelfirma</h4>
                            <h5>Autónomo en Suiza</h5>
                            <p>Sin capital mínimo. Simple. Tributas como persona.</p>
                            <p><strong>Ideal si:</strong> Eres freelance o estás empezando.</p>
                        </div>
                    </div>

                    <!-- Grid 2x2 de Cantones -->
                    <h3>¿Dónde? Depende de lo que busques.</h3>
                    <div class="cantons-grid">
                <!-- Ginebra -->
                <div class="canton-card animate-on-scroll slide-fade stagger-1">
                    <img class="canton-flag-img" src="https://gnsadvisory.com/wp-content/uploads/2026/01/Canton-Ginebra-grandes-fortunas-impuestos-en-Suiza.png" alt="Cantón de Ginebra" loading="lazy">
                    <h4>Genève</h4>
                    <h5>El internacional</h5>
                    <p>Hub diplomático. Francófono. Prestigio. Mejor para patrimonios grandes y perfiles internacionales.</p>
                </div>

                <!-- Zug -->
                <div class="canton-card animate-on-scroll slide-fade stagger-2">
                    <img class="canton-flag-img" src="https://gnsadvisory.com/wp-content/uploads/2026/01/Canton-Zug-impuestos-bajos-y-criptomonedas.png" alt="Cantón de Zug" loading="lazy">
                    <h4>Zug</h4>
                    <h5>El que todos conocen</h5>
                    <p>12% impuestos corporativos. Crypto Valley. El más barato, pero no siempre el mejor para ti.</p>
                </div>

                <!-- Zürich -->
                <div class="canton-card animate-on-scroll slide-fade stagger-3">
                    <img class="canton-flag-img" src="https://gnsadvisory.com/wp-content/uploads/2026/01/Kanton-zurich-emprendimiento-y-en-la-ciudad-mas-grande-del-pais.png" alt="Cantón de Zürich" loading="lazy">
                    <h4>Zürich</h4>
                    <h5>El centro financiero</h5>
                    <p>Más caro que Zug, pero más servicios y conexiones. Si tu negocio necesita presencia, aquí está.</p>
                </div>

                <!-- Basel-Stadt -->
                <div class="canton-card animate-on-scroll slide-fade stagger-4">
                    <img class="canton-flag-img" src="https://gnsadvisory.com/wp-content/uploads/2026/01/Kanton-basel-impuestos-para-las-empresas-farmaceuticas.png" alt="Cantón de Basel-Stadt" loading="lazy">
                    <h4>Basel</h4>
                    <h5>El farmacéutico</h5>
                    <p>13% impuestos. Hub de innovación. Menos conocido, pero muy competitivo.</p>
                </div>
            </div>
                </div>

                <div class="switzerland-flag-container">
                    <!-- Bandera de Suiza SVG de alta calidad -->
                    <!-- NO aplicar animate-on-scroll - debe permanecer sticky puro -->
                    <svg class="switzerland-flag-svg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
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
                <p>Un empresario que factura 1M EUR/año puede ahorrar entre 200.000 y 350.000 EUR anuales relocalizando correctamente.</p>
                <p>No necesitas ser millonario.</p>
                <p>Necesitas entender cómo funciona el sistema.</p>
                <p>Y alguien que te lo explique sin venderte humo.</p>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="team">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">Quién está detrás de esto</h2>
            <p class="animate-on-scroll fade-up stagger-1">Las personas que harán que todo funcione para ti.</p>

            <div class="team-grid">
                <!-- Alejandra Ortiz - Fundadora -->
                <div class="team-member main animate-on-scroll zoom-in stagger-2">
                    <div class="team-photo-wrapper">
                        <div class="team-photo">
                            <img src="https://gnsadvisory.com/wp-content/uploads/2025/06/Alejandra_Ortiz.jpg" alt="Alejandra Ortiz">
                        </div>
                    </div>
                    <div class="team-info">
                        <div class="team-name">Alejandra Ortiz (Ale)</div>
                        <div class="team-role">Fundadora</div>
                        <div class="team-email">a.ortiz@gnsadvisory.com</div>
                        <p style="margin-top: 1rem; color: #495057;">Me llamo Alejandra. Ale, para los clientes.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Llevo 15 años ayudando a empresarios a pagar menos impuestos. Legalmente. En Suiza.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Pero debo confesar algo.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">No empecé en esto por vocación fiscal. Empecé porque vi a mi padre, que tenía una pequeña empresa, pasarlo realmente mal cada vez que llegaba la declaración. Trabajaba más que nadie. Y al final del año, después de impuestos, casi no quedaba nada.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Eso no me parecía justo.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Así que me puse a estudiar. A entender cómo funcionaba el sistema. A buscar las reglas del juego que nadie te cuenta.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Y las encontré.</p>
                        <p style="margin-top: 0.75rem; color: #495057;">Hoy ayudo a empresarios como mi padre. Solo que ahora, en lugar de quedarse sin nada, se quedan con la mayor parte de lo que ganan.</p>
                    </div>
                </div>

                <!-- Sofía Fajardo -->
                <div class="team-member animate-on-scroll fade-up stagger-3">
                    <div class="team-photo">
                        <img src="https://gnsadvisory.com/wp-content/uploads/2025/06/sofia_fajardo.jpg" alt="Sofía Fajardo">
                    </div>
                    <div class="team-name">Sofía Fajardo</div>
                    <div class="team-role">Legal</div>
                    <div class="team-email">s.fajardo@gnsadvisory.com</div>
                    <p style="margin-top: 0.75rem; color: #495057;">La que se asegura de que todo lo que hacemos esté blindado legalmente.</p>
                    <p style="margin-top: 0.75rem; color: #495057;">Si algo puede salir mal en un contrato, Sofía lo encuentra antes.</p>
                </div>

                <!-- Javier Catota -->
                <div class="team-member animate-on-scroll fade-up stagger-3">
                    <div class="team-photo">
                        <img src="https://gnsadvisory.com/wp-content/uploads/2025/06/Javier_Catota.jpg" alt="Javier Catota">
                    </div>
                    <div class="team-name">Javier Catota</div>
                    <div class="team-role">Operaciones</div>
                    <div class="team-email">j.catota@gnsadvisory.com</div>
                    <p style="margin-top: 0.75rem; color: #495057;">El que hace que todo funcione por dentro.</p>
                    <p style="margin-top: 0.75rem; color: #495057;">Papeles, procesos, coordinación. Lo que no se ve pero sin lo cual nada funcionaría.</p>
                </div>

                <!-- Carlos Duarte -->
                <div class="team-member animate-on-scroll fade-up stagger-4">
                    <div class="team-photo">
                        <img src="https://gnsadvisory.com/wp-content/uploads/2025/06/carlos_duarte.jpg" alt="Carlos Duarte">
                    </div>
                    <div class="team-name">Carlos Duarte</div>
                    <div class="team-role">Soporte</div>
                    <div class="team-email">support@gnsadvisory.com</div>
                    <p style="margin-top: 0.75rem; color: #495057;">El que te ayuda cuando algo técnico no funciona.</p>
                    <p style="margin-top: 0.75rem; color: #495057;">Plataformas, accesos, formación online. Si tienes un problema técnico, él lo resuelve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="container">
            <h2 class="animate-on-scroll fade-up">Preguntas que me hacen (con respuestas honestas)</h2>

            <div class="faq-list animate-on-scroll fade-up stagger-1">
                <div class="faq-item">
                    <div class="faq-question">¿Esto es legal?</div>
                    <div class="faq-answer">
                        <p>100%. No hago trucos. No hago ingeniería fiscal agresiva. Hago optimización dentro del marco legal suizo.</p>
                        <p>Si quieres algo ilegal, no soy tu persona. Hay otros que hacen eso. Yo no.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Cuánto cuesta la primera reunión?</div>
                    <div class="faq-answer">
                        <p>230 CHF la hora.</p>
                        <p>Si decides seguir adelante, ese coste se descuenta del proyecto. Si no, habrás invertido 230 CHF en entender tu situación fiscal real.</p>
                        <p>Probablemente la mejor inversión que hagas este año.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Necesito mudarme a Suiza?</div>
                    <div class="faq-answer">
                        <p>Depende.</p>
                        <p>Hay estructuras que no requieren residencia. Otras sí. Lo vemos en la primera reunión.</p>
                        <p>No te voy a decir que te mudes si no tiene sentido para ti.</p>
                    </div>
                </div>


                <div class="faq-item">
                    <div class="faq-question">¿Por qué debería confiar en ti?</div>
                    <div class="faq-answer">
                        <p>No tienes que hacerlo. Confía en los números.</p>
                        <p>15 años. Más de 200 clientes. Cero problemas legales.</p>
                        <p>Si eso no te basta, no pasa nada. Hay muchos asesores fiscales en el mundo.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Y si al final no me conviene?</div>
                    <div class="faq-answer">
                        <p>Pues no lo hacemos.</p>
                        <p>No voy a convencerte de algo que no te beneficia. Mi negocio se basa en clientes satisfechos que me recomiendan, no en vender humo.</p>
                        <p>Si después de analizar tu caso veo que no tiene sentido, te lo digo. Y tan amigos.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Cuánto tarda todo el proceso?</div>
                    <div class="faq-answer">
                        <p>Depende de la complejidad.</p>
                        <p>Una estructura simple: 6-8 semanas.</p>
                        <p>Una relocalización completa con residencia: 3-6 meses.</p>
                        <p>Te doy un timeline realista en la primera reunión. No prometo milagros.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿Eres arrogante?</div>
                    <div class="faq-answer">
                        <p>Probablemente.</p>
                        <p>Pero también soy buena en lo que hago. Y prefiero ser honesta a ser simpática.</p>
                        <p>Si buscas alguien que te diga que sí a todo, no soy yo. Si buscas alguien que te diga la verdad aunque no te guste, hablamos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">

            <!-- Bloque principal -->
            <div class="cta-main-block">

                <!-- Columna izquierda: Foto -->
                <div class="cta-photo-column">
                    <div class="cta-photo-circle">
                        <img src="https://gnsadvisory.com/wp-content/uploads/2025/06/Alejandra_Ortiz.jpg" alt="Alejandra Ortiz">
                    </div>
                    <div class="cta-photo-name">Ale</div>
                    <div class="cta-photo-role">Fundadora GNS Advisory</div>
                </div>

                <!-- Columna derecha: Contenido -->
                <div class="cta-content-column">

                    <h2 class="cta-title">Mira, esto es simple.</h2>

                    <div class="cta-text">
                        <p>Si estás pagando más de 100.000€ al año en impuestos y no has hablado con alguien que entienda Suiza, estás perdiendo dinero.</p>

                        <p class="cta-emphasis">Cada mes.</p>
                        <p class="cta-emphasis">Cada año.</p>
                        <p class="cta-emphasis">Para siempre.</p>

                        <p>Yo puedo decirte en una hora si tiene sentido hacer algo o si ya lo tienes todo bien.</p>
                    </div>

                    <div class="cta-price-block">
                        <span class="cta-price counter-animate counter-glow">230 CHF</span>
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

                    <a href="https://calendly.com/gnsgroupadvisory-info/consulta-estrategica" target="_blank" class="btn btn-primary cta-button">
                        Quiero saber dónde estoy parado
                    </a>

                    <p class="cta-slots">Atiendo máximo 4 casos nuevos al mes.</p>

                </div>

            </div>

            <!-- Bloque secundario: Newsletter -->
            <div class="cta-secondary-block">

                <div class="cta-newsletter">
                    <p class="cta-newsletter-intro">Pd: Si todavía no estás listo para hablar, puedes seguirme por email.</p>
                    <p class="cta-newsletter-desc">Mando casos reales cada semana. Sin bla bla. Solo números y estrategias que puedes copiar.</p>

                    <form class="cta-newsletter-form" action="#" method="post">
                        <input type="text" name="name" placeholder="Tu nombre" required>
                        <input type="email" name="email" placeholder="Tu email" required>
                        <button type="submit" class="btn btn-secondary">Suscribirme</button>
                    </form>

                    <p class="cta-newsletter-proof">Ya somos más de 2.000. Si no te aporta, te das de baja en un clic.</p>
                </div>

            </div>

        </div>
    </section>

</main>

<script>
    // Marcar que JS está habilitado para las animaciones
    document.documentElement.classList.add('js-enabled');

    // === SMOOTH SCROLL DESACTIVADO - Conflictivo con animaciones ===
    // El smooth scroll nativo de CSS es suficiente

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

    // === INTERSECTION OBSERVER CON ANIMACIONES BIDIRECCIONALES ===

    let lastScrollY = window.pageYOffset;
    let scrollDirection = 'down';

    window.addEventListener('scroll', () => {
        const currentScrollY = window.pageYOffset;
        scrollDirection = currentScrollY > lastScrollY ? 'down' : 'up';
        lastScrollY = currentScrollY;
    });

    // Configuración del observer con animaciones bidireccionales
    const observerOptions = {
        threshold: [0, 0.15, 0.5, 1], // Múltiples thresholds para mejor control
        rootMargin: '0px 0px -50px 0px'
    };

    // Crear el observer
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

    // Observar todos los elementos con animación
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        animatedElements.forEach(el => scrollObserver.observe(el));

        // Inicializar parallax sections
        initParallaxSections();
    });

    // === FUNCIÓN PARA ANIMAR NÚMEROS (COUNTER EFFECT) MEJORADA ===
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

    // === ANIMACIÓN INICIAL DEL HERO ===
    window.addEventListener('load', () => {
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
    });

    // === PARALLAX DESACTIVADO - Causaba espacio extra ===
    // Las animaciones de scroll son suficientes
    function initParallaxSections() {
        // Función vacía - parallax desactivado
    }

    function updateParallaxElements() {
        // Función vacía - parallax desactivado
    }

    // === SMOOTH SCROLL PARA LINKS INTERNOS CON EASING ===
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - startPosition;
                const duration = 1500; // 1.5 segundos
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

    // === ANIMACIONES AL HACER HOVER EN SECCIONES ===
    document.querySelectorAll('.testimonial-card, .service-column, .structure-card, .canton-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)'; // Bounce effect
        });

        card.addEventListener('mouseleave', function() {
            this.style.transition = 'all 0.3s ease';
        });
    });

    // === ANIMACIONES DE STRUCTURES Y CANTONS: Usar solo IntersectionObserver ===
    // NO usar scroll manual para evitar conflictos con sticky
    // Las animaciones se manejan completamente con el IntersectionObserver ya configurado

    // === MOUSE PARALLAX DESACTIVADO - Causaba conflictos ===

    // === OPTIMIZACIÓN: Reducir animaciones si el usuario prefiere menos movimiento ===
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            el.style.transition = 'opacity 0.3s ease';
        });
        ease = 0.3; // Scroll más directo
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

    // === OPTIMIZACIÓN MÓVIL: Pausar animaciones cuando no está visible ===
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            document.body.style.animationPlayState = 'paused';
        } else {
            document.body.style.animationPlayState = 'running';
        }
    });

    // === DEBUG: Log de scroll direction (puedes eliminarlo en producción) ===
    // window.addEventListener('scroll', throttle(() => {
    //     console.log('Scroll direction:', scrollDirection, 'Position:', window.pageYOffset);
    // }, 100));

    // === STICKY NATURAL: NO manipular con JavaScript ===
    // El position: sticky funciona automáticamente con CSS puro
    // Dejar que el navegador maneje el sticky de forma nativa

    // === LIMPIAR ELEMENTOS EXTRA AL CARGAR - AGRESIVO ===
    function cleanupExtraElements() {
        // 1. Eliminar cualquier elemento después del main
        const main = document.querySelector('#main-content, .landing-page');
        if (main) {
            let nextElement = main.nextElementSibling;
            while (nextElement) {
                const toRemove = nextElement;
                nextElement = nextElement.nextElementSibling;

                // Ocultar completamente cualquier elemento que no sea script esencial
                if (!toRemove.classList.contains('keep') && toRemove.tagName !== 'SCRIPT') {
                    toRemove.style.cssText = 'display: none !important; height: 0 !important; margin: 0 !important; padding: 0 !important; visibility: hidden !important; position: absolute !important; left: -9999px !important;';
                    toRemove.remove(); // Eliminar del DOM completamente
                }
            }
        }

        // 2. Eliminar footers específicamente
        const footers = document.querySelectorAll('footer, .site-footer, #colophon, .footer, [role="contentinfo"], .footer-widget-area, #footer, .site-info');
        footers.forEach(footer => {
            footer.style.cssText = 'display: none !important; height: 0 !important; margin: 0 !important; padding: 0 !important; visibility: hidden !important; position: absolute !important; left: -9999px !important;';
            footer.remove();
        });

        // 3. Eliminar elementos de plugins comunes que aparecen al final
        const pluginSelectors = [
            '[id*="cookie"]',
            '[class*="cookie"]',
            '[id*="gdpr"]',
            '[class*="gdpr"]',
            '[id*="popup"]',
            '[class*="popup"]',
            '.wp-block-group__inner-container',
            '.wp-site-blocks > *:not(#main-content):not(.landing-page)'
        ];

        pluginSelectors.forEach(selector => {
            document.querySelectorAll(selector).forEach(el => {
                if (!el.closest('#main-content, .landing-page')) {
                    el.remove();
                }
            });
        });

        // 4. Forzar que body termine en el CTA
        const ctaSection = document.querySelector('.cta');
        if (ctaSection) {
            const ctaRect = ctaSection.getBoundingClientRect();
            const ctaBottom = ctaRect.bottom + window.pageYOffset;

            // Forzar estilos en body
            document.body.style.cssText += 'margin-bottom: 0 !important; padding-bottom: 0 !important;';
            document.documentElement.style.cssText += 'margin-bottom: 0 !important; padding-bottom: 0 !important;';

            // Calcular y ajustar altura
            const bodyHeight = ctaBottom;
            document.body.style.minHeight = bodyHeight + 'px';
        }

        // 5. Eliminar espacios en blanco fantasma
        document.querySelectorAll('body > *').forEach(el => {
            if (el.textContent.trim() === '' && !el.querySelector('*') && el.tagName !== 'SCRIPT') {
                el.remove();
            }
        });
    }

    // Ejecutar la limpieza cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', cleanupExtraElements);
    } else {
        cleanupExtraElements();
    }

    // Ejecutar nuevamente cuando todo esté cargado (incluyendo plugins)
    window.addEventListener('load', () => {
        cleanupExtraElements();

        // Y una vez más después de un pequeño delay por si algún plugin se carga tarde
        setTimeout(cleanupExtraElements, 500);
        setTimeout(cleanupExtraElements, 1000);
    });

    // === ACORDEÓN FAQ ===
    document.addEventListener('DOMContentLoaded', () => {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');

            question.addEventListener('click', () => {
                // Cerrar otros items (opcional - remover si quieres múltiples abiertos)
                const wasActive = item.classList.contains('active');
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                });

                // Toggle el item clickeado
                if (!wasActive) {
                    item.classList.add('active');
                }
            });
        });
    });

</script>

<?php
// IMPORTANTE: Debemos llamar a get_footer() para que WordPress cierre correctamente el HTML
// El footer está oculto visualmente con CSS pero es necesario para wp_footer()
get_footer();
?>
