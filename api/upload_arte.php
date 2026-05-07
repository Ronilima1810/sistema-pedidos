<?php
header('Content-Type: application/json');
// Script preparado para receber via AJAX a arte do cliente no carrinho
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['arte'])) {
    $diretorio = "../uploads/artes_clientes/";
    $extensao = strtolower(pathinfo($_FILES['arte']['name'], PATHINFO_EXTENSION));
    $novo_nome = uniqid() . '.' . $extensao;
    
    if (in_array($extensao, ['jpg', 'jpeg', 'png', 'pdf'])) {
        if (move_uploaded_file($_FILES['arte']['tmp_name'], $diretorio . $novo_nome)) {
            echo json_encode(['sucesso' => true, 'caminho' => 'uploads/artes_clientes/' . $novo_nome]);
            exit;
        }
    }
}
echo json_encode(['sucesso' => false, 'mensagem' => 'Erro no upload ou formato inválido']);
?>