<!DOCTYPE html>
<html>
<head>
    <title>Seleção de Faixa Etária</title>
</head>
<body>
    <h2>Selecione sua faixa etária:</h2>
    <form action="questao10calc.php" method="post">
        <input type="radio" name="faixa_etaria" value="Menor de 18 anos" required> Menor de 18 anos<br>
        <input type="radio" name="faixa_etaria" value="Acima de 18 e abaixo de 35 anos" required> Acima de 18 e abaixo de 35 anos<br>
        <input type="radio" name="faixa_etaria" value="Acima de 35 e abaixo de 65 anos" required> Acima de 35 e abaixo de 65 anos<br>
        <input type="radio" name="faixa_etaria" value="Acima de 65 anos" required> Acima de 65 anos<br>
        <input type="radio" name="faixa_etaria" value="Sou imortal" required> Sou imortal<br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>