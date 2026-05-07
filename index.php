<?php
require_once 'includes/conexao.php';
include 'includes/header.php';
?>

<section class="hero">
    <h2>Pedidos Online Personalizados</h2>
    <p>Escolha seu produto e personalize do seu jeito.</p>
</section>

<div class="grid-produtos">

<?php
$sql = "SELECT * FROM produtos WHERE ativo = 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<div class="card-produto">

    <img src="<?= $row['imagem'] ?>">

    <div class="card-info">

        <h3><?= $row['nome'] ?></h3>

        <p><?= $row['descricao'] ?></p>

        <div class="preco">
            R$ <?= number_format($row['preco'],2,',','.') ?>
        </div>

        <a href="produto.php?id=<?= $row['id'] ?>" class="btn-comprar">
            Personalizar
        </a>

    </div>

</div>

<?php } ?>

</div>

<?php include 'includes/footer.php'; ?>