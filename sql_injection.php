<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try{

            $conexao = new PDO($dsn, $usuario, $senha);
            $query = "select * from tb_usuarios where ";
            $query .= " email = '{$_POST['usuario']}' ";
            $query .= " AND senha = '{$_POST['senha']}'";
            
            $statement = $conexao->query($query);
            $usuario = $statement->fetch(PDO::FETCH_OBJ);

            print_r($usuario);

        } catch (PDOException $erro) {

            echo 'Erro: ' . $erro->getCode() . ' Arquivo: ' . $erro->getFile() . ' Mensagem: ' . $erro->getMessage();
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
    </head>
    <body>
        <form method="post" action="sql_injection.php">
            <input type="text" placeholder="usuário" name="usuario"/><br><br>
            <input type="password" placeholder="senha" name="senha"/><br><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>