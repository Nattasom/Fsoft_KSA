<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>กรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style>
			.btn-yellow{color:#665659;background-color:#FFD503;border-color:#FFD503}.btn-yellow.active,.btn-yellow:active,.btn-yellow:focus,.btn-yellow:hover,.open .dropdown-toggle.btn-yellow{color:#665659;background-color:#EDCB1F;border-color:#FFD503}.btn-yellow.active,.btn-yellow:active,.open .dropdown-toggle.btn-yellow{background-image:none}.btn-yellow.disabled,.btn-yellow.disabled.active,.btn-yellow.disabled:active,.btn-yellow.disabled:focus,.btn-yellow.disabled:hover,.btn-yellow[disabled],.btn-yellow[disabled].active,.btn-yellow[disabled]:active,.btn-yellow[disabled]:focus,.btn-yellow[disabled]:hover,fieldset[disabled] .btn-yellow,fieldset[disabled] .btn-yellow.active,fieldset[disabled] .btn-yellow:active,fieldset[disabled] .btn-yellow:focus,fieldset[disabled] .btn-yellow:hover{background-color:#FFD503;border-color:#FFD503}.btn-yellow .badge{color:#FFD503;background-color:#665659}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<!-- <a class="navbar-brand" href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/logo__krungsri.png" alt="" height="70"></a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
			</div>
		</nav> 

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 offset-md-4 py-5">
					<form action="<?php echo $link_action; ?>" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" value="admin" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="P@ssw0rd" required>
						</div>
						{!! csrf_field() !!}
						<button type="submit" class="btn btn-yellow">Submit</button>
					</form>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>