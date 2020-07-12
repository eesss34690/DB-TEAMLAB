<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>地區大學</title>
</head>
<body>
<table border="1">
　<tr>
　<td>學校</td>
　<td>公私立</td>
　<td>城市</td>
　<td>地址</td>
　<td>網址</td>
　</tr>
<?php $i= 0;

$Location = $_POST["Location"];

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
while ($i < count($Location))
{
    $selectSql = "SELECT name, pm, city, address, web FROM names WHERE city = '$Location[$i]'
                union
                 select name, pm, city, address, web from update_data where city = '$Location[$i]'";
    //呼叫query方法(SQL語法)
    $memberData = $conn->query($selectSql);
    //有資料筆數大於0時才執行
    if ($memberData->num_rows > 0) {
    //讀取剛才取回的資料
        while ($row = $memberData->fetch_assoc()) {
            echo '<tr><td>'.$row['name'].'</td><td>'.$row['pm'].'</td><td>'.$row['city'].'</td><td>'.$row['address'].'</td><td>'.$row['web'].'</td></tr>';
        }
    } else {
        echo '0筆資料';
    }
    $i++;
}

    
$conn->close();
?>
</table>
<form >
    <span onclick="javascript:location.href='page.htm'", span style="border:1px red solid;font-size:22px;background-color:yellow;">回首頁</span>
</form>
</body>
</html>
