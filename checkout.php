<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <link rel="stylesheet" href="css/checkout.css">
    <meta charset="utf-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">

</head>

<body>

    <!-- inserindo um navbar padrão -->
    <nav class="navbar navbar-static-top">
        <div class="navbar-header">
            <img src="img/logo.png" alt="Mirror Fashion">
            <a class="navbar-brand " href="index.php"></a>


            <button class="navbar-toggle" type="button" data-target=" .navbar-collapse" data-toggle="collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>

        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Perguntas frequentes</a></li>
            <li><a href="#">Entre em contato</a></li>
        </ul>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>



    <!-- Mostrando detalhes do produto ao clicar em comprar-->
    <div class="col-sm-4">
        <div class="panel panel-success">

            <div class="panel-heading">
                <h2 class="panel-title">Sua Compra</h2>
            </div> <!-- fim panel heading -->

            <div class="panel-body">

                <img src="img/produtos/foto2<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive">


                <div class="container">
                    <div class="row">
                        <dl>
                            <dt>Cor</dt>
                            <dd> <?= $_POST["cor"] ?> </dd>

                            <dt>Tamanho</dt>
                            <dd> <?= $_POST["tamanho"] ?> </dd>

                            <dt>Produto</dt>
                            <dd> <?= $_POST['nome'] ?> </dd>

                            <dt>Preço</dt>
                            <dd> <?= $_POST['preco'] ?> </dd>

                        </dl>

                        <div class="form-group">
                            <label for="qt">Quantidade</label>
                            <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <output for="qt valor" id="total" class="form-control">
                                <?= $_POST["preco"] ?>
                            </output>
                        </div>
                    


                    <!-- Formulário para usuário preencher com seus dados pessoais -->
                    <form class="col-sm-8 col-lg-9">
                        <div class="row">
                            <fieldset class="col-md-6">
                                <legend>Dados Pessoais</legend>

                                <div class="form-group">
                                    <!-- Solicita ao usuário preencher com seu nome -->
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                                </div>


                                <div class="form-group">
                                    <!-- Solicita ao usuário preencher com seu email-->
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <!-- Solicita ao usuário preencher com seu cpf -->
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" data-mask="999.999.999-99" placeholder="000.000.000-00" required>

                                </div>


                                <div class="checkbox">
                                    <!-- Botão para usuário receber spam do site, caso ele aceite -->
                                    <label>
                                        <input type="checkbox" value="sim" name="span" checked>
                                        Quero receber spam da Mirror Fashion.
                                    </label>
                                </div>

                            </fieldset>

                            <fieldset class="col-md-6">
                                <legend>Cartão de crédito</legend>
                                <!--Receber número do cartão -->
                                <div class="form-group">
                                    <label for="numero-cartao">Número - CVV</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                                </div>
                                <!--usuário solicitar bandeira do cartão, com opções -->
                                <div class="form-group">
                                    <label for="bandeira-cartao">Bandeira</label>
                                    <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                        <option value="master">Mastercard</option>
                                        <option value="visa">Visa</option>
                                        <option value="amex">American Express</option>

                                    </select>
                                </div>
                                <!--usuário inserir validade do cartão -->
                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                                </div>
                            </fieldset>
                        </div>



                        <!-- Botão para confirmar compra do usuário -->
                        <button type="submit" class="btn-lg pull-right btn-primary">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            Confirmar Pedido
                        </button>

                    </form>

                </div> <!-- fim row -->
            </div> <!-- fim container -->
        </div> <!-- fim panel body -->
    </div>
    </div> <!-- div col-sm-4 -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/inputmask-plugin.js"></script>
    <script src="js/converteMoeda.js"></script>
    <script src="js/testaConversao.js"></script>
    <script src="js/total.js"></script>
</body>

</html>