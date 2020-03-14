<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>
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
                <a href="<?php echo base_url(); ?>index.php/student" class="btn btn-primary  btn-block">
                  Register as Student
                </a>
                <a href="<?php echo base_url(); ?>index.php/academic" class="btn btn-primary  btn-block">
                  Register as Academic Staff
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url(); ?>index.php/Login">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url(); ?>index.php/Login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>