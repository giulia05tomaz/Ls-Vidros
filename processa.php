<?php

include ("conexao.php");

$nome = $_POST['nome'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$identidade = $_POST['identidade'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$Pedido = $_POST['Pedido'];

$sql = "INSERT INTO cadastro VALUES ('$nome','$tel','$email','$identidade','$estado','$cidade','$Pedido')";



$enviar = mysqli_query($conexao,$sql);


mysqli_close($conexao);

?>