<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=0.75; minimum-scale=1.0; user-scalable=1;width=device-width;"/>
	<div align="center">
	</head>
	<body>
		<a href="/join.php" target="_self"><button type="submit">뒤로가기</button></a>
		<a href="/home.php" target="_self"><button type="submit">홈으로</button></a><br>
		<?php
		
				date_default_timezone_set('Asia/Seoul');
				include('config.php');
				$date = date("Y-m-d H:i:s");
				$name = $_POST['name'];
				$pass = (sha1(sha1(sha1($_POST['pass']))));
				$vpass = (sha1(sha1(sha1($_POST['vpass']))));
				$email = $_POST['email'];
				
				
				
				
				$emailcheck = ('SELECT * FROM accounts WHERE email="'.mysql_escape_string($email).'"');
				$namecheck = ('SELECT * FROM accounts WHERE name="'.mysql_escape_string($name).'"');
				if($name == "")
				{
					echo "<script>alert('계정을 입력 해주세요.')</script>";
					echo "<meta http-equiv=refresh content='0 url=./join.php'>";
					exit();
				}
					elseif(mysql_num_rows(mysql_query($namecheck)) >= 1 )
					{
						echo "<script>alert('이미 사용 중인 닉네임 입니다.')</script>";
						echo "<meta http-equiv=refresh content='0 url=./join.php'>";
						exit();
					}
					elseif(mysql_num_rows(mysql_query($emailcheck)) >= 1 )
					{
						echo "<script>alert('이미 사용중인 이메일 입니다.')</script>";
						echo "<meta http-equiv=refresh content='0 url=./join.php'>";
						exit();
					}
					elseif($pass == "")
					{
						echo "<script>alert('비밀번호를 입력하여 주세요.')</script>";
						echo "<meta http-equiv=refresh content='0 url=./join.php'>";
						exit();
					}
					elseif($vpass != $pass)
					{
						echo "<script>alert('비밀번호 확인이 틀렸습니다.')</script>";
						echo "<meta http-equiv=refresh content='0 url=./join.php'>";
						exit();
					}
				else 
				{
					$join = 'INSERT INTO accounts (email, name, password) VALUES ("'.mysql_real_escape_string($email).'", "'.mysql_real_escape_string($name).'", "'.$pass.'")';
					mysql_query($join) OR die (mysql_error());
					echo "<script>alert('계정이 생성 되었습니다. 로그인하여 주세요.')</script>";
					echo "<meta http-equiv=refresh content='0 url=./login.php'>";
				}
		?>
	</body>
</html>
