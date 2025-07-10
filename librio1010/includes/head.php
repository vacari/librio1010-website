<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Studio Librio 1010 - Vila Mariana'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Studio mobiliado na Vila Mariana, São Paulo. Próximo ao metrô Ana Rosa e Parque Ibirapuera.'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'studio mobiliado vila mariana, airbnb são paulo, hospedagem sp'; ?>">
    <meta name="author" content="Viva Vila Mariana">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://vivavilamariana.com.br' . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/librio1010/'); ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Studio Librio 1010 - Vila Mariana'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Studio mobiliado na Vila Mariana, São Paulo. Próximo ao metrô Ana Rosa e Parque Ibirapuera.'; ?>">
    <meta property="og:image" content="<?php echo isset($pageImage) ? $pageImage : 'https://vivavilamariana.com.br/librio1010/imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg'; ?>">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="Studio mobiliado Vila Mariana - Quarto com mesa, sofá e janela">
    <meta property="og:site_name" content="Librio 1010 - Studio Vila Mariana">
    <meta property="og:locale" content="pt_BR">
    
    <!-- WhatsApp specific -->
    <meta property="og:updated_time" content="<?php echo date('c'); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo 'https://vivavilamariana.com.br' . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/librio1010/'); ?>">
    <meta property="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Studio Librio 1010 - Vila Mariana'; ?>">
    <meta property="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Studio mobiliado na Vila Mariana, São Paulo. Próximo ao metrô Ana Rosa e Parque Ibirapuera.'; ?>">
    <meta property="twitter:image" content="<?php echo isset($pageImage) ? $pageImage : 'https://vivavilamariana.com.br/librio1010/imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Logotipo-Librio.jpg">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <?php if (isset($customCSS)): ?>
    <style>
        <?php echo $customCSS; ?>
    </style>
    <?php endif; ?>

    <?php if (isset($currentPage) && $currentPage === 'index'): ?>
    <!-- Schema Markup para página inicial -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LodgingBusiness",
        "name": "Studio Librio 1010",
        "description": "Studio mobiliado novo na Vila Mariana, São Paulo",
        "url": "https://vivavilamariana.com.br/librio1010",
        "telephone": "+5511984807272",
        "email": "librio1010@gmail.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Rua Joaquim Távora",
            "addressLocality": "Vila Mariana",
            "addressRegion": "SP",
            "postalCode": "04015-011",
            "addressCountry": "BR"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-23.5897",
            "longitude": "-46.6394"
        },
        "amenityFeature": [
            {
                "@type": "LocationFeatureSpecification",
                "name": "Wi-Fi",
                "value": true
            },
            {
                "@type": "LocationFeatureSpecification", 
                "name": "Ar-condicionado",
                "value": true
            },
            {
                "@type": "LocationFeatureSpecification",
                "name": "Cozinha completa",
                "value": true
            },
            {
                "@type": "LocationFeatureSpecification",
                "name": "Smart TV",
                "value": true
            }
        ],
        "image": "https://vivavilamariana.com.br/librio1010/imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg",
        "priceRange": "$$"
    }
    </script>
    <?php elseif (isset($currentPage) && $currentPage === 'detalhes'): ?>
    <!-- Schema Markup para página de detalhes -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Studio Librio 1010",
        "description": "Studio mobiliado novo na Vila Mariana com todas as comodidades",
        "category": "Hospedagem",
        "brand": {
            "@type": "Brand",
            "name": "Librio"
        },
        "offers": {
            "@type": "Offer",
            "availability": "https://schema.org/InStock",
            "priceCurrency": "BRL"
        },
        "image": "https://vivavilamariana.com.br/librio1010/imagens_apartamento/20250705_162901_panoramica_quarto_mesa_sofa_janela.jpg"
    }
    </script>
    <?php endif; ?> 