<!DOCTYPE html>
<html lang="pt-BR">
<?php 
$pageTitle = "Studio Librio 1010 – Viva Vila Mariana";
$pageDescription = "Studio estiloso e novo com vista, na Vila Mariana, entre o Parque Ibirapuera e a Av. Paulista.";
$pageKeywords = "studio mobiliado vila mariana, fotos detalhes apartamento, hospedagem próxima UNIFESP, aluguel temporário vila mariana, short stay paulista ibirapuera, airbnb perto metrô ana rosa, apartamento mobiliado SP congressos, moradia residência médica SP, características completas studio";
$pageImage = "https://vivavilamariana.com.br/librio1010/imagens_apartamento/panoramica_scraping.jpg";
$currentPage = "home";
$include_modal = true;
$customCSS = '
/* Estrutura padrão para todas as seções */
.section-content {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    margin-bottom: 3rem;
}

/* Layout horizontal para desktop */
@media (min-width: 1024px) {
    .section-content {
        flex-direction: row;
        align-items: center;
        gap: 4rem;
    }
    
    .section-image {
        flex: 0 0 40%;
    }
    
    .section-text {
        flex: 1;
        text-align: left;
    }
    
    .section-text h2 {
        text-align: left;
    }
    
    /* Seções com imagem à direita (padrão) */
    .section-content {
        flex-direction: row;
    }
    
    /* Seções com imagem à esquerda */
    .section-content.reverse {
        flex-direction: row-reverse;
    }
}

.section-image {
    width: 100%;
    max-width: 88vh;
    max-height: 88vh;
    margin: 0 auto;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    aspect-ratio: 1/1;
}

    .section-image img {
        width: 100%;
        aspect-ratio: 1/1;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
        max-height: 88vh;
        max-width: 88vh;
        margin: 0 auto;
    }

.section-image:hover img {
    transform: scale(1.02);
}

.section-text {
    text-align: center;
}

.section-text h2 {
    font-size: 2.2rem;
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: 700;
}

.section-text p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
    margin-bottom: 2rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.section-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.feature-item {
    text-align: center;
    padding: 1.5rem;
    border-radius: 12px;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    border-color: #ddd;
}

.feature-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    display: block;
}

.feature-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #e74c3c;
    margin-bottom: 0.5rem;
    display: block;
}

.feature-label {
    font-size: 0.9rem;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.feature-item h4 {
    font-size: 1.3rem;
    margin-bottom: 0.8rem;
    color: #2c3e50;
    font-weight: 600;
}

.feature-item p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.5;
    margin: 0;
}

    /* Espaçamento entre seções */
    .studio-overview,
    .features-section,
    .kitchen-details,
    .work-station,
    .bedroom-details,
    .living-details,
    .bathroom-details,
    .balcony-views {
        padding: 4rem 0;
    }
    
    /* Alternância de cores de fundo */
    .studio-overview { background: #fff !important; }
    .features-section { background: #f5f3f0 !important; }
    .kitchen-details { background: #fff !important; }
    .work-station { background: #f5f3f0 !important; }
    .bedroom-details { background: #fff !important; }
    .living-details { background: #f5f3f0 !important; }
    .bathroom-details { background: #fff !important; }
    .balcony-views { background: #f5f3f0 !important; }

    /* Responsividade Mobile */
    @media (max-width: 768px) {
        .section-content {
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        /* Imagens quadradas também no mobile */
        .section-image {
            max-width: 70vw;
            max-height: 70vw;
        }
        
        .section-image img {
            aspect-ratio: 1/1;
            max-height: 70vw;
            max-width: 70vw;
        }
        
        .section-text h2 {
            font-size: 1.8rem;
        }
        
        .section-text p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .section-features {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .feature-item {
            padding: 1.2rem;
        }
        
        .feature-icon {
            font-size: 2rem;
        }
        
        .feature-number {
            font-size: 2rem;
        }
        
        .feature-item h4 {
            font-size: 1.1rem;
        }
        
        .studio-overview,
        .features-section,
        .kitchen-details,
        .work-station,
        .bedroom-details,
        .living-details,
        .bathroom-details,
        .balcony-views {
            padding: 2.5rem 0;
        }
    }

    @media (max-width: 1024px) and (min-width: 769px) {
        .section-image {
            max-width: 70vh;
            max-height: 70vh;
        }
        
        .section-image img {
            max-height: 70vh;
            max-width: 70vh;
        }
    }
    
    @media (max-width: 480px) {
        .section-image {
            max-width: 80vw;
            max-height: 80vw;
        }
        
        .section-image img {
            max-height: 80vw;
            max-width: 80vw;
            aspect-ratio: 1/1;
        }
        
        .section-text h2 {
            font-size: 1.5rem;
        }
        
        .section-features {
            grid-template-columns: 1fr;
        }
        
        .feature-item {
            padding: 1rem;
        }
        
        .feature-icon {
            font-size: 1.8rem;
        }
        
        .feature-number {
            font-size: 1.8rem;
        }
    }





.cta {
    background: #ffffff !important;
}
';

$custom_scripts = '
<script>
document.addEventListener("DOMContentLoaded", function() {
    const assistirBtn = document.getElementById("assistirVideo");
    const muteBtn = document.getElementById("muteVideoBtn");
    const video = document.getElementById("heroVideo");
    const overlay = document.getElementById("heroOverlay");
    
    if (assistirBtn && video && muteBtn && overlay) {
        // Habilitar som ao clicar no botão principal
        assistirBtn.addEventListener("click", function() {
            video.muted = false;
            video.play();
            
            // ESTADO 2: Som ligado
            overlay.style.display = "none";
            muteBtn.style.display = "block";
            muteBtn.innerHTML = "🔊 Silenciar";
            muteBtn.style.background = "rgba(0,0,0,0.7)";
        });
        
        // Alternar entre os 2 estados
        muteBtn.addEventListener("click", function() {
            // Sempre volta ao ESTADO 1: overlay + botão rosa
            video.muted = true;
            overlay.style.display = "flex";
            this.style.display = "none";
        });
        
        // Tecla M para alternar som
        document.addEventListener("keydown", function(e) {
            if (e.key.toLowerCase() === "m" && muteBtn.style.display !== "none") {
                muteBtn.click();
            }
        });
    }
});
</script>
';

include 'includes/head.php'; 
?>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section com vídeo e faixas laterais -->
    <section class="hero-video-fullscreen">
        <div class="hero-sidebar hero-sidebar-left">
            <div class="sidebar-content">
                <div class="sidebar-icon">🏠</div>
                <div class="sidebar-text">
                    <h4>Studio Mobiliado</h4>
                    <p>100% novo e equipado</p>
                </div>
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
        <div class="hero-sidebar hero-sidebar-right">
            <div class="sidebar-content">
                <div class="sidebar-icon">📍</div>
                <div class="sidebar-text">
                    <h4>Vila Mariana</h4>
                    <p>Localização estratégica</p>
                </div>
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
            <div class="section-content">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg" alt="Vista panorâmica do studio" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Studio Totalmente Equipado</h2>
                    <p>Nosso studio mobiliado 100% novo oferece tudo que você precisa para uma estadia confortável e produtiva. Localizado em um andar alto com ampla vista, o espaço foi pensado para atender tanto quem busca lazer quanto trabalho.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-number">26</span>
                            <span class="feature-label">Itens Cozinha</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-number">10</span>
                            <span class="feature-label">Itens Sala</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-number">9</span>
                            <span class="feature-label">Itens Quarto</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-number">8</span>
                            <span class="feature-label">Itens Banheiro</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="caracteristicas" class="features-section">
        <div class="container">
            <div class="section-content reverse">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_162850_visao-geral_moveis_cozinha_estacao-trabalho_guarda-roupas_.jpg" alt="Visão geral do studio mobiliado" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Características Principais</h2>
                    <p>Cada detalhe foi pensado para sua comodidade. Do dormitório com cama queen size até a cozinha completa com utensílios Tramontina.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">🛏️</span>
                            <h4>Dormitório Completo</h4>
                            <p>Cama queen size, roupas de cama novas, ar-condicionado</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🍳</span>
                            <h4>Cozinha Equipada</h4>
                            <p>Cooktop indução, Nespresso, utensílios Tramontina</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">💻</span>
                            <h4>Trabalho & Estudo</h4>
                            <p>Smart TV 50", Wi-Fi rápido, escritório compacto</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🌅</span>
                            <h4>Vista & Conforto</h4>
                            <p>Andar alto, sacada privativa, iluminação natural</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kitchen Details -->
    <section id="cozinha" class="kitchen-details">
        <div class="container">
            <div class="section-content">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_162830_cozinha_microondas_geladeira_armario_pia_cooktop.jpg" alt="Cozinha completa do studio" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Cozinha Completa e Funcional</h2>
                    <p>Nossa cozinha foi equipada com tudo que você precisa para preparar suas refeições. Desde o cooktop de indução até os utensílios Tramontina, tudo foi pensado para sua comodidade.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">🔥</span>
                            <h4>Cooktop de Indução</h4>
                            <p>Seguro e eficiente para suas receitas</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🍽️</span>
                            <h4>Utensílios Tramontina</h4>
                            <p>Faqueiro completo e panelas de qualidade</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">☕</span>
                            <h4>Máquina Nespresso</h4>
                            <p>Café expresso para seu dia começar bem</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">💧</span>
                            <h4>Água Filtrada</h4>
                            <p>Purificador integrado na torneira</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Station -->
    <section id="trabalho" class="work-station">
        <div class="container">
            <div class="section-content reverse">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_162817_cadeiras_escritorio_tv_vasos.jpg" alt="Estação de trabalho e Smart TV" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Estação de Trabalho Completa</h2>
                    <p>Ideal para quem trabalha remotamente ou precisa estudar. Nossa estação de trabalho inclui tudo que você precisa para ser produtivo.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">💻</span>
                            <h4>Mesa Ergonômica</h4>
                            <p>Espaço para laptop e documentos</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">📺</span>
                            <h4>Smart TV QLED 50"</h4>
                            <p>Para apresentações e entretenimento</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">📶</span>
                            <h4>Wi-Fi Alta Velocidade</h4>
                            <p>Internet rápida para videoconferências</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🔌</span>
                            <h4>Tomadas Próximas</h4>
                            <p>Carregadores sempre ao alcance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bedroom Details -->
    <section id="quarto" class="bedroom-details">
        <div class="container">
            <div class="section-content">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_163251_cama.jpg" alt="Cama queen size confortável" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Quarto Confortável</h2>
                    <p>Descanso garantido com uma super cama confortável e todos os detalhes pensados para o seu bem-estar.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">🛏️</span>
                            <h4>Cama Queen Size</h4>
                            <p>Colchão Castor Revolution New de alta qualidade</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🔌</span>
                            <h4>Criado-Mudo com Tomadas</h4>
                            <p>Carregamento de celulares e dispositivos</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">💡</span>
                            <h4>Iluminação Adequada</h4>
                            <p>Luminárias para leitura e relaxamento</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">❄️</span>
                            <h4>Ar-Condicionado</h4>
                            <p>Temperatura perfeita o ano todo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Living Area Details -->
    <section id="sala" class="living-details">
        <div class="container">
            <div class="section-content reverse">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_162802_mesa_pratos_qquadros_espelho_tacas_sofa_canto-alemao.jpg" alt="Mesa de mármore para refeições" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Sala: Canto Alemão</h2>
                    <p>Área perfeita para refeições íntimas e momentos especiais com nossa mesa de mármore natural Espírito Santo.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">🪨</span>
                            <h4>Mesa Tulipa Saarinen</h4>
                            <p>70cm em mármore Espírito Santo natural</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🪑</span>
                            <h4>Cadeiras de Design</h4>
                            <p>Cadeiras Itália em polipropileno preto</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">☕</span>
                            <h4>Café da Manhã Especial</h4>
                            <p>Ambiente perfeito para refeições a dois</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🌅</span>
                            <h4>Iluminação Natural</h4>
                            <p>Luz natural vinda da sacada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bathroom Details -->
    <section id="banheiro" class="bathroom-details">
        <div class="container">
            <div class="section-content">
                <div class="section-image">
                    <img src="imagens_apartamento/20250705_163203_banheiro_pia.jpg" alt="Banheiro completo" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Banheiro Completo</h2>
                    <p>Banheiro moderno e funcional com todos os amenities e acessórios para seu conforto e praticidade.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">🚿</span>
                            <h4>Box de Vidro</h4>
                            <p>Box moderno com chuveiro elétrico</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">💨</span>
                            <h4>Secador Profissional</h4>
                            <p>Secador fixo na parede</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🧴</span>
                            <h4>Amenities Completos</h4>
                            <p>Produtos de higiene e toalhas novas</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">👔</span>
                            <h4>Vaporizador</h4>
                            <p>Para roupas sem amarrotar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Balcony Views Section -->
    <section id="sacada" class="balcony-views">
        <div class="container">
            <div class="section-content reverse">
                <div class="section-image">
                    <img src="imagens_apartamento/sacada por do sol 20250530_175422.jpg" alt="Pôr-do-sol da sacada" loading="lazy">
                </div>
                <div class="section-text">
                    <h2>Sacada com Vista Incrível</h2>
                    <p>Desfrute de momentos únicos na sacada privativa com vista panorâmica da Vila Mariana. Do nascer do sol ao pôr-do-sol, cada momento é especial.</p>
                    
                    <div class="section-features">
                        <div class="feature-item">
                            <span class="feature-icon">🌅</span>
                            <h4>Vista Panorâmica</h4>
                            <p>Aprecie a vista única da Vila Mariana em um andar alto</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">☀️</span>
                            <h4>Luz Natural</h4>
                            <p>Iluminação natural durante todo o dia</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🌃</span>
                            <h4>Pôr-do-Sol</h4>
                            <p>Momento mágico todos os dias</p>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🧘‍♀️</span>
                            <h4>Relaxamento</h4>
                            <p>Espaço perfeito para meditar e relaxar</p>
                        </div>
                    </div>
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
                    <a href="https://wa.me/5511984807272" class="btn btn-whatsapp" target="_blank">
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
    <?php include 'includes/modal.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html> 