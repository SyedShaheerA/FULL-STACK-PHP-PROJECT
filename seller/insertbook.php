<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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
          <a class="nav-link"  style="color:white;" href="/PROJECT/seller/vieworders.php">View Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "   style="color:white;"href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "   style="color:white;"href="/PROJECT/REGISTERATION/LOGIN_SIGNUP.php"><b>Account</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- nav bar ends here -->



  </header>



  <main>


<form action="insert_book_backend.php" method="post" enctype="multipart/form-data">

    INPUT BOOK NAME
    <input type= "text" name="booktitle" id ="booktitle">
    <br>
    Input ISBN
    <input type= "text" name="bookisbn" id ="bookisbn">
    <br>
    Input price
    <input type="text" name="price" id="price">
    <br>
    input aithor
    <input type= "text" name="author_name" id ="author_name">
    <br>
    input genre
    <input type= "text" name="genre1" id ="genre1">
    <br>
    input seller
    <input type= "text" name="seller_id" id ="seller_id">
    <br>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>

    <button type="submit">Upload </button> 
    
    <br>
</form>
    



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




<script>
  


</html>