

<?php
include("config.php") ;
if(!$_SESSION['user']){header("location:login.php");}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user']['name'] ?></title>
    <link rel="stylesheet" href="./assest/css/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_css_bootstrap.min.css">
    <link rel="stylesheet" href="./assest/scss/style.css">

    <style> 
body{background:rgba(218, 165, 32, 0.089)}
h1{margin-top:50px}
</style>
</head>
<body>


    <div class="w-100">
        

       <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
               <a href='index.php'> <img src="./assest/images/logo.svg" alt="Bootstrap" width="90" ></a>
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
                    <a  href="profile.php"  aria-current="page" > <i class="bi bi-cart3"></i></a>
                  </li>
                    <?php
                    if(!isset($_SESSION['user'])){ ?>

                   
                    
                  
                  <li class="nav-item">
                    <a class="nav-link active" id="login-nav"   aria-current="page" href="./login.php">
                       <button type="button" class="btn btn-outline-dark">Log In</button>
                    </i></a>
                    <?php ;}else{  ?>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link active" id="sinUp-nav" aria-current="page" href="./sinup.php"> 
                      <button type="button" class="btn btn-dark">Sin Up</button></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="user-nav" aria-current="page" href="#"> 
                      <button type="button" class="btn btn-dark">user</button></i></a>
                  </li> -->
                  
                  <li class="nav-item">
                   
                    <!-- <a class="nav-link active" id="logOut-nav" aria-current="page" href="#">  -->
                    <li class="nav-item m-2">
                    <a  href="profile.php"  aria-current="page" >
                      <?php echo $_SESSION['user']['name']; ?>
                    </a>
                  </li>
                    
                      <a  href="logout.php" class="btn btn-dark" name="submit" >logOut</a></i></a>

                  </li>
                 <?php }?>
                  <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#"> <button type="button" class="btn btn-outline-dark"><i class="bi bi-globe"></i></button></a> back End -->
                  </li>
                
            </ul>

            
          </div>
        </div>
      </nav>
  

      </div>
<div class="container"style='text-align:center ;margin-top:150px'>




<!-- ********************************* -->

<?php


if(isset($_SESSION['user'])){
$email=$_SESSION['user']['email'] ;
$search=mysqli_fetch_assoc(mysqli_query($conn,"SELECT *FROM users WHERE email= '$email'")) ;
$search_photo=$search['pactuer'];
$search_name=$search['name'] ;
$search_email=$search['email'] ;

    echo "
    <img src='$search_photo' width='250' height='250px' style='border:5px inset black ; border-radius:130px'>  " ;
    echo "<i> <h1>"."Name: " .$search_name ."</h1></i>" ."<br>";
    echo "<i> <h1>"."Email: " .$search_email ."</h1></i>" ."<br>";
   
   
   }
?>


<a href='edit.php' class='btn btn-danger'> EDIT </a>
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
          

</body>
</html>