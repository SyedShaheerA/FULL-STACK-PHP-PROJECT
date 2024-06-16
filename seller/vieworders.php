<!doctype html>
<html lang="en">

<head>
  <title>
    <style>
            #Check{
                border: 2px solid black;
            }

    </style>
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>


    <!-- place navbar here -->
          <!--THIS IS THE FIRST NAVBAR-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid  text-primary">
    <a class="navbar-brand"  style="color:white;" href="/PROJECT">BOOKS FOR SALE</a>
    <button class="navbar-toggler "  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  my-2 my-lg-0 " id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto" >
        <li class="nav-item ">
          <a class="nav-link active "   style="color:white;"aria-current="page" href="/PROJECT">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  style="color:white;" href="/PROJECT/books/searchbook.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "   style="color:white;"href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "   style="color:white;"href="REGISTERATION/LOGIN_SIGNUP.php"><b>Account</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--THIS IS THE END OF THE NAVBAR-->
  
  </header>
  <main>


    
<?php
$servername= "localhost";
$username="root";
$password="";
$db="project2";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
else{
    echo "connected successfully";
}

session_start();
$seller_id=1;
//$_SESSION["seller_id"];
$sql="select* from orders where seller_id='$seller_id'";
#joining buyer and orders table to get buyer's info for order shipment.
$sql2= "select *from buyer join orders where buyer.buyer_id=orders.order_id";
$result=$conn->query($sql);
$result2=$conn->query($sql2);
if($result->num_rows>0){
while($row=$result2->fetch_assoc()){
    ?>
    <div style="width: 50%;">
        <table >
            <tr>
            <th style="border: 2px solid black;">Buyer's Name</th>
            <th style="border: 2px solid black;">Email</th>
            <th style="border: 2px solid black;">Address</th>
            <th style="border: 2px solid black;">Phone No</th>
            <th></th>
            </tr>
            <tr>
                <td style="border: 2px solid black;"><?php echo $row2['first_name']?></td>
                <td style="border: 2px solid black;"><?php echo $row2['email']?></td>
                <td style="border: 2px solid black;"><?php echo $row2['address']?></td>
                <td style="border: 2px solid black;"><?php echo $row2['phone_number']?></td>
                <td style="border: 2px solid black;"><form action="" method="post">
                    <label for="accept">Accept Order</label>
                    <input type="radio" name="order" value="accept">
                    <label for="decline">Decline Order</label>
                    <input type="radio" name="order" value="decline">
                </form></td>
            </tr>
           
        </table>
</div>
<?php
}
}
else{
    "No orders received";
}
if (isset($_POST['submit'])) {
    if(isset($_POST['radio']) && $_POST['radio']=="accept")
    { 
            #delete book from cart and from books when book's order is accepted by the seller.
        $sql="DELETE FROM books WHERE book_id = '$your_book_id'";
        if($conn->query($sql)==TRUE){
            $sql_cart="delete from cart where book_id='$your_book_id'";
            if($conn->query($sql_cart)==TRUE){
                #book deleted from cart and inventory.
            }
        }
        }
      else{
            #order is declined.
            $date=date();
            $decline_order="insert into order_confirmation (buyer_id, seller_id,book_id,date, confirm)
             values('$row[buyer_id]','$row[seller_id]','$row[book_id]','$date','false')";
             if($conn->query($decline_order)){
                header("Location: vieworders.php");
             }
        }
}
?>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>