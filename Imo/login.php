<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>I M O</title>
        <link rel="stylesheet" href="custom/custom-login.css">
        <link rel="stylesheet" href="css/bootstrap.css"> 

    </head>
    <body>
        <div class="bg-dark">
            <nav class="container navbar navbar-expand-md navbar-dark ">
                <a class="navbar-brand navlogo" href="#">I M O</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>    


        <form class="container ">
            <div>     
                <div class="form-group ">
                    <div class="alinhar">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control1" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="alinhar">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control1" id="senha" placeholder="*******">
                    </div>   
                </div>
                <div class="form-group form-check ">
                    <div class="alinhar">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1">Lembre-se de mim</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark alinhar">Entrar</button>
            </div>
        </form>   

        <footer class=" modal-footer  bg-dark">
            <div class="container footer-copyright text-center ">© 2018 Copyright
                <a href="login.html"> imo.com.br</a>
            </div>
        </footer>     




        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>                                  
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <?php
        $conexao1 = pg_connect("host=localhost port=5432 dbname=Imo user=postgres password=123456") or die('Nao foi possival se conectar: ' . pg_last_error());

        $login = isset($_POST['email']);
        $senha = isset($_POST['senha']);

        class Autentificacao {

            public function __constructor($login, $senha) {
                $this->_login = addslashes($login);
                $this->_senha = addslashes($senha);
                self::validaUser();
            }

            protected function validaUser() {
                $sql = pg_query("SELECT * FROM perfil WHERE email = '{$login}' AND senha = '{$senha}'");
                $rtn = parent::Executar($conexao1, $sql);

                if ($rtn == '0') {
                    echo "Você não pode logar-se! Este usuário ou senha estão inválidos!";
                } else {
                    return true;
                }
            }

        }
        ?>

    </body>


</html>
