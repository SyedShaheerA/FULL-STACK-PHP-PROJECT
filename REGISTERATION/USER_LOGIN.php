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


$sql = "SELECT * FROM `buyer` WHERE buyer_id = '$_REQUEST[buyer_id]' and password = '$_REQUEST[password]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Login successful
  
  $row = $result->fetch_assoc();
  // Store user information in session
  $_SESSION["buyer_id"] = $row["buyer_id"];
  $_SESSION["first_name"] = $row["first_name"];
  $_SESSION["last_name"] = $row["last_name"];
  $_SESSION["phone_number"] = $row["phone_number"];
  $_SESSION["email"] = $row["email"];
  $_SESSION["address"] = $row["address"];
  
  echo "pass";
} else {
  echo "dont know";
  // Login failed
  echo "Invalid phone number or password";
}

?>