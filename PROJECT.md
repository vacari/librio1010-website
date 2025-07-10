# 🏢 Projeto Viva Vila Mariana

## 📋 Visão Geral do Projeto

O **Viva Vila Mariana** é um projeto de **studios mobiliados** no bairro Vila Mariana, São Paulo, focado em hospedagem de qualidade para estadias temporárias (short stay e long stay).

## 🏗️ Estrutura do Projeto

### Ambiente de Produção

```
Servidor Apache (Windows)
├── D:\Apache24\htdocs\                          # Root físico do Apache
└── D:\Apache24\htdocs\www\vivavilamariana\      # Root do projeto Viva Vila Mariana
    ├── index.php                                # Redirecionamento temporário
    ├── .htaccess                               # Configuração de redirecionamento
    └── librio1010\                             # Primeiro studio (Librio1010)
        ├── index.php                          # Site do Studio Librio1010
        ├── galeria.php                        # Galeria de fotos
        ├── contato.php                        # Página de contato
        ├── assets\                            # CSS, JS, imagens
        ├── imagens_apartamento\               # Fotos do apartamento
        └── imagens_condominio\                # Fotos das áreas comuns
```

### URLs de Acesso

- **Site Principal**: `https://vivavilamariana.com.br/`
  - **Redirecionamento**: Automaticamente redireciona para → `https://vivavilamariana.com.br/librio1010/`
  - **Status**: Temporário (até outros studios serem criados)

- **Studio Librio1010**: `https://vivavilamariana.com.br/librio1010/`
  - **Status**: Operacional
  - **Conteúdo**: Site completo do primeiro studio

## 🎯 Objetivos do Projeto

### Objetivo Principal
Criar uma **plataforma de studios mobiliados** na Vila Mariana para atender demandas de:
- 🏥 **Residência médica** (próximo à UNIFESP)
- 🎓 **Estudantes** (próximo a universidades)
- 💼 **Executivos** em viagem de negócios
- 🏛️ **Congressos e eventos** (próximo à Av. Paulista)
- ✈️ **Turistas** (localização privilegiada)

### Estratégia Atual (Temporária)
Como ainda **não existem outros apartamentos** no projeto, toda visita ao site principal é redirecionada para o **Librio1010** (primeiro studio disponível).

### Estratégia Futura
Quando mais studios forem adicionados:
1. O site principal (`vivavilamariana.com.br`) será uma **landing page** com:
   - Visão geral dos studios disponíveis
   - Mapa de localização
   - Sistema de reservas
   - Informações sobre o bairro

2. Cada studio terá sua **subpasta dedicada**:
   - `/librio1010/` - Studio atual
   - `/librio1020/` - Futuro studio
   - `/librio1030/` - Futuro studio

## 🏠 Studio Librio1010 (Atual)

### Características
- **Tipo**: Studio mobiliado completo
- **Localização**: Vila Mariana, São Paulo
- **Proximidade**: 
  - 🚇 Metrô Ana Rosa
  - 🏥 UNIFESP
  - 🌳 Parque Ibirapuera
  - 📍 Avenida Paulista

### Funcionalidades do Site
- ✅ **Galeria de fotos** do apartamento
- ✅ **Detalhes completos** (equipamentos, móveis)
- ✅ **Informações do bairro** e proximidades
- ✅ **Formulário de contato**
- ✅ **Modal de imagens** responsivo
- ✅ **SEO otimizado** para buscas
- ✅ **Meta tags OpenGraph** para redes sociais
- ✅ **Sistema de includes** centralizado (82% menos código)
- ✅ **OpenGraph/WhatsApp** otimizado com imagens do apartamento
- ✅ **Twitter Cards** e Schema.org implementados
- ✅ **URLs dinâmicas** corretas para compartilhamento

### Redes Sociais e Plataformas
- **Site oficial**: `https://vivavilamariana.com.br/librio1010/`
- **Airbnb**: `https://airbnb.com.br/h/vivavilamariana`
- **Instagram**: `https://www.instagram.com/vivavilamariana/`
- **WhatsApp**: +55 11 98480-7272
- **Email**: librio1010@gmail.com

## 📄 Materiais de Marketing

### Arquivos Disponíveis para Download
Localizados em `/imagens_apartamento/`:

- **📋 Flyer para Impressão**:
  - `2025_Flyer_Librio.jpg` - Flyer promocional atualizado para 2025

- **🎨 Logos e Identidade Visual**:
  - `Logotipo-Librio.jpg` - Logo principal (formato JPG)
  - `Logotipo-Librio-Photoroom.png` - Logo em PNG com fundo transparente
  - `Logotipo-Librio-Photoroom_so_circulo.png` - Logo circular para navegação

- **📱 QR Codes**:
  - `QRcode librio1010.png` - QR code específico do Librio1010
  - `QRcode vivavilamariana.png` - QR code do projeto Viva Vila Mariana

**Uso recomendado**: 
- Flyer para impressão em eventos, congressos médicos e feiras
- QR codes para acesso rápido ao site e informações
- Logos para parcerias e materiais promocionais

## 🚀 Tecnologias Utilizadas

### Backend
- **PHP** - Linguagem principal
- **Apache** - Servidor web
- **Windows Server** - Sistema operacional

### Frontend
- **HTML5** - Estrutura
- **CSS3** - Estilização responsiva
- **JavaScript** - Interatividade (modais, galeria)
- **Bootstrap** - Framework CSS

### Deploy
- **Script automatizado** (deploy.bat)
- **Backup automático** antes do deploy
- **Rede local** (\\10.1.1.24\vivavilamariana)

## 📈 Fases do Projeto

### ✅ Fase 1 - MVP (Concluída)
- [x] Desenvolvimento do Studio Librio1010
- [x] Site responsivo e funcional
- [x] Deploy automatizado
- [x] Redirecionamento temporário funcionando
- [x] SEO e redes sociais configurados
- [x] Sistema de includes (82% menos código, manutenção centralizada)
- [x] OpenGraph e Twitter Cards otimizados para redes sociais
- [x] Meta tags dinâmicas e Schema.org implementados

### 🔄 Fase 2 - Expansão (Futuro)
- [ ] Adicionar novos studios ao projeto
- [ ] Criar landing page principal
- [ ] Sistema de reservas online
- [ ] Integração com plataformas (Airbnb, Booking)
- [ ] Dashboard administrativo

### 🎯 Fase 3 - Otimização (Futuro)
- [ ] Sistema de gestão de ocupação
- [ ] Relatórios financeiros
- [ ] App mobile
- [ ] Integração com sistemas de pagamento

## 🔧 Configuração Atual

### Redirecionamento Temporário
```apache
# .htaccess na raiz do projeto
RewriteEngine On
RewriteCond %{REQUEST_URI} ^/$
RewriteRule ^(.*)$ /librio1010/ [R=302,L]
```

### Justificativa do R=302
- **302 (Temporário)**: Indica aos buscadores que é um redirecionamento provisório
- **301 (Permanente)**: Será usado no futuro quando a estrutura final estiver definida

## 📞 Contato e Suporte

Para questões técnicas ou comerciais relacionadas ao projeto Viva Vila Mariana:
- **Email**: librio1010@gmail.com
- **WhatsApp**: +55 11 98480-7272

---

**Última atualização**: Janeiro 2025  
**Status do projeto**: Fase 1 - MVP Concluída  
**Documentação**: Limpa e atualizada (removidas redundâncias)  
**Próxima fase**: Expansão com novos studios 