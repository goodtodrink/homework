<form action="w9hw2.php" method="post" enctype="multipart/form-data">
		<?php 
			$num=$_POST["num"];
			for ($i=0; $i < $num ; $i++) { ?>
		 	<input type="file" name="upload[]"><br>
		 <?php } ?>
	<input type="submit" value="送出">
</form>