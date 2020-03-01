<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='Login'>
	<div class='container-fluid'>
		<div class='loginContainer'>
			<div class='Logo'>
				<img class='logo' src="<?=base_url()?>static/img/logo.png" draggable=false />
			</div>
			<form method="POST" action="./auth/login">
				<div class='form-group'>
					<label for='usernameInput'>Username</label>
					<input type='text' class='form-control' name='usernameInput' id='usernameInput'
						placeholder='Enter your cool username' required />
				</div>
				<div class='form-group'>
					<label for='passwordInput'>Password</label>
					<input type='password' class='form-control' name='passwordInput' id='passwordInput'
						placeholder='Your lovely password here' required />
				</div>
				<div class='form-group form-check'>
					<input type='checkbox' class='form-check-input' name="remembermeCheck" id='remembermeCheck' />
					<label class='form-check-label' for='remembermeCheck'>Remember me forever</label>
				</div>
				<button id="loginButton" type='submit' class='btn btn-primary'>Login</button>
				<a class='btn btn-link' href='./'>Back to Home</a>
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
