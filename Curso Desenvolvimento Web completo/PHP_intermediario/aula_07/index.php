<?php

    $conteudo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, hic. Fugit magni dignissimos numquam
    architecto recusandae vitae voluptas dicta assumenda excepturi culpa odio a doloribus, illo atque reprehenderit eaque
    quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, hic. Fugit magni dignissimos numquam
    architecto recusandae vitae voluptas dicta assumenda excepturi culpa odio a doloribus, illo atque reprehenderit eaque
    quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, hic. Fugit magni dignissimos numquam
    architecto recusandae vitae voluptas dicta assumenda excepturi culpa odio a doloribus, illo atque reprehenderit eaque
    quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, hic. Fugit magni dignissimos numquam
    architecto recusandae vitae voluptas dicta assumenda excepturi culpa odio a doloribus, illo atque reprehenderit eaque
    quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, hic. Fugit magni dignissimos numquam
    architecto recusandae vitae voluptas dicta assumenda excepturi culpa odio a doloribus, illo atque reprehenderit eaque
    quidem. ';

    // Serve para recortar uma string.
    // echo substr($conteudo,0,20);

    $nome = 'Charlinho de Menezes';

    $nome = explode(' ',$nome);

    // print_r($nomes);


    // Serve para juntar um array com um delimitador.
    // No caso o espaço.

    $nomes = implode(' ',$nomes);

    // echo $nomes;

    echo $nomes;


    $conteudo = '<h1>Charlinho de Menezes</h1>Outra coisas';

    // echo strip_tags($conteudo);

    // htmlentities que mostra o código html na página.

    echo htmlentities('<div></div>');


?>
