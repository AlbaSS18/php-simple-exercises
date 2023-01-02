<?php
/**
 * Matrices (1) 15 - matrices-1-15.php
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
    "Y" lógico.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>"Y" lógico</h1>

  <p>Actualice la página para mostrar dos secuencias aleatorias de bits y su conjunción lógica.</p>

<?php

// Crear array con 10 bits
$arrayFirstBits = [];
$arraySecondBits = [];
for($i = 0; $i < 10; $i++) {
  $arrayFirstBits[$i] = rand(0,1);
  $arraySecondBits[$i] = rand(0,1);
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

// Crear array con la conjunción lógica
$arrayWithLogic = [];
for($i = 0; $i < 10; $i++) {
  $arrayWithLogic[$i] = (int) ($arrayFirstBits[$i] && $arraySecondBits[$i]);
}

// Mostrar la matriz con los bits aleatorios
echo "A and B: ";
foreach ($arrayWithLogic as $bit){
  echo "$bit ";
}

echo "</pre>\n";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
