<?php

if(isset(addcslashes($_POST['name'])) {

$name = addcslashes($_POST['name']);
$cel = addcslashes($_POST['cel']);
$name1 = addcslashes($_POST['name1']);
$cel1 = addcslashes($_POST['cel1']);
$name2 = addcslashes($_POST['name2']);
$cel2 = addcslashes($_POST['cel2']);
$name3 = addcslashes($_POST['name3']);
$cel3 = addcslashes($_POST['cel3']);

$to = "contato@renan-moura.com";
$subject = "Contato - Landpage Indique um amigo";
$body = "Nome: ".$name."\r\n".
        "Celular: ".$cel."\r\n".
        "\r\n".
        "Amigo 1: ".$name1." ".$cel1."\r\n".
        "Amigo 2: ".$name2." ".$cel2."\r\n".
        "Amigo 3: ".$name3." ".$cel3."\r\n";

$header = "From:atendimento@korbancorretora.com.br"."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)) {
    echo("Enviado com sucesso!");
} else {
    echo("Erro ao enviar.");
}

}
?>