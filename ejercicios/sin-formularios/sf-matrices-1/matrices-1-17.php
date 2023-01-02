<?php
/**
 * Matrices (1) 17 - matrices-1-17.php
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
    Partida de dados.
    Matrices (1). Sin formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>

<?php

// Obtener el número de tiradas
$numberDice = rand (2, 7);

// Obtener los valores de los dados del jugador 1
echo "<h2>Jugador 1</h2>\n";
$dicePlayer1 = [];
for($die = 0; $die < $numberDice; $die++) {
  $dicePlayer1[$die] = rand(1,6);
}

// Mostrar las imágenes de los dados del jugador 1
echo "<p>";
foreach ($dicePlayer1 as $die){
  echo "    <img src=\"img/$die.svg\" alt=\"$die\" width=\"80\" height=\"80\">\n";
}
echo "</p>\n";

// Obtener los valores de los dados del jugador 2
echo "<h2>Jugador 2</h2>\n";
$dicePlayer2 = [];
for($die = 0; $die < $numberDice; $die++) {
  $dicePlayer2[$die] = rand(1,6);
}

// Mostrar las imágenes de los dados del jugador 2
echo "<p>";
foreach ($dicePlayer2 as $die){
  echo "    <img src=\"img/$die.svg\" alt=\"$die\" width=\"80\" height=\"80\">\n";
}
echo "</p>\n";

// Resultado
echo "<h2>Resultado</h2>\n";
$arrayWithWinGames = ["player1" => 0, "player2" => 0, "tie" => 0];
for($i = 0; $i < $numberDice; $i++) {
  if ($dicePlayer1[$i] > $dicePlayer2[$i]){
    $arrayWithWinGames["player1"]++;
  } else if ($dicePlayer1[$i] < $dicePlayer2[$i]) {
    $arrayWithWinGames["player2"]++;
  } else {
    $arrayWithWinGames["tie"]++;
  }
}

echo "  <p>El jugador 1 ha ganado <strong>{$arrayWithWinGames["player1"]}</strong> ";
echo $arrayWithWinGames["player1"] != 1 ? "veces" : "vez";
echo ", el jugador 2 ha ganado <strong>{$arrayWithWinGames["player2"]}</strong> ";
echo $arrayWithWinGames["player2"] != 1 ? "veces" : "vez";
echo " y los jugadores han empatado <strong>{$arrayWithWinGames["tie"]}</strong> ";
echo $arrayWithWinGames["tie"] != 1 ? "veces" : "vez";
echo ".</p>\n";

// Mostramos quién ha ganado la partida
if ($arrayWithWinGames["player1"] > $arrayWithWinGames["player2"]) {
    echo "  <p>En conjunto, ha ganado el jugador <strong>1</strong>.</p>\n";
} else if ($arrayWithWinGames["player1"] < $arrayWithWinGames["player2"]) {
    echo "  <p>En conjunto, ha ganado el jugador <strong>2</strong>.</p>\n";
} else {
    echo "  <p>En conjunto, han empatado.</p>\n";
}


?>

  <footer>
    <p>Alba</p>
  </footer>
</body>
</html>

