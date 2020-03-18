<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Register as Student</title>

	<script language="javascript">
		//จับ Event key
		function myFunction() {
			let SpacialCharacter = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
			$('input[type=password]').on("keypress", function(event) {
				var keyChar = String.fromCharCode(event.keyCode);
				var output = SpacialCharacter.test(keyChar);
				var text = $(this).val();
				$(this).val(text.replace(SpacialCharacter, ''));
				console.log(event.key);
				return !output;
			});
		}
	</script>

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
							<form class="user" method="POST" action="<?php echo base_url(); ?>index.php/CheckRegister">
								<div class="form-group">
									<input required type="text" class="form-control " name="studentID" id="studentID" placeholder="Student ID: 600000000-1" pattern="([0-9]{9}-[0-9]{1})">
								</div>
								<div class="form-group row">
									<div class="col-sm-3">
										<select class="form-control " name="prefix" id="prefix">
											<option value="นาย">นาย</option>
											<option value="นาง">นาง</option>
											<option value="นางสาว">นางสาว</option>
										</select>
									</div>
									<div class="col-sm-4 mb-3 mb-sm-0">
										<input required type="text" class="form-control " name="firstName" id="firstName" placeholder="First Name">
									</div>
									<div class="col-sm-5">
										<input required type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group">
									<select class="form-control " name="majorAndLevel" id="majorAndLevel" aria-placeholder="Major and Level">

										<option disabled value="หลักสูตรระดับปริญญาตรี"><b>หลักสูตรระดับปริญญาตรี</b> </option>
										<option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
										<option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
										<option value="ภูมิสารสนเทศศาสตร์">ภูมิสารสนเทศศาสตร์</option>
										<option disabled><b>-----------</b> </option>

										<option disabled value="หลักสูตรระดับปริญญาโท"><b>หลักสูตรระดับปริญญาโท</b> </option>
										<option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
										<option value="ภูมิสารสนเทศศาสตร์">ภูมิสารสนเทศศาสตร์</option>
										<option value="การรับรู้ระยะไกลและระบบสารสนเทศภูมิศาสตร์">การรับรู้ระยะไกลและระบบสารสนเทศภูมิศาสตร์</option>
										<option disabled><b>-----------</b> </option>

										<option disabled value="หลักสูตรระดับปริญญาเอก"><b>หลักสูตรระดับปริญญาเอก</b> </option>
										<option value="วิทยาการคอมพิวเตอร์ หลักสูตรนานาชาติ">วิทยาการคอมพิวเตอร์ หลักสูตรนานาชาติ</option>
										<option value="เทคโนโลยีสารสนเทศ หลักสูตรนานาชาติ">เทคโนโลยีสารสนเทศ หลักสูตรนานาชาติ</option>
										<option value="การรับรู้ระยะไกลและระบบสารสนเทศภูมิศาสตร์"> การรับรู้ระยะไกลและระบบสารสนเทศภูมิศาสตร์</option>

									</select>
								</div>
								<div class="form-group">
									<input required type="text" class="form-control " name="phone" id="phone" placeholder="Phone Number" pattern="(^0[0-9]{8,9})">

								</div>
								<div class="form-group">
									<input required type="email" class="form-control " name="inputEmail" id="inputEmail" placeholder="Email Address: example@kkumail.com" patter="([\w\.-]+@kkumail.com)">
								</div>

								<div class="form-group">
									<input required type="text" class="form-control " name="userName" id="userName" placeholder="User Name">
								</div>

								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input required type="password" class="form-control " name="inputPassword" id="inputPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeypress="myFunction()">
									</div>
									<div class="col-sm-6">
										<input required type="password" class="form-control " id="repeatPassword" placeholder="Repeat Password" onkeypress="myFunction()">
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
								<input required type="submit" class="btn btn-primary  btn-block" id="submit" placeholder="Register Account">
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="<?php echo base_url(); ?>index.php/Login">Already have an account? Login!</a>
							</div>
							<div class="text-center">
								<a class="small" href="<?php echo base_url(); ?>index.php/Register">Not a Student!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<script src="../js/password-validation.js"></script>
</body>

</html>