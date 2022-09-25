<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $NOME = $_POST['NOME'];
            $DATA_NASC = $_POST['DATA_NASC'];

            $sql = "INSERT INTO CONTATO(NOME, DATA_NASC) VALUES ('{$NOME}', '{$DATA_NASC}')";
            $res = $conn->query($sql);
            if($res==true){
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
            
            $sql = "UPDATE CONTATO SET NOME='{$NOME}', DATA_NASC='{$DATA_NASC}' WHERE ID='".$ID."'";
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
            $sql = "DELETE FROM CONTATO WHERE ID=".$_REQUEST["ID"];
            $res = $conn->query($sql);
            echo $sql;
            
            if($res==true){
                print "<script>alert('Usuário Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar' </script>";
            } else {
                print "<script>alert('Ocorreu um erro, verifique os dados e tente novamente.');</script>";
                print "<script>location.href='?page=listar' </script>";
            }

            break;
    }
