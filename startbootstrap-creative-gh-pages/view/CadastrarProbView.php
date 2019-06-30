<?php


  include_once("../controller/TecnicoDAO.php");
  include_once("../model/Tecnico.php");
  include_once("../config/conexao.php");
  include_once("../model/Cliente.php");
  include_once ("../controller/ClienteDAO.php");
  include_once('../controller/ServicoDAO.php');

  include_once('../model/Servico.php');
  //include_once('ListarProbCliente.php');


  session_start();

  $servico = new Servico();
  $dao = new ServicoDAO();

 

  $cliente = new Cliente();
  $daoCliente = new ClienteDAO();
  $Editar_cliente = isset($_POST['Editar_cliente'])?$_POST['Editar_cliente']:"";
  $Apagar = isset($_POST['apagar'])?$_POST['apagar']:"";
  $PRODUTO = isset($_POST['produto'])?$_POST['produto']:"";
  $DESCRICAO = isset($_POST['descricao'])?$_POST['descricao']:"";
  $PROBLEMA = isset($_POST['problema'])?$_POST['problema']:"";
  $clienteid = $_SESSION['cliente'];


  $clientes = $_SESSION['cliente'];
  $nome = isset($nome)?$nome:"";
  
  $dadosCliente = $daoCliente->carregar($clienteid);
  $servicoClientes = $dao-> carregar($clienteid);
foreach ($dadosCliente as $dadoCliente) {
  $nome = $dadoCliente['NOME'];
}



  $consulta = $daoCliente->listarTodosOrgenandoPor($clienteid);
  $operacao = isset($_POST['operacao'])?$_POST['operacao']:"";

 if ($operacao == "enviar") {

    if (isset($_POST['produto']) && isset($_POST['descricao']) && isset($_POST['problema'])) {

      $servico->setPRODUTO($PRODUTO);
      $servico->setDESCRICAO($DESCRICAO);
      $servico->setPROBLEMA($PROBLEMA);
      $servico->setCLIENTEID($clienteid); 
      $servico->setSTATUS("Pendente");      
      $dao->inserir($servico);
  }
} 
  if(!empty($Apagar)){
    $dao->deletar($_POST['id']);
  }

  if (isset($_POST['editar'])) {
      $servico->setPRODUTO($PRODUTO);
      $servico->setDESCRICAO($DESCRICAO);
      $servico->setPROBLEMA($PROBLEMA);
      $servico->setID($_POST['id']);
      $dao->editar($servico);
      
  }
  if (!empty($Editar_cliente)) {
    $ID = $_POST['id'];
    $NOME = isset($_POST['nome'])?$_POST['nome']:"";
    $EMAIL = isset($_POST['email'])?$_POST['email']:"";
    $LOGIN = isset($_POST['login'])?$_POST['login']:"";
    $SENHA = isset ($_POST['senha'])?$_POST['senha']:"";
    $BAIRRO = isset ($_POST['bairro'])?$_POST['bairro']:"";
    $RUA = isset ($_POST['rua'])?$_POST['rua']:"";
    $CEP = isset ($_POST['cep'])?$_POST['cep']:"";
    $CELULAR = isset ($_POST['celular'])?$_POST['celular']:"";
    $NUMERO = isset ($_POST['numero'])?$_POST['numero']:"";
    $cliente->setID($ID);
    $cliente->setNOME($NOME);
    $cliente->setEMAIL($EMAIL);
    $cliente->setLOGIN($LOGIN);
    $cliente->setSENHA($SENHA);
    $cliente->setBAIRRO($BAIRRO);
    $cliente->setRUA($RUA);
    $cliente->setCEP($CEP);
    $cliente->setCELULAR($CELULAR);
    $cliente->setNUMERO($NUMERO);
    $daoCliente->atualizar($cliente);
  }    



?>

<!DOCTYPE html>
<html lang="pt-br">

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

  <title>Soliciar Serviços</title>

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
      
        <a data-toggle="modal" data-target="#editarInfor" class="navbar-brand js-scroll-trigger" href="#" id=""><?=$nome?></a>
      
      
      
      <a class="navbar-brand js-scroll-trigger" href="../logout.php">Sair</a>
       
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       
      </div>
    </div>
  </nav>

<section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Quero um serviço!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Seja bem vindo</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="" id="bt" data-toggle="modal" data-target="#conta">Solicitar!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- MODAL PARA SOLICITAR SERVIÇO -->
  
   <div class="modal fade " id="conta" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">SOLICITAÇÃO DE UM SERVIÇO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="#">
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="produto" placeholder="Produto" required></center>
          </div>

          <div class="form-group">
            <center><input  class="form-control"  type="text" name="problema" placeholder="Problema" required></center>
          </div>

          <div class="form-group">
             <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="2" placeholder="Descrição do problema"></textarea>
          </div>
          </div>
          <div class="modal-footer">
          <div class="form-group" >
             <button type="submit" class="btn btn-primary" name="operacao" value="enviar" id="entrar" onclick="">Enviar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
         </div>
        </form>
          
        </div>
      </div>
    </div>
    

    <!-- MODAL EDITAR -->

    <div class="modal fade " id="editar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">EDITE SEU SERVIÇO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="#">
          <div class="form-group">
        <input type="hidden" id="id" name="id">
            
            <center><input  class="form-control"  type="text" id="prod" name="produto" placeholder="Produto" required></center>
          </div>

          <div class="form-group">
            <center><input  class="form-control"  type="text" id="prob" name="problema" placeholder="Problema" required></center>
          </div>

          <div class="form-group">
             <textarea class="form-control" id="descri" name="descricao" rows="2" placeholder="Descrição do problema"></textarea>
          </div>
          </div>
          <div class="modal-footer">
          <div class="form-group" >
            <button type="submit" class="btn btn-primary" name="editar" value="enviar">Enviar</button>
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
          </div>
         </div>
        </form>
          
        </div>
      </div>
    </div>



    <?php 
      require_once ('ModalEditar.php');
    ?>





    <br>
      <center><h2>Lista de Pedidos</h2></center>
    <br>
    <div class="container">
    <div class="table-responsive-lg" >


          <table class="table  table-hover ">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID DO SERVIÇO</th> 
                <th scope="col">ID DO TÉCNICO</th>
                <th scope="col">PRODUTO</th>
                <th scope="col">PROBLEMA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">STATUS</th> 
                <th scope="col">DATA</th>
                <th scope="col">HORA</tH>
                <th colspan="2">Opções</th>
              </tr>
            </thead>
          
          <?php  
            foreach ($servicoClientes as $servicoCliente) {

          ?>
          <tbody>
            <td>
              <td scope="row"><?=$servicoCliente['ID']?></td>   
              <td scope="row"><?=$servicoCliente['TECID']?></td> 
              <td scope="col"><?=$servicoCliente['PRODUTO']?></td>
              <td scope="col"><?=$servicoCliente['PROBLEMA']?></td> 
              <td scope="col"><?=$servicoCliente['DESCRICAO']?></td>
              <td scope="col"><?=$servicoCliente['STATUS']?></td>
              <td scope="col"><?=$servicoCliente['DATA']?></td> 
              <td scope="col"><?=$servicoCliente['HORA']?></td>  
              <td scope="col">
                <input onclick="editar('<?=$servicoCliente['PRODUTO']?>','<?=$servicoCliente['PROBLEMA']?>','<?=$servicoCliente['DESCRICAO']?>','<?=$servicoCliente['ID']?>','<?=$servicoCliente['DATA']?>', '<?=$servicoCliente['HORA']?>', '<?=$servicoCliente['TECID']?>')" type="button" value="Editar" data-toggle="modal" data-target="#editar" class="btn btn-outline-success btn-lg">
              </td>
              <td scope="col">
                <form method="post">
                  <input type="hidden" name="id" value="<?=$servicoCliente['ID']?>">
                  <input type="submit" value="Apagar" name="apagar" class="btn btn-lg btn-outline-dark">
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

  $('#editarInfo').click(function () {
    $('#edit').modal('show');
  });

  $('#btneditar').click(function () {
    $('#editar').modal('show');
  });
 
</script>
<script type="text/javascript">
  function editar(prod, prob, descri, id){
   $('#prod').val(prod);
   $('#prob').val(prob);
   $('#descri').val(descri);
   $('#id').val(id);
  }
</script>
</html>
<?php 
  // }else{
    // header('location:index.php');
  // }
 ?>
