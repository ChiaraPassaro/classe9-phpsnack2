<?php
include __DIR__ . '/server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .hotels {
      display: flex;
      flex-wrap: wrap;
    }

    .hotels .hotel {
      flex-basis: calc((100% / 3) - 20px);
      margin: 10px;
      padding: 20px;
      background-color: lightblue;
    }

    .red {
      color: red;
    }
  </style>
</head>

<body>


  <div class="hotels">
    <?php foreach ($filteredHotels as $hotel) { ?>

      <div class="hotel">
        <h2><?php echo $hotel['name'] ?></h2>
        <div>
          <h3>Descrizione: </h3><?php echo $hotel['description'] ?>
        </div>

        <p class="parking">
          Parcheggio Disponibile:

          <?php if ($hotel['parking']) {
            echo 'Si';
          } else {
            echo 'No';
          } ?>

        </p>
        <p class="vote <?php 
          if (
          !empty($_GET['vote'])
          ) { 
            echo 'red'; 
            } 
            ?>">Stelle <?php echo $hotel['vote'] ?></p>
        <p class="distance">Distanza dal centro: <?php echo $hotel['distance_to_center'] ?></p>
      </div>

    <?php } ?>
  </div>

</body>

</html>





