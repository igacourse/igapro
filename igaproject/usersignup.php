<?php
use iga\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
<!-- bootstrap css -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/fontawesome/css/all.css">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/js/jQuery.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center " >
            <div class="card text-center p-0 ">
                <div class="card-header bg-dark">
                <a href="indexhome.php">
         <div class="logo_text">Iga<span>Courses</span></div>
        </a>
                </div>
            <div class="card-body h-75">
                  <h6 class="card-title">SIGN UP</h6>
<!-- Default form register -->
<form class="text-center border border-light p-2" name="sign-up" action="" method="post"
          onsubmit="return signupValidation()">
          
    <?php
    if (! empty($registrationResponse["status"])) {
      ?>
    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
				<div class="error-msg" id="error-msg"></div>
    <div class="form-row mb-2">
        <div class="col">
            <!-- First name -->
            <input type="text" name="firstname" id="firstname" class="form-control shadow-none" placeholder="First name" required>
        </div>
    <div class="col">
            <!-- Last name -->
            <input type="text" name="secondname" id="secondname" class="form-control shadow-none" placeholder="Last name" required>
        </div>
    </div>
    <!-- E-mail -->
    <div class="input-group mb-2">
        <input type="email"  name="email" id="email" class="form-control shadow-none" placeholder="Email" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
    <!-- Password -->
    <div class="input-group mb-2 ">
        <input type="password" name="signup-password" id="signup-password" class="form-control shadow-none" placeholder="Enter Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
    <!-- Phone number -->
    <div class="input-group mb-2 ">
        <input type="password" class="form-control shadow-none" name="confirm-password" id="confirm-password"  placeholder="Confirm Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
    <!-- Sign up button -->
    <input class="btn btn-info my-2 btn-block shadow-none" type="submit" name="signup-btn" id="signup-btn" value="Sign up">
    <!-- Terms of service -->
    <p>By clicking<em>Sign up</em> you agree to our<a href="terms.php" target="_blank" class="text-decoration-none">Terms & Condition of Service</a></p>
    <p>Already a member? <a href="userlogin.php" class="text-decoration-none">Sign in</a> or Sign in with</p>
      <!-- Social login -->
      <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
      <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
      <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
      <a href="#" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>
</form>
<!-- Default form register -->
<!-- Default form login -->
               
                </div>
              </div>
        </div>
    </div> 
     <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/signup.js"></script>
</body>
</html>