<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='Login'>
<div class="container-fluid">
		<div class="loginContainer">
			<div class='Logo'>
				<img class='logo' src="<?=base_url()?>static/img/CSLOGO3.png" draggable=false />
			</div>
			<form name="my-form" onsubmit="return validform()" action="success.php" method="">
				
				<div class="form-group row">
					<label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
						<div class="col-md-6">
							<input type="text" id="user_name" class="form-control" name="username">
						</div>
				</div>
				<div class="form-group row">
					<label for="permanent_address" class="col-md-4 col-form-label text-md-right">Password</label>
						<div class="col-md-6">
							<input type="text" id="permanent_address" class="form-control" name="permanent-address">
						</div>
				</div>

				<div class="form-group row">
					<label for="present_address" class="col-md-4 col-form-label text-md-right">Prefix</label>
						<div class="col-md-6">
							<input type="text" id="present_address" class="form-control">
						</div>
				</div>


				<div class="form-group row">
					<label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
						<div class="col-md-6">
							<input type="text" id="full_name" class="form-control" name="full-name">
						</div>
				</div>
				<div class="form-group row">
					<label for="present_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
						<div class="col-md-6">
							<input type="text" id="present_address" class="form-control">
						</div>
				</div>

				<div class="form-group row">
					<label for="present_address" class="col-md-4 col-form-label text-md-right">Position</label>
						<div class="col-md-6">
							<input type="text" id="present_address" class="form-control">
						</div>
				</div>

				<div class="form-group row">
					<label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
						<div class="col-md-6">
							<input type="text" id="email_address" class="form-control" name="email-address">
						</div>
				</div>

				

				<div class="form-group row">
					<label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
						<div class="col-md-6">
						<input type="text" id="phone_number" class="form-control">
						</div>
				</div>

				
				<div class="col-md-6 offset-md-4">
					<button type="submit" class="btn btn-primary">
						Register
					</button>
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
