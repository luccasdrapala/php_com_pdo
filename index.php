<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{

        $conexao = new PDO($dsn, $usuario, $senha);
        $query = 'select * from tb_usuarios';

        $statement = $conexao->query($query);
        print_r($statement);
        echo '<br>';

        $lista = $statement->fetchAll();
        echo '<pre>';
            print_r($lista);
        echo '</pre>';

    } catch (PDOException $erro) {

        echo 'Erro: ' . $erro->getCode() . ' Arquivo: ' . $erro->getFile() . ' Mensagem: ' . $erro->getMessage();
    }

?>