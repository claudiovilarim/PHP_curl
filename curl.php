<?php

// INICIANDO CURL
$curl = curl_init();

// HEADERS
$headers = [
    'Autorization: token 12345678777',
    'Content-Type: application/json'
];

// POST
$post = [
    'nome' => 'Creuza Santana',
    'idade' => 18
];

$json = json_encode($post);

// DEFININDO AS CONFIGURAÇÕES DO CURL
// curl_setopt($curl, CURLOPT_URL, "http://localhost:8000/api.php");
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // RETORNANDO O CONTEUDO DO CURL_EXEC PARA INSERIR NA $response

// DEFININDO AS CONFIGURAÇÕES DO CURL
curl_setopt_array($curl, [
    CURLOPT_URL             => "http://localhost:8000/api.php",
    CURLOPT_CUSTOMREQUEST   => 'POST',
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_HTTPHEADER      => $headers,
    CURLOPT_POSTFIELDS      => $json
]);

// EXECUTANDO A REQUISIÇÃO
$response = curl_exec($curl);

// FECHANDO A CONEXÃO QUE HAVIA SIDO ABERTA
curl_close($curl);

// IMPRIME O RESPONSE DA REQUISIÇÃO
echo $response;