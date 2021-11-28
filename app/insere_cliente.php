<?php

require_once '../classes/repositorioCliente.php';
$repositorio = new RepositorioClientesMySQL();

$nome_cliente =$_POST['nome'];
$email_cliente = $_POST['email'];
$senha_cliente = $_POST['senha'];

$numeroLinhas = $repositorio->LoginCliente($email_cliente,$senha_cliente);
if($numeroLinhas > 0){
    session_start();
    $mensagem = "Email já cadastrado!!!!";
    $_SESSION['mensagem']=$mensagem;
    header('Location: cadastrar_cliente.php');
} else {
    $Cliente = new Clientes(NULL,$nome_cliente,$email_cliente,$senha_cliente);
    $cadastra_cliente = $repositorio->CadastraCliente($Cliente);
    header('Location: index.php');
}
