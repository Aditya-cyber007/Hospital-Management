<?php 
$name=  $_POST['patient-name'];
$phone= $_POST['patient-phone'];
$age=  $_POST['patient-age'];


date_default_timezone_set('Asia/Kolkata');
$date =date("Y-n-j");


$host="localhost";
$user="root";
$password="";
$db="user";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
    $sql = ("INSERT INTO `patient` (`name`, `phone`, `age`, `date`) VALUES ('$name', '$phone', '$age', '$date');");
    if ($conn->query($sql) === TRUE) {
        echo "One Patient registered successfully.<h2 class='forgot' align='left'><a href='register-patient.php'>Register Patient</h2>";
        echo " <h2 class='forgot' align='left'><a href='logout.php'>Logout</h2>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo " Unable to register patient .<br><h2 class='forgot' align='left'><a href='login.html'>Login-Again</h2>";
      }
      $conn->close();
?>     