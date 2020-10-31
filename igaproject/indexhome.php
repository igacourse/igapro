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



























<!-- Jumbotron -->
<div class="card card-image"  style="background-image: url(assets/img/mini.jpg);">
  <div class="text-white text-left rgba-stylish-strong py-5 px-5">
    <div class="py-2 ">
      <!-- Content -->
      <h5 class="h orange-text"><small class=""><i class="fas fa-blog mr-2"></i>Free Online Courses</small></h5>
      <h2 class="card-title h2 my-4 py-2">PARTNERSHIP IN DISCOVERY</h2>
      <p class="mb-4 pb-2">Best & Free Online Teaching and learning Platform. <br> Free Online Courses Trom Top Universities, Institution and Tutors!</p>
      <a class="btn bg-info peach-gradient"><i class="fas fa-clone left"></i>Join Us Now</a>
    </div>
  </div>
</div>
<!-- Jumbotron -->
</header>
 <!--header end-->
  <!-- Section -->
<div class="container z-depth-1 my-0 p-2">
  <section>
    <hr class="b-header my-2">
    <p class="lead text-center text-muted pt-2 pb-3 mb-5">We are so proud of providing  online learning Platform. Explore Igacourses resources to find your perfect program.</p>
    <div class="row dark-grey-text">
      <div class="col-md-6 col-xl-4 mb-4">
        <div class="media">
          <div class="mr-4">
            <span class="text-primary"><i class="icon-fa fas fa-chalkboard-teacher fa-2x"></i></span>
          </div>
          <div class="media-body">
            <h6 class="font-weight-bold">Online Courses</h6>
            <p class="text-muted">Well planned courses and structured platform to enhance your skills.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 mb-4">
        <div class="media">
          <div class="mr-4">
            <span class="text-danger"><i class="icon-fa fas fa-bullhorn fa-2x"></i></span>
          </div>
          <div class="media-body">
            <h6 class="font-weight-bold">Discussion Forum</h6>
            <p class="text-muted">Share your skills and use discussion forum with different teacher and learner.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 mb-4">
        <div class="media">
          <div class="mr-4">
            <span class="text-info"><i class="icon-fa fas fa-code fa-2x"></i></span>
          </div>
          <div class="media-body">
            <h6 class="font-weight-bold">Tutorial</h6>
            <p class="text-muted">More interactive and specific than a book or a lecture.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 mb-4">
        <div class="media">
          <div class="mr-4">
            <span class="text-dark"><i class="icon-fa fas fa-user-tie fa-2x"></i></span>
          </div>
          <div class="media-body">
            <h6 class="font-weight-bold">Teacher Support</h6>
            <p class="text-muted">With on-demand trainers and tutors and Teaching development programs.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 mb-4">
        <div class="media">
          <div class="mr-4">
            <span class="text-muted"><i class="icon-fa fas fa-award fa-2x"></i></span>
          </div>
          <div class="media-body">
            <h6 class="font-weight-bold">Certificate</h6>
            <p class="text-muted">Access free online course and get degree or certificate for career development.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 mb-4">
        <div class="media">
          <div class="mr-4">
            <span class="text-success"><i class="icon-fa far fa-handshake fa-2x"></i></span>
          </div>
          <div class="media-body">
            <h6 class="font-weight-bold">Scholarship Program</h6>
            <p class="text-muted">From large institution in business, computer science, and more.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
 <!-- Section -->
 <div class="container my-5">
  <!-- Section: Block Content -->
  <section class="dark-grey-text">
    <h3 class="text-center font-weight-bold mb-4 pb-2 text-muted"><div class=" text-center logo_text pb-0 mb-0 text-muted">INSTRUCTION<span> TECHNOLOGY</span></div></h3>
    <p class="text-center text-muted w-responsive mx-auto mb-5">The main purpose is to create learners engagment and effective learning experiences.</p>
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-5">
        <img src="assets/img/mini.jpg" class="img-fluid rounded z-depth-1" alt="Sample project image">
      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-lg-7">
        <ul class="list-unstyled fa-ul mb-0">
          <li class="d-flex justify-content-center pl-4">
            <span class="fa-li"><i class="text-warning fas fa-cogs fa-2x cyan-text"></i></span>
            <div>
              <h5 class="font-weight-bold mb-3">Application</h5>
              <p class="text-muted">The emphasis is on the application of techniques and knowledge with a view to mobilizing and optimizing the available resources.</p>
            </div>
          </li>
          <li class="d-flex justify-content-center pl-4">
            <span class="fa-li"><i class=" text-dark fas fa-laptop fa-2x red-text"></i></span>
            <div>
              <h5 class="font-weight-bold mb-3">Technology</h5>
              <p class="text-muted">The sum of techniques, skills, methods, material and processes used in gaining new skills and Knowledge.</p>
            </div>
          </li>
          <li class="d-flex justify-content-center pl-4">
            <span class="fa-li"><i class="text-info fas fa-users fa-2x deep-purple-text"></i></span>
            <div>
              <h5 class="font-weight-bold mb-3">Engagment</h5>
              <p class="text-muted mb-0">The degree of attention, curiosity, interest, optimism, and passion that learners show when they are learning or gaining skills.</p>
            </div> 
          </li>
        </ul>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
    <hr class="my-5">
  </section>
  <!-- Section: Block Content -->
</div>
<!-- end of Instruction Technology -->



























<!--Section: Content-->
<section class=" text-center bg-info">
  <!--Grid row-->
  <div class="row d-flex justify-content-center">
    <!--Grid column-->
    <div class="col-xl-6 col-md-8">
      <h3 class="font-weight-bold pt-4">PARTNERSHIP</h3>
      <p class="text-muted">IgaCourses is best's African online platform which offers online courses, teaching assistances and other education affairs Make the most of your online learning experience.</p>

      <a class="btn btn-outline-dark shadow-none ml-0 mb-5" href="#" role="button">Join us today<i class="fas fa-file-signature ml-2"></i></a>

      <p class="mb-4 font-weight-bold">Trusted by 1 000 + Tutors, Teacher &amp; Instutition</p>
      <!--Grid row-->
      <div class="row mb-4">


    <!--First column-->
    <div class="col-lg-2 col-md-6 d-flex align-items-center justify-content-center">
          <img src="https://mdbootstrap.com/img/logo/brands/airbus.png" class="img-fluid" alt="Nike - logo"
            style="max-height: 40px">
        </div>
        <!--/First column-->


        <!--First column-->
        <div class="col-lg-2 col-md-6 d-flex align-items-center justify-content-center">
          <img src="https://mdbootstrap.com/img/logo/brands/nike.png" class="img-fluid" alt="Nike - logo"
            style="max-height: 40px">
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-2 col-md-6 d-flex align-items-center justify-content-center">
          <img src="https://mdbootstrap.com/img/logo/brands/amazon.png" class="img-fluid" alt="Amazon - logo"
            style="max-height: 40px">
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-lg-2 col-md-6 d-flex align-items-center justify-content-center">
          <img src="https://mdbootstrap.com/img/logo/brands/sony.png" class="img-fluid" alt="Sony - logo"
            style="max-height: 40px">
        </div>
        <!--/Third column-->

        <!--Fourth column-->
        <div class="col-lg-2 col-md-6 d-flex align-items-center justify-content-center">
          <img src="https://mdbootstrap.com/img/logo/brands/samsung.png" class="img-fluid" alt="Samsung - logo"
            style="max-height: 40px">
        </div>
        <!--/Fourth column-->

         <!--Fourth column-->
         <div class="col-lg-2 col-md-6 d-flex align-items-center justify-content-center">
          <img src="https://mdbootstrap.com/img/logo/brands/unity.png" class="img-fluid" alt="Samsung - logo"
            style="max-height: 40px">
        </div>
        <!--/Fourth column-->

      </div>
      <!--/Grid row-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->




















<div class=" pt-4 z-depth-1   shadow-lg p-3 mb-4 bg-white rounded">
  <!--Section: Content-->
  <hr>
  <section class="text-center white-text d-md-flex justify-content-between p-5">
    <h3 class="font-weight-bold mb-md-0 mb-4 mt-2 pt-1">Transform your life through Igacourse platform</h3>
    <button type="button" class="btn btn-dark shadow-none rounded-pill">Take a test drive</button>
  </section>
  <!--Section: Content-->
</div>












<!-- Courses -->
 <div class="card border-0 pt-1">
  <div class="card-body border-0 pt-5">
  <ul class="nav nav-tabs md-tabs  ml-5  h5" id="myTabMD" role="tablist">
  <li class="nav-item ml-5">
    <a class="nav-link active border-0" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md"
      aria-selected="true">Popular Courses</a>
  </li>
  <li class="nav-item  ml-5 ">
    <a class="nav-link  border-0 " id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md"
      aria-selected="false">Trending Courses</a>
  </li>
  <li class="nav-item ml-5 ">
    <a class="nav-link   border-0" id="contact-tab-md" data-toggle="tab" href="#contact-md" role="tab" aria-controls="contact-md"
      aria-selected="false">Recent Courses</a>
  </li>
</ul>
<div class="tab-content card pt-5 border-0" id="myTabContentMD">
  <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
 


  <!-- Page Content -->
<div class="container border-0">
<div class="row ">
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4 border-0">


    <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body border-0">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">Computer Sciences </span> <br> 
           <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
           <!-- Button -->
            <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>



  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">



  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
              <!-- Button -->
              <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">


  

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
              <!-- Button -->
              <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
       <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
 

  

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
              <!-- Button -->
              <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
              <!-- Button -->
              <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
            <!-- Button -->
            <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
</div>
<!-- /.row -->

<!-- Pagination -->
<ul class="pagination justify-content-center">
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">1</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">2</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">3</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
  </li>
</ul>

</div>
<!-- /.container -->








  </div>
  <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">







 


  <!-- Page Content -->
  <div class="container">
<div class="row ">
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4 border-0">


  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body border-0">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Kinyarwanda I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">Languages </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
              <!-- Button -->
              <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>



  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">



  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Enterpreneurship I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">Business Studies </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Mbabazi Emanuel, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">


  

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
       <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
 

  

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
            <!-- Button -->
            <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
</div>
<!-- /.row -->

<!-- Pagination -->
<ul class="pagination justify-content-center">
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">1</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">2</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">3</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
  </li>
</ul>

</div>
<!-- /.container -->










  </div>
  <div class="tab-pane fade" id="contact-md" role="tabpanel" aria-labelledby="contact-tab-md">
   







 


  <!-- Page Content -->
  <div class="container">
<div class="row ">
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4 border-0">


  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body border-0">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>



  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">



  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">


  

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
       <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
 

  

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    


  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">




  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

  <div class="card border border-light  shadow bg-white rounded">
      <a href="#"><img class="card-img-top" src="assets/img/online.jpg" alt=""></a>
      <div class="card-body">
         <!-- Label -->
          <h7 class="card-title text-dark "><a href="#" class="text-decoration-none">Introduction To Database I</a></h7>
          <!-- Title -->
          <h6 class="font-weight-lighter text-truncate card-title"> <span  class="badge badge-warning mb-2">IT Department </span> <br> 
          <p class="card-title"><i class="fas fa-chalkboard-teacher pr-1"></i>Ukizuru Mustapha, Kevin, Ricture</p>
             <!-- Button -->
             <button type="button" class="btn btn-outline-primary shadow-none btn-sm btn-block">Enroll Now</button><br>
            </h6>
            <div class="p-n1">
            <a href=""><i class="fas fa-share-alt float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this course"></i></a>
           <a href=""><i class=" animated bounce far fa-heart  float-right p-1 my-1 mr-1 view overlay" data-toggle="tooltip" data-placement="top" title="I like it"><span class="badge badge-pill badge-primary ml-1">342</span></i></a>
          <a href=""><i class=" fas fa-cart-plus  float-left  p-1 my-1 " data-toggle="tooltip" data-placement="top" title="Cart this course"></i></a>
        <a href="">  <i class=" fas fa-eye float-left pl-3 p-1 my-1 mr-1" data-toggle="tooltip" data-placement="top" title="See this course"></i></a>
       </div>
      </div>
    </div>


    

  </div>
</div>
<!-- /.row -->

<!-- Pagination -->
<ul class="pagination justify-content-center">
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">1</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">2</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">3</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
  </li>
</ul>
</div>
<!-- /.container -->










    </div>
   </div>
  </div>
 </div>

























<!--Section: Content <div class="container my-5 py-5"> -->
<section class=" text-center p-5 z-depth-1" style="background-image: url(assets/img/mini.jpg);">
  <!--Grid row-->
  <div class="d-flex justify-content-center">
    <!--Grid column-->
    <div class="col-xl-6 col-md-10">
     <h3 class="font-weight-bold"><a href="#"> <div class="logo_text pb-2 mb-4">BECAME <span>A  TEACHER</span></div> </a></h3>
    <p>Top instructors from around the world teach millions of students on Udemy.  We provide the tools and skills to teach what you love.Empower your remote workforce to learn what they need,  when they need it.</p>
       <a href="#" class="btn btn-outline-white btn-md waves-effect" role="button"><i class="fas fa-clone left"></i> View project</a>
    </div>
    <!--Grid column-->
  </div>
  <!--Grid row-->
</section>
<!--Section: Content--</div>>






















































































  <!--Section: Content-->
<div class="container my-5">
  <!--Section: Content-->
  <section class="team-section text-center dark-grey-text">
    <!-- Section heading -->
    <a href="#"> <div class="logo_text pb-2 mb-4">OUR<span> TEAM</span></div> </a>
    <!-- Section description -->
    <p class="text-muted w-responsive mx-auto mb-5">The difference between success and failure is a great team.</p>
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-1">Ukizuru Mustapha</h5>
        <p class="text-uppercase blue-text"><strong>IT</strong></p>
        <p class="grey-text">With Igacourses I was able to start learning online and eventually build up knowledge and skills to transition into a well-paying career.</p>
        <ul class="list-unstyled mb-0">
          <!-- Facebook -->
          <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f blue-text"> </i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
            <i class="fab fa-twitter blue-text"> </i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
            <i class="fab fa-linkedin-in blue-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-1">Regis Mutangana</h5>
        <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
        <p class="grey-text">With Igacourses I was able to start learning online and eventually build up knowledge and skills to transition into a well-paying career.</p>
        <ul class="list-unstyled mb-0">
          <!-- Facebook -->
          <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f blue-text"> </i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
            <i class="fab fa-twitter blue-text"> </i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
            <i class="fab fa-linkedin-in blue-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-1">Maria Smith</h5>
        <p class="text-uppercase blue-text"><strong>Graphic Designer</strong></p>
        <p class="grey-text">With Igacourses I was able to start learning online and eventually build up knowledge and skills to transition into a well-paying career.</p>
        <ul class="list-unstyled mb-0">
           <!-- Facebook -->
           <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f blue-text"> </i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
            <i class="fab fa-twitter blue-text"> </i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
            <i class="fab fa-linkedin-in blue-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-1">Tom Adams</h5>
        <p class="text-uppercase blue-text"><strong>Business Studies</strong></p>
        <p class="grey-text">With Igacourses I was able to start learning online and eventually build up knowledge and skills to transition into a well-paying career.</p>
        <ul class="list-unstyled mb-0">
         <!-- Facebook -->
         <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f blue-text"> </i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
            <i class="fab fa-twitter blue-text"> </i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
            <i class="fab fa-linkedin-in blue-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </section>
  <!--Section: Content-->
</div>









  <!--Section: Counter-->
  <section class="p-2 z-depth-1 colorjumb ">
    <div class="row d-flex justify-content-center pt-4">
      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h3 font-weight-normal mb-1">
          <i class="fas fa-users text-light"></i>
          <span class="d-inline-block count-up " data-from="0" data-to="10" data-time="2000">10</span>
        </h4>
        <p class="font-weight-normal text-light">Students</p>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h3 font-weight-normal mb-1">
          <i class="fas fa-user-tie text-light"></i>
          <span class="d-inline-block count1" data-from="0" data-to="25" data-time="2000">25</span>
        </h4>
        <p class="font-weight-normal text-light">Tutors and Teachers</p>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h3 font-weight-normal mb-1">
          <i class="far fa-handshake text-light"></i>
          <span class="d-inline-block count2" data-from="0" data-to="33" data-time="2000">33</span>
        </h4>
        <p class="font-weight-normal text-light">Partners</p>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h3 font-weight-normal mb-1">
          <i class="fas fa-graduation-cap text-light"></i> 
          <span class="d-inline-block count3" data-from="0" data-to="43" data-time="2000">43</span>
        </h4>
        <p class="font-weight-normal text-light">Student Enrolled</p>
      </div>
    </div>
  </section>












  <!--Subscribe -->
<div class="container my-5 z-depth-1">
  <!--Section: Content-->
  <hr class="b-header my-0">
  <section class="dark-grey-text text-center px-md-2 py-4">
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-lg-6 col-md-8 mx-auto">
        <!-- Form -->
        <form class="" action="">
          <!-- Section heading -->
          <h3 class="font-weight-bold mb-4">
          <a href="#">
         <div class="logo_text">STAY<span> UPDATED!</span></div>
        </a>
          </h3>
          <p class="text-muted mb-4 pb-2">Subscribe to our newsletter and receive the latest news.</p>
 
          <div class="input-group mb-4 pb-3">
            <input type="email" class="form-control shadow-none" placeholder="Enter your email address" aria-label="Enter your email address"
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-md btn-info shadow-none rounded-right m-0 px-3 py-1 z-depth-0 waves-effect" type="submit" id="button-addon2">Submit</button>
            </div>
          </div>
          
          <ul class="list-unstyled d-flex justify-content-center mb-0 text-info">
            <li>
              <a class="mx-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="mx-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
            </li>
            <li>
              <a class="mx-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>
            </li>
            <li>
              <a class="mx-3" role="button"><i class="fab fa-lg fa-linkedin-in"></i></a>
            </li>
            <li>
              <a class="mx-3" role="button"><i class="fab fa-lg fa-google-plus"></i></a>
            </li>
          </ul>
          
        </form>
        <!-- Form -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    
  </section>
  <!--Section: Content-->
</div>






















<footer class="page-footer font-small  text-light"  style="background-color:  #004661;">
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
           <a href="allcourses.php" class=" text-white text-decoration-none">Courses</a>
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
   <div class="footer-copyright text-center py-3 font-weight-normal text-muted "  style="background-color: #003D55;"   >© 2020 Copyright:
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