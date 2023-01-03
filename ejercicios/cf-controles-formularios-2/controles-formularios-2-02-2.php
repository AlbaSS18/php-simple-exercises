<?php
/**
 * Controles en formularios (2) 2-2 - controles-formularios-2-02-2.php
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
    Datos personales 2 (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Resultado)</h1>

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

$age = recoge("edad");
$weight = recoge("peso");

if(empty($age)){
  echo "<p class=\"aviso\">El campo edad no puede estar vacío</p>\n";
} else if(!is_numeric($age)) {
  echo "<p class=\"aviso\">El valor escrito no es un número</p>\n";
} else if (!ctype_digit($age)) {
  echo "<p class=\"aviso\">El valor escrito no es un número entero positivo</p>\n";
} else if ($age < 5 || $age > 130) {
  echo "<p class=\"aviso\">El valor escrito no está comprendido entre 5 y 130/p>\n";
} else {
  echo "<p>Su edad es <strong>$age</strong> años</p>\n";
}

if(empty($weight)) {
  echo "<p class=\"aviso\">El campo peso no puede estar vacío</p>\n";
} else if(!is_numeric($weight)) {
  echo "<p class=\"aviso\">El valor escrito no es un número</p>\n";
} else if ($weight < 10 || $weight > 150) {
  echo "<p class=\"aviso\">El valor escrito no está comprendido entre 10 y 150</p>\n";
} else {
  echo "<p>Su peso es <strong>$weight</strong> kilos</p>\n";
}

?>

  <p><a href="controles-formularios-2-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
