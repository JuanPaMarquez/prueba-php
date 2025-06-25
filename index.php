<?php

  // require 'functions.php'; 
  // include 'functions.php'; // Alternativa, pero si no encuentra el archivo, lanzará un warning pero continuará la ejecución
  require_once 'consts.php'; // Importar una vez para evitar redefiniciones
  require_once 'functions.php'; // Solo importar una vez
  require_once 'classes/NextMovie.php'; // Importar la clase NextMovie

  $next_movie = NextMovie::fetch_and_create_movie(API_URL);
  $next_movie_data = $next_movie->get_data();
?>

<?php render_template('head', ['title' => $next_movie_data['title']]); ?>
<?php render_template('main', array_merge($next_movie_data, ['until_message' => $next_movie->get_until_message()])); ?>
<?php render_template('styles'); ?>