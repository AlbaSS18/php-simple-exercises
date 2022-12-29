<?php
/**
 * Matrices (1) 4 - matrices-1-04.php
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
    Gestos de manos.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Gestos de manos</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php

$activityList = array (128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077, 128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 129295, 129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330);
$skinToneList = array (127995, 127996, 127997, 127998, 127999);

$numberRandomActivity = rand (0, count($activityList) - 1);
$numberRandomSkinTone = rand (0, count($skinToneList) - 1);

echo "<p style=\"font-size:48px\">&#{$activityList[$numberRandomActivity]};&#{$skinToneList[$numberRandomSkinTone]};</p>";

?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>

