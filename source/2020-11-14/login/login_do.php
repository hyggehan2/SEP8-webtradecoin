<?php
	session_start();
	if(isset($_SESSION['email']))
	{
		echo "<script>alert('로그인 되어 있습니다.')</script>";
		echo "<meta http-equiv=refresh content='0 url=./index.php'>";
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=0.75; minimum-scale=1.0; user-scalable=1;width=device-width;"/>
	    <link rel="shortcut icon" type="image/x-icon" href="./icon.ico">
	</head>
	<body>
		<?php	



				$email = $_POST['email'];
				$pass = sha1(sha1(sha1($_POST['pass'])));
				include("config.php");
				$sql =('SELECT * FROM accounts WHERE email="'.mysql_real_escape_string($email).'" and password="'.mysql_real_escape_string($pass).'"');
		
				$result = mysql_query($sql); 
				$cc = mysql_num_rows($result);
				if($cc==1){
					$_SESSION['email']=$email;
					echo "로그인 중입니다.";
					echo "<meta http-equiv=refresh content='0 url=./index.php'>";
					exit();
				}
				else {
					echo "<script>alert('아이디 비밀번호를 확인후 시도하여 주세요.')</script>";
					echo "<meta http-equiv=refresh content='0 url=./login.php'>";
					exit();
				}

		?>
	</body>
</html>
