<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cliente</title>
</head>
<body>
    <form action="save-client.php" method="POST">
        Nombre <input type="text" name="nombre"> <br/><br/>
        Edad <input type="int" name="edad"> <br/><br/>
        Genero <input type="radio" name="genero" value="0"/> Masculino
        <input type="radio" name="genero" value="1"/> Femenino <br/><br/>
        Destino <input type="text" name="destino"> <br/>
        <br/>
        <input type="submit" value="Enviar cliente">
    </form>
</body>
</html>