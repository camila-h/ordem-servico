<?php
   include_once('log.php');
   
           include_once ('controller/ClienteDAO.php');
           $dao = new ClienteDAO();
           $nome = isset($nome)?$nome:"";


       
           if (!empty($_SESSION['cliente'])) {
              header('location:view/CadastrarProbView.php');
           }
           if (!empty($_SESSION['idAdmin'])) {
             header('location:view/admin.php');
           }
            if (!empty($_SESSION['idTec'])) {
             header('location:view/servicosTec.php');
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
      <title>Index</title>
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
      <link href="css/creative.min.css" rel="stylesheet">
      <link href="font/css/open-iconic-bootstrap.scss" rel="stylesheet" type="text/css" href="">
   </head>
   <body id="page-top">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
         <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto my-2 my-lg-0">
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="#about">Conta</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="#services">Serviço</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="#portfolio">Servidor</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Masthead -->
      <header class="masthead">
         <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
               <div class="col-lg-10 align-self-end">
                  <h1 class="text-uppercase text-white font-weight-bold">SEJA BEM VINDO</h1>
                  <hr class="divider my-4">
               </div>
               <div class="col-lg-8 align-self-baseline">
                  <p class="text-white-75 font-weight-light mb-5">Serviços completos</p>
                  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about" >Clique</a>
               </div>
            </div>
         </div>
      </header>
      <!-- About Section -->
      <section class="page-section bg-primary" id="about">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h2 class="text-white mt-0">Nós temos o quê você precisa!</h2>
                  <hr class="divider light my-4">
                  <p class="text-white-50 mb-4">Entre na sua conta para solicitar um serviço</p>
                  <a class="btn btn-light btn-xl js-scroll-trigger" href=""  data-toggle="modal" data-target="#conta">Entrar!</a>
               </div>
            </div>
         </div>
      </section>
      <!-- MODAL CONTAS -->
      <div class="modal fade " id="conta" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="false">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">ÁREA DE LOGIN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="card-group">
                  <div class="card">
                     <img class="card-img-top" src="img/user.png" id="img1">
                     <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><a class="btn btn-primary" name="conta-cliente" id="conta-cliente" value="conta-cliente" href="#" data-toggle="modal" data-target="#logar"><span class="oi oi-person" id="bot1">Cliente</a></span></p>
                     </div>
                     <div class="card-footer">
                     </div>
                  </div>
                  <div class="card">
                     <img class="card-img-top" src="img/user (1).png" id="img2">
                     <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"> <button type="button" class="btn btn-secondary" value="conta-adm" data-dismiss="modal" id="conta-adm" value="conta-adm" href="#" >Administrador</button></p>
                     </div>
                     <div class="card-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group" >
            </div>
         </div>
      </div>
      </div>
      </div>
      <!-- MODAL LOGIN CLIENTE -->
      <div class="modal fade" id="logar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">ÁREA DE LOGIN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form method="post">
                     <div class="form-group">
                        <center><input  class="form-control"  type="text" name="elogin" placeholder="Login" required></center>
                        <div id="loginLogar"></div>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="password" name="esenha" placeholder="Senha" required></center>
                        <div id="senhaLogar"></div>
                     </div>
                     <div class="form-group" >
                        <button type="submit" class="btn btn-primary" name="logarCliente" value="logarCliente" id="entrar" onclick="">Entrar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                     </div>
                  </form>
                  <br>
                  <center>
                  <p>Caso não tenha uma conta,  <a href="#" data-toggle="modal" data-target="#cadastar" id="cadastro" > cadastre-se</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- MODAL LOGIN ADM  -->
      <div class="modal fade" id="logarAdm" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">ÁREA DE LOGIN ADM</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form method="post">
                     <div class="form-group">
                        <center><input  class="form-control"  type="text" name="loginAdm" placeholder="Login" required></center>
                        <div id="loginLogAdm"></div>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="password" name="senhaAdm" placeholder="Senha" required></center>
                        <div id="senhaLogAdm"></div>
                     </div>
                     <div class="form-group" >
                        <button type="submit" class="btn btn-primary" name="logarAdm" value="logarAdm" id="entrarAdm" onclick="">Entrar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                     </div>
                  </form>
                  <br>
               </div>
            </div>
         </div>
      </div>
      <?php require_once ('ModalCadastrar.php'); ?>
      <!-- Services Section -->
      <section class="page-section" id="services">
         <div class="container">
            <h2 class="text-center mt-0">Ao seu serviço</h2>
            <hr class="divider my-4">
            <div class="row">
               <div class="col-lg-3 col-md-6 text-center">
                     <div class="mt-5">
                        <i class="fas fa-4x fa-gem text-primary mb-4 textservico"></i>
                        <h3 class="h4 mb-2 textservico">Organização</h3>
                        <p class="text-muted mb-0 textservico" >Sem atrasos</p>
                     </div>
               </div>
               </a>
               <div class="col-lg-3 col-md-6 text-center">
                     <div class="mt-5">
                        <i class="fas fa-4x fa-laptop-code text-primary mb-4 textservico"></i>
                        <h3 class="h4 mb-2 textservico">Qualidade</h3>
                        <p class="text-muted mb-0 textservico">Ótimos serviços</p>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                     <div class="mt-5">
                        <i class="fas fa-4x fa-globe text-primary mb-4 textservico"></i>
                        <h3 class="h4 mb-2 textservico">Igualdade</h3>
                        <p class="text-muted mb-0 textservico">Todos são tratados iguais</p>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                     <div class="mt-5">
                        <i class="fas fa-4x fa-heart text-primary mb-4 textservico"></i>
                        <h3 class="h4 mb-2 textservico">Paixão</h3>
                        <p class="text-muted mb-0 textservico">Feito com amor</p>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- Portfolio Section -->
      <section id="portfolio">
         <form>
         </form>
      </section>
      <!-- LOGIN TÉCNICO -->
      <section class="page-section bg-dark text-white">
         <div class="container text-center">
            <h2 class="mb-4">Trabalha conosco?</h2>
            <form form method="post">
               <div class="form-group">
                  <label for="exampleInputEmail1">Login</label>
                  <input type="text" class="form-control" id="loginTec" name="loginTec" aria-describedby="emailHelp" placeholder="Seu login">
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control" id="senhaTec" name="senhaTec" placeholder="Senha">
               </div>
               <div class="form-group form-check">
               </div>
               <button type="submit" class="btn btn-primary"  name="logarTec" value="logarTec" id="entrarTec">Enviar</button>
            </form>
         </div>
      </section>
      <!-- Contact Section -->
      <section class="page-section" id="contact">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h2 class="mt-0">Você pode nos contatar</h2>
                  <hr class="divider my-4">
                  <p class="text-muted mb-5">Caso encontre algum erro ou queira fazer uma reclamação</p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                  <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                  <div>+1 (202) 555-0149</div>
               </div>
               <div class="col-lg-4 mr-auto text-center">
                  <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                  <!-- Make sure to change the email address in anchor text AND the link below! -->
                  <a class="d-block" href="mailto:contact@yourwebsite.com">contact@gmail.com</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="bg-light py-5">
         <div class="container">
            <div class="small text-center text-muted"> &copy; 2019 - Camila e Wállisson - Trabalho de Web - Dalker Pinheiro</div>
         </div>
      </footer>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
      <!-- Custom scripts for this template -->
      <script src="js/creative.min.js"></script>
      <script>$("#Celular").mask("(00) 00000-0000");</script>
   </body>
   <script type="text/javascript">
      $('#conta-cliente').click(function () {
        $('#conta').modal('hide');
      });
      
       $('#conta-adm').click(function () {
        $('#logarAdm').modal('show');
      });
      
      $('#cadastro').click(function () {
        $('#logar').modal('hide');
      });
      
      setInterval(function(){
         $("#cadastro").animate({opacity:'toggle'})
         },5);
      
      
      
   </script>
</html>