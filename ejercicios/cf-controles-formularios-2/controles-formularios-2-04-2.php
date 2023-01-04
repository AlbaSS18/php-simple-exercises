<?php
/**
 * Controles en formularios (2) 4-2 - controles-formularios-2-04-2.php
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
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>

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

$email = recoge("correo");
$email2 = recoge("correo2");
$isWantEmails = recoge("recibir");

if ($email = "") {
  echo "<p class=\"aviso\">No ha escrito la primera dirección de correo.</p>\n";
} else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  echo "<p class=\"aviso\">No ha escrito una dirección de correo correcta.</p>\n";
} else if ($email != $email2) {
  echo "<p class=\"aviso\">Las direcciones de correo no coinciden.</p>\n";
} else if ($isWantEmails == "-1") {
  echo "<p class=\"aviso\">No ha indicado si desea recibir correo.</p>\n";
} else if ($recibir != "0" && $recibir != "1"){
  echo "<p class=\"aviso\">Por favor, indique si quiere recibir o no correo.</p>\n";
} else {
  echo "<p>Su dirección de correo es <strong>$email</strong>.</p>\n";
  echo "<p><strong>$isWantEmails</strong> recibirá correos nuestros.</p>\n";
}

?>

  <p><a href="controles-formularios-2-04-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
