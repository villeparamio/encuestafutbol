<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>FIFA, Balón de oro</title>
</head>
<body>
<div class="formulario">
    <h1>Resultados encuesta de fútbol</h1>
    <?php
    $messi=$_GET["messi"];
    $cristiano=$_GET["cristiano"];
    $griezmann=$_GET["griezmann"];
    echo "<p>Messi ";
    for ($i=0;$i<=$messi;$i++){
        echo "*";
    }
    echo "</p><br>";
    echo "<p>Cristiano Ronaldo ";
        for ($i=0;$i<=$cristiano;$i++){
        echo "*";
        }
        echo "</p><br>";
    echo "<p>Griezmann ";
        for ($i=0;$i<=$griezmann;$i++){
        echo "*";
        }
        echo "</p><br>";
    ?>
</div>
</body>
</html>