<?php
// Start the session
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "connected";

}


$sql = "SELECT * FROM `seller` WHERE  phone_number= '$_REQUEST[phone_number]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Login successfull
  echo "USER EXISTS";
} else {
    $sql2 = "INSERT INTO `seller` (`first_name`, `last_name`, `password` ,'phone_number') VALUES ('$_REQUEST[first_name]', '$_REQUEST[last_name]', '$_REQUEST[password]' ,$_REQUEST[phone_number])";
    $sql3 = "INSERT INTO `seller`( `first_name`, `last_name`, `password`, `phone_number`) VALUES ('$_REQUEST[first_name]','$_REQUEST[last_name]','$_REQUEST[password]','$_REQUEST[phone_number]')";
    if( $conn->query($sql3))
    {
        header("Location: login_signup_asseller.php");
    }

    
}

?>