<?php 
$name=      $_POST['doctor-name'];
$email=     $_POST['doctor-email'];
$pass=  $_POST['doctor-pass'];
$mobile=    $_POST['phone'];
$type="Doctor";

$host="localhost";
$user="root";
$password="";
$db="user";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = ("INSERT INTO `admin` (`name`, `email`, `pass`, `type`, `mobile`) VALUES ('$name', '$email', '$pass', '$type', '$mobile');");
    if ($conn->query($sql) === TRUE) {
        echo "One Doctor added successfully.<h2 class='forgot' align='left'><a href='create-doctor.html'>Add one-more Doctor</h2>";
        echo " <h2 class='forgot' align='left'><a href='admin.php'>Back to Admin-Page</h2>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo " Unable to create Credential.<br><h2 class='forgot' align='left'><a href='admin.php'>Admin-Page</h2>";
      }
      $conn->close();
?>