<?php
$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);

$produto = $result->fetch_assoc();
?>

<div class="pagina-produto">

    <div class="produto-imagem">
        <img src="<?= $produto['imagem'] ?>">
    </div>

    <div class="produto-detalhes">

        <h2><?= $produto['nome'] ?></h2>

        <p><?= $produto['descricao'] ?></p>

        <div class="produto-preco">
            R$ <?= number_format($produto['preco'],2,',','.') ?>
        </div>

        <input type="hidden" id="produto_id" value="<?= $produto['id'] ?>">
        <input type="hidden" id="produto_nome" value="<?= $produto['nome'] ?>">
        <input type="hidden" id="produto_preco" value="<?= $produto['preco'] ?>">
        <input type="hidden" id="produto_imagem" value="<?= $produto['imagem'] ?>">

        <div class="grupo-form">
            <label>Quantidade</label>
            <input type="number" id="quantidade" value="1" min="1">
        </div>

        <div class="grupo-form">
            <label>Cor</label>
            <select id="cor">
                <option>Branco</option>
                <option>Preto</option>
                <option>Azul</option>
                <option>Rosa</option>
            </select>
        </div>

        <div class="grupo-form">
            <label>Tamanho</label>
            <select id="tamanho">
                <option>P</option>
                <option>M</option>
                <option>G</option>
                <option>GG</option>
            </select>
        </div>

        <div class="grupo-form">
            <label>Texto Personalizado</label>
            <textarea id="texto_personalizado"></textarea>
        </div>

        <div class="grupo-form">
            <label>Arte pronta</label>
            <select id="arte_pronta">
                <option value="">Nenhuma</option>
                <option value="logo1.png">Logo 1</option>
                <option value="logo2.png">Logo 2</option>
            </select>
        </div>

        <button id="btnAdicionarCarrinho" class="btn-comprar">
            Adicionar ao Carrinho
        </button>

    </div>

</div>

<?php include 'includes/footer.php'; ?>