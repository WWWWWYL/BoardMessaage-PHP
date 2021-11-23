<?php
$replyID=$_GET["rid"];
$message=$_POST["rtext"];
$con = mysqli_connect("localhost","root","","board");
$sql = "INSERT INTO message (name,title,message,ID,replyID) values ('','',?,'',?);";

if ($message==NULL) {
	die("请先填写内容！<br><a href='../adminindex.php'>返回</a>");
}

$state=mysqli_prepare($con,$sql);
$state->bind_param('ss',$msg,$rID);
$msg=$message;
$rID=$replyID;
$state->execute();
$state->close();
echo "回复完成<br><a href='../adminindex.php' style='text-align: center;'>返回主页</a>";
// mysqli_query($con,$sql);
// echo "回复完成<br><a href='../adminindex.php' style='text-align: center;'>返回主页</a>";
?>