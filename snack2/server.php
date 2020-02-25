<?php
  //echo $_GET['name'];
  $people = [
    'Michele',
    'Giovanna',
    'Mario',
    'Pippo'
  ];

  if(empty($_GET['name'])) {
    echo 'Non hai inserito un nome';
  } else {
    $name = ucfirst(strtolower($_GET['name']));
    //echo $name;

    if (in_array($name,  $people)) {
      echo 'invitato';
    } else {
      echo 'non invitato';
    }
  }
  

?>