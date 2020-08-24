<?php

    $pdo = new PDO('mysql:host=localhost;dbname=módulo_08','root','');

    $id = 5;

    // OR funciona como `ou`
    // AND funciona como `e`

    // Com proteção contra sql injections

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    if($sql->execute(array($id))){
        echo 'Meu cliente foi DELETADO com sucesso!';
    }

?>