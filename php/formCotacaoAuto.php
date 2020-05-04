<?php

//Coletando dados do formulário
$iniciovigencia = $_POST["iniciovigencia"];
$fimvigencia = $_POST["fimvigencia"];
$tiposeguro = $_POST["tiposeguro"];
$bonus = $_POST["bonus"];
$cepcirculacao = $_POST["cepcirculacao"];
$ceppernoite = $_POST["ceppernoite"];
$cpfcnpj = $_POST["cpfcnpj"];
$pessoa = $_POST["pessoa"];
$nomerazao = $_POST["nomerazao"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$placa = $_POST["placa"];
$chassi = $_POST["chassi"];
$zerokm = $_POST["zerokm"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$anofabricacao = $_POST["anofabricacao"];
$anomodelo = $_POST["anomodelo"];
$tipoveiculo = $_POST["tipoveiculo"];
$isencaofiscal = $_POST["isencaofiscal"];
$antifurto = $_POST["antifurto"];
$alienado = $_POST["alienado"];
$chassiremarcado = $_POST["chassiremarcado"];
$veicblindado = $_POST["veicblindado"];
$garagemresidencia = $_POST["garagemresidencia"];
$garagemtrabalho = $_POST["garagemtrabalho"];
$garagemestudo = $_POST["garagemestudo"];
$utilveic = $_POST["utilveic"];
$quantveicresid = $_POST["quantveicresid"];
$vitroubofurto = $_POST["vitroubofurto"];
$distanciatrab = $_POST["distanciatrab"];
$kmmensal = $_POST["kmmensal"];
$relacaocomcliente = $_POST["relacaocomcliente"];
$cpfcondutor = $_POST["cpfcondutor"];
$nomecondutor = $_POST["nomecondutor"];
$datanasccondutor = $_POST["datanasccondutor"];
$sexocondutor = $_POST["sexocondutor"];
$estcivilcondutor = $_POST["estcivilcondutor"];
$profissaocondutor = $_POST["profissaocondutor"];
$tiporesid = $_POST["tiporesid"];
$datahabilit = $_POST["datahabilit"];
$condutoradicional = $_POST["condutoradicional"];
$cobertura = $_POST["cobertura"];
$franquia = $_POST["franquia"];
$isencaofranquia = $_POST["isencaofranquia"];
$rcfvdmat = $_POST["rcfvdmat"];
$rcfvdc = $_POST["rcfvdc"];
$rcfvdm = $_POST["rcfvdm"];
$appmorteinvalid = $_POST["appmorteinvalid"];
$despesasext = $_POST["despesasext"];
$tabelafipe = $_POST["tabelafipe"];
$assist24 = $_POST["assist24"];
$vidros = $_POST["vidros"];
$carresdiarias = $_POST["carresdiarias"];
$carresveiculo = $_POST["carresveiculo"];

//Configuração Site
$conexao = mysqli_connect("localhost", "u704421817_rodanteseguros", "rodante2020", "u704421817_rodanteseguros");

$query = "INSERT INTO cotacaoauto (iniciovigencia, fimvigencia, tiposeguro, bonus, cepcirculacao,
ceppernoite, cpfcnpj, pessoa, nomerazao, email, telefone, celular, placa, chassi, zerokm,
marca, modelo, anofabricacao, anomodelo, tipoveiculo, isencaofiscal, antifurto, alienado, chassiremarcado,
veicblindado, garagemresidencia, garagemtrabalho, garagemestudo, utilveic, quantveicresid,
vitroubofurto, distanciatrab, kmmensal, relacaocomcliente, cpfcondutor, nomecondutor,
datanasccondutor, sexocondutor, estcivilcondutor, profissaocondutor, tiporesid, datahabilit, condutoradicional,
cobertura, franquia, isencaofranquia, rcfvdmat, rcfvdc, rcfvdm, appmorteinvalid, despesasext,
tabelafipe, assist24, vidros, carresdiarias, carresveiculo) VALUES ('{$iniciovigencia}', '{$fimvigencia}',
'{$tiposeguro}', '{$bonus}', '{$cepcirculacao}', '{$ceppernoite}', '{$cpfcnpj}', '{$pessoa}', '{$nomerazao}',
'{$email}', '{$telefone}', '{$celular}', '{$placa}', '{$chassi}', '{$zerokm}', '{$marca}', '{$modelo}',
'{$anofabricacao}', '{$anomodelo}', '{$tipoveiculo}', '{$isencaofiscal}', '{$antifurto}', '{$alienado}', '{$chassiremarcado}', 
'{$veicblindado}', '{$garagemresidencia}', '{$garagemtrabalho}', '{$garagemestudo}', '{$utilveic}', 
'{$quantveicresid}', '{$vitroubofurto}', '{$distanciatrab}', '{$kmmensal}', '{$relacaocomcliente}', 
'{$cpfcondutor}', '{$nomecondutor}', '{$datanasccondutor}', '{$sexocondutor}', '{$estcivilcondutor}',
'{$profissaocondutor}', '{$tiporesid}', '{$datahabilit}', '{$condutoradicional}', '{$cobertura}', '{$franquia}',
'{$isencaofranquia}', '{$rcfvdmat}', '{$rcfvdc}', '{$rcfvdm}', '{$appmorteinvalid}', '{$despesasext}',
'{$tabelafipe}', '{$assist24}', '{$vidros}', '{$carresdiarias}', '{$carresveiculo}')";

if(mysqli_query($conexao, $query) > 0){

    require __DIR__ . "/envio.php";
    $cotacaoauto = new Email();

    $datForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $email = ('cotacoes@rodanteseguros.com.br');
    
    $mensagem = "<html>Formulario Cotação Auto<br>Inicio Vigência: {$datForm['iniciovigencia']}<br> 
    Fim Vigência: {$datForm['fimvigencia']}<br> Tipo Seguro: {$datForm['tiposeguro']}<br> 
    Bonus: {$datForm['bonus']}<br> Cep Circulação: {$datForm['cepcirculacao']}<br>
    Cep Pernoite: {$datForm['ceppernoite']}<br> CPF/CNPJ: {$datForm['cpfcnpj']}<br> Pessoa: {$datForm['pessoa']}<br>   
    Nome/Razão: {$datForm['nomerazao']}<br> E-mail: {$datForm['email']}<br> Telefone: {$datForm['telefone']}<br>
    Celular: {$datForm['celular']}<br> Placa: {$datForm['placa']}<br> Chassi: {$datForm['chassi']}<br>   
    Zero KM: {$datForm['zerokm']}<br> Marca: {$datForm['marca']}<br> Modelo: {$datForm['modelo']}<br> Ano Fabricação: {$datForm['anofabricacao']}<br>    
    Ano Modelo: {$datForm['anomodelo']}<br> Tipo Veículo: {$datForm['tipoveiculo']}<br> Isenção Fiscal: {$datForm['isencaofiscal']}<br> Anti Furto: {$datForm['antifurto']}<br>   
    Alienado: {$datForm['alienado']}<br> Chassi Remarcado: {$datForm['chassiremarcado']}<br> Veículo Blindado: {$datForm['veicblindado']}<br>   
    Garagem Residencia: {$datForm['garagemresidencia']}<br> Garagem Trabalho: {$datForm['garagemtrabalho']}<br> Garagem Estudo: {$datForm['garagemestudo']}<br>  
    Utilização do Veículo: {$datForm['utilveic']}<br> Quant Veiculos na Resid: {$datForm['quantveicresid']}<br> Vitima Roubo/Furto: {$datForm['vitroubofurto']}<br>
    Distancia do trabalho: {$datForm['distanciatrab']}<br> KM Mensal: {$datForm['kmmensal']}<br> Relação com cliente: {$datForm['relacaocomcliente']}<br>
    CPF Condutor: {$datForm['cpfcondutor']}<br> Nome Condutor: {$datForm['nomecondutor']}<br> Data de Nasc: {$datForm['datanasccondutor']}<br>
    Sexo: {$datForm['sexocondutor']}<br> Estado Civil: {$datForm['estcivilcondutor']}<br> Profissão: {$datForm['profissaocondutor']}<br>  
    Tipo de Residencia: {$datForm['tiporesid']}<br> Data da Habilitação: {$datForm['datahabilit']}<br> Condutor Adicional: {$datForm['condutoradicional']}<br> 
    Cobertura: {$datForm['cobertura']}<br> Franquia: {$datForm['franquia']}<br> Insenção Primeiro Sinistro: {$datForm['isencaofranquia']}<br> 
    RCFV D Materiais: {$datForm['rcfvdmat']}<br> RCFV DC: {$datForm['rcfvdc']}<br> RCFV DM: {$datForm['rcfvdm']}<br> App Morte/Invalidez: {$datForm['appmorteinvalid']}<br> 
    Despesas Extraordinarias: {$datForm['despesasext']}<br> Tabela Fipe: {$datForm['tabelafipe']}<br> Assistencia 24hrs: {$datForm['assist24']}<br> 
    Vidros: {$datForm['vidros']}<br> Carro Reserva Diária: {$datForm['carresdiarias']}<br> Carro Reserva Veiculo: {$datForm['carresveiculo']}<br> </html>";
   
    $cotacaoauto->enviar($mensagem, $email);
};

mysqli_close($conexao);

?>