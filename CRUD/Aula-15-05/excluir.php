<?php
session_start();
define('MYSQL_HOST', 'localhost:3306' );
define('MYSQL_USER', 'root' );
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'bd_sistema');

try
{
    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);        
}catch( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
    $id = (int) $_GET['id'];
    $deletar = "DELETE FROM clientes WHERE id=$id";
    $deleta = $pdo->prepare($deletar);
    $deleta->execute();

} catch (PDOException $ex) {
    echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
}

if ($resultDelete !== false) {

    header("Location: tabela.php");
    exit();
} else {

    echo "Erro ao excluir os dados.";
}
?>

