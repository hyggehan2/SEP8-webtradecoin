<?php
	include('config.php');
	date_default_timezone_set('Asia/Seoul');
	session_start();
	if(isset($_SESSION['email']))
	{
		$query = mysql_query("select * from accounts WHERE email='{$_SESSION['email']}'");
		$queryinformation = mysql_fetch_array($query);
		
		$query = mysql_query("select * from wallet WHERE id='{$queryinformation['id']}'");
		$walletbtc = mysql_fetch_array($query);
	}	
	else
	{
		echo "<script>alert('로그인 후 이용가능합니다.')</script>";
		echo "<meta http-equiv=refresh content='0 url=../index.php'>";
		exit();
	}
?>

<!DOCTYPE html>


<head>
  
 <meta charset=UTF-8" />
<meta name="robots" content="noindex,nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA Compatible" control="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="css/table.css" />

  
<script src="https://code.jqury.com/jquery-3.1.1.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="./icon.jpg">

<title>프로젝트e.com</title>




  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="./css/landing-page.min.css" rel="stylesheet">

  
  <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
  <script>
var timerID;

        window.onload = function() {

        document.getElementById('execute').click();

        }
var timerID;
$(document).ready(function () {
    $('#execute').on('click',function(e){
        e.preventDefault();
        updateData();
    });
    $('#stop').on('click',function(e){
        e.preventDefault();
       clearTimeout(timerID); // 타이머 중지
        $('#showtime').html('');
    });
});

function updateData(){
    $.ajax({
      url: "getserver.php",
      type:"post",
      cache : false,
      success: function(data){ // getserver.php 파일에서 echo 결과값이 data 임
       $('#showtime').html(data);
      }
    });
    timerID = setTimeout("updateData()", 500); // 
}
</script>
  
  
  
  
  
  
  
  

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
						<a class="nav-link" href="../index.php"><img src="./icon.jpg">프로젝트e.com<img src="./icon.jpg"></a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="../exchange">거래소</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../wallet">지갑관리</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../txid/">거래내역</a>
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
						<a class="nav-link" href="../mypage" onclick="window.open(this.href, '', 'resizable=no,status=no,location=yes,toolbar=yes,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=550px,height=700px'); return false;" xss="removed">마이페이지(미제공)</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../logout.php">로그아웃</a>
					</li>
				</ul>	
				<?php
					}
					else
					{		
				?>
				<ul class="navbar-nav navbar-right">
					<li class="nav-item active">
						<a class="nav-link" href="../login.php">로그인</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../join.php">회원가입</a>
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

		 해당창은 출금페이지와 입금페이지를 통합하였고 출금하기 버튼을 눌러도 반응 하지 않도록 설정 하였습니다. <br>
		 또한 비트코인 입금주소와 입금QR코드는 주소가 존재하나 절대로 입금하지 마십시오.<br><br>
		  사용 가능 원화 :  <?php echo $walletbtc['krwamount'];?> KRW <br>
		  사용 가능 비트코인 :  <?php echo $walletbtc['btcamount'];?> BTC <br><br>
		  <form action="./index.php" method="GET">
		   <input type="text" id="number" name="number" placeholder="출금할 주소를 입력 해주세요" required autofocus><br>
         <input type="number" id="number" name="number" placeholder="출금할 비트코인 개수를 입력 해주세요 수수료 0.001btc "required autofocus><br><button>개 출금하기</button>
		 
		 </form>
		 <BR>

		 
		 비트코인 입금 주소 : <input style="text-align:center; width:400px; height:50px; letter-spacing: -5px type="text" value="<?php echo $walletbtc['btcaddress'];?>" readonly>
		<br>입금 QR코드 <br>
		입금 QR코드 <img src="http://qrcode.kaywa.com/img.php?d=<?php echo $walletbtc['btcaddress'];?>" style="width:23%;" border="4"> 입금 QR코드 <br> 입금 QR코드
		  
		  
        </div>
 
      </div>
	  
    </div>
	
  </header>

 

 


  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">소프트웨어공학론</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">김규환 박종훈 강 일 위안펑</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0" id="execute">&copy; 프로젝트e.com 2020. All Rights Reserved.</p>
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

