<?php
/**
 * Controles en formularios (2) 11-2 - controles-formularios-2-11-2.php
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
    Cuadrado con bordes redondeados (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuadrado con bordes redondeados (Resultado)</h1>

  <?php

  function recoge($var, $m = "")
  {
    $tmp = is_array($m) ? [] : "";
    if (isset($_REQUEST[$var])) {
      if (!is_array($_REQUEST[$var]) && !is_array($m)) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var]));
      } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
          $valor = trim(htmlspecialchars($valor));
        });
      }
    }
    return $tmp;
  }

  $side = recoge("lado");
  $corner = recoge("esquina");

  $sideIsCorrect = false;
  $cornerIsCorrect = false;

  if ($side == "") {
    echo "<p class=\"aviso\">No ha escrito el tamaño de la esquina.</p>\n";
  } else if (!is_numeric($corner)) {
    echo "<p class=\"aviso\">No ha escrito el tamaño del lado como número.</p>\n";
  } else if (!ctype_digit($corner)) {
    echo "<p class=\"aviso\">No ha escrito el tamaño del lado como número entero.</p>\n";
  } else if ($side < 20 || $side > 500) {
    echo "<p class=\"aviso\">El tamaño de la esquina no está entre 20 y 500 px.</p>\n";
  } else {
    $sideIsCorrect = true;
  }

  if ($corner == "") {
    echo "<p class=\"aviso\">No ha escrito el tamaño de la esquina.</p>\n";
  } else if (!is_numeric($corner)) {
    echo "<p class=\"aviso\">No ha escrito el tamaño de la esquina como número.</p>\n";
  } else if (!ctype_digit($corner)) {
    echo "<p class=\"aviso\">No ha escrito el tamaño de la esquina como número entero.</p>\n";
  } else if ($corner < 10 || $corner > 250) {
    echo "<p class=\"aviso\">El tamaño de la esquina no está entre 10 y 250 px.</p>\n";
  } else {
    $cornerIsCorrect = true;
  }

  if ($sideIsCorrect && $cornerIsCorrect) {
    if ($corner * 2 > $side) {
      echo "<p class=\"aviso\">El tamaño del lado debe ser al menos el doble que el de la esquina.</p>\n";
    } else {
      echo "  <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n"
        . "    width=\"" . $side + 10 . "px\" height=\"" . $side + 10 . "px\">\n";
      echo "    <rect fill=\"white\" stroke=\"black\" stroke-width=\"10\" "
        . "x=\"5\" y=\"5\" width=\"$side\" height=\"$side\" rx=\"$corner\" ry=\"$corner\" />\n";
      echo "  </svg>\n";
    }
  }

  ?>

  <p><a href="controles-formularios-2-11-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>

</html>