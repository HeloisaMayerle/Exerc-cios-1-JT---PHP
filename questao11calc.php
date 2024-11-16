<!DOCTYPE html>
<html>
<head>
    <title>Classificação</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantidade = intval($_POST["quantidade"]);

        if ($quantidade > 0 && $quantidade <= 10) {
            for ($i = 0; $i < $quantidade; $i++) {
                echo '<img src="pngtree-golden-star-in-3d-png-image_8856179.png" alt="Imagem" style="width: 100px; margin: 5px;">';
            }
        } else {
            echo "<p>Selecione um número válido entre 1 e 10.</p>";
        }
    }
    ?>
</body>
</html>
