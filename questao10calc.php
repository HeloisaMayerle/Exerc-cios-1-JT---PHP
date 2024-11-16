<!DOCTYPE html>
<html>
<head>
    <title>Faixa Etária</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["faixa_etaria"])) {
            $faixaEtaria = $_POST["faixa_etaria"];
            echo "<p>Você selecionou a faixa etária: " . htmlspecialchars($faixaEtaria) . "</p>";
        } else {
            echo "<p>Você não selecionou nenhuma faixa etária.</p>";
        }
    }
    ?>
</body>
</html>
