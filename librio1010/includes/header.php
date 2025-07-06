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
                    <li><a href="index.php" class="nav-link<?php echo ($current_page == 'index') ? ' active' : ''; ?>">Home</a></li>
                    <li><a href="detalhes.php" class="nav-link<?php echo ($current_page == 'detalhes') ? ' active' : ''; ?>">Detalhes</a></li>
                    <li><a href="itens-equipamentos.php" class="nav-link<?php echo ($current_page == 'itens-equipamentos') ? ' active' : ''; ?>">Equipamentos</a></li>
                    <li><a href="galeria.php" class="nav-link<?php echo ($current_page == 'galeria') ? ' active' : ''; ?>">Galeria</a></li>
                    <li><a href="areas-comuns.php" class="nav-link<?php echo ($current_page == 'areas-comuns') ? ' active' : ''; ?>">Áreas Comuns</a></li>
                    <li><a href="bairro.php" class="nav-link<?php echo ($current_page == 'bairro') ? ' active' : ''; ?>">O Bairro</a></li>
                    <li><a href="contato.php" class="nav-link<?php echo ($current_page == 'contato') ? ' active' : ''; ?>">Contato</a></li>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header> 