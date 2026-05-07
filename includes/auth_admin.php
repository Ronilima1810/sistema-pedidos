<?php
session_start();
// Verifica se o admin está logado. Se não estiver, expulsa para o login.
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    header("Location: /pedidos/admin/login.php");
    exit;
}
?>