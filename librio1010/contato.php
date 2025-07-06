<!DOCTYPE html>
<html lang="pt-BR">
<?php 
$pageTitle = "Contato - Studio Librio 1010 | Vila Mariana, SP";
$pageDescription = "Entre em contato conosco e conheça o Studio Librio 1010 na Vila Mariana. Localização privilegiada na Rua Joaquim Távora.";
$pageKeywords = "contato librio 1010, localização vila mariana, rua joaquim tavora, studio vila mariana";
$pageImage = "https://vivavilamariana.com.br/librio1010/imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg";
$currentPage = "contato";
$customCSS = '
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
    
    .contact-info h2 {
        margin-bottom: 2rem;
        color: var(--text-color);
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background-color: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
    }
    
    .contact-icon {
        font-size: 2rem;
        margin-right: 1rem;
        color: var(--accent-color);
    }
    
    .contact-text h4 {
        margin-bottom: 0.5rem;
        color: var(--text-color);
    }
    
    .contact-text p {
        color: var(--text-light);
        margin: 0;
    }
    
    .contact-form {
        background-color: white;
        padding: 2rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-color);
        font-weight: 500;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--border-color);
        border-radius: var(--border-radius);
        font-size: 1rem;
        transition: var(--transition);
    }
    
    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: var(--accent-color);
        box-shadow: 0 0 0 3px rgba(227, 28, 95, 0.1);
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }
    
    .map-section {
        padding: 4rem 0;
        background-color: var(--light-gray);
    }
    
    .map-container {
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        height: 400px;
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    .location-info {
        margin-top: 2rem;
        text-align: center;
    }
    
    .location-info h3 {
        margin-bottom: 1rem;
        color: var(--text-color);
    }
    
    .location-info p {
        color: var(--text-light);
        margin-bottom: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .map-container {
            height: 300px;
        }
    }
';
include 'includes/head.php'; 
?>
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
                    
                    <div class="contact-item">
                        <span class="contact-icon">📱</span>
                        <div class="contact-text">
                            <h4>WhatsApp</h4>
                            <p>(11) 98480-7272</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <span class="contact-icon">📧</span>
                        <div class="contact-text">
                            <h4>E-mail</h4>
                            <p>librio1010@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <span class="contact-icon">🏠</span>
                        <div class="contact-text">
                            <h4>Airbnb</h4>
                            <p>vivavilamariana</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <span class="contact-icon">📷</span>
                        <div class="contact-text">
                            <h4>Instagram</h4>
                            <p>@vivavilamariana</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <span class="contact-icon">🕐</span>
                        <div class="contact-text">
                            <h4>Horário de Atendimento</h4>
                            <p>Segunda a Domingo<br>8h às 22h</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Envie uma Mensagem</h2>
                    <form action="#" method="POST" id="contactForm">
                        <div class="form-group">
                            <label for="name">Nome Completo *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Assunto</label>
                            <select id="subject" name="subject">
                                <option value="">Selecione um assunto</option>
                                <option value="reserva">Reserva</option>
                                <option value="visita">Agendar Visita</option>
                                <option value="duvida">Dúvida</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Mensagem *</label>
                            <textarea id="message" name="message" placeholder="Digite sua mensagem..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Localização</h2>
            
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1234567890123!2d-46.6345678!3d-23.5890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a3b3b3b3b3b%3A0x3b3b3b3b3b3b3b3b!2sRua%20Joaquim%20T%C3%A1vora%20-%20Vila%20Mariana%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004015-001!5e0!3m2!1spt-BR!2sbr!4v1234567890123"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div class="location-info">
                <h3>Como Chegar</h3>
                <p><strong>Metrô:</strong> Estação Ana Rosa (Linhas Azul e Verde) - 600m a pé</p>
                <p><strong>Ônibus:</strong> Terminal de ônibus na estação Ana Rosa com muitas linhas</p>
                <p><strong>Carro:</strong> Fácil acesso pelo Corredor Norte-Sul (Av. 23 de Maio), Rua Vergueiro e Rua Domingos de Morais</p>
                <p><strong>Uber/99:</strong> Localização exata: Rua Joaquim Távora</p>
            </div>
        </div>
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
    
    <script>
        // Form handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const subject = formData.get('subject');
            const message = formData.get('message');
            
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
            window.open(whatsappUrl, '_blank');
            
            // Reset form
            this.reset();
            
            // Show success message
            alert('Mensagem enviada! Redirecionando para o WhatsApp...');
        });
    </script>
</body>
</html> 