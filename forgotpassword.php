

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
    <link rel="stylesheet" href="./assest/css/forgotpassword.css">
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
                    <a class="nav-link active" href="#"  aria-current="page" href="./login.php"> <button type="button" class="btn btn-outline-dark">Log In</button>
                    </i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./sinup.php"> <button type="button" class="btn btn-dark">Sin Up</button></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"> <button type="button" class="btn btn-outline-dark"><i class="bi bi-globe"></i></button></a>
                  </li>
                 
            </ul>

            
          </div>
        </div>
      </nav>
   </div>

                
          <div class="forgot-password-page">
            <div class="forgot-password-container">
                <h2>Forgot Password</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Enter your email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Reset Password</button>
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





  <script src="./assest/js/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_js_bootstrap.bundle.min.js"></script>
  <script src="./assest/js/script.js"></script>
</body>
</html>