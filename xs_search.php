<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>学生信息管理</title>
 <script>

 </script>
</head>
<body>
 <h3>查询学生信息</h3>
<form action="#" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入学号"  name="xh" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
<a href='xs_list.php'> 学生列表</a>
</form>


 <table width="500" border="1">
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
   <th>所属学院</th>
   <th>所属系部</th>
   <th>所属专业</th>
   <th>所属班级</th>
   <th>学籍状态</th>
  </tr>
  <?php

//  1. 链接数据库
//使用define函数定义数据库服务器地址、用户名和密码常量
  define("HOST","localhost");
  define("USER","root");
  define("PASSWD","123456");
  //使用mysql_connect()函数，连接数据服务器
  $conn=mysql_connect(HOST,USER,PASSWD);
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $xsxh = $_POST['xh'];
  

  $sql_select = "select * from xsxxb where xh ='".$xsxh."'";
  
   
  
  
  $result=mysql_query($sql_select);
  $rows=mysql_fetch_array($result);

  //3. 解析
  $num=mysql_num_rows($result);
  if ($num>0){
      echo "<tr>";
      echo "<th>{$rows['xh']}</th>";
      echo "<th>{$rows['xm']}</th>";
      echo "<th>{$rows['xb']}</th>";
      echo "<th>{$rows['csrq']}</th>";
      echo "<th>{$rows['zzmm']}</th>";
      echo "<th>{$rows['sheng']}</th>";
      echo "<th>{$rows['shi']}</th>";
      echo "<th>{$rows['xian']}</th>";
      echo "<th>{$rows['dzyx']}</th>";
      echo "<th>{$rows['lxdh']}</th>";
      echo "<th>{$rows['jtzz']}</th>";
      echo "<th>{$rows['rxnf']}</th>";
      echo "<th>{$rows['xybm']}</th>";
      echo "<th>{$rows['xbbm']}</th>";
      echo "<th>{$rows['zybm']}</th>";
      echo "<th>{$rows['bjbm']}</th>";
      echo "<th>{$rows['xjzt']}</th>";

      echo "</tr>";}

      mysql_close($conn);
  ?>
 </table>

</body>
</html>