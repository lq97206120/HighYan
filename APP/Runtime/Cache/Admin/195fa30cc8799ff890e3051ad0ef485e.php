<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户列表</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbacpublic.css" />
</head>
<body>
	<table class='table'>
		<tr>
			<th>ID</th>
			<th>编号</th>
			<th>姓名</th>
			<th>上次登录时间</th>
			<th>上次登录ip</th>
			<th>状态</th>
			<th>所属组别</th>
			<th>操作</th>
	    </tr>
		<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
     			<td><?php echo ($v["uid"]); ?></td>
     			<td><?php echo ($v["unum"]); ?></td>
     			<td><?php echo ($v["uname"]); ?></td>
     			<td><?php echo (date('y-m-d H:i',$v["ulogintime"])); ?></td>
     			<td><?php echo ($v["uloginip"]); ?></td>
     			<td>
     				<?php if($v["ustatus"]): ?>已开启<?php else: ?>已关闭<?php endif; ?>
     			</td>
     			<td>
					<?php if($v['unum'] == C('RBAC_SUPERADMIN')): ?>超级管理员<?php else: ?>
						<ul>
	     					<?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
	     				</ul><?php endif; ?>
     			</td>
     			<td>
     				<a href=''>锁定</a>
     			</td>
     		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>