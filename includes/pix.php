<?php
// Configurações estáticas do seu PIX para exibir na tela de sucesso
$chave_pix = (getenv('PIX_KEY') ?: ''); 
$nome_titular = (getenv('PIX_HOLDER_NAME') ?: '');
$banco_titular = (getenv('PIX_BANK_NAME') ?: '');
?>