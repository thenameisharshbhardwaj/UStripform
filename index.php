<?php
if(isset($_POST['name'])){
// Connecting to the database
$server = "localhost";
$username = "root";
$password = "";

// Create a connection
$con = mysqli_connect($server, $username, $password);
if (!$con) {
    # code...
    die("connection to this database failed due to" .
     mysqli_connect_error());

}
// echo "Success connecting to the db";
 
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `ustrip` . `regestered` (`name`, `age`, `gender`,`email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())"; 
//   echo $sql;

  if ($con->query($sql) == true) {
    # code...
    echo "Your response has been recorded";
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="IMG_0456_copy_2.webp" alt="Inmantech Institution">
    <div class="container">
        <h3>Welcome to BIT Meerut US Trio form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="number" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
          
        </form>
    </div>
    <script src="index.js"></script>

    <!-- INSERT INTO `regestered` (`sno.`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'Harsh BHardwaj', '23', 'Male', 'harshbhardwaj9087@gmail.com', '9675887695', 'Hey , sir Good morning. i waana go to this trip.', '2024-04-13 08:02:45.000000'); -->
</body>
</html>