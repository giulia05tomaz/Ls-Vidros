<?php


$Nome         = $_POST [ 'nome' ];

$corpo  			= "


		nome: " . $_POST [ 'nome' ]. "
		email: " . $_POST [ 'email' ]. "
		tel: " . $_POST [ 'tel' ]. "
	" ;


mail ( 'giulia05tomaz@gmail.com' , $Nome , $corpo , 'From: craftofgames.com' );
echo 'Seus dados foram enviados com sucesso';
/*
//Cria uma Varivel  que terá os dados do erro
$erro = false;

//Verifica se o POST tem algum valor

if (!isset( $_POST) || empty( $_POST) ){
    $erro = 'Nada foi postado.';
}

// Cria as variáveis dinamicamente
foreach( $_POST as $chave => $valor ) {
    //Remove todas as tags HTML
    //Remove os espaços em branco do valor
    $$chave = trim( strip_tags( $valor));

    //Verifica se tem algum valor nulo
    if (empty ($valor)) {
        $erro = 'Existem campos em branco.';
    }
}

//Verifica se nome existe e se realmente e uma string.
//Tambem verifica se não existe erro anterior
if ((! isset($nome) || ! is_string($nome) ) && !$erro){
    $erro = 'O Nome deve ser veridico.';
}

if ((! isset($tel) || ! is_numeric($tel) ) && !$erro){
    $erro = 'O Telefone deve ser numerico.';
}



$email = $_POST['email'];
$identidade = $_POST['identidade'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$Pedido = $_POST['Pedido'];

//Se exixtir algum erro, mostra o erro
if ($erro) {
    echo $erro;
} else {

    
    echo "<h1> Veja os Dados enviados </h1>";

    foreach( $_POST as $chave => $valor ){
        echo '<b>' . $chave . '</b>:' . $valor . '<br><br>';
    }
}

*/

?>