<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商品分配设置</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbacpublic.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbac.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script>
	$(function(){
		$('input[level=2]').click(function(){
			var inputs=$(this).parents('dl').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
	});
</script>
</head>
<body>
<form action='<?php echo U('Admin/Goods/shoplistHandle');?>' method='post'>
		<div id='wrap'>
			<a  class='add-app' href="<?php echo U('Admin/Goods/index');?>">返回</a>
				<div class='app'>
					<dl>
  						<dt>
							<strong>单位名称(编号)：</strong><span><?php echo ($goods["gname"]); ?>(<?php echo ($goods["gnum"]); ?>)</span>
							<input type='checkbox'  level='2'/>
						</dt>
  				    <?php if(is_array($shop)): foreach($shop as $key=>$v): ?><dd>
  							<span><?php echo ($v["sname"]); ?></span>
							<input type='checkbox' name='shop[]' value="<?php echo ($v['sid']); ?>" <?php if($v["assign"]): ?>checked='checked'<?php endif; ?>/>
  						</dd><?php endforeach; endif; ?>
  					</dl>
				 
				</div>
		
			
		</div>
		<input type='hidden' name='gid' value="<?php echo ($goods['gid']); ?>"/>
		<input type='submit' align='center' value='保存' style='display:block;margin:20px auto;cursor:pointer;width:70px;height:35px;color:#000;'/>
	</form>
</body>
</html>