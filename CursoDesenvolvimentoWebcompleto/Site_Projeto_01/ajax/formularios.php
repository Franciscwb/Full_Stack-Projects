<?php
    include('../config.php');
    $data = array();
    $assunto = 'Nova mensagem do site!';
    $corpo = '';
    foreach ($_POST as $key => $value) {
        $corpo.=ucfirst($key).":".value;
        $corpo.="<hr>";
    }
    $info = array('assunto'=>$assunto,'corpo'=>$corpo);
    $mail = new Email('','','','');
    $mail->addAdress('','');
    $email->formatarEmail($info);
    if($email->enviarEmail()){
        $data['sucesso'] = true;
    }else{
        $data['erro'] = true;
    }

    die(json_encode($data));
?>