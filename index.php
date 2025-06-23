<?php 
  const  API_URL = 'https://whenisthenextmcufilm.com/api';
  # Inicializacion de una nueva sesion
  $ch = curl_init(API_URL);
  // Indicar que queremos recibir la respuesta y no que se imprima directamente
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  /* Ejecutar la peticion 
    y almacenar la respuesta en una variable 
  */
  $result = curl_exec($ch);

  // alternativamente, podrías usar file_get_contents
  // $result = file_get_contents(API_URL); // si solo quieres hacer una peticion GET

  $data = json_decode($result, true);
  curl_close($ch);


?>

<head>
  <meta charset="UTF-8" />
  <title>La proxima pelicula de marvel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="La proxima pelicula de marvel" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
  >
</head>

<main>
  <section>
    <img src="<?= $data['poster_url'] ?>" style="border-radius: 16px" width="200px" alt="Poster de <?= $data['title'] ?>" />
  </section>

  <hgroup>
    <h3><?= $data['title'] ?> se estrena en <?= $data['days_until'] ?> día(s)</h3>
    <p>Fecha de estreno: <?= $data['release_date'] ?></p>
    <p>La siguiente es: <?= $data['following_production']['title'] ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
  }

  hgroup {
    text-align: center;
  }

  img {
    margin: 0 auto;
  }
</style>