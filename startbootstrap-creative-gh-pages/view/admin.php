<?php
	session_start();
    include_once('../controller/AdministradorDAO.php');
    include_once('../model/Administrador.php');
    $Administrador = new Administrador();
	if (isset($_POST['deslogar'])) {
		unset($_SESSION['idAdmin']);
	}
	if (!empty($_SESSION['idAdmin'])) {
        $AdministradorDAO = new AdministradorDAO();
        $dados_admin = $AdministradorDAO->carregar($_SESSION['idAdmin']);

        $nome = !empty($nome)?$nome:"";
        $email = !empty($email)?$email:"";  
        $celular = !empty($celular)?$celular:"";
        $login = !empty($login)?$login:"";
        $senha = !empty($senha)?$senha:"";
        $id = !empty($id)?$id:"";


        foreach ($dados_admin as $dado_admin) {
            $nome = $dado_admin['NOME'];
            $email = $dado_admin['EMAIL'];
            $celular = $dado_admin['CELULAR'];
            $login = $dado_admin['LOGIN'];
            $senha = $dado_admin['SENHA'];
            $id = $dado_admin['ID'];
        }
        $salvar =  isset($salvar)?$salvar:"";
        if (isset($_POST['salvar'])) {
            $Administrador->setNOME($_POST['nomeAdmin']);   
            $Administrador->setEMAIL($_POST['emailAdmin']);
            $Administrador->setCELULAR($_POST['celAdmin']);
            $Administrador->setLOGIN($_POST['loginAdmin']);
            $Administrador->setID($_POST['idAdmin']);
            $AdministradorDAO->atualizar($Administrador);
            unset($_SESSION['idAdmin']);
            header('location:../index.php');





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
                            <a href="#"  data-toggle="modal" data-target="#editar_dados" class="nav-link js-scroll-trigger" onclick=""><?=$nome?></a>
                        </li>
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
          <div class="modal" tabindex="-1" role="dialog" id="editar_dados">
            <div class="modal-dialog" role="document">
                <form method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edite seus dados</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="idAdmin" id="idAdmin" value="<?=$id?>">
                         <div class="form-group">
                            <center><input class="form-control" id="exampleFormControlTextarea1" name="nomeAdmin" id="nomeEdit" value="<?=$nome?>" rows="2" placeholder="Nome"></center>
                         </div>
                         <div class="form-group">
                            <center><input class="form-control" id="exampleFormControlTextarea1" name="emailAdmin" id="emailEdit" rows="2" value="<?=$email?>" placeholder="Email"></center>
                         </div>
                         <div class="form-group">
                            <center><input class="form-control" id="exampleFormControlTextarea1" name="celAdmin" id="celEdit" value="<?=$celular?>" rows="2" placeholder="Celular"></center>
                         </div>
                         <div class="form-group">
                            <center><input class="form-control" id="exampleFormControlTextarea1" name="loginAdmin" id="loginEdit" value="<?=$login?>" rows="2" placeholder="Login"></center>
                         </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Área do Administrador</h2>
                        <hr class="divider light my-4">
                        <p class="text-white-50 mb-4">Seja bem vindo</p>
                    </div>
                </div>
            </div>
            <br>

    <div class="container">
        <div class="table-responsive-lg" >   
            <div class="list-group container">
                <a href="cadastrarTec.php" class="list-group-item list-group-item-action list-group-item-warning">Cadastrar técnico</a>
                <a href="visualizarTec.php" class="list-group-item list-group-item-action  list-group-item-warning">Visualizar técnicos</a>
                <a href="visualizarCliente.php" class="list-group-item list-group-item-action  list-group-item-warning">Visualizar clientes</a>
                <a href="visualizarServico.php" class="list-group-item list-group-item-action list-group-item-warning">Visualizar serviços</a>
            </div>
        </div>
    </div>

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
    </script>
    <?php
	}else{
		header('location:../index.php');
	}
?>