<?php 
  $name= "Juan";
  $age = 18;
  $lastName = "Perez";
  $isDev = false;

  $oldDev = $isDev;

  define("NAME", "Juan");
  define("AGE", 21);
  // define("LOGO_URL", "https://images.seeklogo.com/logo-png/26/1/php-logo-png_seeklogo-265704.png");

  // echo gettype($name);
  // echo gettype($age);
  // echo gettype($lastName);

  $output = "Hola, mi nombre es $name y tengo $age años.";

  const LOGO_URL = "https://images.seeklogo.com/logo-png/26/1/php-logo-png_seeklogo-265704.png";

  // if ($isDev) {
  //   echo "<h2>Soy desarrollador.</h2>";
  // } else if ($oldDev) {
  //   echo "<h2>No soy desarrollador.</h2>";
  // } else {
  //   echo "<h2>No soy desarrollador, pero me gustaría serlo.</h2>";
  // }

  $outputAge = match (true) {
    $age < 2 => "Eres un bebé.",
    $age < 6 => "Eres un niño.",
    $age < 18 => "Eres un adolescente.",
    $age >= 18 => "Eres mayor de edad.",
    default => "No eres adulto."
  };

  $bestLanguage = ["PHP", "JavaScript", "Python", "Java", "C++"];

  $bestLanguage[] = "C#"; // Agregar un nuevo lenguaje al final del array
  $bestLanguage[1] = "Ruby"; 

  $persona = [
    "name" => $name,
    "age" => $age,
    "lastName" => $lastName,
    "isDev" => $isDev
  ];
?>
 
<h2>
  <?= implode(", ", $bestLanguage) ?>
  <?= $bestLanguage[0] ?>
  <?= $persona["name"] ?>
</h2>

<ul>
  <?php foreach ($bestLanguage as $key => $language): ?>
    <li><?= "$key: $language" ?></li>
  <?php endforeach; ?>
</ul>

<!-- <img src="<?= LOGO_URL ?>" alt=""> -->

<!-- <?php if ($isDev): ?> -->
  <!-- <h2>Soy desarrollador.</h2> -->
<!-- <?php elseif ($oldDev): ?> -->
  <!-- <h2>No soy desarrollador.</h2> -->
<!-- <?php else: ?> -->
  <!-- <h2>No soy desarrollador, pero me gustaría serlo.</h2> -->
<!-- <?php endif; ?> -->

<h1>
  <?= $output ?>
</h1>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>