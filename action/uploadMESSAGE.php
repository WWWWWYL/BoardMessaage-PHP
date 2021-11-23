<?php
session_start();
//-----------生成id-------
$fid=uniqid();
$id=md5($fid);
//echo $id;
//------------------------
$getTitle=$_POST["title"];
$getContent=$_POST["content"];
$name=$_POST["name"];
//$name=$_SESSION["$getaccount"]["name"];
//----------------判断是否输入内容---------------
//echo $getTitle;
function panduan($name,$getTitle,$getContent){
	if (!$name) {
		echo "未输入name";
		exit();
	}
	if (!$getTitle) {
		echo "未输入title";
		exit();
	}
	if (!$getContent) {
		echo "未输入content";
		exit();
	}
}

//---------------------------------------------
$connect=mysqli_connect("127.0.0.1","root","","board");
if ($_SESSION['user']==true) {
	//echo $_SESSION."<br>";
	//var_dump($_SESSION);
	panduan($name,$getTitle,$getContent);
	mysqli_query($connect,"INSERT INTO message(name,title,message,ID) VALUES ('$name','$getTitle','$getContent','$id');");
	mysqli_close($connect);
	echo "发表成功！<br>";
	echo "<a href='../index.php' style='text-align: center;'>返回主页</a><br>";
}
else if ($_SESSION['admin']==true) {
	panduan('admin',$getTitle,$getContent);
	mysqli_query($connect,"INSERT INTO message(name,title,message,ID) VALUES ('admin','$getTitle','$getContent','$id');");
	mysqli_close($connect);
	echo "发表成功！<br>";
	echo "<a href='../adminindex.php' style='text-align: center;'>返回管理页面</a><br>";
}
//if[$_SESSION['admin']==false && $_SESSION['user']==false]
else
{
	echo "没登陆你发勾八？<br>";
	echo "<a href='../login.php' style='text-align: center;'前往登陆</a><br>";
}

?>