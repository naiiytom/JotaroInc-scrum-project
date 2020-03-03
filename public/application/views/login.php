<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='Login'>
	<div class='container-fluid'>
		<div class='loginContainer'>
			<div class='Logo'>
				<img class='logo' src="<?=base_url()?>static/img/CSLOGO3.png" draggable=false />
			</div>
			<form method="POST" action="<?=base_url()?>auth">
				<div class='form-group'>
					<label for='usernameInput'>Username</label>
					<input type='text' class='form-control' name='username' id='username'
						placeholder='Enter your username here' required />
				</div>
				<div class='form-group'>
					<label for='passwordInput'>Password</label>
					<input type='password' class='form-control' name='password' id='password'
						placeholder='Enter your password here' required />
				</div>
				<div class='form-group form-check'>
					<input type='checkbox' class='form-check-input' name="remembermeCheck" id='remembermeCheck' />
					<label class='form-check-label' for='remembermeCheck'>Remember me forever</label>
				</div>
				<button id="loginButton" type='submit' class='btn btn-primary'>Login</button>
				<a class='btn btn-link' href='/'>Back to Home</a>
				
			</form>
			<span>don't have an account?	<a class="btn btn-link" href='<?php echo base_url(); ?>signup'>Sign Up</a> </span>
				
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
