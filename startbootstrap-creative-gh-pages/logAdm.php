 <?php 
  session_start();
  include_once("config/conexao.php");
  include_once("model/Administrador.php");
  include_once('controller/AdministradorDAO.php');
  $dao = new AdministradorDAO();
  $administrador = new Administrador();

  $LOGIN = isset($_POST['loginAdm'])?$_POST['loginAdm']:"";
  $SENHA = isset ($_POST['senhaAdm'])?$_POST['senhaAdm']:"";

  $erro = false;


  $operacao = isset($_POST['operacao'])?$_POST['operacao']:"";


  if ($operacao == "logar") {
    $LOGIN = isset($_POST['loginAdm'])?$_POST['loginAdm']:"";
    $SENHA = isset($_POST['senhaAdm'])?$_POST['senhaAdm']:"";

    if (!empty($LOGIN) and !empty($SENHA)) {
          $administrador->setLOGIN($LOGIN);
          $administrador->setSENHA(md5($SENHA));
          $logar = $dao->logar($cliente);
          if (!empty($logar))  {
            echo("<script>window.location = 'view/admin.php';</script>");
            $_SESSION['cliente'] = $logar;
          }
          else{
            echo("<script>window.location = 'index.php';</script>");
          }
        }    
  } 


   


?>