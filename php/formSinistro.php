<?php

//Recebendo dados do formulario
$datasinistro = $_POST["datasinistro"];
$horasinistro = $_POST["horasinistro"];
$bo = $_POST["bo"];
$localsinistro = $_POST["localsinistro"];
$pontoref = $_POST["pontoref"];
$nomeseg = $_POST["nomeseg"];
$cpfseg = $_POST["cpfseg"];
$placaseg = $_POST["placaseg"];
$culpsinistro = $_POST["culpsinistro"];
$houveterc = $_POST["houveterc"];
$nometerc = $_POST["nometerc"];
$cpfterc = $_POST["cpfterc"];
$celterc = $_POST["celterc"];
$cnhterc = $_POST["cnhterc"];
$valcnhterc = $_POST["valcnhterc"];
$catcnhterc = $_POST["catcnhterc"];
$cepterc = $_POST["cepterc"];
$endterc = $_POST["endterc"];
$numterc = $_POST["numterc"];
$bairroterc = $_POST["bairroterc"];
$cidadeterc = $_POST["cidadeterc"];
$estadoterc = $_POST["estadoterc"];
$modveicterc = $_POST["modveicterc"];
$placaterc = $_POST["placaterc"];
$anomod = $_POST["anomod"];
$chassiterc = $_POST["chassiterc"];
$relatsinistro = $_POST["relatsinistro"];

//Configuração Site
$conexao = mysqli_connect("localhost", "u704421817_rodanteseguros", "rodante2020", "u704421817_rodanteseguros");

//Inserindo dados na tabela
$query = "INSERT INTO sinistro (datasinistro, horasinistro, bo, localsinistro, pontoref, nomeseg,
cpfseg, placaseg, culpsinistro, houveterc, nometerc, cpfterc, celterc, cnhterc, valcnhterc, catcnhterc,
cepterc, endterc, numterc, bairroterc, cidadeterc, estadoterc, modveicterc, placaterc, anomod, chassiterc, relatsinistro)
    VALUES ('{$datasinistro}', '{$horasinistro}', '{$bo}', '{$localsinistro}', '{$pontoref}',
    '{$nomeseg}', '{$cpfseg}', '{$placaseg}', '{$culpsinistro}', '{$houveterc}', '{$nometerc}', '{$cpfterc}',
    '{$celterc}', '{$cnhterc}', '{$valcnhterc}', '{$catcnhterc}', '{$cepterc}', '{$endterc}', '{$numterc}',
    '{$bairroterc}', '{$cidadeterc}', '{$estadoterc}', '{$modveicterc}', '{$placaterc}', '{$anomod}',
    '{$chassiterc}', '{$relatsinistro}')";

//Verificando se os dados foram inseridos
if (mysqli_query($conexao, $query) > 0) {

    require __DIR__ . "/envio.php";
    $sinistro = new Email();

    $datForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $email = ('sinistro@rodanteseguros.com.br');
    
    $mensagem = "<html>Relatorio de Sinistro<br>Data Sinistro: {$datForm['datasinistro']}<br> 
    Hora Sinistro: {$datForm['horasinistro']}<br>BO: {$datForm['bo']}<br>Local Sinistro: {$datForm['localsinistro']}<br>
    Ponto de Referência: {$datForm['pontoref']}<br>Nome Segurado: {$datForm['nomeseg']}<br>
    CPF Segurado: {$datForm['cpfseg']}<br>Placa Segurado: {$datForm['placaseg']}<br>
    Culpado no Sinsitro: {$datForm['culpsinistro']}<br>Houve Terceiro: {$datForm['houveterc']}<br>
    Nome Terceiro: {$datForm['nometerc']}<br>CPF Terceiro: {$datForm['cpfterc']}<br>Celular Terceiro: {$datForm['celterc']}<br>
    CNH Terceiro: {$datForm['cnhterc']}<br>Validade CNH Terceiro: {$datForm['valcnhterc']}<br>
    Categ. CNH Terceiro: {$datForm['catcnhterc']}<br>CEP Terceiro: {$datForm['cepterc']}<br>
    Endereço Terceiro: {$datForm['endterc']}<br>Numero: {$datForm['numterc']}<br>Bairro: {$datForm['bairroterc']}<br>
    Cidade: {$datForm['cidadeterc']}<br>Estado: {$datForm['estadoterc']}<br>Modelo Veículo Terceiro: {$datForm['modveicterc']}<br>
    Placa Veículo Terceiro: {$datForm['placaterc']}<br>Ano Modelo: {$datForm['anomod']}<br>
    Chassi Terceiro: {$datForm['chassiterc']}<br>Relato Sinisto: {$datForm['relatsinistro']}<br></html>";
    
    $sinistro->enviar($mensagem, $email);
    
};

mysqli_close($conexao);

?>