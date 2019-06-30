<?php 
  session_start();
  include_once("../config/conexao.php");
  include_once("../index.php");
  include_once ("../controller/ClienteDAO.php");
  include_once("../model/Cliente.php");
  $dao = new ClienteDAO();
  $cliente = new Cliente();

  $NOME = isset($_POST['nome'])?$_POST['nome']:"";
  $EMAIL = isset($_POST['email'])?$_POST['email']:"";
  $LOGIN = isset($_POST['login'])?$_POST['login']:"";
  $SENHA = isset ($_POST['senha'])?$_POST['senha']:"";
  $erro = false;


  $operacao = isset($_POST['operacao'])?$_POST['operacao']:"";

if ($SENHA = isset ($_POST['senha'])?$_POST['senha']:"" ) {
    $SENHA = md5($_POST['senha']);
}

  if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'true') {
     $cliente = new Cliente();

      $cliente->setNOME($NOME);
      $cliente->setEMAIL($EMAIL);
      $cliente->setLOGIN($LOGIN);
      $cliente->setSENHA($SENHA);
      $dao->inserir($cliente);

      echo "<script>alert('Agora você deve logar');</script>";
  }

  if ($operacao == "logar") {
    $LOGIN = isset($_POST['elogin'])?$_POST['elogin']:"";
    $SENHA = isset($_POST['esenha'])?$_POST['esenha']:"";

    if (!empty($LOGIN) and !empty($SENHA)) {
          $cliente->setLOGIN($LOGIN);
          $cliente->setSENHA(md5($SENHA));
          $logar = $dao->logar($cliente);
          if ($logar) {
            echo("<script>window.location = 'view/CadastrarServicoView.php'; alert('Bem vindo, $LOGIN!');</script>");
            $_SESSION['logado'] = $LOGIN;
          }
          else{
            echo "erro";
          }
        }    
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>


  <style type="text/css">
    #img1, #img2 {
      height: 100px;
      width: 100px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 5%;
      margin-bottom: auto;
    }

  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Certo</title>

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

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">



      <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
       <?php 
          if(isset($_SESSION['logado'])){
          ?>
            <a class="nav-item" href="logout.php" id="botaoSair">Sair</a>
          <?php
           }
        ?>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Área do administrador!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">
          </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="" id="bt" data-toggle="modal" data-target="#conta">Entrar!</a>
        </div>
      </div>
    </div>
  </section>
   <div class="modal fade " id="conta" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">ÁREA DE LOGIN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="post" action="#">
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="tec" placeholder="Técnico" required></center>
            <div id="loginLogar"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="status" placeholder="Status" required></center>
            <div id="loginLogar"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="valor" placeholder="Valor" required></center>
            <div id="loginLogar"></div>
          </div>
          <div class="form-group" >
             <button type="submit" class="btn btn-primary" name="operacao" value="logar" id="entrar" onclick="">Entrar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
         
        </form>
          
        </div>
      </div>
    </div>

          <div class="form-group" >
          </div>
         
      </div>
    </div>
  </div>
</div>



<footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">&copy; 2019 - Camila e Wállisson - Trabalho de Web - Dalker Pinheiro</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/creative.min.js"></script>

</body>
<script type="text/javascript">

  $('#bt').click(function () {
    $('#conta').modal('show');
  });

  $('#cadastro').click(function () {
    $('#logar').modal('hide');
  });


  function validar(){
    var nome = areaCadastro.nome.value;


    if (nome == "") {
      document.getElementById("nomeCad").innerHTML = "Preencha campo nome";
      return false;
    }
  }
 

  
</script>
