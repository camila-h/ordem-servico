   <div class="modal fade " id="editarInfor" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">EDITAR MINHAS INFORMAÇÕES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="#">
            <?php 
              foreach ($consulta as $listar) {
            ?>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="nome" id="nomeEdit" placeholder="Nome" required value="<?=$listar['NOME']?>"></center>
            <input type="hidden" value="<?=$listar['ID']?>" name="id">
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="email" id="emailEdit" placeholder="Email" required value="<?=$listar['EMAIL']?>"></center>
          </div>
          <div class="form-group">
            <center><input class="form-control" id="exampleFormControlTextarea1" name="rua" id="ruaEdit" rows="2" placeholder="Rua" value="<?=$listar['RUA']?>"></center>
          </div>
          <div class="form-group">
            <center><input class="form-control" id="exampleFormControlTextarea1" name="numero" id="numeroEdit" placeholder="Número" value="<?=$listar['NUMERO']?>"></center>
          </div>
          <div class="form-group">
            <center><input class="form-control" id="exampleFormControlTextarea1" name="bairro" id="bairroEdit" placeholder="Bairro" value="<?=$listar['BAIRRO']?>"></center>
          </div>
          <div class="form-group">
            <center><input class="form-control" id="exampleFormControlTextarea1" name="cep" id="cepEdit" placeholder="CEP" value="<?=$listar['CEP']?>"></center>
          </div>
          <div class="form-group">
            <center><input class="form-control" id="exampleFormControlTextarea1" name="celular" id="celEdit" placeholder="Celular" value="<?=$listar['CELULAR']?>"></center>
          </div>
          <div class="form-group">
            <center><input class="form-control" id="exampleFormControlTextarea1" name="login" id="loginEdit" placeholder="Login" value="<?=$listar['LOGIN']?>"></center>
          </div>
          </div>
          <?php    
            }
          ?>
          <div class="modal-footer">
          <div class="form-group" >
             <button type="submit" class="btn btn-primary" name="Editar_cliente" value="Editar_cliente" id="editarInf" onclick="">Editar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
         </div>
        </form>
          
        </div>
      </div>
    </div>