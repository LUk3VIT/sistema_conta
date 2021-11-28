<?php

class Clientes
{
    private $id_cliente;
    private $nome_cliente;
    private $email_cliente;
    private $senha_cliente;

    public function __construct($id_cliente,$nome_cliente,$email_cliente,$senha_cliente)
    {
        $this->id_cliente=$id_cliente;
        $this->nome_cliente=$nome_cliente;
        $this->email_cliente=$email_cliente;
        $this->senha_cliente=$senha_cliente;
    }

    public function setIdCliente($id_cliente){
        $this->id_cliente=$id_cliente;
    }

    public function getIdCliente(){
        return $this->id_cliente;
    }

    public function setNomeCliente($nome_cliente){
        $this->nome_cliente=$nome_cliente;
    }

    public function getNomeCliente(){
        return $this->nome_cliente;
    }

    public function setEmailCliente($email_cliente){
        $this->email_cliente=$email_cliente;
    }

    public function getEmailCliente(){
        return $this->email_cliente;
    }

    public function setSenhaCliente($senha_cliente){
        $this->senha_cliente=$senha_cliente;
    }

    public function getSenhaCliente(){
        return $this->senha_cliente;
    }
}