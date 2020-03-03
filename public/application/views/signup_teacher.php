<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='Login'>
	<div class="container-fluid">
		<div class="loginContainer">
			<div class='Logo'>
				<img class='logo' src="<?= base_url() ?>static/img/CSLOGO3.png" draggable=false />
			</div>
			<form name="my-form" onsubmit="return validform()" action="createaccount" method="POST">

				<div class="form-group row">
					<label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
					<div class="col-md-6">
						<input type="text" id="username" class="form-control" name="username" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="permanent_address" class="col-md-4 col-form-label text-md-right">Password</label>
					<div class="col-md-6">
						<input type="text" id="password" class="form-control" name="password" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="present_address" class="col-md-4 col-form-label text-md-right">Prefix</label>
					<div class="col-md-6">
						<label for="prefix">Choose a prefix:</label>
						<select id="prefix" name="prefix">
							<option value="นาย">นาย</option>
							<option value="นาง">นาง</option>
							<option value="นางสาว">นางสาว</option>
							<option value="ดร.">ดร.</option>
							<option value="ผศ.">ผศ.</option>
							<option value="ผศ.ดร.">ผศ.ดร.</option>
							<option value="รศ.">รศ.</option>
							<option value="รศ.ดร.">รศ.ดร.</option>
							<option value="ศ.ดร.">ศ.ดร.</option>
						</select>
						<!--<input type="text" id="prefix" name="prefix" class="form-control">-->
					</div>
				</div>


				<div class="form-group row">
					<label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
					<div class="col-md-6">
						<input type="text" id="full_name" class="form-control" name="full-name" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="present_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
					<div class="col-md-6">
						<input type="text" id="lastname" name="lastname" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="present_address" class="col-md-4 col-form-label text-md-right">Position</label>
					<div class="col-md-6">
						<input type="text" id="position" name="position" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
					<div class="col-md-6">
						<input type="text" id="email" class="form-control" name="email" required>
					</div>
				</div>



				<div class="form-group row">
					<label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
					<div class="col-md-6">
						<input type="text" id="phone_number" class="form-control" required>
					</div>
				</div>


				<div class="col-md-6 offset-md-4">
					<input type="submit" class="btn btn-primary" name="btn_submit" id="btn_submit" class="btn btn-success" value="Register">
				</div>
				<br>
				<div class="col-md-6 offset-md-4">
					<a class="btn btn-primary mb1 bg-orange" href='<?php echo base_url(); ?>login'>Go To Login</a> </span>
				</div>
			</form>
		</div>
	</div>

	<div class='area'>
		<ul class='circles'>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>