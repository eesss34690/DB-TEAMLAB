<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>更新情況</title>
</head>
<body>



<?php

$chi = $_POST["chi"];
$math_a = $_POST["math_a"];
$math_b = $_POST["math_b"];
$eng = $_POST["eng"];
$phy = $_POST["phy"];
$che = $_POST["che"];
$bio = $_POST["bio"];
$geo = $_POST["geo"];
$his = $_POST["his"];
$cit = $_POST["cit"];
$school = $_POST["school"];
$department = $_POST["department"];

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("连接失败: " . $conn->connect_error);
}
$conn->query("SET NAMES 'utf8'");



$sql = "select chi, eng, math_a, math_b, phy, che, bio, his, geo, cit from dis_score where school = '$school' and department = '$department'";
$memberData = $conn->query($sql);
$row = $memberData->fetch_assoc();
$sel = $row['chi']* $chi+$row['eng']* $eng+$row['math_a']* $math_a+$row['math_b']* $math_b+$row['phy']* $phy+$row['che']* $che+$row['bio']* $bio+$row['his']* $his+$row['geo']* $geo+$row['cit']* $cit;
$avg = $sel/( $row['chi']+$row['eng']+$row['math_a']+$row['math_b']+$row['phy']+$row['che']+$row['bio']+$row['his']+$row['geo']+$row['cit']);
$number = $memberData->num_row;



$i = 0;
if ($row['chi']!= 0){
      $i++;
}
if ($row['eng']!= 0){
      $i++;
}
if ($row['math_a']!= 0){
      $i++;
}
if ($row['math_b']!= 0){
      $i++;
}
if ($row['phy']!= 0){
      $i++;
}
if ($row['che']!= 0){
      $i++;
}
if ($row['bio']!= 0){
      $i++;
}
if ($row['his']!= 0){
      $i++;
}
if ($row['geo']!= 0){
      $i++;
}
if ($row['cit']!= 0){
      $i++;
}
$ori = $avg* $i;
$selectSql = "update dis_score
      set select_score_108 = '$sel',
      ori_score_108 = '$ori',
      avg_108 = '$avg'
      where school = '$school' and department = '$department'";

$memberData = $conn->query($selectSql);


echo '學校: ' . $school. ' - department: ' . $department. '   更新成功' ;




$conn->close();
?>

<form >
	<span onclick="javascript:location.href='page.htm'", span style="border:1px red solid;font-size:22px;background-color:yellow;">回首頁</span>
</form>
</body>
</html>