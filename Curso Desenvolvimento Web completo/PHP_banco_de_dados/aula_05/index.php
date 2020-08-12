<?php

    $pdo = new PDO('mysql:host=localhost;dbname=módulo_08','root','');

    $sql = $pdo->prepare("SELECT * FROM posts");

    $sql->execute();

    $info = $sql->fetchAll();

    
    foreach ($info as $key => $value) {
        echo 'Título: '.$value['título'];
        echo '<br />';
        echo 'Notícia: '.$value['conteúdo'];
        echo '<hr>';
    }


    // Forma mais manual
    /*
    for($i = 0; $i < count($info); $i++){
        echo 'Título: '.$info[$i]['título'];
        echo '<br />';
        echo 'Notícias: '.$info[$i]['conteúdo'];
        echo '<hr>';
    }
    */

    


?>