<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "pedido";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print "falha na conexao com bd";
}

?>