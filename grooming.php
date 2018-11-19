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
  <div class="flex col" id="grooming-page">
    <h1 class='page-head'>Schedule an appointment</h1>
    <script src="JS/grooming.js"></script>
<form action="grooming_process.php" method="post" class="flex col" id="groom_form">
  <input type="text" name="first_name" id="first_name" placeholder="First Name">
  <input type="text" name="last_name" id="last_name" placeholder="Last Name">
  <input type="text" name="address" id="groom-address" placeholder="Address">
  <input type="text" name="city" id="city" placeholder="City">
  <input type="text" name="state" id="state" placeholder="State">
  <input type="text" name="zipcode" id="zipcode" placeholder="Zipcode">
  <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number">
  <input type="text" name="email" id="email" placeholder="E-mail">
  <select name="type" id="type" class="select" onchange="selectType()">
    <option>Select your pet type</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="turtle">Turtle</option>
    <option value="snake">Snake</option>
    <option value="ferret">Ferret</option>
  </select>
  <select name="breed" id="breed" class='select dis-none'>
    <option>Select your dog's Breed</option>
    <option value="lab">Labrador Retriever</option>
    <option value="shepard">German Shepard</option>
    <option value="golden">Golden Retriever</option>
    <option value="bulldog">Bulldog</option>
    <option value="beagle">Beagle</option>
    <option value="frenchbd">French Bulldog</option>
    <option value="yorkshire">Yorkshire terrier</option>
    <option value="poodle">Poodle</option>
  </select>
  <input type="text" name="pet_name" id="pet_name" placeholder="Pet Name">
  <label for="spay/neutuered">Neutered/Spayed</label>
  <div class='flex'>
  <label for="true">Yes</label>
    <input type="checkbox" name="true" id="check1" value='1' onchange="selectOnlyThis(this.id)">
  <label for="false">No</label>
    <input type="checkbox" name="false" id="check2" value='0' onchange="selectOnlyThis(this.id)">
  </div>
  <label for="dob">Pet's D.O.B</label>
  <div class="flex">
    <select class='date' name="YY" id="YY">
      <option>Year</option>
      <?php for ($i = 2001; $i <= 2018 ; $i++) :?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php endfor; ?>
    </select>
    <select class='date' name="MM" id="MM">
      <option>Month</option>
      <?php for ($i = 1; $i <= 12; $i++) :?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php endfor; ?>
    </select>
    <select class='date' name="DD" id="DD">
      <option>Day</option>
      <?php for ($i = 1; $i <= 31; $i++) :?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php endfor; ?>
    </select>
  </div>
  <input type="submit" name="groom-sub" id="groom-sub" value="submit">
</form>

  </div>
  <?php
    include 'Includes/footer.php'
  ?>  
</body>
</html>