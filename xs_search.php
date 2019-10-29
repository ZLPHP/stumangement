<?php
error_reporting(0);//加上error_reporting(0);就不会弹出警告了
$id=$_GET['id'];
echo $id;
?>
<style type="text/css">

table {
	border: 1px solid black;
	padding: 17px;
	border-collapse: collapse;
	color: balck;
	background: #FFF;
}

table tr th {
	border: 1px solid black;
	border-color: #212121;
	font-size: 15px;
	padding: 13px;
	border-collapse: collapse;
}

table tr td {
	border: 1px solid black;
	border-color: #212121;
	font-size: 12px;
	padding: 10px;
	border-collapse: collapse;
}
</style>
<body>
<center>
    <div style="font-size: 18px;height: 40px;">
		<tr>
			<td></td>
			<td style="text-align: center;font-size: 18px;">查询学生信息</td>
		</tr>
	</div>
<form action="#" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入学生id"  name="id" maxlength="8" style="
	height: 32px;
	line-height: 32px;
	width: 200px;
	margin-top: 19px;
	padding-left: 40px;"/>
<input type="submit" value="查询" id="btn_search" style="
    width: 80px;
	height: 32px;
	margin: 0 auto;
	line-height: 32px;
	background: #A27EA4;
	color: #FFF;
	margin-top: 30px;
	font-weight: bold;
	border: 0px;">
<a href='xs_list.php'> 学生列表</a>
</form>


            <div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>id</th>
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

						</tr>
					</thead>
            </div>
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

  //2.执行sql
  $id = $_POST['id'];
  $sql_select = "select * from xsxxb where id ='".$id."'";
  
  $result=mysql_query($sql_select);
  $rows=mysql_fetch_array($result);

  //3. 解析
  $num=mysql_num_rows($result);
  if ($num>0){
      echo "<tr>";
      echo "<td>{$rows['id']}</td>";
      echo "<td>{$rows['xh']}</td>";
      echo "<td>{$rows['xm']}</td>";
      echo "<td>{$rows['xb']}</td>";
      echo "<td>{$rows['csrq']}</td>";
      echo "<td>{$rows['zzmm']}</td>";
      echo "<td>{$rows['sheng']}</td>";
      echo "<td>{$rows['shi']}</td>";
      echo "<td>{$rows['xian']}</td>";
      echo "<td>{$rows['dzyx']}</td>";
      echo "<td>{$rows['lxdh']}</td>";
      echo "<td>{$rows['jtzz']}</td>";
      echo "<td>{$rows['rxnf']}</td>";
      echo "<td>{$rows['xybm']}</td>";
      echo "<td>{$rows['xbbm']}</td>";
      echo "<td>{$rows['zybm']}</td>";
      echo "<td>{$rows['bjbm']}</td>";
      echo "<td>{$rows['xjzt']}</td>";
      echo "</tr>";}

      mysql_close($conn);
  ?>
  </center>
 </table>
</body>
