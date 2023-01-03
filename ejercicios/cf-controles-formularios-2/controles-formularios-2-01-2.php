<?php
/**
 * Controles en formularios (2) 1-2 - controles-formularios-2-01-2.php
 *
 * @author Alba
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 1 (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 1 (Resultado)</h1>

<?php

$name = $_GET['nombre'];
$lastName = $_GET['apellidos'];

if (empty($name)){
  echo "<p class=\"aviso\">No ha escrito su nombre</p>\n";
} else {
  echo "<p>Su nombre es " . "<strong>" . strtoupper($name) . "</strong></p>\n";
}

if (empty($lastName)){
  echo "<p class=\"aviso\">No ha escrito sus apellidos</p>\n";
} else {
  echo "<p>Sus apellidos son " . "<strong>" .strtoupper($lastName) . "</strong></p>\n";
}

?>

  <p><a href="controles-formularios-2-01-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
