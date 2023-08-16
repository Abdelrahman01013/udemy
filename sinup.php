<?php 
require("config.php") ;

if(isset($_SESSION['user'])){header("location:profile.php");}

if(isset($_POST['submit'])){
  
  $name=filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS) ;
  $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ;
  $pass=$_POST['password'] ;
  $repass=$_POST['repassword'] ;
  $serch=mysqli_query($conn,"SELECT *FROM users WHERE email ='$email'") ;


  if(mysqli_fetch_assoc($serch)){$error="This Email Already Exist";
  }else{
    if($pass != $repass){ $error ="Password does not match" ;}
    else{
      $pass=password_hash($pass,PASSWORD_DEFAULT) ;
      $insert=mysqli_query($conn,"INSERT INTO users(name,email,password)
       VALUE ('$name','$email' ,'$pass')") ;
      if($insert){
  
      $_SESSION['user']=['name'=>$name , 'email'=>$email] ;
      header("location:index.php");
  
}
  
   
           
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
    <link rel="stylesheet" href="./assest/css/sinup.css">
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
                  </form method="POST">
              
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
                    <a class="nav-link active"   aria-current="page" href="login.php"> <button type="button" class="btn btn-outline-dark">Log In</button>
                    </i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"> <button type="button" class="btn btn-dark">Sin Up</button></i></a>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#"> <button type="button" class="btn btn-outline-dark"><i class="bi bi-globe"></i></button></a> --> 
                  </li>
                 
            </ul>

            
          </div>
        </div>
      </nav>
   </div>

                
   <div class="sinup-pag">
   <div class="signup-container">
    <h2>Sign Up</h2>
    <form method="POST">
        <div class="form-group">
            <label for="username">Enter Name</label>
            <input type="text" id="username" name="username" required  value="<?php if(isset($name)){echo $name ;} ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required <?php if(isset($email)){echo $email ;} ?>> 
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required <?php if(isset($name)){echo $name ;} ?>>
        </div>
        <div class="form-group">
            <label for="password"> Repeat your password:</label>
            <input type="password" id="password" name="repassword" required>
            <?php if(isset($error)){echo "<p style='color:red'>" .$error ."</p>" ;} ?>
        </div>
        
        <div class="form-group">
            <button type="submit"  id="sinup-submit" name='submit'>Create New Acount </button>
          <span> Already have account  <a href="./login.php">login</a></span>  
        </div>

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