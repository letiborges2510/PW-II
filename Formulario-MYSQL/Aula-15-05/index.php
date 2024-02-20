<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
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
                </div>    
            </div>
            <div class="row">
                <div class="col">
                <p class="subtitle">Cadastrar - Agendamento de Potenciais Clientes</p>
                <p class="subtitle_two">Sistema utilizado para Agendamento de serviços.</p>
                </div>
            </div>
            <div class="row">    
                <div class="col formulario">
                    <form method="POST" action="tabela.php">
                        <div class="mb-3">
                            <label class="formulario_titulos" for="data">ID:</label> 
                            <input type="tel" class="form-control" placeholder="xxx" id="id" name="id">
                        </div>
                        <div class="mb-3">
                            <label class="formulario_titulos" for="nome">Nome:</label> 
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>  

                        <div class="mb-3">
                            <label class="formulario_titulos" for="tele">Endereço:</label> 
                            <input type="text" class="form-control"  name="endereco" id="endereco" required>
                        </div> 

                        <div class="mb-3">
                            <label for="select" class="form-label formulario_titulos">Bairro:</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" required>
                        </div>

                        <div class="mb-3">
                            <label class="formulario_titulos" for="data">CEP:</label> 
                            <input type="tel" class="form-control" placeholder="xxxxx-xxx" id="cep" name="cep" required>
                        </div>

                        <div class="mb-3">
                            <label for="select" class="form-label formulario_titulos">Cidade:</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" required>
                        </div>
                        
                        <div class="mb-3">
                        <label for="select" class="form-label formulario_titulos">Estado:</label>
                            <select class="form-select" name="estado" id="estado" required>
                                <option value="sp">SP</option>
                                <option value="rj">RJ</option>
                                <option value="mg">RR</option>
                                <option value="es">AM</option>
                            </select>  
                        </div>
                            <br>
                            
                        <div class="mb-3">    
                            <input  class="btn btn-primary botao" type="submit" name="Cadastrar" value="Cadastrar">
                        </div>    
                            <br>
                    </form>
                </div>
            </div>
    </div>        
  </body>
</html>
