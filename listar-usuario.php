<h1>Listar Usuários</h1>
<?php 
    $sql = "SELECT * FROM CONTATO";
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Nome</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>ID</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->NOME."</td>";
            print "<td>".$row->DATA_NASC."</td>";
            print "<td>".$row->ID."</td>";
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
?>