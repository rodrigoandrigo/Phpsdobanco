<?php

class conexao {

    private $usuario = "root";
    private $senha = "123456";
    private $caminho = "127.0.0.1";
    private $banco = "Imo";
    private $con;

    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha, $this->banco)or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
        //$this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
        //mysqli_select_db($this->con, $this->banco) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
    }

    public function getCon() {
        return $this->con;
    }

}
