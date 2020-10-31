<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Igacourses</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
<!-- bootstrap css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/fontawesome/css/all.css">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/js/jQuery.js"></script>
</head>
 <!--body-->
<body>
 <!--bheader-->
<header>
<nav class="navbar navbar-expand-lg fixed-top bg-light" >
        <a href="indexhome.php">
         <div class="logo_text">Iga<span>Courses</span></div>
        </a>
        <button class=" btn btn-sm  shadow-none navbar-toggler p-0 bg-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class=" pt-2 text-light fas fa-bars"></i></span>
        </button>
        <form class="form-inline my-2 my-lg-0 navbar-form">
           <div class="input-group input-group-search mx-auto">
              <div class="input-group-prepend">
                 <button id="search-btn" class="btn btn-secondary shadow-none btn-sm dropdown-toggle" type="button" value="ALL" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
                 <div id="search-dropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="#">Information Technology</a>
                    <a class="dropdown-item" href="#">Business Studies</a>
                    <a class="dropdown-item" href="#">Humanity</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">All Category</a>
                 </div>
              </div>
              <input type="search" class="form-control shadow-none btn-sm" placeholder="Enter Search Key word..." aria-label="Search" aria-describedby="search-button-addon">
              <div class="input-group-append">
                 <button class=" btn btn-info shadow-none btn-sm" type="submit" id="search-button-addon"><i class="text-light fa fa-search"></i></button>
              </div>
           </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav">
           <li class="nav-item text-nowrap dropdown d-xl-inline-block user-dropdown">
             <a class="nav-link " id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false" href="">
                <i class="text-secondary fas fa-cart-plus mr-3 mt-0"><span class="badge badge-pill badge-danger ml-2">10</span></i></a> 
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger ml-2">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">My Courses<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Account Settings<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
              <li class="nav-item teacher ">
                 <a class="nav-link text-nowrap text-secondary mr-2  text-decoration" href="teacher.php">For Teacher</a>
              </li>
              <li class="nav-item">
               <a class="nav-link text-nowrap text-secondary font-weight-bold" href="usersignup.php"><i class=" text-info fas fa-user-plus mr-1 "></i>Sign up</a>
              </li> 
              <li class="nav-item">
                 <a class="nav-link text-nowrap  text-info font-weight-bold" href="userlogin.php"><i class="text-info  fas fa-sign-in-alt mr-1 "></i>Login</a>
              </li>
              
           </ul>
        </div>
     </nav>
</header>
 <!--header end-->
 






 <div class="container my-5 p-5 z-depth-1">


<!--Section: Content-->
<section class="dark-grey-text">

  <!-- Section heading -->
  <h2 class="text-center font-weight-bold mb-4 pb-2">Why is it so great?</h2>
  <!-- Section description -->
  <p class="text-center lead grey-text mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 text-center text-lg-left">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/screens-section.jpg" alt="Sample image">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Safety</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
            quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Technology</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
            quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!--Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Finance</h5>
          <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima
            veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!--Grid row-->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Content-->


</div>



















<div class="container my-5">


  <!--Section: Content-->
  <section>

    <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4 text-center">FAQ</h6>
    <!-- Section heading -->
    <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Frequently Asked Questions</h3>
    <hr class="w-header">
    <!-- Section description -->
    <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center">Got a question? We've got answers. If you have some other questions, see our support center.</p>

		<div class="row">
      <div class="col-md-12 col-lg-10 mx-auto mb-5">
      
        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card border-top border-bottom-0 border-left border-right border-light">

            <!-- Card header -->
            <div class="card-header border-bottom border-light" role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <h5 class="black-text font-weight-normal mb-0">
                  Is this a secure site for purchases? <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
                Absolutely! We work with top payment companies which guarantees your safety and security. All billing information is stored on our payment processing partner which has the most stringent level of certification available in the payments industry.
              </div>
            </div>

          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card border-bottom-0 border-left border-right border-light">

            <!-- Card header -->
            <div class="card-header border-bottom border-light" role="tab" id="headingTwo2">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                aria-expanded="false" aria-controls="collapseTwo2">
                <h5 class="black-text font-weight-normal mb-0">
                  How long are your contracts? <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
              data-parent="#accordionEx">
              <div class="card-body">
              	Currently, we only offer monthly subscription. You can upgrade or cancel your monthly account at any time with no further obligation.
              </div>
            </div>

          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card border-bottom-0 border-left border-right border-light">

            <!-- Card header -->
            <div class="card-header border-bottom border-light" role="tab" id="headingThree3">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                aria-expanded="false" aria-controls="collapseThree3">
                <h5 class="black-text font-weight-normal mb-0">
                  Can I cancel my subscription? <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
              data-parent="#accordionEx">
              <div class="card-body">
								You can cancel your subscription anytime in your account. Once the subscription is cancelled, you will not be charged next month. You will continue to have access to your account until your current subscription expires.
              </div>
            </div>

          </div>
          <!-- Accordion card -->
          
          <!-- Accordion card -->
          <div class="card border-left border-right border-light">

            <!-- Card header -->
            <div class="card-header border-bottom border-light" role="tab" id="headingThree4">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                aria-expanded="false" aria-controls="collapseThree4">
                <h5 class="black-text font-weight-normal mb-0">
                  Can I request refund? <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
              data-parent="#accordionEx">
              <div class="card-body">
								Unfortunately, not. We do not issue full or partial refunds for any reason.    
              </div>
            </div>

          </div>
          <!-- Accordion card -->

        </div>
        <!-- Accordion wrapper -->
        
      </div>
    </div>

	</section>
  
  
</div>

















<div class="container my-5">


  <!--Section: Content-->
  <section class="magazine-section dark-grey-text">

    <!-- Section heading -->
    <h3 class="text-center font-weight-bold mb-4 pb-2">Magazine newsfeed</h3>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla sint occaecat cupidatat non proident, sunt culpa
    qui officia deserunt est laborum.</p>

  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">

        <!-- Featured news -->
        <div class="single-news mb-3">

          <!-- Image -->
          <div class="view overlay rounded z-depth-2 mb-4">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Grid row -->
          <div class="row mb-3">

            <!-- Grid column -->
            <div class="col-12">

              <!-- Badge -->
              <a href="#!"><span class="badge pink"><i class="fas fa-camera pr-2" aria-hidden="true"></i>Adventure</span></a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a class="font-weight-bold">This is title of the news</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Featured news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>24 Food Swaps That Slash Calories.</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>How to Make a Beet Cocktail?</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>8 Sneaky Reasons You're Always Hungry.</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0">
              <a>5 Pressure Cooker Recipes You Need to Try.</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!-- Featured news -->
        <div class="single-news mb-3">

          <!-- Image -->
          <div class="view overlay rounded z-depth-2 mb-4">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Grid row -->
          <div class="row mb-3">

            <!-- Grid column -->
            <div class="col-12">

              <!-- Badge -->
              <a href="#!"><span class="badge deep-orange"><i class="fas fa-plane pr-2" aria-hidden="true"></i>Travel</span></a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a class="font-weight-bold">This is title of the news</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Featured news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>Trends in the blogosphere for 2018.</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>Where can you eat the best lunch in Warsaw?</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>What camera is worth taking for holidays?</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0">
              <a>Why should you visit Lisbon?</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!-- Featured news -->
        <div class="single-news mb-3">

          <!-- Image -->
          <div class="view overlay rounded z-depth-2 mb-4">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Grid row -->
          <div class="row mb-3">

            <!-- Grid column -->
            <div class="col-12">

              <!-- Badge -->
              <a href="#!"><span class="badge success-color"><i class="fas fa-leaf pr-2" aria-hidden="true"></i>Nature</span></a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a class="font-weight-bold">This is title of the news</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Featured news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>How to recognize the footsteps of wild animals?</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>National Parks in Poland.</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news mb-3">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0 mb-3">
              <a>Traveling without littering the planet.</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

        <!-- Small news -->
        <div class="single-news">

          <!-- Title -->
          <div class="d-flex justify-content-between">
            <div class="col-11 text-truncate pl-0">
              <a>How to protect rainforests?</a>
            </div>
            <a><i class="fas fa-angle-double-right"></i></a>
          </div>

        </div>
        <!-- Small news -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>
























 



<footer class="page-footer font-small  text-light"  style="background-color: #0083B0;">
   <!-- Footer Links -->
   <div class="container text-center text-md-left mt-5">
     <!-- Grid row -->
     <div class="row mt-3 p-5">
 
       <!-- Grid column -->
       <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4  text-light">
 
         <!-- Content -->
         <h6 class="font-weight-bold">
         <a href="indexhome.php" class="font-weight-bold text-decoration-none"><div class="text-dark font-weight-bold">IGA<span class="text-white">COURSES</span></div></a>
         </h6>
         <hr class="font-weight-bold mb-4 mt-0 d-inline-block mx-auto bg-dark" style="width: 90px;">
         <p class=" text-justify">IgaCourses offers access to the africa’s big online courses platform, with  collaboration of top institution, schools and private tutors to offer online courses .</p>
 
       </div>
       <!-- Grid column -->
 
       <!-- Grid column -->
       <div class=" text-light col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">RESOURCES</h6>
         <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p><a href="template.php" class=" text-light text-decoration-none">Free Templates</a></p>
         <p>
           <a href="ttutors.php" class=" text-light text-decoration-none">Become a Teacher</a>
         </p>
         <p>
           <a href="guidences.php" class=" text-light text-decoration-none">Career Guidences</a>
         </p>
         <p>
           <a href="ppolicy.php" class=" text-light text-decoration-none">Privacy Policy</a>
         </p>
         <p>
           <a href="terms.php" class=" d-inline text-light text-decoration-none">Terms</a>
         </p>
         <p>
           <a href="certificate.php" class=" text-light text-decoration-none">Certificates</a>
         </p>
         <p>
           <a href="tutorial.php" class=" text-light text-decoration-none">Tutorial</a>
         </p>
         <p>
           <a href="sitemap.php" class=" text-light text-decoration-none">Sitemap</a>
         </p>
         <p>
           <a href="help.php" class=" text-light text-decoration-none">Help</a>
         </p>
       </div>
       <!-- Grid column -->
 
       <!-- Grid column -->
       <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
 
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">Useful links</h6>
         <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <a href="indexhome.php" class=" text-light text-decoration-none">Home</a>
         </p>
         <p>
         <p>
           <a href="community.php" class=" text-light text-decoration-none">Community</a>
         </p>
           <a href="pricingplan.php" class=" text-light text-decoration-none">Pricing Plans</a>
         </p>
       
         <p>
           <a href="scholarship.php" class=" text-light text-decoration-none">Scholarship</a>
         </p>
         <p>
           <a href="ttutors.php" class=" text-light text-decoration-none ">Tutors and Teacher</a>
         </p>
         <p>
           <a href="aboutus.php" class=" text-light text-decoration-none">About us</a>
         </p>
         <p>
           <a href="blog.php" class=" text-light text-decoration-none">Blog</a>
         </p>
         <p>
           <a href="contactus.php" class=" text-light text-decoration-none">Contact us</a>
         </p>
         <p>
           <a href="allcourses.php" class=" text-light text-decoration-none">Courses</a>
         </p>
       </div>
       <!-- Grid column -->
       <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">
         <!-- Links -->
         <h6 class="text-uppercase font-weight-bold">Contact</h6>
         <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <i class="fas fa-home mr-3"></i> Kigali Rwanda, KG849</p>
         <p>
           <i class="fas fa-envelope mr-3"></i> info@igacourserw.com</p>
         <p>
           <i class="fas fa-phone mr-3"></i> + 250 788 408 139</p>
         <p>
           <i class="fas fa-print mr-3"></i> + 250 785 105 139</p>
 
       </div>
       <!-- Grid column -->
 
     </div>
     <!-- Grid row -->
 
   </div>
   <!-- Footer Links -->
 
   <!-- Copyright -->
   <div class="footer-copyright text-center py-3 font-weight-bold text-dark "  style="background-color: #026788;"   >© 2020 Copyright:
     <a class="text-light text-decoration-none" href="indexhome.php"> igacourse.rw</a> All Right Reserved
   </div>
   <!-- Copyright -->
 </footer>
 <!-- Footer -->
</body>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="vendor/js/main.js"></script>
<script src="vendor/js/counter.js"></script>
</html>