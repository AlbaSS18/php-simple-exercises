<?php
/**
 * Matrices (1) 2 - matrices-1-02.php
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
    Animales.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

$animalList = array("ballena.svg", "caballito-mar.svg", "camello.svg", "cebra.svg", "elefante.svg",
 "hipopotamo.svg", "jirafa.svg", "leon.svg", "leopardo.svg", "medusa.svg", "mono.svg", "oso-blanco.svg",
 "pajaro.svg", "pinguino.svg", "rinoceronte.svg", "serpiente.svg", "tigre.svg", "tortuga-marina.svg", "tortuga.svg", "oso.svg");
$randomNumber =  rand(0, count($animalList)-1);

echo "  <p><img src=\"img/animales/$animalList[$randomNumber]\" alt=\"Animal\" height=\"250\"></p>\n";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>
