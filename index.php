<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body class="corpo">
  <h1>Convite do Zoom</h1>
  <form method="post" action="./index.php">
    <label for="story">Insira o Convite</label>

    <textarea name="conviteZoom" id="conviteZoom" cols="110" rows="20" autofocus required></textarea>
    <br>
    <button class='btn' type="submit">Gerar Convite</button>
  </form>
  <hr>
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

    echo "<div id='convite' class='container'>";
    echo "*Reunião da Congregação Pitangueiras*";
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
    echo "</div>";
  }
  ?>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">

  document.getElementById('botaoCopia').addEventListener('click', function() {

    document.getElementById('convite').select();
    document.execCommand('copy');
  });
</script>

</html>

<style>
  body {
    text-align: -webkit-center;
  }

  .btn {
    margin-top: 10px;
  }

  .container {
    margin-top: 10px;
    width: fit-content;
    border: 0.5px solid;
    padding: 10px 10px 10px 10px;
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
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-family: -webkit-pictograph;
    font-weight: bold;
  }
</style>