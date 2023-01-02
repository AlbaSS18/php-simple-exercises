<?php
/**
 * Matrices (1) 16 - matrices-1-16.php
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
    El bit más común.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>El bit más común</h1>

  <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el bit más común en esa posición.</p>

<?php

// Crear arrays con 10 bits
$arrayFirstBits = [];
$arraySecondBits = [];
$arrayThirdBits = [];
for($i = 0; $i < 10; $i++) {
  $arrayFirstBits[$i] = rand(0,1);
  $arraySecondBits[$i] = rand(0,1);
  $arrayThirdBits[$i] = rand(0,1);
}

// Mostrar la matriz con los bits aleatorios
echo "  <pre style=\"font-size: 300%;\">\n";
echo "A: ";
foreach ($arrayFirstBits as $bit){
  echo "$bit ";
}
echo "\n";

echo "B: ";
foreach ($arraySecondBits as $bit){
  echo "$bit ";
}
echo "\n";

echo "C: ";
foreach ($arrayThirdBits as $bit){
  echo "$bit ";
}
echo "\n";

// Crear el array con el bit más común
$arrayCommonBit = [];
for($i = 0; $i < 10; $i++) {
  $arrayCommonBit[$i] = $arrayFirstBits[$i] + $arraySecondBits[$i] + $arrayThirdBits[$i] > 1 ? 1 : 0;
}

// Mostrar el resultado
echo "R: ";
foreach ($arrayCommonBit as $bit){
  echo "$bit ";
}
echo "</pre>\n";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
