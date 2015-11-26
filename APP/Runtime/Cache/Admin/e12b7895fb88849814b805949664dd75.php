<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>后台登陆界面</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/login.css">
	<script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
	<script>
		var verifyURL='<?php echo U(GROUP_NAME.'/Login/verify');?>';//GROUP_NAME是系统常量
	</script>
</head>
<body>
	<div class="login">
		<form action="<?php echo U(GROUP_NAME.'/Login/login');?>" methods="post" id="login">
			<div class="title">
				后台登陆
			</div>
			<table border="1" width="100%">
				<tr>
					<th>帐号:</th>
					<td>
						<input type="username" name="username" class="len250"/>
					</td>
				</tr>
				<tr>
					<th>密码:</th>
					<td>
						<input type="password" class="len250" name="password"/>
					</td>
				</tr>
				<tr>
					<th>验证码:</th>
					<td>
						<input type="code" class="len100" name="code"/> <img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" id="code" style="padding-left:10px;"/> <a href="javascript:void(change_code(this));">看不清</a>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left:180px;"> <input type="submit" class="submit" value="登录" /></td>
				</tr>
</body>
</html>