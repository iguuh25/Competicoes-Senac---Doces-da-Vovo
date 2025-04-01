<?php
/*CODIGO SEM PROTEÇÃO */
/*
session_start();
include_once('conexao.php');

$nome = $_POST['nNome'];
$email = $_POST['nEmail'];
$mensagem = $_POST['nMensagem'];

$sql = "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
$conexao->query($sql);

$_SESSION['mensagem'] = "Mensagem enviada com sucesso";

header('Location: contato.php');
*/

/*CODIGO COM SEGURANÇA*/
session_start(); //Inicia a $SESSION
include_once('conexao.php'); //Inclui o arquivo conexao.php a este

$nome = htmlspecialchars($_POST['nNome']); //Converte caracteres invalidos
$email = filter_var($_POST['nEmail'], FILTER_SANITIZE_EMAIL); //Remove caracteres invalidos
$mensagem = htmlspecialchars($_POST['nMensagem']); //Converte caracteres invalidos

//Valida o email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['mensagem'] = "E-mail inválido!";
    header('Location: contato.php');
    exit;
}

//Verifica o tamanho da mensagem
if(strlen($mensagem) > 400){
    $_SESSION['mensagem'] = "A mensagem ultrapassa 400 caracteres!";
    header('Location: contato.php');
    exit;
}


/*Faz uma prevenção contra injeção SQL */
$sql = $conexao->prepare("INSERT INTO contato (nome, email, mensagem) VALUES (?, ?, ?)"); //Prepara a conslta mas não passa os valores
$sql->bind_param("sss", $nome, $email, $mensagem); //completa a consulta, sendo o primeiro parametro o tipo do valor.

if(!$sql->execute()){ //Executa a consulta
    $_SESSION['mensagem'] = "Erro ao enviar!";
    header('Location: contato.php');
    exit;
}

$sql = "SELECT mensagem FROM contato ORDER BY id DESC LIMIT 1";
$sql = $conexao->query($sql);

if($sql->num_rows > 0){
    $linha = $sql->fetch_assoc();
    $_SESSION['mensagem'] = $linha['mensagem'];
}

header('Location: contato.php');

?>