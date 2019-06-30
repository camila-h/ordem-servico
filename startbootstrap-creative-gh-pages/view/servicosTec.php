<?php

   include_once("../config/conexao.php");
   include_once("../model/Tecnico.php");	
   include_once ("../controller/TecnicoDAO.php");	
   include_once("../model/Servico.php");
   include_once ("../controller/ServicoDAO.php");


   session_start();


   	 $servicoTec = new Servico();
     $servicoTec2 = new Servico();
     $servicoDAO = new ServicoDAO(); 

    $tecnico = new Tecnico();
    $tecnicoDao = new TecnicoDAO();


   
     $servicosTec = $servicoDAO->listarPendentes();
     $servicosTec2 = $servicoDAO->listarAceitos($_SESSION['idTec']);
     $tecnicoid = $_SESSION['idTec'];

     $Apagar = isset($_POST['apagar'])?$_POST['apagar']:"";


     $operacao = isset($_POST['operacao'])?$_POST['operacao']:"";

     $nome = isset($nome)?$nome:"";

    $dadosTec = $tecnicoDao->carregar($tecnicoid);
    $servicoTecnico = $servicoDAO-> carregar($tecnicoid);
      foreach ($dadosTec as $dadoTec) {
        $nome = $dadoTec['NOME'];
      }

   	


   	if ($operacao == "enviar") {

    if (isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['status']) && isset($_POST['clienteid']) && isset($_POST['id'])) {

      $servicoTec->setDATA($PRODUTO);
      $servicoTec->setHORA($DESCRICAO);
      $servicoTec->setSTATUS($STATUS);
      $servicoTec->setCLIENTEID($CLIENTEID);	
      $servicoTec->setTECID($TECID);
      $servicoTec->setID($ID);   
      $servicoDAO->inserir($servicoTec);
  
   }

}
    if (isset($_POST['editar'])) {
           $servicoTec->setDATA($_POST['data']);
           $servicoTec->setHORA($_POST['hora']);
           $servicoTec->setSTATUS($_POST['status']);  
           $servicoTec->setTECID($_POST['tecid']);
           $servicoTec->setCLIENTEID($_POST['clienteid']);
           $servicoTec->setID($_POST['id']);
           $servicoDAO->editarTec($servicoTec);
           
       }

     

   

    if(!empty($Apagar)){
    $servicoDAO->deletar($_POST['id']);
    }
	if (isset($_POST['deslogar'])) {
		unset($_SESSION['idTec']);
	}
	if (!empty($_SESSION['idTec'])) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Serviços</title>
    </head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Index</title>
    <style type="text/css">

    </style>
    <!-- Font Awesome Icons -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme CSS - Includes Bootstrap -->
    <link href="../css/creative.min.css" rel="stylesheet">
    <link href="../font/css/open-iconic-bootstrap.scss" rel="stylesheet" type="text/css" href="">
    </head>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <body id="page-top">


        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">

               <a data-toggle="modal" data-target="#editarInfor" class="navbar-brand js-scroll-trigger" href="#" id=""><?=$nome?></a>
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



        <header class="masthead">
            <div class="container h-100">


                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">bem vindo</h1>
                        <hr class="divider my-4">
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Lista De Serviços</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Meus Pedidos</a>
                    </div>
                </div>
            </div>
        </header>


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


        <section class="page-section bg-transparent" id="about">
           
               
                    
                        <div class="container">
                        <center>  <h3>Sua Lista de Serviços</h3> </center>
                        <br>
                            <div class="table-responsive-lg-">

                                <table class="table table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">CLIENTE</th>
                                            <th scope="col">TÉCNICO</th>
                                            <th scope="col">DATA</th>
                                            <th scope="col">HORA</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">PRODUTO</th>
                                            <th scope="col">PROBLEMA</th>
                                            <th scope="col">DESCRIÇÃO</th>
                                            <th colspan="2">Opções</th>
                                        </tr>
                                    </thead>

                                    <?php  
            foreach ($servicosTec2 as $servicoTec) {

          ?>
                                        <tbody>
                                            <td>
                                                <td scope="row">
                                                    <?=$servicoTec['ID']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['CLIENTEID']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['TECID']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['DATA']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['HORA']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['STATUS']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['PRODUTO']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['PROBLEMA']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['DESCRICAO']?>
                                                </td>
                                                <td scope="col">
                                                    <input onclick="editar('<?=$servicoTec['ID']?>','<?=$servicoTec['CLIENTEID']?>','<?=$_SESSION['idTec']?>', '<?=$servicoTec['DATA']?>', '<?=$servicoTec['HORA']?>', '<?=$servicoTec['STATUS']?>')" type="button" value="Editar" data-toggle="modal" data-target="#editar" class="btn btn-lg btn-outline-success">
                                                </td>
                                                <td scope="col">
                                                    <form method="post">
                                                        <input type="hidden" name="id" value="<?=$servicoTec['ID']?>">
                                                    </form>
                                                </td>
                                            </td>
                                            <?php }
          ?>
                                        </tbody>
                                      </div>

                              
                            

                            </table>
                          </div>

                        </div>
                    </div>
                </div>

        </section>


         <section class="page-section bg-transparent" id="about">
           
               
                    
                        <div class="container">
                        <center>  <h3>Lista de Serviços Pendentes</h3> </center>
                        <br>
                            <div class="table-responsive-lg-">

                                <table class="table table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">CLIENTE</th>
                                            <th scope="col">TÉCNICO</th>
                                            <th scope="col">DATA</th>
                                            <th scope="col">HORA</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">PRODUTO</th>
                                            <th scope="col">PROBLEMA</th>
                                            <th scope="col">DESCRIÇÃO</th>
                                            <th colspan="2">Opções</th>
                                        </tr>
                                    </thead>

                                    <?php  
            foreach ($servicosTec as $servicoTec) {

          ?>
                                        <tbody>
                                            <td>
                                                <td scope="row">
                                                    <?=$servicoTec['ID']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['CLIENTEID']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['TECID']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['DATA']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['HORA']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['STATUS']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['PRODUTO']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['PROBLEMA']?>
                                                </td>
                                                <td scope="col">
                                                    <?=$servicoTec['DESCRICAO']?>
                                                </td>
                                                <td scope="col">
                                                    <input onclick="editar('<?=$servicoTec['ID']?>','<?=$servicoTec['CLIENTEID']?>','<?=$_SESSION['idTec']?>', '<?=$servicoTec['DATA']?>', '<?=$servicoTec['HORA']?>', '<?=$servicoTec['STATUS']?>')" type="button" value="Editar" data-toggle="modal" data-target="#editar" class="btn btn-lg btn-outline-success">
                                                </td>
                                                <td scope="col">
                                                    <form method="post">
                                                        <input type="hidden" name="id" value="<?=$servicoTec['ID']?>">
                                                    </form>
                                                </td>
                                            </td>
                                            <?php }
          ?>
                                        </tbody>
                                      </div>

                              
                            

                            </table>
                          </div>

                        </div>
                    </div>
                </div>

        </section>


        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted"> &copy; 2019 - Camila e Wállisson - Trabalho de Web - Dalker Pinheiro</div>
            </div>
        </footer>



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
                        
                     <div class="form-group">
                        <input type="hidden" id="id" name="id">	
                        <input type="hidden" id="tecid" name="tecid">
                        <input type="hidden" id="clienteid" name="clienteid">
                        <center><input  class="form-control"  type="date" id="data" name="data" placeholder="Data do Serviço" required></center>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="text" id="hora" name="hora" placeholder="Hora" required></center>
                     </div>
                     <div class="form-group">
                        <center><input  class="form-control"  type="" id="Status" name="status" placeholder="Status" required></center>
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

            function editar(id, clienteid, tecid, data, hora, status, prod, prob, descri) {
                $('#id').val(id);	
                $('#tecid').val(tecid);
                $('#clienteid').val(clienteid);
                $('#data').val(data);
                $('#hora').val(hora);	
                $('#status').val(status);
                $('#prod').val(prod);
                $('#descri').val(descri);




              

            }
        </script>
    

    </body>

    </html>

    <?php
	}else{
		header('location:../index.php');
	}
?>