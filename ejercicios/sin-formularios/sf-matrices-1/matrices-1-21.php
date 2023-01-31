<?php
/**
 * Matrices (1) 21 - matrices-1-21.php
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
    Elimina un valor.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un valor</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <?php

  $randomNumber = rand(1, 10);
  $dados = [];

  for ($ind = 0; $ind < $randomNumber; $ind++) {
    $dados[$ind] = rand(1, 6);
  }

  if ($randomNumber == 1) {
    echo "<h2>Tirada de $randomNumber dado</h2>";
  } else {
    echo "<h2>Tirada de $randomNumber dados</h2>";
  }

  foreach ($dados as $dado) {
    echo "<img src=\"img/$dado.svg\" alt=\"$dado\" width=\"80\" height=\"80\">\n";
  }

  $dadoRemoved = rand(1, 6);

  echo "<h2>Dado a eliminar</h2>";
  echo "<img src=\"img/$dadoRemoved.svg\" alt=\"$dadoRemoved\" width=\"80\" height=\"80\">\n";

  $pos = array_search($dadoRemoved, $dados);

  if ($pos !== false) {
    // Remove from array
    unset($dados[$pos]);
  }

  echo "<h2>Dados restantes</h2>";
  if (count($dados) == 0) {
    echo "<p>No quedan dados</p>";
  } else {
    foreach ($dados as $dado) {
      echo "<img src=\"img/$dado.svg\" alt=\"$dado\" width=\"80\" height=\"80\">\n";
    }
  }
  ?>

  <footer>
    <p>Alba</p>
  </footer>
</body>

</html>