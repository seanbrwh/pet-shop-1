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
    <h1 class="page-head">Contact Us</h1>
    <ul class="flex col" id="error">
    
    </ul>    
      <form class="flex col" action="contact_form_process.php" method="post" id="contact">
        <input type="text" name="first_name" id="first_name" placeholder="First Name">
        <input type="text" name="last_name" id="last_name" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="E-mail">
        <textarea name="message" id="message" placeholder='Your message here...'></textarea>
        <input type="submit" value="Submit">
      </form>
  </div>
  <?php
    include 'Includes/footer.php'
  ?>  
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="JS/contact.js"></script>
</body>
</html>