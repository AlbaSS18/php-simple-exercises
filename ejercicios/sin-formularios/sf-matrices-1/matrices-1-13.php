<?php
/**
 * Matrices (1) 13 - matrices-1-13.php
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
    Cambio de bits.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cambio de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y la detección de cambios de bits consecutivos en la secuencia.</p>

<?php
// Crear array con 10 bits
$arrayBits = [];
for($i = 0; $i < 10; $i++) {
  $arrayBits[$i] = rand(0,1);
}

// Mostrar la matriz con los bits aleatorios
echo "  <pre style=\"font-size: 300%;\">\n";
echo "A: ";
foreach ($arrayBits as $bit){
  echo "$bit ";
}
echo "\n";

// Crear array con los bits cambiados
$arrayChangedBits = [];
for($i = 1; $i < 10; $i++) {
  $arrayChangedBits[$i-1] = $arrayBits[$i-1] == $arrayBits[$i] ? 0 : 1;
}

// Mostrar la matriz con los bits aleatorios
echo "&Delta;A: ";
foreach ($arrayChangedBits as $bit){
  echo "$bit ";
}

echo "</pre>\n";




?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
