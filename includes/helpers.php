<?php
// Funções para facilitar a formatação de dados em todo o sistema
function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

function limparString($string) {
    return htmlspecialchars(strip_tags(trim($string)));
}
?>