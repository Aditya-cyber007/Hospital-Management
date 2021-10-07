<?php
    
$name=  $_POST['staff-name'];
$email= $_POST['staff-email'];
$pass=  $_POST['staff-pass'];
$mobile=$_POST['staff-phone'];
$type="Staff";

session_start();

$branch=$_SESSION['branch'];



$host="localhost";
$user="root";
$password="";
$db="user";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = ("INSERT INTO `admin` (`name`, `email`, `pass`, `type`, `mobile`,`branch`) VALUES ('$name', '$email', '$pass', '$type', '$mobile','$branch');");
    if ($conn->query($sql) === TRUE) {
        echo "One Staff added successfully.";
        echo " <h2 class='forgot' align='left'><a href='admin.php'>Back to Admin-Page</h2>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo " Unable to create Credential.<br><h2 class='forgot' align='left'><a href='admin.php'>Admin-Page</h2>";
      }
      $conn->close();
    
      ?>