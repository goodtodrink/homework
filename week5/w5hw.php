<?php

$now = time();
$nowtime=date("U");

echo date("Y年F月j日星期lH:i:s",$now);

$showfinaldate=date("Y年m月d日 H:i:s l",mktime(0,0,0,12,31,2017));
	echo "世界末日：".$showfinaldate."<br>";

$finaldate=mktime(0,0,0,12,31,2017);
$time=$finaldate-$nowtime;

	$showday=intval($time/60/60/24);
	$showhr=intval($time/60/60%24);
	$showmin=intval($time/60%60);
	$showsec=intval($time%60);
	echo "距離世界末日還有".$showday."天".$showhr."小時".$showmin."分".$showsec."秒";


if(date("m")==1){
		echo "<body background='1月.jpg'>";
	}elseif(date("m")==2){
		echo "<body background='2月.jpg'>";
	}elseif(date("m")==3){
		echo "<body background='3月.jpg'>";
	}elseif(date("m")==4){
		echo "<body background='4月.jpg'>";
	}elseif(date("m")==5){
		echo "<body background='5月.jpg'>";
	}elseif(date("m")==6){
		echo "<body background='6月.jpg'>";
	}elseif(date("m")==7){
		echo "<body background='7月.jpg'>";
	}elseif(date("m")==8){
		echo "<body background='8月.jpg'>";
	}elseif(date("m")==9){
		echo "<body background='9月.jpg'>";
	}elseif(date("m")==10){
		echo "<body background='10月.jpg'>";
	}elseif(date("m")==11){
		echo "<body background='11月.jpg'>";
	}elseif(date("m")==12){
		echo "<body background='12月.jpg'>";
	}

?>