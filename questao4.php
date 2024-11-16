<!DOCTYPE html>
<html>
<head>
    <title>Contador de Ocorrências</title>
</head>
<body>
    <h2>Contar Ocorrências de um Caractere em um texto</h2>
    <form method="post">
        <label for="string">Digite uma texto:</label>
        <input type="text" name="string" id="string" required>
        <br><br>
        
        <label for="caractere">Digite um caractere:</label>
        <input type="text" name="caractere" id="caractere" maxlength="1" required>
        <br><br>
        
        <input type="submit" value="Contar Ocorrências">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $string = $_POST["string"];
        $caractere = $_POST["caractere"];
        $contador = 0;
        $tamanho = strlen($string);

        for ($i = 0; $i < $tamanho; $i++) {
            if (substr($string, $i, 1) == $caractere) {
                $contador++;
            }
        }

        echo "<p>O caractere '<strong>$caractere</strong>' aparece <strong>$contador</strong> vez(es) no seu texto.</p>";
    }
    ?>
</body>
</html>