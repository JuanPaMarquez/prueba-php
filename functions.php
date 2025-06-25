<?php 
  // declaración de tipo estricta
  declare(strict_types=1);

  function render_template(string $template, array $data = [])
  {
    extract($data); // Extrae las variables del array para que estén disponibles en el template
    require "templates/$template.php";
  }

  function get_data(string $url): array 
  {
    // alternativamente, podrías usar file_get_contents
    $result = file_get_contents($url); // si solo quieres hacer una peticion GET
    $data = json_decode($result, true);
    return $data;
  }

  # Inicializacion de una nueva sesion
  // $ch = curl_init(API_URL);
  // Indicar que queremos recibir la respuesta y no que se imprima directamente
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  /* Ejecutar la peticion 
    y almacenar la respuesta en una variable 
  */
  // $result = curl_exec($ch);

  // curl_close($ch);




?>