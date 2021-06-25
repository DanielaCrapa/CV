<?php
$host = "localhost";
$basededatos = "curriculum";
$usuariodb = "root";
$clavedb = "";

$tabla_db1 = "tpCV";

$conexion = new mysqli($host,$usuario,$clavedb,$basededatos);

if ($conexion->connect_errno) {
    
    echo "No es posible la conexion con DB tpCV";
    exit();
}
?>