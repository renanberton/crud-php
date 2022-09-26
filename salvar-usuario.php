<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $NOME = $_POST['NOME'];
            $DATA_NASC = $_POST['DATA_NASC'];
            $NUMERO = $_POST['NUMERO'];

            $sql = "INSERT INTO CONTATO(NOME, DATA_NASC) VALUES ('{$NOME}', '{$DATA_NASC}')";
            $res = $conn->query($sql);
            $last_id = $conn->insert_id;
            
            $sqlTelefone = "INSERT INTO TELEFONE VALUES (NULL, {$last_id}, '{$NUMERO}');";
            $resTelefone = $conn->query($sqlTelefone);

            if($res==true & $sqlTelefone == true){
                print "<script>alert('Usuário cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar' </script>";
            } else {
                print "<script>alert('Ocorreu um erro, verifique os dados e tente novamente.');</script>";
                print "<script>location.href='?page=listar' </script>";
            }
            break;
        case 'editar':
            $NOME = $_POST['NOME'];
            $DATA_NASC = $_POST['DATA_NASC'];
            $ID = $_POST['ID'];
            $NUMERO = $_POST['NUMERO'];
            
            $sql = "UPDATE CONTATO SET NOME='{$NOME}', DATA_NASC='{$DATA_NASC}' WHERE ID='".$ID."'";
            $sqlTelefone = "UPDATE TELEFONE SET NUMERO='{$NUMERO}' WHERE IDCONTATO ='".$ID."';";
            $res = $conn->query($sqlTelefone);
            $res = $conn->query($sql);
            $ID = $_POST['ID'];
            
            if($res==true){
                print "<script>alert('Usuário Editado com sucesso');</script>";
                print "<script>location.href='?page=listar' </script>";
            } else {
                print "<script>alert('Ocorreu um erro, verifique os dados e tente novamente.');</script>";
                print "<script>location.href='?page=listar' </script>";
            }


            break;
        case 'excluir':
            $sqlExcluir = "SELECT *, NOW() FROM CONTATO WHERE ID=".$_REQUEST["ID"];
            $resExcluir = mysqli_query($conn, $sqlExcluir);
            
            $sql = "DELETE FROM TELEFONE WHERE IDCONTATO=" . $_REQUEST["ID"] . ";";
            $res = $conn->query($sql);

            $sql = "DELETE FROM CONTATO WHERE ID=" . $_REQUEST["ID"] . ";";
            $res = $conn->query($sql);

            
            $row = mysqli_fetch_assoc($resExcluir);

            if($sql){
                $myfile = fopen("./excluidos/excluidos.txt", "a+") or die("Unable to open file!");
                $txt =  "Nome: " . $row['NOME'] . "\n" . "Hora: " . $row['NOW()'] .  " \n\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                print "<script>alert('Usuário Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar' </script>";
            } else {
                print "<script>alert('Ocorreu um erro, verifique os dados e tente novamente.');</script>";
                print "<script>location.href='?page=listar' </script>";
            }

            break;
    }
