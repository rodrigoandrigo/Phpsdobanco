<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>I M O</title>
        <link rel="stylesheet" href="custom/custom-cadastro.css">
        <link rel="stylesheet" href="css/bootstrap.css"> 

    </head>
    <body>
        <div class="bg-dark">
            <nav class="container navbar navbar-expand-md navbar-dark ">
                <a class="navbar-brand navlogo" href="login.php">I M O</a>
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


        <form class="container" action="cadastro.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="emaill" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" name="senhaa" class="form-control" id="senha" placeholder="*******">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="enderecoo" class="form-control" id="endereco" placeholder="Rua dos Bolos, nº 0">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidadee" class="form-control" id="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <select id="estado" name="estadoo" class="form-control">
                        <option selected>Acre (AC)</option>
                        <option selected>Alagoas (AL)</option>
                        <option selected>Amapá (AP)</option>
                        <option selected>Amazonas (AM)</option>
                        <option selected>Bahia (BA)</option>
                        <option selected>Ceará (CE)</option>
                        <option selected>Distrito Federal (DF)</option>
                        <option selected>Espírito Santo (ES)</option>
                        <option selected>Goiás (GO)</option>
                        <option selected>Maranhão (MA)</option>
                        <option selected>Mato Grosso (MT)</option>
                        <option selected>Mato Grosso do Sul (MS)</option>
                        <option selected>Minas Gerais (MG)</option>
                        <option selected>Pará (PA) </option>
                        <option selected>Paraíba (PB)</option>
                        <option selected>Paraná (PR)</option>
                        <option selected>Pernambuco (PE)</option>
                        <option selected>Piauí (PI)</option>
                        <option selected>Rio de Janeiro (RJ)</option>
                        <option selected>Rio Grande do Norte (RN)</option>
                        <option selected>Rio Grande do Sul (RS)</option>
                        <option selected>Rondônia (RO)</option>
                        <option selected>Roraima (RR)</option>
                        <option selected>Santa Catarina (SC)</option>
                        <option selected>São Paulo (SP)</option>
                        <option selected>Sergipe (SE)</option>
                        <option selected>Tocantins (TO)</option>

                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="ceo">CEP</label>
                    <input type="text" class="form-control" name="cepp" id="cep">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Aceitar termos de uso
                    </label>
                </div>
            </div>
            <button type="submit" name="envia" class="btn btn-dark">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </form>       




        <footer class=" modal-footer  bg-dark">
            <div class="container footer-copyright text-center ">© 2018 Copyright
                <a href=".html"> imo.com.br</a>
            </div>
        </footer>     




        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>                                  
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <?php
        /* include 'conexao.class.php';
          include 'pessoa.class.php';
          include 'perfilDAO.class.php';
          $perfilDAO = new perfilDAO();
          $pessoa = new pessoa(); */


        if ($_POST['envia']) {
            $senha = $_POST['senhaa'];
            $email = $_POST['emaill'];
            $endereco = $_POST['enderecoo'];
            $inputAddress2 = $_POST['complemento'];
            $cidade = $_POST['cidadee'];
            $estado = $_POST['estadoo'];
            $cep = $_POST['cepp'];

            $sql = "insert into perfil(senha,email, endereco, endereco2,cidade,estado,cep) values ('$senha', '$email','$endereco','$inputAddress2','$cidade','$estado','$cep')";
            $con = mysqli_connect('127.0.0.1', 'root', '123456', 'IMO', '3306')or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
            /* $pessoa->setSenha($senha);
              $pessoa->setEmail($email);
              $pessoa->setEndereco($endereco);
              $pessoa->setInputAddress2($inputAddress2);
              $pessoa->setCidade($cidade);
              $pessoa->setEstado($estado);
              $pessoa->setCep($cep);
              $vai = $perfilDAO->cadastrarU($pessoa);
              if ($vai == true) {
              echo 'Usuario registrado';
              } else {
              echo 'Usuario nao registrado';
              } */
        }

        /* include 'conexao.class.php';
          $conexao1 = pg_connect("host=localhost port=5432 dbname=Imo user=postgres password=123456") or die('Nao foi possival se conectar: ' . pg_last_error());

          $sql = "insert into perfil(senha,email, endereco, endereco2,cidade,estado,cep) values ('$senha', '$email','$endereco','$inputAddress2','$cidade','$estado','$cep')";

          $resultado = pg_query($conexao1, $sql);

          if ($resultado) {
          echo 'Cadastro realizado com sucesso';
          } else {
          echo 'Nao foi possivel realizar o cadastro';
          } */
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /* $conexao = mysql_connect('127.0.0.1', 'root', '123456');
          $db = mysql_select_db('IMO');
          $con_host = @mysql_connect($host, $username, $password);
          $con_db = @mysql_select_db($db, $con_host); */
        ?>

    </body>


</html>
