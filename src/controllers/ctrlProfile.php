<?php

function ctrlProfile($request, $response, $container){
    $response->setTemplate('profile.php');
    return $response;
} 