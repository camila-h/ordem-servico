<?php
  include_once("../model/Tecnico.php"); 
  include_once ("../controller/TecnicoDAO.php");
	session_start();

    $tecnico = new Tecnico();
    $tecnicoDAO = new TecnicoDAO();    
	if (isset($_POST['deslogar'])) {
		unset($_SESSION['idAdmin']);
	}
	if (!empty($_SESSION['idAdmin'])) {
        if(isset($_POST['nomeTecnico']) and isset($_POST['emailTecnico']) and isset($_POST['telTecnico']) and isset($_POST['espTecnico']) and isset($_POST['loginTecnico']) and isset($_POST['senhaTecnico'])){
        
        $tecnico->setNOME($_POST['nomeTecnico']); 
        $tecnico->setEMAIL($_POST['emailTecnico']); 
        $tecnico->setCELULAR($_POST['telTecnico']);
        $tecnico->setESPECIALIDADE($_POST['espTecnico']);
        $tecnico->setLOGIN($_POST['loginTecnico']);
        $tecnico->setSENHA (md5($_POST['senhaTecnico']));
        echo "<script>alert('Cadastrado');</script>";
        $tecnicoDAO->inserir($tecnico);



    }
         


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
                        <h2 class="text-white mt-0">Cadastrar Técnico</h2>
                        <hr class="divider light my-4">
                        <p class="text-white-50 mb-4">Seja bem vindo</p>
                    </div>
                </div>
            </div>
            <br>

        <form method="post">
            <div class="list-group container">
                <div class="form-group">
                    <input  class="form-control"  type="text" id="nomeTec" name="nomeTecnico" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <input  class="form-control"  type="email" id="emailTec" name="emailTecnico" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input  class="form-control"  type="text" id="telTec" name="telTecnico" placeholder="Telefone" required>
                </div>
                <div class="form-group">
                    <input  class="form-control"  type="text" id="espTec" name="espTecnico" placeholder="Especialidade" required>
                </div>
                 <div class="form-group">
                    <input  class="form-control"  type="text" id="loginTec" name="loginTecnico" placeholder="Login" required>
                </div>
                 <div class="form-group">
                    <input  class="form-control"  type="password" id="senhaTec" name="senhaTecnico" placeholder="Senha" required>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary" name="cadTec" value="Cadastrar" id="cadastrarTec" onclick="">Cadastrar</button>
                </div>
            </div>
        </form>
        </section>

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

        $("#telTec").mask("(00)00000-0000");
                          
    </script>
    <?php
	}else{
		header('location:../index.php');
	}
?>