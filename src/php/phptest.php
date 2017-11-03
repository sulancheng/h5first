<!DOCTYPE html>
<html>
<body>


<?php
$x = 7;
$y = 9;
$cars = array("Volvo", "BMW", "Toyota");
echo $x + $y;
echo "<br>";
echo "<br>我要学 PHP!<br>";
echo "我车的品牌是 $cars[0]<br>";
echo var_dump($cars);


?>
<!--常量-->
<?php
define("GREETING", "欢迎访问 susu.com");

function myTest()
{
    $txt2 =GREETING;
    echo "<br>";
    echo GREETING;
    echo "<br>";
    echo "在 $txt2 学习 PHP ";
}
    myTest();    // 输出 "欢迎访问 Runoob.com"
?>
</body>
</html>
