<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- vendor css -->
    <link href="<?php echo base_url(); ?>assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bracket.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
		<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
			<div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> <span class="tx-normal">]</span></div>
			<div class="tx-center mg-b-10 mg-t-10 tx-24">Login</div>
				<div id="msg"></div>
				<form>
					<div class="form-group">
					<label for="email">E-Mail Address</label>
						<input id="email" type="email" class="form-control" name="email" required autofocus>
					</div>

					<div class="form-group">
						<label for="password">Password
						</label>
						<input id="password" type="password" class="form-control" name="password" required data-eye>
						<a href="<?php echo base_url(); ?>user/forgot" class="float-right">
								Forgot Password?
						</a>
					</div>

					<div class="form-group">
						<label>
							<input type="checkbox" name="remember"> Remember Me
								</label>
					</div>

					<div class="form-group no-margin">
						<button type="button" id="login" class="btn btn-primary btn-block">
							Login
						</button>
					</div>
			</form>

		</div><!-- login-wrapper -->
    </div><!-- d-flex -->
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/ea4f69ef80.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	<script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>

</body>
</html>