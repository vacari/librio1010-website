    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Librio 1010</h3>
                    <p>Studio mobiliado na Vila Mariana<br>Rua Joaquim Távora</p>
                </div>
                <div class="footer-section">
                    <h3>Contato</h3>
                    <p>📧 librio1010@gmail.com<br>📱 (11) 98480-7272</p>
                </div>
                <div class="footer-section">
                    <h3>Redes Sociais</h3>
                    <div class="social-links">
                        <a href="https://www.instagram.com/vivavilamariana/" target="_blank">📷 Instagram</a>
                        <a href="https://airbnb.com.br/h/vivavilamariana" target="_blank">🏠 Airbnb</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Downloads</h3>
                    <div class="download-links">
                        <a href="imagens_apartamento/2025_Flyer_Librio.jpg" target="_blank" download>📄 Baixe o Flyer do Studio</a>
                        <a href="https://wa.me/?text=Conheça o Studio Librio 1010 na Vila Mariana! https://vivavilamariana.com.br/librio1010/" target="_blank">📱 Compartilhar no WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Viva Vila Mariana. Todos os direitos reservados.</p>
                <?php 
                if (file_exists('../versao.php')) {
                    include '../versao.php';
                } elseif (file_exists('../../versao.php')) {
                    include '../../versao.php';
                }
                ?>
                <p style="font-size:0.8rem;color:#666;margin-top:0.5rem;">
                    Versão: <?php echo getVersao(); ?>
                </p>
            </div>
        </div>
    </footer> 