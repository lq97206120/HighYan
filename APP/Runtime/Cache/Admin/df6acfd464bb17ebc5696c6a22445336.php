<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>节点列表</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbacpublic.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbac.css" />
</head>
<body>
	<div id='wrap'>
		<a  class='add-app' href="<?php echo U('Admin/Rbac/addNode');?>">添加应用</a>
		<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
				<p>
					<strong><?php echo ($app["title"]); ?></strong>
					<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>
				</p>
				<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
  						<dt>
						<strong><?php echo ($action["title"]); ?></strong>
					    <a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>3));?>">添加方法</a>
  					    </dt>
  				    <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
  							<span><?php echo ($method["title"]); ?></span>
  							<a href=''>修改</a>
  							<a href=''>删除</a>
  						</dd><?php endforeach; endif; ?>
  					</dl><?php endforeach; endif; ?>
			</div><?php endforeach; endif; ?>
	</div>
</body>
</html>