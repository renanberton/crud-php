<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM CONTATO WHERE NOME='".$_REQUEST["NOME"]."'";
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action='?page=salvar' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="NOME" value="<?php print @$row->NOME; ?>" class="form-control" placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name='DATA_NASC' value="<?php print @$row->DATA_NASC; ?>" class='form-control' placeholder="DD/MM/AAAA">
    </div>
    <div class="mb-3">
        <label>Telefones</label>
        <input type="text" name='NUMERO' required class='form-control' placeholder="Insira seus números de telefone">
    </div>
    <div class="mb-3">
        <input name="ID" type="hidden" value ="<?php print @$row->ID; ?> ">
    </div>
    <div class="mb-3">
        <button type='submit' class='btn btn-primary' >Editar</button>
    </div>
</form>
