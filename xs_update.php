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
                <input  name='xh' value=<?php echo $xsxh?>><br>
                <input  name='xm' value=<?php echo $xsxm?>><br>
                <input  name='xb' value=<?php echo $xsxb?>><br>
                <input  name='csrq' value=<?php echo $xscsrq?>><br>
                <input  name='zzmm' value=<?php echo $xszzmm?>><br>
                <input  name='sheng' value=<?php echo $xssheng?>><br>
                <input  name='shi' value=<?php echo $xsshi?>><br>
                <input  name='xian' value=<?php echo $xsxian?>><br>
                <input  name='dzyx' value=<?php echo $xsdzyx?>><br>
                <input  name='lxdh' value=<?php echo $xslxdh?>><br>
                <input  name='jtzz' value=<?php echo $xsjtzz?>><br>
                <input  name='rxnf' value=<?php echo $xsrxnf?>><br>
                <input  name='xybm' value=<?php echo $xsxybm?>><br>
                <input  name='zybm' value=<?php echo $xszybm?>><br>
                <input  name='bjbm' value=<?php echo $xsbjbm?>><br>
                <input  name='xjzt' value=<?php echo $xsxjzt?>><br>
                <input type='submit' value='更新'>
                </form>


</table>
</body>
</html>     

</table>
</body>
</html>