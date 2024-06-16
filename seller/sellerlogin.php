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


$sql = "SELECT * FROM `seller` WHERE seller_id = '$_REQUEST[seller_id]' and password = '$_REQUEST[password]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Login successful
  
  $row = $result->fetch_assoc();
  // Store user information in session
  $_SESSION["seller_id"] = $row["seller_id"];
  $_SESSION["first_name"] = $row["first_name"];
  $_SESSION["last_name"] = $row["last_name"];
  //$_SESSION["phone_number"] = $row["phone_number"];
  
  
  echo "pass";
} else {
  echo "dont know";
  // Login failed
  echo "Invalid phone number or password";
}

?>