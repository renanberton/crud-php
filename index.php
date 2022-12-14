<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastros de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastrar Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=pesquisar">Pesquisar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php 
            /* Arquivo de conexão com o banco \/ */
            include('config.php');
            switch(@$_REQUEST['page']){
            case 'novo':
                include('novo-usuario.php');
            break;
            case 'listar':
                include('listar-usuario.php');
            break;
            case 'salvar':
                include('salvar-usuario.php');
            break;
            case "editar":
                include("editar-usuario.php");
            break;
            case "pesquisar":
                include("pesquisar-usuario.php");
            break;
            case "listagem-pesquisa":
                include("listagem-pesquisa.php");
            break;
            default:
                print '<h1 style="text-align: center">Seja bem-vindo ao Sistema de Cadastro de Usuários</h1>';

    }
?>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>