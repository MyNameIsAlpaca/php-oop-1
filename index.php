<?php 

require_once './Model/Movie.php';

$forrest_gump = new Movie("Forrest Gump", "Robert Zemeckis", 1994, ["Drammatico", "Commedia"]);

$fight_club = new Movie("Fight Club", "David Fincher", 1999, ["Drammatico", "Psicologico"]);

$donnie_darko = new Movie("Donnie Darko", "Richard Kelly", 2004, ["Drammatico", "Psicologico", "Thriller Psicologico"]);


$movies[] = $forrest_gump;

$movies[] = $fight_club;

$movies[] = $donnie_darko;

?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>

  <h1>Film</h1>

  <table>
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
          ?> <span><?php echo '- '.$genere ?></span>
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