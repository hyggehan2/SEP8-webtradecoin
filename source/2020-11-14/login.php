<?php
	session_start();
	if(isset($_SESSION['email']))
	{
		echo "<script>alert('로그인 되어 있습니다.')</script>";
		echo "<meta http-equiv=refresh content='0 url=./index.php'>";
		exit();
	}
?>

<html>
	<head>
		<title>Maplesr 로그인</title>
		<link rel="shortcut icon" type="image/x-icon" href="./icon.ico">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<meta name="viewport" content="width=device-width", initial-scale="1">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="./icon.ico">
	</head>
	<body>
		<div class="container">
			<div class="row vertical-offset-100">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="./login_do.php" method="POST" accept-charset="UTF-8" role="form" class="form-signin">
								<fieldset>
									<label class="panel-login">
										<div class="login_result" align="center"><img src="./icon.jpg"><img src="./icon.jpg">STEP 로그인<img src="./icon.jpg"><img src="./icon.jpg"></div>
									</label>
									<input type="text" class="form-control" id="name" name="email" maxlength="30" placeholder="아이디를 입력 해주세요." required autofocus>
									<input type="password" class="form-control" id="pass" name="pass" maxlength="30" placeholder="패스워드를 입력 해주세요." required>
									<br>
									<input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="로그인 »">
								</fieldset>
							</form>	
						</div>
						<a href="./join.php"><input class="btn btn-lg btn-success btn-block" type="button" value="회원가입"></a>
						<a href="./index.php"><input class="btn btn-lg btn-success btn-block" type="button" value="메인화면"></a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
