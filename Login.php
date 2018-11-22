<?php

class Autentificacao {

    public function __constructor($login, $senha) {
        $this->_login = addslashes($login);
        $this->_senha = addslashes($senha);
        self::validaUser();
    }

    protected function validaUser() {
        $sql = "select para autenticacao";
        $rtn = parent::Executar($sql);

        if ($rtn == '0') {
            //nenhum usuario foi encontrado
        } else {
            //Usuario encontrado
            //Você pode dar um fetch alguma coisa aqui para ver se ele está ou nao bloqueado;
            //E daqui mesmo da classe jogar os dados para dentro de uma sessao com o nome dele
            //e retornar true caso esteja tudo bem e redirecionar para a pagina de acesso.
            return true;
        }
    }

}
