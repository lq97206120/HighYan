<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加用户</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbacpublic.css" />
<style>
	.add-role{
		display:inline-block;
		background:#ddd333;
		width:100px;
		height:26px;
		line-align:26px;
		text-align:center;
		border:1px solid blue;
		border-radius:4px;
		margin-left:20px;
		padding-top:6px;
		cursor:pointer;
	}
</style>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>

<script type='text/javascript'>
	$(function(){
		$('.add-role').click(function(){
		
			var obj=$(this).parents('tr').clone();
			obj.find('.add-role').remove();
			$('#last').before(obj);
		});
	});
</script>
</head>
<body>
<form action='<?php echo U('Admin/Rbac/addUserHandle');?>' method='post'>
	<table class='table'>
		<tr>
			<th colspan='2' align='center'>添加用户</th>
		</tr>
		<tr>
			<td align='right'>编号：</td>
			<td>
				<input type='text' name='usernum'/>
			</td>
		</tr>
		<tr>
			<td align='right'>姓名：</td>
			<td>
				<input type='text' name='username'/>
			</td>
		</tr>
		<tr>
			<td align='right'>密码:</td> 
			<td>
				<input type='password' name='password'>
			</td>
		</tr>
		<tr>
		<tr>
			<td align='right'>是否开启：</td>
			<td>
			<input type='radio' name='status' value='1' checked='checked'/>
			&nbsp;开启&nbsp;
			<input type='radio' name='status' value='0'/>&nbsp;关闭&nbsp;
			</td>
		</tr>
			<td align='right'>所属角色：</td> 
			<td>
				<select name='role_id[]'>
					<option>请选择角色</option>
					<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value='<?php echo ($v['id']); ?>'><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
				</select>
				<!span class='add-role'></span>
			</td>
		</tr>
        <tr id='last'>
			<td colspan='2' align='center'>
				<input type='submit' value='保存修改' style='cursor:pointer;'/>
			</td>
		</tr>

	</table>
</form>
</body>
</html>