<?php 
  include 'database.php';


  //esempio di dato ricevuto
  // [
  //           'name' => 'Hotel Belvedere',
  //           'description' => 'Hotel Belvedere Descrizione',
  //           'parking' => true,
  //           'vote' => 4,
  //           'distance_to_center' => 10.4
  // ],

// Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.

// Se non c’è un filtro, visualizzare come in precedenza tutti gli hotel

if(!empty($_GET['distance_to_center'])){
  $filteredHotels = [];
  foreach ($hotels as $hotel) {
    if($_GET['distance_to_center'] >= $hotel['distance_to_center']) {
      $filteredHotels[] = $hotel;
    }
  }
} 
elseif(!empty($_GET['vote'])){
  foreach ($hotels as $hotel) {
    if ($_GET['vote'] <= $hotel['vote']) {
      $filteredHotels[] = $hotel;
    }
  }
}
elseif(isset($_GET['parking'])){
  foreach ($hotels as $hotel) {
    if($hotel['parking']){
      $filteredHotels[] = $hotel;
    }
  }
}
else {
  $filteredHotels = $hotels;
}
