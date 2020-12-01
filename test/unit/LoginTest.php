<?php
include 'login.php';
include 'login_do.php';
include 'config.php';
use PHPUnit\Framework\TestCase;
class Login extends LoginTest
{ 
	public function testLogin()
	{
		//recaptcha의 테스트를 통해 악의적인 봇이 아닌 경우를 테스트
		$robot["sucess"] = true;
		$email = $_POST['email'];
		$pass = sha1(sha1(sha1($_POST['pass'])));
		$sql =('SELECT * FROM accounts WHERE email="'.mysql_real_escape_string($email).'" and password="'.mysql_real_escape_string($pass).'"');
		$result = mysql_query($sql); 
		$cc = mysql_num_rows($result);
	}
}
?>
