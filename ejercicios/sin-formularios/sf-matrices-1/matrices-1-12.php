<?php
/**
 * Matrices (1) 12 - matrices-1-12.php
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
    Negación.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Negación de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.</p>

<?php

// Crear las dos matrices
$arrayBits = [];
$arrayBitsOpposite = [];
for($i = 0; $i < 10; $i++) {
  $arrayBits[$i] = rand(0,1);
  $arrayBits[$i] == 0 ? $arrayBitsOpposite[$i] = 1 : $arrayBitsOpposite[$i] = 0;
}

// Mostrar la matriz con los bits aleatorios
echo "  <pre style=\"font-size: 300%;\">\n";
echo "A: ";
foreach ($arrayBits as $bit){
  echo "$bit ";
}
echo "\n";
echo "\n";

// Mostrar la matriz con los valores complementarios
echo "<span style=\"text-decoration: overline\">A</span>: ";
foreach ($arrayBitsOpposite as $bit) {
  echo "$bit ";
}
echo "</pre>\n";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
