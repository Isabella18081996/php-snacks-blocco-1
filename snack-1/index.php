<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$arrMatchs =[
  [
    "teamHome" => "Olimpia",
    "teamGuest" => "Cantù",
    "pointHome" => 45,
    "pointGuest" => 70,
  ],
  [
    "teamHome" => "Lakers",
    "teamGuest" => "Celtics",
    "pointHome" => 55,
    "pointGuest" => 60,
  ],
  [
    "teamHome" => "Bucks",
    "teamGuest" => "Nets",
    "pointHome" => 85,
    "pointGuest" => 90,
  ],
  [
    "teamHome" => "Heat",
    "teamGuest" => "Knicks",
    "pointHome" => 72,
    "pointGuest" => 96,
  ],
];

?>
  
  <ul>
    <?php foreach ($arrMatchs as $match){ ?>
      <li><?php echo $match['teamHome'] ?> - <?php echo $match['teamGuest'] ?> | <?php echo $match['pointHome'] ?>-<?php echo $match['pointGuest'] ?></li>
    <?php } ?>
  </ul>



</body>
</html>