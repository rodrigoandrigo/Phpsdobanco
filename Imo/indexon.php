<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>I M O</title>
        <link rel="stylesheet" href="custom/custom-indexon.css">
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
                                <a class="dropdown-item" href="#">Editar conta</a>
                                <a class="dropdown-item" href="home-sorteio.php">Sorteio</a>
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



        <section>
            <div class="container" >
                <div class=" row centralizar">
                    <div class="col-3 ">
                        <img src="img/7sight%20LOGO%20BRANCA.png" alt="Card image cap" class="img-thumbnail1">
                    </div>
                    <div class=" col-5">
                        <h2 class="h2"> Exemplo de exemplo </h2>
                        <p class="h6"> Cidade, bairro, número </p>
                        <p class="h6"> exemplo@email.com </p>
                        <p class="h6"> +55 (00) 99999-9999 </p>
                        <a href="">Editar</a>
                    </div >

                    <div class="col-4">
                        <div >
                            <button type="button" class="btn btn-success"> Comprar ticket´s</button>    
                        </div>
                        <div>
                            <button type="button" class="btn btn-success"> Vender ticket´s</button>  
                        </div>
                        <div>
                            <p class="h6">Meus ticket´s</p>
                            <a class="ticket" href="">00000,00</a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <hr>
        <section>
            <div class="container">

                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Cod</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data de vencimento</th>
                            <th scope="col">Ganhador</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>00/00/0000</td>
                            <td>Eddy</td>
                            <td>finalizado</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>00/00/0000</td>
                            <td>João</td>
                            <td>finalizado</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>00/00/0000</td>
                            <td>Lucas</td>
                            <td>correndo</td>
                        </tr>


                    </tbody>
                </table>    

            </div>
        </section>
        <hr>
        <section>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Cod</th>
                            <th scope="col">Data do Vencimento</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Total de ticket´s</th>
                            <th scope="col">Ganhador</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>00/00/0000</td>
                            <td>exemplo</td>
                            <td>0000</td>
                            <td>you</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>00/00/0000</td>
                            <td>exemplo</td>
                            <td>0000</td>
                            <td>João</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>00/00/0000</td>
                            <td>exemplo</td>
                            <td>0000</td>
                            <td>Gabriel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>



        <footer class=" modal-footer  bg-dark">
            <div class="container footer-copyright text-center ">© 2018 Copyright
                <a href="login.php"> imo.com.br</a>
            </div>
        </footer>     




        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>                                  
        <script type="text/javascript" src="js/bootstrap.js"></script>

    </body>


</html>
