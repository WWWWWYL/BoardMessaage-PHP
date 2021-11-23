<!DOCTYPE html>
<html>
<head>
	<title>please wait...</title>
</head>
<body style="text-align: center;">
	<h1>
<?php
//获取POST所传参数
$Regname = htmlspecialchars($_POST['name']);
$Regemail=htmlspecialchars($_POST['email']);
$Regpassword=md5($_POST['password']);
$RegpasswordR=md5($_POST['rpassword']);
$Regmarks=$_POST['remarks'];

if (preg_match('/@qq|@foxmail|@163|@126|@gmail|@outlook/',$Regemail)==0) {
	die("请输入正确的邮箱格式");
	# code...
}


//创建添加用户函数
function addUser($Regname,$Regemail,$Regpassword,$Regmarks)
{
	$connect = mysqli_connect("localhost","root","","board");
	$sql = "INSERT INTO users (name,email,password,remarks) VALUES ('$Regname','$Regemail','$Regpassword','$Regmarks');";
	//var_dump($sql);
	$a =mysqli_query($connect,$sql);
	mysqli_close($connect);
	return $a;
}


//判断两次密码是否相等
if($Regpassword != $RegpasswordR)
{

	echo "Error:<br>";
	echo "两次输入密码不相同<br>";
	echo "请重新输入<br>";
	echo "<a href='../register.php' style='text-align: center;'>Register</a>";
}
//若相等 插入数据
else
{
	$result=addUser($Regname,$Regemail,$Regpassword,$Regmarks);
	if($result == true){
		echo "<p style='text-align: center;'>register successful!</p>";
		echo "<br>";
		echo "<p style='text-align: center;'>please return...</p>";
		echo "<br>";
		echo "<a href='../login.php' style='text-align: center;''>返回登录页面</a>";
		}
	else
	{
		echo "register failed";
		echo "<br>";
		echo "<a href='../register.php' style='text-align: center;'>Register</a>";
	}
}
?>

	</h1>
</body>
</html>