<?php 

$dischi = [
  [
    "title" => "Closer",
    "author" => "TWO LANES",
    "year" => "2021",
    "poster" => "./assets/closer.jpg",
  ],
  [
    "title" => "Wind Song",
    "author" => "Ludovico Einaudi",
    "year" => "2020",
    "poster" => "./assets/windsong.jpg",
  ],
  [
    "title" => "Come as You Are",
    "author" => "Nirvana",
    "year" => "1991",
    "poster" => "./assets/comeasyouare.jpg",
  ],
  [
    "title" => "Alleria",
    "author" => "Pino Daniele",
    "year" => "1980",
    "poster" => "./assets/alleria.jpg",
  ],
  [
    "title" => "Outro",
    "author" => "Shelter 12",
    "year" => "2020",
    "poster" => "./assets/outro.jpg",
  ],

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <img class="logo" src="./assets/logo.png" alt="logo" />
      </header>
      <main>
        <div class="container">
          <?php
          foreach($dischi as $disco){
          ?>
            <div class="card">
                <img src="<?= $disco["poster"] ?>">
                <h2> <?= $disco["title"] ?> </h2>
                <h3> <?= $disco["author"] ?> </h3>
                <h4><?= $disco["year"] ?> </h4>
            </div>
            <?php
          }
            ?>
        </div>
      </main>
</body>
</html>