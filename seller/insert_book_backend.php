<?php

$bookisbn = $_REQUEST["bookisbn"];
echo $bookisbn;
$booktitle = $_REQUEST["booktitle"];
$price = $_REQUEST["price"];
$author_name= $_REQUEST["author_name"];
$genre = $_REQUEST["genre1"];
echo $genre;
$seller_id= $_REQUEST["seller_id"];

//echo "$name";
$target_dir = "pictures/";
$target_file = $target_dir . basename("$bookisbn.jpg");
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo "check2";

$servername = "localhost";
$username= "root";
$password= "";
$dbname="project2";


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_errno)
{
  die("connection failed: ".$conn->connect_error);
}
else
{
  echo "connected successfully";
}

$sql= "INSERT INTO `books` (`booktitle`, `bookisbn`, `price`, `author_name`, `genre`, `seller_id`) VALUES ('$booktitle', '$bookisbn', '$price', '$author_name', '$genre', '$seller_id');";

if($conn->query($sql)=='true')
{
  echo "new bookadded";
  
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
   echo "Sorry, there was an error uploading your file.";
  }
}
else
{
  echo "book failed to be added";
}

?>