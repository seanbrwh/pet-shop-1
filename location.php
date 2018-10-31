<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="reset.css">
  <title>Sandy's Pet Shop</title>
</head>
<body>
<?php
  include 'Includes/header.php'
?>
  <div class="container col">
    <div>
      <h1>Directions</h1>
      <p>Get Off I-15 at Spanish Fork Main Street head west 9 blocks, Located on the corner of main street and 100 North. </p>           
    </div>
    <div>
      <h1>Map</h1>
      <div id="map"></div>
    </div>    
  </div>
<?php
  include 'Includes/footer.php'
?>
<script>
      var map;      
      function initMap() {
          var myLatLng = {lat:40.111400 ,lng:-111.654672};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            title: 'Sandy\'s Pet Shop'
          });
          function toggleBounce() {
          if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
          } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
          }
}
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVvaLfYBzRObPNXochmDIBD-w9IsBrc00&callback=initMap"
    async defer></script>
</body>
</html>