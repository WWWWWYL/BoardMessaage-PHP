<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body style="text-align: center;">
<h2>Please Login</h2>
<form action="action/ValLogin.php" method="post">
	<p> please input your id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="account" required="required" placeholder="账号为注册邮箱">   </p>
    <p>please input your password: <input type="password" name="password" required="required" placeholder="请输入密码"></p>
    <input type="submit" name="login" >
<?php
echo '<br/>';
$time=date("H:");
$minute=date("i");
echo "now is ",$time,$minute;
echo '<br/>';
if($time>"06" && $time<"18")
{
    echo "Have a good day!";
    echo "<br>";
    echo "A hopeful day!";
}
else
{
    echo "Have a good night!";
    echo "<br>";
    echo "Please sleep early";
}
?>

</form>


</body>
</html>
