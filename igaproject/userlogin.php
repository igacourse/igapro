<?php
use iga\Member;
if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- bootstrap css -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/fontawesome/css/all.css">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/js/jQuery.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center P-5" >

            <div class="card text-center p-0">
                <div class="card-header bg-dark">
                    <a href="indexhome.php">
                        <div class="logo_text">Iga<span>Courses</span></div>
                     </a>
                </div>
            <div class="card-body">
                  <h6 class="card-title">LOGIN</h6>
                  <!-- Default form login -->
          <form class="text-center border border-light p-2" name="login" action="" method="post"
          onsubmit="return loginValidation()">
          
          <?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
    <!-- Email -->
    <div class="input-group mb-3">
        <input type="email" class="form-control shadow-none" placeholder="Email"  name="email" id="email" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>

    <!-- Password -->
    <div class="input-group mb-3 ">
        <input type="password" class="form-control shadow-none" name="signup-password" id="signup-password" placeholder="Enter Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label shadow-none" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="passwordreset.php" class="text-decoration-none">Forgot password?</a>
        </div>
    </div>
    <!-- Sign in button -->
        <input class="btn btn-info btn-block my-4 shadow-none" type="submit" name="login-btn" id="login-btn" value="Login">

    <!-- Register -->
    <p> Not yet a member ? <a href="usersignup.php" class="text-decoration-none">Sign up</a> or Sign up with</p>

    <!-- Social login -->
   

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>

</form>
<!-- Default form login -->
               
                </div>
              </div>
        </div>
    </div>
    <script>
function loginValidation() {
	var valid = true;
	$("#email").removeClass("error-field");
  $("#firstname").removeClass("error-field");
  $("#secondname").removeClass("error-field");
	$("#password").removeClass("error-field");

	var Email = $("#email").val();
	var Password = $('#login-password').val();
  var Firstname = $("#firstname").val();
  var Secondname = $("#secondname").val();

	$("#email-info").html("").hide();

	if (Email.trim() == "") {
		$("#email-info").html("required.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
     <script src="assets/bootstrap/js/bootstrap.js"></script>
     
</body>
</html>