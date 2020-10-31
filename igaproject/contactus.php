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
<div class="container my-5 py-5 z-depth-1">
<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
  <h3 class="font-weight-bold">Contact Us</h3>
  <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
    molestiae <br>
    numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
  <hr class="my-5">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

      <h4 class="font-weight-bold">Call or email</h4>

      <p class="text-muted mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
        molestiae.</p>

      <p class="font-weight-bold">Support:</p>

      <p class="mb-2">+ 800 123 456</p>

      <p class="mb-2"><a href="#">Contact support</a></p>

      <p class="mb-4">Our technical support is available by phone or email from 11am to 11pm.</p>

      <p class="font-weight-bold">Sales:</p>

      <p class="mb-2">+ 900 123 456</p>

      <p class="mb-2"><a href="#">Contact sales</a></p>

      <p class="mb-4">Our sales team is available by phone or email from 11am to 11pm.</p>

      <p class="font-weight-bold">General inquiries:</p>

      <p class="mb-2"><a href="#">info@mycompany.com</a></p>


    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-md-12 mb-4 mb-md-0">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Material outline input -->
          <div class="md-form md-outline mb-0">
            <input type="text" id="form-first-name" class="form-control">
            <label for="form-first-name">First name</label>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Material outline input -->
          <div class="md-form md-outline mb-0">
            <input type="text" id="form-last-name" class="form-control">
            <label for="form-last-name">Last name</label>
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!-- Material outline input -->
      <div class="md-form md-outline mt-3">
        <input type="text" id="form-company" class="form-control">
        <label for="form-company">Company name</label>
      </div>

      <!-- Material outline input -->
      <div class="md-form md-outline mt-3">
        <input type="email" id="form-email" class="form-control">
        <label for="form-email">E-mail</label>
      </div>

      <!-- Material outline input -->
      <div class="md-form md-outline mt-3">
        <input type="number" id="form-number" class="form-control">
        <label for="form-number">Phone</label>
      </div>

      <select class="browser-default custom-select" style="color: #757575bd">
          <option selected>Select department</option>
          <option value="1">Support</option>
          <option value="2">Sales</option>
          <option value="3">General</option>
        </select>

      <!-- Material outline input -->
      <div class="md-form md-outline">
        <input type="text" id="form-subject" class="form-control">
        <label for="form-subject">Subject</label>
      </div>

      <!--Material textarea-->
      <div class="md-form md-outline mb-3">
        <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
        <label for="form-message">How we can help?</label>
      </div>

      <button type="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>
    </div>
    <!--Grid column-->
  </div>
  <!--Grid row-->
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