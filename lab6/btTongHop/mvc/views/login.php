<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo BASE; ?>">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="public/login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="public/login/images/img-01.png" alt="IMG">
				</div>

				<form action="Login/login" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Thành viên đăng nhập
					</span>
					<?php
					if (isset($data["result"])) {
						if ($data["result"] == true) {

						} else {

							echo "<div class= 'alert-danger' style='text-align: center; margin-bottom: 10px; font-size: 0.9rem;height: 30px;'>
                                                • Tên đăng nhập hoặc mật khẩu không đúng.
                                                </div>";
						}
					}
					?>
					<div class="wrap-input100 validate-input" data-validate="Email hợp lệ: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mật khẩu bắt buộc">
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input style="cursor: pointer;" type="submit" name="submit" class="login100-form-btn" value="Đăng nhập">
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!-- vendor/jquery/jquery-3.2.1.min.js -->
	<!--===============================================================================================-->
	<script src="public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="public/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="public/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="public/login/js/main.js"></script>

</body>

</html>