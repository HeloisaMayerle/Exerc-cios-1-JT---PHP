<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Área e Perímetro</title>
</head>
<body>
    <h2>Resultado da Área e Perímetro</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];

        $area = $lado1 * $lado2;
        $perimetro = 2 * ($lado1 + $lado2);

        echo "<p>Área do Retângulo: <strong>" . number_format($area, 2) . "</strong> unidades quadradas</p>";
        echo "<p>Perímetro do Retângulo: <strong>" . number_format($perimetro, 2) . "</strong> unidades</p>";
    }
    ?>
</body>
</html>