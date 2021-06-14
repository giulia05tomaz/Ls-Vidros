<?php

/* altere aqui as perguntas do forms*/
$nome = $_POST['nome'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$identidade = $_POST['identidade'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

/* string de conexao*/
$strcon = mysqli_connect('localhost','root','','pedido') or
die('Erro ao conectar ao banco de dados');

/* aqui são as variaveis das novas perguntas */
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome','$tel','$email','$identidade','$estado','$cidade')";
 
/* aqui conexão com o banco*/
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
//echo "Cliente cadastrado com sucesso!";
header('Location: principal.html');

?>