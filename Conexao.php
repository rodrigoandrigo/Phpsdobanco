<?php

class Banco {

    private $cnn, $qry, $sql, $db;
    private $host = "localhost";         //ip do seu localhost
    private $user = "postgres";     //user do banco de dados
    private $pass = "123456";            //pasword do seu banco de dados
    private $banco = "nome_banco";       //nome do seu BD        

    public function setHost($ip) {
        $this->host = $ip;
    }

    public function setUser($usr) {
        $this->user = $usr;
    }

    public function setPass($pwd) {
        $this->pass = $pwd;
    }

    public function setBanco($db) {
        $this->banco = $db;
    }

    private function Conectar() {

        $DADOS = (object) array(
                    "host" => $this->host,
                    "port" => $this->porta,
                    "user" => $this->user,
                    "pass" => $this->pass,
                    "banco" => $this->banco
        );
        $str_conn = "host=" . $DADOS->host . " port=" . $DADOS->port . " dbname=" . $DADOS->banco . " user=" . $DADOS->user . " password=" . $DADOS->pass;
        $this->cnn = pg_connect($str_conn) or die("Erro ao tentar selecionar servidor da base de dados: " . pg_error());
    }

    public function Executar($sql) {
        $this->sql = (string) $sql;

        self::Conectar();
        $this->qry = pg_query($this->cnn, $this->sql) or die("Erro ao executar query na base de dados: " . pg_error());

        if (pg_affected_rows($this->qry) > 0) {
            return $this->qry;
        } else {
            return 0;
        }

        self::Desconectar();
    }

    private function Desconectar() {
        return pg_close($this->cnn);
    }

}
?>



