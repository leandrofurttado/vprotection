<?php
require 'sistema/configuracao.php';
function desconto10($num)
{
    $calculo_desconto = 10 * $num / 100;
    return $num - $calculo_desconto;
}

function desconto20($num)
{
    $calculo_desconto = 20 * $num / 100;
    return $num - $calculo_desconto;
}

function desconto50($num)
{
    $calculo_desconto = 50 * $num / 100;
    return $num - $calculo_desconto;
}

/**
 * Função calcula o proporcional, referente ao ultimo pagamento até a data do cancelamento.
 * @param float $valor Parametro referente ao valor da mensalidade.
 * @param string $data_pagamento Parametro referente a data do ultimo pagamento.
 */
function calcularProporcional(float $valor, string $data_pagamento)
{
    $database = date_create($data_pagamento);
    $datadehoje = date_create();
    $resultado = date_diff($database, $datadehoje);
    $resultado_dias = date_interval_format($resultado, '%a');

    $calculo_prop = $valor / 30 * $resultado_dias;
    return $calculo_prop;
}

function boleto(float $valormensalidade, string $data_de_vencimento)
{
    $database = date_create($data_de_vencimento);
    $datadehoje = date_create();
    $resultado = date_diff($database, $datadehoje);
    $resultado_dias = date_interval_format($resultado, '%a');
    $valor_multa = 8.13;
    $valor_juros = 0.25 * $resultado_dias;

    return number_format(($valor_multa + $valor_juros) + $valormensalidade, 2);
}



function info_descontos(float $valor_do_produto)
{
    echo '<p>O valor do produto é de R$' . number_format($valor_do_produto, 2);
    echo '<p>Com desconto de 10% ficará R$' . number_format(desconto10($valor_do_produto), 2);
    echo '<p>Com desconto de 20% ficará R$' . number_format(desconto20($valor_do_produto), 2);
    echo '<p>Com desconto de 50% ficará R$' . number_format(desconto50($valor_do_produto), 2);
    echo '<hr>';
}
