<?php
  date_default_timezone_set('Europe/Amsterdam');
  $hour = date("G");
  $now = date("H:i:s");   

if($hour >= 6 && $hour <12){
  $greetings = "Goedemorgen Dilano";
  $background = "background-morning";
}

if($hour >= 12 && $hour <18){
  $greetings = "Goeiemiddag Dilano";
  $background = "background-afternoon";
}

if($hour >= 18 && $hour <= 23){
  $greetings = "Goedeavond Dilano";
  $background = "background-evening";
}

if($hour >= 0 && $hour <6){
  $greetings = "Goeienacht Dilano";
  $background = "background-night";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goede PHP</title>
    <link rel="stylesheet" href="css/style.css?v=<?=time()?>">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet"> 
  </head>
  <body class="<?php echo $background; ?>">
    <h1> <?=$greetings ?> </h1>
    <?php echo "<h2>Het is nu ". $now ."</h2>"; ?>
  </body>
</html>
