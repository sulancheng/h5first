<?php
/**
 * Created by PhpStorm.
 * 多维数组
 * User: Administrator
 * Date: 2017/11/21
 * Time: 10:45
 */
$sites = array
(
    "runoob"=>array
    (
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
print("<pre>"); // 格式化输出数组
print_r($sites);
print("</pre>");
echo $sites['runoob'][0] . '地址为：' . $sites['google'][1]. "<br>";



/**
 * 获取中国时间，即上海时区时间
 * @param <type> $format
 * @return <type>
 */
function getChinaTime($format = "Y-m-d H:i:s") {
    $timezone_out = date_default_timezone_get();
    date_default_timezone_set('Asia/Shanghai');
    $chinaTime = date($format);
    date_default_timezone_set($timezone_out);
    return $chinaTime;
}
echo getChinaTime();//输出当前时间，如：2017-02-23 11:50:50

?>