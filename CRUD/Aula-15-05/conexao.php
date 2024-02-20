<?php

$nomeForm = $_POST['nome'];
$enderecoForm = $_POST['endereco'];
$bairroForm = $_POST['bairro'];
$cepForm = $_POST['cep'];
$cidadeForm = $_POST['cidade'];
$estadoForm = $_POST['estado'];

define('MYSQL_HOST' , 'localhost:3306');
define('MYSQL_USER' , 'root');
define('MYSQL_PASSWORD' , '');
define('MYSQL_DB_NAME' , 'bd_sistema');

try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

} catch (PDOException $ex) {
    echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
}

$sql = "INSERT INTO `clientes`(`nome`, `endereço`, `bairro`, `cep`, `cidade`, `estado`) VALUES ('$nomeForm','$enderecoForm','$bairroForm','$cepForm', '$cidadeForm','$estadoForm')";

$cadastrarCliente = $pdo->prepare($sql);
$cadastrarCliente->execute();

if ($resultDelete !== false) {

    header("Location: tabela.php");
    exit();
} else {

    echo "Erro ao excluir os dados.";
}

?>
