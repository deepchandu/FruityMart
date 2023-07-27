<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="jack.css">
    <style>
        #div2{
    background-image: url(lol3.jpg);
    padding: auto;
    
}
.container11{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
    margin-bottom:30px;
}

    </style>
</head>
<body >


    <div id="div1">
    <header class="topbar">
        <div class="container flex justify-between item-center">
          <div class="icons">
            <a href="#"><img src="./icons/facebook.svg" alt=""></a>
            <a href="#"><img src="./icons/google.svg" alt=""></a>
            <a href="#"><img src="./icons/instagram.svg" alt=""></a>
            <a href="#"><img src="./icons/twitter.svg" alt=""></a>
            <a href="#"><img src="./icons/pinterest.svg" alt=""></a>
            <a href="#"><img src="./icons/search.svg" alt=""></a>
          </div>
          <div class="auth flex item-center">
            <div>
                <img src="./icons/person-circle.svg" alt="">
                <a href="login.php">Log in</a>
            </div>
            <span class="divider">|</span>
            <div>
                <img src="./icons/pencil-square.svg" alt="">
                <a href="registration.php">Register Now</a>
            </div>
            <span class="divider">|</span>
            
          </div>
        </div>
    </header>
    </div>


    <div id="div2">
    <nav>      
      <div class="top">
        <div class="container flex justify-between">
          <div class="contact flex item-center">
            <img src="./icons/telephone-fill.svg" alt="">
            <div>
              <h5>Contact Us : (+91) 123 456 789</h5>
              <h6>Email : desk@frooty.com</h6>
            </div>
          </div>
          <div></div>
          <div class="time flex">
            <img src="./icons/clock-history.svg" alt="">
            <div>
              <h5>Working Hours:</h5>
              <h6>Mon-Sat (10.00am - 10.00pm)</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar">
        <div class="container flex justify-center shadow">
          <a href="ASSENQ(1).html" class="active">Home</a>
          <a href="#about">About Us</a>
          <a href="#product">Products</a>
          <a href="#blog">Blog</a>
          <a href="product.html">Shop</a>
          <a href="contact">Contact Us</a>
        </div>
      </div>
    </nav>



    <div id="div2" style="background-image: url(fruit2.jpg);">
    <div class="container11">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="ASSENQ(1).html" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
    </div>
    </div>

    <footer>
  <div class="container">
      <div class="box">
          <h3>About us</h3>
          <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
              passage.</p>
          <button class="btn btn-secondary">Read More</button>
      </div>
      <div class="box">
          <h3>Quik Links</h3>
          <ul>
              <li>
                  <a href="ASSENQ(1).html">Home</a>
              </li>
              <li>
                  <a href="#">About us</a>
              </li>
              <li>
                  <a href="#">Products</a>
              </li>
              <li>
                  <a href="#">Blog</a>
              </li>
              <li>
                  <a href="#">Contact us</a>
              </li>

          </ul>
      </div>
      <div class="box">
          <h3>Follow Us</h3>
          <div>
              <ul>
                  <li>
                      <a href="https://www.facebook.com/codersgyan">
                          <img src="./icons/facebook.svg" alt="">
                          <span>Facebook</span>
                      </a>
                  </li>
                  <li>
                      <a href="https://twitter.com/CoderGyan">
                          <img src="./icons/twitter.svg" alt="">
                          <span>Twitter</span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <img src="./icons/google.svg" alt="">
                          <span>Google +</span>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/codersgyan/">
                          <img src="./icons/instagram.svg" alt="">
                          <span>Instagram</span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="box instagram-api">
          <h3>Instagram</h3>
          <div class="post-wrap">
              <div>
                  <img src="./images/food-table.jpg" alt="">
              </div>
              <div>
                  <img src="./images/food-table.jpg" alt="">
              </div>
              <div>
                  <img src="./images/food-table.jpg" alt="">
              </div>
             
          </div>
      </div>
  </div>
</footer>

<footer class="copyright">
  <div>
      Copyright © 2020 .All rights reserved by <a href="https://www.instagram.com/codersgyan/">Coder's Gyan</a>.
  </div>
</footer>



  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/app.js"></script>
    
</body>
</html>



