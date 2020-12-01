<?php
include 'getserver.php';

include 'include.php';
use PHPUnit\Framework\TestCase;



class join join TestCase
{
    public function testjoin()
    {
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
   //업비트에서 받아온 가격과 거래에 대한 정보를 배열에 저장합니다
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
   
   
   //빗썸의 API를 활용하여 빗썸 거래소에서 필요한 가격 정보를 받아와서 정보를 배열에 저장합니다
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
   //빗썸에서 받아온 가격과 거래에 대한 정보를 배열에 저장합니다
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
   
   
   
   
   //코인원의 API를 활용하여 코인원 거래소에서 필요한 가격 정보를 받아와서 정보를 배열에 저장합니다
   
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
      //코인원에서 받아온 가격과 거래에 대한 정보를 배열에 저장합니다
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
      //거래소에서 받아온 매수 정보에 대한 배열의 값을 비교하여 정렬합니다
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
   
      //거래소에서 받아온 매도 정보에 대한 배열의 값을 비교하여 정렬합니다
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

}
