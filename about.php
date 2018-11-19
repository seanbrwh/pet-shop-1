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
  <div class="flex col" id="about-page">
    <h1 class="page-head">About Sandy's Pet Shop Employees</h1>
    <div class='flex row'>
      <img class="emp" src="https://via.placeholder.com/55" alt="Sean">
      <img class="emp" src="https://via.placeholder.com/55" alt="Jake">
      <img class="emp" src="https://via.placeholder.com/55" alt="Jemille">
      <img class="emp" src="https://via.placeholder.com/55" alt="Barb">
    </div>
    <p class='emp-par'>Sean has worked with us since opening and is one of the best trainers I have met.</p>
    <p class='emp-par'>Jake has worked with us for 5 years and is one of the most talented groomers. </p>
    <p class='emp-par'>Jemille has worked with us for 4 years and is an amazing Sales Admin.</p>
    <p class='emp-par'>Barb has worked with us for since open and is an outstanding Comptroller.</p>
  </div>
  <?php
    include 'Includes/footer.php'
  ?>
</body>
</html>