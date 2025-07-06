<?php 
$pageTitle = "Itens e Equipamentos - Studio Librio 1010";
$pageDescription = "Inventário completo dos itens, equipamentos e utensílios do Studio Librio 1010. Veja tudo que está incluso para sua estadia.";
$pageKeywords = "equipamentos, itens, inventário, utensílios, cozinha, banheiro, quarto, studio, librio 1010";
$pageImage = "assets/images/Logotipo-Librio.jpg";
$currentPage = "equipamentos";
$customCSS = '
.inventory-section {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    margin-top: 2.5rem;
}
.inventory-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 2px 16px rgba(0,0,0,0.07);
    padding: 2rem 2rem 1.5rem 2rem;
    max-width: 350px;
    min-width: 260px;
    flex: 1 1 300px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.inventory-icon {
    font-size: 2.2rem;
    margin-bottom: 0.7rem;
}
.inventory-card h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--accent-color, #FF385C);
}
.inventory-card ul {
    padding-left: 1.2rem;
    margin-bottom: 0;
}
.inventory-card li {
    margin-bottom: 0.5rem;
    color: #444;
    font-size: 1.05rem;
}
@media (max-width: 900px) {
    .inventory-section { flex-direction: column; align-items: center; }
    .inventory-card { max-width: 100%; width: 100%; }
}
';
include 'includes/head.php'; 
?>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="page-header">
        <div class="container">
            <h1>Itens e Equipamentos</h1>
            <p>Inventário completo do Studio Librio 1010: veja tudo que está incluso para sua estadia confortável e prática.</p>
        </div>
    </section>
    
    <section class="features-section">
        <div class="container">
            <div class="inventory-section">
                <div class="inventory-card">
                    <div class="inventory-icon">🛋️</div>
                    <h3>Sala / Jantar / Estar</h3>
                    <ul>
                        <li>2 Cadeiras de jantar Itália em polipropileno preto</li>
                        <li>Mesa de jantar Tulipa Saarinen 70cm Mármore Espírito Santo</li>
                        <li>Kit 9 peças enfeites para rack, sala, mesa – vasinhos decorativos foscos</li>
                        <li>2 Jogos americanos</li>
                        <li>2 Quadros decorativos abstrato geométrico preto e cinza com vidro</li>
                        <li>Display expositor acrílico L A4 (30x21cm) vertical</li>
                        <li>TV 50" 4K QLED TCL 50C655</li>
                        <li>Suporte organizador p/ xícaras de café, chá e pires Arthi Black 2463 preto</li>
                        <li>Antena digital TV interna amplificada UHF/HDTV AI 3101 – Intelbras</li>
                        <li>Ar-condicionado Split Hi Wall Inverter Daikin EcoSwing Gold 12.000 BTUs R-32 quente e frio 220V</li>
                    </ul>
                </div>
                <div class="inventory-card">
                    <div class="inventory-icon">🍽️</div>
                    <h3>Cozinha</h3>
                    <ul>
                        <li>Aparelho de jantar e chá 10 peças Biona cerâmica bege e preto</li>
                        <li>2 Taças</li>
                        <li>Conjunto 3 copos 300ml Oca Nadir</li>
                        <li>Jogo 3 xícaras com pires de café expresso porcelana 80ml branco</li>
                        <li>Jogo talheres faqueiro Búzios 12 peças inox Tramontina</li>
                        <li>Jogo panelas 5 peças aço vítreo preto cerâmica p/ indução JJB/Sensação</li>
                        <li>Jogo de utensílios Tramontina Ability em nylon preto – 5 peças</li>
                        <li>Escorredor com tapete Coza (42,2 x 17,4 x 9,4cm) preto</li>
                        <li>Escorredor tradicional preto – Nitron</li>
                        <li>Cooktop de indução 2 bocas Gallant – vitrocerâmico, touch, preto 220V GCT02VINA-PT220</li>
                        <li>Micro-ondas Panasonic NN-ST66NBRU Black Glass 34L – dupla refeição</li>
                        <li>Geladeira Panasonic Frost Free 397L A+++ Black Glass NR-BB41GV1B</li>
                        <li>Porta papel toalha multiuso ferro – suporte parede</li>
                        <li>Porta amenities em acrílico</li>
                        <li>Organizador de talheres</li>
                        <li>Organizador de pia porta esponja, bucha e detergente – marca OU</li>
                        <li>Abridor de lata e garrafa</li>
                        <li>Abridor e saca-rolhas metal</li>
                        <li>Tigela de vidro com tampa 350ml redonda Nadir + Americana</li>
                        <li>Tigela de vidro com tampa 600ml redonda Nadir + Americana</li>
                        <li>Mor – tábua retangular bamboo 30x20cm</li>
                        <li>Mor – luva térmica de silicone manga longa vermelha</li>
                        <li>Caixa organizadora multiuso – cozinha, banheiro, escritório – Plastutti</li>
                        <li>Capacho Bem-vindo retangular PVC/vinil cinza 0,4x0,6m Euro Mats</li>
                        <li>Cafeteira Nespresso Essenza Mini preta – C30-BR</li>
                        <li>Purificador de água FIT230 branco – 9.3/4", rosca 3/4</li>
                    </ul>
                </div>
                <div class="inventory-card">
                    <div class="inventory-icon">🛏️</div>
                    <h3>Quarto</h3>
                    <ul>
                        <li>Cama baú box queen size</li>
                        <li>Colchão Queen Castor Revolution New Tecnopedic Double Face 158x198x30</li>
                        <li>Protetor para colchão impermeável Ortobom queen 1,60x2,00m</li>
                        <li>2 Mesas de cabeceira Mudo Charme retrô acabamento brilhante</li>
                        <li>Conjunto de lençol queen 4 peças percal 200 fios 100% algodão ponto palito</li>
                        <li>Edredom queen percal 200 fios liso dupla face 100% algodão matelado branco</li>
                        <li>Edredom/cobertor Sherpa queen cinza – grosso e macio</li>
                        <li>2 Travesseiros 100% algodão 200 fios (70x50cm)</li>
                        <li>6 Cabides de madeira</li>
                    </ul>
                </div>
                <div class="inventory-card">
                    <div class="inventory-icon">🛁</div>
                    <h3>Banheiro</h3>
                    <ul>
                        <li>Assento sanitário slow close + easy clean p/ bacias Izy e Ravena – Deca branco</li>
                        <li>Ducha Acqua Star Ultra 220V 7800W – Lorenzetti preto</li>
                        <li>Secador para banheiro quente e frio – fixo parede, branco</li>
                        <li>Kit acessórios banheiro luxo inox fosco preto – 4 peças (toalheiro 60cm etc.)</li>
                        <li>Kit banheiro lixeira + porta escova – 4 peças tampa bambu</li>
                        <li>Tapete de banheiro antiderrapante "Bathroom"</li>
                        <li>Porta papel higiênico duplo metal preto</li>
                        <li>Suporte porta shampoo, condicionador e bucha – adesivo 3M Arthi</li>
                    </ul>
                </div>
                <div class="inventory-card">
                    <div class="inventory-icon">🧹</div>
                    <h3>Lavanderia / Limpeza</h3>
                    <ul>
                        <li>Kit limpeza Noviça BT003K – 5 peças</li>
                        <li>Passadeira a vapor portátil Fast Steam Mondial VP-09 (1500W) branco/azul</li>
                        <li>Extensão elétrica 5 metros – bivolt, 3 saídas, preto</li>
                    </ul>
                </div>
                <div class="inventory-card">
                    <div class="inventory-icon">🔒</div>
                    <h3>Tecnologia e Segurança</h3>
                    <ul>
                        <li>Fechadura eletrônica digital com biometria, senha e Wi-Fi – Kuanttum Delta Pro Tuya</li>
                    </ul>
                </div>
            </div>
            <div class="info-content" style="margin-top:2rem;">
                <a href="index.php" class="btn btn-secondary" style="margin-top:1.5rem;">🔙 Voltar à página principal</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html> 