<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
<!-- bootstrap css -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/fontawesome/css/all.css">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/js/jQuery.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5" >

            <div class="card text-center p-0">
                <div class="card-header bg-dark">
                    <a href="#">
                        <div class="logo_text">Iga<span>Courses</span></div>
                     </a>
                </div>
            <div class="card-body">
                 
                  <!-- Default form login -->
                  <form action="changepassword.php" method="post">
                    <div class="input-group mb-3">
                      <input type="email" class="form-control shadow-none" placeholder="Email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <button type="submit" class="btn btn-info btn-block shadow-none">Request new password</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>
            
                  <p class="mt-3 mb-1">
                    <a href="userlogin.php" class="text-decoration-none">Login</a>
                  </p>
                  <p class="mb-0">
                    <a href="usersignup.php" class="text-center text-decoration-none">Register for a new membership</a>
                  </p>












<!-- Default form login -->
               
                </div>
              </div>
        </div>
    </div>
 <!-- Footer -->
     <script src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>