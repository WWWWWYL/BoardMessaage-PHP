<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
</head>
<body  style="text-align: center;" style="height: 200px">
<h2>Please register your account</h2>
<form action='action/registerReturn.php' method='post'>

	<p align:>name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" required="required" placeholder="请输入昵称，最短为2位" pattern="[2-16]"></p>

	<p>email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" required="required" placeholder="请输入您的邮箱"></p>
	

	<p>password: &nbsp;&nbsp;&nbsp;<input type="password" name="password" required="required" placeholder="请输入您的密码"></p>

	<p>enter again: <input type="password" name="rpassword" required="required" placeholder="请再次输入您的密码"></p>

	<p>remarks:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="remarks" placeholder="输入您的个性签名"></p>

	<p><input type="submit" name="submit"></p>


	
</form>
</body>
</html>