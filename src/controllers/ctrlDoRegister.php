<?php


function ctrlDoRegister($request, $response, $container)
{

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user_id = $request->get(INPUT_POST, "user_id");
        $username = $request->get(INPUT_POST, 'username');
        $surname = $request->get(INPUT_POST, 'surname');
        $name = $request->get(INPUT_POST, 'name');
        $email = $request->get(INPUT_POST, 'email');
        $role = $request->get(INPUT_POST, 'role');
        $password = $request->get(INPUT_POST, 'password');

        $db = $container->Users();
        $db->add($user_id ,$username, $surname, $name, $email, $role, $password);
        $exist = $db->getSession($user_id, $username, $surname, $name, $email, $role, $password);

        if ($exist) {
            $response->setSession('user', $exist);
        }
    }

    $response->redirect("Location: index.php");
    return $response;
}

