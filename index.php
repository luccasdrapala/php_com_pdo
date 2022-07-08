<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try{

            $conexao = new PDO($dsn, $usuario, $senha);

            $query = "select * from tb_usuarios where ";
            $query .= "email = :usuario ";
            $query .= " AND senha = :senha ";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']); //, PDO::PARAM_INT); extrai o conteudo como inteiro

            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_OBJ);

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