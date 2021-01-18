<?php

$path = explode('/', $_GET['path']); // O que vier pela url eu quebro na barra
$contents = file_get_contents('db.json'); // carrega banco

$json = json_decode($contents, true);

$method = $_SERVER['REQUEST_METHOD'];

header('Content-type: application/json');
$body = file_get_contents('php://input');

if ($method === 'GET'){
    if($json[$path[0]]){
        echo json_encode($json[$path[0]]);
    }else{
        echo '[]';
    }
}
if ($method ==='POST'){
$jsonBody = json_decode($body, true);
$jsonBody['id'] = time();

    if(!$json[$path[0]]){
        $json[$path[0]] = [];
    }
    $json[$path[0]][] = $jsonBody;
    echo json_encode($jsonBody);
    file_put_contents('db.json', json_encode($json));


}

?>