
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
  echo $xsxh;
  $xsxm = $_POST['xm'];
  $xsxb = $_POST['xb'];
  $xscsrq = $_POST['csrq'];
  $xszzmm = $_POST['zzmm'];
  $xssheng = $_POST['sheng'];
  $xsshi = $_POST['shi'];
  $xsxian = $_POST['xian'];
  $xsdzyx = $_POST['dzyx'];
  $xslxdh = $_POST['lxdh'];
  $xsjtzz = $_POST['jtzz'];
  $xsrxnf = $_POST['rxnf'];
  $xsxybm = $_POST['xybm'];
  $xsxbbm = $_POST['xbbm'];
  $xsxybm = $_POST['xybm'];
  $xszybm = $_POST['zybm'];
  $xsbjbm = $_POST['bjbm'];
  $xsxjzt = $_POST['xjzt'];

  $sql_update = "update xsxxb set xh ='".$xsxh."' , xm ='".$xsxm."' , xb ='".$xsxb."' , csrq ='".$xscsrq."', csrq ='".$xscsrq."',
                 zzmm ='".$xszzmm."', sheng ='".$xssheng."', shi ='".$xsshi."', xian ='".$xsxian."', dzyx ='".$xsdzyx."',
                 lxdh ='".$xslxdh."', jtzz ='".$xsjtzz."', rxnf ='".$xsrxnf."', xybm ='".$xsxybm."', xbbm ='".$xsxbbm."',
                 xybm ='".$xsxybm."', zybm ='".$xszybm."', bjbm ='".$xsbjbm."', xjzt ='".$xsxjzt."' where xh='".$xsxh."'";
//   $sql = "update myapp.stu set name='jike',sex='女', age=24,classid=44 where id=17";
  
  $info = mysql_query($sql_update,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("更新成功");
      window.location.href="xs_list.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("更新失败");
					window.location.href="xs_list.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 

