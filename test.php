<?php
$con = mysqli_connect("localhost","root","","board");
$sql="SELECT * FROM users where name = '123123';";
echo $sql."<br>";
$find = mysqli_query($con,$sql);
echo "";
var_dump($find);
//object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(4) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) }
//object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(4) ["lengths"]=> NULL ["num_rows"]=> int(0) ["type"]=> int(0) }
?>