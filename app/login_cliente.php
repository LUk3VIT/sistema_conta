<?php

    require_once '../classes/repositorioCliente.php';
    $repositorio = new RepositorioClientesMySQL();

    $email_cliente = $_POST['email'];
    $senha_cliente = $_POST['senha'];

    echo $email_cliente;
    echo $senha_cliente;

?>