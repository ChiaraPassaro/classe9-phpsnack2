<?php
  include __DIR__ . '/server.php';
  $advActive = [];
  foreach ($ads as $key => $ad) {
    if ($ad['is_active'] == true) {
      $advActive[] = $ad;
    }
  }

  $num = rand(0, count($advActive) - 1);
  $srcImage = $advActive[$num]['image_path'];
  $link = $advActive[$num]['link'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="adv">
    <a href="<?php echo $link  ?>"><img src="<?php echo $srcImage ?>" alt=""></a>
  </div>

</body>

</html>