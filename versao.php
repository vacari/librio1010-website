<?php
function getVersao() {
    $arquivo = __DIR__ . '/versao.txt';
    if (!file_exists($arquivo)) {
        return '0000';
    }
    
    $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (empty($linhas)) {
        return '0000';
    }
    
    $ultimaLinha = end($linhas);
    $partes = explode(';', $ultimaLinha);
    return $partes[0];
}
?> 