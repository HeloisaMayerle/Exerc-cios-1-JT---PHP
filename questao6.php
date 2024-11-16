<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área e Perímetro do Retângulo</title>
</head>
<body>
    <h2>Calculadora de Área e Perímetro</h2>
    <form action="calcularq6.php" method="post">
        <label for="lado1">Lado 1 (em unidades):</label>
        <input type="number" name="lado1" id="lado1" step="0.01" required>
        <br><br>

        <label for="lado2">Lado 2 (em unidades):</label>
        <input type="number" name="lado2" id="lado2" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>