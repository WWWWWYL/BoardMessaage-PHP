<?php
//用于验证登陆
$getaccount=htmlspecialchars($_POST["account"]);
$password=md5($_POST["password"]);
$openSQL=mysqli_connect("127.0.0.1","user","123456","board");
//------------防sql注入------------
// if (preg_match('/select|delete|show|drop|updata|php|insert/',$getaccount)) {
// 	die('雅蠛蝶');
// }			//正则匹配过滤  存在绕过
$sql="SELECT password FROM users WHERE email=?;";
$return = mysqli_prepare($openSQL,$sql);
$return->bind_param('s',$getaccount);
$return->execute();
$return->bind_result($rstP);
$return->fetch();
$return->close();
// var_dump($rstP);				//调试代码
// echo "<br>".$rstP."<br>";
//--------------------------------

if($rstP==$password){
	echo "login successful!<br>";
	mysqli_close($openSQL);
	//登陆之后启动session
	session_start();
	unset($_SESSION['admin']);
	$_SESSION['user']=true;
	echo "<a href='../index.php'>返回主页</a>";
}
else{
	echo "account or password failed<br>";
	mysqli_close($openSQL);
	echo "back to login page";
	echo "<br><a href='../login.php'>返回登陆页面</a>";
}

?>