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
/**
 * Carreguem les classes del Framework Emeset
 */

include "../src/Emeset/Container.php";
include "../src/ProjectContainer.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/models/Db.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new ProjectContainer($config);

/* 
  * Aquesta és la part que fa que funcioni el Front Controller.
  * Si no hi ha cap paràmetre, carreguem la pàgina d'inici.
  * Si hi ha paràmetre, carreguem la pàgina que correspongui.
  * Si no existeix la pàgina, carreguem la pàgina d'error.
  */
if (isset($_REQUEST["r"])) {
  $r = $_REQUEST["r"];
}

/* Front Controller, aquí es decideix quina acció s'executa */
if (!isset($r)) {
  $response = ctrlIndex($request, $response, $container);
} elseif ($r == "dashboard") {
  $response = ctrlDashboard($request, $response, $container);
} elseif ($r == "evento") {
  $response = ctrlEvento($request, $response, $container);
} elseif ($r == "login") {
  $response = ctrlLogin($request, $response, $container);
} elseif ($r == "register") {
  $response = ctrlRegister($request, $response, $container);
} elseif ($r == "eventos") {
  $response = ctrlEventos($request, $response, $container);
} elseif ($r == "favoritos") {
  $response = ctrlFavoritos($request, $response, $container);
} elseif ($r == "json") {
  $response = ctrlJson($request, $response, $container);
} else {
  echo "No existe la ruta";
}
/* Enviem la resposta al client. */
$response->response();
