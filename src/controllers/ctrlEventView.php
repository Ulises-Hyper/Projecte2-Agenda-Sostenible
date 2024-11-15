<?php

function ctrlEventView($request, $response, $container) {
    $response->setTemplate('eventedit.php');
    return $response;
}