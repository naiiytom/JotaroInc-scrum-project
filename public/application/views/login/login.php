<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page</title>

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

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>

                    <?php if ($permission == '0') { ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong> รอการตรวจสอบจากเจ้าหน้าที่ ไม่เกิน 1 วันทำการ หากเกินกำหนดให้ติดต่อ Admin โดยตรง.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php } elseif ($permission == '10') { ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong> Username หรือ Password ไม่ถูกต้อง หรือ คุณยังไม่สมัครเป็นสมาชิก.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php } ?>

                  </div>
                  <form class="user" method="POST" action="<?php echo base_url() ?>index.php/CheckLogin">
                    <div class="form-group">
                      <input required type="text" class="form-control form-control-user" name="inputUsername" id="inputUsername" placeholder="Username" title="Enter your username.">
                    </div>
                    <div class="form-group">
                      <input required type="password" class="form-control form-control-user" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="inputPassword" id="inputPassword" placeholder="Password" title="Enter your password" onkeypress="myFunction()">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button id="loginButton" type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>index.php/Register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>