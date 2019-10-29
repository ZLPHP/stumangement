<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>学生信息管理</title>
 <script>

 </script>
</head>
<body>



  <?php
  require_once('conn.php');

  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql

  $glyzh = $_POST['glyzh'];
  $glymm = $_POST['glymm'];
  $glyjs = $_POST['glyjs'];
  
  
  $zh_select = "select zh from glyxxb where zh ='".$glyzh."'";
  $result=mysql_query($zh_select);
  $rows=mysql_fetch_array($result);
  //echo $rows[0];
  if($_POST['glyzh']==$rows[0]){?>
<script type="text/javascript">
alert("账号已存在");
window.location.href="gly_add.php";
</script>
<?php 
mysql_close($conn);
break;}
  
  
  
  
  $sql = "insert into glyxxb (zh, mm, js) values ( '$glyzh','$glymm','$glyjs')";
  $info = mysql_query($sql,$conn);
  
  if ($info){?>
      
      <script type="text/javascript">
      alert("写入成功");
      window.location.href="gly_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("写入失败");
					window.location.href="gly_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: gly_add.php');
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

</body>
</html>