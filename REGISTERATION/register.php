<?php
// Start the session
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


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


$sql = "SELECT * FROM `buyer` WHERE  phone_number= '$_REQUEST[phone_number]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Login successfull
  echo "USER EXISTS";
} else {
    $sql2 = "INSERT INTO `buyer` (`buyer_id`, `first_name`, `last_name`, `phone_number`, `password`, `email`, `address`) VALUES (NULL, '$_REQUEST[first_name]', '$_REQUEST[last_name]', '$_REQUEST[phone_number]', '$_REQUEST[password]', '$_REQUEST[email]', '$_REQUEST[address]')";
    

    if( $conn->query($sql2))
    {
        header("Location: LOGIN_SIGNUP.php");
    }
}

?>