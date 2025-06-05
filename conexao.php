<?php
$banco = "u753535637_Conecta";
$usuario = "u753535637_conecta";
$senha = "Conectapr5_uerj";
$hostname = "localhost";

$dbh = new PDO("mysql:host=$hostname;dbname=$banco", $usuario, $senha);
?>