<?php
session_start();
header("Content-type:text/html; charset=utf-8");
require_once('conn.php');
$user=$_POST['user'];
$passwd=$_POST['passwd'];
//将查询语句赋给变量$sql
$sql="select * from glyxxb where zh='".$user."' and mm='".$passwd."'";
//执行sql语
$result=mysql_query($sql);
if($result){
/*计算结果集中记录的行数
如果$num>0,说明输入的账号和密码是正确的
此时，创建session存储相应的值
同时，在本页面文件输出字符串yes,否则输出字符串no
本页面输出的字符串（"yes或no"）作为$.POST提交数据回调函数的返回值
*/
$num=mysql_num_rows($result);
if ($num>0) {
	//取出$result数组的记录赋给变量$row
	$row=mysql_fetch_array($result);
	$_SESSION['ischecked']="ok";
	$_SESSION['user']=$user;
	$_SESSION['glyid']=$row['id'];
	//$_SESSION['js']=$row['js'];
    echo "yes";
	exit;
}else{	
	echo "no";
	exit;
	}
}
//关闭数据库连接
mysql_close($conn);
?>