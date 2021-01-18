<?php

$path = explode('/', $_GET['path']); // O que vier pela url eu quebro na barra
$contents = file_get_contents('db.json'); // carrega banco

$json = json_decode($contents);

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