
  <?php 
  session_start();
 // include_once("index.php");
  include_once("config/conexao.php");
  include_once("model/Cliente.php");
  include_once('controller/ClienteDAO.php');
  include_once("model/Administrador.php");  
  include_once('controller/AdministradorDAO.php');  
  include_once("model/Tecnico.php");
  include_once('controller/TecnicoDAO.php');

  
  $dao = new ClienteDAO();
  $cliente = new Cliente();
  $Administrador = new Administrador();
  $daoAdministrador = new AdministradorDAO();
  $tecnico = new Tecnico();
  $tecnicoDAO = new TecnicoDAO();


  $NOME = isset($_POST['nome'])?$_POST['nome']:"";
  $EMAIL = isset($_POST['email'])?$_POST['email']:"";
  $LOGIN = isset($_POST['login'])?$_POST['login']:"";
  $SENHA = isset ($_POST['senha'])?$_POST['senha']:"";
  $BAIRRO = isset ($_POST['bairro'])?$_POST['bairro']:"";
  $RUA = isset ($_POST['rua'])?$_POST['rua']:"";
  $CEP = isset ($_POST['cep'])?$_POST['cep']:"";
  $CELULAR = isset ($_POST['celular'])?$_POST['celular']:"";
  $NUMERO = isset ($_POST['numero'])?$_POST['numero']:"";

  $erro = false;


  $operacao = isset($_POST['operacao'])?$_POST['operacao']:"";

if ($SENHA = isset ($_POST['senha'])?$_POST['senha']:"" ) {
    $SENHA = md5($_POST['senha']);

    if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'true') {
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['senha'])) {

      $cliente->setNOME($NOME);
      $cliente->setEMAIL($EMAIL);
      $cliente->setLOGIN($LOGIN);
      $cliente->setSENHA($SENHA);
      $cliente->setBAIRRO($BAIRRO);
      $cliente->setRUA($RUA);
      $cliente->setCEP($CEP);
      $cliente->setCELULAR($CELULAR);
      $cliente->setNUMERO($NUMERO);

      $dao->inserir($cliente);

      echo "<script>alert('Agora você deve logar');</script>";

    }
    else {
       echo "";
    }
  }
}


if (isset($_POST['logarTec'])) {
  $tecnico->setLOGIN($_POST['loginTec']);
  $tecnico->setSENHA(md5($_POST['senhaTec']));
  $loguesT = $tecnicoDAO->logarTec($tecnico);
  if (!empty($loguesT)) {
    foreach ($loguesT as $logueT) {
      $_SESSION['idTec'] = $logueT['ID'];
    }
  }
}


if (isset($_POST['logarAdm'])) {
  $Administrador->setSENHA(md5($_POST['senhaAdm']));
  $Administrador->setLOGIN($_POST['loginAdm']);
  $logues = $daoAdministrador->logarAdm($Administrador);
  if (!empty($logues)) {
    foreach ($logues as $logue) {
      $_SESSION['idAdmin'] = $logue['ID'];
    }
  }
}

  if (isset($_POST['logarCliente'])) {
    $cliente -> setSENHA(md5($_POST['esenha']));
    $cliente -> setLOGIN($_POST['elogin']);
    $logar = $dao->logar($cliente);

    if (!empty($logar)) {
         foreach ($logar as $logg) {
             $_SESSION['cliente'] = $logg['ID'];

           }
            
   }
 }


   


?>