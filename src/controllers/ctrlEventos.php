<?php

function ctrlEventos($request, $response, $container){
    $response->setTemplate('eventos.php');
    return $response;
}