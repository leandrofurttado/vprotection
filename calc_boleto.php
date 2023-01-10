<html>

<body>
    <form action="calc_boleto.php" method="post">
        CALCULADOR DE JUROS!<br>
        CPF: <input type=text name=campo1><br>
        Valor da parcela R$: <input type=text name=campo2><br>
        Data do vencimento.: <input type=text name=campo3><br>
        <input type=submit value="COTAR!">
    </form>
</body>

</html>
<?php
require 'Helpers.php';

if ($_REQUEST["campo1"] = null) {
    echo 'Digite acima os dados!';
} else {
    $valor_parcela = $_REQUEST['campo2'];
    $data_boleto_vencido = str_replace('/', '-', $_REQUEST['campo3']);

    echo 'O valor do débito a se pagar é: R$' . boleto($valor_parcela, $data_boleto_vencido);
    echo '<hr>';
    echo 'Você pode entrar em contato em : 31 4007-2420';
}
