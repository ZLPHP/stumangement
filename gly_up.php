
<?php

require_once('conn.php');
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $glyid = $_POST['id'];
  echo $glyid;
  $glyzh = $_POST['zh'];
  $glymm = $_POST['mm'];
  $glyjs = $_POST['js'];

  $sql_update = "update glyxxb set id ='".$glyid."' , zh ='".$glyzh."' , mm ='".$glymm."' , js ='".$glyjs."'
where id='".$glyid."'";
//   $sql = "update myapp.stu set name='jike',sex='女', age=24,classid=44 where id=17";
  
  $info = mysql_query($sql_update,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("更新成功");
      window.location.href="gly_li.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("更新失败");
					window.location.href="gly_li.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 

