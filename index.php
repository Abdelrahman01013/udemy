<?php 
require('config.php') ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="./assest/css/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_css_bootstrap.min.css">
    <link rel="stylesheet" href="./assest/scss/style.css">
    <title>UDEMY</title>
</head>
<body>

       <!-- //maim menue -->
   <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
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
                    <a  href="profile.php"  aria-current="page" > <i class="bi bi-cart3"></i></a>
                  </li>
                    <?php
                    if(!isset($_SESSION['user'])){ ?>

                   
                    
                  
                  <li class="nav-item">
                    <a class="nav-link active" id="login-nav"   aria-current="page" href="./login.php">
                       <button type="button" class="btn btn-outline-dark">Log In</button>
                    </i></a>

                     <li class="nav-item">
                    <a class="nav-link active" id="sinUp-nav" aria-current="page" href="./sinup.php"> 
                      <button type="button" class="btn btn-dark">Sin Up</button></i></a>
                  </li>
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
                 <!-- --hero -->
   <div class="container">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div> <img height="400" src="./assest/images/slider.png" alt="nn"></div>
            <div class="header-bannar">
                <h4>Free New Year Starter Pack</h4>
                <p>Courses start at $14.99. Get your new-student offer before it expires.<a href="#">see details</a></p>
             </div>
          </div>
          <div class="carousel-item">
             <div> <img  height="400" src="./assest/images/slider3.jpg"  alt="sd"></div>
             <div class="header-bannar">
                <h4>Free New Year Starter Pack</h4>
                <p>Courses start at $14.99. Get your new-student offer before it expires.<a href="#">see details</a></p>
             </div>
          </div>
        
        </div>
        <button class="carousel-control-prev   header-carousel-button " type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon  " aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next header-carousel-button"   type="button" data-bs-target="#header-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
   </div>
                   <!-- carousel section -->
    <section>
        <div class="container">
            <h3>A broad selection of cources</h3>
            <p>chose from 183000 online vedio cources with new addition puplished evry month</p>

            <div class="featured-cources border-outline">

                <ul class="nav nav-tabs" id="featured-cources-tabs" role="tablist">

                    <li class="nav-item" role="presentation">
                      <button 
                      class="nav-link  text-dark active" id="Paython-tab" data-bs-toggle="tab" data-tab="paython" data-bs-target="#Paython-tab-pane" type="button" role="tab" aria-controls="Paython-tab-pane" aria-selected="true">Paython</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button 
                      class="nav-link text-dark " id="html-tab" data-bs-toggle="tab" data-tab="html" data-bs-target="#html-tab-pane" type="button" role="tab" aria-controls="html-tab-pane" aria-selected="false">html</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button 
                      class="nav-link text-dark " id="JavaScript-tab" data-bs-toggle="tab" data-tab="javascript" data-bs-target="#JavaScript-tab-pane" type="button" role="tab" aria-controls="JavaScript-tab-pane" aria-selected="false">JavaScript</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button 
                      class="nav-link text-dark " id="sass-tab" data-bs-toggle="tab" data-tab="sass" data-bs-target="#sass-tab-pane" type="button" role="tab" aria-controls="sass-tab-pane" aria-selected="false">sass</button>
                    </li>
                    
                  </ul>

                                
                  <div class="tab-content" id="featured-cources-Content">
                                         <!-- first tab (paython) -->
            <div class="tab-pane fade show active" id="Paython-tab-pane" role="tabpanel" aria-labelledby="Paython-tab" tabindex="0">
                        <div class="tab-pan-content">
                            <h2>Paython</h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime harum nam vitae reiciendis magnam labore quibusdam beatae quae, ipsam itaque, quam natus soluta architecto facere, hic quis explicabo reprehenderit cupiditate?</p>
                              <button type="button" class="btn btn-outline-dark">Paython</button>
                        </div>
                              <!-- paython cards -->
                    <div class="carousel-cards">
                           
                      <div id="featured-cources-paython" class="featured-cources-paython carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/paython1.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>paython for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                           
                           
                          </div>

                          <div class="carousel-item ">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/css.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>css for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="carousel-item ">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/html.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>html for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="carousel-item ">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/js.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>js for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                          </div>

                        

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#featured-cources-paython" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#featured-cources-paython" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                  
                    </div>
                  </div>

                                               <!-- scond tab (html) -->
                    <div class="tab-pane fade" id="html-tab-pane" role="tabpanel" aria-labelledby="html-tab" tabindex="0">

                        <div class="tab-pan-content">
                            <h2>html</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non hic nobis ut labore illum dolore veniam perspiciatis temporibus! Possimus dolores ullam facere doloremque quas odio velit atque? Ab, facilis ipsum a, voluptas est iure suscipit maxime quia vitae explicabo vel?</p>
                              <button type="button" class="btn btn-outline-dark">html</button>
                        </div>
                                                  <!-- html cards -->
                            <div class="carousel-cards">
                           
                      <div id="featured-cources-html" class="featured-cources-html carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/xmen.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>paython for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                           
                           
                          </div>

                          <div class="carousel-item ">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/xmen.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>css for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="carousel-item ">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/xmen.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>html for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="carousel-item ">
                            <div class="col-md-3">
                              <div class="cource-card">
                                <div class="cource-img">
                                  <img src="./assest/images/xmen.jpg"  alt="./assest/images/">
                                </div>
                                <div class="cource-body">
                                 <span class="cource-title"><h4>js for data science and machine learning</h4></span>
                                 <span class="cource-teacher">mohamed emara</span>
                                 <span class="cource-rating">
                                  <span class="cource-rating-number">3.8</span>
                                  <span class="cource-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                  </span>
                                  <span class="cource-rating-total">(14,111)</span>
                                 </span>
                                 <span class="cource-price">12$
                                  <span class="cource-price-discount">120$</span>
                                 </span>
                                 <span class="cource-bestsellar">Bestsellar</span>
                                </div>
                              </div>
                            </div>
                          </div>

                        

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#featured-cources-html" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#featured-cources-html" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                  
                    </div>
                    </div>
                                             
                    
                    
                    
                    <!-- third tab javascript -->
                <div class="tab-pane fade" id="JavaScript-tab-pane" role="tabpanel" aria-labelledby="JavaScript-tab" tabindex="0">
                        
                  <div class="tab-pan-content">
                            <h2>JavaScript</h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eius hic nulla voluptatem in ea, perferendis aliquam deserunt, veniam id, praesentium dolores delectus quisquam quia corporis debitis! Nemo consequatur illum dolore fugit consequuntur qui repellendus possimus aliquam commodi quam totam id pariatur atque perferendis nobis, impedit exercitationem recusandae? Cum, impedit?</p>
                              <button type="button" class="btn btn-outline-dark">Javascript</button>
                        </div>

                                  <!-- js cards -->
                        <div class="carousel-cards">
                          <div id="featured-cources-javascript" class="featured-cources-javascript carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
    
                              <div class="carousel-item active">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/js.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>paython for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                               
                               
                              </div>
    
                              <div class="carousel-item ">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/js.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>css for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div class="carousel-item ">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/js.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>html for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div class="carousel-item ">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/js.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>js for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                            
    
                            </div>
    
                            <button class="carousel-control-prev" type="button" data-bs-target="#featured-cources-javascript" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
    
                            <button class="carousel-control-next" type="button" data-bs-target="#featured-cources-javascript" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                     </div>
                    </div>



                     <!-- fourth tab sass -->
                <div class="tab-pane fade" id="sass-tab-pane" role="tabpanel" aria-labelledby="sass-tab" tabindex="0">
                        
                  <div class="tab-pan-content">
                            <h2>sass</h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eius hic nulla voluptatem in ea, perferendis aliquam deserunt, veniam id, praesentium dolores delectus quisquam quia corporis debitis! Nemo consequatur illum dolore fugit consequuntur qui repellendus possimus aliquam commodi quam totam id pariatur atque perferendis nobis, impedit exercitationem recusandae? Cum, impedit?</p>
                              <button type="button" class="btn btn-outline-dark">sass</button>
                        </div>

                                  <!-- sass cards -->
                        <div class="carousel-cards">
                          <div id="featured-cources-sass" class="featured-cources-sass carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
    
                              <div class="carousel-item active">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/sass.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>paython for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                               
                               
                              </div>
    
                              <div class="carousel-item ">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/sass.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>css for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div class="carousel-item ">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/sass.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>html for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div class="carousel-item ">
                                <div class="col-md-3">
                                  <div class="cource-card">
                                    <div class="cource-img">
                                      <img src="./assest/images/sass.jpg"  alt="./assest/images/">
                                    </div>
                                    <div class="cource-body">
                                     <span class="cource-title"><h4>js for data science and machine learning</h4></span>
                                     <span class="cource-teacher">mohamed emara</span>
                                     <span class="cource-rating">
                                      <span class="cource-rating-number">3.8</span>
                                      <span class="cource-rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                      </span>
                                      <span class="cource-rating-total">(14,111)</span>
                                     </span>
                                     <span class="cource-price">12$
                                      <span class="cource-price-discount">120$</span>
                                     </span>
                                     <span class="cource-bestsellar">Bestsellar</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                            
    
                            </div>
    
                            <button class="carousel-control-prev" type="button" data-bs-target="#featured-cources-sass" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
    
                            <button class="carousel-control-next" type="button" data-bs-target="#featured-cources-sass" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                     </div>
                    </div>






                  </div>

            </div>
        </div>
    </section>
                               <!-- SKILLS -->
   <section>
    <div class="container bg-light">
         <div class="container py-4">
          <div class="row">
            <div class="col-sm-4">
              <div class="skills">
                <div class="skills-icon"><i class="bi bi-caret-right-fill"></i></div>
                <div class="skills-desc">
                  w an AWS Certified Cloud Practitioner! This content was exactly what the CCP exam covered.</div>
              </div>
              </div>
              
            <div class="col-sm-4">
              <div class="skills">
                <div class="skills-icon"><i class="bi bi-star-fill"></i></div>
                
                <div class="skills-desc">
                  am proud to say that after aitioner! This content was exactly what the CCP exam covered.</div>
              </div>
              </div>
             
            <div class="col-sm-4">
              <div class="skills">
                <div class="skills-icon"><i class="bi bi-infinity"></i></div>
                <div class="skills-desc">I am pro Certified Cloud Practitioner! This content was exactly what the CCP exam covered.</div>
              </div>
              </div>
             
          </div>
         </div>
    </div>
   </section>

           <!-- TOP CATEGORIES -->
           <section>
            <div class="container">
             
                <h3>Top Category</h3>
                   <div class="categories">
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/design.jpg" alt=""></div>
                      <div class="category-text">Design</div>
                    </a>
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/devlopment.jpg" alt=""></div>
                      <div class="category-text">Development</div>
                    </a>
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/bussness.jpg" alt=""></div>
                      <div class="category-text">Busniss</div>
                    </a>
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/it.jpg" alt=""></div>
                      <div class="category-text">It & Software</div>
                    </a>
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/markting.jpg" alt=""></div>
                      <div class="category-text">Markting</div>
                    </a>
                    <a  href="#"class="category">
                      <div class="category-img"><img src="./assest/images/category/personal dev.jpg" alt=""></div>
                      <div class="category-text">Personal</div>
                    </a>
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/photography.jpg" alt=""></div>
                      <div class="category-text">photography</div>
                    </a>
                    <a href="#" class="category">
                      <div class="category-img"><img src="./assest/images/category/music.jpg" alt=""></div>
                      <div class="category-text">Music</div>
                    </div>
                   </a >
            </div>
           </section>

           <!-- FOOTER -->


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