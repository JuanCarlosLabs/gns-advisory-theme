<?php
/**
 * Blog Article References Template Part
 * Sección de referencias internas y oficiales para interlinking SEO
 * Reutilizable para todos los artículos de blog
 *
 * Variables esperadas:
 * $references - Array de referencias internas con 'url' y 'title'
 * $official_references - Array opcional de referencias oficiales con 'url', 'title' y 'source'
 *
 * Ejemplo:
 * $references = array(
 *     array('url' => '/crear-empresa-en-suiza/', 'title' => 'Guía completa: Crear empresa en Suiza'),
 * );
 * $official_references = array(
 *     array('url' => 'https://www.estv.admin.ch/...', 'title' => 'Tabla Tasas Cantones 2026', 'source' => 'ESTV - Gobierno Suizo'),
 * );
 *
 * @package GNS_Advisory
 */

// Si no hay ninguna referencia, no mostrar nada
$has_internal = !empty($references) && is_array($references);
$has_official = !empty($official_references) && is_array($official_references);

if (!$has_internal && !$has_official) {
    return;
}
?>

<!-- Referencias - SEO Interlinking -->
<div class="references-box">
    <h3>Referencias y Artículos Relacionados</h3>

    <?php if ($has_internal) : ?>
        <p>Amplía tu conocimiento sobre fiscalidad y empresas en Suiza:</p>
        <ul class="references-list">
            <?php foreach ($references as $ref) : ?>
                <?php if (!empty($ref['url']) && !empty($ref['title'])) : ?>
                    <li>
                        <a href="<?php echo esc_url($ref['url']); ?>">
                            <?php echo esc_html($ref['title']); ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($has_official) : ?>
        <p class="official-refs-title"><strong>Fuentes oficiales citadas en este artículo:</strong></p>
        <ul class="references-list references-official">
            <?php foreach ($official_references as $ref) : ?>
                <?php if (!empty($ref['url']) && !empty($ref['title'])) : ?>
                    <li>
                        <a href="<?php echo esc_url($ref['url']); ?>" target="_blank" rel="noopener noreferrer">
                            <?php echo esc_html($ref['title']); ?>
                        </a>
                        <?php if (!empty($ref['source'])) : ?>
                            <span class="ref-source">— <?php echo esc_html($ref['source']); ?></span>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
