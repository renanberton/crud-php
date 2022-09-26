<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Usuário</h1>
    
    <?php
        $sql = "SELECT MAX(ID) FROM CONTATO;";
        $res = $conn->query($sql);
    
    ?>
    
    <form action='?page=salvar' method='POST'>
        <input type="hidden" name='acao' value='cadastrar'>
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name='NOME' class='form-control' placeholder="Digite o nome" required />
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name='DATA_NASC' class='form-control' placeholder="DD/MM/AAAA">
        </div>
        <div class="mb-3">
            <label>Telefones</label>
            <input type="text" name='NUMERO' id="NUMERO" ng-pattern="^\([1-9]{2}\) [9]{1}[0-9]{4,5}-[0-9]{4}$" required class='form-control' placeholder="Insira seus números de telefone">
        </div>
        <div class="mb-3">
            <button type='submit' class='btn btn-primary' >Cadastrar</button>
        </div>
    </form>
</body>
</html>
