<?php
require_once '../includes/auth_admin.php';
require_once '../includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pedido_id']) && isset($_POST['novo_status'])) {
    $id = (int)$_POST['pedido_id'];
    $status = $_POST['novo_status'];

    if (!empty($status)) {
        $stmt = $conn->prepare("UPDATE pedidos SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        $stmt->execute();
    }
}
header("Location: index.php");
exit;
?>