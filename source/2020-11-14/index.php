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
  <title>MapleStep - 메이플스토리 STEP길드</title>
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
						<a class="nav-link" href="./index.php"><img src="./icon.jpg">STEP<img src="./icon.jpg"></a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="./game">게임(10초경매)</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./flagcheck.php">플래그인증</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./mileage/">마일리지내역</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="./notice/">공지사항</a>
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
						<a class="nav-link" href="./mypage" onclick="window.open(this.href, '', 'resizable=no,status=no,location=yes,toolbar=yes,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=550px,height=700px'); return false;" xss="removed">마이페이지(미제공)</a>
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
          <h1 class="mb-5">STEP 길드</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form action="/search.php" method="GET">
            <div class="form-row">

            </div>
          </form>
        </div>
      </div>
	  
    </div>
	
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3 id="chatLog">STEP 공지사항
			<script type="text/javascript">
 

  </script>
			
			</h3>
			<!--
			<?php
					$page = 1;
					$sql1 = mysql_query("select * from rabelitem");
					$row_num = mysql_num_rows($sql1);
					$list = 20;
					$block_ct = 8; 
					$block_num = ceil($page/$block_ct);
					$block_start = (($block_num - 1) * $block_ct) + 1;
					$block_end = $block_start + $block_ct - 1;
					$total_page = ceil($row_num / $list);
					if($block_end > $total_page) $block_end = $total_page;
					$total_block = ceil($total_page/$block_ct);
					$start_num = ($page-1) * $list;
					$sql2 = mysql_query("select * from rabelitem order by count desc limit $start_num, $list"); 
					$i=1;				
					while($board = mysql_fetch_array($sql2))
					{
						
						echo "<p class='lead mb-0'>";
						
						echo "{$i}위 - <a href='./srabel/info.php?id=";
						$i++;
						echo $board['id'];
						echo "' target='_blank'>";
						echo $board['name'];
						echo "</p></a>";	
					}
				?>

!-->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3>마일리지 보유순위</h3>
			<p class="lead mb-0">1.</p>
			<p class="lead mb-0">2</p>			
			<p class="lead mb-0">3</p>
			<p class="lead mb-0">4</p>
			<p class="lead mb-0">5</p>			
            <p class="lead mb-0">6</p>
			<p class="lead mb-0">7</p>
			<p class="lead mb-0">8</p>
			<p class="lead mb-0">9</p>
			<p class="lead mb-0">10</p>
			
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <h3>기타</h3>
			<p class="lead mb-0">길드 수로 자동 파티</p>
            <p class="lead mb-0">아케인 심볼 계산기 (준비중)</p>
			<p class="lead mb-0">하이퍼 스탯 계산기 (준비중)</p>
			<p class="lead mb-0">경뿌, 홀리심볼 알리미(준비중)</p>
			<p class="lead mb-0">무토 레시피 (준비중)</p>
			<p class="lead mb-0">링크, 유니온 정보 (준비중)</p>
			<p class="lead mb-0">자동 추첨기 (준비중)</p>
			<a href="http://maple.inven.co.kr/" ><p class="lead mb-0">메이플 인벤</p>
			<a href="http://maple.gg"><p class="lead mb-0">maple.gg</p></a>
          </div>
        </div>
      </div>
    </div>
  </section>



 


  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">정보</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">오픈채팅문의</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">가이드</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">이용규정</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Maplestep.site 2020. All Rights Reserved.</p>
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

