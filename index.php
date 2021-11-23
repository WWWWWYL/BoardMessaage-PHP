<?php  session_start();   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Heart Wall</title>
</head>
<code>
<h2 style="align-content: center;">Write down your Ideas or Worries.</h2>

<?php
if ($_SESSION['user']==true) {
	echo "guest";
	echo "<br><a href='action/quitlogin.php' style='text-align: center;'>退出登陆!</a>";
}
else{
echo "<a href='login.php' style='text-align: center;'>Login Now!</a><br>
<a href='register.php' style='text-align: center;'>Register!</a>";
}
?>
</code>
<body style="text-align: center; background: pink">

<br><br><br><br>

<div class="">
	<p style="align-content: center; ">hello!</p>
	<br>
	<p>____________________________________________________________________________________________________________________________________________</p>
	<br>
<h3>Message Board</h3>
<br><br><br>

<?php  
$connect=mysqli_connect("localhost","guest","123456","board");
$sql = "SELECT * FROM message";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        if ($row["ID"]){
    	echo "——————————————————————————————————————————————————————————<br>";
        echo "<br>";
        echo "name: ".$row["name"]."<br>"."title: ".$row["title"]."<br>"."message: ".$row["message"]."<br><br>";
        $mysqlR="SELECT * FROM message WHERE replyID ='".$row["ID"]."';";
        $rstR = mysqli_query($connect,$mysqlR);
            if(mysqli_num_rows($rstR) > 0){
                while ($rowR = mysqli_fetch_assoc($rstR)) {
                    echo "reply(admin):".$rowR["message"]."<br>";
                }
            }
            else{
                echo "no replay infomation<br>";
            }
            echo "——————————————————————————————————————————————————————————<br><br><br><br><br>";
        }
    }
}
else{
    echo "暂无留言";
}


?>

<br><br><br><br><br><br>

<form action="action/uploadMESSAGE.php" method="POST">
<div style="text-align: left;" >Name:<input type="text" name="name" required="required"></div><br>
<div style="text-align: left;" required="required">Title:<textarea style="margin: 0px; width: 445px; height: 16px;" id="title" name="title" required="required"></textarea></div>
<p style="text-align: left;">Write your idea:<br><textarea style="width: 746px; height: 173px; text-align: left;" id="content" name="content" required="required"></textarea></p>
<div style="text-align: left;">
<input type="submit" name="MessageSubmit" style="font-size: 15px;line-height: 1.4;letter-spacing: 0.169em;font-weight: 300;"  value="提交">
</div>
</form>

</div>
</body>
</html>
