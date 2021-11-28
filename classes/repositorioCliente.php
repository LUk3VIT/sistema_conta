<?php

require_once 'cliente.php';
require_once 'conexao.php';

interface IRepositorioCliente {
    public function LoginCliente($email_cliente,$senha_cliente);
    public function CadastraCliente($Cliente);
}

class RepositorioClientesMySQL implements IRepositorioCliente
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","contas");
        if($this->conexao->conectar()==false){
            echo "Erro de conexao ".mysqli_connect_error();
        }
    }

   public function LoginCliente($email_cliente,$senha_cliente)
    {
        $sql = "SELECT * FROM tbl_clientes WHERE email_cliente = '$email_cliente' AND senha_cliente = '$senha_cliente'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function CadastraCliente($Cliente)
    {
        $id_cliente = $Cliente->getIdCliente();
        $nome_cliente = $Cliente->getNomeCliente();
        $email_cliente = $Cliente->getEmailCliente();
        $senha_cliente = $Cliente->getSenhaCliente();

        $sql = "INSERT INTO tbl_clientes (id_cliente,nome_cliente,email_cliente,senha_cliente) VALUES ('$id_cliente','$nome_cliente','$email_cliente','$senha_cliente')";
        $this->conexao->executarQuery($sql);
    }
    
}
    