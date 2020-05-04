<?php

//Recebendo dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

//Conectando em localhost
$conexao = mysqli_connect("localhost", "u704421817_rodanteseguros", "rodante2020", "u704421817_rodanteseguros");

//Inserindo dados na tabela
$query = "INSERT INTO contato (nome, email, assunto, mensagem)
    VALUES ('{$nome}', '{$email}', '{$assunto}', '{$mensagem}')";

//Verificando se os dados foram inseridos
if (mysqli_query($conexao, $query) > 0) {
    
    require __DIR__."/envio.php";
    
    $contato = new Email();
    
    $datForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $email = ('rodanteseguros@gmail.com');
  
    $mensagem = "<html>Formulario Contato<br>De: {$datForm['nome']}<br> Email: {$datForm['email']}<br> Assunto: {$datForm['assunto']}<br> Mensagem: {$datForm['mensagem']}</html>";
    
    //$contato->contato($datForm['nome'], $datForm['email'], $datForm['assunto'], $datForm['mensagem']);
    $contato->enviar($mensagem, $email);
};

mysqli_close($conexao);
?>