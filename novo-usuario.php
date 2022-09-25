<h1>Novo Usuário</h1>

<?php
    $sql = "SELECT MAX(ID) FROM CONTATO;";
    $res = $conn->query($sql);

?>

<form action='?page=salvar' method='POST'>
    <input type="hidden" name='acao' value='cadastrar'>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name='NOME' class='form-control' placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name='DATA_NASC' class='form-control' placeholder="DD/MM/AAAA">
    </div>
    <div class="mb-3">
        <label>Telefones</label>
        <input type="text" name='NUMERO' required class='form-control' placeholder="Insira seus números de telefone">
    </div>
    <div class="mb-3">
        <button type='submit' class='btn btn-primary' >Cadastrar</button>
    </div>
</form>
