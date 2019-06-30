<!-- MODAL CADASTRO -->


<div class="modal fade" id="cadastar" tabindex="-1" role="dialog" aria-labelledby="cadastar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ÁREA DE CADASTRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" name="areaCadastro">
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="nome" placeholder="Nome" id="nomeCadastro" required></center>
            <div id="nomeCad"> </div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="email" name="email" placeholder="Email" id="Email" required></center>
            <div id="emailCad"></div>
          </div>
           <div class="form-group">
            <center><input  class="form-control"  type="text" name="rua" placeholder="Rua" id="Rua" required></center>
            <div id="ruaCad"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="numero" placeholder="Número" id="Número" required></center>
            <div id="numeroCad"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="bairro" placeholder="Bairro" id="Bairro" required></center>
            <div id="bairroCad"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="cep" placeholder="CEP" id="Cep" required></center>
            <div id="cepCad"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="celular" placeholder="Celular" id="Celular" required></center>
            
            <div id="calularCad"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="text" name="login" placeholder="Login" id="Login" required></center>
            <div id="loginCad"></div>
          </div>
          <div class="form-group">
            <center><input  class="form-control"  type="password" name="senha" placeholder="Senha" id="Senha" required></center>
            <div id="senhaCad"></div>
          </div>

          <button type="submit" name="cadastrar" value="true" class="btn btn-primary" id="botaocadastro" onclick="validar()">Cadastrar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>
