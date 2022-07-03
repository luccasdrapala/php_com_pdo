<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    echo 'opa, passei aqui';

    try{

        $conexao = new PDO($dsn, $usuario, $senha);
        /*
        $query = '
            create table if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null 
            )
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;
        */
        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values (
                "Kauê Brenno",
                "kauebrenno@gmail.com",
                "senha123"
            ), (
                "João Barros",
                "rabros@gmail.com",
                "rabros123"
            ), (
                "JVictor Matheus",
                "victor@gmail.com",
                "victor123"
            )     
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;

    } catch (PDOException $erro) {

        echo 'Erro: ' . $erro->getCode() . ' Arquivo: ' . $erro->getFile() . ' Mensagem: ' . $erro->getMessage();
    }

?>