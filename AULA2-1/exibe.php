<html>

<head>
    <title>Exibição</title>
</head>

<body>
    <h2>Hotel</h2>
    <?php
    $nome = $_GET["nomeusuario"];
    $idade = $_GET["idadeusuario"];
    $datanasc = $_GET["datanascusuario"];

    echo "<p>Seu nome é: $nome</p>";
    echo "<p>Sua idade é é: $idade</p>";
    echo "<p>Sua data de nascimento é: $datanasc</p>";
    ?>
</body>

</html>