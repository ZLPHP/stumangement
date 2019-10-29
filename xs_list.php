<?php
require_once 'session.php';
require_once 'conn.php';
mysql_query("set names 'utf8'");

$gly_num=mysql_num_rows(mysql_query("select * from xsxxb "));
$sql = "SELECT * FROM xsxxb";
$result=mysql_query($sql);


if ($gly_num > 0) {
    // 输出数据
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>学院列表</title>
<style>
#customers
{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	width:100%;
	border-collapse:collapse;
}
#customers td, #customers th 
{
	font-size:1em;
	border:1px solid #000000;
	padding:3px 7px 2px 7px;
}
#customers th 
{
	font-size:1.1em;
	text-align:left;
	padding-top:5px;
	padding-bottom:4px;
	background-color:#D8D8D8;
	color:#ffffff;
}
#customers tr.alt td 
{
	color:#000000;
	background-color:#EAF2D3;
}
div{
	display:inline-block;
}
</style>
</head>

<body>
 <h3>查询管理员信息</h3>
<form action="xs_search.php" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入学号"  name="xh" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
</form>
<br>
<br>
<table id="customers">
<tr>
							<th>学号</th>
							<th>姓名</th>
							<th>性别</th>
							<th>出生日期</th>
							<th>政治面貌</th>
							<th>省</th>
							<th>市</th>
							<th>县</th>
							<th>电子邮箱</th>
							<th>联系电话</th>
							<th>家庭住址</th>
							<th>入学年份</th>
							<th>学院编码</th>
							<th>系部编码</th>
							<th>专业编码</th>
							<th>班级编码</th>
							<th>学籍状态</th>
  <th>操作</th>

</tr>
<?php    while($row = mysql_fetch_array($result)) {?>
		<tr>
		
			<td align="center"><?php echo  $row["xh"] ?></td>
			<td align="center"><?php echo  $row["xm"] ?></td>
			<td align="center"><?php echo  $row["xb"] ?></td>
			<td align="center"><?php echo  $row["csrq"] ?></td>
			<td align="center"><?php echo  $row["zzmm"] ?></td>
			<td align="center"><?php echo  $row["sheng"] ?></td>
			<td align="center"><?php echo  $row["shi"] ?></td>
			<td align="center"><?php echo  $row["xian"] ?></td>
	        <td align="center"><?php echo  $row["dzyx"] ?></td>
			<td align="center"><?php echo  $row["lxdh"] ?></td>
		    <td align="center"><?php echo  $row["jtzz"] ?></td>
			<td align="center"><?php echo  $row["rxnf"] ?></td>
			<td align="center"><?php echo  $row["xybm"] ?></td>
			<td align="center"><?php echo  $row["xbbm"] ?></td>
			<td align="center"><?php echo  $row["zybm"] ?></td>
			<td align="center"><?php echo  $row["bjbm"] ?></td>
			<td align="center"><?php echo  $row["xjzt"] ?></td>


			<td align="center">
			<div>
			<form action='xs_delete.php' method="post">
                <input type='hidden' name='xh' value=<?php echo $row["xh"]?>>
                <input type='submit' value='删除'>
             </form>
             </div>
             <div>
                <form action='xs_update.php' method="post">
                <input type="hidden" name='xh' value=<?php echo $row["xh"]?>>
                <input type='hidden' name='xm' value=<?php echo $row["xm"]?>>
                <input type='hidden' name='xb' value=<?php echo $row["xb"]?>>
                <input type='hidden' name='csrq' value=<?php echo $row["csrq"]?>>
                <input type='hidden' name='zzmm' value=<?php echo $row["zzmm"]?>>
                <input type='hidden' name='sheng' value=<?php echo $row["sheng"]?>>
                <input type='hidden' name='shi' value=<?php echo $row["shi"]?>>
                <input type='hidden' name='xian' value=<?php echo $row["xian"]?>>
                <input type='hidden' name='dzyx' value=<?php echo $row["dzyx"]?>>
                <input type='hidden' name='lxdh' value=<?php echo $row["lxdh"]?>>
                <input type='hidden' name='jtzz' value=<?php echo $row["jtzz"]?>>
                <input type="hidden" name='rxnf' value=<?php echo $row["rxnf"]?>>
                <input type='hidden' name='xybm' value=<?php echo $row["xybm"]?>>
                <input type='hidden' name='xbbm' value=<?php echo $row["xbbm"]?>>
				<input type='hidden' name='zybm' value=<?php echo $row["zybm"]?>>
                <input type='hidden' name='bjbm' value=<?php echo $row["bjbm"]?>>
                <input type='hidden' name='xjzt' value=<?php echo $row["xjzt"]?>>
                <input type='submit' value='更新'>
                </form>
                </div>

             </td>
		</tr>
 											<?php }       
    
} else {
    echo "0 结果";
}

mysql_close($conn);
?>

</table>
</body>
</html>