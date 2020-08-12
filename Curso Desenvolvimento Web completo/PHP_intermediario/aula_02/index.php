<?php

    // Array single.

    $arr = ['Lagreca','Fausto'];
    $arr = array('Lagreca','chave2'=>'Fausto');

    $arr[0] = 'Lagreca';
    $arr[] = 'Fausto';

    // Arrays Multidimensionais

    //$arr2 = array(array('Lagreca','Fausto'),array(23,45));

    //$arr2[0] = array('chave1'=>'Lagreca','Fausto');

    $arr2[0]['chave1'] = 'Lagreca';

    echo $arr2[0]['chave1'];

?>