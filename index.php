<?php 
$c = $_GET["c"]??"index";
$m = $_GET["m"] ?? "index";
$con = ucfirst($c)."Controller";
$conRuta = "src/controller/{$con}.php";
require_once $conRuta;
$controlador = new $con();
$controlador ->{$m}();
