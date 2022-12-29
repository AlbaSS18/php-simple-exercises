<?php
/**
 * Matrices (1) 11 - matrices-1-11.php
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
    Tirada de dados.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

// Obtener el número de tiradas
$numberDice = rand (2, 7);
echo "<h2>Tirada de {$numberDice} dados</h2>\n";

// Obtener los valores de los dados
$dice = array();
for($die = 0; $die < $numberDice; $die++) {
  $dice[$die] = rand(1,6);
}

// Mostrar las imágenes
echo "<p>";
foreach ($dice as $die){
  echo "    <img src=\"img/$die.svg\" alt=\"$die\" width=\"80\" height=\"80\">\n";
}
echo "</p>\n";

// Mostrar los valores
echo "<h2>Resultado</h2>";
echo "Los valores obtenidos son: ";
foreach ($dice as $die){
  echo "$die ";
}


?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
