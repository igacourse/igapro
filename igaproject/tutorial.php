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
 
















 
      <!--Section: Cards-->
      <section class="pt-5">

        <!-- Heading & Description -->
        <div class="wow fadeIn">
          <!--Section heading-->
          <h2 class="h1 text-center mb-5">What is MDB?</h2>
          <!--Section description-->
          <p class="text-center">MDB is world's most popular Material Design framework for building responsive,
            mobile-first websites
            and apps. </p>
          <p class="text-center mb-5 pb-5">Trusted by over
            <strong>400 000</strong> developers and designers. Easy to use & customize. 400+ material UI elements,
            templates
            & tutorials.</p>
        </div>
        <!-- Heading & Description -->

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1-half">
              <div class="view overlay">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text">
              <strong>MDB Quick Start</strong>
            </h3>
            <p class="grey-text">Get started with MDBootstrap, the world's most popular Material Design framework for
              building responsive,
              mobile-first sites.</p>
            <p>
              <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
            </p>
            <a href="https://www.youtube.com/watch?v=cXTThxoywNQ" target="_blank" class="btn btn-primary btn-md">Start
              tutorial
              <i class="fas fa-play ml-2"></i>
            </a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

        <!--Grid row-->
        <div class="row mt-3 wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
              <img src="https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg" class="img-fluid"
                alt="">
              <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text">
              <strong>Bootstrap Automation</strong>
            </h3>
            <p class="grey-text">Learn how to create a smart website which learns your user and reacts properly to his
              behavior.</p>
            <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank"
              class="btn btn-primary btn-md">Start tutorial
              <i class="fas fa-play ml-2"></i>
            </a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
              <img src="https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg" class="img-fluid" alt="">
              <a href="https://mdbootstrap.com/education/tech-marketing/web-push-introduction/" target="_blank">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text">
              <strong>Web Push notifications</strong>
            </h3>
            <p class="grey-text">Push messaging provides a simple and effective way to re-engage with your users and in
              this tutorial
              you'll learn how to add push notifications to your web app</p>
            <a href="https://mdbootstrap.com/education/tech-marketing/web-push-introduction/" target="_blank" class="btn btn-primary btn-md">Start
              tutorial
              <i class="fas fa-play ml-2"></i>
            </a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

        <!--Pagination-->
        <nav class="d-flex justify-content-center wow fadeIn">
          <ul class="pagination pg-blue">

            <!--Arrow left-->
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>

            <li class="page-item active">
              <a class="page-link" href="#">1
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">5</a>
            </li>

            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!--Pagination-->

      </section>
      <!--Section: Cards-->


















 





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