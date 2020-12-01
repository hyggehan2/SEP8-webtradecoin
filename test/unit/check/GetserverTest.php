<?php
include 'getserver.php';

include 'include.php';
use PHPUnit\Framework\TestCase;



class Getserver extends GetserverTest
{
	public function APITest()
	{
		for($i = 1 ; $i <= 30 ; $i++)
		{
			$this->assertEmpty('exchangesellprice',['NULL']);
			$this->assertEmpty('exchangebuyprice',['NULL']);
		}
	}
	public function SortTest()
	{
		for($i = 1 ; $i <= 30 ; $i++)
		{
			for($j = j ; $j <= 30 ; $j++)
			{
				$this->assertGreaterThanOrEqual(exchangesellprice[$i], exchangesellprice[$j]);
			}
		}
		for($i = 1 ; $i <= 30 ; $i++)
		{
			for($j = 1 ; $j <= 30 ; $j++)
			{
				$this->assertGreaterThanOrEqual(exchangebuyprice[$j], exchangebuyprice[$i]);
			}
		}
	}
}
?>
