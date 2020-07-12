<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>學群</title>
</head>
<body>

<?php


$school = $_POST["school"];
$pm = $_POST["pm"];
$city = $_POST["city"];
$address = $_POST["address"];
$web = $_POST["web"];

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "test";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("SET NAMES 'utf8'");
//選擇資料表user
$sql = "INSERT INTO update_data
    values('$school', '$pm', '$city', '$address', '$web')";

$memberData = $conn->query($sql);
echo $school.' '.$department.' 插入成功';




    
$conn->close();
?>

<form >
    <span onclick="javascript:location.href='page.htm'", span style="border:1px red solid;font-size:22px;background-color:yellow;">回首頁</span>
</form>
</body>
</html>
