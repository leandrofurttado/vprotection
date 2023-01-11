<form action="cotacao.php" method="post">
    FAÇA A SUA COTAÇÃO!!<br>
    Modelo Veículo: <input type=text name=modeloveiculo><br>
    <fieldset>
        <legend>Ano Modelo: </legend>
        <input type="radio" name="radio" id="radio" value="2013"> <label for="radio">2013</label>
        <input type="radio" name="radio" id="radio" value="2014"> <label for="radio">2014</label>
        <input type="radio" name="radio" id="radio" value="2015"> <label for="radio">2015</label>
    </fieldset>
    Tabela FIPE: R$<input type=number name=fipe><br>
    <hr>
    <fieldset>
        <legend>OPCIONAIS ESCOLHIDOS: </legend>
        <input type="radio" name="pr_max_nacional" id="radio" value="pr_max_nacional"> <label for="radio">Max Nacional</label>
        <input type="radio" name="pr_vidros" id="radio" value="pr_vidros"> <label for="radio">Vidros</label>
        <input type="radio" name="pr_rastreador" id="radio" value="pr_rastreador"> <label for="radio">Rastreador Monitoravel</label>
        <input type="radio" name="pr_fenomenos" id="radio" value="pr_fenomenos"> <label for="radio">Fenomenos da Natureza</label>
        <input type="radio" name="pr_carroreserva" id="radio" value="pr_carroreserva"> <label for="radio">Carro reserva(colisão)</label>
    </fieldset>
    <input type=submit value="COTAR!">
</form>

<?php
//VARIAVEIS INICIAIS//
if (empty($_POST['modeloveiculo'])) {
    echo 'Favor inserir os dados, estão incompletos!';
} else {
    $modelo_veiculo = $_POST['modeloveiculo'];
    $ano_modelo = $_POST['radio'];
    $fipe_veiculo = $_POST['fipe'];
    // OPCIONAIS //
    $max_nacional = $_POST['opcional_protecao'];
    $vidros = $_POST['pr_vidros'];
    $rastreador = $_POST['pr_rastreador'];
    $fenomeros_natureza = $_POST['pr_fenomenos'];
    $carro_reserva = $_POST['pr_carroreserva'];

    echo 'Uau o seu carro é o ' . $modelo_veiculo;
}
