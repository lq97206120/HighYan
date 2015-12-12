<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>后台登陆界面</title>
	<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css"/>
	<script type="text/javascript" src="__PUBLIC__/Js/js.js"></script>
	<script>
		var verifyURL='<?php echo U(GROUP_NAME.'/Login/verify');?>';//GROUP_NAME是系统常量
	</script>
	
</head>
<body>
<div id="top"> </div>
<form id="login" name="login" action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post">
  <div id="center">
    <div id="center_left"></div>
    <div id="center_middle">
      <div class="user">
        <label>用户名：
        <input type="text" name="user" id="user" />
        </label>
      </div>
      <div class="user">
        <label>密　码：
        <input type="password" name="pwd" id="pwd" />
        </label>
      </div>
      <div class="chknumber">
        <label>验证码：
        <input name="chknumber" type="text" id="chknumber" maxlength="4" class="chknumber_input" />
        </label>
        <img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" id="code" class="yanzhenma"/>
      </div>
    </div>
    <div id="center_middle_right"></div>
    <div id="center_submit">
      <div class="button"> <img src="__PUBLIC__/Images/dl.gif" width="57" height="20" onclick="form_submit()" > </div>
      <div class="button"> <img src="__PUBLIC__/Images/cz.gif" width="57" height="20" onclick="form_reset()"> </div>
    </div>
    <div id="center_right"></div>
  </div>
</body>
</html>