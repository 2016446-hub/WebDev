<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/test.css">
</head>
<body>
    <?php
        $nombre1="José";
        $nombre2="María";
        $alias="";
        $porcentaje=0;

        $porcentaje+=strlen($nombre1);
        $porcentaje+=strlen($nombre2);

        if(str_contains($nombre1,"a")){
            $porcentaje+=15;
        }
        if(str_contains($nombre2,"a")){
            $porcentaje+=15;
        }

        $porcentaje+=random_int(0,30);

        $alias=substr($nombre1,0,2).substr($nombre2,0,2);

        echo "Nombre persona 1: ".$nombre1."<br>";
        echo "Nombre persona 2: ".$nombre2."<br>";
        echo "Alias de pareja: ".$alias."<br>";
        echo "Porcentaje de compatibilidad: ".$porcentaje."<br>";
    ?>
</body>

</html>
