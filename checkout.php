<?php include 'includes/header.php'; ?>

<h2 class="titulo-pagina">Finalizar Pedido</h2>

<form action="api/finalizar_pedido.php" method="POST">

    <div class="grupo-form">
        <label>Nome</label>
        <input type="text" name="nome" required>
    </div>

    <div class="grupo-form">
        <label>E-mail</label>
        <input type="email" name="email" required>
    </div>

    <div class="grupo-form">
        <label>WhatsApp</label>
        <input type="text" name="whatsapp" required>
    </div>

    <div class="grupo-form">
        <label>Endereço</label>
        <textarea name="endereco"></textarea>
    </div>

    <input type="hidden" name="carrinho" id="inputCarrinho">

    <button class="btn-comprar">
        Confirmar Pedido
    </button>

</form>

<?php include 'includes/footer.php'; ?>