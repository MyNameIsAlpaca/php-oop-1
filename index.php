<?php 

require_once './Model/Movie.php';

require_once './db.php'

?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <h1>Film</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Regista</th>
        <th>Anno</th>
        <th>Genere</th>
        <th>Uscito prima del 2000?</th>
      </tr>
    </thead>

    <tbody>
    <?php foreach($movies as $movie){

      ?>
      <tr>

        <td><?php echo $movie->name ?></td>

        <td><?php echo $movie->director ?></td>

        <td><?php echo $movie->year ?></td>

        <td><?php foreach($movie->genre as $genere) {
          ?> <span class="genere"><?php echo $genere ?></span>
          <?php } ?></td>

        <td><?php echo $movie->before_2000 ?></td>


      </tr>
      <?php
    }

    ?>
    </tbody>
  </table>

</body>
</html>