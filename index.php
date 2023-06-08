<?php
$c = $_GET["c"] ?? "index";
$m = $_GET["m"] ?? "index";
$con = ucfirst($c) . "_Controller";
$conRuta = "src/Controller/{$con}.php";
require_once $conRuta;
$controlador = new $con();
$controlador->{$m}();
