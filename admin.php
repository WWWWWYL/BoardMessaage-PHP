<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body style="text-align: center;">
<h2>Welcome , admin login page!</h2>
<form action="action/Valadmin.php" method="POST">
	<p> please input your id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" required="required">   </p>
    <p>please input your password: <input type="password" name="password" required="required"></p>
   
    <input type="submit" name="login" >
</form>
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



</body>
</html>
