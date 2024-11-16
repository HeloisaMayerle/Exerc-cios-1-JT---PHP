<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Autenticação</title>
</head>
<body>
    <h2>Resultado da Autenticação</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        if ($nome === "matheus" && $senha === "pastel") {
            echo "<p>Autenticação realizada com sucesso.</p>";
        } else {
            echo "<p>Você não tem permissão para visualizar essa página.</p>";
        }
    }
    ?>
</body>
</html>