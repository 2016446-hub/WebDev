<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" required><br><br>
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" required><br><br>
            <input type="submit" value="Calcular IMC">
    </form>
    <?php
        if ($_POST) {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = round($peso / ($altura * $altura), 2); // Cálculo del IMC
        echo "Su IMC es: " . $imc;
        if ($imc < 18.5) {
            echo " - Bajo peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo " - Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            echo " - Sobrepeso";
        } else {
            echo " - Obesidad";
        }
        }
    ?>
</body>
</html>