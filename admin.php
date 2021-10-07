
<?php
session_start();
if(isset($_SESSION['email'])){
?>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
</head>

<body>

  <h2>Hello Admin</h2>
  <h3>You can add Doctors and Branch<h2 class="forgot" align="right"><a href="logout.php" >logout</h2></h3>

  <div class= "row">
    <div class="column">
      <div class="card">
        <img src="./images/doctor.jfif" alt="Doctor" style="width:100%"><br>
        <h3 class="submit"><a href="create-doctor.html">Add Doctor</h3>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="./images/branch2.jfif" alt="staffs" style="width:100%"><br>
        <h3 class="submit" ><a href="create-branch.php">Add Branch</h3>
      </div>
    </div>
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