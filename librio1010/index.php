<!DOCTYPE html>
<html lang="pt-BR">
<?php 
$pageTitle = "Studio Mobiliado Vila Mariana - Fotos, Detalhes e Características Completas | Librio 1010";
$pageDescription = "Studio mobiliado 100% novo na Vila Mariana com todas as fotos, detalhes e características. Cozinha completa, Smart TV 50\", estação de trabalho, cama queen, ar-condicionado. Próximo ao metrô Ana Rosa e Ibirapuera. Long stay e short stay.";
$pageKeywords = "studio mobiliado vila mariana, fotos detalhes apartamento, hospedagem próxima UNIFESP, aluguel temporário vila mariana, short stay paulista ibirapuera, airbnb perto metrô ana rosa, apartamento mobiliado SP congressos, moradia residência médica SP, características completas studio";
$pageImage = "https://vivavilamariana.com.br/librio1010/assets/images/hero-studio.jpg";
$currentPage = "index";
$customCSS = '
/* Balcony Views Section */
.balcony-views {
    padding: 5rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.balcony-views::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.1);
    z-index: 1;
}

.balcony-content {
    position: relative;
    z-index: 2;
}

.balcony-header {
    text-align: center;
    margin-bottom: 3rem;
}

.balcony-header h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.balcony-header p {
    font-size: 1.2rem;
    max-width: 600px;
    margin: 0 auto;
    opacity: 0.9;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.balcony-gallery {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.balcony-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    transition: transform 0.3s ease;
}

.balcony-item:hover {
    transform: translateY(-5px);
}

.balcony-item.main-view {
    grid-row: span 2;
}

.balcony-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.balcony-item:hover img {
    transform: scale(1.05);
}

.balcony-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    padding: 2rem 1.5rem 1.5rem;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.balcony-item:hover .balcony-overlay {
    transform: translateY(0);
}

.balcony-overlay h3 {
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
    color: white;
}

.balcony-overlay p {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.8);
    margin: 0;
}

.balcony-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.balcony-feature {
    text-align: center;
    padding: 2rem;
    background: rgba(255,255,255,0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    transition: transform 0.3s ease;
}

.balcony-feature:hover {
    transform: translateY(-3px);
}

.balcony-feature .feature-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    display: block;
}

.balcony-feature h4 {
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
    color: white;
}

.balcony-feature p {
    color: rgba(255,255,255,0.8);
    margin: 0;
}

.balcony-quote {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.balcony-quote blockquote {
    font-size: 1.3rem;
    font-style: italic;
    line-height: 1.6;
    padding: 2rem;
    background: rgba(255,255,255,0.1);
    border-radius: 15px;
    border-left: 4px solid rgba(255,255,255,0.3);
    margin: 0;
    position: relative;
    backdrop-filter: blur(10px);
}

.balcony-quote blockquote::before {
    content: """;
    font-size: 4rem;
    position: absolute;
    top: -10px;
    left: 20px;
    color: rgba(255,255,255,0.3);
}

@media (max-width: 768px) {
    .balcony-gallery {
        grid-template-columns: 1fr;
    }
    
    .balcony-item.main-view {
        grid-row: span 1;
    }
    
    .balcony-features {
        grid-template-columns: 1fr;
    }
    
    .balcony-header h2 {
        font-size: 2rem;
    }
    
    .balcony-header p {
        font-size: 1rem;
    }
    
    .balcony-quote blockquote {
        font-size: 1.1rem;
        padding: 1.5rem;
    }
}

/* Navegação lateral */
.sidebar-nav {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    margin-top: 1rem;
}
.sidebar-nav-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 0.75rem;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-size: 0.85rem;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
}
.sidebar-nav-link:hover {
    background: rgba(255,255,255,0.2);
    color: white;
    transform: translateX(2px);
}
.sidebar-nav-link span {
    font-size: 0.9rem;
}
.hero-sidebar.nav-mode {
    position: fixed;
    top: 0;
    z-index: 1000;
    background: rgba(0,0,0,0.9);
    backdrop-filter: blur(10px);
    border-radius: 0 0 16px 16px;
    border: 1px solid rgba(255,255,255,0.1);
}
.hero-sidebar.nav-mode .nav-content h4 {
    color: white;
    font-size: 1rem;
    margin-bottom: 0.5rem;
}
.hero-sidebar.nav-mode .nav-content {
    display: block !important;
}
.hero-sidebar.nav-mode .hero-content {
    display: none !important;
}
@media (max-width: 768px) {
    .hero-sidebar.nav-mode {
        display: none;
    }
}
';
include 'includes/head.php'; 
?>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section com vídeo e faixas laterais -->
    <section class="hero-video-fullscreen">
        <div class="hero-sidebar hero-sidebar-left" id="leftSidebar">
            <div class="sidebar-content hero-content">
                <div class="sidebar-icon">🏠</div>
                <div class="sidebar-text">
                    <h4>Studio Mobiliado</h4>
                    <p>100% novo e equipado</p>
                </div>
            </div>
            <div class="sidebar-content nav-content" style="display: none;">
                <h4>📋 Detalhes</h4>
                <nav class="sidebar-nav">
                    <a href="#caracteristicas" class="sidebar-nav-link"><span>🏠</span> Características</a>
                    <a href="#cozinha" class="sidebar-nav-link"><span>🍳</span> Cozinha</a>
                    <a href="#trabalho" class="sidebar-nav-link"><span>💻</span> Trabalho</a>
                    <a href="#quarto" class="sidebar-nav-link"><span>🛏️</span> Quarto</a>
                </nav>
            </div>
        </div>
        <div class="hero-center" style="position:relative !important;">
            <video autoplay muted loop playsinline poster="imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg" class="hero-bg-video" id="heroVideo" style="width:100%;height:100%;object-fit:cover;">
                <source src="imagens_apartamento/2025_07_05_Librio1010.mp4" type="video/mp4">
                Seu navegador não suporta vídeo HTML5.
            </video>
            <div class="hero-overlay" id="heroOverlay">
                <a href="index.php">
                    <img src="Logotipo-Librio-Photoroom_so_circulo.png" alt="Librio Vila Mariana" class="hero-logo">
                </a>
                <h1 class="hero-title">Studio Novo – Metrô Ana Rosa & Ibirapuera</h1>
                <p class="hero-subtitle">Curta uma experiência estilosa em um Studio novo com vista, na Vila Mariana, entre o Parque Ibirapuera e a Av. Paulista.</p>
                <button id="assistirVideo" class="btn btn-primary" style="font-size:1.2rem;padding:1rem 2.2rem;margin-top:1.5rem;box-shadow:0 2px 16px rgba(0,0,0,0.10);">▶️ Assista ao vídeo</button>
            </div>
            <button id="muteVideoBtn" class="btn btn-secondary" style="display:none;position:absolute;bottom:80px;right:20px;z-index:1200;font-size:0.9rem;padding:0.5rem 1rem;background:rgba(0,0,0,0.7);border:none;color:white;border-radius:20px;box-shadow:0 2px 8px rgba(0,0,0,0.3);">🔊 Silenciar</button>
            <style>
                @media (max-width: 768px) {
                    #muteVideoBtn {
                        left: 50% !important;
                        right: auto !important;
                        transform: translateX(-50%) !important;
                    }
                }
            </style>
        </div>
        <div class="hero-sidebar hero-sidebar-right" id="rightSidebar">
            <div class="sidebar-content hero-content">
                <div class="sidebar-icon">📍</div>
                <div class="sidebar-text">
                    <h4>Vila Mariana</h4>
                    <p>Localização estratégica</p>
                </div>
            </div>
            <div class="sidebar-content nav-content" style="display: none;">
                <h4>📍 Mais</h4>
                <nav class="sidebar-nav">
                    <a href="#sala" class="sidebar-nav-link"><span>🪑</span> Sala</a>
                    <a href="#banheiro" class="sidebar-nav-link"><span>🚿</span> Banheiro</a>
                    <a href="#sacada" class="sidebar-nav-link"><span>🌅</span> Sacada</a>
                    <a href="#" class="sidebar-nav-link back-to-top"><span>⬆️</span> Topo</a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Destaques com imagens de fundo -->
    <section class="highlights-img">
        <div class="highlights-img-grid">
            <a href="bairro.php" class="highlight-img-card" style="background-image:url('imagens_condominio/fachada01 20250701_104022_sem_id.jpg')">
                <div class="highlight-img-overlay"></div>
                <div class="highlight-img-content">
                    <h3>Localização Estratégica</h3>
                    <p>600m do metrô Ana Rosa, 1km do Ibirapuera, 2km da Paulista</p>
                </div>
            </a>
            <a href="areas-comuns.php" class="highlight-img-card" style="background-image:url('imagens_condominio/rooftop piscina 20250121_112901.jpg')">
                <div class="highlight-img-overlay"></div>
                <div class="highlight-img-content">
                    <h3>Condomínio Completo</h3>
                    <p>Rooftop com piscina, academia, coworking e espaço pet</p>
                </div>
            </a>
            <a href="#trabalho" class="highlight-img-card" style="background-image:url('imagens_arredores/ESPM_Global_Hall-scaled.jpg')">
                <div class="highlight-img-overlay"></div>
                <div class="highlight-img-content">
                    <h3>Ideal para Estudantes</h3>
                    <p>Próximo à UNIFESP, ESPM e outras universidades</p>
                </div>
            </a>
            <a href="#trabalho" class="highlight-img-card" style="background-image:url('imagens_arredores/av_paulista_masp_pexels-beto-mendes-2643157-32423613.jpg')">
                <div class="highlight-img-overlay"></div>
                <div class="highlight-img-content">
                    <h3>Perfeito para Negócios</h3>
                    <p>Escritório compacto e Wi-Fi para trabalho remoto</p>
                </div>
            </a>
            <a href="#quarto" class="highlight-img-card" style="background-image:url('imagens_arredores/Diretoria_da_Escola_Paulista_de_Medicina.jpg')">
                <div class="highlight-img-overlay"></div>
                <div class="highlight-img-content">
                    <h3>Residência Médica</h3>
                    <p>Ideal para residentes da UNIFESP e Hospital São Paulo</p>
                </div>
            </a>
            <a href="#sacada" class="highlight-img-card" style="background-image:url('imagens_apartamento/sacada por do sol 20250530_175422.jpg')">
                <div class="highlight-img-overlay"></div>
                <div class="highlight-img-content">
                    <h3>Vista Incrível</h3>
                    <p>Sacada com pôr-do-sol único da Vila Mariana</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Studio Overview -->
    <section id="studio-overview" class="studio-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-content">
                    <h2>Studio Totalmente Equipado</h2>
                    <p>Nosso studio mobiliado 100% novo oferece tudo que você precisa para uma estadia confortável e produtiva. Localizado em um andar alto com ampla vista, o espaço foi pensado para atender tanto quem busca lazer quanto trabalho.</p>
                    
                    <div class="overview-stats">
                        <div class="stat-item">
                            <span class="stat-number">26</span>
                            <span class="stat-label">Itens Cozinha</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10</span>
                            <span class="stat-label">Itens Sala</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">9</span>
                            <span class="stat-label">Itens Quarto</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Itens Banheiro</span>
                        </div>
                    </div>
                </div>
                <div class="overview-image">
                    <img src="imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg" alt="Vista panorâmica do studio" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="caracteristicas" class="features-section">
        <div class="container">
            <h2 class="section-title">Características Principais</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🛏️</div>
                    <h3>Dormitório</h3>
                    <ul>
                        <li>Cama queen size com colchão de qualidade</li>
                        <li>Roupas de cama e travesseiros novos</li>
                        <li>Armário embutido com cabides</li>
                        <li>Ar-condicionado split</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🍳</div>
                    <h3>Cozinha</h3>
                    <ul>
                        <li>Cooktop de indução</li>
                        <li>Micro-ondas</li>
                        <li>Geladeira duplex Black Glass</li>
                        <li>Máquina de café expresso Nespresso</li>
                        <li>Torneira com água filtrada</li>
                        <li>Utensílios completos</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🚿</div>
                    <h3>Banheiro</h3>
                    <ul>
                        <li>Box de vidro</li>
                        <li>Vaporizador</li>
                        <li>Secador de cabelos</li>
                        <li>Toalhas novas</li>
                        <li>Produtos de higiene</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">💻</div>
                    <h3>Tecnologia</h3>
                    <ul>
                        <li>Smart TV QLED 50"</li>
                        <li>Wi-Fi de alta velocidade</li>
                        <li>Escritório compacto</li>
                        <li>Tomadas USB</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🪑</div>
                    <h3>Mobiliário</h3>
                    <ul>
                        <li>Mesa de jantar para 2 pessoas</li>
                        <li>Sofá confortável</li>
                        <li>Estante para livros</li>
                        <li>Móveis 100% novos</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🌅</div>
                    <h3>Vista e Iluminação</h3>
                    <ul>
                        <li>Andar alto com vista</li>
                        <li>Iluminação natural</li>
                        <li>Sacada privativa</li>
                        <li>Cortinas blackout</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Kitchen Details -->
    <section id="cozinha" class="kitchen-details">
        <div class="container">
            <div class="kitchen-content">
                <div class="kitchen-text">
                    <h2>Cozinha Completa e Funcional</h2>
                    <p>Nossa cozinha foi equipada com tudo que você precisa para preparar suas refeições. Desde o cooktop de indução até os utensílios Tramontina, tudo foi pensado para sua comodidade.</p>
                    
                    <div class="kitchen-features">
                        <div class="kitchen-feature">
                            <span class="feature-icon">🔥</span>
                            <div>
                                <h4>Cooktop de Indução</h4>
                                <p>Seguro e eficiente para suas receitas</p>
                            </div>
                        </div>
                        <div class="kitchen-feature">
                            <span class="feature-icon">🍽️</span>
                            <div>
                                <h4>Utensílios Tramontina</h4>
                                <p>Faqueiro completo e panelas de qualidade</p>
                            </div>
                        </div>
                        <div class="kitchen-feature">
                            <span class="feature-icon">☕</span>
                            <div>
                                <h4>Nespresso</h4>
                                <p>Máquina de café para seu dia começar bem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kitchen-gallery">
                    <img src="imagens_apartamento/20250705_162830_cozinha_microondas_geladeira_armario_pia_cooktop.jpg" alt="Cozinha completa do studio" loading="lazy">
                    <img src="imagens_apartamento/20250705_163405_nespresso_xicaras.jpg" alt="Máquina Nespresso" loading="lazy">
                    <img src="imagens_apartamento/20250705_163100_utensilios-cozinha_luva-termica_escorredor_tabua_guardanapo-de-pia.jpg" alt="Acessórios da cozinha" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Work Station -->
    <section id="trabalho" class="work-station">
        <div class="container">
            <div class="work-content">
                <div class="work-image">
                    <img src="imagens_apartamento/20250705_162817_cadeiras_escritorio_tv_vasos.jpg" alt="Estação de trabalho e Smart TV" loading="lazy">
                </div>
                <div class="work-text">
                    <h2>Estação de Trabalho Completa</h2>
                    <p>Ideal para quem trabalha remotamente ou precisa estudar. Nossa estação de trabalho inclui:</p>
                    
                    <ul class="work-features">
                        <li>✓ Mesa ergonômica com espaço para laptop</li>
                        <li>✓ Cadeira confortável</li>
                        <li>✓ Wi-Fi de alta velocidade</li>
                        <li>✓ Smart TV QLED 50" para apresentações</li>
                        <li>✓ Tomadas próximas para carregadores</li>
                        <li>✓ Iluminação adequada</li>
                    </ul>
                    
                    <p class="work-note">Perfeito para estudantes da UNIFESP, ESPM ou profissionais que precisam de um ambiente produtivo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bedroom Details -->
    <section id="quarto" class="bedroom-details">
        <div class="container">
            <div class="bedroom-content">
                <div class="bedroom-text">
                    <h2>Quarto Confortável</h2>
                    <p>Descanso garantido com uma super cama confortável e todos os detalhes pensados para o seu bem-estar.</p>
                    
                    <div class="bedroom-features">
                        <div class="bedroom-feature">
                            <span class="feature-icon">🛏️</span>
                            <div>
                                <h4>Cama Queen Size</h4>
                                <p>Colchão Castor Revolution New Tecnopedic Double Face de alta qualidade</p>
                            </div>
                        </div>
                        <div class="bedroom-feature">
                            <span class="feature-icon">🔌</span>
                            <div>
                                <h4>Criado-Mudo com Tomadas</h4>
                                <p>Tomadas próximas para carregamento de celulares e dispositivos</p>
                            </div>
                        </div>
                        <div class="bedroom-feature">
                            <span class="feature-icon">💡</span>
                            <div>
                                <h4>Luminárias</h4>
                                <p>Iluminação adequada para leitura e relaxamento</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bedroom-gallery">
                    <img src="imagens_apartamento/20250705_163251_cama.jpg" alt="Cama queen size confortável" loading="lazy">
                    <img src="imagens_apartamento/20250705_162907_cama_janela.jpg" alt="Cama com vista da janela" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Living Area Details -->
    <section id="sala" class="living-details">
        <div class="container">
            <div class="living-content">
                <div class="living-image">
                    <img src="imagens_apartamento/20250705_162802_mesa_pratos_qquadros_espelho_tacas_sofa_canto-alemao.jpg" alt="Mesa de mármore para refeições" loading="lazy">
                </div>
                <div class="living-text">
                    <h2>Sala: Canto Alemão</h2>
                    <p>Área perfeita para refeições íntimas e momentos especiais com nossa mesa de mármore natural.</p>
                    
                    <ul class="living-features">
                        <li>✓ Mesa Tulipa Saarinen 70cm em mármore Espírito Santo</li>
                        <li>✓ Perfeita para refeições a dois</li>
                        <li>✓ Ideal para um café da manhã especial</li>
                        <li>✓ Cadeiras Itália em polipropileno de design</li>
                        <li>✓ Ambiente aconchegante e sofisticado</li>
                        <li>✓ Iluminação natural da sacada</li>
                    </ul>
                    
                    <p class="living-note">O mármore natural traz elegância e sofisticação para suas refeições, criando momentos únicos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bathroom Details -->
    <section id="banheiro" class="bathroom-details">
        <div class="container">
            <h2 class="section-title">Banheiro Completo</h2>
            <div class="bathroom-grid">
                <div class="bathroom-text">
                    <h3>Comodidades do Banheiro</h3>
                    <ul>
                        <li>Box de vidro moderno</li>
                        <li>Vaporizador para roupas</li>
                        <li>Secador de cabelos profissional</li>
                        <li>Toalhas novas e macias</li>
                        <li>Produtos de higiene pessoal</li>
                        <li>Espelho iluminado</li>
                    </ul>
                </div>
                <div class="bathroom-images">
                    <img src="imagens_apartamento/20250705_163203_banheiro_pia.jpg" alt="Banheiro completo" loading="lazy">
                    <img src="imagens_apartamento/20250705_163156_banheiro_amenities.jpg" alt="Amenities do banheiro" loading="lazy">
                    <img src="imagens_apartamento/20250705_163209_banheiro_chuveiro.jpg" alt="Chuveiro do banheiro" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Balcony Views Section -->
    <section id="sacada" class="balcony-views">
        <div class="container">
            <div class="balcony-content">
                <div class="balcony-header">
                    <h2>Sacada com Vista Incrível</h2>
                    <p>Desfrute de momentos únicos na sacada privativa com vista panorâmica da Vila Mariana. Do nascer do sol ao pôr-do-sol, cada momento é especial.</p>
                </div>
                
                <div class="balcony-gallery">
                    <div class="balcony-item main-view">
                        <img src="imagens_apartamento/sacada por do sol 20250530_175422.jpg" alt="Pôr-do-sol da sacada" loading="lazy">
                        <div class="balcony-overlay">
                            <h3>🌅 Pôr-do-Sol Espetacular</h3>
                            <p>Vista única do pôr-do-sol na Vila Mariana</p>
                        </div>
                    </div>
                    
                    <div class="balcony-item">
                        <img src="imagens_apartamento/sacada vista diurna 20250617_155025.jpg" alt="Vista diurna da sacada" loading="lazy">
                        <div class="balcony-overlay">
                            <h3>☀️ Vista Diurna</h3>
                            <p>Luz natural o dia todo</p>
                        </div>
                    </div>
                    
                    <div class="balcony-item">
                        <img src="imagens_apartamento/20250705_162913_vista-ensolarada-da-sacada.jpg" alt="Sacada ensolarada" loading="lazy">
                        <div class="balcony-overlay">
                            <h3>🌞 Sacada Ensolarada</h3>
                            <p>Perfeita para relaxar</p>
                        </div>
                    </div>
                </div>
                
                <div class="balcony-features">
                    <div class="balcony-feature">
                        <span class="feature-icon">🌅</span>
                        <h4>Vista Panorâmica</h4>
                        <p>Aprecie a vista única da Vila Mariana em um andar alto</p>
                    </div>
                    
                    <div class="balcony-feature">
                        <span class="feature-icon">☀️</span>
                        <h4>Luz Natural</h4>
                        <p>Iluminação natural durante todo o dia</p>
                    </div>
                    
                    <div class="balcony-feature">
                        <span class="feature-icon">🌃</span>
                        <h4>Pôr-do-Sol</h4>
                        <p>Momento mágico todos os dias</p>
                    </div>
                    
                    <div class="balcony-feature">
                        <span class="feature-icon">🧘‍♀️</span>
                        <h4>Relaxamento</h4>
                        <p>Espaço perfeito para meditar e relaxar</p>
                    </div>
                </div>
                
                <div class="balcony-quote">
                    <blockquote>
                        "A sacada é o lugar perfeito para tomar o café da manhã, trabalhar com vista ou simplesmente relaxar admirando o pôr-do-sol único da Vila Mariana."
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Pronto para sua próxima estadia?</h2>
                <p>Entre em contato conosco e reserve seu studio na Vila Mariana</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/5511984807772" class="btn btn-whatsapp" target="_blank">
                        <span>📱</span> WhatsApp
                    </a>
                    <a href="https://airbnb.com.br/h/vivavilamariana" class="btn btn-airbnb" target="_blank">
                        <span>🏠</span> Airbnb
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
    
    <!-- JavaScript para navegação lateral -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const leftSidebar = document.getElementById('leftSidebar');
        const rightSidebar = document.getElementById('rightSidebar');
        const heroSection = document.querySelector('.hero-video-fullscreen');
        
        // Função para detectar quando sair do hero
        function handleScroll() {
            const heroHeight = heroSection.offsetHeight;
            const scrollY = window.scrollY;
            
            // Se rolou mais de 50% do hero, ativa navegação
            if (scrollY > heroHeight * 0.5) {
                leftSidebar.classList.add('nav-mode');
                rightSidebar.classList.add('nav-mode');
            } else {
                leftSidebar.classList.remove('nav-mode');
                rightSidebar.classList.remove('nav-mode');
            }
        }
        
        // Smooth scroll para âncoras
        document.querySelectorAll('.sidebar-nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Botão "Topo" especial
                if (this.classList.contains('back-to-top')) {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                    return;
                }
                
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 100; // Compensar header
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Adicionar listener de scroll
        window.addEventListener('scroll', handleScroll);
        
        // Verificar posição inicial
        handleScroll();
    });
    </script>
</body>
</html> 