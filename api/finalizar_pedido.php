<?php
session_start();

require_once '../includes/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$endereco = $_POST['endereco'];

$carrinho = json_decode($_POST['carrinho'], true);

$total = 0;

foreach($carrinho as $item){
    $total += $item['preco'] * $item['quantidade'];
}

$stmt = $conn->prepare("INSERT INTO pedidos(nome_cliente,email_cliente,whatsapp,endereco,valor_total) VALUES(?,?,?,?,?)");

$stmt->bind_param("ssssd", $nome, $email, $whatsapp, $endereco, $total);

$stmt->execute();

$pedido_id = $stmt->insert_id;

foreach($carrinho as $item){

    $stmt2 = $conn->prepare("INSERT INTO itens_pedido(pedido_id,produto_id,produto_nome,quantidade,cor,tamanho,texto_personalizado,arte_pronta,valor_unitario)
    VALUES(?,?,?,?,?,?,?,?,?)");

    $stmt2->bind_param(
        "iissssssd",
        $pedido_id,
        $item['id'],
        $item['nome'],
        $item['quantidade'],
        $item['cor'],
        $item['tamanho'],
        $item['texto'],
        $item['arte_pronta'],
        $item['preco']
    );

    $stmt2->execute();
}

header("Location: ../pedido_sucesso.php?id=$pedido_id");