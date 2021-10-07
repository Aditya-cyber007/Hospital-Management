<?php 

$host="localhost";
$user="root";
$password="";
$db="user";

$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['email'])){
     
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $type=$_POST['type'];

    session_start();

        $_SESSION['email']=$_POST['email'];
        $_SESSION['pass']=$_POST['pass'];
        $_SESSION['type']=$_POST['type'];
    
    $sql="select * from admin where email='".$email."'AND pass='".$password."'AND type='".$type."' limit 1";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        session_start();

        $email=$_SESSION['email'];
        

        if($type=='Admin'){
            header("Location: admin.php");
            exit();
        }
        elseif($type=='Doctor'){
            header("Location: patient-graph.php");
        exit();
        }
        elseif($type=='Staff'){
            header("Location: register-patient.php");
        exit();
        }

        
    }
    else{
        echo " You Have Entered Wrong Credential.<br><h2 class='forgot' align='left'><a href='login.html'>Login Again</h2>";
        exit();
    }
        
}
?>