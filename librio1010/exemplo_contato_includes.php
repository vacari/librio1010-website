<?php
// Configuração da página
$current_page = 'contato';
$page_title = 'Contato - Studio Librio 1010 | Vila Mariana, SP';
$page_description = 'Entre em contato conosco e conheça o Studio Librio 1010 na Vila Mariana. Localização privilegiada na Rua Joaquim Távora.';
$page_keywords = 'contato librio 1010, localização vila mariana, rua joaquim tavora, studio vila mariana';
$og_image = 'imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg';

// Scripts necessários
$include_modal = false;
$include_gallery = false;

// Scripts customizados da página
$custom_scripts = '
<script>
// Form handling
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    const name = formData.get("name");
    const email = formData.get("email");
    const phone = formData.get("phone");
    const subject = formData.get("subject");
    const message = formData.get("message");
    
    // Create WhatsApp message
    const whatsappMessage = `Olá! Gostaria de mais informações sobre o Studio Librio 1010.

Nome: ${name}
E-mail: ${email}
Telefone: ${phone}
Assunto: ${subject}
Mensagem: ${message}`;
    
    // Encode message for WhatsApp
    const encodedMessage = encodeURIComponent(whatsappMessage);
    const whatsappUrl = `https://wa.me/5511984807772?text=${encodedMessage}`;
    
    // Open WhatsApp
    window.open(whatsappUrl, "_blank");
    
    // Reset form
    this.reset();
    
    // Show success message
    alert("Mensagem enviada! Redirecionando para o WhatsApp...");
});
</script>';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'includes/head.php'; ?>
    
    <!-- CSS específico da página de contato -->
    <style>
        .contact-section {
            padding: 4rem 0;
            background-color: var(--background-color);
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        /* ... resto do CSS específico ... */
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contato</h1>
            <p>Entre em contato conosco e conheça o Studio Librio 1010</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Informações de Contato</h2>
                    
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <div class="contact-text">
                            <h4>Endereço</h4>
                            <p>Rua Joaquim Távora<br>Vila Mariana, São Paulo - SP<br>CEP: 04015-001</p>
                        </div>
                    </div>
                    
                    <!-- Mais itens de contato... -->
                    
                </div>
                
                <div class="contact-form">
                    <h2>Envie uma Mensagem</h2>
                    <form action="#" method="POST" id="contactForm">
                        <!-- Campos do formulário... -->
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <!-- Conteúdo do mapa... -->
    </section>

    <!-- Quick Contact -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Reserve Agora</h2>
                <p>Entre em contato e garanta sua estadia no Studio Librio 1010</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/5511984807772" class="btn btn-whatsapp" target="_blank">
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
    <?php include 'includes/scripts.php'; ?>
</body>
</html> 