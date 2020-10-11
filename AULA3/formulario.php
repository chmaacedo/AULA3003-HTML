<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php

    print_r($_GET); //Mostrando todas as variáveis puxando via GET
    $nome = $_GET["nomeusuario"];
    $datachegada = $_GET["data_chegada"];
    $numnoite = $_GET["num_noite"];
    $qtdpessoas = $_GET["qtd_pessoas"];

    echo"<nav>
        <h2>HOTEL PLAZA</h2>
        <img src='https://media-cdn.tripadvisor.com/media/photo-s/16/1a/ea/54/hotel-presidente-4s.jpg' width='20%'
            alt='Hotel'>
        <hr>
        <a href='index.html'>Inicio</a> |
        <a href='cadastro.html'>Cadastro</a>
        <hr>
    </nav>";
    echo "<p> Prezado(a) cliente $nome sua reserva foi concluída para $qtdpessoas hospedes.</p>";
    echo "<p> Para o dia $datachegada, com previsão de saída $numnoite depois.</p>";
    ?>
</body>

</html>