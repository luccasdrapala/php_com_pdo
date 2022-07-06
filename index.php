<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{

        $conexao = new PDO($dsn, $usuario, $senha);
        $query = 'select * from tb_usuarios';

        foreach($conexao->query($query) as $key => $value){
            echo '<pre>';
                print_r($value['nome']);
            echo '</pre><hr>';
        }

        /*
        $statement = $conexao->query($query);
        print_r($statement);
        echo '<br>';

        $lista = $statement->fetchAll(PDO::FETCH_OBJ);//ou ASSOC

        foreach($lista as $key => $value){
            echo '<pre>';
                print_r($value->nome);
            echo '</pre><hr>';
        }
        echo '<pre>';
            print_r($lista);
        echo '</pre>';
        echo $lista[0]->nome;*/
        //echo $lista[0]->nome . ' - ' . $lista[0]->email;

    } catch (PDOException $erro) {

        echo 'Erro: ' . $erro->getCode() . ' Arquivo: ' . $erro->getFile() . ' Mensagem: ' . $erro->getMessage();
    }

?>