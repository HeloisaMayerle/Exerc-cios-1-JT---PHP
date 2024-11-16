<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);

            echo "<p>Seu IMC é: <strong>" . number_format($imc, 2) . "</strong></p>";

            if ($imc > 25) {
                echo "<p>Você está acima do peso!</p>";
            } else {
                echo "<p>Você está saudável.</p>";
            }
        } else {
            echo "<p>Altura inválida. Por favor, insira um valor maior que zero.</p>";
        }
    }
    ?>
</body>
</html>