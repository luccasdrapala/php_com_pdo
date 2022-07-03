<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{

        $conexao = new PDO($dsn, $usuario, $senha);
        $query = 'select * from tb_usuarios where id=6';

        $statement = $conexao->query($query);
        print_r($statement);
        echo '<br>';

        $lista = $statement->fetch(PDO::FETCH_OBJ);
        echo '<pre>';
            print_r($lista);
        echo '</pre>';
        echo $lista->nome;

        //echo $lista[0]->nome . ' - ' . $lista[0]->email;

    } catch (PDOException $erro) {

        echo 'Erro: ' . $erro->getCode() . ' Arquivo: ' . $erro->getFile() . ' Mensagem: ' . $erro->getMessage();
    }

?>