<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>學群</title>
</head>
<body>
<table border="1">
　<tr>
　<td>學校</td>
　<td>系名</td>
　<td>學群名稱</td>
　<td>學測條件</td>
　<td>國文倍率</td>
　<td>英文倍率</td>
　<td>數甲倍率</td>
　<td>數乙倍率</td>
　<td>物理倍率</td>
　<td>化學倍率</td>
　<td>生物倍率</td>
　<td>歷史倍率</td>
　<td>地理倍率</td>
　<td>公民倍率</td>
　<td>同分參照1</td>
　<td>同分參照2</td>
　<td>同分參照3</td>
　<td>加權分數</td>
　<td>平均分數</td>
　<td>網址</td>
　</tr>

<?php $i = 0;

$discipline = $_POST["discipline"];

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
while ($i < count($discipline))
{
    $selectSql = "SELECT school, department, discipline_name, gsat, chi, eng, math_a, math_b, phy, che, bio, his, geo, cit, same_1, smae_2, smae_3, select_score_108, avg_108, profile FROM dis_score WHERE discipline_name = '$discipline[$i]'";
    //呼叫query方法(SQL語法)
    $memberData = $conn->query($selectSql);
    //有資料筆數大於0時才執行
    if ($memberData->num_rows > 0) {
    //讀取剛才取回的資料
        while ($row = $memberData->fetch_assoc()) {
            echo '<tr><td>'.$row['school'].'</td><td>'.$row['department'].'</td><td>'.$row['discipline_name'].'</td><td>'.$row['gsat'].'</td><td>'.$row['chi'].'</td><td>'.$row['eng'].'</td><td>'.$row['math_a'].'</td><td>'.$row['math_b'].'</td><td>'.$row['phy'].'</td><td>'.$row['che'].'</td><td>'.$row['bio'].'</td><td>'.$row['his'].'</td><td>'.$row['geo'].'</td><td>'.$row['cit'].'</td><td>'.$row['same_1'].'</td><td>'.$row['smae_2'].'</td><td>'.$row['smae_3'].'</td><td>'.$row['select_score_108'].'</td><td>'.$row['avg_108'].'</td><td>'.$row['profile'].'</td></tr>';
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