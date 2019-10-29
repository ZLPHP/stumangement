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

  $xh = $_POST['xh'];
  $xm = $_POST['xm'];
  $xb = $_POST['xb'];
  $csrq = $_POST['csrq'];
  $zzmm = $_POST['zzmm'];
  $sheng = $_POST['sheng'];
  $shi = $_POST['shi'];
  $xian = $_POST['xian'];
  $dzyx = $_POST['dzyx'];
  $lxdh = $_POST['lxdh'];
  $jtzz = $_POST['jtzz'];
  $rxnf = $_POST['rxnf'];
  $xybm = $_POST['xybm'];
  $xbbm = $_POST['xbbm'];
  $zybm = $_POST['zybm'];
  $bjbm = $_POST['bjbm'];
  $xjzt = $_POST['xjzt'];

  
  $xh_select = "select xh from xsxxb where xh ='$xh'";
  $result=mysql_query($xh_select);
  $rows=mysql_fetch_array($result);
  //echo $rows[0];
  if($_POST['xh']==$rows[0]){?>
<script type="text/javascript">
alert("学号已存在");
window.location.href="xs_add.php";
</script>
<?php 
mysql_close($conn);
break;}
  
  
  
  
$sql = "insert into xsxxb (xh,xm,xb,csrq,zzmm,sheng,shi,xian,dzyx,lxdh,jtzz,rxnf,xybm,xbbm,zybm,bjbm,xjzt) values ('$xh','$xm','$xb','$csrq','$zzmm','$sheng','$shi','$xian','$dzyx','$lxdh','$jtzz','$rxnf','$xybm','$xbbm','$zybm','$bjbm','$xjzt')";
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