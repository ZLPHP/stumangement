
<?php

require_once('conn.php');
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $xybm = $_POST['xybm'];
  $xymc = $_POST['xymc'];
  $id = $_POST['id'];
  echo $xybm;
  echo $xymc;

  $sql_update = "update xyxxb set xybm ='$xybm' , xymc ='$xymc' where id='$id'";

  
  $info = mysql_query($sql_update,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("更新成功");
      window.location.href="xy_list.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("更新失败");
					window.location.href="xy_list.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 

