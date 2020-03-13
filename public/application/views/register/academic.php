<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

	<title>Register as Student</title>
	<style>
		#message p {
			padding: 10px 35px;
			font-size: 18px;
		}

		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
			color: green;
		}

		.valid:before {
			position: relative;
			left: -35px;
			content: "✔";
		}

		/* Add a red text color and an "x" when the requirements are wrong */
		.invalid {
			color: red;
		}

		.invalid:before {
			position: relative;
			left: -35px;
			content: "✖";
		}
	</style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
									<div class="col-sm-2">
											<select class="form-control " id="exampleMajorAndLevel" aria-placeholder="Major and Lavel">
													<option value="นาย">นาย</option>
													<option value="นาง">นาง</option>
													<option value="นางสาว">นางสาว</option>
											</select>
									</div>
                  <div class="col-sm-5 mb-3 mb-sm-0">
                    <input type="text" class="form-control " id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control " id="exampleLastName" placeholder="Last Name">
                  </div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6">
                  	<input type="text" class="form-control " id="examplePosition" placeholder="Position">
                	</div>									
									<div class="col-sm-6">
                  	<input type="text" class="form-control " id="examplePhone" placeholder="Phone Number">
                	</div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control " id="exampleInputEmail" placeholder="Email Address">
								</div>
								
								<div class="form-group">
										<input type="text" class="form-control " id="exampleUserName" placeholder="User Name">
									
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control " id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control " id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
								</div>
								<div id="message form-control" style="display: none">
									<h9>Password must contain the following:</h9>
									<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
									<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
									<p id="number" class="invalid">A <b>number</b></p>
									<p id="length" class="invalid">Minimum <b>8 characters</b></p>
									<p id="repeat" class="invalid">Match between <b>Password</b> and <b>Repeat Password</b></p>
								</div>
                <a href="<?php echo base_url(); ?>index.php/Login" class="btn btn-primary  btn-block">
                  Register Account
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url(); ?>index.php/Login">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url(); ?>index.php/Login">Already have an account? Login!</a>
							</div>
							<div class="text-center">
                <a class="small" href="<?php echo base_url(); ?>index.php/Register">Not an Academic Staff!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
	<script>
		var myInput = document.getElementById("exampleInputPassword");
		var myInputRepeat = document.getElementById("exampleRepeatPassword");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");
		var repeat = document.getElementById("repeat");

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message form-control").style.display = "none";
		}
		myInputRepeat.onblur = function() {
			document.getElementById("message form-control").style.display = "none";
		}

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message form-control").style.display = "block";
		}

		myInputRepeat.onfocus = function() {
			document.getElementById("message form-control").style.display = "block";
		}


		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if(myInput.value.match(lowerCaseLetters)) {  
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}
			
			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if(myInput.value.match(upperCaseLetters)) {  
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if(myInput.value.match(numbers)) {  
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}
			
			// Validate length
			if(myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
			
			// Validate repeat
			if(myInputRepeat.value.match(myInput.value)) {
				repeat.classList.replace("invalid","valid");
			} else {
				repeat.classList.replace("valid","invalid");
			}
		}
		myInputRepeat.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if(myInput.value.match(lowerCaseLetters)) {  
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}
			
			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if(myInput.value.match(upperCaseLetters)) {  
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if(myInput.value.match(numbers)) {  
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}
			
			// Validate length
			if(myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}

			// Validate repeat
			if(myInputRepeat.value.match(myInput.value)) {
				repeat.classList.replace("invalid","valid");
			} else {
				repeat.classList.replace("valid","invalid");
			}
		}
	</script>
</body>

</html>
