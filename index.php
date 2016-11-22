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
        <form action="resultado.php" method="get">
            <label for="messi" id="messi">Messi</label>
            <input type="number" id="messi" name="messi" min="0" max="100">%<br>
            <label for="cristiano" id="cristiano">Cristiano Ronaldo</label>
            <input type="number" id="cristiano" name="cristiano" min="0" max="100">%<br>
            <label for="griezmann" id="griezmann">Griezmann</label>
            <input type="number" id="griezmann" name="griezmann" min="0" max="100">%<br>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>