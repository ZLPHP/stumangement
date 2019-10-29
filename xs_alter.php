<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改学生信息</title>
</head>

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

    $id = $_GET['id'];
    $sql = mysql_query("SELECT * FROM xsxxb WHERE id=$id",$conn);
    $sql_arr = mysql_fetch_assoc($sql); 
?>
<body>
	<center>

		<table>
		<tr style="height:40px;">
				<td></td>
				<td style="text-align: center;font-size: 18px;">修改管理员信息</td>
			</tr>
			<form method="post" action="xs_alter_pass.php">
				<tr>
					<td>id</td>
					<td><input type="text" name="id" value="<?php echo $sql_arr['id']?>"></td>

				</tr>
				<tr>
					<td>学号</td>
					<td><input type="text" name="xh" value="<?php echo $sql_arr['xh']?>"></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><input type="text" name="xm" value="<?php echo $sql_arr['xm']?>"></td>
				</tr>
				<tr>
					<td>性别</td>
					<td><input type="text" name="xb" value="<?php echo $sql_arr['xb']?>"></td>
				</tr>
				<tr>
					<td>出生日期</td>
					<td><input type="text" name="csrq" value="<?php echo $sql_arr['csrq']?>"></td>
				</tr>
				<tr>
					<td>政治面貌</td>
					<td><input type="text" name="zzmm" value="<?php echo $sql_arr['zzmm']?>"></td>
				</tr>
				<tr>
					<td>省</td>
					<td><input type="text" name="sheng" value="<?php echo $sql_arr['sheng']?>"></td>
				</tr>
				<tr>
					<td>市</td>
					<td><input type="text" name="shi" value="<?php echo $sql_arr['shi']?>"></td>
				</tr>
				<tr>
					<td>县</td>
					<td><input type="text" name="xian" value="<?php echo $sql_arr['xian']?>"></td>
				</tr>
				<tr>
					<td>电子邮箱</td>
					<td><input type="text" name="dzyx" value="<?php echo $sql_arr['dzyx']?>"></td>
				</tr>
				<tr>
					<td>联系电话</td>
					<td><input type="text" name="lxdh" value="<?php echo $sql_arr['lxdh']?>"></td>
				</tr>
				<tr>
					<td>家庭住址</td>
					<td><input type="text" name="jtzz" value="<?php echo $sql_arr['jtzz']?>"></td>
				</tr>
				<tr>
					<td>入学年份</td>
					<td><input type="text" name="rxnf" value="<?php echo $sql_arr['rxnf']?>"></td>
				</tr>
				<tr>
					<td>学院编码</td>
					<td><input type="text" name="xybm" value="<?php echo $sql_arr['xybm']?>"></td>
				</tr>				
				<tr>
					<td>系部编码</td>
					<td><input type="text" name="xbbm" value="<?php echo $sql_arr['xbbm']?>"></td>
				</tr>			
				<tr>
					<td>专业编码</td>
					<td><input type="text" name="zybm" value="<?php echo $sql_arr['zybm']?>"></td>
				</tr>					
				<tr>
					<td>班级编码</td>
					<td><input type="text" name="bjbm" value="<?php echo $sql_arr['bjbm']?>"></td>
				</tr>	
				<tr>
					<td>学籍状态</td>
					<td><input type="text" name="xjzt" value="<?php echo $sql_arr['xjzt']?>"></td>
				</tr>					
				<tr>
					<td></td>
					<td style="text-align: center"><input type="submit"
						;text-align="center;" value="提交"><a href="xs_alter_pass"></td>
				</tr>
		</table>

		</form>
	</center>
	</body>

