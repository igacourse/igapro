<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Pasword</title>
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
                  <form action="admin/adminindex.php" method="post">
                    <div class="input-group mb-3 ">
                      <input type="password" class="form-control shadow-none" placeholder="Password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3 ">
                      <input type="password" class="form-control shadow-none" placeholder="Confirm Password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <button type="submit" class="btn btn-info btn-block shadow-none">Change password</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>
<!-- Default form login -->
               
                </div>
              </div>
        </div>
    </div>

  
 <!-- Footer -->
     <script src="assets/bootstrap/js/bootstrap.js"></script>
     <script src="vendor/jQuery.js"></script> 
</body>
</html>