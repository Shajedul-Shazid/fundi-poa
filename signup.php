<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="imagesSignup/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorSignup/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontsSignup/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontsSignup/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorSignup/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorSignup/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorSignup/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorSignup/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorSignup/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssSignup/util.css">
    <link rel="stylesheet" type="text/css" href="cssSignup/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('imagesSignup/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="includes/singup.inc.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Signup Form
					</span>
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="uid" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter email">
                    <input class="input100" type="text" name="mail" placeholder="Email addess...">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>



                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pwd" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button name="signup-submit" class="login100-form-btn">
                        singup
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendorSignup/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendorSignup/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendorSignup/bootstrap/js/popper.js"></script>
<script src="vendorSignup/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendorSignup/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendorSignup/daterangepicker/moment.min.js"></script>
<script src="vendorSignup/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendorSignup/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="jsSignup/main.js"></script>

</body>
</html>