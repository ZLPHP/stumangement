
<?php
require_once('conn.php');

  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $glyid = $_POST['id'];
  echo $glyid;

  $sql_del = "delete from glyxxb where id ='".$glyid."'";
  $info = mysql_query($sql_del,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("删除成功");
      window.location.href="gly_li.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("删除失败");
					window.location.href="gly_li.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 

