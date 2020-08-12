<?php

    $pdo = new PDO('mysql:host=localhost;dbname=módulo_08','root','');

    $id = 3;

    // OR funciona como `ou`
    // AND funciona como `e`

    // Sem proteção contra sql injection

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Gil',sobrenome='Brother' WHERE nome='Lagreca' or nome='Charlinho'");

    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso!';
    }

?>