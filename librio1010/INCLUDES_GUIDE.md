# 📋 Guia dos Includes - Sistema Librio 1010

## 🎯 Objetivo
Este sistema de includes foi criado para **centralizar elementos comuns** e facilitar a manutenção do site. Agora você pode alterar header, footer ou meta tags **uma vez** e a mudança será aplicada em **todas as páginas**.

## 📁 Estrutura dos Includes

```
librio1010/includes/
├── head.php      # Meta tags, CSS, favicon
├── header.php    # Navegação principal
├── footer.php    # Rodapé do site
├── modal.php     # Modal de imagem
└── scripts.php   # JavaScript comum
```

## 🔧 Como Usar

### 1. **Configurar Variáveis da Página**
No início de cada arquivo PHP, defina:

```php
<?php
// Configuração da página
$current_page = 'galeria';  // Nome da página atual
$page_title = 'Galeria - Studio Librio 1010 | Vila Mariana, SP';
$page_description = 'Descrição específica da página...';
$page_keywords = 'palavras-chave específicas';
$og_image = 'caminho/para/imagem.jpg'; // Opcional

// Scripts necessários
$include_modal = true;    // Se precisa do modal de imagem
$include_gallery = true; // Se precisa do JavaScript da galeria
?>
```

### 2. **Estrutura Básica da Página**

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Conteúdo específico da página aqui -->
    <main>
        <!-- Suas seções aqui -->
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <!-- Opcionais -->
    <?php include 'includes/modal.php'; ?>  <!-- Se $include_modal = true -->
    
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
```

## 🎯 Variáveis Disponíveis

### **head.php**
- `$page_title` - Título da página
- `$page_description` - Meta description
- `$page_keywords` - Meta keywords  
- `$og_image` - Imagem do Open Graph
- `$current_page` - Página atual (para URLs)

### **header.php**
- `$current_page` - Define qual menu fica ativo

### **scripts.php**
- `$include_modal` - Incluir modal.js?
- `$include_gallery` - Incluir gallery.js?
- `$custom_scripts` - JavaScript customizado

## ✅ Vantagens

1. **Manutenção Centralizada**
   - Alterar footer → modifica `includes/footer.php` → todas páginas atualizadas

2. **Consistência**
   - Impossível ter headers diferentes por erro

3. **Código Limpo**
   - Páginas ficam menores e mais legíveis

4. **SEO Otimizado**  
   - Meta tags centralizadas e parametrizadas

## 🔄 Migração das Páginas Existentes

### Exemplo de Refatoração:

**ANTES** (código duplicado):
```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página - Librio 1010</title>
    <!-- 30+ linhas de meta tags... -->
</head>
<body>
    <header class="header">
        <!-- 20+ linhas de navegação... -->
    </header>
    
    <!-- Conteúdo -->
    
    <footer class="footer">
        <!-- 30+ linhas de footer... -->
    </footer>
</body>
</html>
```

**DEPOIS** (com includes):
```php
<?php
$current_page = 'nome-da-pagina';
$page_title = 'Título Específico';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <!-- Conteúdo -->
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
```

## 📝 Próximos Passos

1. **Testar** o arquivo `galeria_with_includes.php`
2. **Migrar** uma página por vez
3. **Verificar** se tudo funciona corretamente
4. **Remover** arquivos antigos após migração completa

## 🚀 Benefícios Imediatos

- ✅ **Alterações no footer/header**: 1 arquivo vs 6 arquivos
- ✅ **Novos direitos reservados**: alteração automática em todas as páginas  
- ✅ **Novo item no menu**: adiciona em todas as páginas instantaneamente
- ✅ **Meta tags SEO**: otimização centralizada

---
*Esta estrutura torna o projeto mais profissional e muito mais fácil de manter!* 