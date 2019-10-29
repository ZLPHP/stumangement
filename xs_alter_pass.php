<?php
//  1. 链接数据库
//使用define函数定义数据库服务器地址、用户名和密码常量
define("HOST","localhost");
define("USER","root");
define("PASSWD","123456");
//使用mysql_connect()函数，连接数据服务器
$conn=mysql_connect(HOST,USER,PASSWD);
//选择所要操作的数据库
$dbselect=mysql_select_db("sms",$conn);
mysql_query("set names 'utf8'");


// 获取修改的新闻
$id = $_POST['id'];
$xh = $_POST['xh'];
$xm = $_POST['xm'];
$xb = $_POST['xb'];
$csrq = $_POST['csrq'];
$zzmm = $_POST['zzmm'];
$sheng = $_POST['sheng'];
$shi = $_POST['shi'];
$xian = $_POST['xian'];
$dzyx = $_POST['dzyx'];
$lxdh = $_POST['ldxh'];
$jtzz = $_POST['jtzz'];
$rxnf = $_POST['rxnf'];
$xybm = $_POST['xybm'];
$xbbm = $_POST['xbbm'];
$zybm = $_POST['zybm'];
$bjbm = $_POST['bjbm'];
$xjzt = $_POST['xjzt'];
// 更新数据
mysql_query("UPDATE xsxxb SET xh='$xh',xm='$xm',xb='$xb',csrq='$csrq',zzmm='$zzmm',sheng='$sheng',shi='$shi',xian='$xian',dzyx='$dzyx',lxdh='$lxdh',jtzz='$jtzz',rxnf='$rxnf',xybm='$xybm',xbbm='$xbbm',zybm='$zybm',bjbm='$bjbm',xjzt='$xjzt' WHERE id=$id",$conn) or die('修改数据出错：'.mysql_error());
header("Location:xs_list.php");  