<?php
session_start();

include 'dbconnect.php';
if(!isset($_SESSION['adminloggedin'])||$_SESSION['adminloggedin']!=true){
header("location:adminlogin.php");
exit;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproducts</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
 <!-- Main css -->
 <link rel="stylesheet" href="Css/add.css">
 
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
    <style>
     a{
        text-decoration: none;
        color:black;
    }
   
    
    </style>
</head>
<body>
<div class="tmp">

</div>
<div class="container">
        <div class="navbar my-2" data-aos="fade-down">
          <div class="logo">
            <a href="home.php"><img src="images/logo.png" width="160px" height="40px" /></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="home.php">Home</a></li>
              <li><a href="products.php<?php echo'?products='.true ?>">Products</a></li>
              <li><a href="">Myorder</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="logout.php">logout</a></li>
            </ul>
          </nav>
          <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
          <img src="images/menu.png" class="menu-icon"  onclick="menutoggle()">
        </div>
      </div>

<?php
      if (isset($_GET['msg1'])) {
    echo '<div class="alert alert-danger" role="alert">
    Product successfully added to database
  </div>';
  } elseif (isset($_GET['msg2'])) {
    echo '<div class="alert alert-danger" role="alert">
      fail
  </div>';
  }
    ?>
      <div class="main my-5" data-aos="zoom-in-up">
        <div class="container">
            <div class="signup-content ">
                <div class="signup-form">
                    <form method="POST" class="register-form my-5" id="register-form" action="addproductaction.php">
                    <h2>Add Product :</h2>
                        <div >
                            <div class="form-group">
                                <label for="pname">Product Name :</label>
                                <input type="text" name="pname" minlength="4" class="input-field"  id="pname" required/>
                            </div>
                            <div class="form-row">
                            <div class="form-group">
                                <label for="pprice">Product Price :</label>
                                <input type="text" name="pprice"  class="input-field" id="pprice" required/>
                            </div>
                            <div class="form-group">
                                <label for="pauthor">Product Author :</label>
                                <input type="text" name="pauthor" class="input-field" id="pauthor" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="prating">Product Rating :</label>
                                <select name="prating" id="prating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Pcategory">Product Category :</label>
                                <select name="pbranch" id="Pcategory">
                                    <option value="it">IT</option>
                                    <option value="me">ME</option>
                                    <option value="ce">CE</option>
                                    <option value="ee">EE</option>
                                    <option value="ele">ELE</option>
                                    <option value="ex">EX</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="pdescription">Product Description :</label>
                            </div>
                            <div class="form-group">
                               <textarea name="pdescription" id="pdescription" cols="40" rows="4"></textarea>
                            </div>
                        
                            <div class="form-group">
                                <label for="pimg1"> Product 1 Image link :</label>
                            </div>
                            <div class="form-group">
                               <textarea name="pimg1" id="pimg1" cols="40" rows="4"></textarea>
                            </div>
                        
                         <div class="form-group">
                                <label for="pimg2"> Product 2 Image link :</label>
                            </div>
                            <div class="form-group">
                               <textarea name="pimg2" id="pimg2" cols="40" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pimg3"> Product 3 Image link :</label>
                            </div>
                            <div class="form-group ">
                               <textarea name="pimg3" id="pimg3" cols="40" rows="4"></textarea>
                            </div>
                        
                        <div class="form-submit ">
                            <input type="submit" value="Add Product" class="submit" name="add-product" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col-1">
              <h3>Download Our App</h3>
              <p>Download App for Android and ios mobile phone </p>
              <div class="app-logo">
                <img src="images/play-store.png">
                <img src="images/app-store.png">
              </div>
            </div>
            <div class="footer-col-2">
              <img src="images/logo-white.png" >
              <p> Our Purpose Is To Sustainably Make the Plesure and Benefits
                of Sports Accessible to the Many. </p>
            </div>
           
            <div class="footer-col-3">
              <h3>Follow us</h3>
              <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>YouTube</li>
              </ul>
            </div>
          </div>
          <hr>
          <p class="copyright">Copyright @ 2021  Suyog | All Rights Reserved </p>
        </div>
      </div>
     <script src="javascript/javascript.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
    offset:100,
    duration: 1000,
  });
  </script>

    
</body>
</html>

