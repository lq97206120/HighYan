<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>配置权限</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbacpublic.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbac.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script>
	$(function(){
		$('input[level=1]').click(function(){
			var inputs=$(this).parents('.app').find('input');//parents(selector)遍历此集合中的所有标签
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
		$('input[level=2]').click(function(){
			var inputs=$(this).parents('dl').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
	});
</script>
</head>
<body>
<form action='<?php echo U('Admin/Rbac/accessHandle');?>' method='post'>
		<div id='wrap'>
			<a  class='add-app' href="<?php echo U('Admin/Rbac/role');?>">返回</a>
			<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
					<p>
						<strong><?php echo ($app["title"]); ?></strong>
						<input type='checkbox' name='access[]' value='<?php echo ($app["id"]); ?>_1' level='1' <?php if($app["access"]): ?>checked='checked'<?php endif; ?> />
					</p>
					<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
	  						<dt>
							<strong><?php echo ($action["title"]); ?></strong>
						    <input type='checkbox' name='access[]' value='<?php echo ($action["id"]); ?>_2' level='2' <?php if($action["access"]): ?>checked='checked'<?php endif; ?>/>
	  					    </dt>
	  				    <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
	  							<span><?php echo ($method["title"]); ?></span>
								<input type='checkbox' name='access[]' value='<?php echo ($method["id"]); ?>_3' level='3' <?php if($method["access"]): ?>checked='checked'<?php endif; ?>/>
	  						</dd><?php endforeach; endif; ?>
	  					</dl><?php endforeach; endif; ?>
				</div><?php endforeach; endif; ?>
		</div>
		<input type='hidden' name='rid' value='<?php echo ($rid); ?>'/>
		<input type='submit' align='center' value='保存' style='display:block;margin:20px auto;cursor:pointer;width:70px;height:35px;'/>
	</form>
</body>
</html>