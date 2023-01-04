<?php
/**
 * Controles en formularios (2) 13-2 - controles-formularios-2-13-2.php
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
    Gradiente en cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Gradiente en cuadrado (Resultado)</h1>

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
  $colorInitial = recoge("inicial");
  $colorFinal = recoge("final");

  $sideIsCorrect = false;
  $colorIsCorrect = false;

  if ($side == "") {
    echo "<p class=\"aviso\">No ha escrito el tamaño de la esquina.</p>\n";
  } else if (!is_numeric($side)) {
    echo "<p class=\"aviso\">No ha escrito el tamaño del lado como número.</p>\n";
  } else if (!ctype_digit($side)) {
    echo "<p class=\"aviso\">No ha escrito el tamaño del lado como número entero.</p>\n";
  } else if ($side < 20 || $side > 500) {
    echo "<p class=\"aviso\">El tamaño de la esquina no está entre 20 y 500 px.</p>\n";
  } else {
    $sideIsCorrect = true;
  }

  if ($colorInitial == "") {
    echo "<p class=\"aviso\">No ha elegido el color inicial.</p>\n";
  } else if ($colorFinal == "") {
    echo "<p class=\"aviso\">No ha elegido el color final.</p>\n";
  } else {
    $colorIsCorrect = true;
  }

  if ($sideIsCorrect && $colorIsCorrect) {
    echo "  <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n"
      . "    width=\"" . $side + 10 . "px\" height=\"" . $side + 10 . "px\">\n";
    echo "    <defs>\n"
      . "      <linearGradient id=\"gradiente\">\n"
      . "        <stop offset=\"5%\" stop-color=\"$colorInitial\" />\n"
      . "        <stop offset=\"95%\" stop-color=\"$colorFinal\" />\n"
      . "      </linearGradient>\n"
      . "    </defs>\n";
    echo "    <rect fill=\"url(#gradiente)\" stroke=\"black\" stroke-width=\"10\" "
      . "x=\"5\" y=\"5\" width=\"$side\" height=\"$side\" />\n";
    echo "  </svg>\n";
    echo "\n";
  }

  ?>

  <p><a href="controles-formularios-2-13-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>

</html>