<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Convite</title>
</head>

<body>
  <div class="card text-center">
    <div class="card-header">
      Congregação Pitangueiras
    </div>
    <div class="card-body">
      <h5 class="card-title">Convite do Zoom</h5>
      <p class="card-text">Insira o convite do Zoom abaixo</p>
    </div>
    <?php
    if (!empty($_POST)) {

      $conviteZoom = $_POST['conviteZoom'];

      $posEntrar = strpos($conviteZoom, "Entrar");
      $posDispositivo = strpos($conviteZoom, "Dispositivo");
      $tamanho1 = $posDispositivo - $posEntrar;
      $parteConvite = substr($conviteZoom, $posEntrar, $tamanho1);

      $entrar = explode("ID", $parteConvite);
      $entrar = $entrar[0];

      $posId = strpos($conviteZoom, "ID");
      $posSenha = strpos($conviteZoom, "Senha");
      $tamanho2 = $posSenha - $posId;
      $idAcesso =  substr($conviteZoom, $posId, $tamanho2);

      $senha = explode(" ", $parteConvite);
      $senha = $senha[11];

      echo "<div id='convite' class='containerTextarea'>";
      echo "*Reunião da Congregação Pitangueiras " . date('d/m/y') . "*";
      echo "<br>";
      echo "<br>";
      echo "Abertura da Sala: *18h30min*";
      echo "<br>";
      echo "Início da Reunião: *19h*";
      echo "<br>";
      echo "<br>";
      echo $entrar;
      echo "<br>" . $idAcesso;
      echo "<br> Senha de Acesso: " . $senha;
      echo "<br>";
      echo "<br>";
      echo "*ACESSO APENAS A PESSOAS AUTORIZADAS*";
      echo "<br>";
      echo "</div>";
      echo "<br>";
      echo "<button class='bt btn btn-primary btn-lg' type='submit' onclick='window.history.back();'>Fazer novo convite</button>";
      echo "<br>";
    } else {
    ?>
      <form method="post" action="./index.php">
        <textarea name="conviteZoom" id="conviteZoom" rows="22" autofocus required></textarea>
        <br>
        <br>
        <button class='bt btn btn-primary btn-lg' type="submit">Gerar Convite</button>
      </form>
      <br>
    <?php }
    ?>
    <div class="card-footer text-muted">
      Convite configurado para envio pelo Whatsapp
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<style>
  body {
    text-align: -webkit-center;
  }

  .bt {
    width: fit-content;
    align-self: center;
  }

  .containerTextarea {
    margin-top: 10px;
    margin-bottom: 10px;
    width: fit-content;
    border: 1px solid #ccc;
    padding: 10px 10px 10px 10px;
    max-width: fit-content;
    border-radius: 5px;
    box-shadow: 1px 1px 1px #999;
    font-family: -webkit-pictograph;
    align-self: center;
  }

  label,
  textarea {
    font-size: .8rem;
    letter-spacing: 1px;
  }

  textarea {
    padding: 10px;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
    font-family: -webkit-pictograph;
    min-width: 50%;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-family: -webkit-pictograph;
    font-weight: bold;
  }
</style>