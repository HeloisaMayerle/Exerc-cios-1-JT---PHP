<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <h2>Calculadora de Média</h2>
    <form method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required>
        <br><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required>
        <br><br>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" step="0.01" required>
        <br><br>
        
        <label for="nota4">Nota 4:</label>
        <input type="number" name="nota4" id="nota4" step="0.01" required>
        <br><br>
        
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<p>Média: <strong>" . number_format($media, 2) . "</strong></p>";
        if ($media >= 7.0) {
            echo "<p style='color: green;'><strong>Aprovado</strong></p>";
        } else {
            echo "<p style='color: red;'><strong>Reprovado</strong></p>";
        }
    }
    ?>
</body>
</html>