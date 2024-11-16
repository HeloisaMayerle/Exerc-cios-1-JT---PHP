<!DOCTYPE html>
<html>
<head>
    <title>Esportes Selecionados</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["esportes"])) {
            $esportesSelecionados = $_POST["esportes"];
            echo "<p>Você selecionou os seguintes esportes:</p>";
            echo "<ul>";

            foreach ($esportesSelecionados as $esporte) {
                echo "<li>" . htmlspecialchars($esporte) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Você não selecionou nenhum esporte.</p>";
        }
    }
    ?>
</body>
</html>
