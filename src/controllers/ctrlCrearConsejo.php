<?php

function ctrlCrearConsejo($request, $response, $container){
    $response->setTemplate("crearconsejo.php");
    return $response;
}