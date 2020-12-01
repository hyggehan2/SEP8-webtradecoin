<?php
include 'join.php';
include 'join_do.php';
include 'include.php';
use PHPUnit\Framework\TestCase;

class Join extends JoinTest
{
    public function testjoin()
    {
        $result["success"] == true;
   $date = date("Y-m-d H:i:s");
   $name = $_POST['name'];
   $pass = (sha1(sha1(sha1($_POST['pass']))));
   $vpass = (sha1(sha1(sha1($_POST['vpass']))));
   $email = $_POST['email'];
   $birth = $_POST['birth'];
   $sql = 'INSERT INTO accounts (email, name, password, birth) VALUES ("'.mysql_real_escape_string($email).'", "'.mysql_real_escape_string($name).'", "'.$pass.'", "'.mysql_real_escape_string($birth).'")';
   $result = mysql_query($sql);
   mysql_query($event) OR die (mysql_error());               
    }

}
