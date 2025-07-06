    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="index.php">
                        <img src="Logotipo-Librio-Photoroom_so_circulo.png" alt="Librio Vila Mariana" style="height:60px;vertical-align:middle;">
                    </a>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php" class="nav-link<?php echo (isset($currentPage) && $currentPage == 'index') ? ' active' : ''; ?>">Home</a></li>
                    <li><a href="itens-equipamentos.php" class="nav-link<?php echo (isset($currentPage) && $currentPage == 'itens-equipamentos') ? ' active' : ''; ?>">Equipamentos</a></li>
                    <li><a href="galeria.php" class="nav-link<?php echo (isset($currentPage) && $currentPage == 'galeria') ? ' active' : ''; ?>">Galeria</a></li>
                    <li><a href="areas-comuns.php" class="nav-link<?php echo (isset($currentPage) && $currentPage == 'areas-comuns') ? ' active' : ''; ?>">Áreas Comuns</a></li>
                    <li><a href="bairro.php" class="nav-link<?php echo (isset($currentPage) && $currentPage == 'bairro') ? ' active' : ''; ?>">O Bairro</a></li>
                    <li><a href="contato.php" class="nav-link<?php echo (isset($currentPage) && $currentPage == 'contato') ? ' active' : ''; ?>">Contato</a></li>
                    <?php if (isset($currentPage) && $currentPage == 'index'): ?>
                    <li><a href="#sacada" class="nav-link">Vista</a></li>
                    <?php endif; ?>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header> 