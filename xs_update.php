<?php
require_once 'session.php';
$xsxh = $_POST['xh'];
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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>更新学生信息</title>

</head>

<body>

                <form action='xs_up.php' method="post">
                 <label for="inputPassword3" class="col-sm-2 control-label">学号</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  name='xh' value=<?php echo $xsxh?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">姓名</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  name='xm' value=<?php echo $xsxm?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">性别</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  name='xb' value=<?php echo $xsxb?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">出生日期</label>
                <input  name='csrq' value=<?php echo $xscsrq?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">政治面貌</label>
                <input  name='zzmm' value=<?php echo $xszzmm?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">省</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  name='sheng' value=<?php echo $xssheng?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">市</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  name='shi' value=<?php echo $xsshi?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">县</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  name='xian' value=<?php echo $xsxian?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">电子邮箱</label>
                <input  name='dzyx' value=<?php echo $xsdzyx?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">联系电话</label>
                <input  name='lxdh' value=<?php echo $xslxdh?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">家庭住址</label>
                <input  name='jtzz' value=<?php echo $xsjtzz?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">入学年份</label>
                <input  name='rxnf' value=<?php echo $xsrxnf?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">学院编码</label>
                <input  name='xybm' value=<?php echo $xsxybm?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">专业编码</label>
                <input  name='zybm' value=<?php echo $xszybm?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">班级编码</label>
                <input  name='bjbm' value=<?php echo $xsbjbm?>><br>
                    <label for="inputPassword3" class="col-sm-2 control-label">学籍状态</label>
                <input  name='xjzt' value=<?php echo $xsxjzt?>><br>
                <input type='submit' value='更新'>
                </form>


</table>
</body>
</html>     

</table>
</body>
</html>