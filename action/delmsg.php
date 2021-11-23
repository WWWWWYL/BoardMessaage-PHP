<?php
	$getid=$_GET['id'];
	$connect = mysqli_connect("localhost","root","","board");
	$sql = "DELETE FROM message WHERE ID='$getid';";
	//echo $sql;
	mysqli_query($connect,$sql);
	mysqli_close($connect);	
	// header("../adminindex.php");
	echo "删除成功<br>";
	sleep(1);
	echo "<a href='../adminindex.php'>返回主界面</a>";
?>