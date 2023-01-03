<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Gradiente en cuadrado (Formulario).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Gradiente en cuadrado (Formulario)</h1>

  <form action="controles-formularios-2-13-2.php" method="get">

    <table>
      <tr>
        <td><label for="control1">Tamaño de la figura:<label></td>
        <td><input type="number" name="lado" min="20" max="500" value="200" id="control1"></td>
      </tr>
      <tr>
        <td><label for="control2">Color inicial:</label></td>
        <td><input type="color" name="inicial" value="#ffffff" id="control2"></td>
      </tr>
      <tr>
        <td><label for="control3">Color final:</label></td>
        <td><input type="color" name="final" value="#000000" id="control3"></td>
      </tr>
    </table>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
