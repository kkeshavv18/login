


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


$sql = "INSERT INTO `register` (`uName`, `pWord`) VALUES ('$uName', '$pWord')";
}
$result = mysqli_query($conn,$sql);
if($result){
    echo("Registered successfully");
    
}
else{
    echo("Register Unsuccessful");
}




?>