<?php


function ctrlDoRegister($request, $response, $container){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $request->get(INPUT_POST, 'username');
    $surname = $request->get(INPUT_POST, 'surname');
    $name = $request->get(INPUT_POST, 'name');
    $email = $request->get(INPUT_POST, 'email');
    $role = $request->get(INPUT_POST, 'role');
    $password = $request->get(INPUT_POST, 'password');

    $db = $container->Users();
    $db->add($username, $surname, $name, $email, $role, $password);
    }

    $response->redirect("Location: index.php");
    return $response;
}