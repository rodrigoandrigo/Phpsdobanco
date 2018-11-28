<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>I M O</title>
        <link rel="stylesheet" href="custom/custom-cadastro-sto.css">
        <link rel="stylesheet" href="css/bootstrap.css"> 

    </head>
    <body>
        <div class="bg-dark">
            <nav class="container navbar navbar-expand-md navbar-dark ">
                <a class="navbar-brand navlogo" href="home-sorteio.php">I M O</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home-sorteio.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Minha conta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="indexon.php">Meu perfil</a>
                                <a class="dropdown-item" href="cadastro.php">Editar conta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php">Sair</a>
                            </div>

                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>  

        <section class="container">
            <form >
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Descrição</label>
                        <input type="email" class="form-control" id="email" placeholder="Descrição do sorteio">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Datadevencimento">Data do vencimento</label>
                        <input type="date" class="form-control" id="senha" placeholder="*******">
                    </div>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Rua dos Bolos, nº 0">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <select id="estado" class="form-control">
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
                        <input type="text" class="form-control" id="cep" placeholder="00-000-000">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="pt">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="pt">
                        <label class="custom-file-label" for="customFileLang">Foto do sorteio</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar sorteio</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </form>
        </section> 



        <footer class=" modal-footer  bg-dark">
            <div class="container footer-copyright text-center ">© 2018 Copyright
                <a href=".html"> imo.com.br</a>
            </div>
        </footer>     




        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>                                  
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <?php
        $conexao1 = pg_connect("host=localhost port=5432 dbname=Imo user=postgres password=123456") or die('Nao foi possival se conectar: ' . pg_last_error());

        $vencimento = isset($_POST['senha']);
        $descricao = isset($_POST['email']);
        $endereco = isset($_POST['endereco']);
        $cidade = isset($_POST['cidade']);
        $estado = isset($_POST['estado']);
        $cep = isset($_POST['cep']);

        $sql = "insert into sorteio(descricao,vencimento,endereco,cidade,estado,cep) values ('$descricao', '$vencimento','$endereco','$cidade','$estado','$cep')";

        $res = pg_exec($conexao1, $sql);
        if ($res) {
            echo 'Cadastro realizado com sucesso';
        } else {
            echo 'Nao foi possivel realizar o cadastro';
        }
        ?>

    </body>


</html>
