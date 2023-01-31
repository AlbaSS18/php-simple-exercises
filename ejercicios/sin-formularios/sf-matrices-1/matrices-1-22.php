<?php
/**
 * Matrices (1) 22 - matrices-1-12.php
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
    Elimina un animal.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un animal</h1>

  <p>Actualice la página para mostrar un nuevo grupo de animales.</p>

  <?php

  $numberAnimals = rand(20, 30);

  echo "<h2>$numberAnimals animales</h2>";

  // Crear el array de animales
  $animales = [];
  for ($var = 0; $var < $numberAnimals; $var++) {
    $animales[$var] = rand(128000, 128060);
  }

  echo "<p style=\"font-size:400%;margin:0;\">";
  foreach ($animales as $animal) {
    echo "&#$animal;\n";
  }
  echo "</p>";

  // Buscar el animal a eliminar
  $animal = $animales[rand(0, $numberAnimals - 1)];

  echo "<h2>Animal a eliminar</h2>";
  echo "<p style=\"font-size:400%;margin:0;\">&#$animal;\n</p>";

  // Eliminar el animal
  $pos = array_search($animal, $animales);
  unset($animales[$pos]);

  // Mostrar el resto de animales
  echo "<h2>Quedan " . ($numberAnimals - 1) . "</h2>";
  if (count($animales) == 0) {
    echo "<p>No quedan animales</p>";
  } else {
    echo "<p style=\"font-size:400%;margin:0;\">";
    foreach ($animales as $animal) {
      echo "&#$animal;\n";
    }
    echo "</p>";
  }

  ?>

  <footer>
    <p>Alba</p>
  </footer>
</body>

</html>