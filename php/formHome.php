<?php

//Recebendo dados do formulario
$nome = $_POST["name"];
$email = $_POST["email"];
$telefone = $_POST["phone"];
$produtos = $_POST["produtos"];
$mensagem = $_POST["mensagem"];

//Conectando em localhost
$conexao = mysqli_connect("localhost", "u704421817_rodanteseguros", "rodante2020", "u704421817_rodanteseguros");

//Inserindo dados na tabela
$query = "INSERT INTO home (nome, email, telefone, produto, mensagem)
    VALUES ('{$nome}', '{$email}', '{$telefone}','{$produtos}', '{$mensagem}')";

//Verificando se os dados foram inseridos
if (mysqli_query($conexao, $query) > 0) {

    require __DIR__ . "/envio.php";
    $home = new Email();

    $datForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $email = ('rodanteseguros@gmail.com');
    
    $mensagem = "<html>Formulario Home<br>De: {$datForm['name']}<br> Email: {$datForm['email']}<br> Telefone: {$datForm['phone']}<br> Produto: {$datForm['produtos']}<br> Mensagem: {$datForm['mensagem']}</html>";
   
    $home->enviar($mensagem, $email);
    
};

mysqli_close($conexao);
?>