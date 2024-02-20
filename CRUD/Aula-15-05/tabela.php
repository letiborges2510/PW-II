<?php
    define('MYSQL_HOST', 'localhost:3306');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB_NAME', 'bd_sistema');
 
     try {
        $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    } catch (PDOException $ex) {
        echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title> Consulta de Dados</title>
</head>
<body class="body">
        <div class="container">
            <div class="row">
                <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA WEB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tabela.php">Consultar</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
             <br>    
                </div>    
            </div>
</head>
    <style>
        body{

            text-align: center;
        }
        .table-responsive{
            background-color: white;
          
        }
        table{
            margin: 0 !important;
        }
        h1{
            margin-top: 3%;
        }
    </style>
<body>
    <div class="container">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">CEP</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col"> Ações</th>
                
                </tr>
            </thead>
            <tbody>
            <tr>
        <td><?php
    $sql = "SELECT * FROM clientes";
    $result = $pdo->query($sql);
    $rows = $result->fetchAll();

    for ($i=0; $i < count($rows); $i++) { 
    echo $rows[$i]['id'] . "<br><br><br>";
    }

        ?>


        </td>        
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query($sql);
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                echo $rows[$i]['nome'] . "<br><br><br>";
                }
            ?>
        </td>
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query( $sql );
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                echo $rows[$i]['endereço'] . "<br><br><br>";
                }
            ?>
        </td>
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query( $sql );
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                echo  $rows[$i]['bairro'].  "<br><br><br>";
                }
            ?>
        </td>
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query( $sql );
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                echo  $rows[$i]['cep'].  "<br><br><br>";
                }
            ?>
        </td>
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query( $sql );
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                echo  $rows[$i]['cidade'] . "<br><br><br>";
                }
            ?>
        </td>
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query( $sql );
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                echo  $rows[$i]['estado'] . "<br><br><br>";
                }
            ?>
        </td>
        <td><?php
                $sql = "SELECT * FROM clientes";
                $result = $pdo->query( $sql );
                $rows = $result->fetchAll();

                for ($i=0; $i < count($rows); $i++) { 
                    
                echo "<a  href='editar.php?id=". $rows[$i]['id'] . "' class=' btn btn-sm btn-primary' role='button'>Editar     </a>";
                echo "<a href='excluir.php?id=". $rows[$i]['id'] . "' class=' btn btn-sm btn-danger' role='button'>      Excluir</a>". "<br><br>";
                }
                
            ?>
          
        </td>
    </tr>
            </tbody>
       </table>
        </div>
        </div>

</body>
</html>


