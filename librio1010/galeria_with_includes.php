<?php
// Definir variáveis da página
$current_page = 'galeria';
$page_title = 'Galeria - Studio Librio 1010 | Vila Mariana, SP';
$page_description = 'Explore nossa galeria completa com fotos do studio, condomínio e vistas. Veja todos os detalhes do nosso apartamento mobiliado na Vila Mariana.';
$page_keywords = 'galeria librio 1010, fotos studio vila mariana, imagens apartamento são paulo, hospedagem com fotos';
$og_image = 'imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg';

// Definir scripts necessários
$include_modal = true;
$include_gallery = true;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Galeria</h1>
            <p>Explore todas as fotos do studio e condomínio</p>
        </div>
    </section>

    <!-- Gallery Navigation -->
    <section class="gallery-nav">
        <div class="container">
            <div class="gallery-tabs">
                <button class="gallery-tab active" data-category="all">Todas as Fotos <span class="tab-count" id="count-all"></span></button>
                <button class="gallery-tab" data-category="apartamento">Área Privativa <span class="tab-count" id="count-apartamento"></span></button>
                <button class="gallery-tab" data-category="condominio">Áreas Comuns <span class="tab-count" id="count-condominio"></span></button>
                <button class="gallery-tab" data-category="vista">Vistas <span class="tab-count" id="count-vista"></span></button>
            </div>
            <div class="gallery-status">
                <span id="gallery-counter">Mostrando todas as fotos</span>
                <div class="filter-loading" id="filter-loading" style="display: none;">
                    <span>Filtrando...</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid" id="gallery-grid">
                <!-- Conteúdo da galeria aqui... -->
                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg" alt="Vista panorâmica do studio" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vista Panorâmica</span>
                    </div>
                </div>
                <!-- Mais itens da galeria... -->
            </div>
        </div>
    </section>

    <!-- Gallery Info -->
    <section class="gallery-info">
        <div class="container">
            <div class="info-content">
                <h2>Explore Nossa Galeria</h2>
                <p>Nossa galeria mostra todos os detalhes do studio e condomínio. Use os filtros acima para navegar por categorias específicas ou clique nas imagens para ampliá-las.</p>
                
                <div class="info-stats">
                    <div class="info-stat">
                        <span class="stat-number">35+</span>
                        <span class="stat-label">Fotos do Apartamento</span>
                    </div>
                    <div class="info-stat">
                        <span class="stat-number">20+</span>
                        <span class="stat-label">Fotos do Condomínio</span>
                    </div>
                    <div class="info-stat">
                        <span class="stat-number">360°</span>
                        <span class="stat-label">Vista Completa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Gostou do que viu?</h2>
                <p>Entre em contato e reserve seu studio na Vila Mariana</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/5511984807272" class="btn btn-whatsapp" target="_blank">
                        <span>📱</span> WhatsApp
                    </a>
                    <a href="https://airbnb.com.br/h/vivavilamariana" class="btn btn-airbnb" target="_blank">
                        <span>🏠</span> Airbnb
                    </a>
                    <a href="detalhes.php" class="btn btn-secondary">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/modal.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html> 