<?php
/**
 * Matrices (1) 3 - matrices-1-03.php
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
    Nombres de animales.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
$animalList = array(
  array("Ballena", "ballena.svg"),
  array("Caballito mar", "caballito-mar.svg"),
  array("Camello", "camello.svg"),
  array("Cebra", "cebra.svg"),
  array("Elefante", "elefante.svg"),
  array("Hipopotamo", "hipopotamo.svg"),
  array("Jirafa", "jirafa.svg"),
  array("León", "leon.svg"),
  array("Leopardo", "leopardo.svg"),
  array("Medusa", "medusa.svg"),
  array("Mono", "mono.svg"),
  array("Oso blanco", "oso-blanco.svg"),
  array("Pájaro", "pajaro.svg"),
  array("Pingüino", "pinguino.svg"),
  array("Rinoceronte", "rinoceronte.svg"),
  array("Serpiente", "serpiente.svg"),
  array("Tigre", "tigre.svg"),
  array("Tortuga marina", "tortuga-marina.svg"),
  array("Tortuga", "tortuga.svg"),
  array("Oso", "oso.svg")
);

$randomNumber =  rand(0, count($animalList)-1);

echo "<h2>{$animalList[$randomNumber][0]}</h2>\n";
echo  "  <p><img src=\"img/animales/{$animalList[$randomNumber][1]}\" alt=\"{$animalList[$randomNumber][0]}\" height=\"250\"></p>\n";
?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>

