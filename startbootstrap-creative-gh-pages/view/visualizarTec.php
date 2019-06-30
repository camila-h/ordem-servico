<?php
   include_once("../config/conexao.php");
   include_once("../model/Tecnico.php");
   include_once ("../controller/TecnicoDAO.php");
   
   session_start();
   
     $tecnico = new Tecnico();
     $tecnicoDAO = new TecnicoDAO();  
   
     $tecnicos = $tecnicoDAO->listarTodos();
     $Apagar = isset($_POST['apagar'])?$_POST['apagar']:"";


   
   
     if (isset($_POST['editar'])) {
           $tecnico->setNOME($_POST['nome']);
           $tecnico->setEMAIL($_POST['email']);
           $tecnico->setCELULAR($_POST['celular']);  
           $tecnico->setLOGIN($_POST['login']);
           $tecnico->setSENHA($_POST['senha']);
           $tecnico->setID($_POST['id']);
           $tecnicoDAO->editar($tecnico);
           
       }


       

   

    if(!empty($Apagar)){
    $tecnicoDAO->deletar($_POST['ID']);
    }
    
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
                  <h2 class="text-white mt-0">Seus Técnicos</h2>
                  <hr class="divider light my-4">
                  <p class="text-white-50 mb-4">Seja bem vindo</p>
               </div>
            </div>
         </div>
         <br>
      </section>
      <!-- MODAL EDITAR -->
      <div class="modal fade " id="editar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">EDITE ESSAS INFORMAÇOES</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form method="post" action="#">
                     <div class="form-group">
                        <input type="hidden" id="id" name="id">
                        <center><input  class="form-control"  type="text" id="nome" name="nome" placeholder="Nome" required></center>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="text" id="email" name="email" placeholder="Email" required></center>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="" id="celular" name="celular" placeholder="Celular" required></center>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="text" id="login" name="login" placeholder="Login" required></center>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="text" id="senha" name="senha" placeholder="Senha" required></center>
                     </div>

               </div>
               <div class="modal-footer">
               <div class="form-group" >
               <button type="submit" class="btn btn-primary" name="editar" value="enviar">Enviar</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
               </div>
               </div>
               </form>
            </div>
         </div>
      </div>
      <br>
      <div class="container">
         <div class="table-responsive-lg" >
            <table class="table  table-hover ">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">ID</th>
                     <th scope="col">NOME</th>
                     <th scope="col">EMAIL</th>
                     <th scope="col">CELULAR</th>
                     <th scope="col">LOGIN</th>
                     <th scope="col">SENHA</th>
                     <th colspan="2">Opções</th>
                  </tr>
               </thead>
               <?php 
                  foreach ($tecnicos as $tecnico) {
                  
                  ?>
               <tbody>
                  <td>
                  <th scope="row"><?=$tecnico['ID']?></th>
                  <th scope="col"><?=$tecnico['NOME']?></th>
                  <th scope="col"><?=$tecnico['EMAIL']?></th>
                  <th scope="col"><?=$tecnico['CELULAR']?></th>
                  <th scope="col"><?=$tecnico['LOGIN']?></th>
                  <th scope="col"><?=$tecnico['SENHA']?></th>
                  <form method="POST">
                     <td scope="col">
                        <input onclick="editar('<?=$tecnico['ID']?>', '<?=$tecnico['NOME']?>','<?=$tecnico['EMAIL']?>','<?=$tecnico['CELULAR']?>', '<?=$tecnico['LOGIN']?>', '<?=$tecnico['SENHA']?>')" type="button" value="Editar" data-toggle="modal" data-target="#editar" class="btn btn-outline-success btn-lg">
                     </td>
                     <td scope="col">
                  <form method="post">
                  <input type="hidden" name="id" value="<?=$tecnico['ID']?>">
                  <input type="submit" value="Apagar" name="apagar" class="btn btn-lg btn-outline-dark">
                  </form>
                  </td>
                  </form>
                  <th scope="col">
                  </tr>
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
   
     function editar(id, nome, email, celular, login, senha){
      $('#id').val(id);
      $('#nome').val(nome);
      $('#email').val(email);
      $('#celular').val(celular);  
      $('#login').val(login);
      $('#senha').val(senha);
   }
</script>
</script>
<?php
   }else{
    header('location:../index.php');
   }
   ?>