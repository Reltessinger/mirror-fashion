<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="jumbotron">
      <div class="container">
        <h1>Ótima Escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
          Preencha seus dados para efetivar a compra.</p>
      </div><!Fim .container-->
    </div><!Fim .jumbotron-->

    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-lg-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Sua Compra</h2>
            </div><!Fim .panel-heading-->

            <div class="panel-body">
              <img src="img/produtos/foto2-<?= $_POST["cor"] ?>.png"
                alt="Produto na cor <?= $_POST["cor"] ?>" class="img-thumbnail img-responsive">
              <dl>
                <dt>Produto</dt>
                <dd><?= $_POST['nome'] ?></dd>

                <dt>Preço</dt>
                <dd id="precoUnitario">R$ <?= $_POST['preco'] ?></dd>

                <dt>Quantidade</dt>
                <dd><input type="number" name="" min="1" id="qtd"
                  value="<?= $_POST['qtd'] ?>" class="form-control">
                </dd>
                <script src="js/total.js"></script>

                <dt>Preço Total</dt>
                <dd id="precoTotal">R$ <?= $_POST['preco'] * $_POST['qtd'] ?></dd>

                <dt>Cor</dt>
                <dd><?= $_POST['cor'] ?></dd>

                <dt>Tamanho</dt>
                <dd><?= $_POST['tam'] ?></dd>
              </dl>
            </div><!Fim .panel-body-->

          </div><!Fim .panel-->
        </div><!Fim .col-sm-4-->

        <form class="col-sm-8 col-lg-9" action="produto.php" method="post">

          <fieldset class="col-lg-6">
            <legend>Dados Pessoais</legend>
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" class="form-control" required>
            </div><!Fim Nome -->

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" required class="form-control" placeholder="example@example.com">
            </div><!Fim email-->

            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" id="cpf" required placeholder="000.000.000-00" class="form-control" pattern="\d\d\d\.\d\d\d\.\d\d\d\-\d\d">
            </div><!Fim cpf-->

            <div class="form-group">
              <input type="checkbox" checked id="spam">
              <label for="spam">Quero receber spam da Mirror Fashion</label>
            </div><!Fim spam-->
          </fieldset>

          <fieldset class="col-lg-6">
            <legend>Cartão de Crédito</legend>
            <div class="form-group">
              <label for="numCartao">Número - CVV</label>
              <input type="number" required id="numCartao" placeholder="000 000 000 000 - 000" class="form-control">
            </div><!Fim numCartao-->

            <div class="form-group">
              <label for="bandeira">Bandeira</label>
              <select name="bandeira" required class="form-control">
                <option value="master">Master Card</option>
                <option value="visa">Visa</option>
                <option value="amex">Amex</option>
              </select>
            </div><!Fim bandeira-->

            <div class="form-group">
              <label for="validade">Validade</label>
              <input type="month" required class="form-control">
            </div><!Fim validade-->
          </fieldset>

          <button type="submit" class="btn btn-primary btn-lg pull-right">
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar Pedido
          </button>
        </form>

    </div><!Fim .row-->
  </div><!Fim .container-->

  </body>
</html>
