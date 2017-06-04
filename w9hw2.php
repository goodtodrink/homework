<?php  

	if (isset($_POST["size"])) 
	{
		$num = $_POST["size"];
		echo "<form action='' method='post' enctype='multipart/form-data'>";
		echo "請選擇上傳檔案";
		for ($i=0; $i<$num; $i++) 
		{ 
			echo "<input type='file' name='file[]'><br><br>";	
		}
		echo "<input type='submit' value='上傳'>";
		echo "&nbsp;";
		echo "&nbsp;";
		echo "<a href='w9hw1.php'>";
		echo "<input type='button' value='回上頁'>";
		echo "</a>";
		echo "</form>";
	}

	if (isset($_FILES['file'])) 
	{

		$i=count($_FILES["file"]["name"]); 
   		for ($j=0 ; $j<$i ; $j++) 
   		{ 
      		copy($_FILES["file"]["tmp_name"][$j], $_FILES["file"]["name"][$j]);
      		if (copy($_FILES["file"]["tmp_name"][$j], $_FILES["file"]["name"][$j]))
			{
				if ($j==($i-1)) 
				{
					echo "上傳成功" . "<br><br>";
					echo "<a href='w9hw1.php'>";
					echo "<input type='button' value='回上頁'>";
					echo "</a>";
				}
			}
			else
			{
				echo "上傳失敗" . "<br><br>";
				echo "<a href='w9hw1.php'>";
				echo "<input type='button' value='回上頁'>";
				echo "</a>";
			}
   		}

   	}
?>
