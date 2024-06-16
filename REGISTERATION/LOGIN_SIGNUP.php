<!doctype html>
<html lang="en">

<?php
// Start the session
session_start();
?>

<head>
  <title>LOGIN PAGE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


  <style>
    .LOGIN_SIGN{
      background-image: url(/PROJECT/HTMLPIC/nick-fewings-f2Bi-VBs71M-unsplash.jpg);
      background-size: 100%;
    }

  </style>
</head>

<body>
  <header>
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

#$_SESSION["user_id"]=null;
  if(!isset($_SESSION["buyer_id"]))
  {
    ?>
    <!-- MAKE A BOX -->
    <div  STYLE=" margin-top: 20px; justify-content: center; align-items: center;display: flex;  font-family: fantasy; font-size:large;">
            <div class="LOGIN_SIGN" style="border:2px solid black; width: 500px; height: 500px; ">
            <div style="margin-top: 150px;"> 
              <div style= "justify-content: center; align-items: center;display: flex;">
                LOGIN <br>
              </div>          
              <div style= "justify-content: center; align-items: center;display: flex; color: BLUE">
                <input type="text" name="ID" id="ID" placeholder="ID"><br>
              </div>
              <div style= "justify-content: center; align-items: center;display: flex; color: BLUE">
                 <input type="password" name="password" id="PASS" placeholder="PASSWORD"><br>
              </div>

            
              <div id='check' style=" justify-content: center; align-items: center;display: flex; color: rgb(128, 0, 255); background-color: rgba(255,255,255,0.5) ;">
              
              </div>

              <div style= "justify-content: center; align-items: center;display: flex;">
                <button type="button" onclick="loadProfile()">login</button>
              </div>
              
              <div  style="margin-top:150px; justify-content: center; align-items: center;display: flex; color: rgb(128, 0, 255); background-color: rgba(255,255,255,0.5) ;">
                <a href="REGISTER.html"> REGISTER </a> 
              </div>

              </div>

              
            </div>

    </div>


    

    <?php
  }
  else
  {
   
    ?>
    <div  STYLE=" margin-top: 20px; justify-content: center; align-items: center;display: flex;  font-family: fantasy; font-size:large;">
            <div class="LOGIN_SIGN" style="border:2px solid black; width: 500px; height: 500px; ">
            <div style="margin-top: 150px;"> 
              <div style= "justify-content: center; align-items: center;display: flex;">
                ACCOUNT INFO <br>
              </div>          
              <div style= "justify-content: center; align-items: center;display: flex; color: BLUE; background-color: rgba(255, 255, 255, 0.5);">
                  <?php 
                  echo $_SESSION["buyer_id"] ; ?><br>
                  <?php echo $_SESSION["first_name"];?><br>
                  <?php echo $_SESSION["last_name"];?><br>
                  <?php echo $_SESSION["phone_number"] ;?><br>
                  <?php echo $_SESSION["email"] ;?><br>
                  <?php echo $_SESSION["address"] ;?><br>
                  
                  
              </div>
              <div style= "justify-content: center; align-items: center;display: flex; color: BLUE">
                <?php ?>
                <button type="button" onclick="LEFT()">logout</button>              
              
              </div>
            </div>

              
            </div>

    </div>
    
    <?php
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





<script>
  
function loadProfile()
  {
  
    var xhttp  = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("check").innerHTML=this.responseText;
          var response = this.responseText.trim();
          if (response != "connectedpass") {
            document.getElementById("check").innerHTML ="INCORRECT USERNAME OR PASSWORD";
            // this.responseText;
            //;
          } 
          else {
            //document.getElementById("check").innerHTML = this.responseText;
            window.location.href = '/PROJECT';
          }
      }
    };
  
    xhttp.open("POST", "USER_LOGIN.php?buyer_id="+document.getElementById("ID").value+"&password="+document.getElementById("PASS").value, true);
    xhttp.send();
  }


  function LEFT(){
    var xhttp  = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        
            window.location.href= "LOGIN_SIGNUP.php"
        
      }
    }
    xhttp.open("POST", "logout.php", true);
    xhttp.send();

  
  }
</script>
  


</html>