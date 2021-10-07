<?php
session_start();
if(isset($_SESSION['email'])){
?>

<html>

<head>
   <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register-Patient</title>
</head>

<body>
<h2>Hello Staff</h2>
<h3>You can register patients</h3>
  <div class="main">
    
    <p class="sign" align="center">Register Patient</p>
    <form class="form1" action = "patient-success.php" method = "post">
        <input class="un " type="text" name = "patient-name" align="center" placeholder="patient-name" required>
        <input class="un" type="tel" name="patient-phone" align="center" placeholder="mobile-number" required>
        <input class="un" type="number" name="patient-age" align="center" placeholder="Age" required>

      <input class="submit" align="center" type=submit  >
      <h3 class='forgot' align="center"><a href='logout.php'>Logout</h3>;
    </div>
</body>

</html>

<?php
}
else{
  header("Location: login.html");
    exit();
}

?>