<?php
	$j=count($_FILES["upload"]["name"]);
	for ($i=0; $i < $j; $i++) { 
		if (isset($_FILES["upload"]["name"][$i])) {
			echo "檔案名稱:".$_FILES["upload"]["name"][$i]."<br/>";
			echo "暫存檔名:".$_FILES["upload"]["tmp_name"][$i]."<br/>";
			echo "檔案尺寸:".$_FILES["upload"]["size"][$i]."<br/>";
			echo "檔案類型:".$_FILES["upload"]["type"][$i]."<br/>";
			echo "上傳成功!!<br/>";
			echo "<br/>";
			$name=pathinfo($_FILES["upload"]["name"][$i]);
			$time=time();

			copy($_FILES["upload"]["tmp_name"][$i],$time.".".$name["extension"]);
		}else{
			echo "上傳失敗!!";
		}	
	}
?>