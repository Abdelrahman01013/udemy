


<?php 
require("config.php") ;

if(isset($_SESSION['user'])){header("location:profile.php");}

  if(isset($_POST['sub'])){

 
    $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ;
    $password=filter_var($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS)  ;

    if(empty($email)){$error="PLZ Enter Email " ;}else{
        if(empty($password)){
          $error="PLZ Enter Password" ;}
        else{
      $select="SELECT *FROM users WHERE email='$email'" ;
      $search_email=mysqli_query($conn,$select);
      $date=mysqli_fetch_assoc($search_email);
      if(!$date){$error="Verify your email and password" ;

      }else{
        $password_hash=$date['password'] ;
        if(!password_verify($password,$password_hash)){$error="Verify your email and password";}
        else{
          $_SESSION['user']=['name'=>$date['name'],'email'=>$date['email']] ;

         
        header("location:index.php") ;  
        }
      }
          
          
          
          ;
        }
    }

    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="./assest/css/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_css_bootstrap.min.css">
    <link rel="stylesheet" href="./assest/scss/style.css">
    <link rel="stylesheet" href="./assest/css/login.css">
    <title>UDEMY</title>
</head>
<body>
    
       <!-- //maim menue -->
   <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./assest/images/logo.svg" alt="Bootstrap" width="90" >
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a href="#"  class="dropdown-item" href="#">Devolpment</a></li>
                      <li><a href="#"  class="dropdown-item" href="#">Bussiness</a></li>
                      
                    </ul>
                  </li>
                  <form class="d-flex flex-auto"  >
                    <input class="form-control  rounded-pill border-dark"  type="search" placeholder="Search" aria-label="Search">
                  </form>
              
                  <li class="nav-item">
                    <a class="nav-link active" href="#"  aria-current="page" href="#">Udemy Bussiness</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#"  aria-current="page" href="#">Teach on Udemy</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link active" href="#"  aria-current="page" href="#"> <i class="bi bi-cart3"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#"  aria-current="page" href="#"> <button type="button" class="btn btn-outline-dark">Log In</button>
                    </i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./sinup.php"> <button type="button" class="btn btn-dark">Sin Up</button></i></a>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#"> <button type="button" class="btn btn-outline-dark"><i class="bi bi-globe"></i></button></a> -->
                  </li>
                 
            </ul>

            
          </div>
        </div>
      </nav>
   </div>

                
     <div class="login-page">
        <div class="login-container">
    <h2>Login</h2>
    <form method="POST" >
       
        <div class="form-group">
            <label for="email">email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <?php if(isset($error)){echo "<p style='color:red'>" .$error ."</p>" ;} ?>
         
            <button type="submit"  name='sub'>Login</button>
            <!-- <button type="submit"  name='submit'>Login</button> -->
            <!-- <a class="register" href="./forgotpassword.php">Forgot a password</a></span> -->
        </div><span>Create new account
        <a class="register" href="./sinup.php">Register</a></span>
    </form>
    </div>
     </div>

    <footer>
        <div class="container-fluid bg-dark mt-5 text-light">
          <div class="footer-menue">
            <ul>
              <li><a href="#">Udemy Business</a></li>
              <li><a href="#">Teach on Udemy</a></li>
              <li><a href="#">Get the app</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
            <ul>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Help and Support</a></li>
              <li><a href="#">Affiliate</a></li>
              <li><a href="#">Investors</a></li>
            </ul>
            <ul>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Accessibility statement</a></li>
              
            </ul>
           <div class="btn">
            <button type="button" class="btn btn-outline-light  "><i class="bi bi-globe2"></i>English</button>
            </div>

          </div>
        </div>
       </footer>
        
       <div class="container-fluid bg-dark d-flex justify-content-between sub-footer text-light">
        <div class="footer-logo">
          <img src="./assest/images/footer-logo.svg" alt="hgh">
        </div>
        <div class="copy-write">
          © 2023 Udemy, Inc.
        </div>
       </div>



       <script src="./assest/js/sinUp.js"></script>
       <script src="./assest/js/login.js"></script>
  <script src="./assest/js/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_js_bootstrap.bundle.min.js"></script>
  <script src="./assest/js/script.js"></script>
</body>
</html>