<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>学生信息管理</title>
<link href=".\css\bootstrap.css" rel="stylesheet">
<script src=".\js\bootstrap.min.js"></script>
</head>
<body>

<h3 align="justify">添加学生信息</h3>
<br>
<br>
<br>
<form class="form-horizontal" action="xs_do.php" method="post">

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">学号</label>
    <div class="col-sm-10">
      <input  class="form-control"  name="xh" >
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">姓名</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xm" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">性别</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xb" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">出生日期</label>
    <div class="col-sm-10">
      <input  class="form-control" name="csrq" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">政治面貌</label>
    <div class="col-sm-10">
      <input  class="form-control" name="zzmm" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">省</label>
    <div class="col-sm-10">
      <input  class="form-control" name="sheng" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">市</label>
    <div class="col-sm-10">
      <input  class="form-control" name="shi" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">县</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xian" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">电子邮箱</label>
    <div class="col-sm-10">
      <input  class="form-control" name="dzyx" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">联系电话</label>
    <div class="col-sm-10">
      <input  class="form-control" name="lxdh" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">家庭住址</label>
    <div class="col-sm-10">
      <input  class="form-control" name="jtzz" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">入学年份</label>
    <div class="col-sm-10">
      <input  class="form-control" name="rxnf" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">学院编码</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xybm" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">系部编码</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xbbm" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">专业编码</label>
    <div class="col-sm-10">
      <input  class="form-control" name="zybm" >
    </div>
  </div>
        <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">班级编码</label>
    <div class="col-sm-10">
      <input  class="form-control" name="bjbm" >
    </div>
  </div>
        <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">学籍状态</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xjzt" >
    </div>
  </div>
  


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">添加</button>
    </div>
  </div>
</form>
</body>
</html>