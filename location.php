<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="index.css">
  <title>Sandy's Pet Shop</title>
</head>
<body>
  <?php
    include 'Includes/header.php'
  ?>
  <div class="flex col" id="loc-page">
    <h1 class="page-head">
      Location
    </h1>
    <h2 id="address">
      Sandy's Pet Shop
      Address
      110 N Main St, Spanish Fork, UT 84660
    </h2>
    <div id="map"></div>
  </div>
  <?php
    include 'Includes/footer.php'
  ?>
  <script>
      var map;
      var marker;
      function initMap() {
        var sandys = {lat: 40.111401, lng: -111.654671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: sandys,
          disableDefaultUI: true
        });
        var contentString = "<div><h1>Sandy's Pet Shop</h1><h2>Address</h2><p>110 N Main St, Spanish Fork, UT 84660</p></div>";
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        marker = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
          position: sandys,
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });       
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVvaLfYBzRObPNXochmDIBD-w9IsBrc00&callback=initMap"
    async defer></script>
</body>
</html>