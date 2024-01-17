<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rota AirLines</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/styles/style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- MENU SUPERIOR -->
  <?php include("navbar.php") ?>

  <!-- CHECKIN -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Pronto para iniciar seu check-in?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form type="submit" method="post" action="VALIDACHECKIN">
            <div class="form-group">
              <label for="email">Buscar Reserva por:</label>
              <input type="text" value="Codigo da Reserva" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label for="pwd">Código da Reserva</label>
              <input type="text" class="form-control" id="pwd" placeholder="Digite o Código da Reserva"
                name="cdReserva">
            </div>
            <button type="submit" class="btn btn-primary btn-custom" style="width: 100%;">Iniciar Chek-in</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="card-header text-white"
      style="background-color: #026773; text-align: center; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">
      Criar conta</div>
    <br>
    <div class="card-header text-white"
      style="background-color: #026773; border-top-right-radius: 20px; border-top-left-radius: 20px; ">Dados pessoais
    </div>
    <div class="card-header">

      <!--Cadastro Sucesso-->
      <form type="submit" method="post" action="">
        <div class="form-group">

          <!-- PAIS -->
          <label for="selectPais">País:</label>
          <select class="form-control" id="selectPais" name="paisUsuario">
            <option value="Brasil">Brasil</option>
            <option value="Argentina">Argentina</option>
            <option value="EUA">EUA</option>
            <option value="Japão">Japão</option>
            <option value="Outros">Outros</option>
          </select>
        </div>

        <!-- NOME COMPLETO -->
        <div class="form-group">
          <label for="name">Nome completo:</label>
          <input type="text" class="form-control" id="nome" name="nomeUsuario">
        </div>

        <!-- Data Nascimento -->
        <div class="form-group">
          <label for="dataNasc">Data de nascimento:</label>
          <input type="date" class="form-control" id="dataNasc" name="dataNasc">
        </div>

        <!-- CPF -->
        <div class="form-group">
          <label for="inputCPF">CPF:</label>
          <input type="text" name="cpf" class="form-control" id="inputCPF" placeholder="Digite o CPF" maxlength="11"
            pattern="\d{11}" required>
          <small id="cpfHelp" class="form-text text-muted">Digite apenas os números do CPF.</small>
        </div>

        <!-- Numero Celular -->
        <div class="form-group">
          <label for="numeroCelular">Número de Celular:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">+55</span>
            </div>
            <input type="tel" class="form-control" id="numeroCelular" name="numeroCelular"
              placeholder="Digite o número do celular">
          </div>
        </div>

        <div class="form-group">
          <!-- PAIS -->
          <label for="sexo">Sexo:</label>
          <select class="form-control" id="sexo" name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outros</option>
          </select>
        </div>

    </div>
    <div class="card-header text-white" style="background-color: #026773;">Dados de login para sua conta</div>
    <div class="card-header">

      <!-- email -->
      <div class="form-group">
        <label for="email">Endereço de E-mail:</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu endereço de e-mail">
      </div>

      <!-- confirma email -->
      <div class="form-group">
        <label for="confirmaEmail">Confirme o endereço de E-mail:</label>
        <input type="email" class="form-control" id="confirmaEmail"
          placeholder="Digite novamente o seu endereço de e-mail">
      </div>

      <!-- senha -->
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>


      <!-- confirma senha -->
      <div class="form-group">
        <label for="confirmaSenha">Confirme sua senha:</label>
        <input type="password" class="form-control" id="confirmaSenha" placeholder="Digite novamente sua senha">
      </div>

      <!-- cadastre-se -->
      <div style="text-align: center;">
        <button type="submit" class="btn btn-success active btn-custom">Cadastrar-se</button>
      </div>
    </div>


    <div class="card-footer" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">
      <div class="text-center">
        Já possui uma conta? <a href="LOGIN" style="color: #026773;">Faça login</a>
      </div>
    </div>
    </form>



  </div>

  <!-- Footer-->
  <?php include("view/footer.php") ?>
</body>

</html>