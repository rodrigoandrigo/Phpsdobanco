<?php

class perfilDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new conexao();
    }

    public function cadastrarU($pessoa) {
        $sql = "insert into perfil(senha,email, endereco, endereco2,cidade,estado,cep) values ('" . $pessoa->getSenha() . "', '" . $pessoa->getEmail() . "','" . $pessoa->getEndereco() . "','" . $pessoa->getInputAddress2() . "','" . $pessoa->getCidade() . "','" . $pessoa->getEstado() . "','" . $pessoa->getCep() . "')";
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

}
