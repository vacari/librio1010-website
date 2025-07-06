@echo off
echo ========================================
echo    DEPLOY LIBRIO 1010 WEBSITE
echo ========================================
echo.

:: Configurações
set SOURCE_ROOT=%~dp0
set SOURCE_DIR=%~dp0librio1010
set TARGET_ROOT=\\10.1.1.24\vivavilamariana
set TARGET_DIR=\\10.1.1.24\vivavilamariana\librio1010
:: Formatar data e hora para backup (garantir formato AAAAMMDD_HHMM)
for /f "tokens=1-3 delims=/ " %%a in ("%date%") do set DD=%%a&set MM=%%b&set YYYY=%%c
for /f "tokens=1-3 delims=:. " %%a in ("%time%") do set HH=%%a&set MIN=%%b&set SEC=%%c

:: Garantir 2 dígitos para todos os componentes
if "%DD:~1,1%"=="" set DD=0%DD%
if "%MM:~1,1%"=="" set MM=0%MM%
if "%HH:~1,1%"=="" set HH=0%HH%
if "%MIN:~1,1%"=="" set MIN=0%MIN%

:: Remover espaços extras
set DD=%DD: =%
set MM=%MM: =%
set HH=%HH: =%
set MIN=%MIN: =%

set BACKUP_DIR=\\10.1.1.24\vivavilamariana\backup_%YYYY%%MM%%DD%_%HH%%MIN%

echo Source (raiz): %SOURCE_ROOT%
echo Source (librio1010): %SOURCE_DIR%
echo Target (raiz): %TARGET_ROOT%
echo Target (librio1010): %TARGET_DIR%
echo.

:: Verificar se o diretório de destino existe
if not exist "%TARGET_DIR%" (
    echo Criando diretório de destino...
    mkdir "%TARGET_DIR%"
)

:: Mover pasta antiga para backup temporário (mais rápido que deletar)
echo Preparando deploy...
if exist "%TARGET_DIR%" (
    move "%TARGET_DIR%" "%BACKUP_DIR%" >nul 2>&1
)
mkdir "%TARGET_DIR%"
echo.

echo Copiando todo o projeto...
xcopy "%SOURCE_ROOT%*" "%TARGET_ROOT%\" /E /I /Y /H

echo.
echo ========================================
echo    DEPLOY CONCLUÍDO!
echo ========================================
echo.
echo Arquivos copiados para: %TARGET_ROOT% e %TARGET_DIR%
echo.
echo Para acessar o site:
echo https://vivavilamariana.com.br/librio1010
echo. 