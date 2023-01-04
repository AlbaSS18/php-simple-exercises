<?php
/**
 * Controles en formularios (2) 14-2 - controles-formularios-2-14-2.php
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
    Datos personales 5 (Resultado).
    Controles en formularios (2). Con formularios.
    Alba
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 5 (Resultado)</h1>

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

  $name = recoge("nombre");
  $lastName = recoge("apellidos");
  $age = recoge("edad");
  $weight = recoge("peso");
  $gender = recoge("genero");
  $maritalStatus = recoge("estadoCivil");
  $cinema = recoge("cine");
  $sport = recoge("deporte");
  $literature = recoge("literatura");
  $music = recoge("musica");
  $comic = recoge("tebeos");
  $tv = recoge("television");

  $nameIsCorrect = false;
  $lastNameIsCorrect = false;
  $ageIsCorrect = false;
  $weightIsCorrect = false;
  $genderIsCorrect = false;
  $maritalStatusIsCorrect = false;
  $cinemaIsCorrect = false;
  $sportIsCorrect = false;
  $literatureIsCorrect = false;
  $musicIsCorrect = false;
  $comicIsCorrect = false;
  $tvIsCorrect = false;

  if ($name == "") {
    echo "<p class=\"aviso\">No ha escrito su nombre.</p>\n";
  } else {
    $nameIsCorrect = true;
  }

  if ($lastName == "") {
    echo "<p class=\"aviso\">No ha escrito sus apellidos.</p>\n";
  } else {
    $lastNameIsCorrect = true;
  }

  if ($age == "...") {
    echo "<p class=\"aviso\">No ha indicado su edad.</p>\n";
  } elseif ($age != "1" && $age != "2" && $age != "3" && $age != "4") {
    echo "<p class=\"aviso\">Por favor, indique su grupo de edad.</p>\n";
  } else {
    $ageIsCorrect = true;
  }

  if ($weight == "") {
    echo "<p class=\"aviso\">No ha escrito su peso.</p>\n";
  } elseif (!is_numeric($weight)) {
    echo "<p class=\"aviso\">No ha escrito el peso como número.</p>\n";
  } elseif (!ctype_digit($weight)) {
    echo "<p class=\"aviso\">No ha escrito el peso como número entero.</p>\n";
  } elseif ($weight > 250) {
    echo "<p class=\"aviso\">El peso es superior a 250 kg.</p>\n";
  } else {
    $weightIsCorrect = true;
  }

  if ($gender == "") {
    echo "<p class=\"aviso\">No ha indicado su sexo.</p>\n";
  } elseif ($gender != "hombre" && $gender != "mujer") {
    echo "<p class=\"aviso\">Por favor, indique si su sexo es hombre o mujer.</p>\n";
  } else {
    $genderIsCorrect = true;
  }

  if ($maritalStatus == "") {
    echo "<p class=\"aviso\">No ha indicado su estado civil.</p>\n";
  } elseif ($maritalStatus != "soltero" && $maritalStatus != "casado" && $maritalStatus != "otro") {
    echo "<p class=\"aviso\">Por favor, indique si su estado civil es soltero, casado u otro.</p>\n";
  } else {
    $maritalStatusIsCorrect = true;
  }

  if ($cinema != "" && $cinema != "on") {
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no el cine.</p>\n";
  } else {
    $cinemaIsCorrect = true;
  }

  if ($sport != "" && $sport != "on") {
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no el deporte.</p>\n";
  } else {
    $sportIsCorrect = true;
  }

  if ($literature != "" && $literature != "on") {
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no la literatura.</p>\n";
  } else {
    $literatureIsCorrect = true;
  }

  if ($music != "" && $music != "on") {
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no la música.</p>\n";
  } else {
    $musicIsCorrect = true;
  }

  if ($comic != "" && $comic != "on") {
    echo "<p class=\"aviso\">Por favor, indique si le gustan o no los tebeos.</p>\n";
  } else {
    $comicIsCorrect = true;
  }

  if ($tv != "" && $tv != "on") {
    echo "<p class=\"aviso\">Por favor, indique si le gusta o no la televisión.</p>\n";
  } else {
    $tvIsCorrect = true;
  }

  if (
    $nameIsCorrect && $lastNameIsCorrect && $ageIsCorrect && $weightIsCorrect && $genderIsCorrect && $maritalStatusIsCorrect &&
    $cinemaIsCorrect && $sportIsCorrect && $literatureIsCorrect && $musicIsCorrect && $comicIsCorrect && $tvIsCorrect
  ) {
    echo "<p>Su nombre es <strong>$name</strong>.</p>\n";
    echo "<p>Sus apellidos son <strong>$lastName</strong>.</p>\n";

    if ($age == 1) {
      echo "<p>Tiene <strong>menos de 20 años</strong>.</p>\n";
    } elseif ($age == 2) {
      echo "<p>Tiene <strong>entre 20 y 39 años</strong>.</p>\n";
    } elseif ($age == 3) {
      echo "<p>Tiene <strong>entre 40 y 59 años</strong>.</p>\n";
    } else {
      echo "<p>Tiene <strong>60 o más años</strong>.</p>\n";
    }

    echo "<p>Su peso es de <strong>$weight</strong> kg.</p>\n";

    if ($gender == "hombre") {
      echo "<p>Es un <strong>hombre</strong>.</p>\n";
    } else {
      echo "<p>Es una <strong>mujer</strong>.</p>\n";
    }

    if ($maritalStatus == "soltero") {
      echo "<p>Su estado civil es <strong>soltero</strong>.</p>\n";
    } elseif ($maritalStatus == "casado") {
      echo "<p>Su estado civil es <strong>casado</strong>.</p>\n";
    } else {
      echo "<p>Su estado civil no es <strong>ni soltero ni casado</strong>.</p>\n";
    }
    

    if (
      $cinema != "on" && $sport != "on" && $literature != "on" &&
      $music != "on" && $comic != "on" && $tv != "on"
    ) {
      echo "<p class=\"aviso\">No ha marcado ninguna afición.</p>\n";
    } else {
      echo "<p>Le gusta: ";
      if ($cinema == "on") {
        echo "<strong>el cine</strong>, ";
      }
      if ($sport == "on") {
        echo "<strong>el deporte</strong>, ";
      }
      if ($literature == "on") {
        echo "<strong>la literatura</strong>, ";
      }
      if ($music == "on") {
        echo "<strong>la música</strong>, ";
      }
      if ($comic == "on") {
        echo "<strong>los tebeos</strong>, ";
      }
      if ($tv == "on") {
        echo "<strong>la televisión</strong> ";
      }
      echo "</p>\n";
    }
  }

  ?>

  <p><a href="controles-formularios-2-14-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Alba</p>
  </footer>
</body>

</html>