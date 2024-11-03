<?php

function ctrlEvento($request, $response, $container){
    $response->setTemplate('evento.php');
    return $response;
}