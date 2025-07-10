<!DOCTYPE html>
<html lang="pt-BR">
<?php 
$pageTitle = "Galeria de Fotos - Studio Librio 1010 | Vila Mariana, SP";
$pageDescription = "Galeria completa de fotos do studio mobiliado na Vila Mariana. Veja todas as áreas do apartamento e condomínio em detalhes.";
$pageKeywords = "galeria studio vila mariana, fotos apartamento mobiliado, imagens studio SP, fotos condomínio vila mariana";
$pageImage = "https://vivavilamariana.com.br/librio1010/imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg";
$currentPage = "galeria";
$include_modal = true;
$include_gallery = true;
include 'includes/head.php'; 
?>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Galeria de Fotos</h1>
            <p>Explore todas as áreas do studio e condomínio em detalhes</p>
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
                <!-- Apartamento Images -->
                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg" alt="Vista panorâmica do studio" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vista Panorâmica</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162817_cadeiras_escritorio_tv_vasos.jpg" alt="Estação de trabalho e Smart TV" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Estação de Trabalho</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162830_cozinha_microondas_geladeira_armario_pia_cooktop.jpg" alt="Cozinha completa" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Cozinha Completa</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163203_banheiro_pia.jpg" alt="Banheiro completo" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Banheiro</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163251_cama.jpg" alt="Quarto com cama queen" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Quarto</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162802_mesa_pratos_qquadros_espelho_tacas_sofa_canto-alemao.jpg" alt="Sala com sofá e mesa" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sala</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162913_vista-ensolarada-da-sacada.jpg" alt="Sacada privativa" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sacada</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162850_visao-geral_moveis_cozinha_estacao-trabalho_guarda-roupas_.jpg" alt="Entrada do apartamento" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Entrada</span>
                    </div>
                </div>

                <!-- Acessórios do Apartamento -->
                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163100_utensilios-cozinha_luva-termica_escorredor_tabua_guardanapo-de-pia.jpg" alt="Acessórios da cozinha" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Acessórios da Cozinha</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163127_utensilios-cozinha_purificador-de-agua.jpg" alt="Purificador de água" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Purificador de Água</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162807_cozinha_geladeira_cooktop.jpg" alt="Cooktop de indução" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Cooktop de Indução</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163405_nespresso_xicaras.jpg" alt="Máquina Nespresso" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Máquina Nespresso</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162737_cafe_nespresso_xicaras_acucar.jpg" alt="Copos e potes" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Copos e Potes</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163106_utensilios_talheres.jpg" alt="Faqueiro Tramontina" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Faqueiro Tramontina</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163156_banheiro_amenities.jpg" alt="Vaporizador no banheiro" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vaporizador</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163230_banhero_acessorios.jpg" alt="Lavatório e secador" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Lavatório e Secador</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163209_banheiro_chuveiro.jpg" alt="Box do banheiro" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Box do Banheiro</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163216_banheiro_box.jpg" alt="Box do lavatório" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Box do Lavatório</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162748_armario-de-roupas_espelho_sacada.jpg" alt="Armário de roupas e TV" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Armário e TV</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163245_guarda-roupas_cabides.jpg" alt="Cabides no armário" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Cabides no Armário</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163334_cama.jpg" alt="Colchão Castor dupla face" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Colchão Castor</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_163255_mesa.jpg" alt="Mesa de jantar" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Mesa de Jantar</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162907_cama_janela.jpg" alt="Criado mudo" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Criado Mudo</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="apartamento">
                    <img src="imagens_apartamento/20250705_162802_mesa_pratos_qquadros_espelho_tacas_sofa_canto-alemao.jpg" alt="Sala de jantar" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sala de Jantar</span>
                    </div>
                </div>

                <!-- Condomínio Images -->
                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/rooftop 20250121_112857.jpg" alt="Rooftop com vista panorâmica" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Rooftop</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/rooftop piscina 20250121_112901.jpg" alt="Piscina do rooftop" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Piscina do Rooftop</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/rooftop01 piscina 20250121_112607.jpg" alt="Piscina vista frontal" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Piscina - Vista Frontal</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/academia01 20250701_111717.jpg" alt="Academia do condomínio" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Academia</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/academia02 20250701_111713.jpg" alt="Academia vista 2" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Academia - Vista 2</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/coworking01 20250701_103815.jpg" alt="Espaço coworking" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Coworking</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/coworking02 20250701_103801.jpg" alt="Coworking vista 2" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Coworking - Vista 2</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/coworking externo 20250701_103740.jpg" alt="Coworking externo" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Coworking Externo</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/churrasqueira01 20250701_110826.jpg" alt="Churrasqueira" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Churrasqueira</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/churrasqueira02 20250701_110717.jpg" alt="Churrasqueira vista 2" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Churrasqueira - Vista 2</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/lavanderia01 20250701_111547.jpg" alt="Lavanderia" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Lavanderia</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/lavanderia02 20250701_111519.jpg" alt="Lavanderia vista 2" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Lavanderia - Vista 2</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/fachada01 20250701_104022_sem_id.jpg" alt="Fachada do condomínio" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Fachada</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/fachada02 20250701_103934_sem_id.jpg" alt="Fachada vista 2" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Fachada - Vista 2</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/recepcao01 20250701_103838.jpg" alt="Recepção" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Recepção</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/saguao_entrada01 20250701_103850.jpg" alt="Saguão de entrada" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Saguão de Entrada</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/playgroung01 horta 20250701_110809.jpg" alt="Playground e horta" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Playground e Horta</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/playgroung03 pet_place 20250701_110726.jpg" alt="Pet place" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Pet Place</span>
                    </div>
                </div>

                <!-- Vista Images -->
                <div class="gallery-item" data-category="vista">
                    <img src="imagens_apartamento/sacada por do sol 20250530_175422.jpg" alt="Sacada no pôr do sol" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Pôr do Sol</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="vista">
                    <img src="imagens_apartamento/sacada vista diurna 20250617_155025.jpg" alt="Vista diurna da sacada" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vista Diurna</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="vista">
                    <img src="imagens_condominio/rooftop 20250121_112949.jpg" alt="Vista do rooftop" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vista do Rooftop</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="vista">
                    <img src="imagens_apartamento/sacada01 20250121_112058.jpg" alt="Sacada vista 1" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sacada - Vista 1</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="vista">
                    <img src="imagens_apartamento/sacada02 20250121_112116.jpg" alt="Sacada vista 2" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sacada - Vista 2</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="vista">
                    <img src="imagens_apartamento/sacada03 20250121_112122.jpg" alt="Sacada vista 3" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sacada - Vista 3</span>
                    </div>
                </div>

                <div class="gallery-item" data-category="condominio">
                    <img src="imagens_condominio/rooftop vista noturna 20250701_190616.jpg" alt="Rooftop vista noturna" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Rooftop - Vista Noturna</span>
                    </div>
                </div>
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

    <?php include 'includes/modal.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html> 