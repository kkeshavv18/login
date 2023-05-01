


<?php 
$servername = 'localhost';
$username = 'root';
$password= '';
$dbName = 'validation';


// Connecting to the Database 
$conn = new mysqli($servername,$username,$password,$dbName);

if(!$conn){
    die("Connection Failed");
}

if(isset($_POST['submit']))
{
$uName = $_POST['username'];
$pWord = $_POST['password'];

$sql = "SELECT * FROM `register` WHERE uName = '{$uName}' AND pWord= '{$pWord}'";
$result = mysqli_query($conn, $sql) or die("Query Failed.");

if(mysqli_num_rows($result) > 0){



      header("Location: successful.php");
    }else{
        echo("Username or Password donot match");
    }

  }










?>