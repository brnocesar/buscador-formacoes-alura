<?php

use GuzzleHttp\Client;

$client = new Client();
$resposta = $client->request('GET', 'https://cursos.alura.com.br/formacao-desenvolvedor-php');

$html = $resposta->getBody();

?>