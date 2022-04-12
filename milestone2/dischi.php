<?php 
$res = [];
$dischi = [
  [
    "title" => "Closer",
    "author" => "TWO LANES",
    "year" => "2021",
    "poster" => "./assets/closer.jpg",
    "genre" => "Elettronica"
  ],
  [
    "title" => "Wind Song",
    "author" => "Ludovico Einaudi",
    "year" => "2020",
    "poster" => "./assets/windsong.jpg",
    "genre" => "Classica"
  ],
  [
    "title" => "Come as You Are",
    "author" => "Nirvana",
    "year" => "1991",
    "poster" => "./assets/comeasyouare.jpg",
    "genre" => "Rock"
  ],
  [
    "title" => "Alleria",
    "author" => "Pino Daniele",
    "year" => "1980",
    "poster" => "./assets/alleria.jpg",
    "genre" => "Blues"
  ],
  [
    "title" => "Outro",
    "author" => "Shelter 12",
    "year" => "2020",
    "poster" => "./assets/outro.jpg",
    "genre" => "Elettronica"
  ],
];

if(isset($_GET["genre"])){
    foreach($dischi as $disco){
        if($disco["genre"] == $_GET["genre"]){
            $res[] = $disco;
        }
    }
}else{
    $res = $dischi;
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($res);

?>