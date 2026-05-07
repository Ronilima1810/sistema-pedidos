<?php
require_once '../includes/auth_admin.php';
require_once '../includes/conexao.php';

$sql = "SELECT * FROM pedidos ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel - Pedidos</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <header class="admin-header">
        <h1>Gestão de Pedidos</h1>
        <a href="logout.php" class="btn-sair">Sair</a>
    </header>
    <main class="admin-container">
        <table class="tabela-admin">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>WhatsApp</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>#<?= $row['id'] ?></td>
                    <td><?= $row['nome_cliente'] ?></td>
                    <td><?= $row['whatsapp'] ?></td>
                    <td>R$ <?= number_format($row['valor_total'], 2, ',', '.') ?></td>
                    <td><span class="badge status-<?= strtolower(str_replace(' ', '-', $row['status'])) ?>"><?= $row['status'] ?></span></td>
                    <td>
                        <form action="atualizar_status.php" method="POST" style="display:inline;">
                            <input type="hidden" name="pedido_id" value="<?= $row['id'] ?>">
                            <select name="novo_status" onchange="this.form.submit()">
                                <option value="">Mudar Status...</option>
                                <option value="Aguardando pagamento">Aguardando pagamento</option>
                                <option value="Pago">Pago</option>
                                <option value="Em Produção">Em Produção</option>
                                <option value="Enviado">Enviado</option>
                            </select>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</body>
</html>