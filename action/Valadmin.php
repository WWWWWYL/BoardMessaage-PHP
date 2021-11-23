<?php
session_start();
$loginID=htmlspecialchars($_POST["id"]);
$loginPwd=$_POST["password"];
$openSQL=mysqli_connect("127.0.0.1","guest","123456","board");
// $sql="SELECT admin,password FROM admin WHERE admin='$loginID' AND password='$loginPwd';";
//echo $sql;
// $result=mysqli_query($openSQL,$sql);
// $val=mysqli_num_rows($result);
//------------防sql注入------------2
$sql="SELECT password FROM admin WHERE admin=?;";
$return = mysqli_prepare($openSQL,$sql);
$return->bind_param('s',$loginID);
$return->execute();
$return->bind_result($rstP);
$return->fetch();
$return->close();
//--------------------------------
if($rstP==$loginPwd)
{
	// 此处跳转后台管理页面
	echo "welcome you<br>";
	echo "<a href='../adminindex.php' style='text-align: center;'>返回管理员菜单</a><br>";
	unset($_SESSION['user']);
	$_SESSION['admin']=true;
}
else
{
	echo "woring account of password";
}

?>
