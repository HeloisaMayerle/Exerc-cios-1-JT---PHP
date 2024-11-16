<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form action="calcularimcq7.php" method="post">
        <label for="peso">Peso (em kg):</label>
        <input type="number" name="peso" id="peso" step="0.1" required>
        <br><br>

        <label for="altura">Altura (em metros):</label>
        <input type="number" name="altura" id="altura" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>

