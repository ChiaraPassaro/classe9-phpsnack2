<?php
  include __DIR__ . '/server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php foreach ($hotels as $hotel) { ?>

    <div>
      <h1><?php echo $hotel['name'] ?></h1>
      <div><?php echo $hotel['description'] ?></div>

      <p class="parking">
        Parcheggio Disponibile: 
        
        <?php if($hotel['parking']){ 
          echo 'Si';
        } else {
          echo 'No';
        } ?>

      </p>
      <p class="vote"><?php echo $hotel['vote'] ?></p>
      <p class="distance"><?php echo $hotel['distance_to_center'] ?></p>
    </div>

  <?php } ?>
</body>

</html>