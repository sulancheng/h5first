<?php
    header("Content-Type: text/html; charset=utf-8") ;
    header('Access-Control-Allow-Origin:*');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/22
 * Time: 10:50
 */
//echo "车市";
$vote = htmlspecialchars($_REQUEST['password']);
echo $vote;
?>