<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos - Pesquisar</title>
</head>
<body>
    <h1>Pesquisar Contatos</h1>
    <form action='?page=listagem-pesquisa' method='POST'>
        <input type="hidden" name='acao' value='pesquisar'>
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name='NOME' value="Digite o nome" class='form-control' placeholder="Digite o nome" required />
        </div>
        <div class="mb-3">
            <label>Telefones</label>
            <input type="text" name='NUMERO' value="(99) 9999-9999" class='form-control' placeholder="Insira seus números de telefone" required />
        </div>
        <div class="mb-3">
            <button type='submit' class='btn btn-primary'  onclick="location.href='?page=listagem-pesquisa'">Pesquisar</button>
        </div>
    </form>
</body>    
</html>

