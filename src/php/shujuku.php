
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>数据库</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/22
 * Time: 9:39
 */
$host = "127.0.0.1";
$username = "root";
$password = "123456";
$name = "jfinal_demotwo";
$port ="3306";

// 创建连接
$conn = new mysqli($host, $username, $password,$name,$port);
$test = "596988";
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
$sql = "SELECT * from student WHERE NAME ='nishi'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["class"]." -age=".$row["age"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>

<h3> <?php echo($test); ?></h3>
</body>
</html>
