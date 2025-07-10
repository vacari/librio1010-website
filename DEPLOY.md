# 🚀 Guia de Deploy - Librio 1010 Website

## 🏗️ Estrutura do Ambiente de Produção

### Configuração do Servidor Apache (Windows)
- **Root físico do Apache**: `D:\Apache24\htdocs`
- **Apontamento do vhosts**: `D:\Apache24\htdocs\www\vivavilamariana`
- **URL principal**: `https://vivavilamariana.com.br/` 
- **Projeto Librio1010**: `D:\Apache24\htdocs\www\vivavilamariana\librio1010`
- **URL do Librio1010**: `https://vivavilamariana.com.br/librio1010/`

### Redirecionamento Temporário
O site principal (`https://vivavilamariana.com.br/`) **redireciona automaticamente** para o Librio1010 (`https://vivavilamariana.com.br/librio1010/`) pois é o único studio disponível no momento.

```apache
# .htaccess na raiz (D:\Apache24\htdocs\www\vivavilamariana\.htaccess)
RewriteEngine On
RewriteCond %{REQUEST_URI} ^/$
RewriteRule ^(.*)$ /librio1010/ [R=302,L]
```

**Nota**: Usa redirecionamento 302 (temporário) pois futuramente haverá outros studios e uma landing page principal.

## 📋 Estratégia de Deploy

**Recomendação: Desenvolvimento Local + Deploy Automatizado**

### ✅ Vantagens desta abordagem:
- Controle total do desenvolvimento
- Backup seguro dos arquivos
- Testes locais antes do deploy
- Possibilidade de usar Git para versionamento
- Deploy automatizado e confiável

## 🛠️ Como Fazer o Deploy

### Opção 1: Script PowerShell (Recomendado)

```powershell
# Teste primeiro (não copia arquivos)
.\deploy.ps1 -Test

# Deploy normal
.\deploy.ps1

# Deploy forçado (sem backup)
.\deploy.ps1 -Force
```

### Opção 2: Script Batch (Alternativo)

```cmd
# Executar o script batch
deploy.bat
```

### Opção 3: Deploy Manual

```cmd
# Conectar ao servidor
net use \\10.1.1.24\vivavilamariana

# Copiar arquivos manualmente
xcopy *.php \\10.1.1.24\vivavilamariana\librio1010\ /Y
xcopy assets \\10.1.1.24\vivavilamariana\librio1010\assets\ /E /I /Y
xcopy imagens_apartamento \\10.1.1.24\vivavilamariana\librio1010\imagens_apartamento\ /E /I /Y
xcopy imagens_condominio \\10.1.1.24\vivavilamariana\librio1010\imagens_condominio\ /E /I /Y
```

## 📁 Estrutura de Arquivos

```
Librio1010_website/
├── index.php              # Página inicial
├── detalhes.php           # Página de detalhes
├── galeria.php            # Página da galeria
├── areas-comuns.php       # Página das áreas comuns
├── bairro.php             # Página do bairro
├── contato.php            # Página de contato
├── assets/
│   ├── css/
│   │   └── style.css      # Estilos do site
│   ├── js/
│   │   ├── main.js        # JavaScript principal
│   │   └── gallery.js     # JavaScript da galeria
│   └── images/            # Imagens do site
├── imagens_apartamento/   # Fotos do apartamento
├── imagens_condominio/    # Fotos do condomínio
├── deploy.ps1             # Script de deploy PowerShell
├── deploy.bat             # Script de deploy Batch
├── deploy-config.json     # Configurações do deploy
└── README.MD              # Documentação do projeto
```

## 🔧 Configurações

### Servidor de Destino
- **Caminho:** `\\10.1.1.24\vivavilamariana\librio1010`
- **URL:** `https://vivavilamariana.com.br/librio1010`

### Arquivos Copiados
- ✅ Todos os arquivos `.php`
- ✅ Pasta `assets/` completa
- ✅ Pasta `imagens_apartamento/` completa
- ✅ Pasta `imagens_condominio/` completa
- ✅ `README.MD`

### Arquivos Excluídos
- ❌ Scripts de deploy (`deploy.ps1`, `deploy.bat`)
- ❌ Arquivos de configuração (`deploy-config.json`)
- ❌ Logs (`deploy.log`)
- ❌ Arquivos temporários

## 🔄 Backup Automático

O script de deploy cria automaticamente um backup antes de copiar os novos arquivos:

- **Localização:** `\\10.1.1.24\vivavilamariana\backup_YYYYMMDD_HHMM`
- **Conteúdo:** Cópia completa da versão anterior
- **Formato:** Data e hora no nome da pasta

## 📊 Logs de Deploy

Todos os deploys são registrados em:
- **Arquivo:** `deploy.log`
- **Conteúdo:** Timestamp, ações realizadas, erros
- **Localização:** Pasta do projeto

## 🚨 Troubleshooting

### Problema: Não consegue conectar ao servidor
```powershell
# Testar conectividade
Test-Path "\\10.1.1.24\vivavilamariana"

# Reconectar
net use \\10.1.1.24\vivavilamariana /delete
net use \\10.1.1.24\vivavilamariana
```

### Problema: Permissões negadas
- Verificar se você tem acesso de escrita na pasta
- Contatar o administrador do servidor

### Problema: Arquivos não copiados
- Verificar se o caminho está correto
- Verificar se os arquivos existem localmente
- Consultar o log de deploy

## 🎯 Workflow Recomendado

1. **Desenvolver localmente** - Fazer todas as alterações na pasta local
2. **Testar localmente** - Abrir `index.php` no navegador para testar
3. **Fazer deploy de teste** - `.\deploy.ps1 -Test`
4. **Fazer deploy real** - `.\deploy.ps1`
5. **Verificar online** - Acessar `https://vivavilamariana.com.br/librio1010`

## 📞 Suporte

Se encontrar problemas:
1. Verificar o arquivo `deploy.log`
2. Testar conectividade com o servidor
3. Verificar permissões de acesso
4. Contatar o administrador do servidor se necessário

---

**Última atualização:** $(Get-Date -Format "dd/MM/yyyy HH:mm") 