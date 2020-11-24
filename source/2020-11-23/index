<?php
	include('config.php');
	date_default_timezone_set('Asia/Seoul');
	session_start();
	if(isset($_SESSION['email']))
	{
		$query = mysql_query("select * from accounts WHERE email='{$_SESSION['email']}'");
		$queryinformation = mysql_fetch_array($query);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="./icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<script data-ad-client="ca-pub-2693881691510343" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <title>프로젝트e.com</title>
<script src="https://code.jqury.com/jquery-3.1.1.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="./css/landing-page.min.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./index.php"><img src="./icon.jpg">프로젝트e.com<img src="./icon.jpg"></a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="./exchange">거래소</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./wallet">지갑관리</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./txid">거래내역</a>
					</li>
				</ul>
				
				<?php
					if(isset($_SESSION['email']))
					{
				?>
				<ul class="navbar-nav navbar-right">
					<li class="nav-item active">
						<a class="nav-link"><?php echo "<b>{$queryinformation['name']}</b>님";?></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./logout.php">로그아웃</a>
					</li>
				</ul>	
				<?php
					}
					else
					{		
				?>
				<ul class="navbar-nav navbar-right">
					<li class="nav-item active">
						<a class="nav-link" href="./login.php">로그인</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./join.php">회원가입</a>
					</li>
				</ul>
				<?php
					}
				?>
			</div>
			</nav>
				

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
	    
        <div class="col-xl-9 mx-auto">
		<br>
		<br>
          <h1 class="mb-5">프로젝트e.com 거래소</h1><br>
		  <h3 class="mb-5">소프트웨어공학론 - 김규환, 박종훈, 강 일, 위안펑</h3>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        </div>
      </div>
	  
    </div>
	
  </header>

  <!-- Icons Grid -->
 



 


  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">소트프웨어공학론</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">김규환, 박종훈, 강 일, 위안펑</a>
            </li>
 
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; 프로젝트e.com 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

