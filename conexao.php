<?php

$hostname="localhost";
$user="root";
$password="";
$database= "cadastro";
$conexao= mysqli_connect($hostname, $user, $password, $database);

if(!$conexao) {
    print "Falha na conxão com o Banco de dados";
}

?>