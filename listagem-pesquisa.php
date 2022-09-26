<h1>Resultado Contatos</h1>
<?php 
$NOME = $_POST['NOME'];
$NUMERO = $_POST['NUMERO'];
$sql = "SELECT C.NOME, C.ID, T.NUMERO, T.IDCONTATO FROM CONTATO C INNER JOIN TELEFONE T ON C.ID = T.IDCONTATO AND (C.NOME = '{$NOME}' OR T.NUMERO = '{$NUMERO}');";
$res = $conn->query($sql);


    if($res == true) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Nome</th>";
        print "<th>Telefones</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->NOME."</td>";
            print "<td>".$row->NUMERO."</td>";
            print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar&NOME=".$row->NOME."';\">
                Editar
                </button>         
                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&ID=".$row->ID."';}else{false;}\">
                Excluir
                </button>        
            </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum usuário cadastrado no momento. </p>";
    }