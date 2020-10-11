<?php

$nome = $_GET["nomeusuario"];
$telefone = $_GET["telefoneusuario"];
$email = $_GET["emailusuario"];
$data_agendamento = $_GET["data_agendamento"];
$horario_agendamento = $_GET["horario_agendamento"];

echo "<nav>
<h1 style='font-family: 'Courier New', Courier, monospace;'>PETSHOP ATENDE SMART</h2>
    <img width='20%'
        src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRMeIIX5TqHX_ZmuRAn1A5v6zugV-7-TeSKVA&usqp=CAU'
        alt='logotipo'>
    <hr>
    <a href='index.html'>Página Inicial</a> |
    <a href='cadastro.html'>Agendamento</a>
    <hr>
</nav>";
echo "<p>Parábens $nome Seu agendamento foi feito para o dia $data_agendamento com o horário ás $horario_agendamento.</p>";
echo "<p>Aguardamos você!!!</p>"
?>