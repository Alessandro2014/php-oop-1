<?php
require_once __DIR__ . '/data/movies.php';
require_once __DIR__ . '/models/Post.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <section id="movies">
    <?php foreach ($movies as $movie) {
      $movie_obj = new Movies($movie['title'], $movie['gender'], $movie['year'], $movie['plot'], $movie['forAge']);
    ?>
      <article>
        <h1>Titolo: <?= $movie_obj->title ?></h1>
        <p> Genere: <?= $movie_obj->gender ?></address>
        <p>Anno: <?= $movie_obj->year ?></p>
        <p>Trama: <?= $movie_obj->getPlot() ?></p>
        <p>Consigliato per: <?= $movie_obj->getAge() ?></p>

      </article>
    <?php } ?>

  </section>

</body>

</html>