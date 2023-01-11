<html>

<head>
    <title>PHP Treinando</title>
</head>

<body>
    <form action="index.php" method="post">
        CPF: <input type=text name=campo1><br>
        Valor da mensalidade R$: <input type=text name=campo2><br>
        Data do ultimo pagamento: <input type=text name=campo3><br>
        <input type=submit value="COTAR!">
    </form>

    <a href="calc_boleto.php" target="_blank">Clique aqui para calcular seu boleto.</a>
    <hr>
    <a href="cotacao.php">FAZER COTAÇÃO!</a>
    <?php

    require 'sistema/configuracao.php';
    require 'Helpers.php';
    echo '<h1>Leandrake Proteção Veícular</h1>';


    if ($_POST["campo2"] != '') {
        $valorproduto = $_POST["campo2"];
        $dataPagamento = str_replace('/', '-', $_REQUEST["campo3"]);
        echo info_descontos($valorproduto);
        echo '<hr>';
        echo 'Cancelando hoje o proporcional a se pagar é R$:' . calcularProporcional($valorproduto, $dataPagamento);
    } else {
        echo 'Insira os valores acima.';
    }

    ?>

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>