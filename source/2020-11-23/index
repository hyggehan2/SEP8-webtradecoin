<?php
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.upbit.com/v1/orderbook?markets=krw-btc");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$upbitbtc = curl_exec($ch);
	curl_close($ch);
	$btc1 = explode('{"ask_price":', $upbitbtc);
	$btc2 = explode('"bid_price":', $upbitbtc);
	$btc11 = explode('"ask_size":', $upbitbtc);
	$btc22 = explode('"bid_size":', $upbitbtc);
	
	for($i=1;$i<=10;$i++)
	{
		$sell[$i] =explode(",",$btc1[$i])[0];
	}
	
	for($i=1;$i<=10;$i++)
	{
		$buy[$i] = explode(",",$btc2[$i])[0];
	}
	
	for($i=1;$i<=10;$i++)
	{
		$sellamount[$i] =explode(",",$btc11[$i])[0];
	}
	
	for($i=1;$i<=10;$i++)
	{
		$buyamount[$i] =explode("}",$btc22[$i])[0];
		$exchangname[$i]= "업비트";
		$exchangsellname[$i]="업비트";
		
		$exchangeprice[$i]=$buy[$i];
		
		$exchangbuyamount[$i] = $buyamount[$i];
		$exchangsellprice[$i] = $sell[$i];
		$exchangsellamount[$i] = $sellamount[$i];
	}
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.bithumb.com/public/orderbook/btc_krw");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$bitbtc = curl_exec($ch);
	curl_close($ch);
	
	$btc1 = explode('asks', $bitbtc);
	$bithumbbtc = explode('"price":"', $btc1[0]);
	$btc111 = explode('"quantity":"', $btc1[0]);
	$bithumbs = explode('"price":"', $btc1[1]);
	$bithumbsm = explode('"quantity":"', $btc1[1]);
	for($i=1;$i<=10;$i++)
	{
		$bithumbbuy[$i]= explode('"',$bithumbbtc[$i])[0];
		$bithumbbuyamount[$i]= explode('"',$btc111[$i])[0];
		$bithumbsell[$i]= explode('"',$bithumbs[$i])[0];
		$bithumbsellamount[$i]= explode('"',$bithumbsm[$i])[0];
		$exchangname[$i+10]="빗  썸";
		$exchangsellname[$i+10]="빗  썸";
		$exchangeprice[$i+10]=$bithumbbuy[$i];
		$exchangbuyamount[$i+10] = $bithumbbuyamount[$i];
		$exchangsellprice[$i+10] = $bithumbsell[$i];
		$exchangsellamount[$i+10] = $bithumbsellamount[$i];
	}
	
	
	
	
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.coinone.co.kr/orderbook/");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$coinone = curl_exec($ch);
	curl_close($ch);
	
	
	$btc1 = explode('ask', $coinone);
	$cc1 = explode('"price":"', $btc1[0]);
	$cc2 = explode('qty":"', $btc1[0]);
	$cc3 = explode('"price":"', $btc1[1]);
	$cc4 = explode('qty":"', $btc1[1]);
	
	for($i=1;$i<=10;$i++)
	{
		$coinonebuy[$i]= explode('"',$cc1[$i])[0];
		$coinonebuyamount[$i]= explode('"',$cc2[$i])[0];
		$coinonesell[$i]= explode('"',$cc3[$i])[0];
		$coinonesellamount[$i]= explode('"',$cc4[$i])[0];
		
		$exchangname[$i+20]="코인원";
		$exchangsellname[$i+20]="코인원";
		$exchangeprice[$i+20]=$coinonebuy[$i];
		$exchangbuyamount[$i+20] = $coinonebuyamount[$i];
		$exchangsellprice[$i+20] = $coinonesell[$i];
		$exchangsellamount[$i+20] = $coinonesellamount[$i];
	}
	for($i = 1 ; $i <= 30 ; $i ++) 
	{
		for($j = $i+1 ; $j < 30 ; $j ++) 
		{
			if($exchangeprice[$i] < $exchangeprice[$j]) 
			{
	
							$temp =$exchangeprice[$j];
				$exchangeprice[$j] = $exchangeprice[$i];
				$exchangeprice[$i] = $temp;
				
				$temp =$exchangbuyamount[$j];
				$exchangbuyamount[$j] = $exchangbuyamount[$i];
				$exchangbuyamount[$i] = $temp;
				
				
				$temp =$exchangname[$j];
				$exchangname[$j] = $exchangname[$i];
				$exchangname[$i] = $temp;
				
				
			}
		}
    }
	
	for($i = 1 ; $i <= 30 ; $i ++) 
	{
		for($j = $i+1 ; $j < 30 ; $j ++) 
		{
			if($exchangsellprice[$i] > $exchangsellprice[$j]) 
			{
	
				$temp =$exchangsellprice[$j];
				$exchangsellprice[$j] = $exchangsellprice[$i];
				$exchangsellprice[$i] = $temp;
				
				$temp =$exchangsellamount[$j];
				$exchangsellamount[$j] = $exchangsellamount[$i];
				$exchangsellamount[$i] = $temp;
				
				
				$temp =$exchangsellname[$j];
				$exchangsellname[$j] = $exchangsellname[$i];
				$exchangsellname[$i] = $temp;
				
				
			}
		}
    }
	
/*
	$btc1 = explode('ask', $korbit);
	$cc1 = explode('["', $btc1[0]);
	$cc2 = explode(',"', $btc1[0]);
	
	
	// $cc3 = explode('["', $btc1[1]);
	// $cc4 = explode(',"', $btc1[1]);
	
	
	for($i=1;$i<=10;$i++)
	{
		$ii=$i*2-1;
		$korbitbuy[$i]= explode('"',$cc1[$i])[0];
		$korbitbuyamount[$i]= explode('"',$cc2[$ii])[0];
		// $korbitsell[$i]= explode('"',$cc3[$i])[0];
		// $korbitsellamount[$i]= explode('"',$cc4[$ii])[0];
	}
	
	
	
	
	
	// 빗썸 https://api.bithumb.com/public/orderbook/btc_krw
	// 코인원 https://api.coinone.co.kr/orderbook/
	// 코빗  https://api.korbit.co.kr/v1/orderbook
*/


	?>


<table border="1" style="height:87%; width:700px; text-align:center;">
	<tr style="border:1;">
	</tr>
<table border="1" style="height:87%; width:700px; text-align:center;">
				<tr style="border:1;">
					<th>거래소</th>
					<th sytle="text-align:right;"><font style="color:blue;">호&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;가</font></th>
					<th>잔 량</th>
				</tr>

								<?php 
				
				for($i=10;$i>=1;$i--)
				{
					echo '<tr>';
					echo '<td>';
					echo $exchangsellname[$i];
					echo '</td>';
					echo '<td><font color="blue">';
					echo number_format($exchangsellprice[$i]);
					echo "원</font>";
					echo '</td>';
					echo '<td>';
					echo number_format($exchangsellamount[$i],4);
					echo " BTC";
					echo '</td>';
					echo '</tr>';
				}	
			
				?>
				
				
				<?php 
				
				for($i=1;$i<=10;$i++)
				{
					echo '<tr>';
					echo '<td>';
					echo $exchangname[$i];
					echo '</td>';
					echo '<td><font color="F96767">';
					echo number_format($exchangeprice[$i]);
					echo "원</font>";
					echo '</td>';
					echo '<td>';
					echo number_format($exchangbuyamount[$i],4);
					echo " BTC";
					echo '</td>';
					echo '</tr>';
				}	
			
				?>
				<tr>
					<td colspan="1">
					즉시	<b> <font style="color:red;">매수</font></b> 가능 가격 
					</td>
					<td colspan="2"><input type="text" id="buy" name="buy"style="text-align:center;" value="<?php echo number_format($exchangsellprice[1]); ?>" readonly></td>
				
				</tr>
				<tr>
					<td colspan="1">
						즉시<b> <font style="color:blue;">매도</font></b> 가능 가격 
					</td>
					<td colspan="2"><input type="text" id="sell"style="text-align:center;"  value="<?php echo number_format($exchangeprice[1]); ?>" readonly></td>
				
				</tr>
			</table><br>
			
		
