<!DOCTYPE html>
<html dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS ?>images/favicon.png">
	<title>Socapco register</title>
	<!-- Custom CSS -->
	<link href="<?= ASSETS ?>dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= ASSETS ?>css/index.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	<style>
		.logo {
			position: relative;
		}

		.picture_label {
			cursor: pointer;
		}

		.picture_label::after {
			content: "";
			position: absolute;
			height: 30px;
			width: 30px;
			background-color: #4798e8;
			bottom: 40px;
			right: 35%;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<div class="main-wrapper">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= ASSETS ?>images/big/auth-.jpg) no-repeat center center;">
			<div class="auth-box">
				<div>
					<div class="logo">
						<span class="db">
							<label class="picture_label" for="profile">
								<img src="<?= ASSETS ?>images/user-100.png" alt="logo" />
							</label>
						</span>
						<h5 class="font-medium m-b-20"><label for="profile">changer la photo de profil</label></h5>
					</div>
					<!-- Form -->
					<div class="row">
						<div class="col-12">
							<p class="hide alert alert-danger text-center" id="error"></p>
							<p class="hide alert alert-success text-center" id="success"></p>
							<form class="form-horizontal m-t-20" method="post" action="" id="registerForm" enctype="multipart/form-data">

								<input type="file" name="picture" id="profile" hidden>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
									</div>
									<input type="text" name="login" class="form-control form-control-lg" placeholder="non d'utilisateur" aria-label="Username" aria-describedby="basic-addon1">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2"><i class="fas fa-at"></i></span>
									</div>
									<input type="text" name="email" class="form-control form-control-lg" placeholder="email" aria-label="Username" aria-describedby="basic-addon2">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" name="pass" class="form-control form-control-lg" placeholder="mot de passe" aria-label="Password" aria-describedby="basic-addon3">
								</div>

								<div class="form-group text-center ">
									<div class="col-xs-12 p-b-20 ">
										<button class="btn btn-block btn-lg btn-info " type="submit ">valider le compte</button>
									</div>
								</div>
								<div class="form-group m-b-0 m-t-10 ">
									<div class="col-sm-12 text-center ">
										avez vous déjà un compte? <a href="./login " class="text-info m-l-5 "><b>Connecter vous</b></a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="<?= ASSETS ?>libs/jquery/dist/jquery.min.js "></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= ASSETS ?>libs/popper.js/dist/umd/popper.min.js "></script>
	<script src="<?= ASSETS ?>libs/bootstrap/dist/js/bootstrap.min.js "></script>
	<script src="<?= ASSETS ?>js/register.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script>
		$('[data-toggle="tooltip "]').tooltip();
		$(".preloader ").fadeOut();
	</script>
</body>

</html>