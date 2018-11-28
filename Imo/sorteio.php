<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>I M O</title>
        <link rel="stylesheet" href="custom/custom-sorteio.css">
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
            <div class="col-12">
                <div align="center"><img src="img/geladeira.jpg" class="img-fluid" alt="Responsive image"></div>
            </div>
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">Cod. sorteio</th>
                        <th scope="col"> Descrição</th>
                        <th scope="col">Ticket´s vendidos</th>
                        <th scope="col">Vencimento</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Exemplo do exemplo</td>
                        <td>1200</td>
                        <td>00/00/0000</td>
                        <td>1,00</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <input type="number" class="aposta btn" id="numero">   
                <button class="btn btn-success"> Fazer aposta</button>    
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
