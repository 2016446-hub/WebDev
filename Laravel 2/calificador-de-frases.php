<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="frase" id="frase" placeholder="Escribe tu frase aquí" required>
        <br>
        <input type="submit" value="Calificar frase">
    </form>
    <?php
        // Declarar variables para frase y niveles
        $frase = $_POST['frase'] ?? '';
        $cringe = 0;
        $cursi = 0;
        $random = 0;

        // Construir los niveles sumando cálculos

        // Cantidad de palabras usando str_word_count()
        $cantidadPalabras = str_word_count($frase);

        // Base para cringe, cursi y random
        $cringe += $cantidadPalabras;
        $cursi += $cantidadPalabras;
        $random += $cantidadPalabras;

        // 3.2.2 Verificar si contiene "éxito" y sumar 15 puntos a random
        if (str_contains($frase, "éxito")) {
            $random += 15;
        }

        // 3.2.3 Verificar si contiene "meta" y sumar 15 puntos a cringe
        if (str_contains($frase, "meta")) {
            $cringe += 15;
        }

        // 3.2.4 Verificar si contiene "sueños" y sumar 15 puntos a cursi
        if (str_contains($frase, "sueños")) {
            $cursi += 15;
        }

        // 3.2.5 Número aleatorio entre 0 y 20 usando random_int()
        $aleatorio = random_int(0, 20);
        $random += $aleatorio;
        $cursi += $aleatorio;
        $cringe += $aleatorio;

// Mostrar resultados
echo "Frase: \"$frase\"\n\n <br>";
echo "Cantidad de palabras: $cantidadPalabras\n\n <br>";
echo "Nivel Cringe: $cringe\n <br>";
echo "Nivel Cursi: $cursi\n <br>";
echo "Nivel Random: $random \n <br>";

?>

</body>
</html>