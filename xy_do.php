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
  $xybm = $_POST['xybm'];
  $xymc = $_POST['xymc'];
  
  
  $xymc_select = "select xymc from xyxxb where xymc ='".$xymc."'";
  $result=mysql_query($xymc_select);
  $rows=mysql_fetch_array($result);
  //echo $rows[0];
  if($_POST['xymc']==$rows[0]){?>
<script type="text/javascript">
alert("学院名称已存在");
window.location.href="xy_add.php";
</script>
<?php 
mysql_close($conn);
break;}
  
  
  
  
  $sql = "insert into xyxxb (xybm,xymc) values ('$xybm', '$xymc')";
  $info = mysql_query($sql,$conn);
  
  if ($info){?>
      
      <script type="text/javascript">
      alert("写入成功");
      window.location.href="xy_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("写入失败");
					window.location.href="xy_add.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

</body>
</html>