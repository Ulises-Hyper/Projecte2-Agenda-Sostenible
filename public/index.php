<?php

/**
 * Aquest fitxer és un exemple de Front Controller, pel qual passen totes les requests.
 */

include "../src/config.php";
include "../src/controllers/ctrlIndex.php";
include "../src/controllers/ctrlJson.php";
include '../src/controllers/ctrlDashboard.php';
include '../src/controllers/ctrlEvento.php';
include '../src/controllers/ctrlEventos.php';
include '../src/controllers/ctrlFavoritos.php';
include '../src/controllers/ctrlLogin.php';
include '../src/controllers/ctrlRegister.php';
include '../src/controllers/ctrlProfile.php';
include '../src/controllers/ctrlDoRegister.php';
/** 
 * Carreguem les classes del Framework Emeset
 */

include "../src/Emeset/Container.php";
include "../src/ProjectContainer.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/models/Db.php";
include "../src/models/Users.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new ProjectContainer($config);

$sql = new Db($config);
$users = new Users($sql->get());

if (isset($_REQUEST["r"])) {
  $r = $_REQUEST["r"];
}

if (!isset($r)) {
  $response = ctrlIndex($request, $response, $container);
} elseif($r == "delete"){
  ctrlDashboardDelete($users);
}elseif($r == "dashboard"){
  $response = ctrlDashboardList($request, $response, $container);
}elseif ($r == "dashboardview") {
  $response = ctrlDashboard($request, $response, $container);
} elseif ($r == "evento") {
  $response = ctrlEvento($request, $response, $container);
} elseif ($r == "login") {
  $response = ctrlLogin($request, $response, $container);
} elseif ($r == "register") {
  $response = ctrlRegister($request, $response, $container);
} elseif ($r == "doregister"){
  $response = ctrlDoRegister($request, $response, $container);
} elseif ($r == "profile") {
  $response = ctrlProfile($request, $response, $container);
} elseif ($r == "eventos") {
  $response = ctrlEventos($request, $response, $container);
} elseif ($r == "favoritos") {
  $response = ctrlFavoritos($request, $response, $container);
} elseif ($r == "json") {
  $response = ctrlJson($request, $response, $container);
} else {
  echo "No existe la ruta";
}

$response->response();
