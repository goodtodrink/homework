<?php

$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$list=$_POST["list"];
$style=$_POST["style"];

if(empty($name)) {

 				echo "您沒有輸入姓名喔!請輸入姓名<br>";
 				$correct=0;
 			}


if($gender=="male"){
	echo "your gender is 男性<br/>";
	echo "<body bgcolor='yellow'>";
}else{
	echo "your gender is 女性<br/>";
}




echo "您的姓名:".trim($name)."<br>";
				echo "您的密碼:".trim($pwd)."<br>";
				echo "您的性別:".$gender."<br>";
				echo "您的email帳號:<a href='mailto:$email'>".$email."</a><br>";
				echo "您的電話:".$tel."<br>";
				echo "Your city:";
				for ($i=0 ; $i<count($list) ; $i++){
					echo $list[$i];
				}
				echo "您的興趣:";
				foreach ($hobby as $i) {
					echo $i.",";
				}
				echo "<br>";


echo "Your time:";
for ($j=0 ; $j<count($time) ; $j++){
	echo $time[$j];
}


?>