<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/tiempo-de-vida.css">
</head>
<body>
    <form action="" method="post">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" id="edad" name="edad" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    $diasVividos = $edad * 365;
    $horasVividas = $diasVividos * 24;
    $minutosVividos = $horasVividas * 60;
}
    ?>
    <p>Has vivido aproximadamente:</p>
    <ul>
        <li><?php echo $diasVividos; ?> días</li>
        <li><?php echo $horasVividas; ?> horas</li>
        <li><?php echo $minutosVividos; ?> minutos</li>
    </ul>
</body>
</html>