<?php
     include_once("../model/Cliente.php");
    include_once ("../controller/ClienteDAO.php");
    session_start();

    $cliente = new Cliente();
    $clienteDAO = new ClienteDAO();

    $clientes = $clienteDAO->listarTodos();

	if (isset($_POST['deslogar'])) {
		unset($_SESSION['idAdmin']);
	}
	if (!empty($_SESSION['idAdmin'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>

        <style type="text/css">

        </style>

        <!-- Font Awesome Icons -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS - Includes Bootstrap -->
        <link href="../css/creative.min.css" rel="stylesheet">
        <link href="../font/css/open-iconic-bootstrap.scss" rel="stylesheet" type="text/css" href="">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                   <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a href="#" id="btSair" class="nav-link js-scroll-trigger" onclick="">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="modal" tabindex="-1" role="dialog" id="confirmar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente sair?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <form method="post">
                            <button type="submit" name="deslogar" class="btn btn-primary">Sair</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Clientes</h2>
                        <hr class="divider light my-4">
                        <p class="text-white-50 mb-4">Seja bem vindo</p>
                    </div>
                </div>
            </div>
            <br>
     


        </section>
        <br>

        <div class="container">
        <div class="table-responsive-lg" >
            <table class="table  table-hover ">
                <thead class="thead-warning">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CELULAR</th>
                <th scope="col">CEP</th>
                <th scope="col">BAIRRO</th>
                <th scope="col">RUA</th>
                <th scope="col">NÚMERO</th>
                <th colspan="2"></th>
              </tr>
                </thead>


              <?php 
                foreach ($clientes as $cliente) {
    
                    ?>
                <tbody>
                    <td>
                      <th scope="row"><?=$cliente['ID']?></th>
                      <th scope="col"><?=$cliente['NOME']?></th>
                      <th scope="col"><?=$cliente['EMAIL']?></th>
                      <th scope="col"><?=$cliente['CELULAR']?></th>
                      <th scope="col"><?=$cliente['CEP']?></th>    
                      <th scope="col"><?=$cliente['BAIRRO']?></th>  
                      <th scope="col"><?=$cliente['RUA']?></th>
                      <th scope="col"><?=$cliente['NUMERO']?></th>

                    </td>

                <?php }?>
                </tbody>
            </table>
        </div>
    </div>

        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted"> &copy; 2019 - Camila e Wállisson - Trabalho de Web - Dalker Pinheiro</div>
            </div>
        </footer>
    </body>

    </html>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/creative.min.js"></script>
    <script type="text/javascript">
        $('#btSair').click(function() {
            $('#confirmar').modal('show');
        });
    </script>
    <?php
	}else{
		header('location:../index.php');
	}
?>