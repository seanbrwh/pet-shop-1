<?php
  if(isset($_POST)){
    $index = 'grooming.php';
    $message = 'Thank you!';
    $servername = "localhost";
    $username = "root";
    $password = "HjKl0863!@";
    $dbname = "pet_shop";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn){
      echo 'Connected'  . '</br>';
    }else{
      die("Connection Failed");
    }  
    $first_name = htmlentities($_POST['first_name']); 
    $last_name = htmlentities($_POST['last_name']);
    $address = htmlentities($_POST['address']);
    $city = htmlentities($_POST['city']);
    $state = htmlentities($_POST['state']);
    $zipcode = htmlentities($_POST['zipcode']);
    $phonenum = htmlentities($_POST['phone_number']);
    $email = htmlentities($_POST['email']);
    $animaltype = htmlentities($_POST['type']);
    $breed = htmlentities($_POST['breed'] ? ' ' : $_POST['breed']);
    $petname = htmlentities($_POST['pet_name']);
    $fixed = htmlentities($_POST['true']);
    $notfixed = htmlentities($_POST['false']);
    $year = htmlentities($_POST['YY']);
    $month = htmlentities($_POST['MM']);
    $day = htmlentities($_POST['DD']);
    $birthday = "$year/$month/$day";
    // echo $address;
    // echo $first_name . ' ' .$last_name. ' ' .$address. ' ' .$city. ' ' .$state. ' ' .$zipcode. ' ' .$phonenum. ' ' .$email. ' ' .$animaltype. ' ' .$petname. ' ' .$fixed. ' ' .$notfixed. ' ' .$year. ' ' .$month. ' ' .$day;
    $sql = "INSERT INTO grooming(FirstName,LastName,Address,City,State,Zip,PhoneNumber,Email,PetType,Breed,PetName,NeuteredOrSpayed,PetBirthday)
            VALUES('$first_name','$last_name','$address','$city','$state','$zipcode','$phonenum','$email','$animaltype','$breed','$petname','$fixed','$birthday')";
      if($conn->query($sql) === TRUE){
        header('Location: '.$index);
        die();
      }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
?>