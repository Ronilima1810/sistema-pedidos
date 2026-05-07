<?php
header('Content-Type: application/json');
// API simples de proxy para o ViaCEP (evita bloqueios de CORS no frontend)
if(isset($_GET['cep'])){
    $cep = preg_replace('/[^0-9]/', '', $_GET['cep']);
    if(strlen($cep) == 8){
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $response = file_get_contents($url);
        echo $response;
        exit;
    }
}
echo json_encode(['erro' => true]);
?>