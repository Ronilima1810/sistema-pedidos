<?php
session_start();
require_once '../includes/conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']); // O banco está usando MD5 conforme seu SQL

    $stmt = $conn->prepare("SELECT id FROM admin WHERE usuario = ? AND senha = ?");
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['admin_logado'] = true;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Lumus</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body class="bg-login">
    <div class="login-box">
        <h2>Painel Admin</h2>
        <?php if($erro): ?> <p style="color: red;"><?= $erro ?></p> <?php endif; ?>
        <form method="POST">
            <div class="grupo-form">
                <label>Usuário</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="grupo-form">
                <label>Senha</label>
                <input type="password" name="senha" required>
            </div>
            <button type="submit" class="btn-admin">Entrar</button>
        </form>
    </div>
</body>
</html>