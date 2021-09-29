<?php

class PluginAcessokanCurl
{

  public function __construct($ch)
  {
    //Instancia a PluginAcessokanConfig para pegar a url e a chave de acesso

    //Configura a url base, a aceitação da resposta e o método HTTP
    curl_setopt($ch, CURLOPT_URL, 'https://api.zoom.us/v2/meetings/73908116163');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    //Inicia um array com o header e seta no request e converte para b64
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IkpNSnRyTzVWU0txMEZ2UGZSRVlWSkEiLCJleHAiOjE2MzI5NjAwMjAsImlhdCI6MTYzMjg3MzYyMX0.4gAZtdRNWZAy0D9xfelWPAAdV9Cv0CPF8ugfKMlnUlg';
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  }

  public function getLink($ch)
  {

    // $body = json_encode(
    //   array(
    //     "password" => "2020",
    //   )
    // );
    $teste = curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  }

  //Método para executar o cURL
  public function execResult($ch)
  {
    $result = curl_exec($ch);
    if (curl_exec($ch) === false) {
      echo 'Curl error: ' . curl_error($ch);
    } else {
      echo 'Operation completed without any errors';
    }
    // var_dump($result);

    //Decodifica para JSON
    return json_decode($result);
  }

  //Fecha o cURL
  public function closeConn($ch)
  {
    curl_close($ch);
  }
}
