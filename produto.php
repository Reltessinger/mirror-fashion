  <?php $cabecalho_title = "Produto da Mirror Fashion"  ?>
  <?php $css = "css/produto.css"  ?>
    <?php include("cabecalho.php"); ?>
    <div class="produto-back">
    <div class="container">
      <section class="produto">

      <h2>Fuzz Cardigan</h2>
      <div>Por apenas R$ 129,90</div>
      <form action="carrinho.php" method="post">
        <input type="hidden" name="nome" value="Fuzzy Cardigan">
        <input type="hidden" name="preco" value="129.90">
        <fieldset class="cores">
          <legend>Escolha a cor:</legend>
          <input type="radio" checked name="cor" value="verde" id="verde">
          <label for="verde">
            <img src="img/produtos/foto2-verde.png" alt="Produto na cor verde">
          </label>
          <input type="radio" name="cor" value="azul" id="azul">
          <label for="azul">
            <img src="img/produtos/foto2-azul.png" alt="Produto na cor azul">
          </label>
          <input type="radio" name="cor" value="rosa" id="rosa">
          <label for="rosa">
            <img src="img/produtos/foto2-rosa.png" alt="Produto na cor rosa">
          </label>
        </fieldset>
        <fieldset class="tamanho">
          <legend>Escolha seu tamanho:</legend>
          <input type="range" name="tam" value="42" min="36" max="46" step="2" id="tam">
          <output name="tam" for="tam" class="output-tam">42</output>
          <script src="js/tamanho.js"></script>
        </fieldset>
        <label for="qtd" class="label-qtd">Quantidade</label>
        <input type="number" name="qtd" id="qtd" min="1">
        <input type="submit" class="comprar" value="Comprar">
      </form>
    </section>

    <section class="detalhes">
      <h2>Detalhes do Produto</h2>
      <p>Camiseta confortável ideal para eventos casuais!</p>
      <p>Camiseta manga curta, gola redonda. Possui estampa de
        Caveira e descritivo frontal e lisa nas costas</p>
      <table>
        <thead>
          <tr>
            <th>Característica</th>
            <th>Detalhe</th>
          </tr>
        </thead>
        <tr>
          <td>Modelo</td>
          <td>Cardigan</td>
        </tr>
        <tr>
          <td>Material</td>
          <td>Algodão e Poliester</td>
        </tr>
        <tr>
          <td>Cores</td>
          <td>Azul, Rosa e Verde</td>
        </tr>
        <tr>
          <td>Lavagem</td>
          <td>Lavar a mão</td>
        </tr>
      </table>
    </section>
    </div>
  </div>
<?php include("rodape.php"); ?>
