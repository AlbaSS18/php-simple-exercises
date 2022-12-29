<?php
/**
 * Matrices (1) 1 - matrices-1-01.php
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
    Dado.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$arrayNumbers = array('uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis');
$number = rand(0,5);
 
$dayChoose = $arrayNumbers[$number];
$nameImage = $number + 1;
 
echo "<p><img src=\"img/$nameImage.svg\" alt=\"$nameImage\" width=\"80\" height=\"80\"></p>\n";
echo "Ha sacado un " . "<strong>$dayChoose</strong>";
?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
