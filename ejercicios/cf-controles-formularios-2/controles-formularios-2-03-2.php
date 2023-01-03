<?php
/**
 * Controles en formularios (2) 3-2 - controles-formularios-2-03-2.php
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
    Datos personales 3 (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 3 (Resultado)</h1>

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

$gender = recoge("genero");
$films = recoge("cine");
$literature = recoge("literatura");
$music = recoge("musica");

if($gender == ""){
  echo "<p class=\"aviso\">El campo género no puede estar vacío</p>\n";
} else if ($gender != "hombre" && $gender != "mujer"){
  echo "<p class=\"aviso\">Por favor, indique si su sexo es hombre o mujer</p>\n";
} else {
  if ($gender == "hombre"){
    echo "<p>Es un <strong>$gender</strong></p>\n";
  } else {
    echo "<p>Es una <strong>$gender</strong></p>\n";
  }
} 

if($gender != ""){
  if ($films != "on" && $literature != "on" && $music != "on") {
    echo "<p>No ha marcado ninguna afición</p>\n";
  } else if ($films != "" && $films != "on"){
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no el cine.</p>\n";
  } else if ($literature != "" && $literature != "on"){
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no la literatura.</p>\n";
  } else if ($music != "" && $music != "on"){
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no la música.</p>\n";
  } else {
    if ($films == "on"){
      echo "<p>Le gusta <strong>el cine</strong></p>\n";
    }
  
    if ($literature == "on"){
      echo "<p>Le gusta <strong>la literatura</strong></p>\n";
    }
  
    if ($music == "on"){
      echo "<p>Le gusta <strong>la música</strong></p>\n";
    }
  }
}

?>

  <p><a href="controles-formularios-2-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
