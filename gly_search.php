<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>学生信息管理</title>
 <script>

 </script>
</head>
<body>
 <h3>查询管理员信息</h3>
<form action="#" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入管理员ID"  name="glyid" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
<a href='gly_li.php'> 管理員列表</a>
</form>


 <table width="500" border="1">
  <tr>
   <th>ID</th>
   <th>账号</th>
   <th>密码</th>
   <th>角色</th>
  </tr>
  <?php

  require_once('conn.php');
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $glyid = $_POST['glyid'];
  

  $sql_select = "select * from glyxxb where id ='".$glyid."'";
  
   
  
  
  $result=mysql_query($sql_select);
  $rows=mysql_fetch_array($result);

  //3. 解析
  $num=mysql_num_rows($result);
  if ($num>0){
      echo "<tr>";
      echo "<th>{$rows['id']}</th>";
      echo "<th>{$rows['zh']}</th>";
      echo "<th>{$rows['mm']}</th>";
      echo "<th>{$rows['js']}</th>";

      echo "</tr>";}

      mysql_close($conn);
  ?>
 </table>

</body>
</html>