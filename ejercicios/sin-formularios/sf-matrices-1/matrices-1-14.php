<?php
/**
 * Matrices (1) 14 - matrices-1-14.php
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
    De binario a Gray.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Convertidor de binario a código de Gray</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su conversión a código de Gray.</p>

<?php

// Crear array con 10 bits
$arrayBits = [];
for($i = 0; $i < 10; $i++) {
  $arrayBits[$i] = rand(0,1);
}

// Mostrar la matriz con los bits aleatorios
echo "  <pre style=\"font-size: 300%;\">\n";
echo "B: ";
foreach ($arrayBits as $bit){
  echo "$bit ";
}
echo "\n";

// Crear array con el código de gray
$arrayCodeGray = [];
$arrayCodeGray[0] = $arrayBits[0];
for($i = 1; $i < 10; $i++) {
  $arrayCodeGray[$i] = $arrayBits[$i] == $arrayBits[$i - 1] ? 0 : 1;
}

// Mostrar la matriz con los bits aleatorios
echo "G: ";
foreach ($arrayCodeGray as $bit){
  echo "$bit ";
}

echo "</pre>\n";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
