<?php
  session_start();
  define('MYQL_HOST', 'localhost:3306' );
  define('MYSQL_USER', 'root' );
  define('MYSQL_PASSWORD', '');
  define('MYSQL_DB_NAME', 'bd_sistema');

  try
  {
      $PDO = new PDO('mysql:host=' . MYQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);        
  }catch( PDOException $e )
  {
      echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
  }

  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM clientes WHERE id = $id"; 

  $result = $PDO->query($sqlSelect);

  $row = $result->fetchObject();

  if(isset($_POST['edit'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endere'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

  
    $sql = "UPDATE clientes SET nome='$nome', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' WHERE id = $id";

    $result = $PDO->query($sql);

    $registros = $result-> fetchAll();

    header("Location: tabela.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
  </head>
  <body class="body" >
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
                </div>    
            </div>
            <div class="row">
                <div class="col">
                <p class="subtitle">Editar Cadastro</p>
                </div>
            </div>
            <div class="row">    
                <div class="col formulario">
                    <form action="editar2.php?id=<?=$_GET['id']?>" method="POST">
                        <div class="mb-3">
                            <label class="formulario_titulos--atualizar" for="nome">Nome:</label> 
                            <input type="text" class="form-control" name="nome" value="<?php echo $row->nome; ?>" id="nome"  autocomplete= off required>
                        </div>  

                        <div class="mb-3">
                            <label class="formulario_titulos--atualizar" for="tele">Endereço:</label> 
                            <input type="text" class="form-control"  name="endereco" value="<?php echo $row->endereco; ?>"id="endereco" autocomplete= off required>
                        </div> 

                        <div class="mb-3">
                            <label for="select" class="form-label formulario_titulos--atualizar">Bairro:</label>
                            <input type="text" class="form-control" name="bairro" value="<?php echo $row->bairro; ?>" id="bairro" autocomplete= off required>
                        </div>

                        <div class="mb-3">
                            <label class="formulario_titulos--atualizar" for="data">CEP:</label> 
                            <input type="tel" class="form-control" placeholder="xxxxx-xxx" id="cep" name="cep" value="<?php echo $row->cep; ?>"autocomplete= off required>
                        </div>

                        <div class="mb-3">
                            <label for="select" class="form-label formulario_titulos--atualizar">Cidade:</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $row->cidade; ?>" autocomplete= off required>
                        </div>
                        
                        <div class="mb-3">
                        <label for="select" class="form-label formulario_titulos--atualizar">Estado:</label>
                            <select class="form-select" name="estado" value="<?php echo $row->estado; ?>" id="estado" autocomplete= off required>
                                <option value="sp">SP</option>
                                <option value="rj">RJ</option>
                                <option value="mg">RR</option>
                                <option value="es">AM</option>
                            </select>  
                        </div>
                        <div class="mb-3">  
                        <th><button class="btn btn-outline-primary"><a href="tabela.php?id='.$id.'">Editar</a></button> </th>  
                          
                        </div>    
                    </form>
                </div>
            </div>
    </div>        
  </body>
</html>
