 <!--Ejercicio 4-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen utn con enlace</title>
</head>
<body>
    <a href="https://www.frro.utn.edu.ar/" target="_blank">
        <img src="C:\Users\elias\Desktop\Facultad\2° año\Entornos Graficos\logo utn.jpgx|" alt="Logo UTN" width="300">
    </a>
    <hr>
    <h1>AÑO 2008</h1>
    <table border="2">
        <thead>
            <tr>
                <th colspan="2">Exámenes</th> 
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Aprobados</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
                <td>13/09/2024</td>
                <td>24/30</td>
            </tr>
           
        </tbody>
    </table>
    
    <ol>
           <li><i><a href="#Enunciado del examen">Ir a enunciado del examen</a></i></li>
        <li><a href="https://utn.edu.ar/es/"  target="_blank">Sitio Universidad</a></li>
    </ol>
    <p>Puede realizar consultas completanto el siguiente formulario:</p>
    <form action="/enviar-formulario" method="post">
        <label for="nombre">Email:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="email">Consulta:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <br>
        <input type="submit" value="Enviar">
        <input type="submit" value="Borrar">

        <h2>Enunciado del examen</h2>
        <p>Ejercicio 1: ....................
            <br> 
        
           Ejercicio 2: ....................
        </p>

        <p>Para más información dirigirse a <a href="mailto:contacto@xx.com">contacto@xx.com</a></p>


    </form>
</body>
</html>
