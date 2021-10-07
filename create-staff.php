
<html>
<head>
   <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Staff</title>
</head>

<body>
<?php
    session_start();
    $_SESSION['branch']=$_POST['branch-name'];

  ?>
  
  <div class="main">
    <p class="sign" align="center">Add Staff</p>
    <form class="form" action = "staff-success.php" method = "post">
      <input class="un " type="text" name = "staff-name" align="center" placeholder="staff-name" required>
      <input class="un " type="email" name="staff-email" align="center"  placeholder="staff-Email" required>
      <input class="pass" type="password" name="staff-pass" align="center" placeholder="Create Password" required >
      <input class="un" type="doctor-tel" name="staff-phone" align="center" placeholder="Mobile-number" required>
      <input class="submit" align="center" type=submit  >
      <p class="forgot" align="center"><a href="admin.php">Back</p>
      </div>


    
    </body>

</html>

