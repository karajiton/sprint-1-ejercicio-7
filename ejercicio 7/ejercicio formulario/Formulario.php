<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de torneo</title>
</head>
<body>
    <form action="procesador.php" method="get">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Edad: <input type="number" name="edad"></p>
        <p>Genero: </p>
        <label> 
                <input type="radio" name= "genero" value="masculino">
                Masculino
        </label>
        <label>  
                <input type="radio" name= "genero" value="femenino">
                Femenino
        </label>
       
        <p>Posicion </p>

        <label> Manejador 
        <input type="checkbox" name ="posicion[]" value="manejador">
        </label>
        <label> Cortador 
        <input type="checkbox" name ="posicion[]" value="cortador">
        </label>
        <label> Goleador 
        <input type="checkbox" name ="posicion[]" value="goleador">
        </label>
        <p><input type="submit" value="Enviar"></p>

    </form>
</body>
</html>