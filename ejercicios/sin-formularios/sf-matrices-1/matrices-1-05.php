<?php
/**
 * Matrices (1) 5 - matrices-1-05.php
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
    Hombres y mujeres haciendo deporte.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Hombres y mujeres haciendo deporte</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
$activityList = array (
  array(127939, 'corriendo'), 
  array(127940, 'surfeando'), 
  array(127946, 'nadando'),
  array(128675, 'remando'),
  array(128692, 'pedaleando'),
  array(128693, 'pedaleando en la montaña'),
  array(128694, 'caminando'),
  array(129336, 'dando volteretas'),
  array(129337, 'haciendo malabares'),
  array(129341, 'jugando al waterpolo'),
  array(129342, 'jugando al balonmano'),
  array(129495, 'escalando'),
);
$gender = array (
  array(9792, "Mujer"),
  array(9794, "Hombre")
);

$numberActivity = rand(0, count($activityList) - 1);
$numberGender = rand(0, count($gender) - 1);

echo "<h2>{$gender[$numberGender][1]} {$activityList[$numberActivity][1]} </h2>\n";
echo "<p style=\"font-size:400%\">&#{$activityList[$numberActivity][0]};&#8205;&#{$gender[$numberGender][0]};&#65039;</p>\n";
echo "<h2>Secuencia Unicode del emoji</h2>\n";
echo "<p>&amp;#{$activityList[$numberActivity][0]};&amp;#8205;&amp;#{$gender[$numberGender][0]};&amp;#65039;</p>";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>

